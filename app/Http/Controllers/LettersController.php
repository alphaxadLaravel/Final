<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LettersController extends Controller
{
    //upload letter here
    public function upload(Request $request){
       
        request()->validate([
            'file' => 'required|mimes:pdf|max:200048',
        ]);

        $hod_id = session()->get('user')['id'];
        $hod_faculty = session()->get('user')['faculty_id'];
        $data = Letter::where('faculty_id', '=', $hod_faculty)->first();
        
        if($data){

            $fileName = time().'.'.request('file')->extension();  

            request('file')->move(public_path('letters'), $fileName);
    
            $path = 'letters/'.$fileName;

            Letter::where('id',$data->id)->update([
                'path'=>$path
            ]);

            session()->flash('updated', 'Updated successfulyy!!');

            return redirect('/field_letter');

        }else{
            
            $fileName = time().'.'.request('file')->extension();  

            request('file')->move(public_path('letters'), $fileName);
    
            $path = 'letters/'.$fileName;

            Letter::Create([
                'hod_id' => $hod_id,
                'faculty_id' => $hod_faculty,
                'path'=>$path
            ]);

            session()->flash('uploaded', 'file uploaded successfulyy!!');
            return redirect('/field_letter');
        }
    }

    // show letter here
    public function showLetter(){
        
        $hod_faculty = session()->get('user')['faculty_id'];
        $application = Letter::where('faculty_id', '=', $hod_faculty)->first();

        return view('common.field_letter', [
            'application'=>$application,
        ]);

    }

    // download the letter here
    public function downloadLetter(){
        $faculty_id = session()->get('user')['faculty_id'];

        $file = Letter::where('faculty_id', '=', $faculty_id)->first();
        return response()->download(public_path($file->path));
    }
}

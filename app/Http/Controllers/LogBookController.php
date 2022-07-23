<?php

namespace App\Http\Controllers;

use App\Models\CampSupervision;
use App\Models\IfmSupervision;
use App\Models\Logbook;
use App\Models\Response;
use App\Models\Student;
use Illuminate\Http\Request;

class LogBookController extends Controller
{
    //fill logbook here
    public function fillLogbook()
    {
        
        // student_id 	host_id 	supervisor_id 	week 	day 	task 	lesson 	status 
        request()->validate([
            'task' => 'required|string|min:150|max:500',
            'lesson' => 'required|string|min:150|max:500',
            'week' => 'required|string',
            'day' => 'required|string',
        ]);

        $studentID = session()->get('user')['id'];

        $camp = CampSupervision::where('student_id', $studentID)->first();

        $ifm = IfmSupervision::where('student_id', $studentID)->first();

        if ($ifm && $camp) {

            Logbook::Create([
                'student_id' => $studentID,
                'host_id' => $camp->host_id,
                'supervisor_id' => $ifm->supervisor_id,
                'lesson' => request('lesson'),
                'task' => request('task'),
                'week' =>  request('week'),
                'day' =>  request('day'),
                'status' => "On Time",
            ]);

            session()->flash('filledLogbook', 'Logbook filled  successfulyy!!');

            return redirect('/logbook_preview');
        } else {
            session()->flash('wait');
            return redirect('/fill_logbook');

            
        }
    }

    public function previewLogbook(){

        $user_id = session()->get('user')['id'];

        $logbook = LogBook::where('student_id',$user_id)->get();

        return view('common.logbook_preview',['logbook'=>$logbook]);
        
    }

    public function studentlogbook($id){

        $logbook = LogBook::where('student_id',$id)->get();
        $student = Student::where('id',$id)->first();

        return view('common.logbook_preview',['logbook'=>$logbook, 'student'=>$student]);
    }
}

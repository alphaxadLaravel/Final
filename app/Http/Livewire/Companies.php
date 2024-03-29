<?php

namespace App\Http\Livewire;

use App\Models\Field;
use App\Models\StudentRequest;
use Livewire\Component;
use Livewire\WithPagination;

class Companies extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $hod_faculty = session()->get('user')['faculty_id'];
        $student_requests = StudentRequest::where('faculty_id', '=', $hod_faculty)->orderBy('id','DESC')->paginate(5);
        
        $students_show = StudentRequest::where('faculty_id', '=', $hod_faculty)->where('status','=','Accepted!')->orderBy('id','DESC')->paginate(5);
       
        $student_id = session()->get('user')['id'];

        $company = Field::where('student_id', $student_id)->first();
        // dd($has_field);
        return view('livewire.companies',['student_requests'=>$student_requests,'students_show'=>$students_show, 'company'=>$company]);
    }
}

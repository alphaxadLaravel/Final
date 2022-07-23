<?php

namespace App\Http\Livewire;

use App\Models\CampSupervision;
use App\Models\Field;
use App\Models\IfmSupervision;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{

    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if (session()->get('role')== 'hod'){
            $hod_faculty = session()->get('user')['faculty_id'];
    
            $students = Student::where('faculty_id', '=', $hod_faculty)->orderBy('id', 'DESC')->paginate(8);
    
            return view('livewire.students',['students'=>$students]);
        }

        if (session()->get('role')== 'supervisor'){
            $supervisor = session()->get('user')['faculty_id'];
            $supervisor_id = session()->get('user')['id'];
    
            $superviside = IfmSupervision::where('faculty_id', $supervisor)->where('supervisor_id', $supervisor_id)->orderBy('id', 'DESC')->paginate(8);
    
            return view('livewire.students',['superviside'=>$superviside]);
        }

        if (session()->get('role')== 'host'){
            $company_id = session()->get('user')['company_id'];
            $supervisor_id = session()->get('user')['id'];
    
            $superviside = CampSupervision::where('company_id', $company_id)->where('host_id', $supervisor_id)->orderBy('id', 'DESC')->paginate(8);
    
            return view('livewire.students',['superviside'=>$superviside]);
        }
       
    }
}

<?php

namespace App\Http\Livewire;

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

        $hod_faculty = session()->get('user')['faculty_id'];
        $online_staff = session()->get('user')['id'];

        // $staff_id = Staff::where('user_id', $online_staff)->first();

        $students = Student::where('faculty_id', '=', $hod_faculty)->orderBy('id', 'DESC')->paginate(8);
        // $superviside = IfmSupervision::where('faculty_id', '=', $hod_faculty)->where('staff_id', '=', $staff_id->id)->orderBy('id', 'DESC')->paginate(8);

        return view('livewire.students',['students'=>$students]);
    }
}

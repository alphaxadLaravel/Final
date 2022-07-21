<?php

namespace App\Http\Livewire;

use App\Models\Supervisor;
use Livewire\Component;
use Livewire\WithPagination;

class AllSupervisors extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        
        $hod_faculty = session()->get('user')['faculty_id'];
        $supervisors = Supervisor::where('faculty_id', '=', $hod_faculty)->orderBy('id','DESC')->paginate(5);

        return view('livewire.all-supervisors',['supervisors'=>$supervisors]);
    }
}

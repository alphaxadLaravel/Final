<?php

namespace App\Http\Livewire;

use App\Models\Field;
use Livewire\Component;
use Livewire\WithPagination;

class Allocations extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $hod_faculty = session()->get('user')['faculty_id'];
        $allocations  = Field::where('faculty_id', '=', $hod_faculty)->orderBy('id', 'DESC')->paginate(5);

        return view('livewire.allocations',['alloctions'=>$allocations]);
    }
}

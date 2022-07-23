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
        $supervisor = session()->get('user')['faculty_id'];
        $supervisor_id = session()->get('user')['id'];
        $allocations  = Field::where('supervisor_id', $supervisor_id)->orderBy('id', 'DESC')->get();
        return view('livewire.allocations',['alloctions'=>$allocations]);
    }
}

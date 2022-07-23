<?php

namespace App\Http\Livewire;

use App\Models\Logbook;
use Livewire\Component;
use Livewire\WithPagination;

class StudentLogBooks extends Component
{
       // paginating here
       use WithPagination;

       // allow pagination styles with bootstrap here
   
       protected $paginationTheme = 'bootstrap';
   
    public function render()
    {
        $supervisor = session()->get('user')['id'];
        $logbooks = Logbook::where('supervisor_id', $supervisor)->orderBy('id','DESC')->paginate(5);

        return view('livewire.student-log-books',['logbooks'=>$logbooks]);
    }
}

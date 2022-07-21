<?php

namespace App\Http\Livewire;

use App\Models\StudentRequest;
use Livewire\Component;
use Livewire\WithPagination;

class MyRequest extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $hr_id = session()->get('user')['id'];

        $requests = StudentRequest::where('hr_id', '=', $hr_id)->orderBy('id', 'DESC')->paginate(8);

        return view('livewire.my-request',['requests'=>$requests]);
    }
}

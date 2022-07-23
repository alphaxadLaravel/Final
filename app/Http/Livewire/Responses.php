<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Response;
use Livewire\Component;
use Livewire\WithPagination;

class Responses extends Component
{    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
       

        if (session()->get('role') == "hr") {

            $hr_id = session()->get('user')['id'];

            $company = Company::where('hr_id', $hr_id)->first();
            $hr_response  = Response::where('company_id', '=', $company->id)->orderBy('id', 'DESC')->paginate(5);

            return view('livewire.responses', ['hr_response' => $hr_response]);
        }

        if (session()->get('role') == "hod") {

            $hod_faculty = session()->get('user')['faculty_id'];

            $responses  = Response::where('faculty_id', '=', $hod_faculty)->orderBy('id', 'DESC')->paginate(5);

            return view('livewire.responses', ['responses' => $responses]);
        }
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Host;
use Livewire\Component;
use  Livewire\WithPagination;
class HostSupervisors extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $hr_id = session()->get('user')['id'];
        $company = Company::where('hr_id', $hr_id)->first();
        $hosts = Host::where('company_id', '=', $company->id)->orderBy('id','DESC')->paginate(5);

        return view('livewire.host-supervisors',['hosts'=>$hosts]);
    }
}

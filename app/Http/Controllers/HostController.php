<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Host;
use App\Models\User;
use Illuminate\Http\Request;

class HostController extends Controller
{
    //go to add host here
    public function goAddHost(){
        $hr_id = session()->get('user')['id'];
        $company = Company::where('hr_id', $hr_id)->first();
        
        $departments = Department::where('company_id', $company->id)->get();

        return view('hr.add_host',['departments'=>$departments]);
    }

    // Add the Host supervisor
    public function addhost(){
        request()->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:hosts',
            'phone' => 'required|unique:hosts',
            'department' => 'required',
        ]);
        $hr_id = session()->get('user')['id'];
        $company = Company::where('hr_id', $hr_id)->first();
        // ser_id 	department_id 	company_id 	username 	fullname 	phone 	email 	status
        $check_host = Host::where('username', request('username'))->first();

        if($check_host){
            session()->flash('error', '');
            return redirect('/add_host');
        }else{

            // create email & send this password
            $password = "1234";

            $new_user = User::Create([
                'username'=>request('username'),
                'password'=>$password,
                'role'=>"host",
            ]);

            Host::Create([
                'user_id'=> $new_user->id,
                'department_id'=>request('department'),
                'company_id'=> $company->id,
                'username'=>request('username'),
                'fullname'=>request('fullname'),
                'phone'=>request('phone'),
                'email'=>request('email'),
            ]);

            session()->flash('added', '');
            return redirect('/host_supervisors');
        }
    }
}

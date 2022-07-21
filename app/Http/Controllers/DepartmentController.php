<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //go to departments here
    public function goDepartment()
    {
        $hr_id = session()->get('user')['id'];
        $company = Company::where('hr_id', $hr_id)->first();

        $departments = Department::where('company_id', $company->id)->get();

        return view('hr.departments', ['departments' => $departments]);
    }

    // add new department here
    public function newDepartment()
    {
        request()->validate([
            'department' => 'required|string|min:3|max:30',
        ]);

        $hr_id = session()->get('user')['id'];
        $company = Company::where('hr_id', $hr_id)->first();

        $check_department = Department::where('department', request('department'))->where('company_id', $company->id)->first();

        if ($check_department) {
            session()->flash('exist', '');
          return redirect('/departments');
        } else {
            Department::Create([
                'company_id' => $company->id,
                'department' => request('department'),
            ]);

            session()->flash('department', '');
          return redirect('/departments');
        }
    }
}

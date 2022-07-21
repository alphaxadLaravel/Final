<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //allow company to send request for students
    public function sendRequest()
    {

        $courses = Course::all();
        return view('hr.make_request', ['courses' => $courses]);
    }

    // show the request form
    public function requestForm()
    {
        request()->validate([
            'course' => 'required',
            'students' => 'required',
            'date_in' => 'required',
            'date_out' => 'required',
        ]);

        $hr_id = session()->get('user')['id'];

        $company = Company::where('hr_id', $hr_id)->first();

        $faculty = Course::where('id', request('course'))->first();


        $request_check = StudentRequest::where('startDate', '=', request('date_in'))->where('course_id', '=', request('course'))->where('hr_id', '=', $hr_id)->first();

        if (request('date_in') < now() || request('date_out') < now()) {
            session()->flash('dates');
            return redirect('/make_request');
        } else {
            if ($request_check) {
                session()->flash('umerudia');
                return redirect('/make_request');
            } else {

                StudentRequest::Create([
                    'company_id' => $company->id,
                    'hr_id' => $hr_id,
                    'faculty_id' => $faculty->faculty_id,
                    'course_id' => request('course'),
                    'students' => request('students'),
                    'startDate' => request('date_in'),
                    'endDate' => request('date_out'),
                    'status' => "pending...",
                ]);

                session()->flash('requested', 'request added successfulyy!!');

                return redirect('/my_requests');
            }
        }
    }
}

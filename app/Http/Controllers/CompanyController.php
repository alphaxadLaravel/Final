<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Course;
use App\Models\Field;
use App\Models\IfmSupervision;
use App\Models\Response;
use App\Models\Student;
use App\Models\StudentRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //allow company to send request for students
    public function  requestForm()
    {
        request()->validate([
            'course' => 'required',
            'students' => 'required',
            'date_in' => 'required',
            'date_out' => 'required',
        ]);
        // faculty_id 	course_id 	company_id 	hr_id 	students 	startDate 	endDate 	status
        $hr_id = session()->get('user')['id'];
        $company = Company::where('hr_id', $hr_id)->first();

        // get the faculy
        $faculty = Course::where('id', request('course'))->first();

        $check_request = StudentRequest::where('hr_id', $hr_id)->where('course_id', request('course'))->where('course_id', request('date_in'))->first();

        if ($check_request) {
            session()->flash('umerudia');
        } else {
            if (request('date_in') < now() || request('date_out') < request('date_in')) {
                session()->flash('dates');
                return redirect('/make_request');
            } else {
                StudentRequest::Create([
                    'faculty_id' => $faculty->faculty_id,
                    'course_id' => request('course'),
                    'company_id' => $company->id,
                    'hr_id' => $hr_id,
                    'students' => request('students'),
                    'startDate' => request('date_in'),
                    'endDate' => request('date_out'),
                    'status' => 'pending...'
                ]);

                session()->flash('requested');
                return redirect('/my_requests');
            }
        }
    }
    public function sendRequest()
    {
        $courses = Course::all();
        return view('hr.make_request', ['courses' => $courses]);
    }

    // Accept Company Here
    public function accept($id)
    {
        $accept = StudentRequest::where('id', $id)->update([
            'status' => "Accepted!"
        ]);

        session()->flash('accepted', '');
        return redirect('/company_list');
    }

    // denie request
    public function denied($id)
    {
        $accept = StudentRequest::where('id', $id)->update([
            'status' => "Denied!"
        ]);

        session()->flash('denied', '');
        return redirect('/company_list');
    }

    // student Acceptance here
    public function studentAccept($id)
    {
        $student_id = session()->get('user')['id'];

        $supervisor = IfmSupervision::where('student_id', $student_id)->first();

        $request_details = StudentRequest::where('id', $id)->first();

        $has_field = Field::where('student_id', $student_id)->first();

        if ($has_field) {
            session()->flash('hasfield', '');
            return redirect('/my_allocation');
        } else {
            if ($supervisor) {
                Field::Create([
                    'student_id' => $student_id,
                    'supervisor_id' => $supervisor->supervisor_id,
                    'company_id' => $request_details->company_id,
                    'gotway' => "Company Accept!",
                ]);
                // request_id 	student_id 	company_id 	faculty_id 	status 	
                Response::Create([
                    'student_request_id' => $id,
                    'student_id' => $student_id,
                    'company_id' => $request_details->company_id,
                    'faculty_id' => $request_details->faculty_id,
                    'status' => "Responded"
                ]);

                session()->flash('allocated', '');
                return redirect('/my_allocation');
            } else {

                session()->flash('supervision', '');
                return redirect('/company_list');

            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Course;
use App\Models\Field;
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

    // Accept Company Here
    public function accept($id)
    {
        $accept = StudentRequest::where('id', $id)->update([
            'status' => "Accepted!"
        ]);

        session()->flash('accepted', '');
        return redirect('/company_list');
    }

    // student Acceptance here
    public function studentAccept($id)
    {
        $student_id = session()->get('user')['id'];

        $has_field = Field::where('student_id', $student_id)->first();

        if ($has_field) {
            session()->flash('hasfield', '');
            return redirect('/my_allocation');
        } else {
            Field::Create([
                'student_id' => $student_id,
                'company_id' => $student_id,
                'gotway' => "Company Accept!",
            ]);

            session()->flash('allocated', '');
            return redirect('/my_allocation');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //go to student profile 
    public function gotoProfile($id){

        $student = Student::where('id', $id)->first();

        $field = Field::where('student_id', $student->id)->first();

        return view('student.profle', ['student'=>$student, 'field'=>$field]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    //show details of allocation hree
    public function showAllocation()
    {

        $student_id = session()->get('user')['id'];
        $allocation = Field::where('student_id', $student_id)->first();
        return view('student.my_allocation', ['allocation' => $allocation]);
    }
}

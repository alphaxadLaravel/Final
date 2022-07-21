<?php

namespace App\Http\Controllers;

use App\Models\IfmSupervision;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    //show single super visor here
    public function single($id){
        return view('hod.single_supervisor',['id'=>$id]);
    }
    // delete the student from supervision
    public function delete($id){
        $student = IfmSupervision::find($id);

        $student->delete();

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Brellah;
use App\Models\HR;
use App\Models\User;
use App\Models\Company;
use App\Models\HOD;
use App\Models\Host;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //register company here
    public function newCompany()
    {
        request()->validate([
            'regNumber' => 'required|string|min:3|max:10',
            'phone' => 'required|numeric|digits:10|unique:h_r_s',
            'email' => 'required|email||unique:h_r_s',
            'username' => 'required|min:3|max:10|unique:users',
        ]);

        $brellah_verify = Brellah::where('regNumber', request('regNumber'))->first();

        $account_verify = Company::where('brellah_id', $brellah_verify->id)->first();

        if ($brellah_verify) {

            if ($account_verify) {
                session()->flash('exist', '');
                return redirect('/register');
            } else {
                $password = "1234";

                $new_user = User::Create([
                    'username' => request('username'),
                    'password'  => $password,
                    'role'  => "hr",
                    'status' => "hr",
                ]);

                $new_hr = HR::Create([
                    'user_id' => $new_user->id,
                    'username' => request('username'),
                    'email'  => request('email'),
                    'phone'  => request('phone'),
                    'status' => "hr",
                ]);

                Company::Create([
                    'brellah_id' => $brellah_verify->id,
                    'hr_id' => $new_hr->id,
                ]);

                session()->flash('registered', '');
                return redirect('/');
            }
        } else {
            dd("halipo");
        }
    }

    // Login users Here
    public function walete()
    {
        request()->validate([
            'password' => 'required',
            'username' => 'required',
        ]);

        $user_check = User::where(['username'=>request('username'),'password'=>request('password')])->first();

        if ($user_check) {

            if ($user_check->role == "hr") {

                $hr_check = HR::where('username', request('username'))->first();
                request()->session()->put('user', $hr_check);
                request()->session()->put('role', $user_check->role);

                return redirect('/dashboard');
            } elseif ($user_check->role == "student") {

                $student_check = Student::where('username', request('username'))->first();
                request()->session()->put('user', $student_check);
                request()->session()->put('role', $user_check->role);

                return redirect('/dashboard');
            } elseif ($user_check->role == "hod") {

                $hod_check = HOD::where('username', request('username'))->first();
                request()->session()->put('user', $hod_check);
                request()->session()->put('role', $user_check->role);

                return redirect('/dashboard');
            } elseif ($user_check->role == "supervisor") {

                $super_check = Supervisor::where('username', request('username'))->first();
                request()->session()->put('user', $super_check);
                request()->session()->put('role', $user_check->role);

                return redirect('/dashboard');
            }elseif ($user_check->role == "host") {

                $super_check = Host::where('username', request('username'))->first();
                request()->session()->put('user', $super_check);
                request()->session()->put('role', $user_check->role);

                return redirect('/dashboard');
            }
        } else {
            
            session()->flash('none','');
            return redirect('/');
        }
    }
}

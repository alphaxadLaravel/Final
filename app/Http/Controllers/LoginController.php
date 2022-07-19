<?php

namespace App\Http\Controllers;

use App\Models\Brellah;
use App\Models\HR;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //register company here
    public function newCompany()
    {
        request()->validate([
            'regNumber' => 'required|string|min:3|max:10',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'username' => 'required|min:3|max:10',
        ]);

        $verify = Brellah::where('regNumber', request('regNumber'))->first();

        if ($verify) {
            HR::Create([
                'company' => request('company'),
            ]);
        } else {
            dd("halipo");
        }
    }
}

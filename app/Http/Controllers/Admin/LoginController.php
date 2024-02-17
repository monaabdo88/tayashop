<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Loign form function
    public function getLogin()
    {
        return view('admin.login');
    }
    //submit login function
    public function login(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me')? true : false;
        //check user data
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('cp.index');
        }
        else
        {
            return redirect()->back();
        }

    }
}

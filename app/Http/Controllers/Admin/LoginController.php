<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

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

    }
}

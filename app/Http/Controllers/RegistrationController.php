<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function Login() {
        return view('UserRegistration.Login');
    }
}
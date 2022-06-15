<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $this->validate($request, [
            'name' =>'required|max:225',
            'username' =>'required|max:225',
            'email' =>'required|email|max:225',
            'password' =>'required|confirmed',
       ]);
        return view('auth.login');
    }

    public function store()
    {
        dd('ok');
    }
}

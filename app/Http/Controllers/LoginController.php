<?php

namespace App\Http\Controllers;

use App\Mail\MagicLoginLink;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        
        Mail::to($request->email)->send(new MagicLoginLink());

        return back()->with('success', 'Magic login link has been send in your mail.');
    }
}

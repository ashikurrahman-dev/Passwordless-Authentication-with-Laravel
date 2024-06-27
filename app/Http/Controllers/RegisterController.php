<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\MagicLoginLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        User::create($request->all());
        Mail::to($request->email)->send(new MagicLoginLink($request->email));

        return back()->with('success', 'Check your mail for login link');
    }
}

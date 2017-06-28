<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create() {
    	return view('registration');
    }

     public function store(Request $request) {
    
    	User::create($request->all());
    	return redirect('menu');
    }
}

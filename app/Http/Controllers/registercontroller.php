<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registercontroller extends Controller
{
        public function index()
        {
            return view('register.index');
        }
     
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'username' => 'required|max:255',
                'email' => 'required|unique:Users', 
                'password' => 'required',
            ]);
     
            $validatedData['password'] = bcrypt($validatedData['password']);
     
            User::create($validatedData);

            return redirect('/')->with('success', 'Registration Succesfull!');
        }
}

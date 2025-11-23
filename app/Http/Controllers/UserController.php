<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|password'
        ]);
        User:create($validated);
        return back()->with('success','User created successfully');
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class Registercontroller extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(){
      $attritube=  request()->validate([
            'first_name' => ['required'],
            'second_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required','confirmed',Password::min(6)],
        ]);
      $user=User::create($attritube);
      Auth::login($user);
return redirect('/');
    }

}

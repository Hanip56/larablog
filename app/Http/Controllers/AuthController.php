<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            session()->regenerate();

            return redirect('/')->with('message', "Logged in successfully");
        }
        
        return back()->withErrors(["email" => "Invalid credentials"])->onlyInput('email');
    }

    public function register(Request $request) {
        // custom error
        // $rules = [
        //     'name' => 'required|min:3',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed|min:6',
        //     'password_confirmation' => 'required'
        // ];

        // $messages = [
        //     'required' => 'Kolom :attribute harus diisi'
        // ];
        // $formFields = Validator::make($request->input(), $rules, $messages)->validate();

        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        $user = User::create($formFields);

        auth()->login($user);
        
        return redirect('/')->with('message', 'Register and logged in successfully');
    }

    public function logout(Request $request) {
        auth()->logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        // return redirect('/')->with('message', "Logged out");

        session()->flash('message', "Logged out");
        return redirect('/');

    }
}

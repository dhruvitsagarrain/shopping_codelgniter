<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Validator;
class LoginController extends Controller
{
    public function checklogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        $request->session()->put('email', $credentials['email']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('success','Successfully Admin Login!');
        }

        return redirect("/")->with('danger','Email and password is Wrong!');
    }
    public function dashboard(Request $request)
    {
        if(!empty($request->session()->get('email')))
        {
            return view('main');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->forget('email');
        if(!$request->session()->has('email'))
        {
         return redirect('/');
        }
    }
}

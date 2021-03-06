<?php

namespace App\Http\Controllers;

use App\User;
use App\Cart;
use Auth;
use Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignup()
    {
    	return view ('users.signup');
    }

    public function postSignup(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4'
    	]);

    	$user = new User([
    		'fname' => $request->input('fname'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password'))
    	]);
    	$user->save();

        $cart = new Cart;
        $cart->customer_id = $user->id;
        $cart->save();

        Auth::login($user);

    	return redirect()->route('index');
    }

    public function getSignin()
    {
        return view ('users.user');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')
        ])) {
            return redirect('/');
        }
        return redirect()->back();
    }

    public function getProfile()
    {
        return view ('user.profile');
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->route('index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;


class UserController extends Controller
{
    public function getSignup()
    {
    	return view('user.signup');
    }

    public function postSignup(Request $request)
    {
    	$this->validate($request, [
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:4'
   			]);
    	$user = new User([
    			'email'=> $request->email,
    			'password'=> bcrypt($request->password)
    		]);
    	$user->save();

    	return redirect()->route('product.index');
    }
    public function getSignin()
    {
    	return view('user.signin');
    }

    public function postSignin(Request $request)
    {
    	$this->validate($request, [
    		'email'=>'required|email',
    		'password'=>'required|min:4'
   			]);

    	if(Auth::attempt(['email'=>$request->email,
    		'password'=>$request->password])) {
    		return redirect()->route('user.profile');
    	}

    	return redirect()->back();
    }

    public function getProfile()
    {
    	return view('user.profile');
    }

    public function getLogout()
    {
    	Auth::logout();
    	// return redirect()->back();
    }
}

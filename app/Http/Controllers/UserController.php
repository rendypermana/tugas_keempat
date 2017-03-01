<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Sentinel;
use Session;
use Validator;

class UserController extends Controller
{
    public function signup(){
    	return view('admin.signup');
    }

    public function signup_store(UserRequest $request){
    	Sentinel::registerAndActivate($request->all());
    	Session::flash('notice','Success create new user');
    	return redirect()->back();
    }
}

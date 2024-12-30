<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
        }
        public function action (Request $request) {
        $validator = Validator::make($request->all(), array(
        'username' => 'required|min:4|max:50',
        'password' => 'required'
        ));
        if ($validator->fails()) {
        return back()
        ->withErrors($validator)
        ->withInput();
        }
        return login;
}
}
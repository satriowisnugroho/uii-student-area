<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller {

	public function index() 
	{
		return view('auth.login');
	}

	public function postLogin(LoginRequest $request) 
	{
		$nim = \Request::input('nim');
		$password = \Request::input('password');
		
		if (Auth::attempt(['nim' => $nim, 'password' => $password]))
        {
        	return redirect()->intended('/home');
        } 
        else 
        {
        	return redirect('/')->with(
        		'errorMessage', 
        		'Kombinasi email dan password salah.'
        	);
        }

	}

	public function getLogout() 
	{
		Auth::logout();

		return redirect('/');
	}

}
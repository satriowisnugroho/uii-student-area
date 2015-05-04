<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'login'], function()
{
	Route::get('/', 'LoginController@index');
});

Route::controller('auth', 'LoginController');
Route::group(['middleware' => 'student'], function()
{
//	Route::get('home', function(){
//		return view('auth.login');
//	});

	Route::get('home', 'HomeController@index');

	Route::get('facilities', function(){
	    return view('facilities');
	});

	Route::get('booking', 'RoomController@showBooking');

	Route::get('contact', function(){
	    return view('contact');
	});

	Route::post('booking/store', 'RoomController@booking');
});

Route::get('test', function(){
	$data = App\User::join('room_users', 'users.id', '=', 'room_users.user_id')
			->join('rooms', 'room_users.room_id', '=', 'rooms.id')
			->select(
				'users.nim',
				'users.name',
				'room_users.date',
				'room_users.time',
				'room_users.members',
				'room_users.description',
				'rooms.title'
			)
			->where('room_users.id', '14')->get();
	Mail::send('emails.bukti', ['data' => $data], function ($message)
	{
		$message->to('wwisnuu@gmail.com', 'wisnugroho')->subject('Bukti Pemesanan - studentarea.uii.ac.id');
	});
	return view('emails.bukti', ['data' => $data]);
});

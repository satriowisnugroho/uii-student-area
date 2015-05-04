<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function scopeJoinRoomAndRoomUsers($query)
	{
		return $query->join('room_users', 'users.id', '=', 'room_users.user_id')
			->join('rooms', 'room_users.room_id', '=', 'rooms.id')
			->select(
				'users.nim',
				'users.name',
				'users.email',
				'room_users.date',
				'room_users.time',
				'room_users.members',
				'room_users.description',
				'rooms.title'
			);
	}

}

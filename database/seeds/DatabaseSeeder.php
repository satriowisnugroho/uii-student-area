<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('room_users')->delete();

		$this->call('UsersTableSeeder');
		$this->call('RoomsTableSeeder');
	}

}

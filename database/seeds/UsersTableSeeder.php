<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		DB::table('users')->delete();

		$users = array(
			array(
				'id' => 1,
				'name' => 'Satrio Wisnugroho',
				'nim' => '12523048',
				'password' => bcrypt('12345'),
				'email' => 'wwisnuu@gmail.com'
			),
			array(
				'id' => 2, 
				'nim' => '12523100', 
				'password' => bcrypt('12345')
			),
			array(
				'id' => 3, 
				'nim' => '12523200', 
				'password' => bcrypt('12345')
			),
			array(
				'id' => 4, 
				'nim' => '12523300', 
				'password' => bcrypt('12345')
			),
			array(
				'id' => 5, 
				'nim' => '12523400', 
				'password' => bcrypt('12345')
			)
		);

		foreach ($users as $user) {
			App\User::create($user);
		}

	}

}

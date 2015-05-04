<?php
/**
 * Created by PhpStorm.
 * User: Wisnu
 * Date: 01/05/2015
 * Time: 17:25
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoomUsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('room_users')->delete();

        $roomUsers = array(
            array(

            )
        );

        foreach ($roomUsers as $roomUser) {
            App\RoomUser::create($roomUser);
        }

    }

}
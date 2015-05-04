<?php
/**
 * Created by PhpStorm.
 * User: Wisnu
 * Date: 01/05/2015
 * Time: 17:25
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoomsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rooms')->delete();

        $rooms = array(
            array(
                'id' => 1,
                'title' => 'Project A Room',
                'description' => 'Ruangan ini dilengkapi dengan peralatan yang lengkap
                    (komputer, LCD projector, papan tulis). Ruangan ini hanya boleh dipakai oleh maximal 8 orang.',
                'image' => 'pic1.jpg'
            ),
            array(
                'id' => 2,
                'title' => 'Project B Room',
                'description' => 'Ruangan ini dilengkapi dengan peralatan yang lengkap
                    (komputer, LCD projector, papan tulis). Ruangan ini hanya boleh dipakai oleh maximal 4 orang.',
                'image' => 'pic2.jpg'
            ),
            array(
                'id' => 3,
                'title' => 'Tutorial Room',
                'description' => 'Ruangan ini hanya dilengkapi dengan papan tulis dan boleh dipakai oleh maximal 8 orang.',
                'image' => 'pic3.jpg'
            ),
            array(
                'id' => 4,
                'title' => 'Skype Room',
                'description' => 'Ruangan ini khusus untuk melakukan aktivitas komunikasi via Skype.
                    Ruangan ini dilengkapi komputer dan monitor serta boleh dipakai oleh maximal 3 orang.',
                'image' => 'pic4.jpg'
            )
        );

        foreach ($rooms as $room) {
            App\Room::create($room);
        }

    }

}
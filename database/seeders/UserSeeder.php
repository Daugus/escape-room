<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();

        $password = '$2y$10$n/8l8e.y.qN8lrvZwf1zke8RJjZI5rQSs4xlIY4nDEVE0CfSCiZZC'; // 123

        $augusto = new User();
        $augusto->role = 'profesor';
        $augusto->name = 'Augusto';
        $augusto->surname = 'de la Cámara';
        $augusto->nickname = 'dlc';
        $augusto->email = 'dlc@parasol.com';
        $augusto->password = $password;

        $carmen = new User();
        $carmen->role = 'profesor';
        $carmen->name = 'Carmen';
        $carmen->surname = 'Gabiola';
        $carmen->nickname = 'carmen';
        $carmen->email = 'carmen@parasol.com';
        $carmen->password = $password;

        $iker = new User();
        $iker->role = 'alumno';
        $iker->name = 'Iker';
        $iker->surname = 'González';
        $iker->nickname = 'iker';
        $iker->email = 'iker@parasol.com';
        $iker->password = $password;

        $luka = new User();
        $luka->role = 'alumno';
        $luka->name = 'Luka';
        $luka->surname = 'Carmona';
        $luka->nickname = 'luka';
        $luka->email = 'luka@parasol.com';
        $luka->password = $password;

        $augusto->save();
        $carmen->save();
        $iker->save();
        $luka->save();
    }
}

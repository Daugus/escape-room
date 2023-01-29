<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // $password = '$2y$10$n/8l8e.y.qN8lrvZwf1zke8RJjZI5rQSs4xlIY4nDEVE0CfSCiZZC'; // 123

        // $iker = new User();
        // $iker->role = 'alumno';
        // $iker->name = 'Iker';
        // $iker->surname = 'González';
        // $iker->nickname = 'GleZz';
        // $iker->email = 'glezz@parasol.com';
        // $iker->password = $password;
    }
}

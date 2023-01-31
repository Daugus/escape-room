<?php

namespace Database\Seeders;

use App\Models\Difficulty;
use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $normal = new Difficulty();
        $normal->name = 'Fácil';
        $normal->level = 1;
        $normal->time = '1:0:00';

        $dificil = new Difficulty();
        $dificil->name = 'Normal';
        $dificil->level = 2;
        $dificil->time = '0:45:00';

        $muyDificil = new Difficulty();
        $muyDificil->name = 'Difícil';
        $muyDificil->level = 3;
        $muyDificil->time = '0:25:00';

        $normal->save();
        $dificil->save();
        $muyDificil->save();
    }
}

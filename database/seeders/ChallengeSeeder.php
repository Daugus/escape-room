<?php

namespace Database\Seeders;

use App\Models\Challenge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oveja = new Challenge();
        $oveja->name = 'Cada oveja con su pareja';

        $kuku = new Challenge();
        $kuku->name = 'Kuku';

        $ahorcado = new Challenge();
        $ahorcado->name = 'Ahorcado';

        $equilibrado = new Challenge();
        $equilibrado->name = 'Todo bien equilibrado';

        $agrupando = new Challenge();
        $agrupando->name = 'Agrupando';

        $contra = new Challenge();
        $contra->name = 'Necesitamos una contraseña';

        $oveja->save();
        $kuku->save();
        $ahorcado->save();
        $equilibrado->save();
        $agrupando->save();
        $contra->save();
    }
}

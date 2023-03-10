<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DifficultySeeder::class);

        $this->call(UserSeeder::class);
        $this->call(GroupSeeder::class);

        $this->call(UserGroupSeeder::class); // después de usuarios y grupos
        $this->call(GameSeeder::class); // después de grupos

        $this->call(ChallengeSeeder::class);

        $this->call(GroupingSeeder::class);
        $this->call(SharedSeeder::class);
        $this->call(HangmanSeeder::class);
        $this->call(PasswordSeeder::class);
    }
}

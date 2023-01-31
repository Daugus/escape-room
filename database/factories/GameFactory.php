<?php

namespace Database\Factories;

use App\Models\Group;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Genera partidas y su estado,
     * dependiendo del estado genera un state y time diferente
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $difficulty_id = $this->faker->numberBetween(1, 3);

        $estadoPartida = $this->faker->numberBetween(1, 5);

        if ($estadoPartida === 1) {
            // cancelada (1/5)
            $time = null;
            $state = 'cancelada';
        } else {
            switch ($difficulty_id) {
                case 1:
                    $maxtime = 60;
                    break;
                case 2:
                    $maxtime = 45;
                    break;
                case 3:
                    $maxtime = 25;
                    break;
            }

            if ($estadoPartida === 2) {
                // tiempo (1/5)
                $time_minutes = $maxtime;
                $time_seconds = 0;
                $state = 'perdida';
            } else {
                // ganada (3/5)
                $time_minutes = $this->faker->numberBetween(10, $maxtime);
                $time_seconds = $this->faker->numberBetween(0, 59);
                $state = 'ganada';
            }

            if ($time_minutes === 60) {
                $time = '1:00:00';
            } else {
                $time = "0:$time_minutes:$time_seconds";
            }
        }

        return [
            'time' => $time,
            'state' => $state,
            'difficulty_id' => $difficulty_id,
            'group_id' => $this->faker->numberBetween(1, Group::count())
        ];
    }
}

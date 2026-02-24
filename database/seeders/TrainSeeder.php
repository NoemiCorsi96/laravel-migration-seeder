<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //prima modalità tramite un array e il foreach 
            $trains = [

                [
                    'company' => 'Trenitalia',
                    'departure_station' => 'Roma Termini',
                    'arrival_station' => 'Milano Centrale',
                    'departure_time' => '2026-03-01 09:00:00',
                    'arrival_time' => '2026-03-01 12:00:00',
                    'train_code' => 'FR100',
                    'carriages' => 8,
                    'on_time' => true,
                    'cancelled' => false,
                ],

                [
                    'company' => 'Italo',
                    'departure_station' => 'Napoli Centrale',
                    'arrival_station' => 'Firenze SMN',
                    'departure_time' => '2026-03-02 10:30:00',
                    'arrival_time' => '2026-03-02 13:00:00',
                    'train_code' => 'IT200',
                    'carriages' => 7,
                    'on_time' => true,
                    'cancelled' => false,
                ],

            ];

            foreach ($trains as $train) {
                Train::create($train);
            }
    }

}

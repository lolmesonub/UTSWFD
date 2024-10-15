<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=5; $i++) {
            DB::table('flights')->insert([
                'id' => $i,
                'flight_code' => fake()->unique()->regexify('[A-Z]{2}[0-9]{3}'),
                'origin' => fake()->regexify('[A-Z]{3}'),
                'destination' => fake()->regexify('[A-Z]{3}'),
                'departure_time' => fake()->dateTime(),
                'arrival_time' => fake()->dateTime(),
                'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
}

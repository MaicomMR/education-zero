<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 'title', 'location', 'description', 'price', 'event_date'
         */
        DB::table('events')->insert([
            'title' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(15),
            'price' => 10.0,
            'event_date' => Carbon::now()->addDays(5)->format('Y-h-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-h-d H:i:s')
        ]);

        DB::table('events')->insert([
            'title' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(15),
            'price' => 11.0,
            'event_date' => Carbon::now()->addDays(5)->format('Y-h-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-h-d H:i:s')
        ]);

        DB::table('events')->insert([
            'title' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(15),
            'price' => 71.0,
            'event_date' => Carbon::now()->addDays(5)->format('Y-h-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-h-d H:i:s')
        ]);

        DB::table('events')->insert([
            'title' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(15),
            'price' => 72.0,
            'event_date' => Carbon::now()->addDays(5)->format('Y-h-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-h-d H:i:s')
        ]);
    }
}

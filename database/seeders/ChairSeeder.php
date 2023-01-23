<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chairs')->insert([
            'user_id' => Str::random(10),
            'name' => Str::random(10),
            'amount' => Str::random(10).'@gmail.com',
            'body' => Hash::make('password'),
            'image' => Hash::make('password'),
        ]);
    }
}

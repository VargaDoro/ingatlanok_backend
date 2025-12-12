<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngatlanokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [ 

            ['question_text' => 'Kérdés szövege 1?', 'kategoria_nev' => 'garázs'], 

            ['question_text' => 'Kérdés szövege 2?', 'kategoria_nev' => 'lakás'], 

    }
}

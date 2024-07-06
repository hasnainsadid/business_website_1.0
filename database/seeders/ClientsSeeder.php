<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            'name' => "Sadid Rafia",
            'profession' => "Business",
            'description' => 'Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.',
             'img' => 'testimonial-1.jpg',
        ]);

        DB::table('clients')->insert([
            'name' => "Sabbir Hossen",
            'profession' => "Bangker",
            'description' => 'Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.',
             'img' => 'testimonial-2.jpg',
        ]);


        DB::table('clients')->insert([
            'name' => "David Niv",
            'profession' => "Student",
            'description' => 'Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.',
             'img' => 'testimonial-3.jpg',
        ]);
    }
}

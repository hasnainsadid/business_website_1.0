<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert([
            'name' => "Monia taslim",
            'subject' => "Digital Agency Website Design And Development",
            'messege' => "Build consumer trust by showing expected wait times and answers to frequently asked questions, and enhance customer care with the ability to connect with a live agent.",
            'email' => "taslim@gmail.com"
        ]);

        DB::table('contact')->insert([
            'name' => "Maisha",
            'subject' => "Digital Agency Website Design And Development",
            'messege' => "Build consumer trust by showing expected wait times and answers to frequently asked questions, and enhance customer care with the ability to connect with a live agent.",
            'email' => "maisha@gmail.com"
        ]);


        DB::table('contact')->insert([
            'name' => "Fahad Ahmed",
            'subject' => "Digital Agency Website Design And Development",
            'messege' => "Build consumer trust by showing expected wait times and answers to frequently asked questions, and enhance customer care with the ability to connect with a live agent.",
            'email' => "fahad33@gmail.com"
        ]);
    }
}

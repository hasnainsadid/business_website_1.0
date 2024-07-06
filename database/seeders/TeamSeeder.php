<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team')->insert([
            'name' => 'Mehidi Hasan',
            'designation' => 'CEO & Founder',
            'email' => 'mehedi@gmail.com', 
            'img' => 'team-1.jpg',
            'facebook' => 'fab fa-facebook-f',
            'twitter' => 'fab fa-twitter',
            'insta' => 'fab fa-instagram',
            'linkedin' => 'fab fa-linkedin-in',
        ]);
        
        DB::table('team')->insert([
            'name' => 'jecika joi',
            'designation' => 'CEO & Founder',
            'email' => 'joi@gmail.com', 
            'img' => 'team-2.jpg',
            'facebook' => 'fab fa-facebook-f',
            'twitter' => 'fab fa-twitter',
            'insta' => 'fab fa-instagram',
            'linkedin' => 'fab fa-linkedin-in',
        ]);

        DB::table('team')->insert([
            'name' => 'John Doe',
            'designation' => 'CEO & Founder',
            'email' => 'john@gmail.com', 
            'img' => 'team-3.jpg',
            'facebook' => 'fab fa-facebook-f',
            'twitter' => 'fab fa-twitter',
            'insta' => 'fab fa-instagram',
            'linkedin' => 'fab fa-linkedin-in',
        ]);

        DB::table('team')->insert([
            'name' => 'Tony Johnson',
            'designation' => 'SEO Expert',
            'email' => 'tony@gmail.com', 
            'img' => 'team-1.jpg',
            'facebook' => 'fab fa-facebook-f',
            'twitter' => 'fab fa-twitter',
            'insta' => 'fab fa-instagram',
            'linkedin' => 'fab fa-linkedin-in',
        ]);
    }
}

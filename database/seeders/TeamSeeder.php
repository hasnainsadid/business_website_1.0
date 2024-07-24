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
            'facebook' => 'https://www.facebook.com/hasnain.sadid',
            'twitter' => 'https://www.twitter.com/',
            'insta' => 'https://www.instagram.com/_sadid_rafi',
            'linkedin' => 'https://www.linkedin.com/',
        ]);
        
        DB::table('team')->insert([
            'name' => 'jecika joi',
            'designation' => 'Graphics Designer',
            'email' => 'joi@gmail.com', 
            'img' => 'team-2.jpg',
            'facebook' => 'https://www.facebook.com/hasnain.sadid',
            'twitter' => 'https://www.twitter.com/',
            'insta' => 'https://www.instagram.com/_sadid_rafi',
            'linkedin' => 'https://www.linkedin.com/',
        ]);

        DB::table('team')->insert([
            'name' => 'John Doe',
            'designation' => 'Web Developer',
            'email' => 'john@gmail.com', 
            'img' => 'team-3.jpg',
            'facebook' => 'https://www.facebook.com/hasnain.sadid',
            'twitter' => 'https://www.twitter.com/',
            'insta' => 'https://www.instagram.com/_sadid_rafi',
            'linkedin' => 'https://www.linkedin.com/',
        ]);

        DB::table('team')->insert([
            'name' => 'Tony Johnson',
            'designation' => 'SEO Expert',
            'email' => 'tony@gmail.com', 
            'img' => 'team-4.jpg',
            'facebook' => 'https://www.facebook.com/hasnain.sadid',
            'twitter' => 'https://www.twitter.com/',
            'insta' => 'https://www.instagram.com/_sadid_rafi',
            'linkedin' => 'https://www.linkedin.com/',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service')->insert([
            'title' => "SEO Optimization",
            'description' => "Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.",
            'logo' => 'search',
            'status' => 1,
        ]);
        DB::table('service')->insert([
            'title' => "Web Design",
            'description' => "Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.",
            'logo' => 'laptop-code',
            'status' => 1,
        ]);
        DB::table('service')->insert([
            'title' => "Social Media Marketing",
            'description' => "Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.",
            'logo' => 'facebook-f',
            'status' => 1,
        ]);
        DB::table('service')->insert([
            'title' => "Email Marketing",
            'description' => "Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.",
            'logo' => 'mail-bulk',
            'status' => 1,
        ]);
        DB::table('service')->insert([
            'title' => "PPC Advertising",
            'description' => "Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.",
            'logo' => 'thumbs-up',
            'status' => 1,
        ]);
        DB::table('service')->insert([
            'title' => "App Development",
            'description' => "Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.",
            'logo' => 'android',
            'status' => 1,
        ]);
    }
}

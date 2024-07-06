<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('project')->insert([
        'title' => 'Graphic Design',
        'category_id' => '1',
        'img' => 'portfolio-1.jpg',
       ]);

       DB::table('project')->insert([
        'title' => 'Digital Agency Website Design And Development',
        'category_id' => '1',
        'img' => 'portfolio-5.jpg',
       ]);

       DB::table('project')->insert([
        'title' => 'Digital Agency Website Design And Development',
        'category_id' => '2',
        'img' => 'portfolio-4.jpg',
       ]);
    }
}

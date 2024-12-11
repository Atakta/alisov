<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            ['title' => 'Photo 10', 'catalog' => 'all', 'url' => 'photos/10.jpg'],
            ['title' => 'Photo 11', 'catalog' => 'all', 'url' => 'photos/11.jpg'],
            ['title' => 'Photo 12', 'catalog' => 'all', 'url' => 'photos/12.jpg'],
            ['title' => 'Photo 13', 'catalog' => 'all', 'url' => 'photos/13.jpg'],
            ['title' => 'Photo 14', 'catalog' => 'all', 'url' => 'photos/14.jpg'],
            ['title' => 'Photo 15', 'catalog' => 'all', 'url' => 'photos/15.jpg'],

        ]);
    }
}

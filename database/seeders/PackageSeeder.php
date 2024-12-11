<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'Свадьба/Базовый',
            'description' => 'Описание свадебного базового пакета',
            'price' => 200,
        ]);

        Package::create([
            'name' => 'Свадьба/Стандартный',
            'description' => 'Описание свадебного стандартного пакета',
            'price' => 300,
        ]);

        Package::create([
            'name' => 'Свадьба/Премиум',
            'description' => 'Описание свадебного премиум пакета',
            'price' => 500,
        ]);
        Package::create([
            'name' => 'Портрет/Базовый',
            'description' => 'Описание портретного базового пакета',
            'price' => 100,
        ]);

        Package::create([
            'name' => 'Портрет/Стандартный',
            'description' => 'Описание портретного стандартного пакета',
            'price' => 200,
        ]);

        Package::create([
            'name' => 'Портрет/Премиум',
            'description' => 'Описание портретного премиум пакета',
            'price' => 300,
        ]);
        Package::create([
            'name' => 'Лавстори/Базовый',
            'description' => 'Описание лавстори базового пакета',
            'price' => 200,
        ]);

        Package::create([
            'name' => 'Лавстори/Стандартный',
            'description' => 'Описание лавстори стандартного пакета',
            'price' => 300,
        ]);

        Package::create([
            'name' => 'Лавстори/Премиум',
            'description' => 'Описание лавстори премиум пакета',
            'price' => 350,
        ]);
    }
}

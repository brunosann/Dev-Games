<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category' => 'Ação',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Aventura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Estratégia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Esporte',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Corrida',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}

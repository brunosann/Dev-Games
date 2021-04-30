<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamePhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            [
                'game_id' => 3,
                'photo' => 'cyberpunk.1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 3,
                'photo' => 'cyberpunk.2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 5,
                'photo' => 'f12020.1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 5,
                'photo' => 'f12020.2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 2,
                'photo' => 'fifa21.1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 2,
                'photo' => 'fifa21.2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 4,
                'photo' => 'minecraft.1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 4,
                'photo' => 'minecraft.2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 1,
                'photo' => 'spiderman.1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 1,
                'photo' => 'spiderman.2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 6,
                'photo' => 'Tropico6.1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_id' => 6,
                'photo' => 'Tropico6.2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('game_photos')->insert($photos);
    }
}

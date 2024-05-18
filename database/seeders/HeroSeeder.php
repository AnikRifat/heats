<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            [
                'title' =>'.',
                'subtitle' =>'.',
                'image' => '1.jpg',
                'order' => 1,
            ],
            [
                'title' =>'.',
                'subtitle' =>'.',
                'image' => '2.jpg',
                'order' => 2,
            ],
            [
                'title' =>'.',
                'subtitle' =>'.',
                'image' => '3.jpg',
                'order' => 3,
            ],
            [
                'title' =>'.',
                'subtitle' =>'.',
                'image' => '4.jpg',
                'order' => 4,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('tags')->insert([
        ['name' => '新商品'],
        ['name' => 'キャンペーン'],
        ['name' => 'お問い合わせ'],
     ]);
    }
}
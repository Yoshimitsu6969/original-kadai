<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('prefectures')->insert([
            'name' => '北海道',
            "area_group_id" => "1",
        ]); //東北地方
        DB::table('prefectures')->insert([
            'name' => '青森県',
            "area_group_id" => "2",
        ]);
        DB::table('prefectures')->insert([
            'name' => '秋田県',
            "area_group_id" => "2",
        ]);
        DB::table('prefectures')->insert([
            'name' => '岩手県',
            "area_group_id" => "2",
        ]);
        DB::table('prefectures')->insert([
            'name' => '宮城県',
            "area_group_id" => "2",
        ]);
         DB::table('prefectures')->insert([
            'name' => '山形県',
            "area_group_id" => "2",
        ]);
        DB::table('prefectures')->insert([
            'name' => '福島県',
            "area_group_id" => "2",
        ]);//関東地方
        DB::table('prefectures')->insert([
            'name' => '東京都',
            "area_group_id" => "3",
        ]);//中部地方
        DB::table('prefectures')->insert([
            'name' => '新潟県',
            "area_group_id" => "4",
        ]);//関西地方
        DB::table('prefectures')->insert([
            'name' => '大阪府',
            "area_group_id" => "5",
        ]);//中国地方
        DB::table('prefectures')->insert([
            'name' => '広島県',
            "area_group_id" => "6",
        ]);//四国地方
            DB::table('prefectures')->insert([
            'name' => '香川県',
            "area_group_id" => "7",
        ]);//九州地方
           DB::table('prefectures')->insert([
            'name' => '福岡県',
            "area_group_id" => "8",
        ]);
        
    }
}

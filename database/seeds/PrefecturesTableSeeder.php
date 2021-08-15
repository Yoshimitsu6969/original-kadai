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
            'name' => '茨城県',
            "area_group_id" => "3",
        ]);    
        DB::table('prefectures')->insert([
            'name' => '栃木県',
            "area_group_id" => "3",
        ]);
        DB::table('prefectures')->insert([
            'name' => '群馬県',
            "area_group_id" => "3",
        ]);
        DB::table('prefectures')->insert([
            'name' => '東京都',
            "area_group_id" => "3",
        ]);
        DB::table('prefectures')->insert([
            'name' => '埼玉県',
            "area_group_id" => "3",
        ]);
        DB::table('prefectures')->insert([
            'name' => '千葉県',
            "area_group_id" => "3",
        ]);
        DB::table('prefectures')->insert([
            'name' => '神奈川県',
            "area_group_id" => "3",
        ]);
        //中部地方
        DB::table('prefectures')->insert([
            'name' => '新潟県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '石川県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '福井県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '富山県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '山梨県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '長野県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '岐阜県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '静岡県',
            "area_group_id" => "4",
        ]);
        DB::table('prefectures')->insert([
            'name' => '愛知県',
            "area_group_id" => "4",
        ]);
        //関西地方
        DB::table('prefectures')->insert([
            'name' => '大阪府',
            "area_group_id" => "5",
        ]);
        DB::table('prefectures')->insert([
            'name' => '京都府',
            "area_group_id" => "5",
        ]);
        DB::table('prefectures')->insert([
            'name' => '兵庫県',
            "area_group_id" => "5",
        ]);
        DB::table('prefectures')->insert([
            'name' => '滋賀県',
            "area_group_id" => "5",
        ]);
        DB::table('prefectures')->insert([
            'name' => '和歌山県',
            "area_group_id" => "5",
        ]);
        DB::table('prefectures')->insert([
            'name' => '奈良県',
            "area_group_id" => "5",
        ]);
        DB::table('prefectures')->insert([
            'name' => '三重県',
            "area_group_id" => "5",
        ]);
        //中国地方
        DB::table('prefectures')->insert([
            'name' => '鳥取県',
            "area_group_id" => "6",
        ]);
        DB::table('prefectures')->insert([
            'name' => '島根県',
            "area_group_id" => "6",
        ]);
        DB::table('prefectures')->insert([
            'name' => '岡山県',
            "area_group_id" => "6",
        ]);
        DB::table('prefectures')->insert([
            'name' => '広島県',
            "area_group_id" => "6",
        ]);
        DB::table('prefectures')->insert([
            'name' => '山口県',
            "area_group_id" => "6",
        ]);  
        //四国地方
        DB::table('prefectures')->insert([
            'name' => '香川県',
            "area_group_id" => "7",
        ]);
        DB::table('prefectures')->insert([
            'name' => '愛媛県',
            "area_group_id" => "7",
        ]);
        DB::table('prefectures')->insert([
            'name' => '徳島県',
            "area_group_id" => "7",
        ]);
        DB::table('prefectures')->insert([
            'name' => '高知県',
            "area_group_id" => "7",
        ]);
        //九州地方
        DB::table('prefectures')->insert([
            'name' => '福岡県',
            "area_group_id" => "8",
        ]);
        DB::table('prefectures')->insert([
            'name' => '佐賀県',
            "area_group_id" => "8",
        ]);
        DB::table('prefectures')->insert([
            'name' => '長崎県',
            "area_group_id" => "8",
        ]);
        DB::table('prefectures')->insert([
            'name' => '熊本県',
            "area_group_id" => "8",
        ]);
        DB::table('prefectures')->insert([
            'name' => '大分県',
            "area_group_id" => "8",
        ]);
        DB::table('prefectures')->insert([
            'name' => '宮崎県',
            "area_group_id" => "8",
        ]);
        DB::table('prefectures')->insert([
            'name' => '鹿児島県',
            "area_group_id" => "8",
        ]);
         DB::table('prefectures')->insert([
            'name' => '沖縄県',
            "area_group_id" => "8",
        ]);

    }
}

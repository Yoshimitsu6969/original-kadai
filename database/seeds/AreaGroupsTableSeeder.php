<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AreaGroupsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('area_groups')->truncate();
        
        DB::table('area_groups')->insert([
            'name' => '北海道',
        ]);
        
        DB::table('area_groups')->insert([
            'name' => '東北地方',
        ]);
        
        DB::table('area_groups')->insert([
            'name' => '関東地方',
         ]);
         
        DB::table('area_groups')->insert([
            'name' => '中部地方',
         ]);
         
        DB::table('area_groups')->insert([
            'name' => '近畿地方',
         ]);
         
        DB::table('area_groups')->insert([
            'name' => '中国地方',
         ]);
         
        DB::table('area_groups')->insert([
            'name' => '四国地方',
         ]);
         
        DB::table('area_groups')->insert([
            'name' => '九州地方',
         ]);
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

         
    }
}

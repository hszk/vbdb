<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'code' => 'BRA',
                'name' => 'ブラジル',
                'english_name' => 'BRAZIL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'USA',
                'name' => 'アメリカ合衆国',
                'english_name' => 'UNITED STATES OF AMERICA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'POL',
                'name' => 'ポーランド',
                'english_name' => 'POLAND',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'BRA',
                'name' => 'ブラジル',
                'english_name' => 'BRAZIL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'ITA',
                'name' => 'イタリア',
                'english_name' => 'ITALY',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'RUS',
                'name' => 'ロシア',
                'english_name' => 'RUSSIA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'ARG',
                'name' => 'アルゼンチン',
                'english_name' => 'ARGENTINA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'IRN',
                'name' => 'イラン',
                'english_name' => 'IRAN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'FRA',
                'name' => 'フランス',
                'english_name' => 'FRANCE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'JPN',
                'name' => '日本',
                'english_name' => 'JAPAN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'SRB',
                'name' => 'セルビア',
                'english_name' => 'SERBIA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'EGY',
                'name' => 'エジプト',
                'english_name' => 'EGYPT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'CHN',
                'name' => '中国',
                'english_name' => 'CHINA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'NLD',
                'name' => 'オランダ',
                'english_name' => 'NETHERLANDS',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'KOR',
                'name' => '韓国',
                'english_name' => 'KOREA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'DOM',
                'name' => 'ドミニカ共和国',
                'english_name' => 'DOMINICAN REPUBLIC',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'TUR',
                'name' => 'トルコ',
                'english_name' => 'TURKEY',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'KEN',
                'name' => 'ケニア',
                'english_name' => 'KENYA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'CMR',
                'name' => 'カメルーン',
                'english_name' => 'CAMEROON',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'CAN',
                'name' => 'カナダ',
                'english_name' => 'CANADA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'AUS',
                'name' => 'オーストラリア',
                'english_name' => 'AUSTRALIA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'TUN',
                'name' => 'チュニジア',
                'english_name' => 'TUNISIA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

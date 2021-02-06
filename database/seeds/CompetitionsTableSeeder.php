<?php

use Illuminate\Database\Seeder;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competitions')->insert([
            [
                'code' => 'OG',
                'name' => 'オリンピック',
                'english_name' => 'Olympic Games',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'WCH',
                'name' => '世界選手権',
                'english_name' => 'World Championship',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'WC',
                'name' => 'ワールドカップ',
                'english_name' => 'World Cup',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'WL',
                'name' => 'ワールドリーグ',
                'english_name' => 'World League',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'WGP',
                'name' => 'ワールドグランプリ',
                'english_name' => 'World Grand Prix',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'AC',
                'name' => 'アジア選手権',
                'english_name' => 'Asian Championship',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'GC',
                'name' => 'ワールドグランドチャンピオンズカップ',
                'english_name' => 'World Grand Champions Cup',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'OQT',
                'name' => 'オリンピック最終予選',
                'english_name' => 'Olympic Qualification Tournament',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'NL',
                'name' => 'ネーションズリーグ',
                'english_name' => 'Nations League',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

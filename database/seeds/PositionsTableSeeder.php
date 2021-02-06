<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'code' => 'S',
                'name' => 'セッター',
                'english_name' => 'Setter',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'OH',
                'name' => 'アウトサイドヒッター',
                'english_name' => 'Outside Hitter',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'MB',
                'name' => 'ミドルブロッカー',
                'english_name' => 'Middle Blocker',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'OP',
                'name' => 'オポジット',
                'english_name' => 'Opposite',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'code' => 'L',
                'name' => 'リベロ',
                'english_name' => 'Libero',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class genresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テストデータ
        $contents = ['和食', '洋食', '中華', 'スイーツ', 'その他'];
        $now = Carbon::now();
        foreach( $contents as $content ) {
            DB::table('genres')->insert([
                'content' => $content, 
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class reasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テストデータ
        $contents = ['無断使用', '不適切'];
        $now = Carbon::now();
        foreach( $contents as $content ) {
            DB::table('reasons')->insert([
                'content' => $content, 
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}

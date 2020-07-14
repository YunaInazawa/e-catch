<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テストデータ
        $contents = ['user', 'store', 'event', 'comment'];
        $now = Carbon::now();
        foreach( $contents as $content ) {
            DB::table('types')->insert([
                'content' => $content, 
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}

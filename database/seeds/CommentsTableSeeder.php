<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            
            $rand40 = str_random(40);

            $params = [
                'comment' => $rand40,
                'post_id' => $i,
            ];

            DB::table('comments')->insert($params);

        }
    }
}

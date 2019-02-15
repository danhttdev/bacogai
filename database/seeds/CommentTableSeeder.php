<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert(
            [
                'id_user' => 6,
                'id_course' => 1,
                'comment' => 'Very good'
        ]);

        DB::table('comment')->insert(
            [
                'id_user' => 6,
                'id_course' => 2,
                'comment' => 'Excellent'

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsercourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_course')->insert(
            [
                'id_user' => 4,
                'id_course' => 1,
                'rate'      => 2
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 4,
                'id_course' => 2,
                'rate'      => 4
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 4,
                'id_course' => 3,
                'rate'      => 5
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 5,
                'id_course' => 2,
                'rate'      => 5
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 6,
                'id_course' => 1,
                'rate'      => 3
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 7,
                'id_course' => 1,
                'rate'      => 2
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 7,
                'id_course' => 2,
                'rate'      => 5
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 7,
                'id_course' => 5,
                'rate'      => 2
        ]);
    }
}

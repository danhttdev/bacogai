<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(
            [
            'title'         => 'Trailer',
            'course_id'     => 1,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 0
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Introduction',
            'course_id'     => 1,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 1
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner',
            'course_id'     => 1,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 2
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner 2',
            'course_id'     => 1,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 3
        ]);



        DB::table('videos')->insert(
            [
            'title'         => 'Trailer',
            'course_id'     => 2,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 0
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Introduction',
            'course_id'     => 2,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 1
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner',
            'course_id'     => 2,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 2
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner 2',
            'course_id'     => 2,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 3
        ]);




        DB::table('videos')->insert(
            [
            'title'         => 'Trailer',
            'course_id'     => 3,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 0
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Introduction',
            'course_id'     => 3,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 1
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner',
            'course_id'     => 3,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 2
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner 2',
            'course_id'     => 3,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 3
        ]);







        DB::table('videos')->insert(
            [
            'title'         => 'Trailer',
            'course_id'     => 4,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 0
        ]);

        DB::table('videos')->insert(
            [
            'title'         => 'Trailer',
            'course_id'     => 5,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 0
        ]);

        DB::table('videos')->insert(
            [
            'title'         => 'Trailer',
            'course_id'     => 6,
            'link'          => 'https://www.youtube.com/embed/capHNO_iMIU',
            'order'         => 0
        ]);
    }
}

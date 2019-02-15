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
            'link'          => 'https://www.youtube.com/embed/Wh-HoCbInao',
            'order'         => 0
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Introduction',
            'course_id'     => 1,
            'link'          => 'https://www.youtube.com/embed/Wh-HoCbInao',
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
            'link'          => 'https://www.youtube.com/embed/w6JFRi0Qm_s',
            'order'         => 0
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Introduction for student',
            'course_id'     => 2,
            'link'          => 'https://www.youtube.com/embed/w6JFRi0Qm_s',
            'order'         => 1
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner',
            'course_id'     => 2,
            'link'          => 'https://www.youtube.com/embed/gIkMNn-A_Y4',
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
            'link'          => 'https://www.youtube.com/embed/9gD0K7oH92U',
            'order'         => 0
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Introduction, Documentation',
            'course_id'     => 3,
            'link'          => 'https://www.youtube.com/embed/gIkMNn-A_Y4',
            'order'         => 1
        ]);
        DB::table('videos')->insert(
            [
            'title'         => 'Beginner, Preparing',
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

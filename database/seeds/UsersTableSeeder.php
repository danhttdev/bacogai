<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\User::class, 4)
		// 	->create()
		// 	->each(function ($u) {
		// 		// $u->comments()->save(factory(App\CommentFilm::class)->make());
		//     }
        // );
        
        DB::table('users')->insert(
            [
            'name'                 => 'Admin',
            'email'                => 'admin@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 1
        ]);

        DB::table('users')->insert(
            [
            'name'                 => 'Editor',
            'email'                => 'editor@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 2

        ]);

        DB::table('users')->insert(
            [
            'name'                 => 'Student',
            'email'                => 'student@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 3
        ]);

        DB::table('users')->insert(
            [
            'name'                 => 'Student1',
            'email'                => 'student1@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 3
        ]);

        DB::table('users')->insert(
            [
            'name'                 => 'Student2',
            'email'                => 'student2@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 3
        ]);

        DB::table('users')->insert(
            [
            'name'                 => 'Student3',
            'email'                => 'student3@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 3
        ]);

        DB::table('users')->insert(
            [
            'name'                 => 'Student4',
            'email'                => 'student4@gmail.com',
            'password'             => Hash::make('123456'),
            'role'                 => 3
        ]);

    }
}

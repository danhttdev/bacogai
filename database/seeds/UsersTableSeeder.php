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
        factory(App\User::class, 4)
			->create()
			->each(function ($u) {
				// $u->comments()->save(factory(App\CommentFilm::class)->make());
		    }
        );
        
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

        DB::table('course')->insert(
            [
            'name'                 => 'Khóa học giao tiếp tiếng Anh',
            'user_id'              => 1,
            'description'          => 'Luyện nghe siêu nhận thức chính là phương pháp dành cho bạn. Ucan.vn sở hữu một hệ thống đồ sộ với hơn 1000 videos luyện nghe được thiết kế và thu âm bởi các giáo viên bản xứ hàng đầu. Sự khác biệt của chúng tôi rất rõ ràng: bài nghe được đặt trong một bối cảnh cụ thể mô tả qua hình ảnh, kèm phụ đề Anh – Việt và cung cấp từ mới cuối mỗi bài học. Bạn sẽ vừa nghe, vừa nhìn và vừa ghi nhớ kiến thức liên tục. Vậy thay vì chỉ tắm ngôn ngữ, với kỹ thuật siêu nhận thức, bạn sẽ nghe chủ động và ngấm toàn bộ bài học. Chúng tôi tự tin rằng áp dụng kỹ thuật này 15 phút mỗi ngày, bạn sẽ xem phim Mỹ không cần phụ đề chỉ sau 3 tháng.',
            'status'                 => 1,
            'teacher'               => 'Man Nguyen'
        ]);

        DB::table('course')->insert(
            [
            'name'                 => 'Khóa học giao tiếp tiếng Anh 2',
            'user_id'              => 1,
            'description'          => 'Tất cả các hoạt động học trên Ucan.vn được thiết kế theo nguyên lý EDUTAINMENT (học mà chơi), khiến bạn luôn thay đổi cảm giác, học mà không phải "lên gân", không phải "gồng mình", không phải "cố gắng tiếp thu". Giống như chơi trò chơi vậy, những gì bạn thấy thoải mái, hiệu quả sẽ tăng lên nhiều phải không?',
            'status'                 => 1,
            'teacher'               => 'Scrum Master'

        ]);

        DB::table('course')->insert(
            [
            'name'                 => 'Khóa học giao tiếp tiếng Anh nâng cao',
            'user_id'              => 1,
            'description'          => 'Luyện nghe siêu nhận thức chính là phương pháp dành cho bạn. Ucan.vn sở hữu một hệ thống đồ sộ với hơn 1000 videos luyện nghe được thiết kế và thu âm bởi các giáo viên bản xứ hàng đầu. Sự khác biệt của chúng tôi rất rõ ràng: bài nghe được đặt trong một bối cảnh cụ thể mô tả qua hình ảnh, kèm phụ đề Anh – Việt và cung cấp từ mới cuối mỗi bài học.',
            'status'                 => 1,
            'teacher'               => 'Dr Abert'
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 7,
                'id_course' => 1,
        ]);

        DB::table('user_course')->insert(
            [
                'id_user' => 6,
                'id_course' => 1,
        ]);

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

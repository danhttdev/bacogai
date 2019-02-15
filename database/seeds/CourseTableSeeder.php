<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        DB::table('course')->insert(
            [
            'name'                 => 'Khóa học TOEIC',
            'user_id'              => 5,
            'description'          => 'Luyện nghe siêu nhận thức chính là phương pháp dành cho bạn. Ucan.vn sở hữu một hệ thống đồ sộ với hơn 1000 videos luyện nghe được thiết kế và thu âm bởi các giáo viên bản xứ hàng đầu. Sự khác biệt của chúng tôi rất rõ ràng: bài nghe được đặt trong một bối cảnh cụ thể mô tả qua hình ảnh, kèm phụ đề Anh – Việt và cung cấp từ mới cuối mỗi bài học.',
            'status'                 => 1,
            'teacher'               => 'Dr Hoang'
        ]);

        DB::table('course')->insert(
            [
            'name'                 => 'Khóa học IELTS',
            'user_id'              => 2,
            'description'          => 'IELTS được thiết kế có cấu trúc bài thi ứng với thang điểm từ 1 đến 9. Mỗi kỹ năng của IELTS (nghe, nói, đọc, viết) được phân loại như sau: 1 - người chưa dùng tiếng Anh cho đến 9 – người rất giỏi và thành thạo tiếng Anh. Trong khi đó, TOEFL có hệ thống điểm chia theo từng kỹ năng và số điểm của bạn là tổng điểm của mỗi phần thi. Chẳng hạn TOEFL ibt có thang điểm 120, với 30 điểm cho mỗi kỹ năng nghe, nói, đọc, viết. Tổng điểm sẽ xác định độ thành thạo ngôn ngữ của bạn.',
            'status'                 => 1,
            'teacher'               => 'Ms Hoa'
        ]);

        DB::table('course')->insert(
            [
            'name'                 => 'Khóa học TOEFL trong 3 tháng',
            'user_id'              => 4,
            'description'          => 'Với những câu hỏi dạng trặc nghiệm trong bài thi TOEFL, bạn cần có sự suy luận tốt và khả năng tưởng tượng. Trong khi IELTS yêu cầu trả lời câu hỏi dạng tự luận, chẳng hạn nghe và điền vào chỗ trống, tìm câu trả lời từ bài đọc/hội thoại. Điều này yêu cầu bạn có trí nhớ và ghi chú tốt những chi tiết nhỏ trong bài.',
            'status'                 => 1,
            'teacher'               => 'Dr. BnB'
        ]);
    }
}

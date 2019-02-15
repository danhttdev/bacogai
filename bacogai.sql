-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2019 at 09:38 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.32-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacogai`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `user_id`, `name`, `teacher`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Khóa học giao tiếp tiếng Anh', 'Man Nguyen', 'Luyện nghe siêu nhận thức chính là phương pháp dành cho bạn. Ucan.vn sở hữu một hệ thống đồ sộ với hơn 1000 videos luyện nghe được thiết kế và thu âm bởi các giáo viên bản xứ hàng đầu. Sự khác biệt của chúng tôi rất rõ ràng: bài nghe được đặt trong một bối cảnh cụ thể mô tả qua hình ảnh, kèm phụ đề Anh – Việt và cung cấp từ mới cuối mỗi bài học. Bạn sẽ vừa nghe, vừa nhìn và vừa ghi nhớ kiến thức liên tục. Vậy thay vì chỉ tắm ngôn ngữ, với kỹ thuật siêu nhận thức, bạn sẽ nghe chủ động và ngấm toàn bộ bài học. Chúng tôi tự tin rằng áp dụng kỹ thuật này 15 phút mỗi ngày, bạn sẽ xem phim Mỹ không cần phụ đề chỉ sau 3 tháng.', 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(2, 1, 'Khóa học giao tiếp tiếng Anh 2', 'Scrum Master', 'Tất cả các hoạt động học trên Ucan.vn được thiết kế theo nguyên lý EDUTAINMENT (học mà chơi), khiến bạn luôn thay đổi cảm giác, học mà không phải "lên gân", không phải "gồng mình", không phải "cố gắng tiếp thu". Giống như chơi trò chơi vậy, những gì bạn thấy thoải mái, hiệu quả sẽ tăng lên nhiều phải không?', 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(3, 1, 'Khóa học giao tiếp tiếng Anh nâng cao', 'Dr Abert', 'Luyện nghe siêu nhận thức chính là phương pháp dành cho bạn. Ucan.vn sở hữu một hệ thống đồ sộ với hơn 1000 videos luyện nghe được thiết kế và thu âm bởi các giáo viên bản xứ hàng đầu. Sự khác biệt của chúng tôi rất rõ ràng: bài nghe được đặt trong một bối cảnh cụ thể mô tả qua hình ảnh, kèm phụ đề Anh – Việt và cung cấp từ mới cuối mỗi bài học.', 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(4, 5, 'Khóa học TOEIC', 'Dr Hoang', 'Luyện nghe siêu nhận thức chính là phương pháp dành cho bạn. Ucan.vn sở hữu một hệ thống đồ sộ với hơn 1000 videos luyện nghe được thiết kế và thu âm bởi các giáo viên bản xứ hàng đầu. Sự khác biệt của chúng tôi rất rõ ràng: bài nghe được đặt trong một bối cảnh cụ thể mô tả qua hình ảnh, kèm phụ đề Anh – Việt và cung cấp từ mới cuối mỗi bài học.', 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(5, 2, 'Khóa học IELTS', 'Ms Hoa', 'IELTS được thiết kế có cấu trúc bài thi ứng với thang điểm từ 1 đến 9. Mỗi kỹ năng của IELTS (nghe, nói, đọc, viết) được phân loại như sau: 1 - người chưa dùng tiếng Anh cho đến 9 – người rất giỏi và thành thạo tiếng Anh. Trong khi đó, TOEFL có hệ thống điểm chia theo từng kỹ năng và số điểm của bạn là tổng điểm của mỗi phần thi. Chẳng hạn TOEFL ibt có thang điểm 120, với 30 điểm cho mỗi kỹ năng nghe, nói, đọc, viết. Tổng điểm sẽ xác định độ thành thạo ngôn ngữ của bạn.', 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(6, 4, 'Khóa học TOEFL trong 3 tháng', 'Dr. BnB', 'Với những câu hỏi dạng trặc nghiệm trong bài thi TOEFL, bạn cần có sự suy luận tốt và khả năng tưởng tượng. Trong khi IELTS yêu cầu trả lời câu hỏi dạng tự luận, chẳng hạn nghe và điền vào chỗ trống, tìm câu trả lời từ bài đọc/hội thoại. Điều này yêu cầu bạn có trí nhớ và ghi chú tốt những chi tiết nhỏ trong bài.', 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(317, '2014_10_12_000000_create_users_table', 1),
(318, '2014_10_12_100000_create_password_resets_table', 1),
(319, '2019_02_14_041707_create_course_table', 1),
(320, '2019_02_14_041718_create_videos_table', 1),
(321, '2019_02_14_041728_create_user_course_table', 1),
(322, '2019_02_14_093054_create_comment_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$WYPfFNRX/BhkSy/WiRCIdeJaTOGWBz4fMiC6Mb6FzA.nYia2cB.Lu', NULL, 1, NULL, NULL),
(2, 'Editor', 'editor@gmail.com', '$2y$10$jZVe.85ZgvM7i20zabkgduJ4rIj9sktUtfOqPR5EBR/HO1mPmdg2a', NULL, 2, NULL, NULL),
(3, 'Student', 'student@gmail.com', '$2y$10$ipPdBjteCtLt79VBrdHCBejMnCN4cgzgzA32mt9eqnwZPjXTuq7.m', NULL, 3, NULL, NULL),
(4, 'Student1', 'student1@gmail.com', '$2y$10$HAggJxqDQC4ME.DzC/IzjOu.MdksYs4g02XTQXuXSuvlyxghejY1G', NULL, 3, NULL, NULL),
(5, 'Student2', 'student2@gmail.com', '$2y$10$3QScqYdkmWBtBS3NIt9xW.MbFu4XET0Mo1ihQOC40J2TD559nNSTq', NULL, 3, NULL, NULL),
(6, 'Student3', 'student3@gmail.com', '$2y$10$ngrsxZpRsaqwGhHt3jhlpOrmWOXr7asMmbugkFhC4a2v4X.9E/g3m', NULL, 3, NULL, NULL),
(7, 'Student4', 'student4@gmail.com', '$2y$10$omQyT7LIxEiI4gXfLCKuy.D/CRpcEEWHneRkVmWkjs04XEfM1RNv6', NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`id`, `id_user`, `id_course`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, '1', 2, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(2, 4, '2', 4, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(3, 4, '3', 5, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(4, 5, '2', 5, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(5, 6, '1', 3, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(6, 7, '1', 2, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(7, 7, '2', 5, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(8, 7, '5', 2, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `course_id`, `link`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trailer', 1, 'https://www.youtube.com/watch?v=capHNO_iMIU', 0, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(2, 'Trailer', 2, 'https://www.youtube.com/watch?v=capHNO_iMIU', 0, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(3, 'Trailer', 3, 'https://www.youtube.com/watch?v=capHNO_iMIU', 0, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(4, 'Trailer', 4, 'https://www.youtube.com/watch?v=capHNO_iMIU', 0, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(5, 'Trailer', 5, 'https://www.youtube.com/watch?v=capHNO_iMIU', 0, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19'),
(6, 'Trailer', 6, 'https://www.youtube.com/watch?v=capHNO_iMIU', 0, 1, '2019-02-15 02:31:19', '2019-02-15 02:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 01:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crossdev_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `payment_status` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `video_url`, `views`, `payment_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=RgvNLKvPNBI', 100, 'paid', 1, '2023-08-13 13:05:38', '2023-08-13 13:05:38'),
(2, 'https://www.youtube.com/watch?v=RgvNLKvPNBI', 200, 'paid', 2, '2023-08-13 13:05:38', '2023-08-13 13:05:38'),
(3, 'https://www.youtube.com/watch?v=RgvNLKvPNBI', 300, 'paid', 3, '2023-08-13 13:05:38', '2023-08-13 13:05:38'),
(4, 'https://www.youtube.com/watch?v=RgvNLKvPNBI', 400, 'paid', 4, '2023-08-13 13:05:38', '2023-08-13 13:05:38'),
(5, 'https://www.youtube.com/watch?v=RgvNLKvPNBI', 500, 'paid', 5, '2023-08-13 13:05:38', '2023-08-13 13:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `date`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, '2023-08-13', 1, 1, '2023-08-13 12:37:32', '2023-08-13 12:37:32'),
(2, '2023-08-13', 2, 2, '2023-08-13 12:37:32', '2023-08-13 12:37:32'),
(3, '2023-08-13', 3, 3, '2023-08-13 12:37:32', '2023-08-13 12:37:32'),
(4, '2023-08-13', 4, 4, '2023-08-13 12:37:32', '2023-08-13 12:37:32'),
(5, '2023-08-13', 5, 5, '2023-08-13 12:37:32', '2023-08-13 12:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `mentor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `category`, `price`, `mentor_id`, `created_at`, `updated_at`) VALUES
(1, 'Course 1', 'Description 1', 'Category 1', '100.00', 1, '2023-08-13 12:07:26', '2023-08-13 12:07:26'),
(2, 'Course 2', 'Description 2', 'Category 2', '200.00', 2, '2023-08-13 12:07:26', '2023-08-13 12:07:26'),
(3, 'Course 3', 'Description 3', 'Category 3', '300.00', 3, '2023-08-13 12:07:26', '2023-08-13 12:07:26'),
(4, 'Course 4', 'Description 4', 'Category 4', '400.00', 4, '2023-08-13 12:07:26', '2023-08-13 12:07:26'),
(5, 'Course 5', 'Description 5', 'Category 5', '500.00', 5, '2023-08-13 12:07:26', '2023-08-13 12:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `is_read`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Notification 1', 0, 1, '2023-08-13 13:10:39', '2023-08-13 13:10:39'),
(2, 'Notification 2', 0, 2, '2023-08-13 13:10:39', '2023-08-13 13:10:39'),
(3, 'Notification 3', 0, 3, '2023-08-13 13:10:39', '2023-08-13 13:10:39'),
(4, 'Notification 4', 0, 4, '2023-08-13 13:10:39', '2023-08-13 13:10:39'),
(5, 'Notification 5', 0, 5, '2023-08-13 13:10:39', '2023-08-13 13:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `mentor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `category`, `price`, `mentor_id`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'Description 1', 'Category 1', '100.00', 1, '2023-08-13 12:26:52', '2023-08-13 12:26:52'),
(2, 'Product 2', 'Description 2', 'Category 2', '200.00', 2, '2023-08-13 12:26:52', '2023-08-13 12:26:52'),
(3, 'Product 3', 'Description 3', 'Category 3', '300.00', 3, '2023-08-13 12:26:52', '2023-08-13 12:26:52'),
(4, 'Product 4', 'Description 4', 'Category 4', '400.00', 4, '2023-08-13 12:26:52', '2023-08-13 12:26:52'),
(5, 'Product 5', 'Description 5', 'Category 5', '500.00', 5, '2023-08-13 12:26:52', '2023-08-13 12:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Review 1', 1, '2023-08-13 12:31:01', '2023-08-13 12:31:01'),
(2, 'Review 2', 2, '2023-08-13 12:31:01', '2023-08-13 12:31:01'),
(3, 'Review 3', 3, '2023-08-13 12:31:01', '2023-08-13 12:31:01'),
(4, 'Review 4', 4, '2023-08-13 12:31:01', '2023-08-13 12:31:01'),
(5, 'Review 5', 5, '2023-08-13 12:31:01', '2023-08-13 12:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(2, 'Manager', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(3, 'Counselor', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(4, 'Mentor', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(5, 'Teacher', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(6, 'Student', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(7, 'Parent', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(8, 'Advertiser', '2021-02-03 17:34:58', '2021-02-03 17:34:58'),
(9, 'Visitor', '2021-02-03 17:34:58', '2021-02-03 17:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `transaction_code`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '100.00', 'ABC123', 1, '2023-08-13 12:35:11', '2023-08-13 12:35:11'),
(2, '200.00', 'DEF456', 2, '2023-08-13 12:35:11', '2023-08-13 12:35:11'),
(3, '300.00', 'GHI789', 3, '2023-08-13 12:35:11', '2023-08-13 12:35:11'),
(4, '400.00', 'JKL012', 4, '2023-08-13 12:35:11', '2023-08-13 12:35:11'),
(5, '500.00', 'MNO345', 5, '2023-08-13 12:35:11', '2023-08-13 12:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe@example.com', NULL, 'password', 1, NULL, '2023-08-13 09:45:35', '2023-08-13 09:46:06'),
(2, 'Jane Doe', 'janedoe@example.com', NULL, 'password', 2, NULL, '2023-08-13 09:45:35', '2023-08-13 09:45:35'),
(3, 'Bob Smith', 'bobsmith@example.com', NULL, 'password', 3, NULL, '2023-08-13 09:45:35', '2023-08-13 09:45:35'),
(4, 'Alice Johnson', 'alicejohnson@example.com', NULL, 'password', 4, NULL, '2023-08-13 09:45:35', '2023-08-13 09:45:35'),
(5, 'Tom Wilson', 'tomwilson@example.com', NULL, 'password', 5, NULL, '2023-08-13 09:45:35', '2023-08-13 09:45:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_mentor_id_foreign` (`mentor_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentor_id` (`mentor_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `attendances_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_mentor_id_foreign` FOREIGN KEY (`mentor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

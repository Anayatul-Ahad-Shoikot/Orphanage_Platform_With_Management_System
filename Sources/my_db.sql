-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 03:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `priyority` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adoptions`
--

CREATE TABLE `adoptions` (
  `adoption_id` int(5) NOT NULL,
  `orphan_id` int(5) NOT NULL,
  `org_id` int(5) NOT NULL,
  `request_id` int(5) NOT NULL,
  `request_date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `issued_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_actions`
--

CREATE TABLE `blog_actions` (
  `id` int(11) NOT NULL,
  `post_id` int(5) NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_actions`
--

INSERT INTO `blog_actions` (`id`, `post_id`, `likes`, `comments`) VALUES
(17, 47, 2, ''),
(18, 48, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`comment_id`, `post_id`, `user_name`, `comments`, `date`) VALUES
(10, 47, 'ela2', 'HIII', '2023-11-15 03:20:11'),
(11, 47, 'ela2', 'HELLOW', '2023-11-15 03:20:17'),
(12, 47, 'ela2', 'dawdas', '2023-11-15 03:20:42'),
(13, 48, 'ela2', 'qwe', '2023-11-15 14:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE `blog_likes` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `viewer_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_likes`
--

INSERT INTO `blog_likes` (`like_id`, `post_id`, `viewer_username`) VALUES
(40, 47, 'ela2'),
(41, 47, 'sabrina2'),
(42, 48, 'ela2');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` enum('child','old') NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `published` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `title`, `user_name`, `content`, `category`, `img_path`, `published`) VALUES
(47, 'ahad shoikot', 'ela2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'child', 'img/Screenshot 2023-09-19 000957.png', '2023-11-15 04:19:53'),
(48, 'qwert', 'ela2', 'qwe', 'old', 'img/Screenshot 2023-11-10 194906.png', '2023-11-15 15:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `org_details`
--

CREATE TABLE `org_details` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `contact_email` varchar(30) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `established_date` date DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `mission_and_vision` varchar(30) DEFAULT NULL,
  `reviews_testimonials` varchar(30) DEFAULT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_details`
--

INSERT INTO `org_details` (`org_id`, `org_name`, `user_name`, `description`, `contact_email`, `contact_phone`, `address`, `website`, `logo_path`, `established_date`, `location`, `mission_and_vision`, `reviews_testimonials`, `country`) VALUES
(12, 'Charity By Ela2', 'ela2', 'it is the oldest charity. We a', 'CharityByEla2@gmail.com', '01973336001', 'Madani avenew, Notun bazar, Dh', 'https://www.ela2Charity.com', 'img/Screenshot 2023-10-05 145951.png', '1985-07-17', 'Dhanmondi', 'To complete every child\'s wish', '', 'Bangladesh'),
(14, 'Sabrina Charity 123', 'sabrina2', 'We take care our childs like a mother', 'SC@gmail.com.org', '12345678910', 'mohakhali, dhaka - 1212', 'https://www.sab2Charity.com', 'img/Screenshot 2023-11-10 185814.png', '2023-03-09', 'Dhaka', 'To complete every child\'s wish', '', 'India'),
(15, 'shetu charity', 'shetu', 'it is the oldest charity. We all known as for our ', 'salim@gmail.com', '+8801973336001', 'mirpur -2', 'Charity By Ela2', 'img/Screenshot 2023-09-19 215724.png', '2023-11-11', 'Boshundhora , Dhaka - 1216', 'adswdaSD', '', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `orphan_profiles`
--

CREATE TABLE `orphan_profiles` (
  `orphan_id` int(11) NOT NULL,
  `org_id` int(30) DEFAULT NULL,
  `org_name` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_contact` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `since` date NOT NULL,
  `family_status` varchar(20) NOT NULL,
  `physical_condition` varchar(20) NOT NULL,
  `education_level` varchar(30) NOT NULL,
  `medical_history` text DEFAULT NULL,
  `hobby` text DEFAULT NULL,
  `favorite_food` varchar(255) DEFAULT NULL,
  `favorite_games` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `dreams` text DEFAULT NULL,
  `problems` text DEFAULT NULL,
  `other_comments` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orphan_profiles`
--

INSERT INTO `orphan_profiles` (`orphan_id`, `org_id`, `org_name`, `first_name`, `last_name`, `age`, `address`, `guardian_name`, `guardian_contact`, `gender`, `religion`, `date_of_birth`, `since`, `family_status`, `physical_condition`, `education_level`, `medical_history`, `hobby`, `favorite_food`, `favorite_games`, `skills`, `dreams`, `problems`, `other_comments`, `image_path`) VALUES
(10, 14, 'sabrina2', 'asd', 'xyz', 12, 'asd', 'asd', 'asd', '', '', '0000-00-00', '2023-11-14', '', '', '', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'img/011-201-021.jpg'),
(12, 14, 'sabrina2', 'Anayatul', 'Shoikot', 23, 'dadw', 'bahar uddin', '+8801973336001', 'female', 'cristian', '2023-11-11', '2023-11-15', 'unknow', 'disabled', 'primary_school', 'wad', 'awd', 'asdwd', 'asd', 'fyj', 'dfyjf', 'adf', 'Wjuyighjfy', 'img/Screenshot 2023-10-30 232034.png'),
(13, 12, 'ela2', 'Shorifa', 'Rani', 25, 'mirpur -2', 'bahar uddin', '+8801973336001', 'female', 'buddha', '2023-11-13', '2023-11-15', 'unknow', 'deaf', 'senior_high_school', 'wad', 'awd', 'asdwd', 'asd', 'fyj', 'dfyjf', 'adf', 'Wjuyighjfy', 'img/Screenshot 2023-11-05 231333.png'),
(16, 15, 'shetu', 'Anayatul', 'Shoikot', 0, 'Madani avenew, Notun bazar, Dhaka - 1216', '', '0324325436', '', '', '0000-00-00', '2023-11-15', '', '', '', '', '', '', '', '', '', '', '', 'img/Screenshot 2023-10-24 095707.png');

-- --------------------------------------------------------

--
-- Table structure for table `removed_orphans`
--

CREATE TABLE `removed_orphans` (
  `si` int(11) NOT NULL,
  `orphan_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `org_name` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_contact` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `since` date NOT NULL,
  `family_status` varchar(20) NOT NULL,
  `physical_condition` varchar(20) NOT NULL,
  `education_level` varchar(30) NOT NULL,
  `medical_history` text DEFAULT NULL,
  `hobby` text DEFAULT NULL,
  `favorite_food` varchar(255) DEFAULT NULL,
  `favorite_games` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `dreams` text DEFAULT NULL,
  `problems` text DEFAULT NULL,
  `other_comments` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `removed_orphans`
--

INSERT INTO `removed_orphans` (`si`, `orphan_id`, `org_id`, `org_name`, `first_name`, `last_name`, `age`, `address`, `guardian_name`, `guardian_contact`, `gender`, `religion`, `date_of_birth`, `since`, `family_status`, `physical_condition`, `education_level`, `medical_history`, `hobby`, `favorite_food`, `favorite_games`, `skills`, `dreams`, `problems`, `other_comments`, `image_path`) VALUES
(4, 9, 0, 'ela2', 'asd', 'xyz', 12, 'asd', 'asd', 'asd', 'female', 'hindu', '2023-11-11', '2023-11-14', 'unknow', 'autistic', 'junior_high_school', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Uploads3/111-213-034.jpg'),
(5, 11, 14, 'sabrina2', 'Anayatul', 'Shoikot', 0, '', '', '+8801973336001', '', '', '0000-00-00', '2023-11-15', 'other', '', '', 'wad', 'awd', 'Hadudu', '', '', '', '', '', 'img/Screenshot 2023-09-23 193732.png'),
(6, 15, 12, 'ela2', 'Anayatul', 'Shoikot', 0, 'dadw', '', '+8801973336001', '', '', '0000-00-00', '2023-11-15', '', '', '', '', '', '', '', '', '', '', '', 'img/Screenshot 2023-09-29 090840.png'),
(7, 14, 12, 'ela2', 'sabrina zaman', 'Rani', 11, 'mirpur -2', 'bahar uddin', '+8801973336001', '', '', '0000-00-00', '2023-11-15', '', '', '', 'wad', 'awd', 'asdwd', 'asd', 'fyj', 'dfyjf', 'adf', 'Wjuyighjfy', 'img/Screenshot 2023-10-26 225946.png'),
(8, 17, 15, 'shetu', 'Shorifa', 'Rani', 0, 'mirpur -2', '', '+8801973336001', '', '', '0000-00-00', '2023-11-15', '', '', '', '', '', '', '', '', '', '', '', 'img/Screenshot 2023-11-08 102338.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `acc_type` varchar(30) NOT NULL,
  `since` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `user_pass`, `user_email`, `acc_type`, `since`) VALUES
(36, 'ahad3', '$2y$10$Zikd2g72i48KlYIGfRh3I.fQxuwSsbQwYS8kMrDM4xgvvhQ7envGW', 'aashoikot002@gmail.com', 'user', '2023-11-13 11:54:18'),
(37, 'ela2', '$2y$10$YqAs/fajdTKen9wPtrcQv.Cj0.ns4H0Ydfb.DQ9y1oWHcFanESp6q', 'ela2@gmail.com', 'org', '2023-11-13 11:55:57'),
(38, 'admin', '$2y$10$iVwuPBUbsEzjPvrChuN5FemjrzGTc0LIlACDGgr14av6y3VW6cxFy', 'admin@gmail.com', 'admin', '2023-11-13 11:58:59'),
(39, 'sabrina2', '$2y$10$Kv0HzjPhb3D3owqS7cUSHu5b818mAwntx2FrzUWclGfiJvXR0sKFy', 's@gmail.com', 'org', '2023-11-14 15:39:35'),
(40, 'shetu', '$2y$10$KtKQjX9t0DG2cpXHIZFwc.AGOzbJ1U/me5IiydbhPImVx77onUWqm', 'shet', 'org', '2023-11-15 08:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `SI` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `user_contact` varchar(30) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `NID` varchar(30) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `work_name` varchar(30) DEFAULT NULL,
  `work_add` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `image_path` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`SI`, `full_name`, `user_name`, `birthdate`, `user_contact`, `gender`, `NID`, `address`, `website`, `work_name`, `work_add`, `area`, `country`, `image_path`) VALUES
(16, '', 'ahad3', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adoptions`
--
ALTER TABLE `adoptions`
  ADD PRIMARY KEY (`adoption_id`);

--
-- Indexes for table `blog_actions`
--
ALTER TABLE `blog_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `org_details`
--
ALTER TABLE `org_details`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `orphan_profiles`
--
ALTER TABLE `orphan_profiles`
  ADD PRIMARY KEY (`orphan_id`);

--
-- Indexes for table `removed_orphans`
--
ALTER TABLE `removed_orphans`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`SI`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `adoption_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_actions`
--
ALTER TABLE `blog_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `org_details`
--
ALTER TABLE `org_details`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orphan_profiles`
--
ALTER TABLE `orphan_profiles`
  MODIFY `orphan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `removed_orphans`
--
ALTER TABLE `removed_orphans`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `SI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

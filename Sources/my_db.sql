-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 06:10 PM
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

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `user_id`, `user_name`, `priyority`, `image`) VALUES
(1, 38, 'admin', 1, 'admin.png');

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
(18, 48, 2, ''),
(19, 49, 0, ''),
(20, 50, 0, '');

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
(13, 48, 'ela2', 'qwe', '2023-11-15 14:38:43'),
(14, 47, 'ela2', 'dfgSDfsAE', '2023-11-15 16:28:46'),
(15, 47, 'ela2', 'sadawd', '2023-11-20 06:55:02');

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
(41, 47, 'sabrina2'),
(42, 48, 'ela2'),
(43, 47, 'ela2'),
(44, 48, 'ls_foundation');

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
(48, 'qwert', 'ela2', 'qwe', 'old', 'img/Screenshot 2023-11-10 194906.png', '2023-11-15 15:38:38'),
(49, 'Testing from admin side', 'admin', 'asdA:IWEFhdklsfiepofhsjdlfbaiwgfUQeo:F', 'child', 'img/IMG_20190310_164429.jpg', '2023-11-19 06:34:11'),
(50, 'd', 'ls_foundation', 'adw', 'child', 'img/default-avatar.png', '2023-11-20 07:18:00');

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
(12, 'Charity By Ela2', 'ela2', 'aaaa', 'CharityByEla2@gmail.com', '01973336001', 'Madani avenew, Notun bazar, Dh', 'https://www.ela2Charity.com', 'img/Screenshot 2023-10-05 145951.png', '1985-07-17', 'Dhanmondi', 'To complete every child\'s wish', '', 'Bangladesh'),
(14, 'Sabrina Charity 123', 'sabrina2', 'We take care our childs like a mother', 'SC@gmail.com.org', '12345678910', 'mohakhali, dhaka - 1212', 'https://www.sab2Charity.com', 'img/Screenshot 2023-11-10 185814.png', '2023-03-09', 'Dhaka', 'To complete every child\'s wish', '', 'India'),
(15, 'shetu charity', 'shetu', 'it is the oldest charity. We all known as for our ', 'salim@gmail.com', '+8801973336001', 'mirpur -2', 'Charity By Ela2', 'img/Screenshot 2023-09-19 215724.png', '2023-11-11', 'Boshundhora , Dhaka - 1216', 'adswdaSD', '', 'Bangladesh'),
(16, 'Little Sprouts Foundation', 'ls_foundation', 'Child Welfare Organization', 'info@littlesproutsfoundation.o', '+880667788990', '40 Child Care Lane, Mohakhali, Dhaka', 'www.littlesproutsfoundation.or', 'img/vector-charitable-foundation-logo-illustration.jpg', '2005-05-19', 'Mohakhali, Dhaka', 'Nurturing and educating vulner', '', 'Bangladesh'),
(17, 'Safe Haven Orphanage', 'safe_haven', 'Providing a safe and nurturing environment for orp', 'info@safehaven.org', '+880112233445', '40 Safe Haven Road, mirpur -2, Dhaka', 'www.safehaven.org', 'img/8ddd1ee70aedfb9dc38884330abaf0e3_resize.jpg', '2023-11-07', 'mirpur - 2', 'Child Care and Protection', '', 'Bangladesh');

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
(12, 14, 'sabrina2', 'ahad', 'Shoikot', 9, '40 Child Care Lane, Mohakhali, Dhaka', 'bahar uddin', '+8801973336001', 'male', 'muslim', '2023-11-30', '2023-11-15', 'other', 'good', 'secondary_school', 'Good', 'Gamming', 'Fast Food', 'Badminton', 'Fast learners', 'Full Stack Developer', 'Addicted to games', 'All okay', 'img/Screenshot 2023-10-30 232034.png'),
(16, 16, 'ls_foundation', 'Zohura', 'Alim', 0, 'Madani avenew, Notun bazar, Dhaka', '', '0324325436', 'female', 'hindu', '2023-11-15', '2014-11-11', '', '', '', '', '', '', '', '', '', '', '', 'img/011-201-021.jpg'),
(19, 16, 'ls_foundation', 'Tasnim', 'Rahman', 13, '25 Mirpur Road, Dhaka', 'Abu Islam', '+880998877665', 'female', 'hindu', '2023-11-06', '2023-11-15', 'unknow', 'deaf', 'primary_school', 'Allergy to Dust', 'Singing', 'Ice Cream', 'Hide and Seek', 'Singing', 'Become a Singer', 'none', 'Loves exploring new things', 'img/xyz.jpg'),
(20, 17, 'safe_haven', 'Arham', 'Hasan', 4, '89 Mohammadpur Street, Dhaka', 'Rubina Hasan', '+880778899665', 'male', 'cristian', '2023-11-08', '2023-11-16', 'abondoned', 'autistic', 'kindergarten', 'none', 'playing', 'polaw', 'cricket', 'none', 'none', 'none', 'Enjoys playing with siblings', 'img/da.jpg');

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
(8, 17, 15, 'shetu', 'Shorifa', 'Rani', 0, 'mirpur -2', '', '+8801973336001', '', '', '0000-00-00', '2023-11-15', '', '', '', '', '', '', '', '', '', '', '', 'img/Screenshot 2023-11-08 102338.png'),
(9, 21, 16, 'ls_foundation', 'Tahmin Ahnaf', 'limon', 12, '', '', '', '', '', '0000-00-00', '2023-11-20', '', '', '', '', '', '', '', '', '', '', '', 'img/404434189_721834109974763_6012777654000677673_n.jpg');

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
(40, 'shetu', '$2y$10$KtKQjX9t0DG2cpXHIZFwc.AGOzbJ1U/me5IiydbhPImVx77onUWqm', 'shet', 'org', '2023-11-15 08:33:59'),
(41, 'ls_foundation', '$2y$10$fF4QdVWFXa/Ty3ierooxR.InuvYn1v9/lQVHsy1F9L6IQ6nyzIDG.', 'info@littlesproutsfoundation.o', 'org', '2023-11-15 19:21:00'),
(42, 'safe_haven', '$2y$10$jxjXemx5tM5zYCLzurTexOhnTrprpH4KqceCw3ScGcpUpX5sNM6E2', 'info@safehaven.org', 'org', '2023-11-16 06:09:54');

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
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`SI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `adoption_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_actions`
--
ALTER TABLE `blog_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `org_details`
--
ALTER TABLE `org_details`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orphan_profiles`
--
ALTER TABLE `orphan_profiles`
  MODIFY `orphan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `removed_orphans`
--
ALTER TABLE `removed_orphans`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `SI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

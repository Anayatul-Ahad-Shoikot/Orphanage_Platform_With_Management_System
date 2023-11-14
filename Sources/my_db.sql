-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 04:02 PM
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
(9, 39, 3, ''),
(10, 40, 2, ''),
(11, 41, 3, ''),
(12, 42, 1, ''),
(13, 43, 1, ''),
(14, 44, 1, ''),
(15, 45, 4, ''),
(16, 46, 2, '');

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
(4, 46, 'ela2', 'this is very good article', '2023-11-13 15:37:31'),
(5, 46, 'ela2', 'wow nice', '2023-11-13 15:37:45'),
(6, 45, 'ela', 'hello ', '2023-11-14 14:38:35'),
(7, 45, 'ela', 'he he he', '2023-11-14 14:38:56'),
(8, 45, 'ela', 'hi hi', '2023-11-14 14:41:57'),
(9, 46, 'ela2', 'fgrg', '2023-11-14 14:42:23');

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
(18, 39, 'ahad'),
(20, 40, 'ela'),
(22, 41, 'ahad'),
(23, 40, 'ahad'),
(24, 42, 'ela'),
(25, 41, 'ela'),
(27, 44, 'ahad'),
(28, 39, 'ela'),
(29, 45, 'ela'),
(31, 43, 'ela'),
(32, 45, 'ahad'),
(34, 39, 'ela2'),
(35, 41, 'ela2'),
(36, 46, 'ela2'),
(37, 45, 'ela2'),
(38, 45, 'sabrina2'),
(39, 46, 'sabrina2');

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
(45, 'asdaw', 'ela', 'SADwd', 'old', 'Uploads2/399739997_917151276441523_6022247235894239656_n.jpg', '2023-11-08 11:04:18'),
(46, 'Ela2 ela2 ela2 ela2 ela2', 'ela2', 'WDasdwDAFudfjhsnUGfSADUOFKJLGfopuegfjadshb:UEfo. AGFKJDABFCGASDUL;e>iGVF. SLKFVBGIEYVFkhlaCV.FCEHFGVSDFVBGIL;EU.KFGBKDV', 'child', 'img/Screenshot 2023-10-12 123940.png', '2023-11-13 15:16:15');

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
(6, 'Child Zone Infinity', 'ela', 'it is the oldest charity. We a', 'ela@g.com', '0324325436', 'Madani avenew, Notun bazar, Dh', 'https://www.sabrina.com', 'Uploads/312308865_507861781367882_3667233183680698455_n.jpg', '1994-04-07', 'tanjum', 'Ensure the future ', '', 'Bangladesh'),
(7, 'Ahnaf\'s Galaxy', 'ahnaf', 'it is the oldest charity. We a', 'ela@g.com', '032431232344', 'Madani avenew, Notun bazar, Dh', 'https://www.ahnaf.com', 'Uploads/011-201-128.jpg', '2320-02-13', 'Uttara - 2', 'To kill all childern', '', 'Bangladesh'),
(8, 'Sabrinas Charity', 'sabrina', 'seves well, helps all. al chir', 'S_charity@gmail.com', '01123243134', 'Madani avenew, Notun bazar, Dh', 'https://www.s_charity.com', 'Uploads/0112320150.png', '0000-00-00', 'Uttara - 2', 'Serve all in once', '', 'Bangladesh'),
(9, 'Sowrins Charity', 'sowrin', 'this is a test charity opening', 'scharity@gmail.com', '0123231453', 'Madani avenew, Notun bazar, Dh', 'https://www.s_charity.com', 'Uploads/R.jfif', '1992-03-13', 'Uttara - 2', 'this is a test charity opening', '', 'Bangladesh'),
(12, 'Charity By Ela2', 'ela2', 'it is the oldest charity. We a', 'CharityByEla2@gmail.com', '01973336001', 'Madani avenew, Notun bazar, Dh', 'https://www.ela2Charity.com', 'img/Screenshot 2023-10-05 145951.png', '1985-07-17', 'Dhanmondi', 'To complete every child\'s wish', '', 'Bangladesh'),
(13, '', 'admin', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(14, 'Sabrina Charity 123', 'sabrina2', 'We take care our childs like a mother', 'SC@gmail.com.org', '12345678910', 'mohakhali, dhaka - 1212', 'https://www.sab2Charity.com', 'img/Screenshot 2023-11-10 185814.png', '2023-03-09', 'Dhaka', 'To complete every child\'s wish', '', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `orphan_profiles`
--

CREATE TABLE `orphan_profiles` (
  `orphan_id` int(11) NOT NULL,
  `org_id` varchar(30) DEFAULT NULL,
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

INSERT INTO `orphan_profiles` (`orphan_id`, `org_id`, `first_name`, `last_name`, `age`, `address`, `guardian_name`, `guardian_contact`, `gender`, `religion`, `date_of_birth`, `since`, `family_status`, `physical_condition`, `education_level`, `medical_history`, `hobby`, `favorite_food`, `favorite_games`, `skills`, `dreams`, `problems`, `other_comments`, `image_path`) VALUES
(2, 'ela', 'sayma', 'Shetu', 14, 'mirpur-2', 'Shorifa', '019732843972', 'other', 'other', '0000-00-00', '2023-11-04', 'other', 'good', 'kindergarten', '', 'Crafts', 'fast Food', 'badminton', 'xyz', 'xyz', 'xyz', 'avarage', 'Uploads3/pic_1.jpg'),
(4, 'ela', 'Shorifa', 'Rani', 9, 'mirpur -2', '', '', 'other', 'hindu', '0232-02-13', '2023-11-04', 'lost', 'mad', 'junior_high_school', 'none', 'swing', 'rice potato', 'kutkut', 'xyz', 'xyz', 'xyz', 'avarage', 'Uploads3/pic_3.jpg'),
(5, 'ela', 'anayatul', 'ahad', 0, '', '', '', '', '', '0000-00-00', '2023-11-08', '', '', '', '', '', '', '', '', '', '', '', 'Uploads3/011212107_2.jpg'),
(7, 'ela', 'Sabrina Zaman', 'Oishee', 22, 'Merul Badda', '--------------------------------------', '---------------', 'female', 'muslim', '2002-02-27', '2023-11-10', 'other', 'good', 'secondary_school', 'none', 'Thinking', 'unknown', 'Chess', 'none', 'A good House Wife ', 'overthinking ', 'Pretty ', 'Uploads3/sabrina.png');

-- --------------------------------------------------------

--
-- Table structure for table `removed_orphans`
--

CREATE TABLE `removed_orphans` (
  `si` int(11) NOT NULL,
  `orphan_id` int(11) NOT NULL,
  `org_id` varchar(30) DEFAULT NULL,
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

INSERT INTO `removed_orphans` (`si`, `orphan_id`, `org_id`, `first_name`, `last_name`, `age`, `address`, `guardian_name`, `guardian_contact`, `gender`, `religion`, `date_of_birth`, `since`, `family_status`, `physical_condition`, `education_level`, `medical_history`, `hobby`, `favorite_food`, `favorite_games`, `skills`, `dreams`, `problems`, `other_comments`, `image_path`) VALUES
(1, 6, 'ela', 'tanjum', '', 0, '', '', '', '', '', '0000-00-00', '2023-11-08', '', '', '', '', '', '', '', '', '', '', '', 'Uploads3/011212107_2.jpg'),
(2, 3, 'ela', 'Shorifa', 'Rani', 9, 'mirpur -2', '', '', 'female', 'muslim', '0123-02-12', '2023-11-04', 'other', 'mad', 'kindergarten', 'none', 'swing', 'rice potato', 'kutkut', '', '', '', '', 'Uploads/0112230549.png');

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
(29, 'ahad', '1234', 'ahad@gmail.com', 'user', '2023-11-02 07:05:10'),
(30, 'ela', 'abc123', 'ela@gmail.com', 'org', '2023-11-02 07:54:04'),
(36, 'ahad3', '$2y$10$Zikd2g72i48KlYIGfRh3I.fQxuwSsbQwYS8kMrDM4xgvvhQ7envGW', 'aashoikot002@gmail.com', 'user', '2023-11-13 11:54:18'),
(37, 'ela2', '$2y$10$YqAs/fajdTKen9wPtrcQv.Cj0.ns4H0Ydfb.DQ9y1oWHcFanESp6q', 'ela2@gmail.com', 'org', '2023-11-13 11:55:57'),
(38, 'admin', '$2y$10$iVwuPBUbsEzjPvrChuN5FemjrzGTc0LIlACDGgr14av6y3VW6cxFy', 'admin@gmail.com', 'admin', '2023-11-13 11:58:59'),
(39, 'sabrina2', '$2y$10$Kv0HzjPhb3D3owqS7cUSHu5b818mAwntx2FrzUWclGfiJvXR0sKFy', 's@gmail.com', 'org', '2023-11-14 15:39:35');

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
(15, 'Anayatul Ahad', 'ahad', '2000-11-30', '01973336001', 'Male', '********************', 'Madani avenew, Notun bazar, Dh', 'https://www.ahad.com', 'Student', 'gulshan - 2, dhaka 1212', 'mirpur-2', 'Bangladesh', 'Uploads/011-212-107.jpg'),
(16, '', 'ahad3', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `adoption_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_actions`
--
ALTER TABLE `blog_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `org_details`
--
ALTER TABLE `org_details`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orphan_profiles`
--
ALTER TABLE `orphan_profiles`
  MODIFY `orphan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `removed_orphans`
--
ALTER TABLE `removed_orphans`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `SI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

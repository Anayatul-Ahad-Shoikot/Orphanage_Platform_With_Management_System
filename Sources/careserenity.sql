-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 11:43 PM
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
-- Database: `careserenity`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_name` varchar(30) NOT NULL,
  `acc_pass` varchar(255) NOT NULL,
  `acc_email` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `acc_join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `acc_name`, `acc_pass`, `acc_email`, `role`, `acc_join_date`) VALUES
(1000, 'ls_foundation', '$2y$10$bCGz2kiPwRj.qCoh.PSuhuOzLVQliuC6/QApt/lAvn1dCVmWO8yvK', 'ls_foundation@gamil.com', 'org', '2023-12-02'),
(1001, 'ahad', '$2y$10$ow5X0gQeOAUD2wJk0GMzL.wXEjekv9YVM8k43b12GAlQKC30N58/K', 'aashoikot002@gmail.com', 'user', '2023-12-03'),
(1002, 'AAS_charity', '$2y$10$.jKISymcs1T1Aw2i56IeCuVHB8KR24u3D3iw3zmLpbo00Diw193mK', 'AAS_charity.org.com', 'org', '2023-12-03'),
(1003, 'ShomajSeba', '$2y$10$FYq/19TSnwIlw3n8OOXuw.qZ/KLtJ1XdgyFUA11doGLyVp/R5ig5u', 'shomajseba@example.com', 'org', '2011-09-15'),
(1004, 'DhakaFoundation', '$2y$10$DQf3SsaKPp./QMfMrkGcxuXgqKSoDkxhY7xzQjntb3TQwlJfyAAlm', 'dhakafoundation@example.com', 'org', '2010-05-20'),
(1005, 'RuralEmpower', '$2y$10$UQo87J/OY6JpWURqUeB/OuCQbRO1GwwijM7dHmxSUiEFBcb7U9zpm', 'rural_empower@example.com', 'org', '2012-12-03'),
(1006, 'GrameenHelp', '$2y$10$NnttPd7VAa2DPozxHkiW5eYe72Nc/vYoYeMWXt6ycQpjHraPlpSQK', 'grameenhelp@example.com', 'org', '2013-07-28'),
(1007, 'ShishuKalyan', '$2y$10$W9IX4DQrA09qV7wJN5bBtOMzXyeGU0g9jqoVUXzQNDp9LxmgJ.gwe', 'shishukalyan@example.com', 'org', '2014-11-10'),
(1008, 'ProjonmoSathi', '$2y$10$vWzPIgTNeMho.a9GJP0G2ewsxOpfZTbd86.Oontd8BPP4pcBSWxPi', 'projonmosathi@example.com', 'org', '2015-06-22'),
(1009, 'JibonSonglap', '$2y$10$B7xHI06bKM3LYkGews.IIuF6JlPkYBJbmOJYdeIh/7O55WKdZ95.6', 'jibonsonglap@example.com', 'org', '2016-09-05'),
(1010, 'NariShakti', '$2y$10$3kfdL83JxDWgJCBkousbJOeejbC2aCano6TJa3yxGv.gqV5G.spem', 'narishakti@example.com', 'org', '2017-12-18'),
(1011, 'AgroVista', '$2y$10$fe0.D3g177cbRbz7cI/WouugIx8eui5X8CJftXHpVN0.VWUT4ANH6', 'agrovista@example.com', 'org', '2018-08-30'),
(1012, 'SustainableBD', '$2y$10$fHPsmqW1XGwkXRp9hWdjKe5JdhgUwHOxmTTZzZn27Cfg8ws75fhRW', 'sustainablebd@example.com', 'org', '2019-10-12'),
(1013, 'admin1', '$2y$10$hNr.buN/lErXXQzREDeqa.zo4E6mL3DNEuNsm6VI2eHL9WIbZnwNa', 'admin1@gmail.com', 'admin', '2023-12-07'),
(1018, 'zamun123', '$2y$10$K6A4y/fYxWWHiT5YE22qUenrtp72p/j91a4PB9FiMIWJh9Xw3s26u', 'sabrina@gmail.com', 'user', '2023-12-11'),
(1019, 'Jftaas', '$2y$10$u50AAENyAk9jo6pOYkl9n.io5ZpdtkIhjeUp/gHi.cMGrXLWkk5o6', 'jannattanjum@gmail.con', 'user', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_list`
--

CREATE TABLE `admin_list` (
  `admin_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_contact` varchar(30) DEFAULT NULL,
  `admin_priyority` int(11) DEFAULT NULL,
  `admin_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_list`
--

INSERT INTO `admin_list` (`admin_id`, `acc_id`, `admin_name`, `admin_contact`, `admin_priyority`, `admin_image`) VALUES
(1, 1013, 'Ahad Shoikot', '0197333798', 1, 'img/011-212-107.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adoptions`
--

CREATE TABLE `adoptions` (
  `adoption_id` int(11) NOT NULL,
  `orphan_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `request_date` date DEFAULT current_timestamp(),
  `status` varchar(15) DEFAULT 'pending',
  `issued_date` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `income` float DEFAULT NULL,
  `maritalStatus` varchar(30) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `children` int(5) DEFAULT NULL,
  `livingEnvironment` varchar(100) DEFAULT NULL,
  `expectations` varchar(100) DEFAULT NULL,
  `additionalInfo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptions`
--

INSERT INTO `adoptions` (`adoption_id`, `orphan_id`, `acc_id`, `request_date`, `status`, `issued_date`, `email`, `phone`, `occupation`, `income`, `maritalStatus`, `reason`, `children`, `livingEnvironment`, `expectations`, `additionalInfo`) VALUES
(8, 23, 1001, '2023-12-07', 'Pending', NULL, 'sayma@gmail.com', '01973336002', 'Student', 25000, 'married', 'Hello', 6, 'good', 'Bad', 'Sad'),
(9, 23, 1001, '2023-12-07', 'Pending', NULL, 'sayma@gmail.com', '01973336002', 'Student', 25000, 'divorced', 'Hello', 6, 'good', 'Bad', 'Sad'),
(10, 24, 1001, '2023-12-07', 'done', '2023-12-16', 'sayma@gmail.com', '01973336002', 'Student', 25000, 'married', 'Hello', 6, 'good', 'Bad', 'Sad'),
(12, 23, 1001, '2023-12-09', 'Pending', '0000-00-00', 'asdwad@g.com', 'awdasd', 'awdsd', 9278400000, 'divorced', 'awd', 0, 'aWD', 'fdhbxdf', 'ghjtfh'),
(14, 48, 1019, '2023-12-15', 'Pending', NULL, 'aashoikot002@gmail.com', '37467235454', 'Doctor', 100, 'married', 'No baby', 0, 'best living place', 'none', 'none'),
(15, 48, 1001, '2023-12-15', 'Pending', NULL, 'ashoikot212107@bscse.uiu.ac.bd', '37467235454', 'Doctor', 100, 'divorced', 'No baby', 3, 'best living place', 'none', 'none'),
(16, 49, 1001, '2023-12-16', 'Pending', NULL, 'shoikotofficial@gmail.com', '37467235454', 'Doctor', 100, 'married', 'No baby', 3, 'best living place', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `post_id` int(11) NOT NULL,
  `viewer_acc_name` varchar(30) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`post_id`, `viewer_acc_name`, `comment`, `comment_date`) VALUES
(51, 'ls_foundation', 's', '2023-12-03'),
(51, 'ls_foundation', 'aadwadsad', '2023-12-03'),
(51, 'AAS_charity', 'oip', '2023-12-03'),
(54, 'Anayatul Ahad Shoikot', 'dawsad', '2023-12-04'),
(54, 'Anayatul Ahad Shoikot', 'awsdwa', '2023-12-04'),
(51, 'Anayatul Ahad Shoikot', 'wad', '2023-12-04'),
(54, 'Anayatul Ahad Shoikot', 'oi', '2023-12-05'),
(54, 'ahad', 'awdawd', '2023-12-15'),
(51, 'DhakaFoundation', 'da', '2023-12-15'),
(51, 'DhakaFoundation', 'dwadawd', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE `blog_likes` (
  `post_id` int(11) NOT NULL,
  `likes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_likes`
--

INSERT INTO `blog_likes` (`post_id`, `likes`) VALUES
(51, 3),
(54, 2),
(56, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `post_title` varchar(30) DEFAULT NULL,
  `post_content` text NOT NULL,
  `post_category` enum('child','old') NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `published` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `acc_id`, `post_title`, `post_content`, `post_category`, `post_image`, `published`) VALUES
(51, 1000, 'Anayatul Ahad Shoikot\'s post', 'I am now fixing my database table. ', 'child', 'img/AnayatulAhadShoikotspost_656ca2ff0972e.jpg', '2023-12-03'),
(54, 1001, 'Anayatul Ahad Shoikot\'s post', 'awdasdw', 'old', 'img/AnayatulAhadShoikotspost_656da61d3ad96.jpg', '2023-12-04'),
(56, 1000, '123', '123', 'old', 'img/123_657df6b4d1992.jpeg', '2023-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(5) NOT NULL,
  `sender_id` int(5) NOT NULL,
  `receiver_id` int(5) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `msg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `sender_id`, `receiver_id`, `date_time`, `msg`) VALUES
(28, 19, 18, '2023-12-14 12:51:40', 'hi'),
(29, 19, 18, '2023-12-15 21:58:00', 'hello '),
(30, 19, 18, '2023-12-15 21:58:44', 'dawdfawd'),
(31, 18, 19, '2023-12-15 22:02:50', 'faiyaz gadha');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_type` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `donor_email` varchar(100) NOT NULL,
  `card_no` varchar(20) DEFAULT NULL,
  `card_cvc` varchar(10) DEFAULT NULL,
  `card_exp_month` varchar(12) DEFAULT NULL,
  `card_exp_year` year(4) DEFAULT NULL,
  `bkash_no` varchar(15) DEFAULT NULL,
  `Bkash_trans` varchar(20) DEFAULT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donation_id`, `donor_id`, `receiver_id`, `receiver_type`, `payment_method`, `donor_email`, `card_no`, `card_cvc`, `card_exp_month`, `card_exp_year`, `bkash_no`, `Bkash_trans`, `amount`) VALUES
(14, 20, 48, 'orphan', 'bkash', 'ela@g.com', NULL, NULL, NULL, NULL, '019723336001', 'asdfghjk', 92934),
(15, 20, 48, 'orphan', 'bkash', 'ela@g.com', NULL, NULL, NULL, NULL, '019723336001', 'asdfghjk', 92934),
(16, 20, 18, 'organization', 'card', 'ela@g.com', '9909', '99', '6', '2023', NULL, NULL, 92934),
(19, 20, 48, 'orphan', 'card', 'salim@gmail.com', '456', '324', '5', '2028', NULL, NULL, 550),
(21, 19, 21, 'organization', 'bkash', 'ela@g.com', NULL, NULL, NULL, NULL, '1234', '2134tyu', 12),
(22, 19, 23, 'orphan', 'card', 'salim@gmail.com', '381254832', '324', '5', '2028', NULL, NULL, 55000),
(24, 17, 22, 'orphan', 'card', 'salim@gmail.com', '1234', '324', '5', '2028', NULL, NULL, 590),
(25, 17, 22, 'orphan', 'bkash', 'ela@g.com', NULL, NULL, NULL, NULL, '987', '89786', 40),
(26, 17, 46, 'orphan', 'bkash', 'ela@g.com', NULL, NULL, NULL, NULL, '76', '76', 76);

-- --------------------------------------------------------

--
-- Table structure for table `donations_orphan`
--

CREATE TABLE `donations_orphan` (
  `orphan_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations_orphan`
--

INSERT INTO `donations_orphan` (`orphan_id`, `total_amount`) VALUES
(22, 0.00),
(23, 55230.00),
(24, 3993263.00),
(46, 76.00);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(11) NOT NULL,
  `uploader_id` int(11) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_reacts` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `uploader_id`, `img_title`, `img_path`, `img_reacts`) VALUES
(7, 1000, 'dsfgvsd', '1702399476.png', 0),
(22, 1001, 'uyi', '1702449665.png', 0),
(23, 1001, 'uyi', '1702449674.png', 0),
(25, 1019, 'awd', '1702642122.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `like_handle`
--

CREATE TABLE `like_handle` (
  `post_id` int(11) NOT NULL,
  `viewer_acc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like_handle`
--

INSERT INTO `like_handle` (`post_id`, `viewer_acc_id`) VALUES
(51, 1000),
(51, 1002),
(51, 1001),
(54, 1001),
(54, 1004);

-- --------------------------------------------------------

--
-- Table structure for table `local_orphan_guardian`
--

CREATE TABLE `local_orphan_guardian` (
  `guardian_id` int(11) NOT NULL,
  `guardian_name` varchar(30) DEFAULT NULL,
  `guardian_contact` varchar(30) DEFAULT NULL,
  `guardian_location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `local_orphan_guardian`
--

INSERT INTO `local_orphan_guardian` (`guardian_id`, `guardian_name`, `guardian_contact`, `guardian_location`) VALUES
(1, 'Farhana Ahmed', '0324325436', 'Madani avenew, Notun bazar, Dh'),
(2, 'bahar uddin', '213214', 'banani'),
(3, 'Rubina Hasan', '+8801973336001', 'mirpur -2'),
(4, 'Abdul Rahman', '+8801712345678', 'Dhaka'),
(5, 'Fatima Akhtar', '+8801812345679', 'Rajshahi'),
(6, 'Kamal Hossain', '+8801912345680', 'Rangpur'),
(7, 'Nasreen Begum', '+8802012345681', 'Chittagong'),
(8, 'Aisha Khan', '+8802112345682', 'Sylhet'),
(9, 'Rafiq Ahmed', '+8802212345683', 'Khulna'),
(10, 'Sultana Begum', '+8802312345684', 'Barisal'),
(11, 'Ahmed Ali', '+8802412345685', 'Gazipur'),
(12, 'Farhana Akter', '+8802512345686', 'Mymensingh'),
(13, 'Kabir Rahman', '+8802612345687', 'Jessore'),
(14, 'Sadia Islam', '+8802712345688', 'Dhaka'),
(15, 'Mizanur Rahman', '+8802812345689', 'Rajshahi'),
(16, 'Laila Begum', '+8802912345690', 'Rangpur'),
(17, 'Anwar Hossain', '+8803012345691', 'Chittagong'),
(18, 'Sara Khan', '+8803112345692', 'Sylhet'),
(19, 'Habib Ahmed', '+8803212345693', 'Khulna'),
(20, 'Nusrat Jahan', '+8803312345694', 'Barisal'),
(21, 'Khalilur Rahman', '+8803412345695', 'Gazipur'),
(22, 'Rubi Akter', '+8803512345696', 'Mymensingh'),
(23, 'Jamal Khan', '+8803612345697', 'Jessore'),
(24, 'Shahida Begum', '+8803712345698', 'Dhaka'),
(25, 'Iqbal Hossain', '+8803812345699', 'Rajshahi'),
(26, 'Rina Akhtar', '+8803912345700', 'Rangpur'),
(27, 'Kamrun Nahar', '+8804012345701', 'Chittagong'),
(28, 'Hasan Ahmed', '+8804112345702', 'Sylhet'),
(29, 'Rahima Begum', '+8804212345703', 'Khulna'),
(30, 'Mominur Rahman', '+8804312345704', 'Barisal'),
(31, 'Nazma Akter', '+8804412345705', 'Gazipur'),
(32, 'Asad Khan', '+8804512345706', 'Mymensingh'),
(33, 'Nahid Hossain', '+8804612345707', 'Jessore'),
(34, 'Ayesha Begum', '+8804712345708', 'Dhaka'),
(35, 'Salim Ahmed', '+8804812345709', 'Rajshahi'),
(36, 'Safia Akhtar', '+8804912345710', 'Rangpur'),
(37, 'Rahim Khan', '+8805012345711', 'Chittagong'),
(38, 'Rahim Khan', '+8805012345711', 'Chittagong'),
(39, 'Safia Begum', '+8804912345710', 'Rangpur'),
(40, 'Xafor Iquebal', '01973336001', 'Bshabo, Dhaka-1216'),
(41, 'Nizamuddin', '01711404674', 'mirpur-2, dhaka-1216'),
(42, '', '0324325436', 'Madani avenew, Notun bazar, Dh'),
(43, 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `orphan_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `content` varchar(100) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `org_id`, `orphan_id`, `is_read`, `content`, `amount`, `date`) VALUES
(1, 17, 18, 23, 1, 'requested to adopt', NULL, '2023-12-07 17:48:39'),
(3, 17, 18, 23, 1, 'requested to adopt', NULL, '2023-12-08 18:05:21'),
(4, 19, 18, 23, 1, 'requested to adopt', NULL, '2023-12-11 17:27:31'),
(8, 19, 18, NULL, 1, 'Donation 1500 Tk sent to Little Sprouts Foundation', NULL, '2023-12-14 04:51:18'),
(9, 19, 18, NULL, 1, 'Donation 500 Tk sent to Little Sprouts Foundation', NULL, '2023-12-14 05:32:31'),
(10, 19, 24, NULL, 1, 'Donation 500 Tk sent to ShishuKalyan', NULL, '2023-12-14 06:03:45'),
(12, 19, NULL, 24, 1, 'Donation 1000000 Tk sent to Shorifa Rani', NULL, '2023-12-14 06:26:41'),
(13, 19, 29, NULL, 1, 'Donation 1000000 Tk sent to SustainableBD', NULL, '2023-12-14 06:27:26'),
(14, 19, 23, NULL, 1, 'Donation 500 Tk sent to Anayatul Shoikot', NULL, '2023-12-14 06:37:17'),
(16, 17, NULL, 24, 0, 'Adoption request approved for Shorifa Rani', NULL, '2023-12-14 18:31:00'),
(17, 17, 22, NULL, 1, '1000000 Tk sent to Sabrina Ahad as gift', NULL, '2023-12-15 05:06:10'),
(20, 20, 18, NULL, 1, 'Donation 92934 Tk sent to Little Sprouts Foundation', NULL, '2023-12-15 12:14:59'),
(21, 20, 21, NULL, 1, 'Donation 550 Tk sent to DhakaFoundation', NULL, '2023-12-15 12:16:42'),
(23, 20, NULL, 48, 1, '550 Tk sent to Maisha Maliha  Neha as gift', NULL, '2023-12-15 12:24:32'),
(24, 20, NULL, 49, 1, '1200023 Tk sent to Nihan Ashraf as gift', NULL, '2023-12-15 12:25:07'),
(25, 19, 21, NULL, 1, 'Donation 12 Tk sent to DhakaFoundation', NULL, '2023-12-15 12:27:04'),
(26, 20, 21, 48, 0, 'requested to adopt', NULL, '2023-12-15 12:38:52'),
(27, 19, NULL, 23, 1, '55000 Tk sent to Anayatul Shoikot as gift', NULL, '2023-12-15 16:08:01'),
(28, 17, 21, 48, 1, 'requested to adopt', NULL, '2023-12-15 16:21:08'),
(29, 17, 21, NULL, 1, 'Donation 7 Tk sent to DhakaFoundation', NULL, '2023-12-15 21:16:54'),
(30, 17, 21, 49, 1, 'requested to adopt', NULL, '2023-12-15 21:22:41'),
(31, 17, NULL, 22, 1, '590 Tk sent to Sabrina Ahad as gift', NULL, '2023-12-16 08:53:17'),
(32, 17, NULL, 22, 1, '40 Tk sent to Sabrina Ahad as gift', NULL, '2023-12-16 08:54:08'),
(33, 17, NULL, 46, 0, '76 Tk sent to Zahid Rahman as gift', NULL, '2023-12-16 09:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `org_list`
--

CREATE TABLE `org_list` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(30) DEFAULT NULL,
  `acc_id` int(11) NOT NULL,
  `org_description` text DEFAULT NULL,
  `org_email` varchar(30) DEFAULT NULL,
  `org_phone` varchar(20) DEFAULT NULL,
  `org_website` varchar(30) DEFAULT NULL,
  `org_logo` varchar(255) DEFAULT NULL,
  `established` date DEFAULT NULL,
  `org_location` varchar(30) DEFAULT NULL,
  `org_vision` varchar(30) DEFAULT NULL,
  `org_reviews` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_list`
--

INSERT INTO `org_list` (`org_id`, `org_name`, `acc_id`, `org_description`, `org_email`, `org_phone`, `org_website`, `org_logo`, `established`, `org_location`, `org_vision`, `org_reviews`) VALUES
(18, 'Shetus best charity', 1000, 'Care, care and care. nothing else is found here', 'ela@g.com', '0324325436', 'LittleSproutsFoundation.org', 'img/LittleSproutsFoundation_656c039da12d5.jpg', '2023-10-26', 'Madani avenew, Notun bazar, Dh', 'To save childer life .', NULL),
(19, 'Safe Haven Orphanage', 1002, 'Care, care and care. nothing else is found here', 'info@safehaven.org', '+880112233445', 'SafeHavenOrphanage.com', 'img/SafeHavenOrphanage_656ccaf3a3e45.jpg', '2023-12-09', 'Khulna', 'To save childer life', NULL),
(20, 'ShomajSeba', 1003, 'Shomaj Seba is committed to improving the lives of orphaned children and elderly people in rural areas. They provide essential support and services to both segments of society.', 'shomajseba@example.com', '+8801812345679', 'www.shomajseba.org', 'img/ShomajSeba_65703538d3cc7.jpg', '1991-11-12', 'Rajshahi', 'Creating a better future for o', NULL),
(21, 'DhakaFoundation', 1004, 'Care, care and care. nothing else is found here', 'dhakafoundation@example.com', '+8801712345678', 'www.dhakafoundation.org', 'img/DhakaFoundation_657034a53c5c9.png', '2000-02-12', 'Dhaka', 'Empower every orphan and elder', NULL),
(22, 'RuralEmpower', 1005, 'Rural Empowerment Society works tirelessly to support orphaned children and the elderly in rural communities. They aim to create a loving and caring environment for both groups.', 'rural_empower@example.com', '+8801912345680', 'www.ruralempower.org', 'img/RuralEmpower_6570355e2b267.jpg', '2007-05-19', 'Dhaka', 'Empowering orphans and the eld', NULL),
(23, 'GrameenHelp', 1006, 'Grameen Help is dedicated to providing assistance and care to orphaned children and elderly individuals in impoverished areas. They aim to uplift both segments of society through various support programs.', 'grameenhelp@example.com', '+8802012345681', 'www.grameenhelp.org', 'img/GrameenHelp_6570357b96922.jpeg', '2000-09-20', 'Chittagong', 'Uplifting lives: Orphans and e', NULL),
(24, 'ShishuKalyan', 1007, 'Shishu Kalyan focuses on the welfare of orphaned children, providing them with love, care, and educational support. They also extend their support to the elderly for a better quality of life.', 'shishukalyan@example.com', '+8802112345682', 'www.shishukalyan.org', 'img/ShishuKalyan_6570359c67f0e.jpg', '1999-01-01', 'Sylhet', 'Ensuring a bright future for o', NULL),
(25, 'ProjonmoSathi', 1008, 'Projonmo Sathi aims to support orphaned children and the elderly by providing education and essential services. They envision a society where both segments thrive and live happily.', 'projonmosathi@example.com', '+8802212345683', 'www.projonmosathi.org', 'img/ProjonmoSathi_657035c99790f.jpg', '2013-12-11', 'Khulna', 'Empowering orphans and elders ', NULL),
(26, 'JibonSonglap', 1009, 'Jibon Songlap works towards creating awareness and providing support for orphaned children and the elderly.', 'jibonsonglap@example.com', '+8802312345684', 'www.jibonsonglap.org', 'img/JibonSonglap_657035e5b0ad9.png', '2001-02-06', 'Barisal', 'Supporting mental well-being f', NULL),
(27, 'NariShakti', 1010, 'Nari Shakti focuses on empowering orphaned girls and elderly women, providing education and support for their well-being. They aim for a society where both segments are respected and empowered.', 'narishakti@example.com', '+8802412345685', 'www.narishakti.org', 'img/NariShakti_657035fd804c2.jpeg', '2013-12-07', 'Dhaka', 'Empowering orphaned girls and ', NULL),
(28, 'AgroVista', 1011, 'Agro Vista is committed to supporting orphaned children and the elderly by promoting sustainable farming and livelihoods. They envision a future where both segments thrive in harmony with nature.', 'agrovista@example.com', '+8802512345686', 'www.agrovista.org', 'img/AgroVista_6570362b6a4fa.jpeg', '2007-01-28', 'Mymensingh', 'Sustainable support for orphan', NULL),
(29, 'SustainableBD', 1012, 'Sustainable Bangladesh focuses on environmental sustainability for the benefit of orphaned children and the elderly. They advocate for eco-friendly practices and a cleaner environment for both segments.', 'sustainablebd@example.com', '+8802612345687', 'www.sustainablebd.org', 'img/SustainableBD_657036676a7e7.jpg', '2013-08-25', 'Jessore', 'Building an eco-friendly futur', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orphan_list`
--

CREATE TABLE `orphan_list` (
  `orphan_id` int(11) NOT NULL,
  `org_id` int(30) DEFAULT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(15) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `since` date DEFAULT NULL,
  `family_status` varchar(30) DEFAULT NULL,
  `physical_condition` varchar(30) DEFAULT NULL,
  `education_level` varchar(30) DEFAULT NULL,
  `medical_history` varchar(100) DEFAULT NULL,
  `hobby` varchar(30) DEFAULT NULL,
  `favorite_food` varchar(30) DEFAULT NULL,
  `favorite_game` varchar(30) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `dreams` text DEFAULT NULL,
  `problems` text DEFAULT NULL,
  `other_comments` text DEFAULT NULL,
  `orphan_image` varchar(255) DEFAULT NULL,
  `adoption_status` enum('0','1') NOT NULL DEFAULT '0',
  `removed_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orphan_list`
--

INSERT INTO `orphan_list` (`orphan_id`, `org_id`, `guardian_id`, `first_name`, `last_name`, `age`, `gender`, `religion`, `date_of_birth`, `since`, `family_status`, `physical_condition`, `education_level`, `medical_history`, `hobby`, `favorite_food`, `favorite_game`, `skills`, `dreams`, `problems`, `other_comments`, `orphan_image`, `adoption_status`, `removed_status`) VALUES
(22, 18, 1, 'Sabrina', 'Ahad', 25, 'male', 'muslim', '2023-12-02', '2023-12-04', 'other', 'good', 'secondary_school', 'None', 'Gamming', 'Ice Cream', 'Badminton', 'Fast learners', 'Full Stack Developer', 'none', 'All okay', 'img/sabrina.png', '0', '0'),
(23, 18, 2, 'Anayatul', 'Shoikot', 11, 'male', 'hindu', '2023-12-22', '2023-12-04', 'past Away', 'deaf', 'junior_high_school', 'None', 'Gamming', 'Ice Cream', 'Badminton', 'xyz', 'A good House Wife ', 'overthinking ', 'All okay', 'img/Shoikot_656d88af00193.jpeg', '0', '0'),
(24, 18, 3, 'Shorifa', 'Rani', 2, 'male', 'buddha', '2023-12-11', '2023-12-04', 'unknow', 'blind', 'elementary', 'None', 'Gamming', 'Ice Cream', 'Badminton', 'xyz', 'A good House Wife ', 'overthinking ', 'All okay', 'img/Rani_656d88d7267b4.jpeg', '0', '0'),
(46, 20, 38, 'Zahid', 'Rahman', 10, 'male', 'muslim', '2023-12-03', '2023-12-06', 'abondoned', 'good', 'primary_school', '', '', '', '', '', '', '', '', 'img/img_2505.jpg', '0', '0'),
(48, 21, 40, 'Maisha Maliha ', 'Neha', 23, 'female', 'muslim', '2023-11-28', '2023-12-15', 'other', 'good', 'secondary_school', 'Major Accident occures at the age of 19', 'Baking', 'Cake', 'Badmintion ', 'Making Cake', 'To be a good beker', 'N/A', 'N/A', 'img/Neha_657c3f9496606.jpg', '0', '0'),
(49, 21, 41, 'Nihan', 'Ashraf', 9, 'male', 'hindu', '2023-11-28', '2023-12-15', 'past Away', 'blind', 'primary_school', 'None', 'Gamming', 'Fast Food', 'Cricket', 'Singing Skills', 'Full Stack Developer', 'overthinking ', 'Loves exploring new things', 'img/Ashraf_657c4040389a2.jpg', '0', '0'),
(50, 18, 42, 'Anayatul', 'Shoikot', 1, '', '', '0000-00-00', '2023-12-16', '', '', '', '', '', '', '', '', '', '', '', 'img/Shoikot_657e0198c0cfb.jpeg', '0', '0'),
(51, 18, 43, 'xyz', 'abc', 12, 'female', 'other', '2023-12-16', '2023-12-16', 'past Away', 'autistic', 'senior_high_school', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'img/girl-dos-300x300.jpg', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `acc_id` int(11) NOT NULL,
  `user_birth` date DEFAULT NULL,
  `user_contact` varchar(30) DEFAULT NULL,
  `user_gender` enum('Male','Female','Other') DEFAULT NULL,
  `user_NID` varchar(30) DEFAULT NULL,
  `user_address` varchar(30) DEFAULT NULL,
  `user_website` varchar(30) DEFAULT NULL,
  `user_job` varchar(30) DEFAULT NULL,
  `user_location` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_id`, `user_name`, `acc_id`, `user_birth`, `user_contact`, `user_gender`, `user_NID`, `user_address`, `user_website`, `user_job`, `user_location`, `user_image`) VALUES
(17, 'anayatul ahad shoikot', 1001, '2000-11-30', '01973336002', 'Male', '1208937821463278', '40 Safe Haven Road, mirpur -2', 'www.ahad.com', 'Student', 'Dhaka', 'img/anayatulahadshoikot_656c174e40478.png'),
(19, 'Sabrina Zaman Oishee', 1018, '2002-02-27', '01718038822', 'Female', '1208937821463278', 'Madani avenew, Notun bazar', 'www.SabrinaZaman.com', 'Student', 'Dhaka', 'img/SabrinaZamanOishee_65772eb949f73.png'),
(20, 'Jannatul Ferdous Tanjum', 1019, '2023-12-18', '01123210744', 'Female', '38742856034', 'mirpur-2', 'www.jannat.fb.com', 'Student', 'Dhaka', 'img/JannatulFerdousTanjum_657c41857de0a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `user_name` (`acc_name`);

--
-- Indexes for table `admin_list`
--
ALTER TABLE `admin_list`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `adoptions`
--
ALTER TABLE `adoptions`
  ADD PRIMARY KEY (`adoption_id`),
  ADD KEY `orphan_id` (`orphan_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `donations_ibfk_1` (`donor_id`);

--
-- Indexes for table `donations_orphan`
--
ALTER TABLE `donations_orphan`
  ADD PRIMARY KEY (`orphan_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `uploader_id` (`uploader_id`);

--
-- Indexes for table `like_handle`
--
ALTER TABLE `like_handle`
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `local_orphan_guardian`
--
ALTER TABLE `local_orphan_guardian`
  ADD PRIMARY KEY (`guardian_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `org_id` (`org_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `orphan_id` (`orphan_id`);

--
-- Indexes for table `org_list`
--
ALTER TABLE `org_list`
  ADD PRIMARY KEY (`org_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `orphan_list`
--
ALTER TABLE `orphan_list`
  ADD PRIMARY KEY (`orphan_id`),
  ADD KEY `org_id` (`org_id`),
  ADD KEY `guardian_id` (`guardian_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT for table `admin_list`
--
ALTER TABLE `admin_list`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `adoption_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `local_orphan_guardian`
--
ALTER TABLE `local_orphan_guardian`
  MODIFY `guardian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `org_list`
--
ALTER TABLE `org_list`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orphan_list`
--
ALTER TABLE `orphan_list`
  MODIFY `orphan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_list`
--
ALTER TABLE `admin_list`
  ADD CONSTRAINT `admin_list_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `adoptions`
--
ALTER TABLE `adoptions`
  ADD CONSTRAINT `adoptions_ibfk_2` FOREIGN KEY (`orphan_id`) REFERENCES `orphan_list` (`orphan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adoptions_ibfk_3` FOREIGN KEY (`acc_id`) REFERENCES `user_list` (`acc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD CONSTRAINT `blog_comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD CONSTRAINT `blog_likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `blog_post_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `user_list` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donations_orphan`
--
ALTER TABLE `donations_orphan`
  ADD CONSTRAINT `donations_orphan_ibfk_1` FOREIGN KEY (`orphan_id`) REFERENCES `orphan_list` (`orphan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`uploader_id`) REFERENCES `accounts` (`acc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like_handle`
--
ALTER TABLE `like_handle`
  ADD CONSTRAINT `like_handle_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`org_id`) REFERENCES `org_list` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user_list` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_5` FOREIGN KEY (`orphan_id`) REFERENCES `orphan_list` (`orphan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `org_list`
--
ALTER TABLE `org_list`
  ADD CONSTRAINT `org_list_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orphan_list`
--
ALTER TABLE `orphan_list`
  ADD CONSTRAINT `orphan_list_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `org_list` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orphan_list_ibfk_2` FOREIGN KEY (`guardian_id`) REFERENCES `local_orphan_guardian` (`guardian_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_list`
--
ALTER TABLE `user_list`
  ADD CONSTRAINT `user_list_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

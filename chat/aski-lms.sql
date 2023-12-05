-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 08:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aski-lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Name`, `Email`, `Password`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `question_title` mediumtext DEFAULT NULL,
  `question_detail` mediumtext NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `question_img` varchar(255) DEFAULT NULL,
  `ques_points` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(30) NOT NULL DEFAULT 'Unanswered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question_title`, `question_detail`, `student_id`, `subject_code`, `question_img`, `ques_points`, `created_at`, `Status`) VALUES
(23, NULL, 'Help me ! I need 2k money for 1 week', 4, 0, '', '12', '2023-11-08 22:47:53', 'Unanswered'),
(24, NULL, 'need help for money', 4, 7, '', '50', '2023-11-06 22:48:48', 'Answered'),
(32, NULL, 'I need of a short-term loan for the next 3 months. ', 7, 3, '', '10', '2023-10-31 22:42:22', 'Donated'),
(38, NULL, 'I need a loan for 2 months', 10, 2, '', '10', '2023-11-12 11:28:30', 'Unanswered'),
(39, NULL, 'An emergency loan is needed for 3 months.', 8, 3, '', '10', '2023-11-12 11:31:20', 'Unanswered'),
(40, NULL, 'hello', 7, 1, '', '10', '2023-11-15 00:41:09', 'Answered'),
(41, NULL, 'hi', 15, 0, '', '20', '2023-11-15 02:17:13', 'Unanswered'),
(42, NULL, 'hi', 15, 8, '', '20', '2023-11-15 02:20:37', 'Unanswered'),
(43, NULL, 'yasin', 15, 2, '', '20', '2023-11-15 02:29:58', 'Unanswered'),
(44, NULL, 'eeee', 15, 1, '', '10', '2023-11-15 02:33:06', 'Unanswered'),
(45, NULL, 'hi', 15, 0, 'yasin.jpg', '10', '2023-11-15 15:36:32', 'Unanswered'),
(46, NULL, 'go', 16, 0, '', '10', '2023-11-15 15:39:24', 'Unanswered'),
(47, NULL, 'go', 16, 0, '', '10', '2023-11-15 15:42:12', 'Unanswered'),
(48, NULL, 'go', 16, 2, 'yasin.jpg', '10', '2023-11-15 15:45:40', 'Unanswered'),
(49, NULL, 'ggggg', 16, 1, '', '10', '2023-11-15 15:46:48', 'Unanswered'),
(50, NULL, 'ttttt', 16, 4, '', '10', '2023-11-15 15:47:14', 'Unanswered'),
(51, NULL, 'ddd', 16, 2, '', '10', '2023-11-15 15:47:55', 'Unanswered'),
(52, NULL, 'jjj', 16, 4, '', '10', '2023-11-15 15:48:40', 'Unanswered'),
(53, NULL, 'jtykjtiykty', 16, 1, '', '10', '2023-11-15 15:48:51', 'Unanswered'),
(54, NULL, 'aaaa', 18, 5, '', '10', '2023-11-15 15:56:04', 'Unanswered'),
(55, NULL, 'hhhhh', 18, 4, '', '10', '2023-11-15 15:57:06', 'Unanswered'),
(56, NULL, 'hhhhh', 18, 7, '', '10', '2023-11-15 16:09:59', 'Unanswered'),
(57, NULL, 'mmm', 18, 1, '', '10', '2023-11-15 16:38:51', 'Unanswered'),
(58, NULL, 'rrrr', 18, 2, '', '10', '2023-11-15 17:55:28', 'Unanswered'),
(59, NULL, 'vvvv', 18, 6, '', '10', '2023-11-15 18:47:52', 'Unanswered'),
(60, NULL, 'd', 6, 1, '', '10', '2023-11-22 12:45:48', 'Unanswered'),
(61, NULL, 'vvvv', 6, 5, '', '10', '2023-11-22 13:21:26', 'Unanswered'),
(62, NULL, 'kj;l', 6, 2, '', '10', '2023-11-22 13:21:56', 'Unanswered'),
(63, NULL, 'tjtrjt', 6, 7, '', '10', '2023-11-22 13:26:48', 'Unanswered'),
(64, NULL, 'uio', 6, 1, '', '5', '2023-11-22 13:49:52', 'Unanswered'),
(65, NULL, '', 6, 0, '', '10', '2023-11-28 00:27:53', 'Unanswered'),
(66, NULL, 'jlghlg', 6, 1, '', '5', '2023-11-28 00:30:00', 'Unanswered');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `sol_id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `Solution` mediumtext NOT NULL,
  `sol_img` varchar(255) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `Full_Name` varchar(20) DEFAULT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `Rank` varchar(20) NOT NULL,
  `points` int(10) DEFAULT 100,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `Full_Name`, `Email`, `Password`, `phone`, `Rank`, `points`, `img`) VALUES
(0, 'Test', 'Test Name', 'test@gmail.com', '123456', '01871038150', 'Newbie', 100, 'pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg'),
(6, 'yasin', 'Md Yasin', 'mdyasin399.my@gmail.com', '123', '01962597810', 'New', 50, 'yasin.jpg'),
(15, 'arif', '', 'arif@gmail.com', '100', '', '', 100, 'prog.png'),
(18, 'g', 'Good', 'g@gmail.com', '12345', '', 'Nice', 100, 'con9.jpg'),
(19, 'yasin399', NULL, 'yes@gmail.com', '123', NULL, '', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `s_code` int(11) NOT NULL,
  `Subject_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `subjects` (`s_code`, `Subject_Name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(5, '4'),
(6, '5'),
(7, '6'),
(8, '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`sol_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`s_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `sol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `s_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 04:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `option_a` varchar(300) DEFAULT NULL,
  `option_b` varchar(300) DEFAULT NULL,
  `option_c` varchar(300) DEFAULT NULL,
  `option_d` varchar(300) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `final_result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`id`, `category_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `update_date`, `created_date`, `status`, `final_result`) VALUES
(1, 1, 'What is PHP?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 18:52:01', '2021-04-02 18:52:01', 1, 'A'),
(2, 3, 'What is NODEJS?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 18:52:23', '2021-04-02 18:52:23', 1, 'A'),
(3, 3, 'why NODEJS?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 18:57:30', '2021-04-02 18:57:30', 1, 'B'),
(4, 4, 'What is JAVA?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 18:57:49', '2021-04-02 18:57:49', 1, 'C'),
(5, 4, 'Why JAVA ?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 19:06:00', '2021-04-02 19:06:00', 1, 'A'),
(6, 4, 'What is NODEJS?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 18:52:23', '2021-04-02 18:52:23', 1, 'D'),
(7, 1, 'PHP function?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 19:12:57', '2021-04-02 19:12:57', 1, 'A'),
(8, 1, 'PHP data type?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 19:13:38', '2021-04-02 19:13:38', 1, 'C'),
(9, 1, 'PHP error?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 19:14:08', '2021-04-02 19:14:08', 1, 'B'),
(10, 3, 'Nodeversion?', 'test1', 'test2', 'test3', 'test4', '2021-04-02 19:14:34', '2021-04-02 19:14:34', 1, 'B'),
(11, 0, '', '', '', '', '', '2021-04-02 19:23:40', '2021-04-02 19:23:40', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `test_category_details`
--

CREATE TABLE `test_category_details` (
  `id` int(11) NOT NULL,
  `category` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_category_details`
--

INSERT INTO `test_category_details` (`id`, `category`, `status`, `created_date`, `update_date`) VALUES
(1, 'PHP', 1, '2021-04-02 14:01:15', '2021-04-02 14:01:15'),
(2, 'JAVA', 1, '2021-04-02 14:01:15', '2021-04-02 14:01:15'),
(3, 'NODEJS', 1, '2021-04-02 14:01:34', '2021-04-02 14:01:34'),
(4, 'JAVA', 1, '2021-04-02 14:01:34', '2021-04-02 14:01:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_category_details`
--
ALTER TABLE `test_category_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test_category_details`
--
ALTER TABLE `test_category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

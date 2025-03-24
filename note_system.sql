-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 10:45 AM
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
-- Database: `note_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `created_at`, `updated_at`, `color`) VALUES
(1, 'SECP3723-02 TEKNOLOGI PEMBANGUNAN SISTEM (SYSTEM DEVELOPMENT TECHNOLGY)', 'Course Synopsis\r\n\r\nThis course provides fundamental theories and practices of using basic technologies and components for web application developments. It focuses on standard XHTML/HTML for content creation, CSS for content presentation, JavaScript for client-side logics, PHP a server-side languages for business logics and data processing with MySQL database. Furthermore, the course will enable the student to build more powerful web solutions and advance to dynamic, database-enabled, website/intranet programming and applications using the open-source PHP scripting language and MySQL database. The course broadly comprises the fundamentals of programming with PHP, relational database design and operations with MySQL, and web solutions using PHP and MySQL. This course prepares students for the real web development process. This course will also expose students to industry’s experiences for two months in web application development through sharing knowledge sessions and work based learning activities with selected organization.\r\n', '2023-11-19 12:44:16', '2023-11-19 12:44:16', 'rgb(242, 215, 213)'),
(2, 'Mini Project Submission', '1. Please put your mini-project code into one folder.\r\n2. Print screen all of the interface and put it inside a Word file.\r\n3. Zip all the files together.\r\n4. Submit.', '2023-11-19 12:45:04', '2023-11-19 12:45:04', 'rgb(246, 221, 204)'),
(3, 'Submission: 30th Oct 2023', 'From W3school.com, please execute the following scripts:\r\n\r\n1. HTML Basic – YouTube (https://www.w3schools.com/html/html_youtube.asp )\r\n2. CSS Syntax - Grid Item (https://www.w3schools.com/css/css_grid_item.asp )\r\n3. JavaScript Intro - JS Performance + DOM + API + AJAX + JSON\r\nhttps://www.w3schools.com/js/js_performance.asp\r\nhttps://www.w3schools.com/js/js_htmldom.asp\r\nhttps://www.w3schools.com/js/js_api_intro.asp\r\nhttps://www.w3schools.com/js/js_ajax_intro.asp\r\nhttps://www.w3schools.com/js/js_json_intro.asp\r\n4. Bootstrap 5 Get Started - Grid Examples\r\nhttps://www.w3schools.com/bootstrap5/bootstrap_grid_system.php\r\n5. PHP Syntax - Form Complete\r\nhttps://www.w3schools.com/php/php_forms.asp\r\n\r\nSubmission:\r\n1. Please complete your  assignment inside folder (localhost) first.\r\n2. And then upload your assignment on hosting, please use ahmadnajmi.com/yourname/assignmentlist\r\n3. Compress all files, Item 1 and 2 as a single file and upload to the e-learning.', '2023-11-19 12:47:56', '2023-11-19 12:47:56', 'rgb(253, 235, 208)'),
(4, 'Additional Class for Database', 'Every Friday\r\nTime : 10.00 a.m. - 12.00 a.m.', '2023-11-19 12:49:38', '2023-11-19 12:49:38', 'rgb(213, 245, 227)'),
(5, '‼️ Reminder: Test 1 Data Structure and Algorithm‼️', 'Date: 20 November 2023\r\nDay: Monday\r\nTime: 8.00 - 10.00 pm\r\nVenue: N28, Lecture Room 2 (BK2), Level 1\r\nFormat: \r\nMCQ (20 Questions - 20 Marks): Chapter 1 until Chapter 5\r\nStructured (7 Questions - 80 Marks): Chapter 2 until Chapter 5 \r\n\r\nFor more information on the Test 1 can be found at the following link: \r\nhttps://elearning.utm.my/23241/mod/resource/view.php?id=164989\r\n\r\nMeanwhile, past year questions can be found at the following link: \r\nhttps://elearning.utm.my/23241/mod/folder/view.php?id=167041\r\n', '2023-11-19 12:50:36', '2023-11-19 12:50:36', 'rgb(212, 230, 241)'),
(6, '‼️ Quiz 1 Data Structure and Algorithm‼️', 'THURSDAY (26/10/2023).\r\n\r\nThere are 2 parts, and answer all the questions:\r\n\r\nPart A: MCQ\r\n5 questions (5 marks)\r\nChap 1 until 3\r\n\r\nPart B: Structured\r\n2 questions (25 marks)\r\nChap 2 & 3', '2023-11-19 12:51:29', '2023-11-19 12:51:29', 'rgb(232, 218, 239)'),
(7, '✨MAJLIS PERASMIAN FESKO 67 ✨', 'Festival Konvokesyen Kali ke-67 UTM disempurnakan oleh Duli Yang Maha Mulia Raja Zarith Sofiah Binti Almarhum Sultan Idris Shah Permaisuri Johor pada 19 November 2023. \r\n\r\nMajlis perasmian ini diadakan di Dataran UTM JOHOR BAHRU. ', '2023-11-19 12:52:05', '2023-11-19 12:52:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`) VALUES
(1, 'note', '$2y$10$rhD2jus6QWU3BZ7FOk2sWeJ7.lNdDM6OUouo0cc9EPMsD/RelZAaC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

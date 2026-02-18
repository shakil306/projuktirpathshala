-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 11:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projuktirpathsha`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vission` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vission_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `created_at`, `updated_at`, `title`, `image`, `description`, `m_head`, `mission`, `mission_image`, `v_head`, `vission`, `vission_image`) VALUES
(1, '2021-03-10 02:29:24', '2022-04-16 23:33:51', 'Best Freelancing & Outsourcing Training Center in Uttara, Bangladesh', '20220417050413.ppi.jpg', 'Projuktir Pathshala is providing courses from (2000). With the goal of becoming Bangladesh’s best training institute, now you can find it at top of line. Projuktir Patshala is mainly a sister concern company of DMS (Bangladesh’s largest and best marketing agency). We aim to make any student sustainable for recent job market along with head start in any Freelancing sites Projuktir Pathshala is a reliable source of learning digital skills in Bangladesh. We are a dependable IT related service provider in Bangladesh. Last 12 years we are providing outstanding services to people.', 'Our Mission', 'We believe that if Education First delivers consistently excellent work and builds capacity in organizations to improve and influence what matters most for student learning, then we will advance the vision of preparing all students and particularly low-income students and students of color for success in life.Our mission is to deliver exceptional ideas,experience-based solutions and results so all students and particularly low-income students and students of color are prepared.', '20220417050451.mission.png', 'our vission', 'We envision a world in which every student is prepared to succeed—a world in which income and race no longer determine the quality of education. Education First has a robust strategy to build our staff and organizational capacity to lead on issues of equity, and to increase diversity, equity and inclusion at all levels of the firm. We also have a deep commitment to, and growing experience with, helping clients elevate, interrogate and take seriously how they pursue equity in their work.', '20210919100921.vision.png');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(100) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parmanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` int(11) NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yop1` int(11) DEFAULT NULL,
  `yop2` int(11) DEFAULT NULL,
  `yop3` int(11) DEFAULT NULL,
  `yop4` int(11) DEFAULT NULL,
  `degree1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bou1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bou2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bou3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bou4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` decimal(65,0) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `created_at`, `updated_at`, `name`, `user_id`, `phone`, `email`, `father_name`, `mother_name`, `present_address`, `parmanent_address`, `national_id`, `dob`, `blood`, `gender`, `yop1`, `yop2`, `yop3`, `yop4`, `degree1`, `degree2`, `degree3`, `degree4`, `subject1`, `subject2`, `subject3`, `subject4`, `bou1`, `bou2`, `bou3`, `bou4`, `course_name`, `course_duration`, `fee`, `status`, `payment`, `invoice`, `payment_method`, `coupon`) VALUES
(35, '2021-04-06 04:02:00', '2021-04-13 03:40:13', 'Mukta', 14, '01521470048', 'mukta@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 3, '2021-04-02', 'A+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '-50', 'running', 'pending', 'Cash', NULL, 1),
(36, '2021-04-06 04:02:37', '2021-04-12 04:01:32', 'Proshanta Vai', 15, '01521470048', 'proshanta@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 3, '2021-05-05', 'O', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '10', '100', 'running', 'Complete', 'Cash', NULL, NULL),
(37, '2021-04-07 22:34:55', '2021-04-12 04:03:32', 'Md. Tarek Aziz', 16, '01521470048', 'dmstarekaziz@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 33, '2021-04-10', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '100', 'running', 'Complete', 'Cash', NULL, NULL),
(38, '2021-04-07 22:35:24', '2021-04-12 03:57:00', 'Marketing', 17, '01521470048', 'bdworkers24@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 122, '2021-04-19', 'A+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Affiliate Marketing', '16', '100', 'running', 'pending', 'Cash', NULL, NULL),
(39, '2021-04-08 00:20:40', '2021-04-12 03:58:41', 'Web Development', 18, '01521470048', 'deddw@hghjg.com', 'xcvxcv', 'gf', 'fdf', 'fg', 3, '2021-04-15', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'pending', 'Cash', NULL, NULL),
(40, '2021-04-12 06:16:07', '2021-04-12 06:16:07', 'Web Development', 19, '01521470048', 'proshantavai4444@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 4, '2021-04-01', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(41, '2021-04-12 23:42:24', '2021-04-12 23:42:24', 'Web Development', 20, '01521470048', 'tar444ek@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 44, '2021-04-14', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(42, '2021-04-12 23:43:06', '2021-04-12 23:43:06', 'Web Development', 21, '01521470048', 'tareewe2k@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 2, '2021-04-23', 'B-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(43, '2021-04-12 23:49:32', '2021-04-12 23:49:32', 'Marketing', 22, '01521470048', 'bdworkerdsawdawds24@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 44, '2021-04-23', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '100', 'running', 'Pending', NULL, NULL, NULL),
(44, '2021-04-12 23:55:42', '2021-04-12 23:55:42', 'rerw', 23, '01521470048', 'dmstardfdxfsekaziz@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 444, '2021-04-13', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(45, '2021-04-12 23:56:43', '2021-04-12 23:56:43', 'rerw', 24, '01521470048', 'dmstareka435rziz@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 444, '2021-04-29', 'B-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(46, '2021-04-12 23:57:38', '2021-04-12 23:57:38', 'Graphic Design', 25, '01521470048', 'reeterthw@hghjg.com', 'xcvxcv', 'gf', 'fdf', 'fg', 44, '2021-04-29', 'B-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graphics Design', '13', '100', 'running', 'Pending', NULL, NULL, NULL),
(47, '2021-04-13 00:03:01', '2021-04-13 00:03:01', 'rerw', 26, '01521470048', 'rewhghjggjh@hghjg.com', 'ff', 'gf', 'fdf', 'fg', 9, '2021-04-26', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(48, '2021-04-13 00:07:26', '2021-04-13 00:07:26', 'rerw', 27, '01521470048', 'rewhgqerwrwhjggjh@hghjg.com', 'ff', 'gf', 'fdf', 'fg', 9, '2021-04-26', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(49, '2021-04-13 00:21:31', '2021-04-13 00:21:31', 'Web Development', 28, '01521470048', 'tarewqerwrk@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 555555, '2021-04-12', 'O+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(50, '2021-04-13 00:33:20', '2021-04-13 00:33:20', 'tarek', 29, '01521470048', 'rewrwrtetet@hghjg.com', 'xcvxcv', 'gf', 'fdf', 'fg', 4, '2021-04-30', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '100', 'running', 'Pending', NULL, NULL, NULL),
(51, '2021-04-13 00:35:20', '2021-04-13 00:35:20', 'Marketing', 30, '01521470048', 'bdworkerr6443343s24@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 6876, '2021-05-06', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '100', 'running', 'Pending', NULL, NULL, NULL),
(52, '2021-04-13 00:41:12', '2021-04-13 00:41:12', 'Marketing', 31, '01521470048', 'bdworewkedfsfrs24@gmail.com', 'ff', 'gf', 'fdf', 'fg', 44, '2021-05-01', 'A-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(53, '2021-04-13 00:42:50', '2021-04-15 03:44:32', 'Marketing', 32, '01521470048', 'bdworewkedfsfdsrs24@gmail.com', 'ff', 'gf', 'fdf', 'fg', 44, '2021-05-01', 'A-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '14', '98', 'running', 'Pending', NULL, NULL, 1),
(54, '2021-04-13 00:43:22', '2021-04-13 00:43:22', 'Marketing', 33, '01521470048', 'bdworkerr6443fgrd343s24@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 6876, '2021-05-06', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '100', 'running', 'Pending', NULL, NULL, NULL),
(55, '2021-04-13 00:44:10', '2021-04-13 00:44:10', 'Marketing', 34, '01521470048', 'bdworkerr6443fgrd3dsa43s24@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 6876, '2021-05-06', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '100', 'running', 'Pending', NULL, NULL, NULL),
(56, '2021-04-13 00:46:09', '2021-04-13 03:36:45', 'Marketing', 35, '01521470048', 'bdworkerr6rfdg443fgrd3dsa43s24@gmail.com', 'xcvxcv', 'gf', 'fdf', 'fg', 6876, '2021-05-06', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '72', 'running', 'Pending', NULL, NULL, 1),
(57, '2021-11-02 23:44:42', '2021-11-02 23:44:42', 'New Student', 37, '0123456789', 'student@gmail.com', 'New Father', 'New Mother', 'New Address', 'New Permanent Address', 123456789, '2021-11-03', 'O+', 'Male', 2019, 2014, 2012, NULL, 'BSc', 'HSC', 'SSC', NULL, 'CSE', 'Science', 'Science', NULL, 'Chittagong', 'Cumilla', 'Cumilla', NULL, 'Responsive Web Design', '15', '222', 'running', 'Pending', NULL, NULL, NULL),
(58, '2021-11-03 00:07:44', '2021-11-03 00:07:44', 'Omar Sani', 38, '01743260655', 'omsrsani4152@gmail.com', 'Abul Hasam', 'Friyza', 'Dumni Nurpara Khilkhet Dhaka', 'Dumni Nurpara Khilkhet Dhaka', 4521520, '1986-10-12', 'B-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '15', '222', 'running', 'Pending', NULL, NULL, NULL),
(59, '2021-11-03 00:22:52', '2021-11-03 00:22:52', 'New Page', 40, '01713510548', 'dmsarafat001@gmail.com', 'New Father', 'New Mother', 'New Address', 'New Permanent Address', 91533830, '2021-11-03', 'O-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graphics Design', '13', '100', 'running', 'Pending', NULL, NULL, NULL),
(60, '2021-12-02 05:13:02', '2021-12-02 05:13:02', 'Sukanti Kumar', 41, '01720202021', 'sukanti@gmail.com', 'XYZ', 'XYZ', 'XYZ', 'XYZ', 987654321, '2021-12-02', 'O-', 'Male', 2016, 2015, 2014, 2013, 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'Graphics Design', '13', '100', 'running', 'Pending', NULL, NULL, NULL),
(61, '2021-12-22 05:13:41', '2021-12-22 05:13:41', 'lkjhfd\\hjk', 42, '45357689', 'info@gmail.com', 'gfjfj', 'fhfhf', 'fhfhfh', 'fhfghf', 4644, '2021-12-15', 'O+', 'Male', -1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graphics Design', '13', '100', 'running', 'Pending', NULL, NULL, NULL),
(63, '2022-03-27 04:50:50', '2022-03-27 04:50:50', 'Golam Rabbi', 50, '01758152475', 'rabbicse@gmail.com', 'ddd', 'ddd', 'ddd', 'dd', 222222221, '2022-03-27', 'B+', 'Male', 12, NULL, NULL, NULL, 'ffffffffffff', NULL, NULL, NULL, 'fff', NULL, NULL, NULL, 'fff', NULL, NULL, NULL, 'Search Engine Optimization', '15', '30000', 'running', 'Pending', NULL, NULL, NULL),
(64, '2022-03-28 06:13:17', '2022-03-28 06:13:17', 'Golam Rabbi', 51, '01758152475', 'dmsgolamrabbi2@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 111, '2022-03-28', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graphics Design', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(65, '2022-03-28 06:14:26', '2022-03-28 06:14:26', 'test', 52, '01758152475', 'test10@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 11111, '2022-03-28', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graphics Design', '14', '100', 'running', 'Pending', NULL, NULL, NULL),
(66, '2022-03-28 06:17:09', '2022-03-28 06:17:09', 'Nawsuba Zarith', 53, '01758152475', 'n@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 111, '2022-03-28', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '17', '222', 'running', 'Pending', NULL, NULL, NULL),
(67, '2022-03-28 06:22:35', '2022-03-28 06:22:35', 'ddddddd', 54, '01758152475', 'ddd11d@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 111, '2022-03-28', 'A-', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '18', '100', 'running', 'Pending', NULL, NULL, NULL),
(68, '2022-03-28 06:41:19', '2022-03-28 06:41:19', 'Golam Rabbi', 55, '01758152475', 'dmsgolamrabbi11@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 111, '2022-03-28', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WordPress Customization', '18', '100', 'running', 'Pending', NULL, NULL, NULL),
(83, '2022-04-09 23:04:05', '2022-04-09 23:04:05', 'Graphics', 72, '01758152475', 'graphics@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 1111111, '2022-04-10', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graphics Design', '8', '100', 'running', 'Pending', NULL, NULL, NULL),
(85, '2022-04-10 02:40:31', '2022-04-10 02:40:31', 'Advance Affiliate Marketing', 74, '01758152475', 'affiliate@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 11111111, '2022-04-10', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Advance Affiliate Marketing', '25', '20000', 'running', 'Pending', NULL, NULL, NULL),
(86, '2022-04-10 02:48:16', '2022-04-10 02:48:16', 'Golam Rabbi', 75, '01758152475', 'dmsgolamrabbi75@gmail.com', 'ddd', 'ddd', 'ddd', 'ddd', 11, '2022-04-10', 'B+', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Responsive Web Design', '17', '222', 'running', 'Pending', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `script` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `script`, `created_at`, `updated_at`) VALUES
(1, '<script>proshanta vai.</script>', NULL, '2021-03-21 00:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` int(100) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `created_at`, `updated_at`, `course_id`, `course_name`, `slug`, `last_date`, `duration`, `fee`, `status`, `image`) VALUES
(8, '2021-03-28 04:54:59', '2022-03-26 23:19:37', 14, 'Graphics Design', 'graphics-design', '2021-10-01', '13', 100, 'active', '20220323050326.20210908120944.Graphic-Design.png'),
(9, '2021-03-28 04:55:16', '2021-09-19 04:02:39', 18, 'WordPress Customization', 'wordPress-customization', '2021-10-01', '14', 100, 'active', '20210908110923.large_wp1.png'),
(10, '2021-03-28 04:56:35', '2021-09-19 04:02:59', 17, 'Responsive Web Design', 'responsive-web-design', '2021-10-01', '15', 222, 'active', '20210908120911.Responsive-Web-Design.png'),
(34, '2022-03-27 22:43:13', '2022-03-27 22:43:34', 15, 'Search Engine Optimization', 'search-engine-optimization', '2022-03-31', '4 month', 30000, 'active', '20220328040334.CEO.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewed` int(11) NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `title`, `auther_id`, `name`, `description`, `image`, `viewed`, `slug`) VALUES
(5, '2021-03-28 04:48:37', '2022-04-07 00:44:24', 'A better Marketing with SEO', '0', 'Proshanta Vai', 'SEO is a way to rank a website on Google search results. It is a process of increasing website visibility for related keyword search results. Search result is the best organic source of web traffic. Thus it is important for every website to rank for search results and get more organic traffic. This is the importance of SEO. SEO is the most important sector of Online marketing. To hold the rank 01 every business need to do SEO for their website. It will redirect the visitor to the company website and the company can convert those leads to customers. This process can grow business online. SEO Help to create a good relationship with the audience. This course is a professional and advanced SEO course. You will be an SEO expert after completing this course. And you will able to work for local clients and international clients. Besides all, you can build your career as a freelance SEO career and work in a different marketplace. This course is designed with the core elements of SEO like Keyword Research, Competitor Analysis, On-page Optimization, Technical SEO, Off-page Optimization, Content writing (after on-page SEO), Website Audit and Local SEO, etc. In this course you will learn to structure & optimize a website, find the best keywords to rank, Competitor analysis, Understand how SEO work, and many more.', '20210919110953.seo.png', 193, 'a-better-marketing-with-seo'),
(6, '2021-03-29 03:58:45', '2022-04-06 23:27:54', 'গুগল রেঙ্কিং এর ক্ষেত্রে গুরুত্বপূর্ণ বিষয়', '0', 'Md. Tarek Aziz', 'গুগল সার্চ এর প্রথম পেজে সবাই আসতে চায়। কারণ প্রথম পেজে আশা মানেই হচ্ছে অরগানিক ট্রাফিক এর সংখ্যা বেড়ে যাওয়া। কিন্তু এই প্রথম পেজে আসার বিষয়টি এত সহজ নয়। আবার আমাদের দেশের বর্তমান অবস্থার কথা ভাবলে, বিষয়টি যে এত কঠিন, তা মনে হয় না। এর কারণ হচ্ছে আমাদের প্রতিযোগিতা কম। বেশির ভাগ ব্যবসায়ী মূলত ফেসবুক কেন্দ্রিক ব্যবসায় করে। আবার অনেকেরতো কোন ওয়েবসাইট নেই। সে অবস্থান থেকে আমরা বলতে পারি, প্রতিযোগিতা কম। এবং যখন প্রতিযোগীতা কম থাকে তখন ব্যবসায়ীদের উচিত সেখানে নিজের অবস্থান তৈরি করে ফেলা, যেন ভবিষ্যৎ এ ভালো সহযোগিতা পাওয়া যায়। কারণ প্রতিযোগিতা আজ কম সত্যি কিন্তু সামনে এ প্রতিযোগিতা অবশ্যই বাড়বে কোন সন্দেহ ছাড়া। গুগল সার্চ এর কথা ভাবলেই প্রথমে ভাবতে হয় Keyword নির্বাচন করা হয়েছে কিনা? আমি ধরে নিচ্ছি আপনারা Keyword নির্বাচন করে ফেলেছেন। তাই রেঙ্কিং এর ক্ষেত্রে যে বিষয়গুলোর দিকে গুগল বেশি নজর দেয় সে বিষয়গুলো তুলে ধরলামঃ', '20210329090345.-মার্কেটিং-e1605522680254 (1).jpg', 145, 'গুগল-রেঙ্কিং-এর-ক্ষেত্রে-গুরুত্বপূর্ণ-বিষয়'),
(7, '2021-03-29 03:58:57', '2022-04-06 23:27:54', 'গুগল রেঙ্কিং এর ক্ষেত্রে গুরুত্বপূর্ণ বিষয়', '0', 'Md. Tarek Aziz', 'গুগল সার্চ এর প্রথম পেজে সবাই আসতে চায়। কারণ প্রথম পেজে আশা মানেই হচ্ছে অরগানিক ট্রাফিক এর সংখ্যা বেড়ে যাওয়া। কিন্তু এই প্রথম পেজে আসার বিষয়টি এত সহজ নয়। আবার আমাদের দেশের বর্তমান অবস্থার কথা ভাবলে, বিষয়টি যে এত কঠিন, তা মনে হয় না। এর কারণ হচ্ছে আমাদের প্রতিযোগিতা কম। বেশির ভাগ ব্যবসায়ী মূলত ফেসবুক কেন্দ্রিক ব্যবসায় করে। আবার অনেকেরতো কোন ওয়েবসাইট নেই। সে অবস্থান থেকে আমরা বলতে পারি, প্রতিযোগিতা কম। এবং যখন প্রতিযোগীতা কম থাকে তখন ব্যবসায়ীদের উচিত সেখানে নিজের অবস্থান তৈরি করে ফেলা, যেন ভবিষ্যৎ এ ভালো সহযোগিতা পাওয়া যায়। কারণ প্রতিযোগিতা আজ কম সত্যি কিন্তু সামনে এ প্রতিযোগিতা অবশ্যই বাড়বে কোন সন্দেহ ছাড়া। গুগল সার্চ এর কথা ভাবলেই প্রথমে ভাবতে হয় Keyword নির্বাচন করা হয়েছে কিনা? আমি ধরে নিচ্ছি আপনারা Keyword নির্বাচন করে ফেলেছেন। তাই রেঙ্কিং এর ক্ষেত্রে যে বিষয়গুলোর দিকে গুগল বেশি নজর দেয় সে বিষয়গুলো তুলে ধরলামঃ', '20210329090357.-মার্কেটিং-e1605522680254 (1).jpg', 145, 'গুগল-রেঙ্কিং-এর-ক্ষেত্রে-গুরুত্বপূর্ণ-বিষয়'),
(8, '2021-03-29 03:59:08', '2022-04-06 23:27:54', 'গুগল রেঙ্কিং এর ক্ষেত্রে গুরুত্বপূর্ণ বিষয়', '0', 'Md. Tarek Aziz', 'গুগল সার্চ এর প্রথম পেজে সবাই আসতে চায়। কারণ প্রথম পেজে আশা মানেই হচ্ছে অরগানিক ট্রাফিক এর সংখ্যা বেড়ে যাওয়া। কিন্তু এই প্রথম পেজে আসার বিষয়টি এত সহজ নয়। আবার আমাদের দেশের বর্তমান অবস্থার কথা ভাবলে, বিষয়টি যে এত কঠিন, তা মনে হয় না। এর কারণ হচ্ছে আমাদের প্রতিযোগিতা কম। বেশির ভাগ ব্যবসায়ী মূলত ফেসবুক কেন্দ্রিক ব্যবসায় করে। আবার অনেকেরতো কোন ওয়েবসাইট নেই। সে অবস্থান থেকে আমরা বলতে পারি, প্রতিযোগিতা কম। এবং যখন প্রতিযোগীতা কম থাকে তখন ব্যবসায়ীদের উচিত সেখানে নিজের অবস্থান তৈরি করে ফেলা, যেন ভবিষ্যৎ এ ভালো সহযোগিতা পাওয়া যায়। কারণ প্রতিযোগিতা আজ কম সত্যি কিন্তু সামনে এ প্রতিযোগিতা অবশ্যই বাড়বে কোন সন্দেহ ছাড়া। গুগল সার্চ এর কথা ভাবলেই প্রথমে ভাবতে হয় Keyword নির্বাচন করা হয়েছে কিনা? আমি ধরে নিচ্ছি আপনারা Keyword নির্বাচন করে ফেলেছেন। তাই রেঙ্কিং এর ক্ষেত্রে যে বিষয়গুলোর দিকে গুগল বেশি নজর দেয় সে বিষয়গুলো তুলে ধরলামঃ', '20220323080318.google-ranking.png', 145, 'গুগল-রেঙ্কিং-এর-ক্ষেত্রে-গুরুত্বপূর্ণ-বিষয়'),
(9, '2021-03-29 03:59:24', '2022-04-09 04:37:39', 'The Reason for Web Design', '0', 'Md. Tarek Aziz', 'Web development is creating activities of website. The whole activities for web development include web design, web content creating, network configurations, etc. The primary role of a web developer is to ensure the website active 24/7. In a broad view, web development is composed of actions, updates, and others activities to successfully build a website. Web development is popularly known as website development and the passionate persons who play the role are called web developers. This course is designed to teach and inform you of the detailed path of web development. Our expert trainers will teach you all the concepts of web development easily. By the end of the course what you will learn- This course will enable you to write good quality code which will be clean, performant, and bug free. You will be able to work as a freelance web developer both in the local and international marketplace. You can work as a professional web developer for anyone. This course will teach you all the fundamental concepts of web development. You will be able to describe the layout, structure, and functions of a website.', '20210919110927.web development.png', 165, 'the-reason-for-web-design'),
(10, '2021-03-29 03:59:42', '2022-03-23 04:04:23', 'Sustainable Market in Web Development', '0', 'Md. Tarek Aziz', 'Web development is creating activities of website. The whole activities for web development include web design, web content creating, network configurations, etc. The primary role of a web developer is to ensure the website active 24/7. In a broad view, web development is composed of actions, updates, and others activities to successfully build a website. Web development is popularly known as website development and the passionate persons who play the role are called web developers. This course is designed to teach and inform you of the detailed path of web development. Our expert trainers will teach you all the concepts of web development easily. By the end of the course what you will learn- This course will enable you to write good quality code which will be clean, performant, and bug free. You will be able to work as a freelance web developer both in the local and international marketplace. You can work as a professional web developer for anyone. This course will teach you all the fundamental concepts of web development. You will be able to describe the layout, structure, and functions of a website.', '20210919110956.web development.png', 158, 'sustainable-market-in-web-development'),
(11, '2021-03-29 03:59:51', '2022-04-08 23:33:10', 'Graphics Designer are earning a lot', '0', 'Md. Tarek Aziz', 'Did you think Graphic design means creating logos or editing photos for a studio? Yes! A graphic designer does this, but you are telling 1% working area of graphic design. Close your eyes and see all the things on your side. Can you imagine anything here? All the things you use from morning to before sleep are designed by a designer, right? Generally, Graphic Design skill enable one to combine text and visual image for advertisement purpose, books or magazines, and publications, etc. In addition, a graphic designer plays a role to communicate with people by visuals. They create designed visual for specific purposes on computer. The demand of Graphics design is growing day by days. So, learning graphics design is best decision for anyone. After acquiring graphics design skills one can work on both local or international marketplace. A Graphic Designer has great demand all over the world in all sectors, but we are not able to meet the industry requirements. As a result, the industry is always looking for experts in this sector. If you are able to build yourself with the industry requirements, you can easily gain in this sector and lead as a graphic designer. On the other hand, you can easily make a career as a freelance or outsource graphic designer and you can work from home. Similarly, your home will be your office and you will be the boss in this office. A graphic designer can start his career in a production company, magazine, prepress, books, and publication too. Similarly, they can also work in a software firm as a creative designer, billboard design firms, advertising agencies, and communication firms. They can also be involved in broadcast design, information design, editorial design, and even a lot of Govt. and private organizations and companies. With this in mind, will you tell me where don’t need a graphic designer? This course makes you expert level designer for your career, job or any freelance project. During training time, you will work on real project and many practice works. Our trainers provide your proper knowledge and information regard graphics design those you can apply in your projects. Trainers will provide your recent design trends and introduce you with design inspiration tools for further uses.', '20210919110935.graphics.png', 166, 'graphics-designer-are-earning-a-lot'),
(12, '2021-03-29 04:00:36', '2022-04-09 04:37:29', 'Why Graphic Design is Important', '0', 'Md. Tarek Aziz', 'Did you think Graphic design means creating logos or editing photos for a studio? Yes! A graphic designer does this, but you are telling 1% working area of graphic design. Close your eyes and see all the things on your side. Can you imagine anything here? All the things you use from morning to before sleep are designed by a designer, right? Generally, Graphic Design skill enable one to combine text and visual image for advertisement purpose, books or magazines, and publications, etc. In addition, a graphic designer plays a role to communicate with people by visuals.\r\n\r\n\r\nThey create designed visual for specific purposes on computer. The demand of Graphics design is growing day by days. So, learning graphics design is best decision for anyone. After acquiring graphics design skills one can work on both local or international marketplace. A Graphic Designer has great demand all over the world in all sectors, but we are not able to meet the industry requirements. As a result, the industry is always looking for experts in this sector. If you are able to build yourself with the industry requirements, you can easily gain in this sector and lead as a graphic designer. On the other hand, you can easily make a career as a freelance or outsource graphic designer and you can work from home. Similarly, your home will be your office and you will be the boss in this office. \r\n\r\n\r\nA graphic designer can start his career in a production company, magazine, prepress, books, and publication too. Similarly, they can also work in a software firm as a creative designer, billboard design firms, advertising agencies, and communication firms. They can also be involved in broadcast design, information design, editorial design, and even a lot of Govt. and private organizations and companies. With this in mind, will you tell me where don’t need a graphic designer? This course makes you expert level designer for your career, job or any freelance project. During training time, you will work on real project and many practice works. Our trainers provide your proper knowledge and information regard graphics design those you can apply in your projects. Trainers will provide your recent design trends and introduce you with design inspiration tools for further uses.', '20220323080304.graphics.jfif', 175, 'why-graphic-design-is-important'),
(13, '2021-03-29 04:00:49', '2022-04-09 03:30:11', 'Why Google Rank is important', '0', 'Md. Tarek Aziz', 'SEO: SEO is a way to rank a website on Google search results. It is a process of increasing website visibility for related keyword search results. Search result is the best organic source of web traffic. Thus it is important for every website to rank for search results and get more organic traffic. \r\n\r\nThis is the importance of SEO. SEO is the most important sector of Online marketing. To hold the rank 01 every business need to do SEO for their website. It will redirect the visitor to the company website and the company can convert those leads to customers. This process can grow business online. SEO Help to create a good relationship with the audience.\r\n\r\n\r\n This course is a professional and advanced SEO course. You will be an SEO expert after completing this course. And you will able to work for local clients and international clients. Besides all, you can build your career as a freelance SEO career and work in a different marketplace. This course is designed with the core elements of SEO like Keyword Research, Competitor Analysis, On-page Optimization, Technical SEO, Off-page Optimization, Content writing (after on-page SEO), Website Audit and Local SEO, etc. In this course you will learn to structure & optimize a website, find the best keywords to rank, Competitor analysis, Understand how SEO work, and many more.', '20210919110923.google rank.jpg', 178, 'why-google-rank-is-important'),
(14, '2021-03-29 04:01:16', '2022-04-11 22:41:21', 'Important Fact about SEO', '0', 'Md. Tarek Aziz', 'SEO: SEO is a way to rank a website on Google search results. It is a process of increasing website visibility for related keyword search results. The search result is the best organic source of web traffic. Thus it is important for every website to rank for search results and get more organic traffic. This is the importance of SEO. \r\nSEO is the most important sector of Online marketing. To hold the rank 01 every business need to do SEO for their website. It will redirect the visitor to the company website and the company can convert those leads to customers. This process can grow business online. SEO Help to create a good relationship with the audience. \r\nThis course is a professional and advanced SEO course. You will be an SEO expert after completing this course. And you will be able to work for local clients and international clients. Besides all, you can build your career as a freelance SEO career and work in a different marketplace. This course is designed with the core elements of SEO like Keyword Research, Competitor Analysis, On-page Optimization, Technical SEO, Off-page Optimization, Content writing (after on-page SEO), Website Audit and Local SEO, etc. In this course you will learn to structure & optimize a website, find the best keywords to rank, Competitor analysis, Understand how SEO work, and many more.', '20220323080324.CEO.jfif', 210, 'important-fact-about-seo'),
(21, '2022-04-09 04:34:41', '2022-04-16 23:46:47', 'Digital Marketing Solution Pvt Ltd', '48', 'Rabbi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20220417050447.ppi.jpg', 10, 'digital-marketing-solution-pvt-ltd');

-- --------------------------------------------------------

--
-- Table structure for table `career_counselings`
--

CREATE TABLE `career_counselings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_counselings`
--

INSERT INTO `career_counselings` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '20220323110352.career_counseling_2.jfif', '2022-03-22 05:17:53', '2022-03-23 05:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consults`
--

CREATE TABLE `consults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consults`
--

INSERT INTO `consults` (`id`, `name`, `email`, `phone`, `course`, `status`, `message`, `created_at`, `updated_at`) VALUES
(19, 'CharlesJon', 'starhugghis@tvcablenet.be', '82376751641', 'BMW', 'unseen', 'Quit your job and get passive income more $ 7995 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc7Wvjo&sa=D&01=24&usg=AFQjCNHj_a66ufJc5MfSABppuo4GGGxh6w <<<<<<<<<<<<<<<<<<<<<<<<', '2021-11-17 20:13:56', '2021-11-17 20:13:56'),
(20, 'JamespHync', 'rokitman08@chello.at', '81447111636', 'BMW', 'unseen', 'Fast income from one investment more $ 9866 per day >>>>>>>>>>>>>>  https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc7Wvjo&sa=D&65=24&usg=AFQjCNHj_a66ufJc5MfSABppuo4GGGxh6w   <<<<<<<<<<<', '2021-11-17 21:12:38', '2021-11-17 21:12:38'),
(21, 'CharlesJon', 'augusmoly@rediffmail.com', '81959378458', 'BMW', 'unseen', 'Change your life and get passive income from $ 8886 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8efyS&sa=D&97=29&usg=AFQjCNE19L0R90htG4gSNamEaeldZ-6c8g <<<<<<<<<<<<<<<<<<<<<<<<', '2021-11-22 12:00:22', '2021-11-22 12:00:22'),
(24, 'CharlesJon', 'jefffein1127@gmail.com', '89183824542', 'BMW', 'unseen', 'Quit your job and get passive income more $ 9955 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8ED7K&sa=D&74=47&usg=AFQjCNEY3K5BsQ-mUq_FMcp6hGUAytb7Og <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-03 21:21:41', '2021-12-03 21:21:41'),
(26, 'CharlesJon', 'marcobahr74@freenet.de', '86646564547', 'BMW', 'unseen', 'Verdienste Vor 123000 EUR pro Tag >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nihawiwa.com%2F0bnl&sa=D&65=14&usg=AFQjCNEUPijOi1LFtA_rg0rU0qfVGTKd6A <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-08 08:25:07', '2021-12-08 08:25:07'),
(27, 'CharlesJon', 'djmk@bigfoot.com.au', '85531212926', 'BMW', 'unseen', 'REGISTER NOW and get more $ 9596 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&69=40&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-09 22:56:00', '2021-12-09 22:56:00'),
(28, 'NewsDilk', 'muffin@newpochta.com', '83848845424', 'BMW', 'unseen', 'колиета-на веригата за доставкириболовни примамки с отстъпкастикери за стена магазинвисящи колиета евтинириболовни примамки <a href=https://reliablenews.news/31-select.htm>пластира с отстъпка</a>', '2021-12-10 04:32:08', '2021-12-10 04:32:08'),
(29, 'CharlesJon', 'sebastianbendiksen1997@yahoo.no', '89123427441', 'BMW', 'unseen', 'Register, press one button and get passive income more $ 8897 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&26=79&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-10 22:29:02', '2021-12-10 22:29:02'),
(30, 'CharlesJon', 'marianne.haglund@getmail.no', '84585826418', 'BMW', 'unseen', 'REGISTER NOW and get from $ 8785 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&20=79&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-11 17:07:16', '2021-12-11 17:07:16'),
(31, 'xbetychalill', 'ro.xa.nu.el.gutk.e.r.ho.l.d.@gmail.com', '86459238876', 'BMW', 'unseen', '[url=\"http://casino-x.pp.ua\"]казино x официальный сайт[/url] - это онлайн-казино с действительно международным охватом. Хорошо продуманный и немудреный в использовании веб-сайт доступен для 14 различных языках, включая целостный фаланга европейских языков, а также арабский. Кроме того, игроки могут писать депозиты и снимать имущество непосредственно в казино и из него в различных валютах мира.', '2021-12-11 21:34:55', '2021-12-11 21:34:55'),
(32, 'FrankiFon', 'spotiis@rambler.ru', '85945662446', 'BMW', 'unseen', 'ничего особенного \r\n_________________ \r\nkings casino rozvadov швед ?стелі - [URL=http://kz.bking.site]тенниске болжам жасау веб-сайты[/URL] - ойын автоматтарын тіркеу а?ша ?шін ойнайды', '2021-12-12 21:36:48', '2021-12-12 21:36:48'),
(33, 'CharlesJon', 'kjella_2000@yahoo.no', '89577956159', 'BMW', 'unseen', 'Fast income from one investment from $ 9785 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&07=02&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-13 18:08:20', '2021-12-13 18:08:20'),
(34, 'Im Judith. My sexy photo here https://symupaxo.page.link/YCswHRCnoBzYdQaA6#photo_id575114', 'rscmolyneux@btinternet.com', '81695919786', 'BMW', 'unseen', 'Im Wendy. My sexy photo here https://cabufah.page.link/AmAzbuZ4vN9N6fwe7#photo_id396775', '2021-12-14 12:05:17', '2021-12-14 12:05:17'),
(35, 'Donald Cole', 'lanj7962@gmail.com', '85543474623', 'BMW', 'unseen', 'Good day \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me through this email coledd11@cloedcolela.com if you\'re still interested. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nDonald Cole', '2021-12-14 16:06:18', '2021-12-14 16:06:18'),
(36, 'Mike Eddington', 'no-replyplurags@gmail.com', '88481821884', 'BMW', 'unseen', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Eddington\r\n \r\nsupport@digital-x-press.com', '2021-12-15 07:26:06', '2021-12-15 07:26:06'),
(37, 'CharlesJon', 'siri@sirisepost.no', '89788178895', 'BMW', 'unseen', 'Bitcoin Miiliarder told how he makes money more $ 7795 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&21=21&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-15 20:06:47', '2021-12-15 20:06:47'),
(38, 'Im Daisy. My sexy photo here https://wosepidap.page.link/QQJRFSea5MiCBtWb7#photo_id623471', 'chloe.laviron@wanadoo.fr', '85489852728', 'BMW', 'unseen', 'Im Laura. My sexy photo here https://fiwozihu.page.link/GHTBmRsDF1b2tz2j9#photo_id541244', '2021-12-16 00:33:06', '2021-12-16 00:33:06'),
(39, 'CharlesJon', 'torsten.marten@web.de', '86415851824', 'BMW', 'unseen', 'Make Artificial Intelligence bring you more $ 7777 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&61=18&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-16 19:53:57', '2021-12-16 19:53:57'),
(40, 'CharlesJon', 'trullaschierke@web.de', '88165592251', 'BMW', 'unseen', 'Launch Artificial Intelligence with one button and earn from $ 6875 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&91=21&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-17 20:01:20', '2021-12-17 20:01:20'),
(41, 'Im Rosalinda. My sexy photo here https://vaxaco.page.link/6Uk5nh9B2Z92LhQy5#photo_id918888', 'santos_annamarie@ymail.com', '87474387395', 'BMW', 'unseen', 'Im Rebecca. My sexy photo here https://varuqep.page.link/iB2ar4qDxT9PbpLY8#photo_id267714', '2021-12-17 23:14:18', '2021-12-17 23:14:18'),
(42, 'CharlesJon', 'c.valle@simest.it', '82169738318', 'BMW', 'unseen', 'Quit your job and get passive income more $ 7776 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&18=80&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-18 19:22:12', '2021-12-18 19:22:12'),
(43, 'Mew', '7oijhs9o@hotmail.com', '87744123924', 'BMW', 'unseen', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y3n63bok', '2021-12-19 03:40:04', '2021-12-19 03:40:04'),
(44, 'CharlesJon', 'tizianacipolla@aliceposta.it', '83929827383', 'BMW', 'unseen', 'Quit your job and get passive income from $ 5996 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&06=66&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-19 18:42:08', '2021-12-19 18:42:08'),
(45, 'Matt Smith', 'mattsmith18@protonmail.com', '81738752349', 'BMW', 'unseen', 'MyEtherWallet - 0x3910c18c2d886cc6c18918c197af4a28563b3ccd  -  ship coconut green caution evoke stick spread debate address obvious glue boring', '2021-12-20 18:29:24', '2021-12-20 18:29:24'),
(46, 'JAMES COOK', 'james_cook78@yahoo.com', '85974848377', 'BMW', 'unseen', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd', '2021-12-21 00:13:14', '2021-12-21 00:13:14'),
(47, 'Im Augusta. My sexy photo here https://bijajywom.page.link/9s1wUgXNENEEQG3C8#photo_id426954', 'nfh-sms@usa.net', '84285669769', 'BMW', 'unseen', 'Im Martha. My sexy photo here https://xapyhejar.page.link/LyPqyFYdiEFjPqao8#photo_id974929', '2021-12-21 00:30:57', '2021-12-21 00:30:57'),
(48, 'Mew', '5octeq66@icloud.com', '85379275751', 'BMW', 'unseen', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/yyzw7ehy', '2021-12-21 12:38:39', '2021-12-21 12:38:39'),
(49, 'CharlesJon', 'bejnamina.laubinger@gmx.de', '88284564713', 'BMW', 'seen', 'Dies ist Ihre Chance zu verdienen von 16700 EUR pro Tag >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&11=27&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-21 18:32:47', '2022-04-12 02:16:14'),
(50, 'Mew', 'wzt3f8yi@yahoo.com', '81736182786', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y33q75mo', '2021-12-23 16:29:35', '2021-12-23 16:29:35'),
(51, 'Im Kimberly. My sexy photo here https://bijajywom.page.link/LmwMnsfYvi5bRQx66#photo_id957113', 'abramhern@yahoo.com', '81754634512', 'BMW', 'unseen', 'Im Denise. My sexy photo here https://bojugoqoc.page.link/eSz2KMVUvo9wHGYP8#photo_id684297', '2021-12-23 19:38:02', '2021-12-23 19:38:02'),
(52, 'Jannettedople', 'jannettehok@cc.com', '85897561554', 'BMW', 'unseen', 'Want to post your text to 12.000.000 (12 MILLIONS!) websites? No problem - with new \"XEvil 5.0 + XRumer 19.0.8\" software complex! \r\nBlogs, forums, boards, shops, guestbooks, social networks - any engines with any captchas! \r\nXEvil also compatible with any SEO/SMM programms and scripts, and can accept captchas from any source. Just try it!  ;) \r\n \r\nRegards, Mariadople \r\n \r\nP.S. New XEvil 6.0 will break hCaptcha, FunCaptcha and ReCaptcha Enterprize', '2021-12-27 08:49:15', '2021-12-27 08:49:15'),
(53, 'nym5870012tetcher', 'olezhka.barich@mail.ru', '87519936724', 'BMW', 'unseen', 'mss5870012rtjuny 8eDgobu qlsP tSWU7Wx', '2021-12-30 09:55:38', '2021-12-30 09:55:38'),
(54, 'Mike Stephen', 'no-replyplurags@gmail.com', '87878748868', 'BMW', 'unseen', 'Hello \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Stephen\r\n \r\nSpeed SEO Digital Agency', '2021-12-31 19:33:09', '2021-12-31 19:33:09'),
(55, 'Mew', 'dj06lc1m@icloud.com', '87577664456', 'BMW', 'unseen', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/yyqsumfc', '2022-01-01 15:03:20', '2022-01-01 15:03:20'),
(56, 'Mew', 'o3b45did@yahoo.com', '84227836524', 'BMW', 'unseen', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y6gn552d', '2022-01-04 15:26:09', '2022-01-04 15:26:09'),
(57, 'Mew', 'ktt4e4qm@yahoo.com', '83253581858', 'BMW', 'unseen', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y3an6wgc', '2022-01-06 20:46:09', '2022-01-06 20:46:09'),
(58, 'Nataidove', 'woodthighgire1988@gmail.com', '89957189841', 'BMW', 'unseen', 'Who want to see my nudes? https://localchicks3.com/?u=41nkd08&o=8dhpkzk', '2022-01-07 22:41:00', '2022-01-07 22:41:00'),
(59, 'suipsgah', 'bo.r.i.slipi.n.o.v@gmail.com', '84751475593', 'BMW', 'unseen', '2 for amateur \r\n \r\nhttps://www.google.com.ng/url?q=https://tubesweet.xyz/', '2022-01-09 08:59:06', '2022-01-09 08:59:06'),
(60, 'Mew', 'jqfv6uq3@icloud.com', '88758365533', 'BMW', 'unseen', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/y4p3ggnf', '2022-01-10 14:11:37', '2022-01-10 14:11:37'),
(61, 'Mike Laird', 'no-replyplurags@gmail.com', '89876952442', 'BMW', 'unseen', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-01-10 19:27:10', '2022-01-10 19:27:10'),
(62, 'Mike Oakman', 'no-replyplurags@gmail.com', '83476755777', 'BMW', 'unseen', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Oakman\r\n \r\nsupport@digital-x-press.com', '2022-01-10 21:42:09', '2022-01-10 21:42:09'),
(63, 'Mew', 'z2rukgk2@hotmail.com', '88893371295', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y69ewvy9', '2022-01-11 04:36:07', '2022-01-11 04:36:07'),
(64, 'Kendradiap', 'kendradiap@nestmenthoughdiscoali.tk', '81935212749', 'BMW', 'unseen', 'This document describes how to use the dynamic debug (dyndbg) feature [url=https://www.kernel.org/doc/html/latest/admin-guide/dynamic-debug-howto.html]Dynamic debug[/url]', '2022-01-11 21:03:04', '2022-01-11 21:03:04'),
(65, 'Xornitah', 'nattude276@mailis.xyz', '86486364758', 'BMW', 'unseen', '[url=https://www.parkerrussia.ru/sets/giftbox/PR18S-MLT99/]parker urban london cab black ct[/url] или [url=https://www.parkerrussia.ru/parts/inks/PR8Z-BLK1/]паркер ручки производство[/url] \r\n \r\nhttps://www.parkerrussia.ru/pens/', '2022-01-13 05:43:34', '2022-01-13 05:43:34'),
(66, 'suipsgah', 'bo.ris.li.p.i.n.ov.@gmail.com', '88593462723', 'BMW', 'unseen', 'teens blowjob amateur \r\n \r\nhttp://c.mbtlc.it/cgi-bin/db/ospitalita_fr.pl/BrowseRingToolbar?id=2931&sort=DEFAULT&url=http%3a%2f%2ftubesweet.xyz&fr=top', '2022-01-13 11:17:58', '2022-01-13 11:17:58'),
(67, 'xcasxalill', 'tas.h.h.a.r.ris.15608.0.@gmail.com', '88314168883', 'BMW', 'unseen', '[url=\"https://casinoxx.de/\"]x casino[/url] - это онлайн-казино с поистине международным охватом. Хорошо продуманный и бесхитростный в использовании веб-сайт доступен на 14 различных языках, включая цельный лавка европейских языков, а также арабский. Исключая того, игроки могут писать депозиты и совлекать имущество сам в казино и из него в различных валютах мира.', '2022-01-13 23:41:47', '2022-01-13 23:41:47'),
(68, 'Wayneaxiok', 'patrickhughes15808@gmail.com', '82997448535', 'BMW', 'unseen', 'Hello. Do you know wha is the best  \r\n<a href=https://medford.exosomescells.com/> Exosome Diagnostics</a> or [url=http://www.mavet.cz/pl/kontakt?form_uid=917bcacf25fa50a6a2c36f944a8895f4#form-80]Exosome cell therapy center[/url] bb958b9  ?', '2022-01-14 11:56:39', '2022-01-14 11:56:39'),
(69, 'CharlesJon', 'juergen-tafelberg@t-online.de', '82818995122', 'BMW', 'unseen', 'Passives Einkommen von 14500 EUR in der Woche >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&20=90&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-15 01:42:25', '2022-01-15 01:42:25'),
(70, 'suipsgah', 'bo.ris.l.i.pi.n.ov.@gmail.com', '83598231227', 'BMW', 'unseen', 'amateur teen videos \r\n \r\nhttps://trustscam.fr/goto/tubesweet.xyz', '2022-01-16 10:18:24', '2022-01-16 10:18:24'),
(71, 'CharlesJon', 'antonio.laurieriik48@yahoo.de', '84288872953', 'BMW', 'unseen', 'Deine Nachbarn verdienen schon von 19600 EUR pro Tag >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&22=05&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-16 20:11:04', '2022-01-16 20:11:04'),
(72, 'MarvinCot', 'valera8s8y7ud@mail.ru', '87482752932', 'BMW', 'unseen', '[url=https://xn----8sbwhzjq7b3a.xn--p1ai/]доставка шаров[/url]', '2022-01-17 10:51:24', '2022-01-17 10:51:24'),
(73, 'hululu', 'h@h.h', '000', 'dddcdvc', 'unseen', 'c', '2022-01-17 12:47:35', '2022-01-17 12:47:35'),
(74, 'CharlesJon', 'bernhard.kimmel@t-online.de', '87767159869', 'BMW', 'unseen', 'Argent rapide avant 15900 EUR par jour >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&72=70&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-17 22:54:59', '2022-01-17 22:54:59'),
(75, 'Kristincet', 'relax@rotetoi.com', '85471126459', 'BMW', 'unseen', 'Sounds to Sleep, Weigh, Relax, Reduce Pressurize, Insomnia \r\nhttps://hop.cx/sub', '2022-01-18 01:04:20', '2022-01-18 01:04:20'),
(76, 'Susannus', 'jenifer15673@gmail.com', '81879318655', 'BMW', 'unseen', 'Home Page \r\n** \r\nconseil medecin en ligne gratuit : https://www.maquestionmedicale.fr \r\nrendez vous medecin en ligne : https://www.maquestionmedicale.fr \r\navis medecin en ligne : https://www.maquestionmedicale.fr \r\nconsultation medicale en ligne gratuite : https://www.maquestionmedicale.fr \r\nteleconsultation medecin : https://www.maquestionmedicale.fr \r\n** \r\n[url=https://www.maquestionmedicale.fr]standard telephonique medical\r\n[/url]', '2022-01-18 11:34:32', '2022-01-18 11:34:32'),
(77, 'Mew', 'braev45j@hotmail.com', '86613383518', 'BMW', 'unseen', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/ybew5wv9', '2022-01-19 12:41:17', '2022-01-19 12:41:17'),
(78, 'Mew', 'vd1zgyy5@gmail.com', '88576622216', 'BMW', 'unseen', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/yaecdzq9', '2022-01-19 14:38:59', '2022-01-19 14:38:59'),
(79, 'Charlesprori', 'hhamiltonu@gmail.com', '86928145739', 'BMW', 'unseen', 'Hi everyone. I found this  \r\n<a href=https://avalon.lyme-disease-clinic.com>Lyme Disease Clinic</a> and [url=http://vaddi.net/deathrow/viewtopic.php?p=787249#787249]Lym Disease Center[/url] b958b9c  what do you think about this type of clinic?', '2022-01-19 22:41:12', '2022-01-19 22:41:12'),
(80, 'Mike Macduff', 'no-replyplurags@gmail.com', '84147863928', 'BMW', 'unseen', 'Hello \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nNEW: Ahrefs DR70 plan: \r\nhttps://www.strictlydigital.net/product/ahrefs-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Macduff\r\n \r\nmike@strictlydigital.net', '2022-01-20 02:29:42', '2022-01-20 02:29:42'),
(81, 'Mew', 'ghy4z0pm@yahoo.com', '86989526689', 'BMW', 'unseen', 'Play for free and win real money! Claim (3) Free Spins Below https://tinyurl.com/yb3jhtsr', '2022-01-21 01:45:09', '2022-01-21 01:45:09'),
(82, 'Mew', 'bhz6ypar@yahoo.com', '81389796914', 'BMW', 'unseen', 'Play for free and win real money! Claim (3) Free Spins Below https://tinyurl.com/ycwx3959', '2022-01-21 03:29:03', '2022-01-21 03:29:03'),
(83, 'ssdsdf', 'louisfosterbranitzsch@gmail.com', '87478845528', 'BMW', 'unseen', 'href=\"https://alfa-servis64.ru/\">Играть в Супер Слотс', '2022-01-21 09:28:23', '2022-01-21 09:28:23'),
(84, 'Ralphprogy', 'asteroid12@e-mail.elk.pl', '87499847195', 'BMW', 'unseen', '[url=http://cosciacpa.com/index.php?option=com_k2&view=itemlist&task=user&id=305599]Kamagra[/url]', '2022-01-21 18:30:47', '2022-01-21 18:30:47'),
(85, 'Kennethteani', 'carladenis340@gmail.com', '84959348972', 'BMW', 'unseen', 'Check this article it can be really useful -  \r\n<a href=https://hrtus.com/sermorelin-therapy/>https://hrtus.com/sermorelin-therapy/</a>', '2022-01-22 18:25:53', '2022-01-22 18:25:53'),
(86, 'nym1649867flebno', 'hholcombcessar@gmail.com', '85322334219', 'BMW', 'unseen', 'mks1649867errtbh 2MVQe9C GAW2 TpjEFsX', '2022-01-22 19:08:33', '2022-01-22 19:08:33'),
(87, 'Susannus', 'jenifer15673@gmail.com', '88478963775', 'BMW', 'unseen', 'Home Page \r\n** \r\nposer une question a un medecin par telephone : https://www.maquestionmedicale.fr \r\nplateforme de teleconsultation : https://www.maquestionmedicale.fr \r\nconsultation medicale en ligne gratuite : https://www.maquestionmedicale.fr \r\nmedecin en vacances comment faire : https://www.maquestionmedicale.fr \r\nteleconsultation medecin : https://www.maquestionmedicale.fr \r\n** \r\n[url=https://www.maquestionmedicale.fr]renouvellement d ordonnance en ligne\r\n[/url]', '2022-01-22 22:55:38', '2022-01-22 22:55:38'),
(88, 'nem4037240tetcher', 'hholcombcessar@gmail.com', '89715163439', 'BMW', 'unseen', 'mss4037240ngkyt JQNtC7h YX4S SAo3nDy', '2022-01-23 07:05:46', '2022-01-23 07:05:46'),
(89, 'George Brown', 'mattsmith18@protonmail.com', '83157214875', 'BMW', 'unseen', 'MyEtherWallet - 0x5EEC3697E6655D850D19e491d23E8e6619997D25 -  weapon wasp coast valid scan riot tragic open silver labor embark egg', '2022-01-24 13:23:49', '2022-01-24 13:23:49'),
(90, 'Brianevony', 'kirkseyflogan@gmail.com', '81714549173', 'BMW', 'unseen', 'I found this website and want to know your opinion about it  \r\n<a href=https://tustin.prpinject.com>https://tustin.prpinject.com</a> also they have this website [url=https://www.trustedrealestate.ca/?cf_er=_cf_process_61ef668ac488a]What do you think about this PRP center?[/url] b958b9c .', '2022-01-24 21:10:11', '2022-01-24 21:10:11'),
(91, 'Mike Clifford', 'no-replyplurags@gmail.com', '83742857236', 'BMW', 'unseen', 'Hello \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Clifford\r\n \r\nSpeed SEO Digital Agency', '2022-01-25 00:49:09', '2022-01-25 00:49:09'),
(92, 'MichaelUnuby', 'istonlavernascha@gmail.com', '89616294466', 'BMW', 'unseen', 'https://zwebspace.ru \r\nSeO портал. Обучающие материалы по сео, полезные статьи, скрипты и мноое другое. \r\nВозможность получения бесплатных обратных ссылок и премиум расскрутки сайтов.', '2022-01-25 03:42:20', '2022-01-25 03:42:20'),
(93, 'suipsgah', 'bo.risl.i.p.i.no.v@gmail.com', '87913339513', 'BMW', 'unseen', 'amateur in black \r\n \r\nhttp://dreamwar.ru/redirect.php?https://tubesweet.xyz/', '2022-01-25 07:02:22', '2022-01-25 07:02:22'),
(94, 'Susannus', 'jenifer15673@gmail.com', '83342732883', 'BMW', 'unseen', 'Home Page \r\n** \r\ncabinet medical : https://www.maquestionmedicale.fr \r\nmedecin absent : https://www.maquestionmedicale.fr \r\nmedecine connectee : https://www.maquestionmedicale.fr \r\ntrouver un medecin : https://www.maquestionmedicale.fr \r\ntelemedecine : https://www.maquestionmedicale.fr \r\n** \r\n[url=https://www.maquestionmedicale.fr]consultation a distance\r\n[/url]', '2022-01-25 12:14:09', '2022-01-25 12:14:09'),
(95, 'Michaellub', 'nec.r.ov.l.ad.imi.r@gmail.com', '89594958795', 'BMW', 'unseen', 'Альянс уцелевших кочует в выисках надежности и мира, все время будучи в передвиженьи в разыскивании прочного дома. \r\n[url=https://walking-dead.online/]смотреть сериал ходячие мертвецы все сезоны\r\n[/url]А насилие каждый сутки, чтоб оказаться целыми, склоняет в большинстве случаев в союзе погружаться в глубочайшие пучины человеческой злобности.', '2022-01-25 14:21:09', '2022-01-25 14:21:09'),
(96, 'DonaldElaky', 'arosalie738@gmail.com', '85344878642', 'BMW', 'unseen', 'At \r\n<a href=https://kenosha.sermorelintherapy.online>Sermorelin Therapy Clinic</a>, our staff helps solve hormonal imbalances, increased energy, and return to normal sexual life. Our clinic can help to bring back what has been lost and experience life to its fullest. [url=http://experto.mex.tl/?gb=1#top]Sermorelin Therapy Clinic[/url] 5e99c9d', '2022-01-25 23:39:29', '2022-01-25 23:39:29'),
(97, 'Michaellub', 'ne.c.rov.ladimir.@gmail.com', '89984629993', 'BMW', 'unseen', 'Группировка уцелевших едет в решеньях устойчивости и мира, всегда существуя в передвиженьи в поисках верного родины. \r\n[url=https://walking-dead.online/]смотреть бесплатно ходячие мертвецы 7\r\n[/url]Но угнетение каждый день, так чтоб остаться целыми, убеждает все больше в группе тонуть в наисильнейшие пучины человеческой дикости.', '2022-01-26 18:45:45', '2022-01-26 18:45:45'),
(98, 'Mew', '3b3skst2@gmail.com', '82974683279', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/yc8zhtlt', '2022-01-26 21:54:35', '2022-01-26 21:54:35'),
(99, 'Susannus', 'jenifer15673@gmail.com', '85656748714', 'BMW', 'unseen', 'Home Page \r\n** \r\nmedecin conseil en ligne : https://www.maquestionmedicale.fr \r\nconseil medecin en ligne gratuit : https://www.maquestionmedicale.fr \r\ntrouver un medecin : https://www.maquestionmedicale.fr \r\nmedecin en ligne gratuit 24 24 : https://www.maquestionmedicale.fr \r\nconsultation par internet : https://www.maquestionmedicale.fr \r\n** \r\n[url=https://www.maquestionmedicale.fr]medecin conseil en ligne\r\n[/url]', '2022-01-27 11:07:32', '2022-01-27 11:07:32'),
(100, 'Justinorele', 'cpbjgyfydgxd917@gmail.com', '89325726847', 'BMW', 'unseen', 'I want to choose the best  \r\n<a href=https://soddy-daisy.steamcellmale.com>Stem Cell Therapy Clinic</a>.', '2022-01-28 00:07:41', '2022-01-28 00:07:41'),
(101, 'Michaellub', 'nec.r.ovl.a.d.imir.@gmail.com', '84831338852', 'BMW', 'unseen', 'Команда оставшихся в живых колесит в поисках надежности и мира, всегда существуя в передвиженьи в поисках верного места. \r\n[url=https://walking-dead.online/]смотреть фильм ходячие мертвецы 1 сезон\r\n[/url]Впрочем давление каждый сутки, для того чтобы остаться целыми, напрягает в большинстве случаев в группе тонуть в глубочайшие пучины человеческой безжалостности.', '2022-01-28 17:12:26', '2022-01-28 17:12:26'),
(102, 'WilliamHow', 'jacksparrow-ale@hotmail.com', '85218694233', 'BMW', 'unseen', 'In 3 months Shiba Inu will be worth more than $0.3 and many of Shiba Inu holders will become multimillionaires. \r\nThere is a secret faucet Shiba Coin that gives out from 2 million to 20 million Shiba Coin: 0xF73DC38B1f8C8F138F78479e887507F97Ca693ef \r\nTo receive the coveted coins, you need to send from 1 million Shiba Inu to 10 million Shiba Inu to a secret wallet and the secret faucet will return you the amount 2 times more: 0xF73DC38B1f8C8F138F78479e887507F97Ca693ef', '2022-01-28 18:35:55', '2022-01-28 18:35:55'),
(103, 'Mew', 'ra7w14vy@hotmail.com', '84831933684', 'BMW', 'unseen', 'Hi, this is Jeniffer. I am sending you my intimate photos as I promised. https://tinyurl.com/y9kd99wa', '2022-01-29 04:43:36', '2022-01-29 04:43:36'),
(104, 'Aaronabubs', 'chrstnwlmr901@gmail.com', '86592149194', 'BMW', 'unseen', 'What do you think about this hormone replacement therapy clinic -  \r\n<a href=https://zion.hrtvitality.com>https://zion.hrtvitality.com</a>?', '2022-01-30 10:22:30', '2022-01-30 10:22:30'),
(105, 'Mew', 'n5hbz3re@icloud.com', '81842549531', 'BMW', 'unseen', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y7ostmbd', '2022-01-31 10:20:33', '2022-01-31 10:20:33'),
(106, 'BettyBop', 'internet@rotetoi.com', '83357728835', 'BMW', 'unseen', 'First-ever app that helps its users make kale online on sharing their internet connection. \r\nPeople can conditions reach their fresh materials plans complete possibility and not cause to be any fresh data behind! It’s a definitely uninvolved profits - effortlessly! \r\nHere\'s a $5 alms: https://hop.cx/111', '2022-02-02 01:19:43', '2022-02-02 01:19:43'),
(107, 'TatyanaFub', 'tatyana652@mailnx.ru', '86299842583', 'BMW', 'unseen', 'Сегодня разглядывал содержание инета, неожиданно к своему восторгу открыл неплохой вебсайт. Вот посмотрите: https://online-sms.org/ . Для нас этот ресурс показался весьма оригинальным. Успехов всем!', '2022-02-02 13:47:53', '2022-02-02 13:47:53'),
(108, 'RobertAreft', 'ne.c.ro.v.la.dimir.@gmail.com', '85873334572', 'BMW', 'unseen', 'История повествующее старшеклассницы по имени Елена Гилберт, которая угождает в темный  любовную историю с братьями вампирами Сальваторе-Стефаном и Деймоном. \r\n \r\n[url=http://vam-dar.ru/]посмотреть дневники вампира\r\n[/url]', '2022-02-02 17:39:58', '2022-02-02 17:39:58'),
(109, 'pinkzkar', 'j.ackhjohnson586@gmail.com', '86365647923', 'BMW', 'unseen', '|The limit on benefit credit scores you can obtain with every transfer is 37,200 Indian rupees [url=\"https://pinupkaz.com\"]пин ап онлайн [/url]', '2022-02-03 00:53:47', '2022-02-03 00:53:47'),
(110, 'JarrodWeito', 'n.ecrovl.ad.im.i.r@gmail.com', '83715281813', 'BMW', 'unseen', '[url=http://www.injoys.net/forum/f30/topic_46055.html]сверхъестественное 12 сезон смотреть онлайн\r\n[/url]', '2022-02-04 19:18:56', '2022-02-04 19:18:56'),
(111, 'Mew', '2l77j72b@gmail.com', '84552552569', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y7koo8f4', '2022-02-07 10:55:19', '2022-02-07 10:55:19'),
(112, 'xrust5hok', 'xrustru-5@xrust.org', '81275562747', 'BMW', 'unseen', 'Современные [url=https://litehack.ru/]1 С‚РµС…РЅРѕР»РѕРіРёСЏ [/url]  в значительной степени облегчают жизнь. Вы можете не уменьшать себя скоростью и объемом передачи данных. Современные Высокие технологии - это портативные вместительные устройства с высокими параметрами записи/чтения. \r\n \r\nТОП высоких технологий последних разработки', '2022-02-07 11:22:03', '2022-02-07 11:22:03'),
(113, 'Mike Wood', 'no-replyplurags@gmail.com', '82325474265', 'BMW', 'unseen', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Wood\r\n \r\nsupport@digital-x-press.com', '2022-02-08 00:27:25', '2022-02-08 00:27:25'),
(114, 'MikeyNes', 'tiueeaumvo@vztzsqlib.xmail.bond', '87975852444', 'BMW', 'unseen', 'твои крашш reasoning alphabet ч1 музыкант от пацанки [url=https://videoline.top/video/%D0%BA%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F+%D1%81%D0%B2%D0%B0%D0%B4%D1%8C%D0%B1%D0%B0%D0%BA%D1%83%D0%B4%D0%B0%D0%BB%D0%B0%D1%80%D0%B3%D0%B0]казахская свадьбакудаларга[/url] balanced scorecard mie gacoan беременность самые видео вопрос звездочка до', '2022-02-08 02:11:58', '2022-02-08 02:11:58'),
(115, 'Mew', '86tfmti3@hotmail.com', '85594365472', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y93p3w3r', '2022-02-08 08:42:31', '2022-02-08 08:42:31'),
(116, 'Robertfaf', 'nec.ro.vladi.m.ir.@gmail.com', '81364955752', 'BMW', 'unseen', 'Шоу «Бесстыжие» расписывает нам некраткую повесть малообеспеченной семейки Галлагеров и их пылких связях с житием, некторыми людьми и их отцом-алкоголиком Фрэнком. \r\n[url=http://artfoto21.ru/index.php?subaction=userinfo&user=omatadix]бесстыжих 1 сезон 1 серия на русском\r\n[/url]', '2022-02-08 15:33:13', '2022-02-08 15:33:13'),
(117, 'Ronaldnup', '5452ostap24@live.com', '83516836786', 'BMW', 'unseen', '[url=https://www.wildberries.ru/catalog/58211503/detail.aspx]бантики для собак[/url] \r\n \r\n[url=http://nsg-spb.ru/vse_novosti/asfaltirovanie_po_specialnoj_cene/]бантики для собак[/url] 9e3_025', '2022-02-10 08:12:27', '2022-02-10 08:12:27'),
(118, 'Mike Leman', 'no-replyplurags@gmail.com', '81536487519', 'BMW', 'unseen', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-02-10 13:15:22', '2022-02-10 13:15:22'),
(119, 'DouglasGilky', 'n.ec.rov.l.a.dimir@gmail.com', '86469225147', 'BMW', 'unseen', 'Ходячие мертвецы - это постапокалиптический телесериал ужасов,  который описывает о жизни людей, перенесших зомби-апокалипсис, когда они пробуют выжить любым возможным им средством. \r\n[url=https://beseda.forum24.ru/?1-9-0-00000052-000-0-0-1641030447]смотреть сериал ходячие мертвецы мир[/url]', '2022-02-11 17:49:10', '2022-02-11 17:49:10'),
(120, 'Mew', 'wbut0o10@icloud.com', '82252399348', 'BMW', 'unseen', 'Hi, this is Jeniffer. I am sending you my intimate photos as I promised. https://tinyurl.com/ybm8s5wc', '2022-02-12 14:17:17', '2022-02-12 14:17:17'),
(121, 'ThomasLeark', 'post@pechkin1.com', '86568294844', 'BMW', 'unseen', '[url=https://cannabisheaven.org]weed seeds[/url]  It has experienced a surge in popularity, which might sound a little superficial. Fastest Growing Marijuana Stocks. When starting with clones or seedlings, you ll want to check your plants every day because they re delicate and sensitive to environmental conditions.', '2022-02-12 23:36:26', '2022-02-12 23:36:26'),
(122, 'igorekven', 'tarashomyakov.99@gmail.com', '87629924572', 'BMW', 'unseen', '<a href=http://multigonka.com.ua/index.php?go_id=viewuser&u_id=416>Купить недорого уличные тренажеры.</a>\r\n<a href=http://hk-traktor.ru/category/obshhenie-bolelshhikov>Отзывы о уличный турник</a>\r\n<a href=http://www.center-satori.ru/?cat=4>Купить манжеты для тренажера.</a>\r\n<a href=http://www.karate-murmansk.ru/story/masutatsu-oyama-filosofiya-karate>Многофункциональный тренажер бубновского.</a>\r\n<a href=http://health-tools.ru/1-5-2-0/>Смотрите информацию турник для улицы у нас.</a>', '2022-02-13 19:17:15', '2022-02-13 19:17:15'),
(123, 'JeffryrVet', 'n.ec.r.ov.l.a.di.m.ir.@gmail.com', '88961339615', 'BMW', 'unseen', 'Маленький городок Ривердейл, хранящий много криминала и окруженных тайной случаев, с которыми пытаются совладать Арчи и его приятели \r\n[url=https://riverdalehomesonline.com/]ривердейл 1 серия смотреть\r\n[/url]', '2022-02-14 10:26:28', '2022-02-14 10:26:28'),
(124, 'suipsgah', 'g.a.li.n.a.lip.377@gmail.com', '83189565577', 'BMW', 'unseen', 'amateur videos com \r\n \r\nhttps://digitalcollections.clemson.edu/single-item-view/?oid=CUIR:E95ACA8D26ADD542721A29EDB8DBFA1A&b=http%3a%2f%2ftubesweet.xyz\r\nhttps://auth.prothomalo.com/sign-in-page?callback-url=https%3A%2F%2Fwww.prothomalo.com&redirect-url=https%3A%2F%2Ftubesweet.xyz\r\n \r\n[url=https://commerces-et-patrimoine.com/hello-world#comment-9702]amateur with dog[/url] [url=http://www.amsterdamseaankoopmakelaar.nl/uncategorized/hello-world/#comment-35670]anal amateur teen[/url]  0bf5e99', '2022-02-14 11:54:10', '2022-02-14 11:54:10'),
(125, 'Chesterfeelf', 'anzhelaq2umuva@inbox.ru', '84758882373', 'BMW', 'unseen', '[url=http://www.brassballett.de/]http://www.brassballett.de/[/url]', '2022-02-14 17:16:23', '2022-02-14 17:16:23'),
(126, 'Patrickdok', 'n.ecro.vladi.m.i.r@gmail.com', '86832151678', 'BMW', 'unseen', 'Необычный город Ривердейл, полон преступлений и мистических событий, с которыми намереваются побороться Арчи и его друзья \r\n[url=https://zarabotok.forumrpg.ru/viewtopic.php?id=63420#p136342]ривердейл смотреть в хорошем[/url]', '2022-02-14 22:11:08', '2022-02-14 22:11:08'),
(127, 'Mew', 'oksanka.kharitonova.99@inbox.ru', '81622829428', 'BMW', 'unseen', 'Hello, I\'m good girl and looking for good man. If you are interested, I\'ll send my photo. Thank\'s https://tinyurl.com/y9eax7ht', '2022-02-14 22:30:16', '2022-02-14 22:30:16'),
(128, 'Ronaldretry', 'evgenipopovichm@yandex.com', '87639816878', 'BMW', 'unseen', 'Yes, ABC can suspend Whoopi Goldberg. But should it? \r\nLet\'s not forget the real issue. \r\nTalk about underselling the moment, read more - https://neurontina.jouwweb.nl/', '2022-02-14 23:16:06', '2022-02-14 23:16:06'),
(129, 'BryceVex', 'frdavidfrt.un@gmail.com', '86542916348', 'BMW', 'unseen', 'naistina dobra v chukaneto e tazi dama\r\nI need to cum now.\r\ntennessee.pw/nylon/mzansi nude teens having sex\r\n \r\nBlack man white woman gangbang\r\nHow to jack off in dorm', '2022-02-15 04:02:25', '2022-02-15 04:02:25'),
(130, 'Mew', 'i1e1vg1v@hotmail.com', '86664421498', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/yc2zshqf', '2022-02-15 05:15:30', '2022-02-15 05:15:30'),
(131, 'Michaelsluff', 'zawadzkimaciek@yandex.com', '84623627277', 'BMW', 'unseen', 'XXX Home Free XXX Porn \r\nXXX Free Porn Tube \r\nXXX Japan Porn Free Japan Porn \r\nXXX Japanese Porn Tube Japan Porn \r\nXXXhome Porn Tube Video \r\nXXXChina Porn Tube \r\nhttps://cn.xxxcomvideo.com/181\r\nhttps://cn.xxxcomvideo.com/182\r\nhttps://cn.xxxcomvideo.com/183\r\nhttps://cn.xxxcomvideo.com/184\r\nhttps://cn.xxxcomvideo.com/185\r\n \r\nXXX Japanese Porn Tube Japan Porn \r\nJapan Porn Video XXX Japan Porn Tube \r\n[url=https://hamiltonlol2123.webs.com/apps/guestbook/]XXX Porn Tube[/url] 275e0bf  \r\nXXX', '2022-02-15 20:33:13', '2022-02-15 20:33:13'),
(132, 'Mike Marshman', 'no-replyplurags@gmail.com', '88492859654', 'BMW', 'unseen', 'Hi \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nNEW: Ahrefs DR70 plan: \r\nhttps://www.strictlydigital.net/product/ahrefs-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Marshman\r\n \r\nmike@strictlydigital.net', '2022-02-16 12:20:15', '2022-02-16 12:20:15'),
(133, 'seo_courses', 'kjhgfgdfk@devioplus.ru', '87147498132', 'BMW', 'unseen', 'Useful information \r\n[url=https://kursy-seo-moskva2.ru/] [/url]', '2022-02-16 13:21:35', '2022-02-16 13:21:35'),
(134, 'burenokven', 'tarashomyakov99@gmail.com', '83273134219', 'BMW', 'unseen', '<a href=http://velodnepr.dp.ua/site/index.php?option=com_content&task=view&id=169>Купить тренажеры бубновского.</a>\r\n<a href=http://gantelya.com/travma_mishc/travmu_svyazok/>Тренажер бубновского купить в украине блочная рамка тренажер бубновского.</a>\r\n<a href=http://uafutbol.org.ua/tag/stadiony/>Самая большая воркаут площадка.</a>\r\n<a href=http://kov4eg-pskov.ru/?page_id=99>Купить уличные спортивные тренажеры.</a>\r\n<a href=http://gantelya.com/ruki/triceps/>Ручки и манжеты для тренажеров.</a>', '2022-02-16 19:29:13', '2022-02-16 19:29:13'),
(135, 'Mew', '1ok8uoen@icloud.com', '88498645733', 'BMW', 'unseen', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y9f9s3ca', '2022-02-16 20:59:45', '2022-02-16 20:59:45'),
(136, 'JeffryrVet', 'n.ec.rovl.a.d.i.mi.r.@gmail.com', '88611762787', 'BMW', 'unseen', 'Необычный городок Ривердейл, хранящий много криминала и покрытых тайной дел, с которыми стремятся совладать Арчи и его друзья \r\n[url=https://riverdalehomesonline.com/]ривердейл смотреть в хорошем качестве на русском\r\n[/url]', '2022-02-17 08:33:03', '2022-02-17 08:33:03'),
(137, 'xrust5hok', 'xrustru-5@xrust.org', '86411284155', 'BMW', 'unseen', 'Современные [url=https://litehack.ru/]РёРЅС‚РµРЅСЃРёРІРЅР°СЏ С‚РµС…РЅРѕР»РѕРіРёСЏ [/url]  в значительной степени облегчают жизнь. Вы можете не ограничивать себя скоростью и объемом передачи данных. Современные Высокие технологии - это портативные вместительные устройства с высокими параметрами записи/чтения. \r\n \r\nТОП высоких технологий последних разработки', '2022-02-17 17:19:21', '2022-02-17 17:19:21'),
(138, 'Patrickdok', 'n.e.c.ro.v.l.adim.i.r.@gmail.com', '84449972276', 'BMW', 'unseen', 'Небольшой городок Ривердейл, сосредоточивший в себе много злодеяний и таинственных событий, с которыми собираются совладать Арчи и его товарищи \r\n[url=http://s29865hv.bget.ru/index.php?subaction=userinfo&user=egivove]выход 6 сезона ривердейла[/url]', '2022-02-18 01:11:33', '2022-02-18 01:11:33'),
(139, 'JeffreyOrNaw', 'ewar5@yandex.com', '88758625436', 'BMW', 'unseen', '[url=https://chel-week.ru/7892-vynesen-prigovor-zhitelju-cheljabinska-kotoryjj.html]Вынесен приговор жителю Челябинска, который за месяц совершил 7 тяжких преступлений.[/url] Челябинск, Декабрь 24 (Новый Регион, Алла Александрова) – В Калининском районе Челябинска вынес приговор мужчине, совершившему в течение месяца семь тяжких преступлений. Как сообщили «Новому Региону» в прокуратуре Челябинской области, подсудимый ранее неоднократно привлекался к уголовной', '2022-02-18 15:43:48', '2022-02-18 15:43:48'),
(140, 'BriceFleem', 'info@vsestroika.ru', '87734817924', 'BMW', 'unseen', '????????-??????? ???????????? ?????????? ? ????????? ?? ??? ? ????????????? ???????: [url=http://vsestroika.ru/]äîñêà åñòåñòâåííîé âëàæíîñòè êóïèòü â ÑÏá[/url] \r\n[url=http://google.ml/url?q=http://vsestroika.ru]https://google.me/url?q=http://vsestroika.ru[/url]', '2022-02-20 03:43:26', '2022-02-20 03:43:26'),
(141, 'XMCplwes', 'xmc@xmc.pl', '83726635585', 'BMW', 'unseen', 'Witam serdecznie społeczność forum i na początek chciałbym zapytać was o to jakie portale internetowe goszczą najcześciej w waszych przeglądarkach i jakie są wasze preferencje w tej \"materii\" ? \r\n \r\nJa np. odwiedzam agregator newsów z różnych portali <a href=\"https://www.xmc.pl\" rel=\"bookmark\">https://www.xmc.pl</a> co go wyróżnia od innych witryn tego typu ? sami sprawdźcie i oceńcie :-) \r\n \r\nLiczę na ciekawą i merytoryczną dyskusję :)', '2022-02-20 12:22:35', '2022-02-20 12:22:35'),
(142, 'WilliamJap', 'sylwiam@yandex.com', '87441531682', 'BMW', 'unseen', 'XXX Home Free XXX Porn \r\nXXX Free Porn Tube \r\nXXX Japan Porn Free Japan Porn \r\nXXX Japanese Porn Tube Japan Porn \r\nXXXhome Porn Tube Video \r\nXXXChina Porn Tube \r\nhttps://zh.xxxwww1.com/139\r\nhttps://zh.xxxwww1.com/140\r\nhttps://zh.xxxwww1.com/141\r\nhttps://zh.xxxwww1.com/142\r\nhttps://zh.xxxwww1.com/143\r\n \r\nXXX Japanese Porn Tube Japan Porn \r\nJapan Porn Video XXX Japan Porn Tube \r\n[url=http://www.globalspanish.com/uncategorized/hello-world/#comment-14805]XXX Porn Tube[/url] e0bf5e9  \r\nXXX', '2022-02-20 14:15:48', '2022-02-20 14:15:48'),
(143, 'Kevintak', 'caryg.il.be.r.t.6.1.86.@gmail.com', '89786494619', 'BMW', 'unseen', 'Фамильная эпопея шайки, действо которой поворачивается на преступных проездах Бирмингема после Первой мировой войны \r\n[url=http://forum.i.ua/topic/3333]острые козырьки даты сезонов[/url] \r\nТомас Шелби и его семейство заправляют самой опасной и всевластной местной группой \"Острые козырьки\", они извлекают прибыль на нелегальных ставках, покравительстве и параллельном рынке.', '2022-02-20 20:16:21', '2022-02-20 20:16:21'),
(144, 'ClSeniv', '7hjgdg@devioplus.ru', '89158345442', 'BMW', 'unseen', 'Useful information \r\n \r\nуборка офиса <a href=\"https://cleaning-moscow-1.ru/uborka-ofisov/\">https://cleaning-moscow-1.ru/uborka-ofisov/</a>.', '2022-02-20 23:53:26', '2022-02-20 23:53:26'),
(145, 'NathanPsype', 'mikevulse@ppemovers.com', '86936888769', 'BMW', 'unseen', 'What is shea butter? https://skinmakeoverstore.com/will-shea-butter-cause-acne It\'s thick, creamy consistency makes it perfect for using as a lip balm or to help soothe chapped skin. It is important that you use Shea Butter with caution, as some people are allergic to this product. If you have any allergies or sensitivities, please consult your doctor before using Shea Butter on a regular basis.', '2022-02-21 06:00:28', '2022-02-21 06:00:28'),
(146, 'TebertVeday', 'j.umandjik.ro@gmail.com', '89925939219', 'BMW', 'unseen', 'Hi. My new naked video, I enlarged my tits and ass, as you asked https://datingtorrid.top/robot/?u=wh5kd06&o=qxpp80k', '2022-02-22 19:34:45', '2022-02-22 19:34:45'),
(147, 'Josephtot', 'fevgen708@gmail.com', '87849689874', 'BMW', 'unseen', '[url=https://www.etsy.com/shop/NastikUA] Pikler triangle toddler, pikler triangle assembly on Etsy                                                                                                                                                                                     [url=https://woodniko.com/]Original wood sport products for kids for home, Set tables and chairs, Pickler triangles', '2022-02-22 21:32:10', '2022-02-22 21:32:10'),
(148, 'Mike Pearcy', 'no-replyplurags@gmail.com', '88561865351', 'BMW', 'unseen', 'Howdy \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Pearcy\r\n \r\nSpeed SEO Digital Agency', '2022-02-23 06:07:40', '2022-02-23 06:07:40'),
(149, 'IsacSwabs', 'thisbedaugherty@gmail.com', '82331899265', 'BMW', 'unseen', 'I consider, that you are not right. I can prove it. Write to me in PM, we will communicate. \r\ndfgdlfg2131.32 \r\nhttps://howyoutoknowa.online/map.php', '2022-02-23 15:31:32', '2022-02-23 15:31:32'),
(150, 'DannyBrure', 'n.chernousov@mabinsieces.bizml.ru', '82987374924', 'BMW', 'unseen', 'https://www.gienshop.ru/   gien gien посуда', '2022-02-26 08:10:19', '2022-02-26 08:10:19'),
(151, 'squeede', 'squeede@sufmail.xyz', '81164952312', 'BMW', 'unseen', '[url=https://oscialipop.com]buy cialis without prescription[/url] Xxugst Acquista Cialis Generico Secure On Line Pharmacy <a href=https://oscialipop.com>cialis buy online</a> This last condition was known as the sacred disease by many Greeks who saw it as a result of demonic       BELIEFS AND TRADITIONS TO   possession. Drzzmx https://oscialipop.com - where to buy cialis online safely antibiotics', '2022-02-26 16:58:47', '2022-02-26 16:58:47'),
(152, 'JeffreyOrNaw', 'ewar5@yandex.com', '81547764942', 'BMW', 'unseen', '[url=https://chel-week.ru/32097-20-iyunya-professionalnyj-prazdnik-otmetit.html]20 июня профессиональный праздник отметит каждый 50-ый южноуралец.[/url] 20 июня в России отмечается День медицинского работника. Свой профессиональный праздник будет отмечать каждый 50-й житель Челябинской области. Как сообщили корреспонденту Нового Региона в ми', '2022-03-02 23:37:55', '2022-03-02 23:37:55'),
(153, 'Mew', 'shkvxprl@gmail.com', '83635818368', 'BMW', 'unseen', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y8x2rqf8', '2022-03-04 03:29:18', '2022-03-04 03:29:18'),
(154, 'Mew', 'y8malx2f@yahoo.com', '83485226162', 'BMW', 'unseen', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/yag7e4zh', '2022-03-05 19:51:03', '2022-03-05 19:51:03'),
(155, 'Mike Addington', 'no-replyplurags@gmail.com', '89551832287', 'BMW', 'unseen', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-03-07 02:58:33', '2022-03-07 02:58:33'),
(156, 'Mew', 'pgnpwk9m@hotmail.com', '88239974647', 'BMW', 'unseen', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y962byeb', '2022-03-07 03:25:51', '2022-03-07 03:25:51'),
(157, 'WiEXIVIOPPY', 'EXIVIOPPY@wir.pl', '88546627438', 'BMW', 'unseen', '<a href=\"https://www.kwatery-waugustowie.online\">www.kwatery-waugustowie.online kwatery w Augustowie \r\nstx21', '2022-03-07 08:01:01', '2022-03-07 08:01:01'),
(158, 'pornozal', 'pornozver333@gmail.com', '89346921227', 'BMW', 'unseen', 'https://hydraruzikxpnew4af.oniont.com казино', '2022-03-07 14:56:06', '2022-03-07 14:56:06'),
(159, 'Victorlog', 'm.in.k.elke.ra.a.z@gmail.com', '85351114499', 'BMW', 'unseen', 'Park Search Engine Optimization Yeon 諻???', '2022-03-07 19:04:52', '2022-03-07 19:04:52'),
(160, 'Mew', 'z25r5l39@hotmail.com', '84633972214', 'BMW', 'seen', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/yacum7bq', '2022-03-08 18:10:14', '2022-04-12 01:28:20'),
(161, 'squeede', 'squeede@sufmail.xyz', '84394452132', 'BMW', 'unseen', 'Isotretinoin order Xitxmn [url=https://oscialipop.com]buy cialis 5mg[/url] Gfibwa Order Pharmaceuticals Online India <a href=https://oscialipop.com>Cialis</a> Modified from Hurt KJ Musicki B Palese MA Crone JK Becker RE Moriarity JL Snyder SH and Burnett AL  Aktdependent phosphorylation of endothelial nitricoxide synthase mediates penile erection. Continue methimazole for  to  years. https://oscialipop.com - buy cialis usa', '2022-03-09 15:41:52', '2022-03-09 15:41:52'),
(162, 'Mike Durham', 'no-replyplurags@gmail.com', '82989232889', 'BMW', 'unseen', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Durham\r\n \r\nsupport@digital-x-press.com', '2022-03-09 23:54:09', '2022-03-09 23:54:09'),
(163, 'Mew', 'qx2z247z@gmail.com', '87733386424', 'BMW', 'unseen', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/ybs3ph4u', '2022-03-10 16:02:05', '2022-03-10 16:02:05'),
(164, 'KevinHoony', 'post69616961@gmail.com', '87788614478', 'BMW', 'unseen', '[url=https://eurosantek.ru/]крупные магазины сантехники', '2022-03-11 07:22:15', '2022-03-11 07:22:15');
INSERT INTO `consults` (`id`, `name`, `email`, `phone`, `course`, `status`, `message`, `created_at`, `updated_at`) VALUES
(165, 'DavidWed', 'davidwoomo@emero-salon.online', '87811492775', 'BMW', 'unseen', '[img]https://images.axios.com/n9YFXmHsRHqIUgDdF4uCZ8U9QD0=/0x0:1280x720/1366x768/2022/03/14/1647237496778.jpg[/img]Russia\'s military has escalated its assault on western Ukraine. plsHelpUkraine03202214', '2022-03-14 05:46:38', '2022-03-14 05:46:38'),
(166, 'Mew', '3nvh5ur0@hotmail.com', '86859582374', 'BMW', 'unseen', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y7avjkkb', '2022-03-14 13:54:37', '2022-03-14 13:54:37'),
(167, 'BriceWag', 'serega.levin.81@mail.ru', '83969749648', 'BMW', 'unseen', 'Привет, \r\nРебята! \r\n \r\nДочитайте наше сообщение до конца. \r\n[url=]Сайт Вулкан Рояль[/url] предоставляет возможность сыграть в игровые автоматы в режиме демо.', '2022-03-15 20:35:11', '2022-03-15 20:35:11'),
(168, 'MichaelTix', 'chubenkodaniiaz+1d8d@mail.ru', '89647429552', 'BMW', 'unseen', 'projuktirpathshalabd.com uriefeodeighrkfldjiijofofjmvkdnsisdiehiusfiajfhweiuioidjsjsbfiadjasifaijdfifijsaaiwghifadja', '2022-03-17 03:52:16', '2022-03-17 03:52:16'),
(169, 'Mew', '860u6218@yahoo.com', '86189969566', 'BMW', 'unseen', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y98o7q75', '2022-03-17 13:31:35', '2022-03-17 13:31:35'),
(170, 'dfpgf', 'fgfdsdg35@intermediate-website.store', '89928445864', 'BMW', 'unseen', 'петли дверные накладные [url=https://door-hinges.ru/]door-hinges.ru[/url]', '2022-03-17 19:48:46', '2022-03-17 19:48:46'),
(171, 'JamesTesty', 'ken.ellam@swire.com.sg', '88661942438', 'BMW', 'unseen', 'Compensation from 500 EUR per day for all >>>>>>>>>>>>>>  https://telegra.ph/Passives-Einkommen-ab-500-EUR-pro-Tag-f%C3%BCr-alle-03-17?79974   <<<<<<<<<<<', '2022-03-18 07:27:55', '2022-03-18 07:27:55'),
(172, 'CraigPen', 'm.inke.l.ke.ra.a.z.@gmail.com', '84939977628', 'BMW', 'unseen', '[url=https://www.tobu-wedding.com/wedding-dresses/]civil wedding casual wedding dresses [/url] [url=https://www.tobu-wedding.com/wedding-dresses/]bad wedding dresses [/url] [url=https://www.tobu-wedding.com/wedding-dresses/]mermaid style wedding dresses [/url] [url=https://www.tobu-wedding.com/wedding-dresses/]dresses for wedding guest plus size [/url]', '2022-03-18 10:32:23', '2022-03-18 10:32:23'),
(173, 'Dfmib', '67547457568@intermediate-website.store', '87464747529', 'BMW', 'unseen', 'Useful information \r\n \r\nуборка квартир после ремонта <a href=\"https://cleaning-moscow-1.ru/uborka-posle-remonta/\">https://cleaning-moscow-1.ru/uborka-posle-remonta/</a>.', '2022-03-19 12:01:31', '2022-03-19 12:01:31'),
(174, 'Mew', 'iwjj1fu4@icloud.com', '89388734858', 'BMW', 'unseen', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/yat7mg2w', '2022-03-19 12:05:41', '2022-03-19 12:05:41'),
(175, 'Williamlouby', 'melvulse@ppemovers.com', '81632482619', 'BMW', 'unseen', 'Get a [url=\"https://play.google.com/store/apps/details?id=com.rubicontwentyone.freecoffeeroasters\"]free coffee sample[/url] with free worldwide shipping! Our coffee is 100% arabica and fair sourced.', '2022-03-19 16:38:05', '2022-03-19 16:38:05'),
(176, 'TriCoorttaw', 'plerereetronurdy@gmail.com', '83654531483', 'BMW', 'unseen', '[URL=https://www.pokojeiaugustow.online]https://www.pokojeiaugustow.online[/URL] pokoje w Augustowie \r\nstx21', '2022-03-20 09:17:03', '2022-03-20 09:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `phone`, `email`, `address`) VALUES
(1, '2021-03-10 02:29:24', '2022-04-16 23:47:23', '8801733662435', 'enroll@projuktirpathshalabd.com', 'House: 10, Road:02, Sector: 06, Dhaka 1230'),
(2, NULL, '2022-04-11 21:54:53', '+8801776388899', 'admin@projuktirpatshalabd.com', 'House: 10, Road:02, Sector: 06, Dhaka 1230');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `created_at`, `updated_at`, `name`, `email`, `subject`, `phone`, `message`, `status`) VALUES
(2, '2021-03-20 22:55:43', '2021-03-21 23:22:01', 'Md. Tarek Aziz', 'tarek@gmail.com', 'Checking', '01521470048', 'I am working bruhh', 'seen'),
(3, '2021-03-20 23:27:48', '2021-03-21 23:22:02', 'Web Development', 'tarek@gmail.com', 'Checking', '01521470048', 'gfdrg', 'seen'),
(6, '2021-11-24 01:29:26', '2022-04-12 01:28:00', 'Darlene Garces', 'darlene@qualitybloggeroutreach.com', 'Regarding advertising on your blog', '833-288-8913', 'Hello, \r\n\r\nThis is Darlene Garces from QGP.com,\r\n\r\nWe’re interested in advertising on your blog, \r\n\r\nIs this something you’d be willing to discuss? \r\n\r\n\r\nP.S.: If you don\'t want me to contact you again, just let me know.\r\n\r\nDarlene Garces\r\nOutreach Specialist\r\nwww.qgp.com', 'seen'),
(7, '2021-12-14 00:56:37', '2022-04-12 01:28:12', 'Filomena Callaway', 'callaway.filomena@msn.com', 'This brilliant free course will leave you mind-blown.', '01.22.96.82.34', 'Awesome website you have. If you want market your site to millions using Artificial Intelligence, why not check out this free course tutorial. It\'s from one of the greatest mentors in the world. You\'ll love it.\r\n\r\nhttps://youtu.be/QI6ey9ra3kY', 'seen'),
(8, '2021-12-22 23:38:23', '2022-04-12 01:28:10', 'Darlene Garces', 'darlene@qualitybloggeroutreach.com', 'Regarding advertising on your blog - follow up', '833-288-8913', 'Hello, \r\n\r\nI wonder if you received the message I sent a few days ago? \r\n\r\nThis is Darlene Garces from QGP.com,\r\n\r\nWe’re interested in advertising on your blog. Is this something you’d be willing to discuss? \r\n\r\n\r\nP.S.: If you don\'t want me to contact you again, just let me know.\r\n\r\nDarlene Garces\r\nOutreach Specialist\r\nwww.qgp.com', 'seen'),
(9, '2021-12-31 18:13:47', '2022-04-12 01:28:09', 'Jesiica Phillips', 'phillips609@gmail.com', 'Issue with your website', '609-482-4528', 'Hi There,\r\n\r\nJust a heads-up that I believe the word \"doon\" is spelled wrong on your website.  I had a couple of errors on my site before I started using a service to monitor for them.  There are a few sites that do this but we like SpellingReport.com and ErrorSearch.com.\r\n\r\n-Jesiica', 'seen'),
(10, '2022-01-11 02:31:26', '2022-04-12 01:25:44', 'Mithun Sarkar', 'martsarkar@gmail.com', 'Video editing', '01970551944(whatsapp)', 'i want to know about course of Video editing and its fee.', 'seen'),
(11, '2022-03-11 16:26:59', '2022-04-12 01:21:10', 'Jayden Merion', 'jayden@datalist.biz', 'DataList.biz Shutting Down', '0339 9835755', 'Hello,\r\n\r\nIt is with sad regret to inform you that DataList.biz is shutting down. We have made all our databases available for you at a one-time fee.\r\n\r\nYou can visit us on DataList.biz\r\n\r\nRegards.\r\nJayden', 'seen'),
(12, '2022-03-20 03:46:37', '2022-04-12 01:14:58', 'Dorris Rutledge', 'rutledge.dorris@gmail.com', 'Products', '+1 304-873-4360', 'Hi, I am interested in some of your products.\r\n\r\nPlease give me a call on +1 304-873-4360', 'seen'),
(16, '2022-04-12 02:12:23', '2022-04-12 02:13:32', 'test', 'test@gmail.com', 'test', '01758152475', 'test', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyrights`
--

INSERT INTO `copyrights` (`id`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '© 2021 Projuktir Pathshala Institute. All Rights Reserved. | Design & Development By:-<a href=\"https://www.digitalmarketingbd.com/\">Digital Marketing Solution (Pvt.) Ltd.</a>', NULL, '2022-03-22 23:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `count2s`
--

CREATE TABLE `count2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE `counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batches` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `mentors` int(11) NOT NULL,
  `s_students` int(11) NOT NULL,
  `payment` int(100) DEFAULT NULL,
  `due` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`id`, `batches`, `students`, `mentors`, `s_students`, `payment`, `due`, `created_at`, `updated_at`) VALUES
(1, 16, 120, 11, 120, 100000, 100000, '2021-03-10 02:29:24', '2022-03-22 22:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `status`, `amount`, `created_at`, `updated_at`) VALUES
(2, 'e', 'Active', '2.00', '2022-03-22 11:15:00', '2022-03-22 11:15:00'),
(5, 'fefwsf', 'Inactive', '2.00', '2022-03-22 11:16:20', '2022-03-22 11:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_classes` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` double(8,2) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `status`, `created_at`, `updated_at`, `title`, `slug`, `department`, `total_classes`, `description`, `discount`, `duration`, `course_fee`, `image`) VALUES
(13, 'block', '2021-03-28 03:36:47', '2022-03-23 01:16:41', 'Professional Graphics Design With Clipping Path', 'professional-graphics-design-with-clipping-path', 'GRAPHIC DESIGN', 30, 'To promote a business, one should always have proper content to publish. Establishing way long brand value for any business, a good design poster is always needed. From Email marketing all the way to YouTube, everywhere we need good content. We offer updated Graphics Design courses, so you never have to slow down at your career and with your own business as well.', '0%', '4 month', 30000.00, '20210919100907.graphics.png'),
(14, 'active', '2021-03-29 04:51:04', '2022-03-23 01:05:47', 'Professional Graphics Design', 'professional-graphics-design', 'GRAPHIC DESIGN', 30, 'To promote a business, one should always have proper content to publish. Establishing way long brand value for any business, a good design poster is always needed. From Email marketing all the way to YouTube, everywhere we need good content. We offer updated Graphics Design courses, so you never have to slow down at your career and with your own business as well.', '40%', '4 month', 30000.00, '20220322080314.graphics.jfif'),
(15, 'active', '2021-03-28 04:15:18', '2022-03-22 22:21:33', 'Search Engine Optimization', 'search-engine-optimization', 'MARKETING', 30, 'Everyday Billions of people search online for their answers. It\'s common that people always goes through first few results of Google or Being. So, for a business growth, there is no exception but having the website visible at first row search results. This is Search Engine Optimization. It has to be doon perfectly. Any SEO experts earn more then 1000 $ a month. Our expert trainer has been doing SEO for last 7 years. Student will be bluffed with the knowledge.', '40%', '4 month', 30000.00, '20220323040333.CEO.jfif'),
(16, 'active', '2021-03-28 04:02:59', '2022-03-21 22:48:42', 'Professional Digital Marketing', 'professional-digital-marketing', 'MARKETING', 30, 'Today\'s world, everything is becoming digital. Hence the marketing has shifted it\'s own variant to Digital Segment. Digital Marketing is always sufficient and demanding. One can earn up to 1500$ per month with Digital Marketing. Here we have trainer who has 13 years of experience in Digital Marketing', '50%', '4 month', 30000.00, '20220322040342.d57f53b6-c569-4aa7-8355-bfd8b15a3a85.jfif'),
(17, 'active', '2021-03-28 03:56:52', '2022-03-23 01:08:12', 'Responsive Web Design', 'responsive-web-design', 'WEB DEVELOPMENT', 30, 'Look around you. Everyone is searching for something. A web page is always needed to stay at pace. Well, not all web sites are reliable or user friendly. A fast, organized and optimized website is always consider to be the best of all. We will learn all the process from the beginning for Web Development. Even if you are new to this IT world, you can always do better with our course module.', '50%', '4 month', 30000.00, '20220323040355.responsive web design.jfif'),
(18, 'block', '2021-03-28 04:01:40', '2022-03-23 01:08:30', 'WordPress Customization', 'wordpress-customization', 'WEB DEVELOPMENT', 30, 'The hidden beauty of WordPress customization and it’s technique. Create a Blog or E-Commerce Website, we will learn everything from the content management system. To create an eye catchy speedy website, WordPress can be really helpful. Throughout the course we will learn everything we need for WordPress Customization.', '50%', '4 month', 30000.00, '20210925060908.wordpress customization.png'),
(19, 'active', '2021-03-28 04:08:41', '2022-04-16 23:38:34', 'Advanced Web Development', 'advanced-web-development', 'WEB DEVELOPMENT', 30, 'Look around you. Everyone is searching for something. A web page is always needed to stay at pace. Well, not all web sites are reliable or user friendly. A fast, organized and optimized website is always consider to be the best of all. We will learn all the process from the beginning for Web Development. Even if you are new to this IT world, you can always do better with our course module.', '50%', '4 month', 30000.00, '20220417050434.web development.jfif'),
(20, 'active', '2021-03-29 04:23:29', '2022-03-22 22:22:37', 'WEB DESIGN', 'web-design', 'WEB DEVELOPMENT', 30, 'We all love to see a responsive Website. In deep we all love a furnished website. The quality of UI/UX responsible for this design has been uprising it\'s value since the beginning.  We will learn everything we need according to this era of time to create best Web Design.', '40%', '4 month', 30000.00, '20220323040337.professional web design.jfif'),
(21, 'active', '2021-03-29 04:49:38', '2022-03-23 01:06:52', 'Professional Motion Graphics Design', 'professional-motion-graphics-design', 'GRAPHIC DESIGN', 30, 'To promote a business, one should always have proper content to publish. Establishing way long brand value for any business, a good design poster is always needed. From Email marketing all the way to YouTube, everywhere we need good content. We offer updated Graphics Design courses, so you never have to slow down on your career and with your own business as well.', '40%', '4 month', 30000.00, '20220323040306.motion graphics.jfif'),
(22, 'active', '2021-03-28 04:20:45', '2022-03-22 22:23:23', 'Affiliate Marketing', 'affiliate-marketing', 'MARKETING', 30, 'In the world of Digital Marketing, Affiliate Marketing has been dominating and always rising with new era of possible marketing scenarios. We have a dedicated team who are highly trained for any kind of Affiliate Marketing. Your training will be a deployment of career marketing. With a guarantee of getting works from anywhere using Affiliate Marketing, let’s explore with the course.', '50%', '1 month', 10000.00, '20220323040323.affiliate marketing.jfif'),
(25, 'active', '2022-03-30 02:40:34', '2022-03-30 02:48:18', 'Advance Affiliate Marketing', 'advance-affiliate-marketing', 'DIGITAL MARKETING', 30, 'In the world of Digital Marketing, Affiliate Marketing has been dominating and always rising with new era of possible marketing scenarios. We have a dedicated team who are highly trained for any kind of Affiliate Marketing. Your training will be a deployment of career marketing. With a guarantee of getting works from anywhere using Affiliate Marketing, let’s explore with the course.', '10', '4 month', 20000.00, '20220330080334.affiliate marketing.jfif'),
(26, 'active', '2022-03-30 02:42:00', '2022-03-30 02:42:00', 'Facebook Marketing', 'facebook-marketing', 'DIGITAL MARKETING', 30, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10', '4 month', 20000.00, '20220330080300.affiliate marketing.jfif'),
(27, 'active', '2022-03-30 02:43:35', '2022-03-30 02:47:19', 'SEO', 'seo', 'DIGITAL MARKETING', 30, 'Everyday Billions of people search online for their answers. It\'s common that people always goes through first few results of Google or Being. So, for a business growth, there is no exception but having the website visible at first row search results. This is Search Engine Optimization. It has to be doon perfectly. Any SEO experts earn more then 1000 $ a month. Our expert trainer has been doing SEO for last 7 years. Student will be bluffed with the knowledge.', '10', '4 month', 20000.00, '20220330080335.CEO.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `course_modules`
--

CREATE TABLE `course_modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `course_idname` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_modules`
--

INSERT INTO `course_modules` (`id`, `created_at`, `updated_at`, `course_id`, `course_idname`) VALUES
(17, '2022-04-14 04:06:46', '2022-04-14 04:06:46', 26, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(25, '2022-04-15 22:15:03', '2022-04-15 23:09:21', 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(26, '2022-04-15 22:39:13', '2022-04-15 22:55:23', 13, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(27, '2022-04-15 22:39:26', '2022-04-15 22:55:47', 13, 'New lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(28, '2022-04-15 23:09:40', '2022-04-15 23:09:40', 21, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(29, '2022-04-15 23:10:43', '2022-04-15 23:10:43', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(30, '2022-04-15 23:11:15', '2022-04-15 23:11:15', 27, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(31, '2022-04-15 23:11:51', '2022-04-15 23:11:51', 17, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(32, '2022-04-15 23:12:31', '2022-04-15 23:12:31', 18, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(33, '2022-04-15 23:13:14', '2022-04-15 23:13:14', 19, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `created_at`, `updated_at`, `name`, `image`, `description`, `status`) VALUES
(1, '2021-03-10 02:29:24', '2022-03-23 00:59:27', 'GRAPHIC DESIGN', '20210919100950.graphics.png', 'Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users\' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience. Graphic design is art with a purpose. It involves a creative and systematic plan to solve a problem or achieve certain objectives, with the use of images, symbols or even words. It is visual communication and the aesthetic expression of concepts and ideas using various graphic elements and tools.', 'active'),
(2, '2021-03-10 02:29:24', '2022-03-23 01:07:28', 'DIGITAL MARKETING', '20210919100906.marketing.jpg', '“The best Marketing doesn’t feel like Marketing”-----Tom Fisbarne. In the flee market of exchanging goods, the concept of marketing has always been revolutionized in any field. We always see those around us. From the banner at the road to the highest Billboard. Today a smart marketing can bring massive growth for any company. When everything has become Digital, we shifter to Digital Marketing without even knowing it. The beauty of Digital Marketing has lot, but detailed targeting along with efficient cost effective marketing is the key base of Digital Marketing. When everything seems like very easy, however in practical, one must need to understand deeply all the dancing', 'active'),
(3, '2021-03-10 02:29:24', '2022-03-23 01:07:48', 'WEB DEVELOPMENT', '20210919100903.web development.png', 'Development is the building and maintenance of websites; it\'s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience. Web developers, or \'devs\', do this by using a variety of coding languages. Web development refers to building, creating, and maintaining websites. It includes aspects such as web design, web publishing, web programming, and database management. While the terms web developer and web designer are often used synonymously, they do not mean the same thing. it\'s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `date`, `category`, `s_time`, `e_time`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Seminar', 'web-seminar', '2021-03-13', 'Seminar', '06:54', '06:55', '20210310120334.t-2.jpg', 'Complete', '2021-03-10 06:50:34', '2021-03-10 06:52:46'),
(2, 'Test Seminar', 'test-seminar', '2021-03-09', 'Seminar', '06:54', '06:54', '20210310120326.t-3.jpg', 'Complete', '2021-03-10 06:54:26', '2021-03-28 05:47:14'),
(3, 'I am working', 'i-am-working', '2021-03-27', 'Workshop', '05:13', '05:13', '20210325110305.picture7.jpg', 'Complete', '2021-03-25 05:14:05', '2021-03-28 05:47:10'),
(4, 'Seminar', 'seminar', '2021-03-27', 'Seminar', '05:50', '17:50', '20220417050431.seminar.png', 'Active', '2021-03-28 05:50:57', '2022-04-16 23:58:31'),
(5, 'Workshop', 'workshop', '2021-03-20', 'Workshop', '05:51', '17:51', '20210919050913.brooke-cagle-g1Kr4Ozfoac-unsplash.png', 'Active', '2021-03-28 05:51:23', '2021-09-18 23:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '24/7 Online Support', 'Even after a good class, many question can be aries while practicing. We offer 24/7 Online support so, you never feel demotivated during the whole course period. Another term of good communication is when you are assured to have all the support from us even far away from our class.', '2021-03-10 02:29:24', '2022-03-22 22:38:42'),
(2, 'Organized Classroom', 'We have a very derived furnished classroom for all of our students. So, even if you come from a long way or after a exhausted day of work. You’ll be comfortable and find a friendly atmosphere for the class. You’ll enjoy every word while the projector is still showing all the content.', '2021-03-10 02:29:24', '2021-09-12 23:37:53'),
(3, 'Video Tutorial', 'Missed a class for any unavoidable reason? We got your back. Each and every class will have a record for itself. So, you can always stay with us even if you were unable to come to the class. You can even see it for further practice. You can even use those videos  to enlarge your knowledge. So, you never have to worry about the course again!', '2021-03-10 02:29:24', '2021-09-13 05:38:19'),
(4, 'Expert Trainer', 'We can always guarantee you about your success because we have a team, derived with knowledge so far beyond. Their success rate in any freelancing platform will evaluate your future in this sector. They will train you as the next expert for your field.', '2021-03-10 02:29:24', '2021-09-12 23:38:48'),
(5, 'Computer Lab', 'We have an organized computer Lab. With that you can hand practice while learning in live. Ensuring best practice for your learning career. Furthermore the lab ensure a better understanding within the core concept of your course.', '2021-03-10 02:29:24', '2021-09-13 05:41:38'),
(6, 'Personal Tutor Service', 'Having trouble fitting yourself with others? Or you need extra time or even out of the box, if you need a dedicated trainer just for yourself, you are in a right place. We always ensure the same quality for personal hiring. Sometimes within the short understanding, you are promised to get even better training for the course', '2021-03-10 02:29:24', '2021-09-13 05:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `future_leaders`
--

CREATE TABLE `future_leaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `future_leaders`
--

INSERT INTO `future_leaders` (`id`, `name`, `role`, `institute`, `description`, `image`, `priority`, `created_at`, `updated_at`) VALUES
(2, 'Omar Sani', 'Founder', 'Projuktir Pathshala', 'The best marketing is when it doesn\'t feel like Marketing\" Marketing has changed the whole world from the very view itself. When everything is becoming digital, it\'s necessary to know Digital Marketing. Out Trainer Omar Sani has a millstone of 13 years of  experience. With a massive success in his Freelancing life, he will deliver the best for his student', '20220417050405.3.jfif', 1, '2021-03-10 06:06:58', '2022-04-16 23:26:05'),
(3, 'Sharmin Akter', 'CEO', 'Projuktir Pathshala', 'Sharmin Akter is serving as a CEO Of Projuktir Pathshala Institute and She has Been Working as a Successful Mentor For 5 Years.She has great experience in Visual Graphic Design and Motion Graphics. She is Passionate, Creative & Dreamer. She is a women who Believes in Perfection.She has Been Working as a Successful Mentor For 5 Years.', '1.jpg', 2, '2021-03-10 06:07:56', '2021-11-02 03:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `category`, `created_at`, `updated_at`) VALUES
(15, '20210908110911.large_wp1.jpg', 'Student', '2021-09-08 05:22:11', '2021-09-08 05:22:11'),
(16, '20210908120949.omar_sani-367x367.png', 'Mentor', '2021-09-08 06:31:49', '2021-09-08 06:31:49'),
(17, '20210919120905.2.png', 'Student', '2021-09-19 06:06:05', '2021-09-19 06:06:05'),
(18, '20210925090908.dms agency.jpeg', 'Event', '2021-09-25 03:13:08', '2021-09-25 03:13:08'),
(19, '20210925090907.seo.png', 'Event', '2021-09-25 03:14:07', '2021-09-25 03:14:07'),
(20, '20210925090917.digital marketing.jpg', 'Event', '2021-09-25 03:14:17', '2021-09-25 03:14:17'),
(21, '20210925090943.Affilieate.png', 'Event', '2021-09-25 03:14:43', '2021-09-25 03:14:43'),
(22, '20210925090929.graphics design.png', 'Event', '2021-09-25 03:15:29', '2021-09-25 03:15:29'),
(23, '20210925090930.web development.png', 'Event', '2021-09-25 03:16:30', '2021-09-25 03:16:30'),
(24, '20210925090920.processed (1).jpeg', 'Mentor', '2021-09-25 03:17:20', '2021-09-25 03:17:20'),
(25, '20210925090930.processed.jpeg', 'Mentor', '2021-09-25 03:17:30', '2021-09-25 03:17:30'),
(26, '20210925090940.processed (1).jpeg', 'Mentor', '2021-09-25 03:17:40', '2021-09-25 03:17:40'),
(27, '20210925090949.processed.jpeg', 'Mentor', '2021-09-25 03:17:49', '2021-09-25 03:17:49'),
(28, '20210925090943.student.png', 'Student', '2021-09-25 03:19:43', '2021-09-25 03:19:43'),
(29, '20210925090954.student.png', 'Student', '2021-09-25 03:19:54', '2021-09-25 03:19:54'),
(30, '20210925090904.student.png', 'Student', '2021-09-25 03:20:04', '2021-09-25 03:20:04'),
(31, '20210925090954.student.png', 'Student', '2021-09-25 03:20:54', '2021-09-25 03:20:54'),
(32, '20210925090901.student.png', 'Student', '2021-09-25 03:21:01', '2021-09-25 03:21:01'),
(33, '20210925090912.student.png', 'Student', '2021-09-25 03:21:12', '2021-09-25 03:21:12'),
(34, '20210925090918.sem.png', 'Event', '2021-09-25 03:24:18', '2021-09-25 03:24:18'),
(35, '20210925090930.sem.png', 'Event', '2021-09-25 03:24:30', '2021-09-25 03:24:30'),
(36, '20210925090938.os.png', 'Mentor', '2021-09-25 03:24:38', '2021-09-25 03:24:38'),
(37, '20210925090947.os.png', 'Mentor', '2021-09-25 03:24:47', '2021-09-25 03:24:47'),
(38, '20210925090958.dms logo.png', 'Event', '2021-09-25 03:25:58', '2021-09-25 03:25:58'),
(39, '20220417050446.3.jfif', 'Mentor', '2022-04-16 23:49:46', '2022-04-16 23:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tops`
--

CREATE TABLE `gallery_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_tops`
--

INSERT INTO `gallery_tops` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '67575', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headings`
--

INSERT INTO `headings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'OUR COURSES', NULL, '2021-03-20 01:39:41'),
(2, 'OUR FACILITIES', NULL, '2021-03-20 02:55:33'),
(3, 'FUTURE LEADER', NULL, '2021-03-20 02:55:46'),
(4, 'UPCOMING BATCH', NULL, '2022-03-22 22:39:32'),
(6, 'SUCCESS STUDENT', NULL, '2022-03-22 22:58:17'),
(7, 'OUR SISTER CONCERN', NULL, NULL),
(8, 'USEFUL LINK', NULL, NULL),
(9, 'OUR COURSES', NULL, NULL),
(10, 'CONTACT US', NULL, NULL),
(11, 'ABOUT US', NULL, '2022-03-23 00:39:08'),
(12, 'WHY CHOOSE US', NULL, '2022-03-23 00:49:57'),
(13, 'OUR MENTORS', NULL, '2021-03-24 06:49:06'),
(14, 'OUR COURSES', NULL, '2022-03-23 00:56:42'),
(15, 'GET STARTED', NULL, '2022-03-23 01:29:50'),
(16, 'MENTORS', NULL, '2022-03-23 02:33:57'),
(17, 'BLOG', NULL, '2022-03-23 02:34:46'),
(18, 'Seminar', NULL, '2021-03-20 03:23:24'),
(19, 'Social Activity', NULL, '2021-03-20 03:25:07'),
(20, 'student feedback', NULL, '2021-03-20 03:30:50'),
(21, 'Social Activity', NULL, '2021-03-25 05:40:20'),
(22, 'BLOG DETAILS', NULL, '2022-03-23 02:35:12'),
(23, 'Our Partners', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4558908342406!2d90.39950601429943!3d23.873447589983005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43a5c932da5%3A0x2e6749cb973f3037!2zMTAg4Ka44Kec4KaVIOCmqOCmgiDgp6gsIOCmouCmvuCmleCmviAxMjMw!5e0!3m2!1sbn!2sbd!4v1616930430108!5m2!1sbn!2sbd', NULL, '2021-03-28 05:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `created_at`, `updated_at`, `place`, `logo`) VALUES
(1, NULL, '2021-09-25 06:36:02', 'Header', '20210925120902.Projuktir-Pathshala-Institute.png'),
(2, NULL, NULL, 'Footer', 'ferwf');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `profile_image`, `role`, `description`, `department`, `email`, `status`, `facebook`, `twitter`, `linkedin`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Omar Sani', '20220330070307.mr_sani.jpeg', 'Mentor', 'In this digital life. The demand of Digital Marketing is sky-high. Having skills on digital marketing can  bring many job opportunities. Our trainer Omar Sani has 10 years of experience in this field  and he has worked with many foreign client as well. He will deliver the same knowledge and passion to his students. So, they will be ready to enter in the Job Market.', 'DIGITAL MARKETING', 'msani398@gmail.com', 'active', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com', NULL, '2021-03-28 04:27:16', '2022-03-30 22:29:52'),
(11, 'Sharmin Akter', '20220417050432.4.jfif', 'Mentor', 'Graphics Design has always been centered for it\'s pick value. Our Mentor Sharmin Akter has always been really focused and derived for her students. With the success rate over 6 years in Freelancing field, she is one of a kind for a trainer.', 'GRAPHIC DESIGN', 'dmssharminakter@gmail.com', 'active', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', NULL, '2021-03-28 04:38:31', '2022-04-16 23:42:32'),
(12, 'Yasir Arafat', '20211103051107.WhatsApp Image 2021-09-19 at 4.43.41 PM.jpeg', 'Mentor', 'Website composition and Development has consistently been focused for its pick esteem. Our Mentor Yasir Arafat has consistently been truly engaged and determined for her understudies. With a triumph pace of more than 2 years in the Freelancing field, He is a stand-out for a coach.', 'WEB DEVELOPMENT', 'dmsarafat001@gmail.com', 'active', 'https://www.facebook.com/arafatyasir007', 'https://twitter.com/', 'https://www.linkedin.com/', NULL, '2021-11-02 23:35:07', '2021-11-02 23:35:07'),
(14, 'OMAR SANI', '20220331040347.3.jfif', 'Mentor', 'In this digital life. The demand of Digital Marketing is sky-high. Having skills on digital marketing can  bring many job opportunities. Our trainer Omar Sani has 10 years of experience in this field  and he has worked with many foreign client as well. He will deliver the same knowledge and passion to his students. So, they will be ready to enter in the Job Market.', 'DIGITAL MARKETING', 'dami@gmail.com', 'active', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com', NULL, '2022-03-30 22:32:47', '2022-03-30 22:32:47'),
(15, 'OMAR SANI', '20220331040316.2.jfif', 'Mentor', 'In this digital life. The demand of Digital Marketing is sky-high. Having skills on digital marketing can  bring many job opportunities. Our trainer Omar Sani has 10 years of experience in this field  and he has worked with many foreign client as well. He will deliver the same knowledge and passion to his students. So, they will be ready to enter in the Job Market.', 'DIGITAL MARKETING', 'dami2@gmail.com', 'active', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com', NULL, '2022-03-30 22:34:16', '2022-03-30 22:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta_keywords`
--

CREATE TABLE `meta_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_keywords`
--

INSERT INTO `meta_keywords` (`id`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'eCommerce,shop,online shop, bangladesh online shop, product, buy sale,', NULL, '2021-03-21 00:04:30');

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
(292, '2021_03_06_094606_create_seminars_table', 1),
(293, '2021_03_06_101412_create_workshops_table', 1),
(624, '2014_10_12_000000_create_users_table', 2),
(625, '2014_10_12_100000_create_password_resets_table', 2),
(626, '2019_08_19_000000_create_failed_jobs_table', 2),
(627, '2021_03_03_085924_create_welcomes_table', 2),
(628, '2021_03_03_092201_create_courses_table', 2),
(629, '2021_03_03_095144_create_future_leaders_table', 2),
(630, '2021_03_03_095720_create_videos_table', 2),
(631, '2021_03_03_100142_create_abouts_table', 2),
(632, '2021_03_03_102452_create_admissions_table', 2),
(633, '2021_03_03_124811_create_blogs_table', 2),
(634, '2021_03_03_130915_create_batches_table', 2),
(635, '2021_03_03_131621_create_contacts_table', 2),
(636, '2021_03_03_131835_create_contact_uses_table', 2),
(637, '2021_03_04_055924_create_mentors_table', 2),
(638, '2021_03_04_071247_create_departments_table', 2),
(639, '2021_03_06_060314_create_galleries_table', 2),
(640, '2021_03_06_060451_create_gallery_tops_table', 2),
(641, '2021_03_06_065055_create_sliders_table', 2),
(642, '2021_03_06_114101_create_social_activities_table', 2),
(643, '2021_03_07_053329_create_social_covers_table', 2),
(644, '2021_03_07_114125_create_events_table', 2),
(645, '2021_03_07_114310_create_registrations_table', 2),
(646, '2021_03_08_071703_create_student_feedbacks_table', 2),
(647, '2021_03_08_102545_create_success_students_table', 2),
(648, '2021_03_08_120438_create_course_modules_table', 2),
(649, '2021_03_08_124253_create_requirments_table', 2),
(650, '2021_03_09_084036_create_facilities_table', 2),
(651, '2021_03_09_095656_create_why_uses_table', 2),
(652, '2021_03_10_050206_create_counts_table', 2),
(653, '2021_03_13_045133_create_welcome_slides_table', 3),
(654, '2021_03_13_060408_create_consults_table', 4),
(655, '2021_03_13_073407_create_titles_table', 5),
(656, '2021_03_13_100833_create_logos_table', 6),
(657, '2021_03_13_101753_create_our_sister_concerns_table', 7),
(658, '2021_03_13_102111_create_social_links_table', 7),
(659, '2021_03_13_124431_create_footers_table', 8),
(660, '2021_03_13_124459_create_copyrights_table', 8),
(661, '2021_03_14_102631_create_locations_table', 9),
(662, '2021_03_15_053954_create_menus_table', 10),
(663, '2021_03_15_054209_create_submenus_table', 10),
(664, '2021_03_16_061026_create_design1s_table', 11),
(665, '2021_03_16_061133_create_design2s_table', 11),
(666, '2021_03_18_102241_create_headings_table', 12),
(668, '2021_03_20_124303_create_meta_keywords_table', 14),
(669, '2021_03_21_060851_create_analytics_table', 15),
(671, '2021_03_23_102148_create_whies_table', 17),
(672, '2021_04_13_085355_create_coupons_table', 18),
(673, '2021_06_03_062644_create_count2s_table', 18),
(674, '2022_03_22_104506_create_career_counselings_table', 18),
(675, '2022_04_06_051846_add-slug-to-blog-table', 19),
(676, '2022_04_06_091503_add-avater-to-user-table', 20),
(678, '2021_03_22_042645_create_comments_table', 21),
(679, '2022_04_09_041451_add-slug-to-batch-table', 22),
(680, '2022_04_09_041838_add-slug-to-course-table', 22),
(681, '2022_04_09_051158_add-slug-to-social_activity-table', 23),
(682, '2022_04_09_064032_add-slug-to-events-table', 24),
(683, '2022_04_09_081620_create_partners_table', 25),
(684, '2022_04_13_092545_add-discription-keyword-to-title-table', 26),
(688, '2021_03_20_113003_create_othothas_table', 27),
(690, '2022_04_17_032330_create_reviews_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `othothas`
--

CREATE TABLE `othothas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prothom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ditio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tritio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `othothas`
--

INSERT INTO `othothas` (`id`, `prothom`, `ditio`, `tritio`, `created_at`, `updated_at`) VALUES
(1, 'Upwork Platform', 'Graphic Designer Job', 'Design Action Job', NULL, '2022-04-16 00:57:37'),
(2, 'Projuktir Pathshala Institute is a professional outsourcing training and freelancing and IT training company in Bangladesh with a good reputation, and open skill-set. We are a professional IT Training Company in Bangladesh. We providing a range of affordable freelancing', 'training to our student. Our goal is the success of our student and client and builds stable communication and marketing strategy.', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_sister_concerns`
--

CREATE TABLE `our_sister_concerns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_sister_concerns`
--

INSERT INTO `our_sister_concerns` (`id`, `name`, `logo`, `link`, `created_at`, `updated_at`) VALUES
(4, 'DMS BD', '20210925060927.dmsbd.png', 'https://dmsbdgroup.com/', '2021-03-13 05:32:58', '2021-09-25 00:45:27'),
(5, 'Digital Marketing Solution', '20210925070953.dms.png', 'https://www.digitalmarketingbd.com/', '2021-03-13 05:40:22', '2021-09-25 01:07:53'),
(7, 'Jamidari', '20210925060959.dms agency.png', 'http://www.jamidari.com/', '2021-03-28 03:24:30', '2021-09-25 00:50:59'),
(8, 'LLC', '20220414050456.LLC.png', 'https://www.digitalmarketingagencyllc.com/', '2021-03-28 03:25:08', '2022-04-13 23:07:56'),
(9, 'Lead Generation', '20210925060924.lead.png', 'https://leadgenerationbd.com/', '2021-03-28 03:25:36', '2021-09-25 00:55:24'),
(10, 'DMS Express', '20210925070948.dms express.png', 'http://dmsxpress.com/', '2021-03-28 03:26:06', '2021-09-25 01:09:48'),
(11, 'Graphics Fair', '20210925070934.graphics fair.png', 'http://www.graphicfair.com/', '2021-03-28 03:27:14', '2022-03-17 06:55:12'),
(12, 'Online Bangla News BD', '20210925070943.bangla news.png', 'https://www.onlinebanglanewsbd.com/', '2021-03-28 03:27:46', '2021-09-25 01:48:43'),
(15, 'Clipping Path', '467918064.png', 'https://www.clippingpathperfectionist.com/', '2022-03-17 10:27:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Golam Rabbi', '20220409090419.partner.png', '2022-04-09 03:11:19', '2022-04-09 03:11:19'),
(7, 'Demo', '20220417060430.partner.png', '2022-04-17 00:07:30', '2022-04-17 00:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tarek@gmail.com', '$2y$10$YiBSbJt7wDF5vZ0NYCr90ulcThCMU48XeCkXKVEu4MdQ8S10yZsPi', '2021-03-11 04:29:22'),
('dmstarekaziz@gmail.com', '$2y$10$YNPAQiFrqGGUBGmdrnOG9uZxi/IEM6JSDXePLPTp0WkHAzQZ621UG', '2021-03-21 03:13:12'),
('dmsproshanta@gmail.com', '$2y$10$o420wPJPe8b9u5pB9QlU0.YnMX0N.91CCjqFHDxBrbMqMypo4hD1W', '2021-03-22 22:56:19'),
('proshantavai@gmail.com', '$2y$10$D4vApvmAeSlgSgwZGZErouQERNFTHADlmnEdzPgBgISONzjfdFvEG', '2021-03-25 04:40:17'),
('proshanta@gmail.com', '$2y$10$0XyXfSsl32ZobZ7Gyg99u.MLJ2iiAKKR95EBkPQEM35ENltRoWYAO', '2021-04-12 06:02:53'),
('dmsgolamrabbi@gmail.com', '$2y$10$lF0vftK5XJjXHOLHIYmva.m5cJLe4FRG0ogYaaS84YdbXjbGqwj96', '2022-03-14 05:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `phone`, `event_title`, `event_category`, `created_at`, `updated_at`) VALUES
(1, 'Md. Tarek Aziz', 'tarek@gmail.com', '0154211', 'Web Seminar', '1', '2021-03-10 06:52:23', '2021-03-10 06:52:23'),
(2, 'tarek', 'tarek@gmail.com', '01521470048', 'Anda', '2', '2021-03-10 07:11:16', '2021-03-10 07:11:16'),
(3, 'tarek', 'tarek@gmail.com', '01521470048', 'Anda', '2', '2021-03-11 00:57:34', '2021-03-11 00:57:34'),
(4, 'Proshanta Vai', 'dmstarekaziz1@gmail.com', '01521470048', 'Anda', '2', '2021-03-11 00:58:10', '2021-03-11 00:58:10'),
(5, 'Golam Rabbi', 'dmsgolamrabbi@gmail.com', '01758152475', 'Seminar', '4', '2022-04-12 02:24:00', '2022-04-12 02:24:00'),
(6, 'Golam Rabbi', 'workshop@gmail.com', '01758152475', 'Workshop', '5', '2022-04-12 02:43:56', '2022-04-12 02:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `requirments`
--

CREATE TABLE `requirments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `requirment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirments`
--

INSERT INTO `requirments` (`id`, `created_at`, `updated_at`, `course_id`, `requirment`) VALUES
(1, '2021-03-28 03:48:28', '2021-03-28 03:48:28', 13, 'Basic knowledge of computer operating.'),
(3, '2021-03-28 03:49:02', '2021-03-28 03:49:02', 13, 'Basic knowledge of internet browsing (email/google/facebook).'),
(4, '2021-03-28 03:49:14', '2021-03-28 03:49:14', 13, 'Basic knowledge of English (Reading/Writing/Speaking).');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_h` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_r` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_h` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_r` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `google_h`, `google_r`, `facebook_h`, `facebook_r`, `created_at`, `updated_at`) VALUES
(1, 'https://cdn.trustindex.io/loader.js?c180489666ea5867265b5bfda6', 'https://cdn.trustindex.io/loader.js?3af9a2d66dd55944be5bdcc96b', 'https://cdn.trustindex.io/loader.js?79e089e6607b59159a51414962', 'https://cdn.trustindex.io/loader.js?1fd15926623d59285751e8c7dd', NULL, '2022-04-16 23:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, '20210919120957.1.png', '2021-09-19 06:04:57', '2021-09-19 06:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `social_activities`
--

CREATE TABLE `social_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_view` bigint(20) NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_activities`
--

INSERT INTO `social_activities` (`id`, `title`, `slug`, `t_view`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tree planting', 'tree-planting', 0, 'Trees greatly benefit the people living around them by having a positive impact on mental health and wellbeing, reducing stress and encouraging outdoor exercise. This is in addition to the benefits they will receive from an improved environmental quality and improved amenity which comes with planted areas.environmental quality and improved amenity which comes with planted areas. Reduce Energy Costs: Trees have been called the “low tech” solution to energy conservation. ... Clean the Air: Trees produce oxygen that we breathe. In addition, trees remove air pollution by lowering air temperature, by releasing water into the atmosphere, and by retaining particulates. by releasing water into the atmosphere, and by retaining particulates. Trees make the home for birds and other animals and insects, helping to keep up the ecosystem rolling. Trees make forests and that in turn help the earth in many ways like giving home to animals and bringing rains and prevents desertification.', '20220417060407.tree_plantationon.jpg', '2021-03-10 06:41:12', '2022-04-17 00:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `social_covers`
--

CREATE TABLE `social_covers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_covers`
--

INSERT INTO `social_covers` (`id`, `created_at`, `updated_at`, `image`) VALUES
(1, NULL, '2022-04-17 00:00:04', '20220417060404.social activity.jpg'),
(2, NULL, '2021-11-02 05:49:46', '20211102111146.istockphoto-1254087054-170667a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `class`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', 'https://www.facebook.com/projuktirpathshalabd/', '2021-11-03 04:18:36', '2021-11-03 04:18:36'),
(2, 'fab fa-twitter', 'https://twitter.com/projuktirbd', '2021-03-14 00:24:48', '2021-03-28 02:48:32'),
(3, 'fab fa-linkedin-in', 'https://www.linkedin.com/company/projuktir-pathshala-institute/', '2021-03-14 00:24:57', '2021-03-28 02:49:54'),
(4, 'fab fa-pinterest-p', 'https://www.pinterest.com/projuktirpathshala/', '2021-03-14 00:25:18', '2021-03-28 02:48:58'),
(5, 'fab fa-youtube-square', 'https://www.youtube.com/channel/UCItVCH1dnqO7SIJwGS3NqWA', '2021-03-14 00:25:26', '2021-03-28 02:49:14'),
(7, 'fab fa-instagram', 'https://www.instagram.com/projuktirpathshala/', '2021-03-14 00:25:43', '2021-03-28 02:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedbacks`
--

CREATE TABLE `student_feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `departmeent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(100) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_feedbacks`
--

INSERT INTO `student_feedbacks` (`id`, `created_at`, `updated_at`, `name`, `departmeent`, `description`, `priority`, `image`) VALUES
(2, '2021-03-11 01:15:12', '2021-11-02 05:47:15', 'Proshanta Vai', 'GRAPHIC DESIGN', 'Best Graphic Designer', 2, '20211102111115.img_avatar3.png'),
(3, '2021-03-20 05:47:24', '2021-11-02 05:46:34', 'Sanjida Akter', 'WEB DEVELOPER', 'Professional Web Developer', 3, '20211102111133.164-1642558_shamim-amiri-blank-female-avatar-icon-clipart.png');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `sub_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `success_students`
--

CREATE TABLE `success_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_students`
--

INSERT INTO `success_students` (`id`, `created_at`, `updated_at`, `name`, `image`, `description`, `priority`) VALUES
(1, '2021-03-10 06:15:26', '2021-09-19 04:09:10', 'Anamika Adity', '20210919100910.student.png', 'Anamika Adity is serving as a Manager Of Projuktir Pathshala Institute and She has Been Working as a Successful Freelancer and Mentor For 5 Years.She has great experience in Visual Graphic Design and Motion Graphics. She is Passionate, Creative & Dreamer. She is a women who Believes in Perfection.', 2),
(2, '2021-03-11 01:19:14', '2022-04-16 23:27:56', 'Nawsuba Zarith', '20220417050456.anamica.png', 'Choosing Projuktir Pathsala Institution for my Graphics Designing development is the best decision of my life. I\'ve enriched myself with skills and now I\'m earning 7 figure a month. Allhamdulillah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_mark` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `page_name`, `p_mark`, `text`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'Best Outsourcing Training Center in BD | Freelancing Training Center.', 'Keywords Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'We are best outsourcing training center in BD & freelancing training center provide online IT training for Bangladeshi Users.', NULL, '2022-04-16 21:17:04'),
(2, 'About Us', 'About', 'Freelancing Training Center in Uttara | Best Online IT Training Institute in Dhaka', 'Freelancing Training Center in Uttara | Best Online IT Training Institute in Dhaka', 'We are best outsourcing training center in BD & freelancing training center provide online IT training for Bangladeshi Users.', NULL, '2022-04-16 21:17:50'),
(3, 'Courses', 'Course', 'Courses', NULL, NULL, NULL, NULL),
(4, 'Admission', 'Admission', 'Admission', NULL, NULL, NULL, NULL),
(5, 'Mentors', 'Mentor ', 'Mentors', NULL, NULL, NULL, '2021-03-15 04:13:35'),
(6, 'Blog', 'Blog', 'Blog', NULL, NULL, NULL, NULL),
(7, 'Contact', 'Contact', 'Contact', NULL, NULL, NULL, NULL),
(8, 'Gallery', 'Gallery', 'Gallery', 'Test Gallery', 'Test Gallery', NULL, '2022-04-13 22:50:46'),
(9, 'Seminar', 'Seminar', 'Seminar', NULL, NULL, NULL, NULL),
(10, 'Social Activity', 'Social Activity', 'Social Activity', NULL, NULL, NULL, NULL),
(12, 'Course Details', 'Course Details', 'Course Details', NULL, NULL, NULL, NULL),
(13, 'Blog Details', 'Blog Details', 'Blog Details', NULL, NULL, NULL, NULL),
(14, 'Social Activity Details', 'Social Activity Details', 'Social Activity Details', NULL, NULL, NULL, '2021-03-13 04:22:35'),
(15, 'All Course', 'All Course', 'All Course', NULL, NULL, NULL, NULL),
(16, 'All Blog', 'All Blog', 'All Blog', NULL, NULL, NULL, NULL),
(17, 'Log In', 'Log In', 'Log In', NULL, NULL, NULL, NULL),
(18, 'Registration', 'Registration', 'Registration', NULL, NULL, NULL, NULL),
(19, 'Reset Password', 'Reset Password', 'Reset Password', NULL, NULL, NULL, NULL),
(21, 'Reviews', 'Review', 'Reviews', NULL, NULL, NULL, '2022-04-14 02:08:34'),
(22, 'Partner', 'Partner', 'Partner', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avater` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile_image`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`, `avater`) VALUES
(1, 'Omar Sani', '20210719030746.PPI Logo.png', 'msani398@gmail.com', NULL, '$2y$10$ftPlDtW0RL6WpQ4vVt7aZOB5p1tcJv.F3q5weBD0VfQd93YVkEGSu', 'super admin', 'active', '7NVLcO8GZmkG8v1SLqNtX5ePm09mpPNdMQ6tQQ6l2dI5ultOPmr69BTUu8lc', '2021-03-10 02:30:44', '2021-07-18 21:46:04', NULL),
(14, 'Mukta', NULL, 'mukta@gmail.com', NULL, '$2y$10$JUYuKgB29.lTrlfZ/Bfsq.rh/SZFv3t2VqiiZWEINDdKUxCfpSr62', 'student', 'staudent', NULL, '2021-04-06 04:02:00', '2021-04-08 01:00:08', NULL),
(15, 'Proshanta Vai', NULL, 'proshanta@gmail.com', NULL, '$2y$10$IkKP8gEmVwnHal93lNxD5uP/IgRAkt/Sk0EU4KliCjsVpTf/h2h9m', 'student', 'staudent', NULL, '2021-04-06 04:02:37', '2021-04-06 05:05:09', NULL),
(16, 'Md. Tarek Aziz', NULL, 'dmstarekaziz@gmail.com', NULL, '$2y$10$sn5aB.ZhOD1hJgdnJ.hXh.LpEEPngzHON5zk3JGCVcqxfJx5CQOzy', 'student', 'staudent', NULL, '2021-04-07 22:34:55', '2021-04-07 22:34:55', NULL),
(17, 'Marketing', NULL, 'bdworkers24@gmail.com', NULL, '$2y$10$wqk4Y/Zq89zmU4eL485vCuv3s5vZl5EHK0NSAmENYafpleP7gvqZC', 'student', 'staudent', NULL, '2021-04-07 22:35:24', '2021-04-07 22:35:24', NULL),
(18, 'Web Development', NULL, 'deddw@hghjg.com', NULL, '$2y$10$HM6KqPcHLDjJRocFxRlRi.7Q5oxipXrPyITtA5xWxCbEEyuyAQdaa', 'student', 'staudent', NULL, '2021-04-08 00:20:40', '2021-04-08 00:20:40', NULL),
(19, 'Web Development', NULL, 'proshantavai4444@gmail.com', NULL, '$2y$10$ffG.6lDz1Msi7kKaV0MS..P.10zYSNrHzrF5QsTSPiiu2grZRtc9m', 'student', 'staudent', NULL, '2021-04-12 06:16:07', '2021-04-12 06:16:07', NULL),
(20, 'Web Development', NULL, 'tar444ek@gmail.com', NULL, '$2y$10$gMhxwf9xyyrivTu8WrHHmeyExN/MhJZhzvg8krxa436t5wa5yg9SO', 'student', 'staudent', NULL, '2021-04-12 23:42:24', '2021-04-12 23:42:24', NULL),
(21, 'Web Development', NULL, 'tareewe2k@gmail.com', NULL, '$2y$10$W7fm6u5ti0CY.Cb5rq1CAOXtqg0zvOtrrOuptf2c4pyzeQ5.NusC6', 'student', 'staudent', NULL, '2021-04-12 23:43:06', '2021-04-12 23:43:06', NULL),
(22, 'Marketing', NULL, 'bdworkerdsawdawds24@gmail.com', NULL, '$2y$10$WWahu2oN4G8rwPinPbSXlOp/W9HwQWyCsf/FIFQpx.b.jQ8I0AJB2', 'student', 'staudent', NULL, '2021-04-12 23:49:32', '2021-04-12 23:49:32', NULL),
(23, 'rerw', NULL, 'dmstardfdxfsekaziz@gmail.com', NULL, '$2y$10$4UBAMHCPSWEf39ml1D1k..DsEuOfccT2Zhu2RhJOQt8aOe.OoMmei', 'student', 'staudent', NULL, '2021-04-12 23:55:42', '2021-04-12 23:55:42', NULL),
(24, 'rerw', NULL, 'dmstareka435rziz@gmail.com', NULL, '$2y$10$svP/b9q7wf0dE9hxuRpGXeFnn8fvVRZILPhFMxgOatabxv1XiighC', 'student', 'staudent', NULL, '2021-04-12 23:56:43', '2021-04-12 23:56:43', NULL),
(25, 'Graphic Design', NULL, 'reeterthw@hghjg.com', NULL, '$2y$10$cu6skOzhZVoAmeekmbQvgOEseTt/b6rKTLO.norUsfJPgB8.0.UdG', 'student', 'staudent', NULL, '2021-04-12 23:57:38', '2021-04-12 23:57:38', NULL),
(26, 'rerw', NULL, 'rewhghjggjh@hghjg.com', NULL, '$2y$10$NlItumZnJdvj.vjUsEPocuNEwtbu3n1q4madwg/b6NEu76P/JhlkG', 'student', 'staudent', NULL, '2021-04-13 00:03:01', '2021-04-13 00:03:01', NULL),
(27, 'rerw', NULL, 'rewhgqerwrwhjggjh@hghjg.com', NULL, '$2y$10$Lwj8I/GvvVjLhkI/H4zVh.RhtccXn.lh1bC7oU39pe4XT85He9gci', 'student', 'staudent', NULL, '2021-04-13 00:07:26', '2021-04-13 00:07:26', NULL),
(28, 'Web Development', NULL, 'tarewqerwrk@gmail.com', NULL, '$2y$10$ZMZ6Ulwcl56FaY563HIWc.9bAWJXvSW19OMUYBJD0waaxgH75oIwi', 'student', 'staudent', NULL, '2021-04-13 00:21:31', '2021-04-13 00:21:31', NULL),
(29, 'tarek', NULL, 'rewrwrtetet@hghjg.com', NULL, '$2y$10$Vos3K3cJkJq5wlaZjkRGHu/SOUo1M7iQQr4eW4mMHByDB9ts94946', 'student', 'staudent', NULL, '2021-04-13 00:33:20', '2021-04-13 00:33:20', NULL),
(30, 'Marketing', NULL, 'bdworkerr6443343s24@gmail.com', NULL, '$2y$10$Wx3Z7.38P4Ua7c1OtdIr0uHSLIG6mRMXOao1LAOG7qI1rpj3Xm9E2', 'student', 'staudent', NULL, '2021-04-13 00:35:20', '2021-04-13 00:35:20', NULL),
(31, 'Marketing', NULL, 'bdworewkedfsfrs24@gmail.com', NULL, '$2y$10$hFwtkQNkAYRTcvDG/AgMM.e5uqjD7sg2CX.jQErfNvYhGc2XjL7Se', 'student', 'staudent', NULL, '2021-04-13 00:41:12', '2021-04-13 00:41:12', NULL),
(32, 'Marketing', NULL, 'bdworewkedfsfdsrs24@gmail.com', NULL, '$2y$10$Fk7DbRYkAVlHyc8LerpaXOr5zGHE0xb1.wJWzAG3nw775K4GEZ2rq', 'student', 'staudent', NULL, '2021-04-13 00:42:50', '2021-04-13 00:42:50', NULL),
(33, 'Marketing', NULL, 'bdworkerr6443fgrd343s24@gmail.com', NULL, '$2y$10$/.fPGyZ8Nmv4EEUhCV4BoubaiK1LqmQkdvIzhMvfxI07VXjUzF3zi', 'student', 'staudent', NULL, '2021-04-13 00:43:22', '2021-04-13 00:43:22', NULL),
(34, 'Marketing', NULL, 'bdworkerr6443fgrd3dsa43s24@gmail.com', NULL, '$2y$10$yjH/osTI0BPUK62nbhbB2eLb.nycaC6JQhRWWbpzJ..FEtWz7bVN2', 'student', 'staudent', NULL, '2021-04-13 00:44:10', '2021-04-13 00:44:10', NULL),
(35, 'Marketing', NULL, 'bdworkerr6rfdg443fgrd3dsa43s24@gmail.com', NULL, '$2y$10$oH2mBFU.PZIrkVEp2zDTqeAtYzX8GHhKyrrq6O1tyX9LEl8BllT6y', 'student', 'staudent', NULL, '2021-04-13 00:46:09', '2021-04-13 00:46:09', NULL),
(36, 'Ahsan Habib Nobel', NULL, 'dmsahsan2021@gmail.com', NULL, '$2y$10$Jv8SSe69IVUHM906lCcGx.v0HIpgFS4H2kvAuH8mPbcSVg4ILkevu', 'student', 'staudent', NULL, '2021-09-25 06:03:18', '2021-09-25 06:03:18', NULL),
(37, 'New Student', NULL, 'student@gmail.com', NULL, '$2y$10$Cd1HzKezKcoW2bJ8pS0IpeyPihCYW8RbP.gKa8j5MHgDZzfEwXKPC', 'student', 'staudent', NULL, '2021-11-02 23:44:42', '2021-11-02 23:44:42', NULL),
(38, 'Omar Sani', NULL, 'omsrsani4152@gmail.com', NULL, '$2y$10$LAVYshwNpcPK8627zPplYuoEbpwoaTh1TT5YENXhAqE0arCtLvkzq', 'student', 'staudent', NULL, '2021-11-03 00:07:44', '2021-11-03 00:07:44', NULL),
(39, 'New Page', NULL, 'admin@gmail.com', NULL, '$2y$10$kIzZ5l48SGFuHSt8cneBTeLgNNtYqqi9oBaCz24VKdWLFlAR6wLjm', 'student', 'staudent', NULL, '2021-11-03 00:22:16', '2021-11-03 00:22:16', NULL),
(40, 'New Page', NULL, 'dmsarafat001@gmail.com', NULL, '$2y$10$TwOHHaMVrXxz6PI507nMjOVy2GqgWeFecYzMGbVs2rLx3HwmP/NHy', 'student', 'staudent', NULL, '2021-11-03 00:22:52', '2021-11-03 00:22:52', NULL),
(41, 'Sukanti Kumar', NULL, 'sukanti@gmail.com', NULL, '$2y$10$A2B.OEbcz2Ldc6dK3XUNK.E52JwxSFDccgQr/tTFUVuZPHoRF48fG', 'student', 'staudent', NULL, '2021-12-02 05:13:02', '2021-12-02 05:13:02', NULL),
(42, 'lkjhfd\\hjk', NULL, 'info@gmail.com', NULL, '$2y$10$CTVyG1CLD7Zz/mkGNxBnSemBprbETCrScDlYrhjWWfyTebmX7ffwa', 'student', 'staudent', NULL, '2021-12-22 05:13:41', '2021-12-22 05:13:41', NULL),
(43, 'projuktirpathshalabd.com bbbdnwkdowifhrdokpwoeiyutrieowsowddfbvksodkasofjgiekwskfieghrhjkfejfegigofwkdkbhbgiejfwokdd', NULL, 'dimafokin199506780tx+1182@inbox.ru', NULL, '$2y$10$SoqpBbGAf01TiKZnjVJ4w.EfXrKHjxTxZ1StLt8icJDoKqej/gnYG', 'student', 'staudent', NULL, '2022-02-05 09:59:58', '2022-02-05 09:59:58', NULL),
(44, 'safutelenotro https://www.apple.com k.', NULL, 'edwardgeorgebr@gmail.com', NULL, '$2y$10$mglMEdrVX5UXFdWSujHOeu761bUU3isKA8KITlOOHD8z/Pq6uSDkq', 'student', 'staudent', NULL, '2022-02-05 18:08:21', '2022-02-05 18:08:21', NULL),
(45, 'Admin', 'null', 'admin@admin.com', NULL, '$2y$10$ymmS0Yq.izPbljj91Gk.juOmkIgovDI0uMRXo8RDbDRt3PLaSzcbK', 'admin', 'active', NULL, '2022-02-10 03:00:35', '2022-04-12 04:28:33', NULL),
(46, 'projuktirpathshalabd.com bbbdnwkdowifhrdokpwoeiyutrieowsowddfbvksodkasofjgiekwskfieghrhjkfejfegigofwkdkbhbgiejfwokdd', NULL, 'dimafokin199506780tx+a281@inbox.ru', NULL, '$2y$10$yTUk1XRkCCPcb06gTTNddu7YOhGKgfPROjWI7uKSwouVB40ERtQXO', 'student', 'staudent', NULL, '2022-02-11 18:49:13', '2022-02-11 18:49:13', NULL),
(47, 'h4twshr34aghreha34aweyhrra34wegaf3wrehartaeha https://forms.yandex.by/u/saa9cfa5af0e5b95672533 Or', NULL, 'kopylovahillii7046@bk.ru', NULL, '$2y$10$mxBPSHvaq9zh4Ek9ENtmwel3EzkLpcfsT0TGmoLzQC9dY7khoHzx2', 'student', 'staudent', NULL, '2022-02-21 19:53:34', '2022-02-21 19:53:34', NULL),
(48, 'Rabbi', '20210719030746.PPI Logo.png', 'dmsgolamrabbi@gmail.com', NULL, '$2y$10$ymmS0Yq.izPbljj91Gk.juOmkIgovDI0uMRXo8RDbDRt3PLaSzcbK', 'super admin', 'active', NULL, '2022-03-13 04:50:44', '2022-03-13 04:50:44', NULL),
(55, 'Golam Rabbi', NULL, 'dmsgolamrabbi11@gmail.com', NULL, '$2y$10$La/WJLP2.d2bTIgy39ixneLMPmVUrIP3Mj/DhIPNEyH1.ezpII82y', 'student', 'staudent', NULL, '2022-03-28 06:41:19', '2022-03-28 06:41:19', NULL),
(56, 'test', NULL, 'rabbicse11@gmail.com', NULL, '$2y$10$XASPmvpq7lF4NWolMe3EzO4iyV8j3Alqu5zk93XQbS/Qi0MnzMppe', 'student', 'staudent', NULL, '2022-03-28 06:42:41', '2022-03-28 06:42:41', NULL),
(57, 'test', NULL, 'rabbicse111110@gmail.com', NULL, '$2y$10$yY5Y4lucBmRPPya8MKjgluADuDrU/AyPeZediYd0iCGPyW661mGHq', 'student', 'staudent', NULL, '2022-03-28 07:00:26', '2022-03-28 07:00:26', NULL),
(58, 'Golam Rabbi', NULL, 'dmsgolamrabbi111@gmail.com', NULL, '$2y$10$nthDgFyIZ5Z20RHIrn1Sje4CA4FfDmq/D81Ktloq9haauVqaAPZBi', 'student', 'staudent', NULL, '2022-03-29 03:30:42', '2022-03-29 03:30:42', NULL),
(59, 'Golam Rabbi', NULL, 'dmsgolamrabbi11111@gmail.com', NULL, '$2y$10$h7T.B7jXcu.KRSn/vIcUH.X2o4uCr5WIO6DmXPxij8u2aCp6LmvJ.', 'student', 'staudent', NULL, '2022-03-29 03:31:30', '2022-03-29 03:31:30', NULL),
(60, 'Golam Rabbi', NULL, 'dmsgolamrabbi111121@gmail.com', NULL, '$2y$10$uXy9J3jZhngKRqbVYtID.ej84P0DuGwMPPZKnTb5s5BQaWUXktCoi', 'student', 'staudent', NULL, '2022-03-29 03:31:43', '2022-03-29 03:31:43', NULL),
(61, 'Golam Rabbi', NULL, 'damwi@gmail.com', NULL, '$2y$10$exdteQtUtSAeJUqHfWx6ruRTInlsJXlLklQqtBNQbrxEKDWkxsMK6', 'student', 'staudent', NULL, '2022-04-05 03:04:05', '2022-04-05 03:04:05', NULL),
(72, 'Graphics', NULL, 'graphics@gmail.com', NULL, '$2y$10$DSCJoM1QBI0.jiwzochiE.R/R3YDnLJPZp5A9Q5ZZ2Reb9/TD5sH2', 'student', 'staudent', NULL, '2022-04-09 23:04:05', '2022-04-09 23:04:05', NULL),
(73, 'search', NULL, 'search@gmail.com', NULL, '$2y$10$3gK1FTKtSnnamPbTLnOAauU261spjHO5Mx4Q3yxkzN8HTV0eAC5he', 'student', 'staudent', NULL, '2022-04-10 02:35:16', '2022-04-10 02:35:16', NULL),
(75, 'Golam Rabbi', NULL, 'dmsgolamrabbi75@gmail.com', NULL, '$2y$10$JIMLD6C0PmWM4HLFOBAPQ.y5Az.B1c6FzkkSAkaPXc.EOMBzOJGgm', 'student', 'staudent', NULL, '2022-04-10 02:48:16', '2022-04-10 02:48:16', NULL),
(76, 'Golam Rabbi', '20220411070455.rabbi.jfif', 'rabbicse10@gmail.com', NULL, '$2y$10$hYbrVivrwtd8P61BvJybJ.sFfbPvhCJKgfq1MCt3s8jc1VLI3B.0O', 'admin', 'active', NULL, '2022-04-11 01:31:55', '2022-04-11 03:08:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `heading`, `created_at`, `updated_at`, `url`, `description`) VALUES
(1, 'PROJUKTIR PATHSHALA', '2021-03-10 02:29:24', '2022-03-22 22:40:45', 'https://www.youtube.com/embed/OEpWU678VLs', 'Projuktir Pathshala Institute is a professional outsourcing, freelancing and IT training company in Bangladesh with a good reputation, and open skill-set. We are a professional IT Training Company in Bangladesh. We providing a range of affordable freelancing training to our student. Our goal is the success of our student, client and builds stable communication and marketing strategy.'),
(2, 'OUR MENTORS', '2021-03-10 02:29:24', '2021-03-20 03:31:34', 'https://www.youtube.com/embed/khDn_kFXBec', 'GRAPHIC DESIGNER');

-- --------------------------------------------------------

--
-- Table structure for table `welcomes`
--

CREATE TABLE `welcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomes`
--

INSERT INTO `welcomes` (`id`, `created_at`, `updated_at`, `title`, `image`, `description`) VALUES
(1, '2021-03-10 02:29:24', '2022-04-16 23:18:40', 'PROJUKTIR PATHSHALA INSTITUTE', '20220417050440.20210908110948.about_us.jpg', 'In the emerging world and living in the 20th Century, where everything is becoming digital. There’s  no escape from IT. To make yourself widely available for Job market, one needs to have proper knowledge about all IT sectors along with their marketing. Projuktir Patshala” aim to develop the hidden quality from their students. We offer cost friendly courses for your development. Here you’ve the opportunity to learn and even take part in the internship program as well. The shining period of your income life is about to start if you become a part of Projuktir Patshala.');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_slides`
--

CREATE TABLE `welcome_slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_slides`
--

INSERT INTO `welcome_slides` (`id`, `image`, `created_at`, `updated_at`) VALUES
(9, '20210919120901.1.png', '2021-09-19 06:08:01', '2021-09-19 06:08:01'),
(10, '20210919120910.2.png', '2021-09-19 06:08:10', '2021-09-19 06:08:10'),
(11, '20210919120917.3.png', '2021-09-19 06:08:17', '2021-09-19 06:08:17'),
(12, '20210919120932.4.png', '2021-09-19 06:08:32', '2021-09-19 06:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `whies`
--

CREATE TABLE `whies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `1st` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `2nd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_uses`
--

CREATE TABLE `why_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_uses`
--

INSERT INTO `why_uses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Quality', 'With our experienced and inspiring tutors. you’ll receive more individual attention This exceptional tutorial support', '2021-03-10 02:29:24', '2021-03-11 00:18:40'),
(2, 'Studying Locally', 'It so much easier to reach your potential and timetables structured you can fit study around your job and existing.', '2021-03-10 02:29:24', '2021-03-10 02:29:24'),
(3, 'Learning Center', 'Well-furnished classrooms and a fully equipped computer/study room.Our fees are considerably lower than others', '2021-03-10 02:29:24', '2021-03-10 02:29:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_counselings`
--
ALTER TABLE `career_counselings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consults`
--
ALTER TABLE `consults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count2s`
--
ALTER TABLE `count2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_modules`
--
ALTER TABLE `course_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `future_leaders`
--
ALTER TABLE `future_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_tops`
--
ALTER TABLE `gallery_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mentors_email_unique` (`email`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_keywords`
--
ALTER TABLE `meta_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `othothas`
--
ALTER TABLE `othothas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_sister_concerns`
--
ALTER TABLE `our_sister_concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirments`
--
ALTER TABLE `requirments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_activities`
--
ALTER TABLE `social_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_covers`
--
ALTER TABLE `social_covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_feedbacks`
--
ALTER TABLE `student_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_students`
--
ALTER TABLE `success_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_slides`
--
ALTER TABLE `welcome_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whies`
--
ALTER TABLE `whies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_uses`
--
ALTER TABLE `why_uses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `career_counselings`
--
ALTER TABLE `career_counselings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `consults`
--
ALTER TABLE `consults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `count2s`
--
ALTER TABLE `count2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counts`
--
ALTER TABLE `counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `course_modules`
--
ALTER TABLE `course_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `future_leaders`
--
ALTER TABLE `future_leaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `gallery_tops`
--
ALTER TABLE `gallery_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `meta_keywords`
--
ALTER TABLE `meta_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=691;

--
-- AUTO_INCREMENT for table `othothas`
--
ALTER TABLE `othothas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_sister_concerns`
--
ALTER TABLE `our_sister_concerns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requirments`
--
ALTER TABLE `requirments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_activities`
--
ALTER TABLE `social_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_covers`
--
ALTER TABLE `social_covers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_feedbacks`
--
ALTER TABLE `student_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `success_students`
--
ALTER TABLE `success_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcomes`
--
ALTER TABLE `welcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcome_slides`
--
ALTER TABLE `welcome_slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `whies`
--
ALTER TABLE `whies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_uses`
--
ALTER TABLE `why_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

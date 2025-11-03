-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2025 at 11:02 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licom`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `Account_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Level_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` text NOT NULL,
  `Email_verified` int(11) NOT NULL DEFAULT '0',
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Account_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_Id`, `Level_Id`, `User_Id`, `Username`, `Password`, `Email_verified`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 3, 5, 'C20255e', 'student123', 1, '2025-05-17', '09:58:35', 1),
(2, 2, 4, 'registrar1', 'admin123', 0, '2025-05-22', '20:56:25', 1),
(3, 4, 6, 'B20256', 'admin123', 0, '2025-05-25', '02:29:30', 1),
(4, 3, 7, 'C20257', 'student123', 0, '2025-06-07', '09:44:15', 1),
(5, 3, 8, 'C20258', 'student123', 0, '2025-06-07', '09:44:15', 1),
(6, 3, 9, 'C20259', 'student123', 0, '2025-06-07', '09:44:15', 1),
(7, 3, 10, 'C202510', 'student123', 0, '2025-06-07', '09:44:15', 1),
(8, 3, 11, 'C202511', 'student123', 0, '2025-06-07', '09:44:15', 1),
(9, 3, 12, 'C202512', 'student123', 0, '2025-06-07', '09:44:15', 1),
(10, 3, 13, 'C202513', 'student123', 0, '2025-06-07', '09:44:15', 1),
(11, 4, 14, 'B202514', 'admin123', 0, '2025-06-07', '09:49:20', 1),
(12, 4, 15, 'B202515', 'admin123', 0, '2025-06-07', '09:49:20', 1),
(13, 4, 16, 'B202516', 'admin123', 0, '2025-06-07', '09:49:20', 1),
(14, 3, 17, 'C202517', 'admin123', 0, '2025-06-07', '02:42:29', 1),
(15, 1, 18, 'admin', 'admin123', 1, '2025-07-23', '20:30:33', 1),
(16, 2, 19, 'registrar19e', 'admin1234', 0, '2025-07-30', '09:20:36', 1),
(17, 3, 20, 'C202520', 'student123', 0, '2025-09-27', '10:43:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

DROP TABLE IF EXISTS `activity_logs`;
CREATE TABLE IF NOT EXISTS `activity_logs` (
  `Activity_Log_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_detail` varchar(255) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Activity_Log_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=339 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`Activity_Log_Id`, `Log_detail`, `User_Id`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Changed app name to: Edited - LICOM Academic Portal', 18, '2025-09-20', '07:06:41', 1),
(2, 'Added a new year level record: 1st Year', 18, '2025-09-20', '10:34:18', 1),
(5, 'Delete year level record ID: 1', 18, '2025-09-20', '10:49:01', 1),
(4, 'Edit year level record: edited - 1st Year', 18, '2025-09-20', '10:39:57', 1),
(6, 'Added a new year level record: 2nd Year', 18, '2025-09-20', '10:59:54', 1),
(7, 'Added a new year level record: 3rd Year', 18, '2025-09-20', '11:00:02', 1),
(8, 'Added a new year level record: 4th Year', 18, '2025-09-20', '11:00:16', 1),
(9, 'Edit year level record: 1st Year', 18, '2025-09-20', '11:00:23', 1),
(10, 'Added a new semester record: 1st Semester A.Y. 2025 - 2026', 18, '2025-09-20', '11:16:33', 1),
(11, 'Edit semester record: 1 Year 2nd Semester A.Y. 2025-2026', 18, '2025-09-20', '11:35:45', 1),
(12, 'Edit semester record: 1st Semester A.Y. 2025-2026', 18, '2025-09-20', '11:35:54', 1),
(13, 'Edit semester record: 2nd Semester A.Y. 2025-2026', 18, '2025-09-20', '11:36:02', 1),
(14, 'Edit semester record: 1st Semester A.Y. 2026-2027', 18, '2025-09-20', '11:36:10', 1),
(15, 'Edit semester record: 2nd Semester A.Y. 2026 -2027', 18, '2025-09-20', '11:36:20', 1),
(16, 'Edit semester record: 3 Year 1st Semester A.Y. 2025 - 2026', 18, '2025-09-20', '11:36:30', 1),
(17, 'Edit semester record: 1st Semester A.Y. 2025 - 2026', 18, '2025-09-20', '11:36:40', 1),
(18, 'Edit semester record: 2nd Semester A.Y. 2025 - 2026', 18, '2025-09-20', '11:37:54', 1),
(19, 'Changed app name to: LICOM Academic Portal - edited', 18, '2025-09-21', '02:12:09', 1),
(20, 'Changed app name to: Licom Academic Portal - edited', 18, '2025-09-21', '02:12:20', 1),
(21, 'Changed app icon.', 18, '2025-09-21', '02:12:46', 1),
(22, 'Changed app icon.', 18, '2025-09-21', '02:13:10', 1),
(23, 'Edit account information.', 5, '2025-09-21', '02:14:22', 1),
(24, 'Changed app icon.', 18, '2025-09-21', '02:28:29', 1),
(25, 'Changed app icon.', 18, '2025-09-21', '02:28:41', 1),
(26, 'Log In Account:Al Conrado', 5, '2025-09-21', '03:51:46', 1),
(27, 'Log In Account:Admin  User', 18, '2025-09-21', '03:52:25', 1),
(28, 'Log In Account', 18, '2025-09-21', '06:52:16', 1),
(29, 'Log In Account', 18, '2025-09-21', '06:54:41', 1),
(30, 'Changed app icon.', 18, '2025-09-21', '06:57:18', 1),
(31, 'Log In Account', 18, '2025-09-21', '07:03:05', 1),
(32, 'Log In Account', 18, '2025-09-21', '07:16:16', 1),
(33, 'Log In Account', 18, '2025-09-26', '01:44:12', 1),
(34, 'Log In Account', 4, '2025-09-26', '06:17:05', 1),
(35, 'Log In Account', 4, '2025-09-27', '10:31:20', 1),
(36, 'Log In Account', 18, '2025-09-27', '09:29:28', 1),
(37, 'Log In Account', 5, '2025-09-27', '09:33:09', 1),
(38, 'Log In Account', 18, '2025-09-27', '09:44:26', 1),
(39, 'Log In Account', 5, '2025-09-27', '09:44:50', 1),
(40, 'Log In Account', 5, '2025-09-27', '09:49:46', 1),
(41, 'Log In Account', 5, '2025-09-27', '09:50:23', 1),
(42, 'Log In Account', 5, '2025-09-27', '10:05:25', 1),
(43, 'Log In Account', 4, '2025-09-27', '10:06:46', 1),
(44, 'Log In Account', 18, '2025-09-27', '10:06:55', 1),
(45, 'Log In Account', 18, '2025-09-27', '10:07:15', 1),
(46, 'Log In Account', 4, '2025-09-27', '10:07:36', 1),
(47, 'Changed student year level and course: Student: 17', 4, '2025-09-27', '10:07:50', 1),
(48, 'Changed student year level and course: Student: 17', 4, '2025-09-27', '10:11:40', 1),
(49, 'Added student year level and course: Student: 3', 4, '2025-09-27', '10:12:40', 1),
(50, 'Log In Account', 18, '2025-09-27', '10:12:48', 1),
(51, 'Log In Account', 18, '2025-09-27', '10:13:24', 1),
(52, 'Log In Account', 4, '2025-09-27', '10:14:42', 1),
(53, 'Added a new student record: Name: Test Student 9', 4, '2025-09-27', '10:43:31', 1),
(54, 'Log In Account', 18, '2025-09-27', '11:01:45', 1),
(55, 'Log In Account', 4, '2025-09-28', '08:38:38', 1),
(56, 'Add/Update student grade. Student: 5', 4, '2025-09-28', '09:45:02', 1),
(57, 'Add/Update student grade. Student: 5', 4, '2025-09-28', '09:48:24', 1),
(58, 'Add/Update student grade. Student: 5', 4, '2025-09-28', '09:48:30', 1),
(59, 'Log In Account', 5, '2025-09-28', '09:51:36', 1),
(60, 'Log In Account', 4, '2025-09-28', '09:55:47', 1),
(61, 'Log In Account', 5, '2025-09-28', '10:13:08', 1),
(62, 'Log In Account', 6, '2025-09-28', '10:33:41', 1),
(63, 'Log In Account', 4, '2025-09-28', '05:59:43', 1),
(64, 'Log In Account', 4, '2025-09-29', '03:57:06', 1),
(65, 'Log In Account', 4, '2025-09-30', '09:00:48', 1),
(66, 'Log In Account', 4, '2025-09-30', '09:11:15', 1),
(67, 'Log In Account', 18, '2025-10-01', '02:32:02', 1),
(68, 'Log In Account', 4, '2025-10-01', '02:38:45', 1),
(69, 'Log In Account', 4, '2025-10-01', '09:07:00', 1),
(70, 'Log In Account', 4, '2025-10-02', '01:23:26', 1),
(71, 'Import Student Grades', 4, '2025-10-02', '01:51:40', 1),
(72, 'Log In Account', 18, '2025-10-02', '01:51:50', 1),
(73, 'Log In Account', 4, '2025-10-02', '02:02:38', 1),
(74, 'Import Student Grades', 4, '2025-10-02', '02:03:54', 1),
(75, 'Log In Account', 4, '2025-10-02', '03:25:07', 1),
(76, 'Import Student Grades', 4, '2025-10-02', '04:16:38', 1),
(77, 'Import Student Grades', 4, '2025-10-02', '04:16:55', 1),
(78, 'Import Student Grades', 4, '2025-10-02', '04:20:39', 1),
(79, 'Import Student Grades', 4, '2025-10-02', '04:20:51', 1),
(80, 'Import Student Grades', 4, '2025-10-02', '04:21:22', 1),
(81, 'Add/Update student grade. Student: 5', 4, '2025-10-02', '04:44:54', 1),
(82, 'Log In Account', 4, '2025-10-02', '05:43:51', 1),
(83, 'Log In Account', 4, '2025-10-03', '08:50:09', 1),
(84, 'Log In Account', 5, '2025-10-03', '10:09:39', 1),
(85, 'Log In Account', 6, '2025-10-03', '10:10:25', 1),
(86, 'Log In Account', 4, '2025-10-03', '10:11:06', 1),
(87, 'Log In Account', 4, '2025-10-03', '02:39:43', 1),
(88, 'Log In Account', 4, '2025-10-05', '09:54:39', 1),
(89, 'Log In Account', 4, '2025-10-05', '10:58:52', 1),
(90, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:24:09', 1),
(91, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:25:02', 1),
(92, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:26:31', 1),
(93, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:28:26', 1),
(94, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:29:01', 1),
(95, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:30:19', 1),
(96, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:31:23', 1),
(97, 'Added a new student to a class schedule.', 4, '2025-10-05', '11:34:33', 1),
(98, 'Delete student in a class. ID: 27', 4, '2025-10-05', '11:47:00', 1),
(99, 'Delete student in a class. ID: 27', 4, '2025-10-05', '11:47:20', 1),
(100, 'Added a new student to a class schedule.', 4, '2025-10-05', '02:17:11', 1),
(101, 'Delete student in a class. ID: 33', 4, '2025-10-05', '02:17:21', 1),
(102, 'Delete student in a class. ID: 28', 4, '2025-10-05', '02:17:23', 1),
(103, 'Delete student in a class. ID: 29', 4, '2025-10-05', '02:17:27', 1),
(104, 'Added a new student to a class schedule.', 4, '2025-10-05', '02:17:31', 1),
(105, 'Log In Account', 4, '2025-10-05', '02:32:07', 1),
(106, 'Log In Account', 4, '2025-10-06', '05:44:46', 1),
(107, 'Delete student in a class. ID: 36', 4, '2025-10-06', '05:45:33', 1),
(108, 'Log In Account', 18, '2025-10-07', '08:22:32', 1),
(109, 'Log In Account', 4, '2025-10-07', '08:22:56', 1),
(110, 'Delete student in a class. ID: 2', 4, '2025-10-07', '08:29:56', 1),
(111, 'Log In Account', 18, '2025-10-07', '09:06:21', 1),
(112, 'Log In Account', 4, '2025-10-07', '09:40:35', 1),
(113, 'Log In Account', 5, '2025-10-07', '10:47:01', 1),
(114, 'Log In Account', 18, '2025-10-07', '10:48:14', 1),
(115, 'Edit program record. Name: Sample Course - edited', 18, '2025-10-07', '10:50:51', 1),
(116, 'Log In Account', 4, '2025-10-07', '10:52:16', 1),
(117, 'Log In Account', 18, '2025-10-08', '06:19:44', 1),
(118, 'Log In Account', 5, '2025-10-08', '06:20:40', 1),
(119, 'Log In Account', 4, '2025-10-08', '06:27:06', 1),
(120, 'Log In Account', 5, '2025-10-08', '06:40:17', 1),
(121, 'Log In Account', 4, '2025-10-08', '06:45:30', 1),
(122, 'Log In Account', 6, '2025-10-08', '06:45:38', 1),
(123, 'Log In Account', 18, '2025-10-08', '06:56:58', 1),
(124, 'Log In Account', 5, '2025-10-08', '06:59:49', 1),
(125, 'Log In Account', 6, '2025-10-08', '07:02:44', 1),
(126, 'Log In Account', 4, '2025-10-08', '07:16:16', 1),
(127, 'Log In Account', 6, '2025-10-08', '07:18:40', 1),
(128, 'Log In Account', 4, '2025-10-08', '07:23:19', 1),
(129, 'Log In Account', 6, '2025-10-08', '07:23:23', 1),
(130, 'Log In Account', 6, '2025-10-08', '07:52:26', 1),
(131, 'Log In Account', 4, '2025-10-08', '11:46:17', 1),
(132, 'Log In Account', 6, '2025-10-08', '11:46:39', 1),
(133, 'Encode Student Grades', 6, '2025-10-08', '05:24:55', 1),
(134, 'Encode Student Grades', 6, '2025-10-08', '05:27:17', 1),
(135, 'Encode Student Grades', 6, '2025-10-08', '05:27:23', 1),
(136, 'Encode Student Grades', 6, '2025-10-08', '05:27:31', 1),
(137, 'Encode Student Grades', 6, '2025-10-08', '05:27:37', 1),
(138, 'Encode Student Grades', 6, '2025-10-08', '05:39:18', 1),
(139, 'Encode Student Grades', 6, '2025-10-08', '05:39:56', 1),
(140, 'Encode Student Grades', 6, '2025-10-08', '05:40:38', 1),
(141, 'Encode Student Grades', 6, '2025-10-08', '05:43:20', 1),
(142, 'Encode Student Grades', 6, '2025-10-08', '05:44:18', 1),
(143, 'Encode Student Grades', 6, '2025-10-08', '05:45:56', 1),
(144, 'Log In Account', 4, '2025-10-08', '05:52:05', 1),
(145, 'Log In Account', 6, '2025-10-08', '05:52:27', 1),
(146, 'Log In Account', 4, '2025-10-10', '08:47:43', 1),
(147, 'Log In Account', 5, '2025-10-10', '08:48:52', 1),
(148, 'Log In Account', 4, '2025-10-10', '08:51:14', 1),
(149, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:41:44', 1),
(150, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:41:50', 1),
(151, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:44:25', 1),
(152, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:44:31', 1),
(153, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:44:39', 1),
(154, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:44:44', 1),
(155, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '09:44:49', 1),
(156, 'Import Student Grades', 4, '2025-10-10', '10:16:34', 1),
(157, 'Import Student Grades', 4, '2025-10-10', '10:16:52', 1),
(158, 'Import Student Grades', 4, '2025-10-10', '10:17:06', 1),
(159, 'Import Student Grades', 4, '2025-10-10', '10:19:11', 1),
(160, 'Import Student Grades', 4, '2025-10-10', '10:19:17', 1),
(161, 'Import Student Grades', 4, '2025-10-10', '10:19:45', 1),
(162, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '10:20:00', 1),
(163, 'Add/Update student grade. Student: 5', 4, '2025-10-10', '10:20:02', 1),
(164, 'Log In Account', 6, '2025-10-10', '10:20:50', 1),
(165, 'Encode Student Grades', 6, '2025-10-10', '10:22:53', 1),
(166, 'Encode Student Grades', 6, '2025-10-10', '10:24:06', 1),
(167, 'Encode Student Grades', 6, '2025-10-10', '10:24:55', 1),
(168, 'Encode Student Grades', 6, '2025-10-10', '10:25:05', 1),
(169, 'Encode Student Grades', 6, '2025-10-10', '10:26:21', 1),
(170, 'Log In Account', 5, '2025-10-10', '10:33:26', 1),
(171, 'Log In Account', 7, '2025-10-10', '10:33:56', 1),
(172, 'Log In Account', 8, '2025-10-10', '10:34:16', 1),
(173, 'Log In Account', 9, '2025-10-10', '10:34:38', 1),
(174, 'Log In Account', 6, '2025-10-10', '11:21:18', 1),
(175, 'Encode Student Grades', 6, '2025-10-10', '11:22:53', 1),
(176, 'Log In Account', 6, '2025-10-10', '01:17:19', 1),
(177, 'Log In Account', 6, '2025-10-10', '01:33:19', 1),
(178, 'Log In Account', 6, '2025-10-10', '01:41:46', 1),
(179, 'Encode Student Grades', 6, '2025-10-10', '01:43:59', 1),
(180, 'Encode Student Grades', 6, '2025-10-10', '01:44:03', 1),
(181, 'Log In Account', 18, '2025-10-13', '02:05:43', 1),
(182, 'Edit grade remark. Name: Passed', 18, '2025-10-13', '02:05:57', 1),
(183, 'Edit grade remark. Name: Passed', 18, '2025-10-13', '02:06:57', 1),
(184, 'Added a new grade remark. Name: Removal', 18, '2025-10-13', '02:12:21', 1),
(185, 'Delete grade remark record. ID: 4', 18, '2025-10-13', '02:12:26', 1),
(186, 'Log In Account', 5, '2025-10-13', '02:22:30', 1),
(187, 'Log In Account', 4, '2025-10-13', '03:36:10', 1),
(188, 'Log In Account', 18, '2025-10-13', '09:42:58', 1),
(189, 'Added a new semester record: Sample semester', 18, '2025-10-13', '09:54:00', 1),
(190, 'Edit semester record: Sample semester edited', 18, '2025-10-13', '09:54:07', 1),
(191, 'Edit semester record: 2nd Semester A.Y. 2025 - 2026 edited', 18, '2025-10-13', '09:54:13', 1),
(192, 'Edit semester record: Sample semester', 18, '2025-10-13', '09:54:18', 1),
(193, 'Delete semester record ID: 7', 18, '2025-10-13', '09:54:21', 1),
(194, 'Edit semester record: 2nd Semester A.Y. 2025 - 2026', 18, '2025-10-13', '09:54:27', 1),
(195, 'Set semester as active. ID: 2', 18, '2025-10-13', '09:54:51', 1),
(196, 'Set semester as active. ID: 1', 18, '2025-10-13', '09:54:53', 1),
(197, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:14:51', 1),
(198, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:16:10', 1),
(199, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:17:31', 1),
(200, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:18:50', 1),
(201, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:20:28', 1),
(202, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:20:44', 1),
(203, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:22:42', 1),
(204, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:24:54', 1),
(205, 'Changed student year level and course: Student: 5', 18, '2025-10-13', '10:24:58', 1),
(206, 'Log In Account', 4, '2025-10-13', '10:32:36', 1),
(207, 'Delete student in a class. ID: 35', 4, '2025-10-13', '10:42:16', 1),
(208, 'Delete student in a class. ID: 5', 4, '2025-10-13', '10:43:36', 1),
(209, 'Added a new class student. ID: 5', 4, '2025-10-13', '10:43:39', 1),
(210, 'Import Student Grades', 4, '2025-10-13', '10:54:51', 1),
(211, 'Log In Account', 5, '2025-10-14', '09:37:38', 1),
(212, 'Log In Account', 18, '2025-10-14', '02:53:59', 1),
(213, 'Edit account information.', 18, '2025-10-14', '02:56:55', 1),
(214, 'Edit account information.', 18, '2025-10-14', '02:58:11', 1),
(215, 'Edit account information.', 18, '2025-10-14', '03:09:27', 1),
(216, 'Edit account information.', 18, '2025-10-14', '03:09:39', 1),
(217, 'Log In Account', 18, '2025-10-14', '03:10:37', 1),
(218, 'Log In Account', 6, '2025-10-14', '03:11:27', 1),
(219, 'Log In Account', 18, '2025-10-14', '03:11:38', 1),
(220, 'Edit account information.', 18, '2025-10-14', '03:12:23', 1),
(221, 'Log In Account', 4, '2025-10-14', '04:02:47', 1),
(222, 'Added a new subject. Name: AL3 - Project Management', 4, '2025-10-14', '04:41:55', 1),
(223, 'Edit a subject. Name: System Architecture and Design ', 4, '2025-10-14', '05:17:37', 1),
(224, 'Edit a subject. Name: Cyber Security 101', 4, '2025-10-14', '05:38:04', 1),
(225, 'Log In Account', 4, '2025-10-14', '08:28:43', 1),
(226, 'Set semester as active. ID: 2', 4, '2025-10-14', '09:18:32', 1),
(227, 'Set semester as active. ID: 1', 4, '2025-10-14', '09:20:17', 1),
(228, 'Set semester as active. ID: 2', 4, '2025-10-14', '09:22:26', 1),
(229, 'Set semester as active. ID: 1', 4, '2025-10-14', '09:23:34', 1),
(230, 'Set semester as active. ID: 2', 4, '2025-10-14', '09:23:50', 1),
(231, 'Set semester as active. ID: 1', 4, '2025-10-14', '09:38:39', 1),
(232, 'Set semester as active. ID: 2', 4, '2025-10-14', '09:40:02', 1),
(233, 'Set semester as active. ID: 1', 4, '2025-10-14', '09:45:31', 1),
(234, 'Log In Account', 18, '2025-10-14', '09:46:26', 1),
(235, 'Log In Account', 4, '2025-10-14', '09:46:40', 1),
(236, 'Log In Account', 4, '2025-10-14', '10:14:30', 1),
(237, 'Delete student in a class. ID: 34', 4, '2025-10-14', '10:23:20', 1),
(238, 'Log In Account', 18, '2025-10-14', '11:22:27', 1),
(239, 'Log In Account', 4, '2025-10-16', '10:01:11', 1),
(240, 'Log In Account', 4, '2025-10-16', '10:14:15', 1),
(241, 'Log In Account', 18, '2025-10-16', '10:33:27', 1),
(242, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '10:49:55', 1),
(243, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:15:26', 1),
(244, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:16:46', 1),
(245, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:16:59', 1),
(246, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:17:13', 1),
(247, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:17:21', 1),
(248, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:17:31', 1),
(249, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:17:43', 1),
(250, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:17:48', 1),
(251, 'Add/Update student grade. Student: 5', 18, '2025-10-16', '11:17:53', 1),
(252, 'Log In Account', 4, '2025-10-16', '11:30:15', 1),
(253, 'Log In Account', 4, '2025-10-16', '04:56:00', 1),
(254, 'Log In Account', 4, '2025-10-16', '10:21:23', 1),
(255, 'Import Student Grades', 4, '2025-10-16', '10:41:58', 1),
(256, 'Import Student Grades', 4, '2025-10-16', '10:42:40', 1),
(257, 'Import Student Grades', 4, '2025-10-16', '10:56:10', 1),
(258, 'Import Student Grades', 4, '2025-10-16', '10:59:17', 1),
(259, 'Import Student Grades', 4, '2025-10-16', '10:59:37', 1),
(260, 'Import Student Grades', 4, '2025-10-16', '11:00:55', 1),
(261, 'Import Student Grades', 4, '2025-10-16', '11:01:32', 1),
(262, 'Log In Account', 6, '2025-10-16', '11:04:00', 1),
(263, 'Encode Student Grades', 6, '2025-10-16', '11:05:24', 1),
(264, 'Encode Student Grades', 6, '2025-10-16', '11:05:32', 1),
(265, 'Encode Student Grades', 6, '2025-10-16', '11:05:35', 1),
(266, 'Log In Account', 4, '2025-10-16', '11:09:31', 1),
(267, 'Add/Update student grade. Student: 5', 4, '2025-10-16', '11:18:35', 1),
(268, 'Log In Account', 6, '2025-10-16', '11:18:52', 1),
(269, 'Encode Student Grades', 6, '2025-10-16', '11:20:24', 1),
(270, 'Log In Account', 4, '2025-10-17', '08:44:55', 1),
(271, 'Set account as inactive. ID: 5', 4, '2025-10-17', '09:01:00', 1),
(272, 'Log In Account', 18, '2025-10-17', '09:01:15', 1),
(273, 'Log In Account', 5, '2025-10-17', '09:02:04', 1),
(274, 'Log In Account', 18, '2025-10-17', '10:36:12', 1),
(275, 'Log In Account', 4, '2025-10-17', '10:47:09', 1),
(276, 'Log In Account', 18, '2025-10-17', '01:44:54', 1),
(277, 'Log In Account', 18, '2025-10-18', '02:31:52', 1),
(278, 'Log In Account', 18, '2025-10-18', '02:48:37', 1),
(279, 'Log In Account', 4, '2025-10-18', '02:49:11', 1),
(280, 'Log In Account', 6, '2025-10-18', '02:51:57', 1),
(281, 'Log In Account', 18, '2025-10-18', '02:52:18', 1),
(282, 'Log In Account', 6, '2025-10-18', '02:59:57', 1),
(283, 'Log In Account', 18, '2025-10-18', '03:00:19', 1),
(284, 'Log In Account', 6, '2025-10-18', '03:00:42', 1),
(285, 'Log In Account', 18, '2025-10-18', '03:01:04', 1),
(286, 'Log In Account', 4, '2025-10-18', '03:19:46', 1),
(287, 'Added a new class schedule. ID: 9', 4, '2025-10-18', '03:28:43', 1),
(288, 'Added a new class schedule. ID: 10', 4, '2025-10-18', '03:31:18', 1),
(289, 'Added a new class schedule. ID: 11', 4, '2025-10-18', '04:21:57', 1),
(290, 'Added student year level and course: Student: 5', 4, '2025-10-18', '04:23:22', 1),
(291, 'Added a new class student. ID: 9', 4, '2025-10-18', '04:23:28', 1),
(292, 'Add/Update student grade. Student: 9', 4, '2025-10-18', '04:28:12', 1),
(293, 'Added a new class schedule. ID: 12', 4, '2025-10-18', '04:37:11', 1),
(294, 'Delete class schedule. ID: 12', 4, '2025-10-18', '04:37:35', 1),
(295, 'Added a new class schedule. ID: 13', 4, '2025-10-18', '04:37:45', 1),
(296, 'Log In Account', 18, '2025-10-18', '05:05:00', 1),
(297, 'Set semester as active. ID: 2', 18, '2025-10-18', '05:14:28', 1),
(298, 'Set semester as active. ID: 2', 18, '2025-10-18', '05:18:32', 1),
(299, 'Added a new semester record: Sample semester', 18, '2025-10-18', '05:19:51', 1),
(300, 'Delete semester record ID: 8', 18, '2025-10-18', '05:19:56', 1),
(301, 'Log In Account', 6, '2025-10-18', '05:29:03', 1),
(302, 'Log In Account', 4, '2025-10-18', '05:33:32', 1),
(303, 'Log In Account', 6, '2025-10-18', '05:35:42', 1),
(304, 'Log In Account', 18, '2025-10-18', '05:44:06', 1),
(305, 'Log In Account', 6, '2025-10-18', '05:53:32', 1),
(306, 'Log In Account', 18, '2025-10-18', '05:57:56', 1),
(307, 'Added a new subject. Name: Cyber Security 101', 18, '2025-10-18', '06:04:35', 1),
(308, 'Edit a subject. Name: Cyber Security 101', 18, '2025-10-18', '06:05:39', 1),
(309, 'Log In Account', 6, '2025-10-18', '06:07:06', 1),
(310, 'Log In Account', 5, '2025-10-18', '06:09:29', 1),
(311, 'Log In Account', 18, '2025-10-18', '06:16:04', 1),
(312, 'Log In Account', 6, '2025-10-18', '06:16:24', 1),
(313, 'Log In Account', 18, '2025-10-18', '06:27:13', 1),
(314, 'Log In Account', 6, '2025-10-18', '06:38:14', 1),
(315, 'Log In Account', 18, '2025-10-18', '06:38:25', 1),
(316, 'Log In Account', 6, '2025-10-18', '06:41:46', 1),
(317, 'Log In Account', 18, '2025-10-18', '06:42:18', 1),
(318, 'Log In Account', 6, '2025-10-18', '06:51:27', 1),
(319, 'Log In Account', 6, '2025-10-19', '03:24:35', 1),
(320, 'Log In Account', 18, '2025-10-19', '03:33:00', 1),
(321, 'Log In Account', 6, '2025-10-20', '08:46:49', 1),
(322, 'Log In Account', 18, '2025-10-20', '08:47:33', 1),
(323, 'Log In Account', 14, '2025-10-20', '08:48:00', 1),
(324, 'Log In Account', 14, '2025-10-20', '08:57:15', 1),
(325, 'Log In Account', 6, '2025-10-20', '08:57:33', 1),
(326, 'Log In Account', 18, '2025-10-21', '09:10:55', 1),
(327, 'Log In Account', 6, '2025-10-21', '09:17:07', 1),
(328, 'Log In Account', 18, '2025-10-21', '09:18:39', 1),
(329, 'Log In Account', 6, '2025-10-21', '09:31:52', 1),
(330, 'Log In Account', 18, '2025-10-21', '09:33:29', 1),
(331, 'Log In Account', 18, '2025-10-25', '08:32:44', 1),
(332, 'Log In Account', 5, '2025-10-25', '02:36:46', 1),
(333, 'Log In Account', 18, '2025-10-25', '06:43:47', 1),
(334, 'Edit contact information. ', 18, '2025-10-25', '06:44:08', 1),
(335, 'Log In Account', 5, '2025-10-25', '06:49:23', 1),
(336, 'Log In Account', 5, '2025-10-25', '06:49:34', 1),
(337, 'Log In Account', 5, '2025-10-25', '06:50:24', 1),
(338, 'Log In Account', 5, '2025-10-25', '06:50:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_schedules`
--

DROP TABLE IF EXISTS `class_schedules`;
CREATE TABLE IF NOT EXISTS `class_schedules` (
  `Class_Schedule_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Semester_Id` int(11) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `Room_Id` int(11) NOT NULL,
  `Instructor_Id` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `Time_start` time NOT NULL,
  `Time_end` time NOT NULL,
  `Date_added` date DEFAULT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Class_Schedule_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_schedules`
--

INSERT INTO `class_schedules` (`Class_Schedule_Id`, `Semester_Id`, `Subject_Id`, `Room_Id`, `Instructor_Id`, `Day`, `Time_start`, `Time_end`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, 1, 1, 14, 1, '08:00:00', '09:30:00', NULL, '00:00:00', 0),
(2, 1, 2, 1, 6, 1, '10:30:00', '10:00:00', '2025-06-01', '02:49:52', 1),
(3, 1, 3, 1, 6, 1, '10:01:00', '11:30:00', '2025-06-01', '02:53:19', 1),
(4, 1, 3, 1, 6, 2, '09:30:00', '23:30:00', '2025-06-01', '02:53:43', 1),
(5, 1, 3, 2, 6, 1, '09:30:00', '11:30:00', '2025-06-07', '01:02:02', 1),
(6, 1, 1, 3, 16, 3, '09:00:00', '10:00:00', '2025-06-07', '02:46:22', 1),
(7, 4, 5, 10, 16, 5, '08:00:00', '09:30:00', '2025-06-07', '02:52:21', 1),
(8, 1, 1, 1, 16, 1, '13:00:00', '14:30:00', '2025-06-26', '08:56:22', 1),
(9, 1, 2, 3, 14, 1, '09:20:00', '11:30:00', '2025-10-18', '03:28:43', 1),
(10, 1, 2, 4, 6, 1, '00:20:00', '13:00:00', '2025-10-18', '03:31:18', 1),
(11, 1, 2, 4, 16, 5, '09:30:00', '10:00:00', '2025-10-18', '04:21:57', 1),
(12, 1, 2, 1, 6, 3, '08:30:00', '09:40:00', '2025-10-18', '04:37:11', 0),
(13, 1, 2, 1, 6, 3, '08:30:00', '10:30:00', '2025-10-18', '04:37:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `Course_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Course_name` varchar(255) NOT NULL,
  `Course_code` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Course_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_Id`, `Course_name`, `Course_code`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Bachelor of Science in Information Technology', 'BSIT', '2025-05-18', '02:58:18', 1),
(2, 'Bachelor of Science in Hotel and Restaurant Management', 'BSHRM', '2025-05-18', '03:12:31', 1),
(3, 'Bachelor of Science in Business Administration', 'BSBA', '2025-05-18', '03:13:15', 1),
(4, 'Bachelor of Science in Business Management', 'BSBM', '2025-05-18', '03:13:53', 1),
(5, 'Bachelor of Science in Computer Engineering', 'BSCoE', '2025-05-18', '03:14:24', 1),
(6, 'Bachelor of Science in Computer Science', 'BSCS', '2025-05-18', '03:14:41', 1),
(7, 'Bachelor of Science in Education', 'BSE', '2025-05-18', '03:15:14', 1),
(8, 'Sample Course - edited', 'SC1', '2025-10-07', '10:50:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_verification`
--

DROP TABLE IF EXISTS `email_verification`;
CREATE TABLE IF NOT EXISTS `email_verification` (
  `Email_Verif_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` int(11) NOT NULL,
  `Verif_code` text NOT NULL,
  `Verif_type` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Email_Verif_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_verification`
--

INSERT INTO `email_verification` (`Email_Verif_Id`, `User_Id`, `Verif_code`, `Verif_type`, `Date_added`, `Time_added`, `Status`) VALUES
(7, 5, 'NV8yMDI1LTEwLTI1IDA2OjUwOjEy', 'Activation', '2025-10-25', '06:50:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_grade`
--

DROP TABLE IF EXISTS `evaluation_grade`;
CREATE TABLE IF NOT EXISTS `evaluation_grade` (
  `Eval_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Semester_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Evaluated_by` int(11) NOT NULL,
  `Remarks` text,
  `Grade_val` decimal(18,5) DEFAULT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Eval_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_grade`
--

INSERT INTO `evaluation_grade` (`Eval_Id`, `Semester_Id`, `User_Id`, `Evaluated_by`, `Remarks`, `Grade_val`, `Date_added`, `Time_added`, `Status`) VALUES
(4, 1, 16, 5, NULL, '3.62500', '2025-07-18', '10:24:43', 1),
(5, 1, 6, 5, NULL, '3.12500', '2025-07-18', '05:57:00', 1),
(6, 1, 6, 7, NULL, '3.62500', '2025-07-19', '07:27:36', 1),
(7, 1, 6, 8, NULL, '2.00000', '2025-07-19', '07:28:43', 1),
(8, 1, 16, 7, NULL, '2.12500', '2025-09-09', '10:25:24', 1),
(11, 1, 6, 9, 'Lorem Ipsum DOlor Sit Amet Con Estas Con Estacteur.', '3.37500', '2025-10-10', '11:12:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_grades`
--

DROP TABLE IF EXISTS `evaluation_grades`;
CREATE TABLE IF NOT EXISTS `evaluation_grades` (
  `Eval_Grades_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Semester_Id` int(11) DEFAULT NULL,
  `Eval_Metric_Id` int(11) NOT NULL,
  `Metric_Val_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Evaluated_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Eval_Grades_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_grades`
--

INSERT INTO `evaluation_grades` (`Eval_Grades_Id`, `Semester_Id`, `Eval_Metric_Id`, `Metric_Val_Id`, `User_Id`, `Evaluated_by`, `Date_added`, `Time_added`, `Status`) VALUES
(17, 1, 1, 5, 16, 5, '2025-07-18', '10:24:43', 1),
(18, 1, 2, 6, 16, 5, '2025-07-18', '10:24:43', 1),
(19, 1, 3, 6, 16, 5, '2025-07-18', '10:24:43', 1),
(20, 1, 4, 5, 16, 5, '2025-07-18', '10:24:43', 1),
(21, 1, 5, 6, 16, 5, '2025-07-18', '10:24:43', 1),
(22, 1, 6, 6, 16, 5, '2025-07-18', '10:24:43', 1),
(23, 1, 7, 5, 16, 5, '2025-07-18', '10:24:43', 1),
(24, 1, 8, 6, 16, 5, '2025-07-18', '10:24:43', 1),
(25, 1, 1, 5, 6, 5, '2025-07-18', '05:57:00', 1),
(26, 1, 2, 6, 6, 5, '2025-07-18', '05:57:00', 1),
(27, 1, 3, 5, 6, 5, '2025-07-18', '05:57:00', 1),
(28, 1, 4, 5, 6, 5, '2025-07-18', '05:57:00', 1),
(29, 1, 5, 5, 6, 5, '2025-07-18', '05:57:00', 1),
(30, 1, 6, 4, 6, 5, '2025-07-18', '05:57:00', 1),
(31, 1, 7, 6, 6, 5, '2025-07-18', '05:57:00', 1),
(32, 1, 8, 5, 6, 5, '2025-07-18', '05:57:00', 1),
(33, 1, 1, 5, 6, 7, '2025-07-19', '07:27:36', 1),
(34, 1, 2, 5, 6, 7, '2025-07-19', '07:27:36', 1),
(35, 1, 3, 6, 6, 7, '2025-07-19', '07:27:36', 1),
(36, 1, 4, 6, 6, 7, '2025-07-19', '07:27:36', 1),
(37, 1, 5, 5, 6, 7, '2025-07-19', '07:27:36', 1),
(38, 1, 6, 6, 6, 7, '2025-07-19', '07:27:36', 1),
(39, 1, 7, 6, 6, 7, '2025-07-19', '07:27:36', 1),
(40, 1, 8, 6, 6, 7, '2025-07-19', '07:27:36', 1),
(41, 1, 1, 3, 6, 8, '2025-07-19', '07:28:43', 1),
(42, 1, 2, 4, 6, 8, '2025-07-19', '07:28:43', 1),
(43, 1, 3, 5, 6, 8, '2025-07-19', '07:28:43', 1),
(44, 1, 4, 4, 6, 8, '2025-07-19', '07:28:43', 1),
(45, 1, 5, 4, 6, 8, '2025-07-19', '07:28:43', 1),
(46, 1, 6, 3, 6, 8, '2025-07-19', '07:28:43', 1),
(47, 1, 7, 4, 6, 8, '2025-07-19', '07:28:43', 1),
(48, 1, 8, 5, 6, 8, '2025-07-19', '07:28:43', 1),
(49, 1, 1, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(50, 1, 2, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(51, 1, 3, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(52, 1, 4, 5, 16, 7, '2025-09-09', '10:25:24', 1),
(53, 1, 5, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(54, 1, 6, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(55, 1, 7, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(56, 1, 8, 4, 16, 7, '2025-09-09', '10:25:24', 1),
(81, 1, 1, 6, 6, 9, '2025-10-10', '11:12:46', 1),
(82, 1, 2, 5, 6, 9, '2025-10-10', '11:12:46', 1),
(83, 1, 3, 5, 6, 9, '2025-10-10', '11:12:46', 1),
(84, 1, 4, 5, 6, 9, '2025-10-10', '11:12:46', 1),
(85, 1, 5, 5, 6, 9, '2025-10-10', '11:12:46', 1),
(86, 1, 6, 5, 6, 9, '2025-10-10', '11:12:46', 1),
(87, 1, 7, 6, 6, 9, '2025-10-10', '11:12:46', 1),
(88, 1, 8, 6, 6, 9, '2025-10-10', '11:12:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_headers`
--

DROP TABLE IF EXISTS `evaluation_headers`;
CREATE TABLE IF NOT EXISTS `evaluation_headers` (
  `Eval_Header_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Eval_header_name` varchar(255) NOT NULL,
  `Order_val` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Eval_Header_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_headers`
--

INSERT INTO `evaluation_headers` (`Eval_Header_Id`, `Eval_header_name`, `Order_val`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Commitment', 2, '2025-06-14', '12:36:36', 1),
(3, 'Knowledge of Subject', 3, '2025-06-14', '12:38:08', 1),
(4, 'Teaching for Independent Learning', 4, '2025-06-14', '12:38:38', 1),
(5, 'Management of Learning - edited', 5, '2025-06-14', '12:38:53', 1),
(6, 'Sample Header 6', 6, '2025-06-14', '12:39:03', 0),
(7, 'Sample Header', 6, '2025-07-05', '02:05:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_metrics`
--

DROP TABLE IF EXISTS `evaluation_metrics`;
CREATE TABLE IF NOT EXISTS `evaluation_metrics` (
  `Eval_Metric_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Eval_Header_Id` int(11) NOT NULL,
  `Metric_desc` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Eval_Metric_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_metrics`
--

INSERT INTO `evaluation_metrics` (`Eval_Metric_Id`, `Eval_Header_Id`, `Metric_desc`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, 'Prepares and submits updated syllabus on or before the schedule distribution and before the midterm examination', '2025-06-14', '01:33:19', 1),
(2, 1, 'Reports to the class regularly and punctually. ', '2025-06-14', '01:36:21', 1),
(3, 1, 'Makes self available to students beyond official time', '2025-06-14', '01:36:43', 1),
(4, 1, 'Regularly communicates with individual students, to check  whether topics are received and well understood to attain the objectives.', '2025-06-14', '01:36:51', 1),
(5, 1, 'Keeps accurate records of students\' performance and prompt submission of their grades on time. ', '2025-06-14', '01:37:01', 1),
(6, 3, 'edited  - Keeps accurate records of students\' performance and prompt submission of their grades on time. ', '2025-06-14', '01:37:26', 1),
(7, 4, 'Sample metric', '2025-07-05', '02:07:02', 1),
(8, 5, 'Sample Metric to weigh in', '2025-07-15', '06:22:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file_attachments`
--

DROP TABLE IF EXISTS `file_attachments`;
CREATE TABLE IF NOT EXISTS `file_attachments` (
  `File_Attachment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Filename_path` text NOT NULL,
  `File_Type_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Added_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`File_Attachment_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `file_types`
--

DROP TABLE IF EXISTS `file_types`;
CREATE TABLE IF NOT EXISTS `file_types` (
  `File_Type_Id` int(11) NOT NULL AUTO_INCREMENT,
  `File_type_name` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`File_Type_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grade_remarks`
--

DROP TABLE IF EXISTS `grade_remarks`;
CREATE TABLE IF NOT EXISTS `grade_remarks` (
  `Grade_Remark_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Grade_remark` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Grade_indicator` varchar(255) DEFAULT NULL,
  `Range_from` decimal(10,2) DEFAULT NULL,
  `Range_to` decimal(10,2) NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Grade_Remark_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_remarks`
--

INSERT INTO `grade_remarks` (`Grade_Remark_Id`, `Grade_remark`, `Date_added`, `Grade_indicator`, `Range_from`, `Range_to`, `Time_added`, `Status`) VALUES
(1, 'Passed', '2025-06-23', 'text-success', '1.00', '3.00', '21:02:30', 1),
(2, 'Conditional', '2025-06-23', 'text-warning', '4.00', '4.00', '21:02:30', 1),
(3, 'Failed', '2025-08-17', 'text-danger', '5.00', '5.00', '04:38:22', 1),
(4, 'Removal', '2025-10-13', 'text-info', '7.00', '7.00', '02:12:21', 0),
(9, 'Incomplete', '2025-10-16', 'text-warning', '0.00', '0.00', '10:58:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
CREATE TABLE IF NOT EXISTS `levels` (
  `Level_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Level_name` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Level_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`Level_Id`, `Level_name`, `Status`) VALUES
(1, 'Administrator', 1),
(2, 'Registrar', 1),
(3, 'Student', 1),
(4, 'Instructor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metric_values`
--

DROP TABLE IF EXISTS `metric_values`;
CREATE TABLE IF NOT EXISTS `metric_values` (
  `Metric_Val_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Metric_val_no` int(11) NOT NULL,
  `Metric_val_desc` varchar(255) NOT NULL,
  `Metric_Q_desc` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Metric_Val_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metric_values`
--

INSERT INTO `metric_values` (`Metric_Val_Id`, `Metric_val_no`, `Metric_val_desc`, `Metric_Q_desc`, `Status`) VALUES
(3, 1, 'Edited - Poor', 'The faculty fails to meet job requirements. ', 1),
(4, 2, 'Fair', 'The performance needs some development to meet job requirements.', 1),
(5, 3, 'Satisfactory', 'The performance meets job requirements.', 1),
(6, 4, 'Very Satisfactory', 'The performance meets and often exceeds the job requirements.', 1),
(7, 5, 'Outstanding', 'The performance almost always exceeds the job requirements. The faculty is an exceptional role model.', 1),
(8, 6, 'Random', 'Lorem Ipsum', 0),
(9, 6, 'Sample rating', 'Sample description', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `Room_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Room_name` varchar(255) NOT NULL,
  `Room_details` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Room_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Room_Id`, `Room_name`, `Room_details`, `Date_added`, `Time_added`, `Status`) VALUES
(1, '1FA ', 'First Floor Section A', '2025-05-20', '09:01:57', 1),
(2, '1FB', 'First Floor Section B', '2025-05-20', '09:02:51', 1),
(3, '1FC', 'First Floor Section C', '2025-05-20', '09:03:11', 1),
(4, '2FA', 'Second Floor Section A', '2025-05-20', '09:03:45', 1),
(5, '2FB', 'Second Floor Section B', '2025-05-20', '09:03:55', 1),
(6, '2FC', 'Second Floor Section C', '2025-05-20', '09:04:03', 1),
(7, '3FA', 'Third Floor Section A', '2025-05-20', '09:04:16', 1),
(8, '3FB', 'Third Floor Section B', '2025-05-20', '09:04:25', 1),
(9, '3FC', 'Third Floor Section C', '2025-05-20', '09:04:32', 1),
(10, '3FD', 'Third Floor Room D', '2025-06-07', '02:51:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
CREATE TABLE IF NOT EXISTS `semesters` (
  `Semester_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Year_Level_Id` int(11) DEFAULT NULL COMMENT 'Disabled',
  `Semester_name` varchar(255) NOT NULL,
  `Is_default` int(11) DEFAULT '0',
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Semester_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`Semester_Id`, `Year_Level_Id`, `Semester_name`, `Is_default`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, '1st Semester A.Y. 2025-2026', 1, '2025-05-19', '06:49:52', 1),
(2, 1, '2nd Semester A.Y. 2025-2026', 0, '2025-05-19', '07:11:56', 1),
(3, 2, '1st Semester A.Y. 2026-2027', 0, '2025-05-22', '09:12:21', 1),
(4, 2, '2nd Semester A.Y. 2026 -2027', 0, '2025-06-07', '02:50:36', 1),
(5, 3, '1st Semester A.Y. 2025 - 2026', 0, '2025-07-30', '08:54:59', 1),
(6, 3, '2nd Semester A.Y. 2025 - 2026', 0, '2025-09-20', '11:16:33', 1),
(7, NULL, 'Sample semester', 0, '2025-10-13', '09:54:00', 0),
(8, NULL, 'Sample semester', 0, '2025-10-18', '05:19:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `Sett_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sett_desc` varchar(255) NOT NULL,
  `Sett_val` text NOT NULL,
  `Last_update` timestamp NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Sett_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`Sett_Id`, `Sett_desc`, `Sett_val`, `Last_update`, `Status`) VALUES
(1, 'Evaluation_Instructions', '<p>Edited - - - - Please follow the instructions below to complete the survey:</p>\n\n<p><br />\n<strong>Confidentiality</strong>: Your responses are confidential and will only be used for the purpose of improving faculty performance.<br />\n<strong>Evaluation Criteria</strong>: Each question will ask you to evaluate various aspects of the faculty member&#39;s performance using a linear scale.<br />\n<strong>Linear Scale Rating:</strong> The linear scale ranges from 1 to 5, where:</p>\n\n<p><br />\n<strong>5</strong>&nbsp; indicates<strong> &quot;Outstanding&quot;</strong><br />\n<strong>4</strong>&nbsp; indicates <strong>&quot;Very Satisfactory&quot;</strong><br />\n<strong>3</strong>&nbsp; indicates <strong>&quot;Satisfactory&quot;</strong><br />\n<strong>2</strong>&nbsp; indicates <strong>&quot;Fair&quot;</strong><br />\n<strong>1</strong>&nbsp; indicates <strong>&quot;Poor&quot;</strong></p>\n\n<p><br />\n<strong>Objective Feedback</strong>: Please provide honest and objective feedback based on your experiences.<br />\n<strong>Submit</strong>: Once you have completed all questions, click the &quot;Submit&quot; button to finalize your responses.</p>\n', '2025-06-14 13:00:00', 1),
(2, 'Evaluation_popup', 'Enable', '2025-06-16 16:00:00', 1),
(3, 'Evaluation_popup_content', '<h3><strong>EDITED!</strong></h3>\n\n<p><strong>Evaluation shall be done personally by the students.</strong></p>\n\n<p>No student shall be allowed, under any circumstance, to authorize a fellow student to do the evaluation on their behalf.</p>\n\n<p>Authorizing a fellow student or allowing oneself to be authorized shall constitute an administrative offense and shall be subject to appropriate disciplinary action.</p>\n', '2025-06-16 16:00:00', 1),
(4, 'Company Name', 'Licom Academic Portal - edited', '2025-09-21 06:12:20', 1),
(5, 'Icon', '1758436109.png', '2025-09-21 06:28:29', 1),
(6, 'Login Background', '1758452238.png', '2025-09-21 10:57:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

DROP TABLE IF EXISTS `student_classes`;
CREATE TABLE IF NOT EXISTS `student_classes` (
  `Student_Class_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Class_Schedule_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Year_Level_Id` int(11) DEFAULT NULL,
  `Added_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Last_update` date DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Student_Class_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`Student_Class_Id`, `Class_Schedule_Id`, `Student_Id`, `Year_Level_Id`, `Added_by`, `Date_added`, `Time_added`, `Last_update`, `Status`) VALUES
(1, 1, 5, 0, 4, '2025-06-07', '09:37:13', '2025-06-07', 1),
(2, 4, 7, 0, 4, '2025-06-07', '10:04:46', '2025-10-07', 0),
(3, 4, 8, 0, 4, '2025-06-07', '10:04:52', '2025-06-07', 1),
(4, 4, 9, 0, 4, '2025-06-07', '10:04:55', '2025-06-07', 1),
(5, 2, 5, 0, 4, '2025-06-07', '10:05:07', '2025-10-13', 0),
(6, 2, 7, 0, 4, '2025-06-07', '10:05:11', '2025-06-07', 1),
(7, 2, 8, 0, 4, '2025-06-07', '10:05:13', '2025-06-07', 1),
(8, 4, 5, 0, 4, '2025-06-07', '10:06:21', '2025-06-07', 0),
(9, 4, 5, 0, 4, '2025-06-07', '10:26:30', '2025-06-07', 0),
(10, 1, 9, 0, 4, '2025-06-07', '01:22:07', '2025-06-07', 0),
(11, 5, 7, 0, 4, '2025-06-07', '01:23:55', '2025-06-07', 0),
(12, 3, 7, 0, 4, '2025-06-07', '01:26:28', '2025-06-07', 0),
(13, 3, 7, 0, 4, '2025-06-07', '01:27:54', '2025-06-07', 0),
(14, 1, 9, 0, 4, '2025-06-07', '02:45:07', '2025-06-07', 0),
(15, 1, 8, 0, 4, '2025-06-07', '02:45:26', '2025-06-07', 1),
(16, 6, 10, 0, 4, '2025-06-07', '02:46:34', '2025-06-07', 1),
(17, 6, 7, 0, 4, '2025-06-07', '02:46:38', '2025-06-07', 1),
(18, 6, 11, 0, 4, '2025-06-07', '02:46:41', '2025-06-07', 1),
(19, 7, 11, 0, 4, '2025-06-07', '02:52:56', '2025-06-07', 0),
(20, 2, 9, 0, 4, '2025-06-09', '09:07:37', '2025-06-09', 1),
(24, 4, 5, 0, 4, '2025-06-09', '09:26:55', '2025-06-09', 0),
(25, 8, 5, 0, 4, '2025-06-26', '08:56:29', '2025-06-26', 1),
(27, 2, 10, 0, 4, '2025-10-05', '11:30:19', '2025-10-05', 0),
(28, 2, 11, 0, 4, '2025-10-05', '11:30:19', '2025-10-05', 0),
(29, 2, 12, 0, 4, '2025-10-05', '11:30:19', '2025-10-05', 0),
(33, 2, 10, 0, 4, '2025-10-05', '02:17:11', '2025-10-05', 0),
(34, 2, 10, 0, 4, '2025-10-05', '02:17:31', '2025-10-14', 0),
(35, 2, 11, 0, 4, '2025-10-05', '02:17:31', '2025-10-13', 0),
(36, 2, 12, 0, 4, '2025-10-05', '02:17:31', '2025-10-06', 0),
(37, 2, 5, 3, 4, '2025-10-13', '10:43:39', '2025-10-13', 1),
(38, 11, 9, 1, 4, '2025-10-18', '04:23:28', '2025-10-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

DROP TABLE IF EXISTS `student_grades`;
CREATE TABLE IF NOT EXISTS `student_grades` (
  `Grade_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Semester_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `Midterm_grade` decimal(10,2) NOT NULL,
  `Tentative_final` decimal(10,2) NOT NULL,
  `Grade_val` decimal(10,2) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Evaluated_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Last_updated_date` timestamp NULL DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Grade_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_grades`
--

INSERT INTO `student_grades` (`Grade_Id`, `Semester_Id`, `Student_Id`, `Subject_Id`, `Midterm_grade`, `Tentative_final`, `Grade_val`, `Remarks`, `Evaluated_by`, `Date_added`, `Time_added`, `Last_updated_date`, `Status`) VALUES
(1, 1, 5, 2, '5.00', '0.00', '0.00', '9', 4, '2025-10-16', '11:18:35', '2025-10-09 17:44:03', 1),
(2, 1, 5, 1, '3.00', '2.50', '2.75', '1', 4, '2025-10-16', '11:17:43', '2025-10-16 03:01:32', 1),
(3, 1, 7, 1, '2.75', '2.50', '2.63', '1', 4, '2025-10-02', '04:16:55', '2025-10-16 03:01:32', 1),
(4, 1, 8, 3, '2.30', '3.00', '2.65', '1', 6, '2025-10-08', '05:24:55', '2025-10-16 03:20:24', 1),
(5, 1, 9, 3, '3.00', '2.25', '2.63', '1', 4, '2025-10-18', '04:28:12', '2025-10-16 03:20:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_year_level`
--

DROP TABLE IF EXISTS `student_year_level`;
CREATE TABLE IF NOT EXISTS `student_year_level` (
  `SYL_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Semester_Id` int(11) DEFAULT NULL,
  `Year_Level_Id` int(11) DEFAULT NULL,
  `Course_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Last_updated` timestamp NULL DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`SYL_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_year_level`
--

INSERT INTO `student_year_level` (`SYL_Id`, `Semester_Id`, `Year_Level_Id`, `Course_Id`, `Student_Id`, `Date_added`, `Time_added`, `Last_updated`, `Status`) VALUES
(1, 1, 3, 1, 5, '2025-09-26', '18:58:01', '2025-10-13 02:24:58', 1),
(3, 1, NULL, 2, 17, '2025-09-27', '10:12:40', NULL, 1),
(4, 2, NULL, 3, 20, '2025-09-27', '10:43:31', NULL, 1),
(5, NULL, 1, 1, 9, '2025-10-18', '04:23:22', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `Subject_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Course_Id` int(11) NOT NULL,
  `Subject_name` varchar(255) NOT NULL,
  `Subject_code` varchar(255) NOT NULL,
  `Units` varchar(255) DEFAULT NULL,
  `Classification` varchar(255) DEFAULT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Subject_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Subject_Id`, `Course_Id`, `Subject_name`, `Subject_code`, `Units`, `Classification`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, 'Data Structures and Algorithms', 'BSIT-DSA', NULL, NULL, '2025-05-18', '04:30:26', 1),
(2, 1, 'Cyber Security 101', 'BSIT-CS', '2', 'Laboratory', '2025-10-14', '05:38:04', 1),
(3, 7, 'Feynman 101', 'BSE-FEYN', NULL, NULL, '2025-05-18', '06:31:17', 1),
(4, 8, 'Sample Subject 1', 'SS1', NULL, NULL, '2025-06-07', '02:48:40', 1),
(5, 6, 'System Architecture and Design ', 'SAAD - CS01', '3', 'Laboratory', '2025-10-14', '05:17:37', 1),
(6, 1, 'AL3 - Project Management', 'AL3PM', '3', 'Lecture', '2025-10-14', '04:41:55', 1),
(7, 1, 'Cyber Security 101', 'BSIT-CS', '3', 'Lecture', '2025-10-18', '06:05:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(255) NOT NULL,
  `MName` varchar(255) DEFAULT NULL,
  `LName` varchar(255) NOT NULL,
  `Suffix` varchar(255) DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Civil_status` varchar(255) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_no` varchar(255) NOT NULL DEFAULT '',
  `Address` varchar(255) DEFAULT NULL,
  `Guardian` varchar(255) DEFAULT NULL,
  `G_relation` varchar(255) DEFAULT NULL,
  `G_contactno` varchar(255) DEFAULT NULL,
  `G_email` varchar(255) DEFAULT NULL,
  `G_occupation` varchar(255) DEFAULT NULL,
  `G_address` varchar(255) DEFAULT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Last_update` date NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `FName`, `MName`, `LName`, `Suffix`, `Birthdate`, `Civil_status`, `Sex`, `Nationality`, `Email`, `Phone_no`, `Address`, `Guardian`, `G_relation`, `G_contactno`, `G_email`, `G_occupation`, `G_address`, `Date_added`, `Time_added`, `Last_update`, `Status`) VALUES
(4, 'Richard', NULL, 'Montero', '', NULL, NULL, NULL, NULL, 'registrar1@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-12', '11:08:06', '2025-05-17', 1),
(5, 'Al', 'Montero', 'Conrado', NULL, '1998-12-20', 'Single', 'Male', 'Filipino', 'richarddel.altre@uratex.com.ph', '09631753678', 'GMA, Cavite', 'Rhea Montero', 'Mother', '09685218573', 'rhea.montero@gmail.com', 'Business Owner', 'GMA, Cavite', '2025-05-17', '09:58:35', '2025-10-25', 1),
(6, 'Jane', 'Howell', 'Doe', '', '1988-12-04', 'Single', 'Female', 'Filipino', 'johnhowelldoe@gmail.com', '09095442181', 'Sample address', 'Sample Sample - edited', 'Sample', '09634187848', 'Sample@gmail.com', 'Sample', 'Sample', '2025-05-25', '02:29:30', '2025-05-25', 1),
(7, 'Test', '', 'Student 1', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent1@gmail.com', '090909090909', 'lorem Ipsum', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 1),
(8, 'Test', '', 'Student 2', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent2@gmail.com', '090909090909', 'lorem Ipsum', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 1),
(9, 'Test', '', 'Student 3', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent3@gmail.com', '090909090909', 'lorem Ipsum', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 1),
(10, 'Test', '', 'Student 4', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent4@gmail.com', '090909090909', 'lorem Ipsum', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 1),
(11, 'Test', '', 'Student 5', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent5@gmail.com', '090909090909', 'lorem Ipsum', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 1),
(12, 'Test', '', 'Student 6', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent6@gmail.com', '090909090909', 'lorem Ipsum', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 1),
(13, 'Test - edited', '', 'Student 7', '', '2025-06-07', 'Single', 'Male', 'Filipino', 'teststudent7@gmail.com', '090909090909', 'lorem Ipsum - edited', 'Sample  guardian', 'Sample', '09090909099', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 2', '2025-06-07', '09:44:15', '2025-06-07', 0),
(14, 'Test', '', 'Instructor 1', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'test.instructor1@gmail.com', '0909090909099', 'lorem Ipsum', 'Sample Guardian', 'Sample', '090999090909', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 3', '2025-06-07', '09:49:20', '2025-06-07', 1),
(15, 'Test', '', 'Instructor 2', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'test.instructor2@gmail.com', '0909090909099', 'lorem Ipsum', 'Sample Guardian', 'Sample', '090999090909', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 3', '2025-06-07', '09:49:20', '2025-06-07', 1),
(16, 'Test', '', 'Instructor 3', NULL, '2025-06-07', 'Single', 'Male', 'Filipino', 'test.instructor3@gmail.com', '0909090909099', 'lorem Ipsum', 'Sample Guardian', 'Sample', '090999090909', 'sample.guardian@gmail.com', 'Sample', 'lorem Ipsum 3', '2025-06-07', '09:49:20', '2025-06-07', 1),
(17, 'Test', '', 'Student 8', NULL, '2025-06-09', 'Single', 'Male', 'Filipno', 'test.student8@gmail.com', '09090909099', 'Sample address', 'Guardian Firstname Guardian Lastname', 'Mother', '09090909099', 'guardian.email@gmail.com', 'Sample', 'Sample address 2', '2025-06-07', '02:42:29', '2025-06-07', 1),
(18, 'Admin ', NULL, 'User', NULL, NULL, 'Single', 'Male', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-23', '08:30:00', '0000-00-00', 1),
(19, 'Edited - Sample', '', 'Registrar 2', '', '2025-07-30', 'Single', 'Male', 'Filipino', 'registrar2@gmail.com', '0909090909', 'Lorem IPsum DOlor Sit AMet', 'Edited - Sample Guardian', 'Mother', '09090909090', 'sample.guardian@gmail.com', 'Sample', 'Lorem IPsum DOlor Sit AMetSa', '2025-07-30', '09:20:36', '2025-08-12', 1),
(20, 'Test', '', 'Student 9', NULL, '1998-12-20', 'Single', 'Male', 'Filipino', 'test.student9@gmail.com', '090909090909', 'Sample address for student 9', 'Sample Guardian 9', 'Mother', '0909090909', 'sample.guardian@gmail.com', 'Sample', 'Sample address for student 9', '2025-09-27', '10:43:31', '2025-09-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `year_levels`
--

DROP TABLE IF EXISTS `year_levels`;
CREATE TABLE IF NOT EXISTS `year_levels` (
  `Year_Level_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Year_name` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Year_Level_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_levels`
--

INSERT INTO `year_levels` (`Year_Level_Id`, `Year_name`, `Date_added`, `Time_added`, `Status`) VALUES
(1, '1st Year', '2025-09-20', '10:34:18', 1),
(2, '2nd Year', '2025-09-20', '10:59:54', 1),
(3, '3rd Year', '2025-09-20', '11:00:02', 1),
(4, '4th Year', '2025-09-20', '11:00:16', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

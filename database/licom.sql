-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 09:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

CREATE TABLE `accounts` (
  `Account_Id` int(11) NOT NULL,
  `Level_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` text NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_Id`, `Level_Id`, `User_Id`, `Username`, `Password`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 3, 5, 'C20255', 'student123', '2025-05-17', '09:58:35', 1),
(2, 2, 4, 'registrar1', 'admin123', '2025-05-22', '20:56:25', 1),
(3, 4, 6, 'B20256', 'admin123', '2025-05-25', '02:29:30', 1),
(4, 3, 7, 'C20257', 'student123', '2025-06-07', '09:44:15', 1),
(5, 3, 8, 'C20258', 'student123', '2025-06-07', '09:44:15', 1),
(6, 3, 9, 'C20259', 'student123', '2025-06-07', '09:44:15', 1),
(7, 3, 10, 'C202510', 'student123', '2025-06-07', '09:44:15', 1),
(8, 3, 11, 'C202511', 'student123', '2025-06-07', '09:44:15', 1),
(9, 3, 12, 'C202512', 'student123', '2025-06-07', '09:44:15', 1),
(10, 3, 13, 'C202513', 'student123', '2025-06-07', '09:44:15', 1),
(11, 4, 14, 'B202514', 'admin123', '2025-06-07', '09:49:20', 1),
(12, 4, 15, 'B202515', 'admin123', '2025-06-07', '09:49:20', 1),
(13, 4, 16, 'B202516', 'admin123', '2025-06-07', '09:49:20', 1),
(14, 3, 17, 'C202517', 'student123', '2025-06-07', '02:42:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_schedules`
--

CREATE TABLE `class_schedules` (
  `Class_Schedule_Id` int(11) NOT NULL,
  `Semester_Id` int(11) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `Room_Id` int(11) NOT NULL,
  `Instructor_Id` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `Time_start` time NOT NULL,
  `Time_end` time NOT NULL,
  `Date_added` date DEFAULT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_schedules`
--

INSERT INTO `class_schedules` (`Class_Schedule_Id`, `Semester_Id`, `Subject_Id`, `Room_Id`, `Instructor_Id`, `Day`, `Time_start`, `Time_end`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, 1, 1, 14, 1, '08:00:00', '09:30:00', NULL, '00:00:00', 0),
(2, 1, 2, 1, 6, 1, '10:30:00', '10:00:00', '2025-06-01', '02:49:52', 1),
(3, 1, 3, 1, 6, 1, '10:01:00', '11:30:00', '2025-06-01', '02:53:19', 1),
(4, 1, 3, 1, 6, 2, '09:30:00', '11:30:00', '2025-06-01', '02:53:43', 1),
(5, 1, 3, 2, 6, 1, '09:30:00', '11:30:00', '2025-06-07', '01:02:02', 1),
(6, 1, 1, 3, 16, 3, '09:00:00', '10:00:00', '2025-06-07', '02:46:22', 1),
(7, 4, 5, 10, 16, 5, '08:00:00', '09:30:00', '2025-06-07', '02:52:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_Id` int(11) NOT NULL,
  `Course_name` varchar(255) NOT NULL,
  `Course_code` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(8, 'Sample Course - edited', 'SC1', '2025-06-07', '02:48:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_grades`
--

CREATE TABLE `evaluation_grades` (
  `Eval_Grades_Id` int(11) NOT NULL,
  `Eval_Metric_Id` int(11) NOT NULL,
  `Metric_Val_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Evaluated_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_end` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_headers`
--

CREATE TABLE `evaluation_headers` (
  `Eval_Header_Id` int(11) NOT NULL,
  `Eval_header_name` varchar(255) NOT NULL,
  `Order_val` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation_headers`
--

INSERT INTO `evaluation_headers` (`Eval_Header_Id`, `Eval_header_name`, `Order_val`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Commitment', 2, '2025-06-14', '12:36:36', 1),
(3, 'Knowledge of Subject', 3, '2025-06-14', '12:38:08', 1),
(4, 'Teaching for Independent Learning', 4, '2025-06-14', '12:38:38', 1),
(5, 'Management of Learning - edited', 5, '2025-06-14', '12:38:53', 1),
(6, 'Sample Header 6', 6, '2025-06-14', '12:39:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_metrics`
--

CREATE TABLE `evaluation_metrics` (
  `Eval_Metric_Id` int(11) NOT NULL,
  `Eval_Header_Id` int(11) NOT NULL,
  `Metric_desc` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation_metrics`
--

INSERT INTO `evaluation_metrics` (`Eval_Metric_Id`, `Eval_Header_Id`, `Metric_desc`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, 'Prepares and submits updated syllabus on or before the schedule distribution and before the midterm examination', '2025-06-14', '01:33:19', 1),
(2, 1, 'Reports to the class regularly and punctually. ', '2025-06-14', '01:36:21', 1),
(3, 1, 'Makes self available to students beyond official time', '2025-06-14', '01:36:43', 1),
(4, 1, 'Regularly communicates with individual students, to check  whether topics are received and well understood to attain the objectives.', '2025-06-14', '01:36:51', 1),
(5, 1, 'Keeps accurate records of students\' performance and prompt submission of their grades on time. ', '2025-06-14', '01:37:01', 1),
(6, 3, 'edited  - Keeps accurate records of students\' performance and prompt submission of their grades on time. ', '2025-06-14', '01:37:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `file_attachments`
--

CREATE TABLE `file_attachments` (
  `File_Attachment_Id` int(11) NOT NULL,
  `Filename_path` text NOT NULL,
  `File_Type_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Added_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_types`
--

CREATE TABLE `file_types` (
  `File_Type_Id` int(11) NOT NULL,
  `File_type_name` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `Level_Id` int(11) NOT NULL,
  `Level_name` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `metric_values` (
  `Metric_Val_Id` int(11) NOT NULL,
  `Metric_val_no` int(11) NOT NULL,
  `Metric_val_desc` varchar(255) NOT NULL,
  `Metric_Q_desc` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metric_values`
--

INSERT INTO `metric_values` (`Metric_Val_Id`, `Metric_val_no`, `Metric_val_desc`, `Metric_Q_desc`, `Status`) VALUES
(3, 1, 'Poor', 'The faculty fails to meet job requirements. ', 1),
(4, 2, 'Fair', 'The performance needs some development to meet job requirements.', 1),
(5, 3, 'Satisfactory', 'The performance meets job requirements.', 1),
(6, 4, 'Very Satisfactory', 'The performance meets and often exceeds the job requirements.', 1),
(7, 5, 'Outstanding', 'The performance almost always exceeds the job requirements. The faculty is an exceptional role model.', 1),
(8, 6, 'Random', 'Lorem Ipsum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Room_Id` int(11) NOT NULL,
  `Room_name` varchar(255) NOT NULL,
  `Room_details` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `semesters` (
  `Semester_Id` int(11) NOT NULL,
  `Semester_name` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`Semester_Id`, `Semester_name`, `Date_added`, `Time_added`, `Status`) VALUES
(1, '1 Year 1st Semester A.Y. 2025-2026', '2025-05-19', '06:49:52', 1),
(2, '1 Year 2nd Semester A.Y. 2025-2026', '2025-05-19', '07:11:56', 1),
(3, '2 Year 1st Semester A.Y. 2026-2027', '2025-05-22', '09:12:21', 1),
(4, '2 Year 2nd Semester A.Y. 2026 -2027', '2025-06-07', '02:50:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `Sett_Id` int(11) NOT NULL,
  `Sett_desc` varchar(255) NOT NULL,
  `Sett_val` varchar(255) NOT NULL,
  `Last_update` date NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `Student_Class_Id` int(11) NOT NULL,
  `Class_Schedule_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Added_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Last_update` date NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`Student_Class_Id`, `Class_Schedule_Id`, `Student_Id`, `Added_by`, `Date_added`, `Time_added`, `Last_update`, `Status`) VALUES
(1, 1, 5, 4, '2025-06-07', '09:37:13', '2025-06-07', 1),
(2, 4, 7, 4, '2025-06-07', '10:04:46', '2025-06-07', 1),
(3, 4, 8, 4, '2025-06-07', '10:04:52', '2025-06-07', 1),
(4, 4, 9, 4, '2025-06-07', '10:04:55', '2025-06-07', 1),
(5, 2, 5, 4, '2025-06-07', '10:05:07', '2025-06-07', 1),
(6, 2, 7, 4, '2025-06-07', '10:05:11', '2025-06-07', 1),
(7, 2, 8, 4, '2025-06-07', '10:05:13', '2025-06-07', 1),
(8, 4, 5, 4, '2025-06-07', '10:06:21', '2025-06-07', 0),
(9, 4, 5, 4, '2025-06-07', '10:26:30', '2025-06-07', 0),
(10, 1, 9, 4, '2025-06-07', '01:22:07', '2025-06-07', 0),
(11, 5, 7, 4, '2025-06-07', '01:23:55', '2025-06-07', 0),
(12, 3, 7, 4, '2025-06-07', '01:26:28', '2025-06-07', 0),
(13, 3, 7, 4, '2025-06-07', '01:27:54', '2025-06-07', 0),
(14, 1, 9, 4, '2025-06-07', '02:45:07', '2025-06-07', 0),
(15, 1, 8, 4, '2025-06-07', '02:45:26', '2025-06-07', 1),
(16, 6, 10, 4, '2025-06-07', '02:46:34', '2025-06-07', 1),
(17, 6, 7, 4, '2025-06-07', '02:46:38', '2025-06-07', 1),
(18, 6, 11, 4, '2025-06-07', '02:46:41', '2025-06-07', 1),
(19, 7, 11, 4, '2025-06-07', '02:52:56', '2025-06-07', 0),
(20, 2, 9, 4, '2025-06-09', '09:07:37', '2025-06-09', 1),
(21, 2, 10, 4, '2025-06-09', '09:12:45', '2025-06-09', 0),
(22, 2, 11, 4, '2025-06-09', '09:12:59', '2025-06-09', 0),
(23, 2, 10, 4, '2025-06-09', '09:22:12', '2025-06-09', 0),
(24, 4, 5, 4, '2025-06-09', '09:26:55', '2025-06-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

CREATE TABLE `student_grades` (
  `Grade_Id` int(11) NOT NULL,
  `Semester_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `Grade_val` decimal(10,2) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Evaluated_by` int(11) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Subject_Id` int(11) NOT NULL,
  `Course_Id` int(11) NOT NULL,
  `Subject_name` varchar(255) NOT NULL,
  `Subject_code` varchar(255) NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Subject_Id`, `Course_Id`, `Subject_name`, `Subject_code`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 1, 'Data Structures and Algorithms', 'BSIT-DSA', '2025-05-18', '04:30:26', 1),
(2, 1, 'Cyber Security 101', 'BSIT-CS', '2025-05-18', '06:30:41', 1),
(3, 7, 'Feynman 101', 'BSE-FEYN', '2025-05-18', '06:31:17', 1),
(4, 8, 'Sample Subject 1', 'SS1', '2025-06-07', '02:48:40', 1),
(5, 6, 'System Architecture and Design ', 'SAAD - CS01', '2025-06-07', '02:50:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
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
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `FName`, `MName`, `LName`, `Suffix`, `Birthdate`, `Civil_status`, `Sex`, `Nationality`, `Email`, `Phone_no`, `Address`, `Guardian`, `G_relation`, `G_contactno`, `G_email`, `G_occupation`, `G_address`, `Date_added`, `Time_added`, `Last_update`, `Status`) VALUES
(4, 'Richard', NULL, 'Montero', '', NULL, NULL, NULL, NULL, 'registrar1@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-12', '11:08:06', '2025-05-17', 1),
(5, 'Al', 'Montero', 'Conrado', NULL, '1998-12-20', 'Single', 'Male', 'Filipino', 'monterorichard09@gmail.com', '09631753678', 'GMA, Cavite', 'Rhea Montero', 'Mother', '09685218573', 'rhea.montero@gmail.com', 'Business Owner', 'GMA, Cavite', '2025-05-17', '09:58:35', '2025-06-07', 1),
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
(17, 'Test', '', 'Student 8', NULL, '2025-06-09', 'Single', 'Male', 'Filipno', 'test.student8@gmail.com', '09090909099', 'Sample address', 'Guardian Firstname Guardian Lastname', 'Mother', '09090909099', 'guardian.email@gmail.com', 'Sample', 'Sample address 2', '2025-06-07', '02:42:29', '2025-06-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_Id`);

--
-- Indexes for table `class_schedules`
--
ALTER TABLE `class_schedules`
  ADD PRIMARY KEY (`Class_Schedule_Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `evaluation_grades`
--
ALTER TABLE `evaluation_grades`
  ADD PRIMARY KEY (`Eval_Grades_Id`);

--
-- Indexes for table `evaluation_headers`
--
ALTER TABLE `evaluation_headers`
  ADD PRIMARY KEY (`Eval_Header_Id`);

--
-- Indexes for table `evaluation_metrics`
--
ALTER TABLE `evaluation_metrics`
  ADD PRIMARY KEY (`Eval_Metric_Id`);

--
-- Indexes for table `file_attachments`
--
ALTER TABLE `file_attachments`
  ADD PRIMARY KEY (`File_Attachment_Id`);

--
-- Indexes for table `file_types`
--
ALTER TABLE `file_types`
  ADD PRIMARY KEY (`File_Type_Id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`Level_Id`);

--
-- Indexes for table `metric_values`
--
ALTER TABLE `metric_values`
  ADD PRIMARY KEY (`Metric_Val_Id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Room_Id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`Semester_Id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`Sett_Id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`Student_Class_Id`);

--
-- Indexes for table `student_grades`
--
ALTER TABLE `student_grades`
  ADD PRIMARY KEY (`Grade_Id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Subject_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Account_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `class_schedules`
--
ALTER TABLE `class_schedules`
  MODIFY `Class_Schedule_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `evaluation_grades`
--
ALTER TABLE `evaluation_grades`
  MODIFY `Eval_Grades_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_headers`
--
ALTER TABLE `evaluation_headers`
  MODIFY `Eval_Header_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `evaluation_metrics`
--
ALTER TABLE `evaluation_metrics`
  MODIFY `Eval_Metric_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `file_attachments`
--
ALTER TABLE `file_attachments`
  MODIFY `File_Attachment_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_types`
--
ALTER TABLE `file_types`
  MODIFY `File_Type_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `Level_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metric_values`
--
ALTER TABLE `metric_values`
  MODIFY `Metric_Val_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Room_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `Semester_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `Sett_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `Student_Class_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_grades`
--
ALTER TABLE `student_grades`
  MODIFY `Grade_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `Subject_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 11:00 AM
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
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Time_start` time NOT NULL,
  `Time_end` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `MName` varchar(255) DEFAULT NULL,
  `LName` varchar(255) NOT NULL,
  `Birthdate` date DEFAULT NULL,
  `Civil_status` varchar(255) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_no` varchar(255) NOT NULL DEFAULT '',
  `Address` varchar(255) DEFAULT NULL,
  `Guardian` varchar(255) DEFAULT NULL,
  `G_relation` varchar(255) DEFAULT NULL,
  `G_contactno` int(11) DEFAULT NULL,
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

INSERT INTO `users` (`User_Id`, `FName`, `MName`, `LName`, `Birthdate`, `Civil_status`, `Sex`, `Nationality`, `Email`, `Phone_no`, `Address`, `Guardian`, `G_relation`, `G_contactno`, `G_email`, `G_occupation`, `G_address`, `Date_added`, `Time_added`, `Last_update`, `Status`) VALUES
(4, 'Richard del', 'Sanidad', 'Altre', '1998-12-20', 'Single', 'Single', 'Filipno/Spanish', 'monterorichard09@gmail.com', '09631753678', 'Masipag, GMA, Cavite, 4117', 'Aurelia Altre', 'Mother', 2147483647, 'aurelia.altre@gmail.com', 'Business Owner', 'Masipag, GMA, Cavite, 4117', '2025-05-12', '11:08:06', '2025-05-12', 1);

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
  MODIFY `Account_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_schedules`
--
ALTER TABLE `class_schedules`
  MODIFY `Class_Schedule_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_Id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Room_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `Semester_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `Student_Class_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_grades`
--
ALTER TABLE `student_grades`
  MODIFY `Grade_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `Subject_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 01:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `ContactFormID` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Content` longtext NOT NULL,
  `UserID` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`ContactFormID`, `Subject`, `Content`, `UserID`, `Date`) VALUES
(8, 'dsd', 'sdfsdfsdf', 3, '2021-02-14 10:09:07'),
(9, 'ADFADFA', 'AFDADF', 3, '2021-02-14 10:10:02'),
(10, 'sdsag', 'sdgsagasg', 3, '2021-02-14 10:11:08'),
(11, 'Probleme me register', 'nuk mund te regjistrohem', 3, '2021-02-14 11:37:01'),
(14, 'Problem me konektim', '123123', 8, '2021-02-14 20:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `Course_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `Course_Name`) VALUES
(1, 'Early Math'),
(4, 'Kindergarten'),
(5, '1st-8th grade Math'),
(6, 'Arithmetic'),
(7, 'Basic geometry'),
(8, 'Pre-algebra'),
(9, 'Algebra basics'),
(10, 'Algebra 1'),
(11, 'High school geometry'),
(12, 'Algebra 2'),
(13, 'Trigonometry'),
(14, 'Statistics and probability'),
(15, 'High school statistics'),
(16, 'Precalculus'),
(17, 'Differential Calculus'),
(18, 'Integral Calculus'),
(19, 'Calculus 1'),
(20, 'Calculus 2'),
(21, 'Differential equations'),
(22, 'Linear algebra'),
(23, 'Algebra 1'),
(24, 'Algebra 2'),
(25, 'Geometry'),
(26, 'High School Biology'),
(27, 'College Biology'),
(28, 'College Chemistry'),
(29, 'Oragnic Chemistry'),
(30, 'High School Physics'),
(31, 'College Physics'),
(32, 'Cosmology and Astronomy'),
(33, 'Electrical engineering'),
(34, 'Big History'),
(35, 'World History-Origins'),
(36, 'US History'),
(37, 'US Government and Civis'),
(38, 'Art History'),
(39, 'StoryTelling'),
(40, 'World History'),
(41, 'MacroEconomics'),
(42, 'MicroEconomics'),
(43, 'Finance and Capital Markets'),
(44, 'Hour of Code'),
(45, 'Computer Programming'),
(46, 'Computers and the Internet'),
(47, 'College Computer Science Principles'),
(48, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `E_Mail` varchar(255) NOT NULL,
  `Password` longtext NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `First_Name`, `Last_Name`, `Username`, `E_Mail`, `Password`, `Role`) VALUES
(1, 'Admin', 'Admin', 'admin01', 'admin01@gmail.com', 'Admin01@', 1),
(2, 'Admin02', 'Admin02', 'admin02', 'admin02@gmail.com', 'Admin02@', 1),
(3, 'filan1', 'fisteku1', 'filan1', 'filan1@gmail.com', 'Filan1@34', 0),
(8, 'filan3', 'fisteku3', 'filan3', 'filan3@gmail.com', 'Filan1@34', 0),
(9, 'filan4', 'fisteku4', 'filan4', 'filan4@gmail.com', 'Filan1@34', 0),
(10, 'filan5', 'filan5', 'filan5', 'filan5@gmail.com', 'Filan1@34', 0),
(11, 'filan7', 'filan7', 'filan7', 'filan7@gmail.com', 'Filan1@34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `User_Course_ID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`User_Course_ID`, `CourseID`, `User_ID`, `Date`) VALUES
(68, 9, 3, '2021-02-14 11:30:53'),
(69, 17, 3, '2021-02-14 11:30:57'),
(70, 19, 3, '2021-02-14 11:31:00'),
(72, 6, 3, '2021-02-14 20:20:31'),
(73, 11, 9, '2021-02-14 20:23:35'),
(74, 9, 10, '2021-02-14 20:32:34'),
(76, 7, 8, '2021-02-14 20:35:08'),
(77, 9, 8, '2021-02-14 20:36:36'),
(78, 6, 11, '2021-02-14 20:42:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`ContactFormID`),
  ADD KEY `UserIDForeignKey` (`UserID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`User_Course_ID`),
  ADD KEY `CourseForeginKey` (`CourseID`),
  ADD KEY `UserForeignKey` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `ContactFormID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `User_Course_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contactform`
--
ALTER TABLE `contactform`
  ADD CONSTRAINT `UserIDForeignKey` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `CourseForeginKey` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`),
  ADD CONSTRAINT `UserForeignKey` FOREIGN KEY (`User_ID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

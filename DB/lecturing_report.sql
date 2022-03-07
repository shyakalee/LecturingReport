-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 01:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecturing_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(10) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `email`, `phone`, `password`, `active`) VALUES
(1, 'MUGISHA test', 'Gaspaly', 'gaspal@gmail.com', '123', '123', 1),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, 'last', 'me', 'gaspal@gmail.com', '123456', '123456', 0),
(6, 'last one', 'me one', 'gaspal@gmail.com', '1234567890', '1234567890', 0),
(7, 'asd', 'asd', 'jajajaden01@gmail.com', '2342', '2342', 0),
(8, 'jksdfhdj', 'hjkhvfdg', 'jajajaden01@gmail.com', '4564', '4564', 0),
(9, 'User 2', 'test', 'user@gmail.com', '1234567890', '123', 1),
(10, 'dfg', 'sdf', 'jajajaden01@gmail.com', '3445676543222', '34456765432222', 0),
(11, 'up', 'date', 'update@gmail.com', '12345', '12345', 0),
(12, 'kaka', 'brazil', 'kaka@gmail.com', '0788234566', '0788234566', 0),
(13, 'me', 'test', 'kaka@gmail.com', '3453453', '123', 1),
(14, 'ja', 'jasweb', 'jajajaden01@gmail.com', '12333453', '12333453', 0);

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` bigint(10) NOT NULL,
  `leader_id` bigint(10) NOT NULL,
  `depart_id` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date_time` varchar(30) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `leader_id`, `depart_id`, `level`, `title`, `content`, `date_time`, `active`) VALUES
(1, 1, 1, 5, 'Remedial News', 'General interview guide approach: Intended to ensure that the same general areas of information are collected from each interviewee; this provides more focus than the conversational approach, but still allows a degree of freedom and adaptability in getting the information from the interviewe.', '04-08-2018 11:24 AM', 1),
(2, 1, 1, 1, 'Registration', 'Informal, Conversational interview: No predetermined questions are asked, in order to remain as open and adaptable as possible to the interviewee’s nature and priorities; during the interview the interviewer “goes with the flow”.', '05-08-2018 10:58 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `credit` int(11) NOT NULL,
  `lecture` bigint(10) NOT NULL,
  `depart` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `credit`, `lecture`, `depart`, `level`, `active`) VALUES
(1, 'C++', 10, 1, 1, 2, 1),
(2, 'Computer Graphic', 10, 1, 1, 2, 1),
(3, 'GIS info', 10, 1, 1, 1, 1),
(4, 'Web Design', 10, 1, 1, 2, 1),
(5, 'Local Financial', 10, 1, 3, 2, 1),
(6, 'Digital circuit', 10, 1, 4, 2, 1),
(7, 'Database Management System', 10, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `levels` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `name`, `levels`, `active`) VALUES
(1, 'Computer Science', 4, 1),
(2, 'Information Technology', 4, 1),
(3, 'Information Management System', 4, 1),
(4, 'Computer Engineering', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE `leader` (
  `id` bigint(10) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`id`, `f_name`, `l_name`, `email`, `phone`, `depart`, `password`, `active`) VALUES
(1, 'GAHAMANYI', 'Joseph', 'joseph@gmail.com', '0782234567', 1, '777', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` bigint(10) NOT NULL,
  `degree` varchar(5) CHARACTER SET utf8 NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `degree`, `f_name`, `l_name`, `email`, `phone`, `password`, `gender`, `depart`, `active`) VALUES
(1, 'Dr', 'GAHAMANYI', 'Joseph', 'joseph@gmail.com', '1234', '1234', 'M', 1, 1),
(2, 'Prof', 'Ntaganda', 'Jean Marie', 'ntaganda@gmail.com', '123', '123', 'M', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecturing`
--

CREATE TABLE `lecturing` (
  `id` bigint(10) NOT NULL,
  `depart_id` bigint(10) NOT NULL,
  `student_id` bigint(10) NOT NULL,
  `course_id` bigint(10) NOT NULL,
  `date_time` varchar(20) CHARACTER SET utf8 NOT NULL,
  `duration` varchar(10) CHARACTER SET utf8 NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(500) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturing`
--

INSERT INTO `lecturing` (`id`, `depart_id`, `student_id`, `course_id`, `date_time`, `duration`, `content`, `comment`, `active`) VALUES
(1, 1, 1, 1, '2018-04-10T07:0', '3h', 'It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability. It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovat', '', 1),
(2, 1, 1, 7, '2018-05-20T08:30', '3h', 'It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability. It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovat', 'Not agree !', 1),
(3, 1, 1, 4, '2018-08-15T08:30', '3h', 'By the observation, the researcher notes by his/her own eyes what is done in reality.   It can bring some modifications on the results got by other techniques. \r\n\r\nCat on /20', 'No Comment !', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(10) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `f_name`, `l_name`, `email`, `phone`, `depart`, `level`, `password`, `active`) VALUES
(1, 'MUGISHA', 'Fiston', 'fiston@gmail.com', '123', 1, 2, '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturing`
--
ALTER TABLE `lecturing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturing`
--
ALTER TABLE `lecturing`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

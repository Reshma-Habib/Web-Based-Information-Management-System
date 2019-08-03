-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 08:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `file`) VALUES
(6, 'file-1563386504-501606241.jpg'),
(7, 'file-1563386509-124599267.jpg'),
(8, 'file-1563386513-198596994.jpg'),
(11, 'file-1563889408-380188940.jpg'),
(12, 'file-1563889428-185658835.jpg'),
(13, 'file-1563889595-35893539.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `gender`) VALUES
(7, 'FASHION-house', 122334, 'eeee', 'eeee', 'Male'),
(8, 'FATEMATULL ALAM', 978632, 'gyyy@gmail.com', 'qerer', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `dform`
--

CREATE TABLE `dform` (
  `id` int(5) NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dform`
--

INSERT INTO `dform` (`id`, `file`) VALUES
(3, 'file-1563462828-248671332.docx');

-- --------------------------------------------------------

--
-- Table structure for table `hnotice`
--

CREATE TABLE `hnotice` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hnotice`
--

INSERT INTO `hnotice` (`id`, `name`) VALUES
(0, 'The National University of Bangladesh has published the CSE 1st Semester examination Routine 2019');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`, `uname`, `psw`) VALUES
('', 'Admin', 'Admin', '', ''),
('1', '', '', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `time`, `title`, `description`, `file`) VALUES
(25, 'New Course Outline', '2019-07-10 11:46:00', '2017-18 New course outline', '', 'file-1562759565-901804255.doc'),
(26, 'NMUC_CSE_CLUB', '2019-07-10 12:08:00', 'à¦°à§‡à¦œà¦¿à¦¸à§à¦Ÿà§à¦°à§‡à¦¶à¦¨ à¦à¦° à¦¶à§‡à¦· à¦¤à¦¾à¦°à¦¿à¦–à¦ƒà§©à§¦ à¦œà§à¦¨,à§¨à§¦à§§à§¯\r\nà¦•à§à¦²à¦¾à¦¸ à¦¶à§à¦°à§à¦ƒ à§« à¦œà§à¦²à¦¾à¦‡,à§¨à§¦à§§à§¯\r\nà¦¸à¦®à§Ÿà¦ƒ à¦¦à§à¦ªà§à¦° à§¨à¦Ÿà¦¾- à¦¬à¦¿à¦•à¦¾à¦² à§«à¦Ÿà¦¾ ( à¦ªà§à¦°à¦¤à¦¿ à¦¶à§à¦•à§à¦° à¦à¦¬à¦‚ à¦¶à¦¨à¦¿à¦¬à¦¾à¦° ) \r\nà¦¯à§‹à¦—à¦¾à¦¯à§‹à¦—à¦ƒ à¦®à¦¾à¦¹à¦®à§à¦¦à§à¦² à¦¹à¦¾à¦¸à¦¾à¦¨ à¦°à¦¿à¦œà¦­à§€\r\nà¦¬à¦¿à¦­à¦¾à¦—à§€à§Ÿ à¦ªà§à¦°à¦§à¦¾à¦¨\r\nà¦¸à¦¿à¦à¦¸à¦‡\r\nà¦¨à¦¿à¦‰ à¦®à¦¡à§‡à¦² à¦¡à¦¿à¦—à§à¦°à§€ à¦•à¦²à§‡à¦œ \r\nà§¦à§§à§¬à§§à§­à§¯à§¦à§­à§§à§¦à§§', '', 'file-1562760523-652286972.jpg'),
(27, 'à§©à§Ÿ à¦¬à¦°à§à¦·- à§«à¦® à¦¸à§‡à¦®à¦¿à¦¸à§à¦Ÿà¦¾à¦° à¦à¦° à¦•à§à¦²à¦¾à¦¸ à¦°à§à¦Ÿà¦¿à¦¨', '2019-06-18 08:55:00', 'à§©à§Ÿ à¦¬à¦°à§à¦·- à§«à¦® à¦¸à§‡à¦®à¦¿à¦¸à§à¦Ÿà¦¾à¦° à¦à¦° à¦•à§à¦²à¦¾à¦¸ à¦°à§à¦Ÿà¦¿à¦¨', '', 'file-1562771265-189564694.jpg'),
(28, 'Vacation Notice', '2019-05-15 06:30:00', 'Vacation Notice', '', 'file-1562771423-697295899.jpg'),
(29, 'Amission', '2019-07-10 08:03:00', 'Admission', '', 'file-1563468067-72114282.docx'),
(31, '1st Semester examination Routine 2019', '2019-07-15 14:30:00', 'The National University of Bangladesh has published the CSE 1st Semester examination Routine 2019', '', 'file-1563992506-452599911.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sresult`
--

CREATE TABLE `sresult` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(100) NOT NULL,
  `subject1` varchar(100) NOT NULL,
  `gpa1` varchar(5) NOT NULL,
  `gpa2` varchar(5) NOT NULL,
  `gpa3` varchar(5) NOT NULL,
  `gpa4` varchar(5) NOT NULL,
  `gpa5` varchar(5) NOT NULL,
  `gpa6` varchar(5) NOT NULL,
  `gpa7` varchar(5) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `subject2` varchar(100) NOT NULL,
  `subject3` varchar(100) NOT NULL,
  `subject4` varchar(100) NOT NULL,
  `subject5` varchar(100) NOT NULL,
  `subject6` varchar(100) NOT NULL,
  `subject7` varchar(100) NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sresult`
--

INSERT INTO `sresult` (`id`, `name`, `roll`, `semester`, `session`, `subject1`, `gpa1`, `gpa2`, `gpa3`, `gpa4`, `gpa5`, `gpa6`, `gpa7`, `cgpa`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `file`) VALUES
(2, 'kibria', '2456', '1st semester', '2014-15', 'Structured Programming Language', 'C', 'C+', 'B-', 'B', 'A-', 'A-', 'A', '2.90', 'Structured Programming Language Lab', 'Electrical and Electronic Circuit', 'Electrical and Electronic Circuit Lab', 'Calculus', 'Physics', 'English', ''),
(3, 'Raisul Islam', '1234', '1st semester', '2014-15', 'Structured Programming Language', 'B', 'A+', 'B+', 'A+', 'C+', 'A', 'A-', '3.40', 'Structured Programming Language Lab', 'Electrical and Electronic Circuit', 'Electrical and Electronic Circuit Lab', 'Calculus', 'Physics', 'English', '');

-- --------------------------------------------------------

--
-- Table structure for table `stdinfo`
--

CREATE TABLE `stdinfo` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(255) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdinfo`
--

INSERT INTO `stdinfo` (`Id`, `Name`, `Department`, `Semester`, `Email`, `Phone`, `Gender`, `Address`) VALUES
(2, 'Sharmin Jahan Setu', 'CSE', '8th', 'example@gmail.com', 0, 'Female', 'jigatola'),
(3, 'Farin Alam', 'CSE', '8th', 'example@gmail.com', 0, 'Female', 'jigatola'),
(4, 'Reshma Habib', 'CSE', '8th', 'example@gmail.com', 0, 'Female', 'jigatola'),
(5, 'Arobi Akhter', 'CSE', '', 'example@gmail.com', 0, 'Female', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` text NOT NULL,
  `institute` varchar(18) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(10000) NOT NULL,
  `sub` text NOT NULL,
  `fname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `institute`, `semester`, `phone`, `gender`, `email`, `file`, `sub`, `fname`) VALUES
('FATEMATULL ', 'NMUC', '3rd semest', 123456789, 'Male', 'gyyy@gmail.com', 'file-1562511173-618202246.pdf', 'DLD', 'Lecture5-Karnaugh Map'),
('farin', 'NMUC', '8th semest', 86, 'Male', 'unicorn2@gmail.com', 'file-1562519615-830491806.docx', 'Network security', 'cns'),
('Raisul Islam', 'NMUC', '1st semest', 8634567, 'Male', 'wwwww@gmail.com', 'file-1562510967-280253866.docx', 'programming language', 'There is a subtle difference between data and information');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dform`
--
ALTER TABLE `dform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hnotice`
--
ALTER TABLE `hnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sresult`
--
ALTER TABLE `sresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdinfo`
--
ALTER TABLE `stdinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `sresult`
--
ALTER TABLE `sresult`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stdinfo`
--
ALTER TABLE `stdinfo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 08:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(8) NOT NULL,
  `name_activity` varchar(255) CHARACTER SET utf8 NOT NULL,
  `detail_activity` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `start_activity` date NOT NULL,
  `end_activity` date NOT NULL,
  `timestart_activity` int(11) NOT NULL,
  `timeend_activity` int(3) NOT NULL,
  `student_activity` varchar(11) CHARACTER SET utf8 NOT NULL,
  `term` int(1) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `name_activity`, `detail_activity`, `status`, `start_activity`, `end_activity`, `timestart_activity`, `timeend_activity`, `student_activity`, `term`, `year`) VALUES
(0, '', '0', '0', '0000-00-00', '0000-00-00', 0, 0, '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(8) NOT NULL,
  `name_student` varchar(100) NOT NULL,
  `year_activity` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `name_student`, `year_activity`, `email`, `faculty`, `branch`, `tel`) VALUES
(58111410, 'นายโกเมศ รักชุม', 4, 'gusdeknoi@gmail.com', 'สารสนเทศศาสตร์', 'วิศวกรรมซอฟต์แวร์', '0812345678'),
(59123570, 'นายอารีฟีน กุลดี', 3, 'feenkundee@gmail.com', 'สารสนเทศศาสตร์', 'วิศวกรรมซอฟต์แวร์', '0630833136'),
(59145003, 'นายอัสมาวี ลาเตะ', 3, 'tqi11@nvo0wt1ius1bni.com', 'สารสนเทศศาสตร์', 'วิศวกรรมซอฟต์แวร์', '0897312287');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

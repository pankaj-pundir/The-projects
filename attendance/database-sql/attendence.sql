-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2019 at 12:59 PM
-- Server version: 5.1.67-andiunpam
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer_graphics`
--

CREATE TABLE IF NOT EXISTS `computer_graphics` (
  `student_id` varchar(20) NOT NULL,
  `281218` varchar(20) NOT NULL,
  `1111` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_graphics`
--

INSERT INTO `computer_graphics` (`student_id`, `281218`, `1111`) VALUES
('BT16CSE001', '1', ''),
('BT16CSE002', '1', ''),
('BT16CSE003', '1', ''),
('BT16CSE004', '0', ''),
('BT16CSE005', '0', ''),
('BT16CSE006', '0', ''),
('BT16CSE007', '1', ''),
('BT16CSE008', '1', ''),
('BT16CSE009', '0', '1'),
('BT16CSE010', '0', ''),
('BT16CSE011', '1', ''),
('BT16CSE012', '1', ''),
('BT16CSE013', '1', ''),
('BT16CSE014', '1', ''),
('BT16CSE015', '1', ''),
('BT16CSE016', '1', ''),
('BT16CSE017', '1', ''),
('BT16CSE018', '', ''),
('BT16CSE019', '', ''),
('BT16CSE020', '', ''),
('BT16CSE021', '', ''),
('BT16CSE022', '', ''),
('BT16CSE023', '', ''),
('BT16CSE024', '', ''),
('BT16CSE025', '', ''),
('BT16CSE026', '', ''),
('BT16CSE027', '', ''),
('BT16CSE028', '', ''),
('BT16CSE029', '', ''),
('BT16CSE030', '', ''),
('BT16CSE031', '', ''),
('BT16CSE032', '', ''),
('BT16CSE033', '', ''),
('BT16CSE034', '', ''),
('BT16CSE035', '', ''),
('BT16CSE036', '', ''),
('BT16CSE037', '', ''),
('BT16CSE038', '', ''),
('BT16CSE039', '', ''),
('BT16CSE040', '', ''),
('BT16CSE041', '', ''),
('BT16CSE042', '', ''),
('BT16CSE043', '', ''),
('BT16CSE044', '', ''),
('BT16CSE045', '', ''),
('BT16CSE046', '', ''),
('BT16CSE047', '', ''),
('BT16CSE048', '', ''),
('BT16CSE049', '', ''),
('BT16CSE050', '', ''),
('BT16CSE051', '', ''),
('BT16CSE052', '', ''),
('BT16CSE053', '', ''),
('BT16CSE054', '', ''),
('BT16CSE055', '', ''),
('BT16CSE056', '', ''),
('BT16CSE057', '', ''),
('BT16CSE058', '', ''),
('BT16CSE059', '', ''),
('BT16CSE060', '', ''),
('BT16CSE061', '', ''),
('BT16CSE062', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer_network`
--

CREATE TABLE IF NOT EXISTS `computer_network` (
  `student_id` varchar(20) NOT NULL,
  `1111dsf` varchar(20) NOT NULL,
  `291218` varchar(20) NOT NULL,
  `281218` varchar(20) NOT NULL,
  `1111` varchar(20) NOT NULL,
  `121212` varchar(20) NOT NULL,
  `311218` varchar(20) NOT NULL,
  `010119` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_network`
--

INSERT INTO `computer_network` (`student_id`, `1111dsf`, `291218`, `281218`, `1111`, `121212`, `311218`, `010119`) VALUES
('BT16CSE001', '1', '1', '1', '', '', '1', ''),
('BT16CSE002', '1', '0', '1', '', '', '1', ''),
('BT16CSE003', '1', '1', '0', '', '', '0', ''),
('BT16CSE004', '1', '1', '', '', '', '0', ''),
('BT16CSE005', '1', '1', '', '', '', '1', ''),
('BT16CSE006', '', '0', '', '', '', '1', ''),
('BT16CSE007', '', '1', '', '', '', '', ''),
('BT16CSE008', '', '0', '', '', '', '', ''),
('BT16CSE009', '', '1', '', '1', '', '', ''),
('BT16CSE010', '', '1', '', '', '', '1', ''),
('BT16CSE011', '', '1', '', '', '', '', ''),
('BT16CSE012', '', '1', '', '', '', '', ''),
('BT16CSE013', '', '1', '', '', '', '', ''),
('BT16CSE014', '', '1', '', '', '', '', ''),
('BT16CSE015', '', '1', '', '', '', '', ''),
('BT16CSE016', '', '', '', '', '', '', ''),
('BT16CSE017', '', '', '', '', '', '', ''),
('BT16CSE018', '', '', '', '', '', '', ''),
('BT16CSE019', '', '', '', '', '', '', ''),
('BT16CSE020', '', '', '', '', '', '', ''),
('BT16CSE021', '', '', '', '', '', '', ''),
('BT16CSE022', '', '', '', '', '', '', ''),
('BT16CSE023', '', '', '', '', '', '', ''),
('BT16CSE024', '', '', '', '', '', '', ''),
('BT16CSE025', '', '', '', '', '', '', ''),
('BT16CSE026', '', '', '', '', '', '', ''),
('BT16CSE027', '', '', '', '', '', '', ''),
('BT16CSE028', '', '', '', '', '', '', ''),
('BT16CSE029', '', '', '', '', '', '', ''),
('BT16CSE030', '', '', '', '', '', '', ''),
('BT16CSE031', '', '', '', '', '', '', ''),
('BT16CSE032', '', '', '', '', '', '', ''),
('BT16CSE033', '', '', '', '', '', '', ''),
('BT16CSE034', '', '', '', '', '', '', ''),
('BT16CSE035', '', '', '', '', '', '', ''),
('BT16CSE036', '', '', '', '', '', '', ''),
('BT16CSE037', '', '', '', '', '', '', ''),
('BT16CSE038', '', '', '', '', '', '', ''),
('BT16CSE039', '', '', '', '', '', '', ''),
('BT16CSE040', '', '', '', '', '', '', ''),
('BT16CSE041', '', '', '', '', '', '', ''),
('BT16CSE042', '', '', '', '', '', '', ''),
('BT16CSE043', '', '', '', '', '', '', ''),
('BT16CSE044', '', '', '', '', '', '', ''),
('BT16CSE045', '', '', '', '', '', '', ''),
('BT16CSE046', '', '', '', '', '', '', ''),
('BT16CSE047', '', '', '', '', '', '', ''),
('BT16CSE048', '', '', '', '', '', '', ''),
('BT16CSE049', '', '', '', '', '', '', ''),
('BT16CSE050', '', '', '', '', '', '', ''),
('BT16CSE051', '', '', '', '', '', '', ''),
('BT16CSE052', '', '', '', '', '', '', ''),
('BT16CSE053', '', '', '', '', '', '', ''),
('BT16CSE054', '', '', '', '', '', '', ''),
('BT16CSE055', '', '', '', '', '', '', ''),
('BT16CSE056', '', '', '', '', '', '', ''),
('BT16CSE057', '', '', '', '', '', '', ''),
('BT16CSE058', '', '', '', '', '', '', ''),
('BT16CSE059', '', '', '', '', '', '', ''),
('BT16CSE060', '', '', '', '', '', '', ''),
('BT16CSE061', '', '', '', '', '', '', ''),
('BT16CSE062', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv_image_processing`
--

CREATE TABLE IF NOT EXISTS `cv_image_processing` (
  `student_id` varchar(20) NOT NULL,
  `1111` varchar(20) NOT NULL,
  `311218` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv_image_processing`
--

INSERT INTO `cv_image_processing` (`student_id`, `1111`, `311218`) VALUES
('BT16CSE001', '', ''),
('BT16CSE002', '', ''),
('BT16CSE003', '', ''),
('BT16CSE004', '', ''),
('BT16CSE005', '', ''),
('BT16CSE006', '', ''),
('BT16CSE007', '', ''),
('BT16CSE008', '', ''),
('BT16CSE009', '', '1'),
('BT16CSE010', '', ''),
('BT16CSE011', '', ''),
('BT16CSE012', '', ''),
('BT16CSE013', '', ''),
('BT16CSE014', '', ''),
('BT16CSE015', '', ''),
('BT16CSE016', '', ''),
('BT16CSE017', '', ''),
('BT16CSE018', '', ''),
('BT16CSE019', '', ''),
('BT16CSE020', '', ''),
('BT16CSE021', '', ''),
('BT16CSE022', '', ''),
('BT16CSE023', '', ''),
('BT16CSE024', '', ''),
('BT16CSE025', '', ''),
('BT16CSE026', '', ''),
('BT16CSE027', '', ''),
('BT16CSE028', '', ''),
('BT16CSE029', '', ''),
('BT16CSE030', '', ''),
('BT16CSE031', '', ''),
('BT16CSE032', '', ''),
('BT16CSE033', '', ''),
('BT16CSE034', '', ''),
('BT16CSE035', '', ''),
('BT16CSE036', '', ''),
('BT16CSE037', '', ''),
('BT16CSE038', '', ''),
('BT16CSE039', '', ''),
('BT16CSE040', '', ''),
('BT16CSE041', '', ''),
('BT16CSE042', '', ''),
('BT16CSE043', '', ''),
('BT16CSE044', '', ''),
('BT16CSE045', '', ''),
('BT16CSE046', '', ''),
('BT16CSE047', '', ''),
('BT16CSE048', '', ''),
('BT16CSE049', '', ''),
('BT16CSE050', '', ''),
('BT16CSE051', '', ''),
('BT16CSE052', '', ''),
('BT16CSE053', '', ''),
('BT16CSE054', '', ''),
('BT16CSE055', '', ''),
('BT16CSE056', '', ''),
('BT16CSE057', '', ''),
('BT16CSE058', '', ''),
('BT16CSE059', '', ''),
('BT16CSE060', '', ''),
('BT16CSE061', '', ''),
('BT16CSE062', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `db_management_system`
--

CREATE TABLE IF NOT EXISTS `db_management_system` (
  `student_id` varchar(20) NOT NULL,
  `281218` varchar(20) NOT NULL,
  `311218` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_management_system`
--

INSERT INTO `db_management_system` (`student_id`, `281218`, `311218`) VALUES
('BT16CSE001', '1', ''),
('BT16CSE002', '1', ''),
('BT16CSE003', '1', ''),
('BT16CSE004', '1', ''),
('BT16CSE005', '0', ''),
('BT16CSE006', '0', ''),
('BT16CSE007', '1', ''),
('BT16CSE008', '1', ''),
('BT16CSE009', '1', '1'),
('BT16CSE010', '0', ''),
('BT16CSE011', '0', ''),
('BT16CSE012', '0', ''),
('BT16CSE013', '0', ''),
('BT16CSE014', '0', ''),
('BT16CSE015', '1', ''),
('BT16CSE016', '', ''),
('BT16CSE017', '', ''),
('BT16CSE018', '', ''),
('BT16CSE019', '', ''),
('BT16CSE020', '', ''),
('BT16CSE021', '', ''),
('BT16CSE022', '', ''),
('BT16CSE023', '', ''),
('BT16CSE024', '', ''),
('BT16CSE025', '', ''),
('BT16CSE026', '', ''),
('BT16CSE027', '', ''),
('BT16CSE028', '', ''),
('BT16CSE029', '', ''),
('BT16CSE030', '', ''),
('BT16CSE031', '', ''),
('BT16CSE032', '', ''),
('BT16CSE033', '', ''),
('BT16CSE034', '', ''),
('BT16CSE035', '', ''),
('BT16CSE036', '', ''),
('BT16CSE037', '', ''),
('BT16CSE038', '', ''),
('BT16CSE039', '', ''),
('BT16CSE040', '', ''),
('BT16CSE041', '', ''),
('BT16CSE042', '', ''),
('BT16CSE043', '', ''),
('BT16CSE044', '', ''),
('BT16CSE045', '', ''),
('BT16CSE046', '', ''),
('BT16CSE047', '', ''),
('BT16CSE048', '', ''),
('BT16CSE049', '', ''),
('BT16CSE050', '', ''),
('BT16CSE051', '', ''),
('BT16CSE052', '', ''),
('BT16CSE053', '', ''),
('BT16CSE054', '', ''),
('BT16CSE055', '', ''),
('BT16CSE056', '', ''),
('BT16CSE057', '', ''),
('BT16CSE058', '', ''),
('BT16CSE059', '', ''),
('BT16CSE060', '', ''),
('BT16CSE061', '', ''),
('BT16CSE062', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE IF NOT EXISTS `faculty_login` (
  `userName` text NOT NULL COMMENT ' user name of teacher',
  `password` varchar(20) NOT NULL,
  `pNo` varchar(11) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`userName`, `password`, `pNo`, `dept`) VALUES
('surendra_singh', '12345', '8126728050', 'Computer Science and Engineering'),
('krishan_kumar', '12345', '7895289895', 'Computer Science and Engineering'),
('pankaj_pundir', '12345', '112255893', 'Computer Science and Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subject`
--

CREATE TABLE IF NOT EXISTS `faculty_subject` (
  `userName` varchar(20) NOT NULL,
  `operating_system` int(10) NOT NULL DEFAULT '0',
  `computer_network` int(10) NOT NULL DEFAULT '0',
  `network_security` int(10) NOT NULL DEFAULT '0',
  `db_management_system` int(10) NOT NULL DEFAULT '0',
  `computer_graphics` int(10) NOT NULL DEFAULT '0',
  `cv_image_processing` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subject`
--

INSERT INTO `faculty_subject` (`userName`, `operating_system`, `computer_network`, `network_security`, `db_management_system`, `computer_graphics`, `cv_image_processing`) VALUES
('krishan_kumar', 1, 0, 0, 0, 1, 1),
('pankaj_pundir', 0, 0, 1, 1, 0, 1),
('surendra_singh', 0, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE IF NOT EXISTS `flags` (
  `flag_id` varchar(20) NOT NULL,
  `value` varchar(10) NOT NULL,
  `code` varchar(20) NOT NULL,
  PRIMARY KEY (`flag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`flag_id`, `value`, `code`) VALUES
('computer_graphics', '0', 'pankajP'),
('computer_network', '0', ' '),
('cv_image_processing', '0', ' '),
('db_management_system', '0', 'Kk'),
('network_security', '0', ' '),
('operating_system', '0', 'Kk');

-- --------------------------------------------------------

--
-- Table structure for table `network_security`
--

CREATE TABLE IF NOT EXISTS `network_security` (
  `student_id` varchar(20) NOT NULL,
  `1111` varchar(20) NOT NULL,
  `311218` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network_security`
--

INSERT INTO `network_security` (`student_id`, `1111`, `311218`) VALUES
('BT16CSE001', '1', '1'),
('BT16CSE002', '1', '1'),
('BT16CSE003', '0', '0'),
('BT16CSE004', '0', '1'),
('BT16CSE005', '1', '0'),
('BT16CSE006', '1', '1'),
('BT16CSE007', '0', '0'),
('BT16CSE008', '1', '1'),
('BT16CSE009', '0', '1'),
('BT16CSE010', '1', '1'),
('BT16CSE011', '0', '1'),
('BT16CSE012', '1', '0'),
('BT16CSE013', '1', '1'),
('BT16CSE014', '0', '0'),
('BT16CSE015', '0', '1'),
('BT16CSE016', '0', '1'),
('BT16CSE017', '0', '1'),
('BT16CSE018', '0', ''),
('BT16CSE019', '0', ''),
('BT16CSE020', '1', ''),
('BT16CSE021', '0', ''),
('BT16CSE022', '', ''),
('BT16CSE023', '', ''),
('BT16CSE024', '', ''),
('BT16CSE025', '', ''),
('BT16CSE026', '', ''),
('BT16CSE027', '', ''),
('BT16CSE028', '', ''),
('BT16CSE029', '', ''),
('BT16CSE030', '', ''),
('BT16CSE031', '', ''),
('BT16CSE032', '', ''),
('BT16CSE033', '', ''),
('BT16CSE034', '', ''),
('BT16CSE035', '', ''),
('BT16CSE036', '', ''),
('BT16CSE037', '', ''),
('BT16CSE038', '', ''),
('BT16CSE039', '', ''),
('BT16CSE040', '', ''),
('BT16CSE041', '', ''),
('BT16CSE042', '', ''),
('BT16CSE043', '', ''),
('BT16CSE044', '', ''),
('BT16CSE045', '', ''),
('BT16CSE046', '', ''),
('BT16CSE047', '', ''),
('BT16CSE048', '', ''),
('BT16CSE049', '', ''),
('BT16CSE050', '', ''),
('BT16CSE051', '', ''),
('BT16CSE052', '', ''),
('BT16CSE053', '', ''),
('BT16CSE054', '', ''),
('BT16CSE055', '', ''),
('BT16CSE056', '', ''),
('BT16CSE057', '', ''),
('BT16CSE058', '', ''),
('BT16CSE059', '', ''),
('BT16CSE060', '', ''),
('BT16CSE061', '', ''),
('BT16CSE062', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `operating_system`
--

CREATE TABLE IF NOT EXISTS `operating_system` (
  `student_id` varchar(20) NOT NULL,
  `1111` varchar(20) NOT NULL,
  `311218` varchar(20) NOT NULL,
  `010119` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operating_system`
--

INSERT INTO `operating_system` (`student_id`, `1111`, `311218`, `010119`) VALUES
('BT16CSE001', '1', '1', ''),
('BT16CSE002', '1', '', ''),
('BT16CSE003', '1', '', ''),
('BT16CSE004', '1', '', ''),
('BT16CSE005', '0', '', ''),
('BT16CSE006', '0', '', ''),
('BT16CSE007', '0', '', ''),
('BT16CSE008', '1', '', ''),
('BT16CSE009', '1', '', ''),
('BT16CSE010', '0', '1', ''),
('BT16CSE011', '0', '', ''),
('BT16CSE012', '1', '', ''),
('BT16CSE013', '', '', ''),
('BT16CSE014', '', '', ''),
('BT16CSE015', '', '', ''),
('BT16CSE016', '', '', ''),
('BT16CSE017', '', '', ''),
('BT16CSE018', '', '', ''),
('BT16CSE019', '', '', ''),
('BT16CSE020', '', '', ''),
('BT16CSE021', '', '', ''),
('BT16CSE022', '', '', ''),
('BT16CSE023', '', '', ''),
('BT16CSE024', '', '', ''),
('BT16CSE025', '', '', ''),
('BT16CSE026', '', '', ''),
('BT16CSE027', '', '', ''),
('BT16CSE028', '', '', ''),
('BT16CSE029', '', '', ''),
('BT16CSE030', '', '', ''),
('BT16CSE031', '', '', ''),
('BT16CSE032', '', '', ''),
('BT16CSE033', '', '', ''),
('BT16CSE034', '', '', ''),
('BT16CSE035', '', '', ''),
('BT16CSE036', '', '', ''),
('BT16CSE037', '', '', ''),
('BT16CSE038', '', '', ''),
('BT16CSE039', '', '', ''),
('BT16CSE040', '', '', ''),
('BT16CSE041', '', '', ''),
('BT16CSE042', '', '', ''),
('BT16CSE043', '', '', ''),
('BT16CSE044', '', '', ''),
('BT16CSE045', '', '', ''),
('BT16CSE046', '', '', ''),
('BT16CSE047', '', '', ''),
('BT16CSE048', '', '', ''),
('BT16CSE049', '', '', ''),
('BT16CSE050', '', '', ''),
('BT16CSE051', '', '', ''),
('BT16CSE052', '', '', ''),
('BT16CSE053', '', '', ''),
('BT16CSE054', '', '', ''),
('BT16CSE055', '', '', ''),
('BT16CSE056', '', '', ''),
('BT16CSE057', '', '', ''),
('BT16CSE058', '', '', ''),
('BT16CSE059', '', '', ''),
('BT16CSE060', '', '', ''),
('BT16CSE061', '', '', ''),
('BT16CSE062', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `student_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`student_id`, `password`) VALUES
('BT16CSE001', '1'),
('BT16CSE002', '2'),
('BT16CSE003', '3'),
('BT16CSE004', '4'),
('BT16CSE005', '5'),
('BT16CSE006', '6'),
('BT16CSE007', '7'),
('BT16CSE008', '8'),
('BT16CSE009', '9'),
('BT16CSE010', '10'),
('BT16CSE011', '11'),
('BT16CSE012', '12'),
('BT16CSE013', '13'),
('BT16CSE014', '14'),
('BT16CSE015', '15'),
('BT16CSE016', '16'),
('BT16CSE017', '17'),
('BT16CSE018', '18'),
('BT16CSE019', '19'),
('BT16CSE020', '20'),
('BT16CSE021', '21'),
('BT16CSE022', '22'),
('BT16CSE023', '23'),
('BT16CSE024', '24'),
('BT16CSE025', '25'),
('BT16CSE026', '26'),
('BT16CSE027', '27'),
('BT16CSE028', '28'),
('BT16CSE029', '29'),
('BT16CSE030', '30'),
('BT16CSE031', '31'),
('BT16CSE032', '32'),
('BT16CSE033', '33'),
('BT16CSE034', '34'),
('BT16CSE035', '35'),
('BT16CSE036', '36'),
('BT16CSE037', '37'),
('BT16CSE038', '38'),
('BT16CSE039', '39'),
('BT16CSE040', '40'),
('BT16CSE041', '41'),
('BT16CSE042', '42'),
('BT16CSE043', '43'),
('BT16CSE044', '44'),
('BT16CSE045', '45'),
('BT16CSE046', '46'),
('BT16CSE047', '47'),
('BT16CSE048', '48'),
('BT16CSE049', '49'),
('BT16CSE050', '50'),
('BT16CSE051', '51'),
('BT16CSE052', '52'),
('BT16CSE053', '53'),
('BT16CSE054', '54'),
('BT16CSE055', '55'),
('BT16CSE056', '56'),
('BT16CSE057', '57'),
('BT16CSE058', '58'),
('BT16CSE059', '59'),
('BT16CSE060', '60'),
('BT16CSE061', '61'),
('BT16CSE062', '62');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

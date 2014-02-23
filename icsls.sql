-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2014 at 01:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icsls`
--
CREATE DATABASE IF NOT EXISTS `icsls` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `icsls`;

-- --------------------------------------------------------

--
-- Table structure for table `reference_material`
--

CREATE TABLE IF NOT EXISTS `reference_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `author` tinytext NOT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `category` char(1) NOT NULL,
  `description` text,
  `publisher` varchar(100) DEFAULT NULL,
  `publication_year` int(4) DEFAULT NULL,
  `access_type` char(1) NOT NULL,
  `course_code` varchar(6) NOT NULL,
  `total_available` int(2) NOT NULL,
  `total_stock` int(2) NOT NULL,
  `times_borrowed` int(5) DEFAULT '0',
  `for_deletion` char(1) DEFAULT 'F',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `reference_material`
--

INSERT INTO `reference_material` (`id`, `title`, `author`, `isbn`, `category`, `description`, `publisher`, `publication_year`, `access_type`, `course_code`, `total_available`, `total_stock`, `times_borrowed`, `for_deletion`) VALUES
(3, 'Journal', 'The Journal Maker', NULL, 'J', 'Hello I am a Journal', 'The person in that corner', 1950, 'S', 'JRL001', 5, 5, 0, 'F'),
(6, 'Special Problem', 'A very problematic person', NULL, 'S', 'Hello I am a Special Problem', 'Problematic Company', 1000, 'S', 'PRB143', 8, 10, 0, 'T'),
(9, 'reference 3', 'author 3', NULL, 'J', NULL, NULL, NULL, 'S', 'SPL002', 1, 1, 0, 'F'),
(10, 'reference 4', 'author 4', NULL, 'M', NULL, NULL, NULL, 'F', 'SPL004', 2, 2, 0, 'F'),
(11, 'reference 5', 'author 5', NULL, 'S', NULL, NULL, NULL, 'S', 'SPL005', 1, 1, 0, 'F'),
(12, 'reference 6', 'author 6', NULL, 'B', NULL, NULL, NULL, 'F', 'SPL006', 1, 1, 0, 'F'),
(13, 'reference 7', 'author 7', NULL, 'T', NULL, NULL, NULL, 'S', 'SPL007', 1, 1, 0, 'F'),
(17, 'reference 8', 'author 8', NULL, 'C', 'Hello I am a CD', NULL, NULL, 'S', 'SPL008', 2, 2, 0, 'F'),
(18, 'reference 9', 'author 9', NULL, 'B', 'Hello I am a Book', NULL, NULL, 'F', 'SPL009', 1, 1, 0, 'F'),
(20, 'aklat', 'Isang manunulat ng aklat', NULL, 'B', 'Kamusta ako ay isang aklat', NULL, NULL, 'F', 'FIL001', 1, 1, 0, 'F'),
(22, '&lt;?php echo &quot;Hello''s and ''gs W&quot;o&quot;rld&quot; ?&gt;', 'Problemadong tao', '', 'S', 'Nakaka Stress', '', 1234, 'S', 'PRB001', 1, 5, 0, 'F'),
(23, 'Magasin', 'F*M toh', NULL, 'M', 'Ehehehe', NULL, NULL, 'S', 'FHM001', 0, 99, 0, 'T'),
(24, 'Bibliograpiya', 'Isang taong walang magawa sa buhay', NULL, 'J', NULL, NULL, NULL, 'F', 'JRL001', 1, 1, 0, 'F'),
(25, 'Where she went', 'Steve Murrell', '1123456789123', 'B', 'What will every nation look like 100 years from now. Why am I in a ICS Library?!', 'DUNHAM Books', 2013, 'F', 'XXX000', 1, 1, 0, 'F'),
(26, '&lt;?php var_dump(&quot;Hell''so World&quot;); ?&gt;', 'Adios amigo', NULL, 'T', 'A thesis on how to say good bye to the world.', NULL, 1232, 'S', 'AFK777', 0, 4, 0, 'T'),
(27, 'Blah blah blah', 'blah blah blah', NULL, 'B', 'Yada Yada yada', 'ehehehe', 2013, 'S', 'BLH000', 1, 1, 0, 'F'),
(32, 'Ito ay isang libro', '0', '123233444', 'B', 'libro talaga to', 'Pub', 1997, 'S', '123', 3, 3, 0, 'F'),
(33, 'Book1', '0', NULL, 'B', NULL, NULL, NULL, 'F', '5545', 2, 2, 0, 'F'),
(34, '\\x8F!!!', 'e', NULL, 'S', 'yay', NULL, 2014, 'S', 'LOL102', 1, 1, 0, 'F'),
(35, 'If I Stay', '0', NULL, 'B', NULL, NULL, NULL, 'S', 'NVL003', 1, 1, 0, 'F'),
(36, 'thesis', '0', NULL, 'T', NULL, NULL, NULL, 'S', 'TSS121', 2, 2, 0, 'T'),
(37, 'yun oh', '0', NULL, 'C', NULL, NULL, NULL, 'F', 'ASC213', 0, 1, 0, 'T'),
(39, 'yaho', 'XD', NULL, 'B', 'a sample reference', NULL, NULL, 'S', 'SPL213', 2, 2, 0, 'F'),
(41, 'Module Testing Reference 1', 'The Tester', NULL, 'B', NULL, '12412512', 2013, 'S', 'LOL103', 0, 0, 0, 'F'),
(48, 'Ito ay isang magasin', '0', '123233444', 'M', 'journal talaga ito', 'Pub', 1997, 'S', '123', 3, 3, 0, 'F'),
(49, 'Journal', '0', NULL, 'J', NULL, NULL, NULL, 'F', '5545', 2, 2, 0, 'F'),
(51, 'oh my thesis', 'MC', NULL, 'T', 'OH MY!', 'Pub', NULL, 'S', 'CS200', 2, 2, 0, 'F'),
(52, 'oh my journal', 'MC', NULL, 'J', 'OH MY!', 'YAY!', NULL, 'F', 'CS200', 1, 1, 0, 'F'),
(53, 'oh my CD', 'MC', NULL, 'C', 'OH MY!', 'WEW', NULL, 'S', 'CS200', 1, 1, 0, 'F'),
(54, 'oh my book', 'MC', NULL, 'B', 'OH MY!', 'LOL', NULL, 'F', 'CS200', 2, 2, 0, 'F'),
(55, 'oh my problem', 'MC', NULL, 'T', 'OH MY!', NULL, NULL, 'S', 'CS200', 1, 1, 0, 'F'),
(56, 'oh my special problem', 'MC', NULL, 'B', 'OH MY!', 'Pub', NULL, 'S', 'CS200', 1, 1, 0, 'F'),
(57, 'oh my magazine', 'MC', NULL, 'B', 'OH MY!', 'YAY!', NULL, 'S', 'CS200', 1, 1, 0, 'F'),
(58, 'test1', 'MC', NULL, 'B', 'OH MY!', 'WEW', NULL, 'S', 'CS200', 1, 1, 0, 'F'),
(59, 'test2', 'MC', NULL, 'B', 'OH MY!', 'LOL', NULL, 'S', 'CS200', 2, 2, 0, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `reference_material_id` int(11) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `waitlist_rank` int(2) DEFAULT NULL,
  `date_waitlisted` date DEFAULT NULL,
  `date_reserved` date DEFAULT NULL,
  `reservation_due_date` date DEFAULT NULL,
  `date_borrowed` date DEFAULT NULL,
  `borrow_due_date` date DEFAULT NULL,
  `date_returned` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`reference_material_id`, `borrower_id`, `user_type`, `waitlist_rank`, `date_waitlisted`, `date_reserved`, `reservation_due_date`, `date_borrowed`, `borrow_due_date`, `date_returned`) VALUES
(3, 1, 0, NULL, NULL, '2014-02-05', '2014-02-08', NULL, NULL, NULL),
(3, 3, 0, NULL, NULL, '2014-02-12', '2014-02-15', NULL, NULL, NULL),
(6, 5, 0, NULL, NULL, '2014-02-12', '2014-02-15', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `employee_number` varchar(9) DEFAULT NULL,
  `student_number` varchar(10) DEFAULT NULL,
  `last_name` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `middle_name` varchar(32) DEFAULT NULL,
  `user_type` char(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `college_address` varchar(150) NOT NULL,
  `email_address` varchar(60) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `borrow_limit` int(1) DEFAULT NULL,
  `waitlist_limit` int(1) DEFAULT NULL,
  `college` varchar(6) DEFAULT NULL,
  `degree` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_number` (`employee_number`,`student_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_number`, `student_number`, `last_name`, `first_name`, `middle_name`, `user_type`, `username`, `password`, `college_address`, `email_address`, `contact_number`, `borrow_limit`, `waitlist_limit`, `college`, `degree`) VALUES
(5, '12356', NULL, 'Dela Torre', 'MC', 'A', 'L', 'librarian', 'ee11cbb19052e40b07aac0ca060c23ee', 'there', 'a@b.com', '', NULL, NULL, 'CAS', 'BSCS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

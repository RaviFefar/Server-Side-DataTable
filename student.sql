-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2020 at 10:02 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.33-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_fee` float NOT NULL,
  `student_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_fee`, `student_age`) VALUES
(1, 'Emily kill', 10000, 22),
(2, 'Aniket', 17000, 47),
(3, 'Nostra', 35000, 33),
(4, 'Raj', 14000, 26),
(5, 'Milan', 14500, 44),
(6, 'Nilesh', 30000, 48),
(7, 'Pristo', 18000, 55),
(8, 'Joi', 25000, 56),
(9, 'Mike', 29000, 39),
(10, 'Suraj', 16000, 35),
(11, 'Ganesh', 19000, 30),
(12, 'Milap', 36000, 27),
(13, 'Charmi', 26000, 32),
(14, 'Mikel', 25000, 54),
(15, 'Raj joi', 23000, 29),
(16, 'Emilly', 18000, 45),
(17, 'Biyardo', 34000, 26),
(18, 'Sadul', 23500, 42),
(19, 'Pritesh', 13200, 51),
(20, 'Hitesh', 11000, 21),
(21, 'Savan', 35000, 26),
(22, 'Amit', 24300, 26),
(23, 'Rashik', 10600, 26),
(24, 'Kaushik', 38600, 27),
(25, 'angel', 32100, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 07:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jax_quilt_show`
--

-- --------------------------------------------------------

--
-- Table structure for table `quilter_account_setup`
--

CREATE TABLE `quilter_account_setup` (
  `quilter_id` int(15) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_via` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quilter_account_setup`
--

INSERT INTO `quilter_account_setup` (`quilter_id`, `fname`, `lname`, `phone`, `email`, `contact_via`) VALUES
(155, 'Raymond', 'Sotto', '123-456-7890', 'raymondsotto@ymail.com', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `quilt_entry`
--

CREATE TABLE `quilt_entry` (
  `quilt_id` int(15) NOT NULL,
  `qname` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `qlength` decimal(4,2) NOT NULL,
  `qwidth` decimal(4,2) NOT NULL,
  `quilter_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quilt_entry`
--

INSERT INTO `quilt_entry` (`quilt_id`, `qname`, `details`, `qlength`, `qwidth`, `quilter_id`) VALUES
(1, '', 'This is a test\r\njust a text!', '55.40', '75.20', 0),
(2, '', '*This is a Test*<br>\r\nJust a text to see if the <br>\r\nPHP code works with SQL', '55.40', '75.20', 0),
(3, '', 'ASasdkjjkjasjkjasjsjkjkajkasjkkjas', '55.40', '75.20', 0),
(4, '', 'ASasdkjjkjasjkjasjsjkjkajkasjkkjas', '55.40', '75.20', 0),
(5, '', 'ASasdkjjkjasjkjasjsjkjkajkasjkkjas', '55.40', '75.20', 0),
(6, '', 'This quilt has 4 colors with satin texture. ', '27.50', '65.40', 0),
(7, '', 'This quilt has 4 colors with satin texture. ', '27.50', '65.40', 0),
(8, '', 'This quilt has 4 colors with satin texture. ', '27.50', '65.40', 0),
(9, '', 'This quilt has 4 colors with satin texture. ', '27.50', '65.40', 0),
(10, '', 'Asdfghkjabsdlkjbasdfmnbajsdbf,jsacljbasdjcjbhjsdcabsdcjsd', '55.40', '75.20', 0),
(11, '', 'Asdfghkjabsdlkjbasdfmnbajsdbf,jsacljbasdjcjbhjsdcabsdcjsd', '55.40', '75.20', 155),
(12, 'Double Pattern', 'asdsssdasdasdaddddddddddasdsadasdasdasd', '55.40', '75.20', 155),
(13, 'Double Pattern with Silver Lining', 'admfn jhsjnclkjsndaknsakn', '45.00', '32.50', 155),
(14, 'Double Pattern', 'asdxlklld', '55.40', '75.20', 155),
(15, 'Double Pattern', '2783rh7inkudsuds', '55.40', '75.20', 155),
(16, 'Double Pattern', 'masnadsdasjkdsajksadjkjksad', '55.40', '75.20', 155),
(17, 'Double Pattern with Silver Lining', 'asdjhbjkasdbjkjkadsjkdsakjdsa', '55.40', '75.20', 160);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quilter_account_setup`
--
ALTER TABLE `quilter_account_setup`
  ADD PRIMARY KEY (`quilter_id`);

--
-- Indexes for table `quilt_entry`
--
ALTER TABLE `quilt_entry`
  ADD PRIMARY KEY (`quilt_id`),
  ADD KEY `quilter_id` (`quilter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quilter_account_setup`
--
ALTER TABLE `quilter_account_setup`
  MODIFY `quilter_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `quilt_entry`
--
ALTER TABLE `quilt_entry`
  MODIFY `quilt_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

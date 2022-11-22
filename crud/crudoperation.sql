-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 01:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `position`, `password`, `gender`) VALUES
(1, 'sunil dave', 'sunildave56@gmail.com', 'Junior Web Developer', 'sunil56', 'Male'),
(2, 'Jaykant SIkhra', 'jaykantsikhra@gmail.com', 'Senior Web Developer', 'jaykant', 'Male'),
(4, 'Charmi Bhanushali', 'bhanushalicharmi03@gmail.com', 'Senior Web Developer', 'charmi8347', 'Female'),
(5, 'Nilesh Kumar', 'nilesh@gmail.com', 'Project Manager', 'nilesh456', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `languages` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `caste` text NOT NULL,
  `file` varchar(500) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `gender`, `languages`, `email`, `mobile`, `password`, `date`, `caste`, `file`, `role`) VALUES
(1, 'Rakesh Yadav', 'male', 'English,Gujarati', 'rakeshyadav@gmail.com', '537392672', 'rakeshy', '2022-02-14', 'OBC', 'trial-img.jpg', 2),
(5, 'Janifer Solanki', 'female', 'English,Hindi', 'janifer99@gmail.com', '248356778', 'solankijan', '2020-07-07', 'ST', 'trial-img.jpg', 2),
(6, 'Jay Patel', 'male', 'Hindi,Gujarati', 'pateljay@gmail.com', '1347840284', 'patel567', '2017-09-24', 'SC', 'trial-img.jpg', 2),
(8, 'Riddhi Dake', 'female', 'English', 'rdake45@gmail.com', '2147483647', 'rdake45', '2011-04-03', 'General', 'trial-img.jpg', 2),
(9, ' pooja singh ', 'female', 'English', 'singh@gmail.com', '2147483647', 'singhpooja', '2012-01-16', 'General', 'trial-img.jpg', 2),
(10, ' Dillip Sahoo ', 'male', 'English,Hindi', 'dillipsahoo23@gmail.com', '353638220', 'crazyboi', '2004-09-14', 'OBC', 'trial-img.jpg', 2),
(12, ' Vinay Patel ', 'male', 'English,Hindi,Gujarati', 'patelvinay@gmail.com', '2147483647', 'vinay.com', '1995-09-24', 'ST', 'trial-img.jpg', 2),
(13, ' Krishna Bhanushali ', 'female', 'English,Hindi,Gujarati', 'mrs_bhanushali19@gmail.com', '2147483647', 'mrs_bhanus', '2004-09-19', 'General', 'trial-img.jpg', 2),
(14, ' Keval Bhanushali   ', 'male', 'English,Hindi,Gujarati', 'bhanushalikeval51@gmail.com', '8347840284', 'keval8347', '2003-06-30', 'General', 'trial-img.jpg', 1),
(22, ' Ravi Dadlani ', 'male', 'English,Hindi', 'dadlaniravi@gmail.com', '533829921', 'ravidon', '2017-09-26', 'SC', 'trial-img.jpg', 2),
(26, 'Vaman Bhanushali', 'male', 'English', 'bhanu@gmail.com', '5383920929', 'bhanu', '2002-11-27', 'General', 'trial-img.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

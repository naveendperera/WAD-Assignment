-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 02:40 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_db`
--
CREATE DATABASE IF NOT EXISTS `donate_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `donate_db`;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` int(11) NOT NULL,
  `donation_type_id` int(11) NOT NULL,
  `donation_title` varchar(50) NOT NULL,
  `donation_desc` text NOT NULL,
  `donation_fname` varchar(50) NOT NULL,
  `donation_lname` varchar(50) NOT NULL,
  `donation_address` varchar(50) NOT NULL,
  `donation_city` varchar(50) NOT NULL,
  `donation_province_id` int(11) NOT NULL,
  `donation_telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donation_id`, `donation_type_id`, `donation_title`, `donation_desc`, `donation_fname`, `donation_lname`, `donation_address`, `donation_city`, `donation_province_id`, `donation_telephone`) VALUES
(8, 4, 'Develop temples in rural areas', 'Us “Sandaham Sangamaya” charity society has organised a fund raising event to help develop temples in rural areas. You can participate in this fund raising with financial aide or contact for more information.', 'Maneesha', 'Jeewathi', 'No.255,Mahawa,Kurunegala', 'Kurunegala', 3, 777123456),
(9, 7, 'Build and repair houses in rural area', '“Siyapath Sewana” which was implemented to build and repair houses in rural areas has proudly undertaken its 3rd step which was to help the people in Monaragala district now. Support us and support them by donating. Contact us for more information.', 'Nilmi', 'Sewwandi', 'No.528/A,Galle road, Hikkaduwa', 'Galle', 7, 701234567),
(10, 1, 'Donate for higher education', 'There are countless benifits of donating to an education system.play your part in building an equal education system for every child in Sri lanka.\r\nBank:people\'s bank\r\nAccount number: 12345678\r\nTitle of the account: Sipsavi foundation', 'Samadhi', 'Vithanage', 'No.123,Padukka,Colombo', 'Padukka', 9, 771231231),
(11, 2, 'Want a kidney doner', 'Hi,my name is Rashmi Pabodha.I\'m trying to get donations to help get a kidney.I haven\'t had a kidney for ten years.please help and god bless you.', 'Yasiru', 'Chathuranga', 'No.184, Samanabedda,', 'Gampaha', 9, 769214847),
(12, 2, 'Need a blood doner', 'please any blood doners interested contact\r\nVery urgent\r\nBlood group:B- \r\nPlace: Matara\r\nHospital: general hospital,Matara', 'Naveen', 'Perera', 'No.234,Pannipitiya,Maharagam', 'Maharagama', 9, 711234568);

-- --------------------------------------------------------

--
-- Table structure for table `donation_type`
--

CREATE TABLE `donation_type` (
  `donation_type_id` int(11) NOT NULL,
  `donation_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_type`
--

INSERT INTO `donation_type` (`donation_type_id`, `donation_type_name`) VALUES
(1, 'Education'),
(2, 'Health'),
(3, 'Project Research'),
(4, 'Charity'),
(5, 'For Children\'s Home'),
(6, 'Family Support'),
(7, 'Support Build Home'),
(8, 'To Develop Life Skills');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(1, 'Central Province'),
(2, 'Eastern Province'),
(3, 'North Central Province'),
(4, 'Nothern Province'),
(5, 'North Western Province'),
(6, 'Sabaragamuwa Province'),
(7, 'Southern Province'),
(8, 'Uva Province'),
(9, 'Western Province');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `province` varchar(50) NOT NULL,
  `identy_number` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `gender`, `address`, `province`, `identy_number`, `phone_number`, `email`, `password`) VALUES
(23, 'Yasiru Chathuranga', 'Male', 'No.184, Samanabedda,', 'Western', '20836', '0769214847', 'yasiruchathuranga@gmail.com', 'MTIzNDU2'),
(24, 'Samadhi', 'Female', 'No.123,Padukka,Colombo', 'Western', '991234567V', '0771231231', 'sbvithana@gmail.com', 'MTIzNDU2'),
(25, 'Naveen D Perera', 'Male', 'No.234,Pannipitiya,Maharagama', 'Western', '994567891V', '0711234568', 'naveenperera@nsbm.ac.lk', 'MTIzNDU2'),
(26, 'Maneesha Jeewanthi', 'Female', 'No.255,Mahawa,Kurunegala', 'North-Western', '981234567V', '0777123456', 'maneeshajeewanthi@gmail.com', 'NDU2MTIz'),
(27, 'Nilmi Sewwandi', 'Female', 'No.528/A,Galle road, Hikkaduwa.', 'Southern', '991425362V', '0701234567', 'nilmisewwandi@nabm.ac.lk', 'NDU2MTIz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `donation_type_id` (`donation_type_id`),
  ADD KEY `donation_province_id` (`donation_province_id`);

--
-- Indexes for table `donation_type`
--
ALTER TABLE `donation_type`
  ADD PRIMARY KEY (`donation_type_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donation_type`
--
ALTER TABLE `donation_type`
  MODIFY `donation_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`donation_type_id`) REFERENCES `donation_type` (`donation_type_id`),
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`donation_province_id`) REFERENCES `province` (`province_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

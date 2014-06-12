-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2014 at 08:23 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pismsv1`
--

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone_number`, `organisation`) VALUES
(1, 'Muhammad', '087872446951', 'Partai Panas Adem'),
(2, 'Yusuf', '087770618122', '');

--
-- Dumping data for table `pigroup`
--

INSERT INTO `pigroup` (`id`, `group_name`) VALUES
(1, 'Dinas'),
(2, 'Keluarga');

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`) VALUES
('2014-06-02 04:10:18', '2014-06-02 04:10:18', '', '087872446951', 'Default_No_Compression', '', '', -1, 'Hai Hai jjjjjjj jjjjjjjjjj jjjjjjjjjjjj jjjjjjjjjj jjjjjjjjjjjj jjjjjjjjjjj jjjjjjjjjjj jjjjjjjjj jjjjjjjj jjjj jjjjjjjj', 1, '', 'false');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `full_name`, `email`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Muhammad Yusuf', 'myusuf.bach@gmail.com', '1'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '0', 'user', 'user@gmail.com', '1');

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `user_id`, `activity`, `date`, `module`) VALUES
(1, 1, 'Edit user', '2014-05-28 07:04:00', 'User'),
(2, 1, 'Menambah grup baru', '2014-05-28 07:56:00', 'Group');





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

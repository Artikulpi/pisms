-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2014 at 08:31 AM
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
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id`, `group_name`) VALUES
(1, 'Dinas'),
(2, 'Kerabat');

--
-- Dumping data for table `contact_has_group`
--

INSERT INTO `contact_has_group` (`id`, `contact_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 2);


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `full_name`, `email`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Muhammad Yusuf', 'myusuf.bach@gmail.com', '1'),
(2, 'muhammad', 'a7777999e260290f68a1455cacdabf6c', '0', 'Muhammad', 'myusuf.bach@gmail.com', '0'),
(3, 'mohcupz', 'e172dd95f4feb21412a692e73929961e', '0', 'mohcupz', 'yusuf@artikulpi.com', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

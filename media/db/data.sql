-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2014 at 04:08 PM
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
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id`, `group_name`) VALUES
(2, 'Dinas'),
(3, 'Kerabat'),
(4, 'Keluarga'),
(5, 'Rekan Kerja'),
(6, 'Relasi');

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `user_id`, `activity`, `date`, `module`) VALUES
(1, 1, 'Edit user', '2014-05-28 07:04:00', 'User'),
(2, 1, 'Menambah grup baru', '2014-05-28 07:56:00', 'Group'),
(3, 1, 'Sunting grup', '2014-05-28 08:06:00', 'Group'),
(4, 1, 'Sunting grup', '2014-05-28 08:06:00', 'Group'),
(5, 1, 'Sunting grup', '2014-05-28 08:07:00', 'Group'),
(6, 1, 'Hapus grup', '2014-05-28 08:09:00', 'Group'),
(7, 1, 'Menambah grup baru', '2014-05-28 08:10:00', 'Group'),
(8, 1, 'Menambah grup baru', '2014-05-28 08:10:00', 'Group'),
(9, 1, 'Menambah grup baru', '2014-05-28 08:13:42', 'Group'),
(10, 1, 'Menambah grup baru', '2014-05-28 08:15:50', 'Group'),
(11, 1, 'Menambah grup baru', '2014-05-28 08:16:32', 'Group');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `full_name`, `email`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Muhammad Yusuf', 'myusuf.bach@gmail.com', '1'),
(2, 'muhammad', 'a7777999e260290f68a1455cacdabf6c', '0', 'Muhammad', 'myusuf.bach@gmail.com', '0'),
(3, 'mohcupz', 'e172dd95f4feb21412a692e73929961e', '1', 'mohcupz', 'yusuf@artikulpi.com', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
(2, 'Muhammad', '087872446951', 'Partai Panas Adem'),
(3, 'Yusuf', '087770618122', ''),
(4, 'Bachtiar', '087872446951', 'Formuri'),
(5, 'Sodikin', '085711223344', '');

--
-- Dumping data for table `contact_has_group`
--

INSERT INTO `contact_has_group` (`id`, `contact_id`, `group_id`) VALUES
(3, 2, 2),
(4, 3, 3),
(6, 4, 6),
(7, 2, 5),
(8, 2, 3);

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
(11, 1, 'Menambah grup baru', '2014-05-28 08:16:32', 'Group'),
(12, 1, 'Reset password', '2014-05-28 09:14:25', 'User'),
(13, 1, 'Menambah kontak baru', '2014-05-29 10:15:51', 'Contact'),
(14, 1, 'Edit user', '2014-05-29 10:18:03', 'User'),
(15, 1, 'Sunting kontak', '2014-05-29 11:08:26', 'Contact'),
(16, 1, 'Hapus kontak', '2014-05-29 11:09:32', 'Contact'),
(17, 1, 'Menambah kontak baru', '2014-05-29 11:09:53', 'Contact'),
(18, 1, 'Menambah kontak baru', '2014-05-29 11:10:04', 'Contact'),
(19, 1, 'Menambah kontak baru', '2014-05-29 11:10:24', 'Contact'),
(20, 3, 'Menambah anggota grup baru', '2014-05-29 13:38:25', 'Contactgroup'),
(21, 3, 'Menambah anggota grup baru', '2014-05-29 13:42:15', 'Contactgroup'),
(22, 3, 'Menambah anggota grup baru', '2014-05-29 13:42:46', 'Contactgroup'),
(23, 3, 'Menambah anggota grup baru', '2014-05-29 13:42:48', 'Contactgroup'),
(24, 3, 'Hapus anggota grup', '2014-05-29 13:45:27', 'Contactgroup'),
(25, 3, 'Menambah anggota grup baru', '2014-05-29 13:45:39', 'Contactgroup'),
(26, 3, 'Menambah anggota grup baru', '2014-05-29 13:45:45', 'Contactgroup'),
(27, 3, 'Menambah anggota grup baru', '2014-05-29 13:46:25', 'Contactgroup'),
(28, 3, 'Sunting kontak', '2014-05-29 13:46:48', 'Contact'),
(29, 3, 'Sunting kontak', '2014-05-29 13:47:22', 'Contact'),
(30, 3, 'Sunting kontak', '2014-05-29 13:47:42', 'Contact'),
(31, 3, 'Sunting kontak', '2014-05-29 13:51:13', 'Contact'),
(32, 3, 'Hapus anggota grup', '2014-05-29 14:07:20', 'Contactgroup'),
(33, 3, 'Menambah anggota grup baru', '2014-05-29 14:26:11', 'Contactgroup'),
(34, 3, 'Sunting anggota kontak', '2014-05-29 14:29:03', 'Contactgroup'),
(35, 3, 'Sunting anggota kontak', '2014-05-29 14:29:08', 'Contactgroup'),
(36, 3, 'Sunting anggota kontak', '2014-05-29 14:30:02', 'Contactgroup'),
(37, 3, 'Menambah anggota grup baru', '2014-05-29 14:45:47', 'Contactgroup'),
(38, 3, 'Menambah anggota grup baru', '2014-05-29 14:45:57', 'Contactgroup'),
(39, 3, 'Menambah kontak baru', '2014-05-29 15:08:19', 'Contact');

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

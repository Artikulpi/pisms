-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2014 at 09:27 AM
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
(1, 'Dede', '085781696079', ''),
(2, 'Sistiandy Syabana Nugraha', '08568125131', 'oncom');


--
-- Dumping data for table `pigroup`
--

INSERT INTO `pigroup` (`id`, `group_name`) VALUES
(1, 'Dinas'),
(2, 'Keluarga');

--
-- Dumping data for table `contact_has_group`
--

INSERT INTO `contact_has_group` (`id`, `contact_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`) VALUES
('2014-06-02 04:10:18', '2014-06-02 04:10:18', '', '087872446951', 'Default_No_Compression', '', '', -1, 'Hai Hai jjjjjjj jjjjjjjjjj jjjjjjjjjjjj jjjjjjjjjj jjjjjjjjjjjj jjjjjjjjjjj jjjjjjjjjjj jjjjjjjjj jjjjjjjj jjjj jjjjjjjj', 4, '', 'false');



--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `SendBefore`, `SendAfter`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `Class`, `TextDecoded`, `ID`, `MultiPart`, `RelativeValidity`, `SenderID`, `SendingTimeOut`, `DeliveryReport`, `CreatorID`) VALUES
('2014-06-02 02:33:37', '2014-06-02 02:33:37', '2014-06-02 02:33:37', '23:59:59', '00:00:00', NULL, '087872446951', 'Default_No_Compression', NULL, -1, 'b421815f26e24bda50d3ded39452d264', 1, 'false', -1, NULL, '2014-06-02 02:33:37', 'default', ''),
('2014-06-02 02:33:46', '2014-06-02 02:33:46', '2014-06-02 02:33:46', '23:59:59', '00:00:00', NULL, '087872446951', 'Default_No_Compression', NULL, -1, 'b421815f26e24bda50d3ded39452d264', 2, 'false', -1, NULL, '2014-06-02 02:33:46', 'default', ''),
('2014-06-02 02:34:58', '2014-06-02 02:34:58', '2014-06-02 02:34:58', '23:59:59', '00:00:00', 'd74600e380dbf727f67113fd71669d88', '087872446951', 'Default_No_Compression', NULL, -1, '', 3, 'false', -1, NULL, '2014-06-02 02:34:58', 'default', ''),
('2014-06-02 08:01:44', '2014-06-02 08:01:44', '2014-06-02 08:01:44', '23:59:59', '00:00:00', 'ffa43a144dc8b07b8033ca768f148e49', '087872446951', 'Default_No_Compression', NULL, -1, '', 4, 'false', -1, NULL, '2014-06-02 08:01:44', 'default', ''),
('2014-06-03 02:10:44', '2014-06-03 02:10:44', '2014-06-03 02:10:44', '23:59:59', '00:00:00', '912ec803b2ce49e4a541068d495ab570', '087872446951', 'Default_No_Compression', NULL, -1, '', 5, 'false', -1, NULL, '2014-06-03 02:10:44', 'default', ''),
('2014-06-03 05:29:37', '2014-06-03 05:29:37', '2014-06-03 05:29:37', '23:59:59', '00:00:00', '718f6e30eef13298031bd796dac13033', '087770618122', 'Default_No_Compression', NULL, -1, '', 6, 'false', -1, NULL, '2014-06-03 05:29:37', 'default', ''),
('2014-06-03 07:21:04', '2014-06-03 07:21:04', '2014-06-03 07:21:04', '23:59:59', '00:00:00', '7815696ecbf1c96e6894b779456d330e', '0987654321', 'Default_No_Compression', NULL, -1, '', 7, 'false', -1, NULL, '2014-06-03 07:21:04', 'default', '');


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `full_name`, `email`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Muhammad Yusuf', 'myusuf.bach@gmail.com', '1'),
(2, 'muhammad', 'a7777999e260290f68a1455cacdabf6c', '0', 'Muhammad', 'myusuf.bach@gmail.com', '0'),
(3, 'mohcupz', 'e172dd95f4feb21412a692e73929961e', '0', 'mohcupz', 'yusuf@artikulpi.com', '1'),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '0', 'user', 'user@gmail.com', '1');


--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `user_id`, `activity`, `date`, `module`) VALUES
(1, 1, 'Edit user', '2014-05-28 07:04:00', 'User'),
(2, 1, 'Sunting anggota kontak', '2014-06-03 08:17:53', 'Contactgroup');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

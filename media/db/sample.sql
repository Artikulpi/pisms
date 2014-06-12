-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2014 at 11:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simulasi`
--

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone_number`, `organisation`) VALUES
(3, 'Muhammad', '087872446951', ' '),
(4, 'Yusuf', '087770618122', 'Partai'),
(5, 'Bachtiar', '085781696079', 'Artikulpi'),
(6, 'Ario', '085781696079', 'Artikulpi'),
(7, 'Suwardiman', '08578875079', 'Art');


--
-- Dumping data for table `pigroup`
--

INSERT INTO `pigroup` (`id`, `group_name`) VALUES
(4, 'Keluarga'),
(5, 'relasi'),
(6, 'Kantor'),
(7, 'Atasan'),
(8, 'Bawahan');


--
-- Dumping data for table `contact_has_group`
--

INSERT INTO `contact_has_group` (`id`, `contact_id`, `group_id`) VALUES
(1, 3, 4),
(2, 3, 5),
(3, 4, 8),
(4, 6, 7),
(5, 5, 4);

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`) VALUES
('2014-06-12 04:29:42', '2014-06-12 04:29:42', '', '087811111111', 'Default_No_Compression', '', '', -1, 'Ini konten sms pertama', 1, '', 'false'),
('2014-06-12 04:30:25', '2014-06-12 04:30:25', '', '08782222222', 'Default_No_Compression', '', '', -1, 'Ini konten sms kedua', 2, '', 'false'),
('2014-06-12 04:30:40', '2014-06-12 04:30:40', '', '07833333333', 'Default_No_Compression', '', '', -1, 'Ini konten sms ketiga', 3, '', 'false'),
('2014-06-12 04:30:55', '2014-06-12 04:30:55', '', '08784444444', 'Default_No_Compression', '', '', -1, 'Ini konten sms keempat', 4, '', 'false'),
('2014-06-12 04:31:07', '2014-06-12 04:31:07', '', '08785555555', 'Default_No_Compression', '', '', -1, 'Ini konten sms kelima', 5, '', 'false');


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `full_name`, `email`, `active`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Admin', 'admin@admin.com', '1'),
(6, 'muhammad', 'a7777999e260290f68a1455cacdabf6c', '0', 'Muhammad', 'muhammad@artikulpi.com', '1'),
(7, 'yusuf', 'dd2eb170076a5dec97cdbbbbff9a4405', '1', 'Yusuf', 'yusuf@artikulpi.com', '1'),
(8, 'bachtiar', '5ec431ce980e925e0caa83c10f0e8371', '1', 'Yusuf', 'yusuf@artikulpi.com', '0'),
(9, 'ario', '713136f194f4b40b26ca140b940f6f05', '0', 'Ario', 'ario@artikulpi.com', '0');

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `user_id`, `activity`, `date`, `module`) VALUES
(1, 5, 'Menghapus Pesan', '2014-06-12 04:46:43', 'SMS'),
(2, 6, 'Menghapus Inbox', '2014-06-12 04:46:54', 'SMS'),
(3, 6, 'Input Kontak', '2014-06-12 04:47:05', 'contact'),
(4, 8, 'Input Group', '2014-06-12 04:47:17', 'pigroup'),
(5, 9, 'Input kontak', '2014-06-12 04:47:39', 'kontak');

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `SendBefore`, `SendAfter`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `Class`, `TextDecoded`, `ID`, `MultiPart`, `RelativeValidity`, `SenderID`, `SendingTimeOut`, `DeliveryReport`, `CreatorID`) VALUES
('2014-06-12 04:32:34', '2014-06-12 04:32:34', '2014-06-12 04:32:34', '23:59:59', '00:00:00', NULL, '08757111111', 'Default_No_Compression', NULL, -1, 'Kontek outbox 1', 1, 'false', -1, NULL, '2014-06-12 04:32:34', 'default', ''),
('2014-06-12 04:32:59', '2014-06-12 04:32:59', '2014-06-12 04:32:59', '23:59:59', '00:00:00', NULL, '08757222222', 'Default_No_Compression', NULL, -1, 'Kontek outbox 2', 2, 'false', -1, NULL, '2014-06-12 04:32:59', 'default', ''),
('2014-06-12 04:33:10', '2014-06-12 04:33:10', '2014-06-12 04:33:10', '23:59:59', '00:00:00', NULL, '08757333333', 'Default_No_Compression', NULL, -1, 'Kontek outbox 3', 3, 'false', -1, NULL, '2014-06-12 04:33:10', 'default', ''),
('2014-06-12 04:33:18', '2014-06-12 04:33:18', '2014-06-12 04:33:18', '23:59:59', '00:00:00', NULL, '08757444444', 'Default_No_Compression', NULL, -1, 'Kontek outbox 4', 4, 'false', -1, NULL, '2014-06-12 04:33:18', 'default', ''),
('2014-06-12 04:33:28', '2014-06-12 04:33:28', '2014-06-12 04:33:28', '23:59:59', '00:00:00', NULL, '08757555555', 'Default_No_Compression', NULL, -1, 'Kontek outbox 5', 5, 'false', -1, NULL, '2014-06-12 04:33:28', 'default', '');



--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2014-06-12 04:36:12', '2014-06-12 04:36:12', '2014-06-12 04:36:12', NULL, '', '0812111111', 'Default_No_Compression', '', '', -1, 'Konten sentitem 1', 1, '', 1, 'SendingOK', -1, -1, -1, ''),
('2014-06-12 04:36:25', '2014-06-12 04:36:25', '2014-06-12 04:36:25', NULL, '', '0812222222', 'Default_No_Compression', '', '', -1, 'Konten sentitem 2', 2, '', 1, 'SendingOK', -1, -1, -1, ''),
('2014-06-12 04:36:36', '2014-06-12 04:36:36', '2014-06-12 04:36:36', NULL, '', '0812333333', 'Default_No_Compression', '', '', -1, 'Konten sentitem 3', 3, '', 1, 'SendingOK', -1, -1, -1, ''),
('2014-06-12 04:36:44', '2014-06-12 04:36:44', '2014-06-12 04:36:44', NULL, '', '0812444444', 'Default_No_Compression', '', '', -1, 'Konten sentitem 4', 4, '', 1, 'SendingOK', -1, -1, -1, ''),
('2014-06-12 04:36:54', '2014-06-12 04:36:54', '2014-06-12 04:36:54', NULL, '', '0812555555', 'Default_No_Compression', '', '', -1, 'Konten sentitem 5', 5, '', 1, 'SendingOK', -1, -1, -1, '');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

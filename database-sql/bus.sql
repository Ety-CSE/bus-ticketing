-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 09:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `request_id` varchar(20) NOT NULL,
  `rentacar` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `package` varchar(20) NOT NULL,
  `offer_details` text NOT NULL,
  `rent` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `request_id`, `rentacar`, `offer_id`, `package`, `offer_details`, `rent`, `date`, `status`) VALUES
(1, '12SDF24', 1, 4, 'hourly', 'a:5:{s:7:\"details\";s:12:\"dsgffsdg sdf\";s:14:\"h_driver_lunch\";s:1:\"1\";s:6:\"h_fuel\";s:1:\"1\";s:10:\"h_overtime\";N;s:7:\"h_rcost\";N;}', '1243', '2020-12-06 06:45:37 am', 0),
(4, '12SDF25', 1, 4, 'monthly', 'a:8:{s:7:\"details\";s:19:\"sgfra rfdgsd fgds g\";s:14:\"m_driver_lunch\";s:1:\"1\";s:6:\"m_fuel\";s:1:\"1\";s:6:\"m_hour\";s:5:\"ghfgh\";s:7:\"m_rcost\";N;s:18:\"m_overtime_include\";N;s:10:\"m_overtime\";s:1:\"1\";s:15:\"m_overtime_rent\";s:2:\"50\";}', ' fgdfg', '2020-12-06 07:41:36 am', 0),
(5, 'BB42850', 1, 5, 'hourly', 'a:5:{s:7:\"details\";s:16:\"sfdgsdf gsdf gdf\";s:14:\"h_driver_lunch\";s:1:\"1\";s:6:\"h_fuel\";s:1:\"1\";s:10:\"h_overtime\";N;s:7:\"h_rcost\";s:1:\"1\";}', '1449', '2020-12-06 07:33:29 am', 0),
(6, 'BB42850', 2, 1, 'hourly', 'a:5:{s:7:\"details\";s:30:\"asdfsdag asdfgs dfg sdfgsghfdg\";s:14:\"h_driver_lunch\";s:1:\"1\";s:6:\"h_fuel\";s:1:\"1\";s:10:\"h_overtime\";N;s:7:\"h_rcost\";s:1:\"1\";}', '1500', '2020-12-06 09:08:01 am', 0),
(7, '12SDF25', 2, 1, 'monthly', 'a:8:{s:7:\"details\";s:14:\"xcgcfg sdfgdfg\";s:14:\"m_driver_lunch\";s:1:\"1\";s:6:\"m_fuel\";s:1:\"1\";s:6:\"m_hour\";s:1:\"8\";s:7:\"m_rcost\";s:1:\"1\";s:18:\"m_overtime_include\";s:1:\"1\";s:10:\"m_overtime\";s:1:\"1\";s:15:\"m_overtime_rent\";s:2:\"55\";}', '64000', '2020-12-06 09:08:14 am', 0),
(8, 'A733FF3', 2, 1, 'daily', 'a:8:{s:7:\"details\";s:31:\"zdvbfdsx sdfg sdzfg dfg dfg sdf\";s:14:\"d_driver_lunch\";s:1:\"1\";s:6:\"d_fuel\";s:1:\"1\";s:7:\"d_rcost\";s:1:\"1\";s:6:\"d_hour\";s:1:\"8\";s:18:\"d_overtime_include\";s:1:\"1\";s:10:\"d_overtime\";s:1:\"1\";s:15:\"d_overtime_rent\";s:2:\"50\";}', '5000', '2020-12-06 09:11:58 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `seat_no` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `journey_date` text NOT NULL,
  `trip_id` int(11) NOT NULL,
  `trip_no` int(11) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `payment` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `seat_no`, `user_id`, `journey_date`, `trip_id`, `trip_no`, `coach_id`, `payment`, `status`) VALUES
(5, 'A2,A3,A4', 11, '2021-02-01', 6, 0, 1, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"bkash\";i:2;s:12:\"123156489451\";i:3;s:9:\"sdf354654\";}', 1),
(6, 'A3,A4', 11, '2021-02-04', 7, 2, 3, 'a:4:{i:0;s:4:\"1600\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(7, 'C2,D3,G4', 11, '2021-02-01', 6, 0, 1, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"bkash\";i:2;s:12:\"123156489451\";i:3;s:9:\"sdf354654\";}', 0),
(8, 'A3,A4,C2,C3', 11, '2021-02-01', 6, 1, 1, 'a:4:{i:0;s:4:\"2000\";i:1;s:6:\"rocket\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(9, 'A1,A2', 11, '2021-02-01', 6, 1, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(11, 'A3,A4,B1,B2', 11, '2021-02-05', 6, 1, 1, 'a:4:{i:0;s:4:\"2000\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(12, 'A3,A4,B1', 19, '2021-02-04', 8, 0, 5, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"nagod\";i:2;s:11:\"01717440931\";i:3;s:9:\"S2585522H\";}', 1),
(13, 'A1,A2,B2', 19, '2021-02-04', 8, 0, 5, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"bkash\";i:2;s:12:\"123156489451\";i:3;s:9:\"S2585522H\";}', 0),
(14, 'A1,A2,B3,B4', 19, '2021-02-05', 7, 2, 3, 'a:4:{i:0;s:4:\"3200\";i:1;s:6:\"rocket\";i:2;s:11:\"01717440931\";i:3;s:9:\"S2585522H\";}', 0),
(15, 'A3,A4,B3', 20, '2021-02-04', 8, 0, 5, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"bkash\";i:2;s:10:\"0147586325\";i:3;s:9:\"S2585522H\";}', 0),
(16, 'A2,A3,A4', 23, '2021-02-04', 6, 0, 1, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(35, 'B3,B4', 23, '2021-02-04', 6, 0, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(38, 'C2,C1', 23, '2021-02-04', 6, 0, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:6:\"rocket\";i:2;s:11:\"01717440931\";i:3;s:9:\"sdf354654\";}', 0),
(39, 'A1,B1,B2', 1, '2021-02-04', 6, 0, 1, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"nagod\";i:2;s:12:\"123156489451\";i:3;s:9:\"S2585522H\";}', 0),
(40, 'A3,A4', 24, '2021-02-05', 6, 0, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"S2585522H\";}', 0),
(41, 'A3,A4', 25, '2021-02-11', 6, 0, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"S2585522H\";}', 0),
(42, 'A3,A4', 26, '2021-02-11', 6, 1, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:5:\"bkash\";i:2;s:11:\"01717440931\";i:3;s:9:\"S2585522H\";}', 0),
(43, 'B3,B4', 27, '2021-02-11', 6, 0, 1, 'a:4:{i:0;s:4:\"1000\";i:1;s:6:\"rocket\";i:2;s:12:\"123156489451\";i:3;s:9:\"sdf354654\";}', 0),
(44, 'A3,A4,B3', 11, '2021-02-16', 6, 0, 1, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"nagod\";i:2;s:10:\"0147586325\";i:3;s:9:\"S2585522H\";}', 0),
(45, 'A3,A4,B3', 11, '2021-02-18', 10, 0, 6, 'a:4:{i:0;s:4:\"1500\";i:1;s:5:\"bkash\";i:2;s:12:\"123156489451\";i:3;s:9:\"sdf354654\";}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `details` text NOT NULL,
  `country` varchar(150) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `title`, `details`, `country`, `logo`, `status`) VALUES
(1, 'Toyota', 'hbnmnb', 'Bangladesh', '5fb1569eb6e416.645085911605457566.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `des` text NOT NULL,
  `photo` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `des`, `photo`, `status`) VALUES
(1, 'Hanif', 'Hanif', '600ef04c75a6d7.859310001611591756.jpg', 0),
(2, 'Eagle', 'eagle paribahan', '600ff4e5425212.907432491611658469.jpg', 0),
(3, 'Sakura Paribahan', 'Sakura Paribahan', '601aaa20cb6db0.727331761612360224.jpg', 0),
(4, 'Sarbik Poribahan', 'Sarbik Poribahan', '602c057c20cec3.608609411613497724.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_request`
--

CREATE TABLE `buyer_request` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `request_id` varchar(20) NOT NULL,
  `pass` int(11) NOT NULL,
  `pickup_info` text NOT NULL,
  `destination` text NOT NULL,
  `car` int(11) NOT NULL,
  `details` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_request`
--

INSERT INTO `buyer_request` (`id`, `customer`, `request_id`, `pass`, `pickup_info`, `destination`, `car`, `details`, `date`, `type`, `status`) VALUES
(1, 11, '12SDF24', 3, 'a:2:{s:10:\"pickup_add\";s:13:\"3,5,18,1,1250\";s:6:\"p_date\";s:16:\"2020-11-16T07:33\";}', 'Sadar, Barishal', 1, 'safds daasdg', '2020-11-18 02:07:47 am', 'hourly', 0),
(2, 14, '12SDF25', 4, 'a:2:{s:10:\"pickup_add\";s:0:\"\";s:6:\"p_date\";s:16:\"2020-12-10T09:52\";}', 'nowakhali, chattagong', 2, 'ami kal nowakhali jabo. akta premio dorker ', '2020-12-06 09:52:34 am', 'monthly', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `model` varchar(150) NOT NULL,
  `wheel` varchar(10) NOT NULL,
  `door` varchar(10) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `photo` text NOT NULL,
  `icon` text NOT NULL,
  `category` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `wheel`, `door`, `seat`, `pass`, `photo`, `icon`, `category`, `status`) VALUES
(1, 1, 'x Noah', '4', '4', '7', '8', '', '5fb31bdbc0b858.610553711605573595.jpg', 1, 0),
(2, 1, 'premio', '4', '4', '5', '5', '', '5fb319f39c9850.848124431605573107.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `details` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `details`, `status`) VALUES
(1, 'Private Car', 'sdafasdfa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('3nhdbn3sv3tvfs3ue2vobqdbsmp62t20', '::1', 1612361825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336313832353b),
('f7r7mtvnlrrpbtkk7nu57jdj8u8iprug', '::1', 1612360318, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336303331383b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b75706c6f61645f6469727c733a333a22627573223b),
('a9qotg9k3d5d8toiota2ki99gcu9emn2', '::1', 1612360909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336303930393b7365617263687c733a36353a22613a343a7b693a303b733a323a223334223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3034223b693a333b733a303a22223b7d223b6e616d657c4e3b656d61696c7c4e3b69647c693a31393b747970657c4e3b6c6f67676564696e7c623a313b),
('itq4ug8veo0ghd8g21r548flgbhp30r9', '::1', 1612361674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336313637343b7365617263687c733a36343a22613a343a7b693a303b733a323a223233223b693a313b733a313a2237223b693a323b733a31303a22323032312d30322d3034223b693a333b733a303a22223b7d223b6e616d657c4e3b656d61696c7c4e3b69647c693a32313b747970657c4e3b6c6f67676564696e7c623a313b),
('su83f31dhtpphk9isreqpmqpu2bkh5hn', '::1', 1612361825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336313832353b),
('7ih96p2n9v0ha6g9t6410o10vsv0v7sn', '::1', 1612362410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336323431303b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b75706c6f61645f6469727c733a333a22627573223b),
('ucfsgm5858p1m74r4e7nn0q7qffiqog9', '::1', 1612362734, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336323733343b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b75706c6f61645f6469727c733a333a22627573223b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3034223b693a333b733a303a22223b7d223b),
('3nv7op0tl699ifi82djc1t8d2cms5c7s', '::1', 1612363204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336333230343b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b75706c6f61645f6469727c733a333a22627573223b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3034223b693a333b733a303a22223b7d223b),
('a4boap0pph0579ikkoe4m6c4uq3s6sf4', '::1', 1612363536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336333533363b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b75706c6f61645f6469727c733a333a22627573223b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3034223b693a333b733a303a22223b7d223b),
('rc80cmvbhmdql47oa4o1bs39t9ppr5ec', '::1', 1612365996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323336353939363b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b75706c6f61645f6469727c733a333a22627573223b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3034223b693a333b733a303a22223b7d223b),
('uuqpct0171r870t6gue20p44i4rb472b', '::1', 1612372291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323337323239313b),
('3haoc6g2br3ufab6q1dsv0fe63hth2g5', '::1', 1612372291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323337323239313b),
('q54rna160e3oggu63judjti3rvkvgp7m', '::1', 1612934030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933333933383b),
('hlrkrl4r2sg2v4mlmhbnspr1sf0k7bip', '::1', 1612934899, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933343839393b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3131223b693a333b733a303a22223b7d223b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32373a226d616e697368616e6b617276616b74613740676d61696c2e636f6d223b69647c693a32373b747970657c733a313a2233223b6c6f67676564696e7c623a313b),
('sdh1d6le4c3p95td6gtch75vj5ldcodu', '::1', 1612935262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933353236323b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3131223b693a333b733a303a22223b7d223b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32373a226d616e697368616e6b617276616b74613740676d61696c2e636f6d223b69647c693a32373b747970657c733a313a2233223b6c6f67676564696e7c623a313b),
('eb3d7mnj6l7vs0sirpgv224ngfqfikf6', '::1', 1612935634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933353633343b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3131223b693a333b733a303a22223b7d223b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32373a226d616e697368616e6b617276616b74613740676d61696c2e636f6d223b69647c693a32373b747970657c733a313a2233223b6c6f67676564696e7c623a313b),
('lq1mph41j4m5kcgcs04p7al3b47k8b6v', '::1', 1612935966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933353936363b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3131223b693a333b733a303a22223b7d223b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32373a226d616e697368616e6b617276616b74613740676d61696c2e636f6d223b69647c693a32373b747970657c733a313a2233223b6c6f67676564696e7c623a313b),
('8clqtojeftdc7pnpv8o3pbm57auckkm9', '::1', 1612936890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933363839303b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3131223b693a333b733a303a22223b7d223b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32373a226d616e697368616e6b617276616b74613740676d61696c2e636f6d223b69647c693a32373b747970657c733a313a2233223b6c6f67676564696e7c623a313b),
('e5h2jh7jnf701n8lukv27jopk948t970', '::1', 1612937576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933373537363b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('lt45s14avs63vi4sr0regbsje68l4ljh', '::1', 1612937906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933373930363b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('764p6mn4l7gqifsv2sl1923n5ibh4hv8', '::1', 1612938265, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933383236353b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('ia58qchb7l47v8hgg7s85d9l1rggr2v3', '::1', 1612938602, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933383630323b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('sm405ifccnks5q95t4sv49qs4erftpp3', '::1', 1612938912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933383931323b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('pgg9cjvhrm4bvrmbgdsitevlrl6b92m9', '::1', 1612938994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631323933383931323b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('8babi0khul3v3ci87gpos8ma0dc81oqd', '::1', 1613326127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333332363132363b),
('pk8ucerhnlr0tdonsj8mq7vantugju6a', '::1', 1613326462, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333332363436323b6e616d657c733a31323a22437573746f6d6572204f6e65223b656d61696c7c733a31383a22637573746f6d657240676d61696c2e636f6d223b69647c733a323a223131223b747970657c733a313a2233223b6c6f67676564696e7c623a313b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3136223b693a333b733a303a22223b7d223b),
('4npr3v87m5p1ju3l3447p9t1jm4m4mvq', '::1', 1613327589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333332373538393b6e616d657c733a31323a22437573746f6d6572204f6e65223b656d61696c7c733a31383a22637573746f6d657240676d61696c2e636f6d223b69647c733a323a223131223b747970657c733a313a2233223b6c6f67676564696e7c623a313b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3136223b693a333b733a303a22223b7d223b),
('v7s12uj0pq5jtqfj2lnaamhah7i6irht', '::1', 1613327590, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333332373538393b6e616d657c733a31323a22437573746f6d6572204f6e65223b656d61696c7c733a31383a22637573746f6d657240676d61696c2e636f6d223b69647c733a323a223131223b747970657c733a313a2233223b6c6f67676564696e7c623a313b7365617263687c733a36343a22613a343a7b693a303b733a313a2237223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3136223b693a333b733a303a22223b7d223b),
('8dd2n0sdan4hjgikfb2gilhivbonakmn', '::1', 1613410505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333431303530343b),
('r8brcqj19sg0mrbs286mcs185i63ij12', '::1', 1613411647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333431313634373b6e616d657c733a31323a22437573746f6d6572204f6e65223b656d61696c7c733a31383a22637573746f6d657240676d61696c2e636f6d223b69647c733a323a223131223b747970657c733a313a2233223b6c6f67676564696e7c623a313b),
('rkkfi06ujvrqh365j1iaq8t4l8hmrbfs', '::1', 1613411767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333431313634373b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('0lf4ui0fo9ff6tvrak7igpnaq9ur49if', '::1', 1613497520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333439373532303b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('hlqkqm87fr3sf5agafbpd30140b5eaof', '::1', 1613497822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333439373832323b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('maa0usqg88pua8gc92bitk4t2dqep5nv', '::1', 1613498287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333439383238373b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('ct96nhqgdldhcqbgufc9ukl2lee86lb3', '::1', 1613499968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333439393936383b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('hhi3lblbfmgs4f3tg0gid26mn7a47j2k', '::1', 1613503377, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530333337373b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('1p5g5djs93a0l59il2j04piniglfosts', '::1', 1613503713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530333731333b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('auu2rd2qj9ra0srte01osq3frbg3lqs0', '::1', 1613504025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530343032353b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('fsbd9uhp438q77odbd7kufvsnh39b5ii', '::1', 1613504435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530343433353b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('4pru34lfknho4dhpmgcpvvms7gb79sla', '::1', 1613504740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530343734303b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('m28icsr8lo7fr60ac1ei2kqcjf5mtoee', '::1', 1613505288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530353238383b6e616d657c733a31373a224d616e697368616e6b61722056616b7461223b656d61696c7c733a32363a226d616e697368616e6b617276616b746140676d61696c2e636f6d223b69647c733a313a2231223b747970657c733a313a2231223b6c6f67676564696e7c623a313b),
('9b9rs79t8l5hrc7ft1br6anp6894sj8m', '::1', 1613505636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530353633363b6e616d657c733a31323a22437573746f6d6572204f6e65223b656d61696c7c733a31383a22637573746f6d657240676d61696c2e636f6d223b69647c733a323a223131223b747970657c733a313a2233223b6c6f67676564696e7c623a313b7365617263687c733a36353a22613a343a7b693a303b733a323a223334223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3138223b693a333b733a303a22223b7d223b),
('1lr9sdhboepra2dennuutm0r8tlbkul1', '::1', 1613505976, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530353937363b6e616d657c733a31323a22437573746f6d6572204f6e65223b656d61696c7c733a31383a22637573746f6d657240676d61696c2e636f6d223b69647c733a323a223131223b747970657c733a313a2233223b6c6f67676564696e7c623a313b7365617263687c733a36353a22613a343a7b693a303b733a323a223334223b693a313b733a323a223233223b693a323b733a31303a22323032312d30322d3138223b693a333b733a303a22223b7d223b),
('g9the50e4aidnkjb0h9kq59ic1qr8fiq', '::1', 1613506071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631333530363037313b);

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `route` varchar(50) NOT NULL,
  `fare` int(11) NOT NULL,
  `no` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `bus_id`, `category`, `type`, `route`, `fare`, `no`, `status`) VALUES
(1, 1, 1, '1', '1250', 500, 'X12654', 0),
(2, 2, 1, '1', '1251', 600, 'XD152', 0),
(3, 1, 2, '0', '1251', 800, 'DH456', 0),
(4, 3, 1, '1', '1250', 500, 'XJS1325', 0),
(5, 3, 0, '0', '1235', 500, 'X12653', 1),
(6, 4, 0, '1', '1254', 500, 'SBP1546', 0),
(7, 4, 0, '1', '1254', 500, 'SBP1256', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bd_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `division` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `bd_name`, `division`) VALUES
(6, 'Barguna', 'বরগুনা', 15),
(7, 'Barisal', 'বরিশাল', 15),
(8, 'Bhola', 'ভোলা', 15),
(9, 'Jhalokati', 'ঝালকাঠি', 15),
(10, 'Patuakhali', 'পটুয়াখালি', 15),
(11, 'Pirojpur', 'পিরোজপুর', 15),
(12, 'Bandarban', 'বান্দরবান', 7),
(13, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 7),
(14, 'Chandpur', 'চাঁদপুর', 7),
(15, 'Chittagong', 'চট্টগ্রাম', 7),
(16, 'Comilla', 'কুমিল্লা', 7),
(17, 'Cox\'s Bazar', 'কক্সবাজার', 7),
(18, 'Feni', 'ফেনী', 7),
(19, 'Khagrachhari', 'খাগড়াছড়ি', 7),
(20, 'Lakshmipur', 'লক্ষ্মীপুর', 7),
(21, 'Noakhali', 'নোয়াখালি', 7),
(22, 'Rangamati', 'রাঙ্গামাটি', 7),
(23, 'Dhaka', 'ঢাকা', 3),
(24, 'Faridpur', 'ফরিদপুর', 3),
(25, 'Gazipur', 'গাজীপুর', 3),
(26, 'Gopalganj', 'গোপালগঞ্জ', 3),
(27, 'Kishoreganj', 'কিশোরগঞ্জ', 3),
(28, 'Madaripur', 'মাদারিপুর	', 3),
(29, 'Manikganj', 'মানিকগঞ্জ', 3),
(30, 'Munshiganj', 'মুন্সিগঞ্জ', 3),
(31, 'Narayanganj', 'নারায়ণগঞ্জ', 3),
(32, 'Narsingdi', 'নরসিংদি', 3),
(33, 'Rajbari', 'রাজবাড়ি', 3),
(34, 'Shariatpur', 'শরিয়তপুর', 3),
(35, 'Tangail', 'টাঙ্গাইল	', 3),
(36, 'Bagerhat', 'বাগেরহাট', 6),
(37, 'Chuadanga', 'চুয়াডাঙ্গা', 6),
(38, 'Jessore', 'যশোর', 6),
(39, 'Jhenaidah', 'ঝিনাইদহ', 6),
(40, 'Khulna', 'খুলনা', 6),
(41, 'Kushtia', 'কুষ্টিয়া', 6),
(42, 'Magura', 'মাগুরা', 6),
(43, 'Meherpur', 'মেহেরপুর', 6),
(44, 'Narail', 'নড়াইল	', 6),
(45, 'Satkhira', 'সাতক্ষীরা', 6),
(46, 'Jamalpur', 'জামালপুর', 10),
(48, 'Mymensingh', 'ময়মনসিংহ	', 10),
(49, 'Netrokona', 'নেত্রকোনা', 10),
(50, 'Sherpur', 'শেরপুর', 10),
(51, 'Bogra', 'বগুড়া	', 5),
(52, 'Joypurhat', 'জয়পুরহাট', 5),
(53, 'Naogaon', 'নওগাঁ	', 5),
(54, 'Natore', 'নাটোর', 5),
(55, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ	', 5),
(56, 'Pabna', 'পাবনা', 5),
(57, 'Rajshahi', 'রাজশাহী', 5),
(59, 'Sirajganj', 'সিরাজগঞ্জ', 5),
(60, 'Dinajpur', 'দিনাজপুর', 9),
(61, 'Gaibandha', 'গাইবান্ধা', 9),
(62, 'Kurigram', 'কুড়িগ্রাম', 9),
(63, 'Lalmonirhat', 'লালমনিরহাট', 9),
(64, 'Nilphamari', 'নীলফামারী', 9),
(65, 'Panchagarh', 'পঞ্চগড়	', 9),
(66, 'Rangpur', 'রংপুর', 9),
(67, 'Thakurgaon', 'ঠাকুরগাঁও', 9),
(68, 'Habiganj', 'হবিগঞ্জ', 8),
(69, 'Moulvibazar', 'মৌলভীবাজার', 8),
(70, 'Sunamganj', 'সুনামগঞ্জ', 8),
(71, 'Sylhet', 'সিলেট', 8);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bd_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `bd_name`) VALUES
(3, 'Dhaka', 'ঢাকা'),
(5, 'Rajshahi', 'রাজশাহী'),
(6, 'Khulna', 'খুলনা'),
(7, 'Chittagong', 'চট্টগ্রাম'),
(8, 'Sylhet', 'সিলেট'),
(9, 'Rangpur', 'রংপুর'),
(10, 'Mymensingh', 'ময়মনসিংহ '),
(15, 'Barisal', 'বরিশাল');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` text NOT NULL,
  `list_order` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `list_order`, `status`, `category`) VALUES
(1, 'How to Order?', 'Select a package and order', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `sub` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `sub`, `body`, `type`, `order_id`, `offer_id`, `date`, `status`) VALUES
(1, '11', 'digitalboost-agency', 'asfs ddf gthg sthtfghfg fdghfgh ghgfh', '0', NULL, NULL, '2012-12-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `rentacar` int(11) NOT NULL,
  `car` int(11) NOT NULL,
  `ac` varchar(50) NOT NULL,
  `conditions` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `monthly` text NOT NULL,
  `daily` text NOT NULL,
  `hourly` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `rentacar`, `car`, `ac`, `conditions`, `year`, `fuel`, `details`, `monthly`, `daily`, `hourly`, `date`, `status`) VALUES
(1, 'X-noah', 2, 1, 'ac', 1, '2020', 'gas,petrol', 'een the industry&amp;amp;amp;amp;amp;amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release oeen the industry&amp;amp;amp;amp;amp;amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release o', 'a:9:{s:9:\"m_details\";s:359:\" MONTHLY the industry&amp;amp;amp;amp;amp;amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release o\";s:14:\"m_driver_lunch\";s:1:\"1\";s:6:\"m_fuel\";s:1:\"1\";s:6:\"m_hour\";s:1:\"8\";s:6:\"m_rent\";s:5:\"64000\";s:7:\"m_rcost\";s:1:\"1\";s:18:\"m_overtime_include\";N;s:10:\"m_overtime\";s:1:\"1\";s:15:\"m_overtime_rent\";s:2:\"55\";}', 'a:9:{s:9:\"d_details\";s:356:\"DAILY the industry&amp;amp;amp;amp;amp;amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release o\";s:14:\"d_driver_lunch\";s:1:\"1\";s:6:\"d_fuel\";s:1:\"1\";s:6:\"d_rent\";s:4:\"5000\";s:7:\"d_rcost\";N;s:6:\"d_hour\";s:1:\"8\";s:18:\"d_overtime_include\";s:1:\"1\";s:10:\"d_overtime\";s:1:\"1\";s:15:\"d_overtime_rent\";s:2:\"50\";}', 'a:6:{s:9:\"h_details\";s:357:\"HOURLY the industry&amp;amp;amp;amp;amp;amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release o\";s:14:\"h_driver_lunch\";s:1:\"1\";s:6:\"h_fuel\";N;s:10:\"h_overtime\";s:1:\"1\";s:7:\"h_rcost\";s:1:\"1\";s:6:\"h_rent\";s:4:\"1243\";}', '2020-11-15 07:06:06 pm', 1),
(4, 'Tyota Premio', 1, 2, 'ac', 1, '2020', 'gas,petrol', 'a dsdf dfg hfgh fg', 'a:9:{s:9:\"m_details\";s:6:\"fg gfd\";s:14:\"m_driver_lunch\";N;s:6:\"m_fuel\";s:1:\"1\";s:6:\"m_hour\";s:1:\"8\";s:6:\"m_rent\";s:5:\"64000\";s:7:\"m_rcost\";s:1:\"1\";s:18:\"m_overtime_include\";N;s:10:\"m_overtime\";s:1:\"1\";s:15:\"m_overtime_rent\";s:2:\"50\";}', 'a:9:{s:9:\"d_details\";s:6:\"f hfgh\";s:14:\"d_driver_lunch\";s:1:\"1\";s:6:\"d_fuel\";N;s:6:\"d_rent\";s:4:\"5000\";s:7:\"d_rcost\";s:1:\"1\";s:6:\"d_hour\";s:1:\"8\";s:18:\"d_overtime_include\";N;s:10:\"d_overtime\";s:1:\"1\";s:15:\"d_overtime_rent\";s:2:\"50\";}', 'a:6:{s:9:\"h_details\";s:10:\"fdgs dtgfh\";s:14:\"h_driver_lunch\";s:1:\"1\";s:6:\"h_fuel\";s:1:\"1\";s:10:\"h_overtime\";N;s:7:\"h_rcost\";N;s:6:\"h_rent\";s:4:\"1243\";}', '2020-11-21 08:13:31 am', 0),
(5, 'X-noah', 1, 1, 'ac', 1, '2020', 'gas,petrol', 'asdf asdgfdg fdgdfg sdfgfd', 'a:9:{s:9:\"m_details\";s:13:\"sdfg sdfgsdfg\";s:14:\"m_driver_lunch\";N;s:6:\"m_fuel\";s:1:\"1\";s:6:\"m_hour\";s:1:\"8\";s:6:\"m_rent\";s:5:\"64000\";s:7:\"m_rcost\";N;s:18:\"m_overtime_include\";s:1:\"1\";s:10:\"m_overtime\";s:1:\"1\";s:15:\"m_overtime_rent\";s:4:\"6576\";}', 'a:9:{s:9:\"d_details\";s:25:\"sdfgsdf gsd fgsfds fdgsdf\";s:14:\"d_driver_lunch\";s:1:\"1\";s:6:\"d_fuel\";s:1:\"1\";s:6:\"d_rent\";s:4:\"5000\";s:7:\"d_rcost\";N;s:6:\"d_hour\";s:1:\"8\";s:18:\"d_overtime_include\";s:1:\"1\";s:10:\"d_overtime\";s:1:\"1\";s:15:\"d_overtime_rent\";s:2:\"35\";}', 'a:6:{s:9:\"h_details\";s:26:\"fdgssgh sgh d fg fdsfdhfgs\";s:14:\"h_driver_lunch\";s:1:\"1\";s:6:\"h_fuel\";N;s:10:\"h_overtime\";s:1:\"1\";s:7:\"h_rcost\";s:1:\"1\";s:6:\"h_rent\";s:4:\"1231\";}', '2020-11-23 10:35:50 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `rentacar` int(11) NOT NULL,
  `package` varchar(20) NOT NULL,
  `custome_offer` text NOT NULL,
  `rent` int(11) NOT NULL,
  `car_info` text NOT NULL,
  `driver_info` text NOT NULL,
  `pickup_info` text NOT NULL,
  `destination` text NOT NULL,
  `pass_no` int(11) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `customer` int(11) NOT NULL,
  `note` text NOT NULL,
  `type` int(11) DEFAULT NULL,
  `buyer_request` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `offer_id`, `rentacar`, `package`, `custome_offer`, `rent`, `car_info`, `driver_info`, `pickup_info`, `destination`, `pass_no`, `date`, `customer`, `note`, `type`, `buyer_request`, `status`) VALUES
(3, '679AD6B', 1, 2, 'hourly', 'a:9:{s:7:\"details\";s:32:\"sdfsd fsd gdf fhgjytjtuy jtuyjty\";s:12:\"driver_lunch\";s:1:\"1\";s:7:\"in_fuel\";s:1:\"1\";s:6:\"d_hour\";s:1:\"8\";s:14:\"rent_comission\";s:3:\"200\";s:5:\"rcost\";s:1:\"1\";s:16:\"overtime_include\";s:1:\"1\";s:8:\"overtime\";s:1:\"1\";s:13:\"overtime_rent\";s:2:\"50\";}', 5000, 'a:5:{s:3:\"car\";s:1:\"1\";s:7:\"car_reg\";s:6:\"dfghdx\";s:4:\"seat\";s:1:\"2\";s:4:\"fuel\";s:3:\"gas\";s:2:\"ac\";s:2:\"ac\";}', 'a:3:{s:6:\"driver\";s:2:\"11\";s:7:\"d_phone\";s:11:\"32235432453\";s:8:\"d_lic_no\";s:10:\"4534532412\";}', 'a:2:{s:5:\"p_add\";s:13:\"Uttara, Dhaka\";s:6:\"p_date\";s:16:\"2020-11-18T07:22\";}', 'a:2:{s:5:\"d_add\";s:13:\"Uttara, Dhaka\";s:6:\"d_date\";s:16:\"2020-11-26T04:26\";}', 6, '2020-11-24 07:21:08 am', 11, 'sdg gt ftjyhjngh ghjg', NULL, NULL, 0),
(4, '420049E', 1, 1, 'daily', 'a:9:{s:7:\"details\";s:19:\"gfh sfdgh sfgdh fgh\";s:12:\"driver_lunch\";s:1:\"1\";s:7:\"in_fuel\";s:1:\"1\";s:6:\"d_hour\";s:1:\"8\";s:14:\"rent_comission\";s:3:\"200\";s:5:\"rcost\";s:1:\"1\";s:16:\"overtime_include\";N;s:8:\"overtime\";s:1:\"1\";s:13:\"overtime_rent\";s:2:\"50\";}', 8000, 'a:5:{s:3:\"car\";s:1:\"1\";s:7:\"car_reg\";s:8:\"afafadfa\";s:4:\"seat\";s:1:\"3\";s:4:\"fuel\";s:3:\"gas\";s:2:\"ac\";s:2:\"ac\";}', 'a:3:{s:6:\"driver\";s:8:\"Md.Jahir\";s:7:\"d_phone\";s:14:\"01745753245320\";s:8:\"d_lic_no\";s:6:\"453450\";}', 'a:2:{s:5:\"p_add\";s:13:\"Uttara, Dhaka\";s:6:\"p_date\";s:16:\"2020-11-24T08:40\";}', 'a:2:{s:5:\"d_add\";s:5:\"sylet\";s:6:\"d_date\";s:16:\"2020-11-24T17:45\";}', 7, '2020-11-23 11:41:14 pm', 11, '453sgf asfdg dgfds gsfdhgfh', NULL, NULL, 0),
(5, 'C59DF9C', 4, 2, 'monthly', 'a:9:{s:7:\"details\";s:24:\"d fgfdgs dhgf hfghfdghdf\";s:12:\"driver_lunch\";s:1:\"1\";s:7:\"in_fuel\";s:1:\"1\";s:6:\"d_hour\";s:1:\"8\";s:14:\"rent_comission\";s:3:\"200\";s:5:\"rcost\";s:1:\"1\";s:16:\"overtime_include\";s:1:\"1\";s:8:\"overtime\";s:1:\"1\";s:13:\"overtime_rent\";s:2:\"50\";}', 50000, 'a:5:{s:3:\"car\";s:1:\"2\";s:7:\"car_reg\";s:6:\"dfghdx\";s:4:\"seat\";s:1:\"1\";s:4:\"fuel\";s:10:\"gas,petrol\";s:2:\"ac\";s:2:\"ac\";}', 'a:3:{s:6:\"driver\";s:8:\"Md.Jahir\";s:7:\"d_phone\";s:8:\"45347534\";s:8:\"d_lic_no\";s:4:\"5346\";}', 'a:2:{s:5:\"p_add\";s:13:\"Uttara, Dhaka\";s:6:\"p_date\";s:16:\"2020-11-25T07:18\";}', 'a:2:{s:5:\"d_add\";s:13:\"Uttara, Dhaka\";s:6:\"d_date\";s:16:\"2020-11-24T16:19\";}', 4, '2020-11-24 07:19:28 am', 11, 'rfgvdfg df dfdf gh fd', NULL, NULL, 0),
(6, 'D2D838A', 1, 1, 'monthly', 'a:9:{s:7:\"details\";s:18:\"sadfg sfdg stdfgfs\";s:12:\"driver_lunch\";s:1:\"1\";s:7:\"in_fuel\";s:1:\"1\";s:6:\"d_hour\";s:1:\"8\";s:14:\"rent_comission\";s:3:\"200\";s:5:\"rcost\";s:1:\"1\";s:16:\"overtime_include\";s:1:\"1\";s:8:\"overtime\";s:1:\"1\";s:13:\"overtime_rent\";s:2:\"50\";}', 50000, 'a:5:{s:3:\"car\";s:1:\"1\";s:7:\"car_reg\";s:8:\"afafadfa\";s:4:\"seat\";s:1:\"2\";s:4:\"fuel\";s:10:\"gas,petrol\";s:2:\"ac\";s:6:\"non-ac\";}', 'a:3:{s:6:\"driver\";s:8:\"Md.Jahir\";s:7:\"d_phone\";s:11:\"32235432453\";s:8:\"d_lic_no\";s:10:\"4534532412\";}', 'a:2:{s:5:\"p_add\";s:13:\"Uttara, Dhaka\";s:6:\"p_date\";s:16:\"2020-11-24T07:20\";}', 'a:2:{s:5:\"d_add\";s:13:\"Uttara, Dhaka\";s:6:\"d_date\";s:16:\"2020-11-25T07:20\";}', 0, '2020-11-24 07:21:08 am', 14, '3tewrst gsedfg', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `setting` text,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `setting`, `status`) VALUES
(1, 'Terms of Use', 'terms-of-use', '<div class=\"container-fluid admin-area\">\r\n<div class=\"row\">\r\n<div class=\"content-header col-12\">\r\n<h2 class=\"content-title\"><em class=\"fa  fa-tachometer-alt la-2x\"> </em> Dashboard</h2>\r\n</div>\r\n</div>\r\n<div class=\"row dashboard\">\r\n<div class=\"col-md-3\">\r\n<div class=\"card mb-3 dash\">\r\n<div class=\"row no-gutters\">\r\n<div class=\"col-md-8\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">5165</h5>\r\n<p class=\"card-text sub-title\">Total Sales</p>\r\n<p class=\"card-text\"><small class=\"text-muted\"><strong>Today: </strong> <span class=\"num\">51</span></small></p>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4 icon\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"card mb-3 dash\">\r\n<div class=\"row no-gutters\">\r\n<div class=\"col-md-8\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">21653</h5>\r\n<p class=\"card-text sub-title\">Total Medicine</p>\r\n<p class=\"card-text\"><small class=\"text-muted\"><strong>Out of Stock:</strong> <span class=\"num\">25</span></small> <!-- <small class=\"text-muted right\"><b>Expired:</b> <span class=\"num\">13</span></small> --></p>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4 icon\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 0),
(2, 'About Us', 'about-us', '<p>&lt;p&gt;&amp;lt;p&amp;gt;About Us&amp;lt;/p&amp;gt;&lt;/p&gt; &lt;?=echo site_url();?&gt;</p>', NULL, 0),
(3, 'Why Us?', 'why-us', 'Why Us?', NULL, 0),
(4, 'How does it work?', 'how-does-it-work', '<p>&lt;p&gt;&amp;lt;p&amp;gt;How does it work?&amp;lt;/p&amp;gt;&lt;/p&gt;</p>', NULL, 0),
(5, 'Privicy Policy', 'privicy-policy', '<p>&lt;p&gt;Privicy Policy&lt;/p&gt;</p>', NULL, 0),
(6, 'Refund Policy', 'refund-policy', '<p>Refund Policy</p>', NULL, 0),
(7, 'Membership', 'membership', '<p>Membership&nbsp;</p>', NULL, 0),
(8, 'FAQ', 'faq', '<p>FAQ&nbsp;</p>', NULL, 0),
(9, 'Trust &amp;amp; Safety', 'trust-and-safety', '<p>&lt;p&gt;Trust &amp;amp; Safety&lt;/p&gt;</p>', NULL, 0),
(10, 'Rent a Car', 'rent-a-car', '<p>Rent a Car</p>', NULL, 0),
(11, 'Hiring Support', 'hiring-support', '<p>Hiring Support</p>', NULL, 0),
(12, 'Career', 'career', '<p>Career</p>', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bd_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `division` int(11) NOT NULL,
  `district` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`id`, `name`, `bd_name`, `division`, `district`) VALUES
(1, 'Mymensingh Sadar', 'ময়মনসিংহ সদর ', 10, 48),
(2, 'Bhaluka', 'ভালুকা', 10, 48),
(3, 'Trishal', 'তিশাল', 10, 48),
(4, 'Haluaghat', 'হালুয়াঘাট', 10, 48),
(5, 'Muktagacha', 'মুক্তাগাছা', 10, 48),
(6, 'Dhobaura', 'ধবারুয়া', 10, 48),
(7, 'Fulbaria', 'ফুলবাড়িয়া', 10, 48),
(8, 'Gaffargaon', 'গফরগাঁও', 10, 48),
(9, 'Gauripur', 'গৌরিপুর', 10, 48),
(10, 'Ishwarganj', 'ঈশ্বরগঞ্জ', 10, 48),
(11, 'Nandail', 'নন্দাইল', 10, 48),
(12, 'Phulpur', 'ফুলপুর', 10, 48),
(13, 'Tarakanda', 'তারাকান্দা', 10, 48),
(14, 'Kotwali', 'কোতোয়ালী', 3, 23),
(15, 'Mirpur', 'মিরপুর', 3, 23),
(16, 'Motijheel', 'মতিঝিল', 3, 23),
(17, 'Khilgaon', 'খিলগাঁও', 3, 23),
(18, 'Badda', 'বাড্ডা', 3, 23),
(19, 'Mohammadpur', 'মোহাম্মদপুর', 3, 23),
(20, 'Gulshan', 'গুলশান', 3, 23),
(21, 'Khilkhet', 'খিলক্ষেত', 3, 23),
(22, 'Rampura', 'রামপুরা', 3, 23),
(23, 'Bimanbandar', 'বিমানবন্দর', 3, 23),
(24, 'Tejgaon', 'তেজগাঁও', 3, 23),
(25, 'Sutrapur', 'সূত্রাপুর', 3, 23),
(26, 'Vatara', 'ভাটারা', 3, 23),
(27, 'Uttara', 'উত্তরা', 3, 23),
(28, 'Hazaribagh', 'হাজারীবাগ', 3, 23),
(29, 'Paltan', 'পল্টন', 3, 23),
(30, 'Shah Ali', 'শাহ আলী', 3, 23),
(31, 'Shyampur', 'শ্যামপুর', 3, 23),
(32, 'Wari', 'ওয়ারী', 3, 23),
(33, 'Ramna', 'রমনা', 3, 23),
(34, 'Kamrangirchar', 'কামরাঙ্গীরচর', 3, 23),
(35, 'Gendaria', 'জেন্ডারিয়া', 3, 23),
(36, 'Pallabi', 'পল্লবী', 3, 23),
(37, 'New Market', ' নিউ মার্কেট', 3, 23),
(38, 'Sabujbagh', 'সবুজবাগ', 3, 23),
(39, 'Adabar', 'আদাবর', 3, 23),
(40, 'Kafrul', 'কাফরুল', 3, 23),
(41, 'Demra', 'ডেমরা', 3, 23),
(42, 'Chowkbazar', 'চৌকবাজার', 3, 23),
(43, 'Darus Salam', 'দারুস সালাম', 3, 23),
(44, 'Shantinagar', 'শান্তিনগর', 3, 23),
(45, 'Dhanmondi', 'ধানমন্ডি', 3, 23),
(46, 'Kadamtali', 'কদমতলী', 3, 23),
(47, 'Turag', 'তুরাগ', 3, 23),
(48, 'Cantonment', 'ক্যান্টনমেন্ট ', 3, 23),
(49, 'Lalbagh', 'লালবাগ', 3, 23),
(50, 'Uttara Azampur', 'উত্তরা আজমপুর', 3, 23),
(51, 'Bangsal', 'বংশাল', 3, 23),
(52, 'Kalabagan', 'কলাবাগান', 3, 23),
(53, 'Panthapath', 'পান্থপথ', 3, 23),
(54, 'Shahbag', 'শাহবাগ', 3, 23),
(55, 'Sher-e-Bangla Nagar', 'শেরে বাংলা নগর', 3, 23),
(56, 'Tejgaon Industrial', 'তেজগাঁও শিল্প', 3, 23),
(57, 'Uttar Khan', 'উত্তর খান', 3, 23),
(58, 'Muladi', 'মুলাদি', 15, 7),
(59, 'Babuganj', 'বাবুগঞ্জ', 15, 7),
(60, 'Agailjhara', 'আগৈলঝাড়া', 15, 7),
(61, 'Barisal Sadar', 'বরিশাল সদর', 15, 7),
(62, 'Bakerganj', 'বাকেরগঞ্জ', 15, 7),
(63, 'Banaripara', 'বানাড়িপারা', 15, 7),
(64, 'Gaurnadi', 'গৌরনদী', 15, 7),
(65, 'Hizla', 'হিজলা', 15, 7),
(66, 'Mehendiganj', ' মেহেদিগঞ্জ', 15, 7),
(67, 'Wazirpur', 'উজিরপুর', 15, 7),
(68, 'Airport', 'এয়ারপোর্ট', 15, 7),
(69, 'Kawnia', 'কাউনিয়া', 15, 7),
(70, 'Bondor', 'বন্দর', 15, 7),
(71, 'Amtali', 'আমতলী', 15, 6),
(72, 'Bamna', 'বামনা', 15, 6),
(73, 'Barguna Sadar', 'বরগুনা সদর', 15, 6),
(74, 'Betagi', 'বেতাগি', 15, 6),
(75, 'Patharghata', 'পাথরঘাটা', 15, 6),
(76, 'Taltali', 'তালতলী', 15, 6),
(77, 'Bhola Sadar', 'ভোলা সদর', 15, 8),
(78, 'Burhanuddin', 'বুরহানউদ্দিন', 15, 8),
(79, 'Char Fasson', 'চর ফ্যাশন', 15, 8),
(80, 'Daulatkhan', 'দৌলতখান', 15, 8),
(81, 'Lalmohan', 'লালমোহন', 15, 8),
(82, 'Manpura', ' মনপুরা', 15, 8),
(83, 'Tazumuddin', 'তাজুমুদ্দিন', 15, 8),
(84, 'Jhalokati Sadar', 'ঝালকাঠি সদর', 15, 9),
(85, 'Kathalia', 'কাঁঠালিয়া', 15, 9),
(86, 'Nalchity', 'নালচিতি', 15, 9),
(87, 'Rajapur', 'রাজাপুর', 15, 9),
(88, 'Bauphal', 'বাউফল', 15, 10),
(89, 'Dashmina', 'দশমিনা', 15, 10),
(90, 'Galachipa', 'গলাচিপা', 15, 10),
(91, 'Kalapara', 'কালাপারা', 15, 10),
(92, 'Mirzaganj', 'মির্জাগঞ্জ', 15, 10),
(93, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 15, 10),
(94, 'Dumki', ' ডুমকি', 15, 10),
(95, 'Rangabali', 'রাঙ্গাবালি', 15, 10),
(96, 'Bhandaria', ' ভ্যান্ডারিয়া', 15, 11),
(97, 'Kaukhali', 'কাউখালি', 15, 11),
(98, 'Mathbaria', 'মাঠবাড়িয়া', 15, 11),
(99, 'Nazirpur', 'নাজিরপুর', 15, 11),
(100, 'Nesarabad', 'নেসারাবাদ', 15, 11),
(101, 'Pirojpur Sadar', 'পিরোজপুর সদর', 15, 11),
(102, 'Zianagar', ' জিয়ানগর', 15, 11),
(103, 'Bandarban Sadar', 'বান্দরবন সদর', 7, 12),
(104, 'Thanchi', 'থানচি', 7, 12),
(105, 'Lama', 'লামা', 7, 12),
(106, 'Naikhongchhari', 'নাইখংছড়ি', 7, 12),
(107, 'Alikadam', 'আলী কদম', 7, 12),
(108, 'Rowangchhari', ' রউয়াংছড়ি', 7, 12),
(109, 'Ruma', 'রুমা', 7, 12),
(110, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 7, 13),
(111, 'Ashuganj', 'আশুগঞ্জ', 7, 13),
(112, 'Nasirnagar', 'নাসির নগর', 7, 13),
(113, 'Nabinagar', 'নবীনগর', 7, 13),
(114, 'Sarail', 'সরাইল', 7, 13),
(115, 'Shahbazpur Town', 'শাহবাজপুর টাউন', 7, 13),
(116, 'Kasba', 'কসবা', 7, 13),
(117, 'Akhaura', 'আখাউরা', 7, 13),
(118, 'Bancharampur', 'বাঞ্ছারামপুর', 7, 13),
(119, 'Bijoynagar', 'বিজয় নগর', 7, 13),
(120, 'Chandpur Sadar', 'চাঁদপুর সদর', 7, 14),
(121, 'Faridganj', 'ফরিদগঞ্জ', 7, 14),
(122, 'Haimchar', 'হাইমচর', 7, 14),
(123, 'Haziganj', 'হাজীগঞ্জ', 7, 14),
(124, 'Kachua', 'কচুয়া', 7, 14),
(125, 'Matlab Uttar', 'মতলব উত্তর', 7, 14),
(126, 'Matlab Dakkhin', 'মতলব দক্ষিণ', 7, 14),
(127, 'Shahrasti', 'শাহরাস্তি', 7, 14),
(128, 'Anwara', 'আনোয়ারা', 7, 15),
(129, 'Banshkhali', 'বাশখালি', 7, 15),
(130, 'Boalkhali', 'বোয়ালখালি', 7, 15),
(131, 'Chandanaish', 'চন্দনাইশ', 7, 15),
(132, 'Fatikchhari', 'ফটিকছড়ি', 7, 15),
(133, 'Hathazari', 'হাঠহাজারী', 7, 15),
(134, 'Lohagara', 'লোহাগারা', 7, 15),
(135, 'Mirsharai', 'মিরসরাই', 7, 15),
(136, 'Patiya', 'পটিয়া', 7, 15),
(137, 'Rangunia', 'রাঙ্গুনিয়া', 7, 15),
(138, 'Raozan', 'রাউজান', 7, 15),
(139, 'Sandwip', 'সন্দ্বীপ', 7, 15),
(140, 'Satkania', ' সাতকানিয়া', 7, 15),
(141, 'Sitakunda', 'সীতাকুণ্ড', 7, 15),
(142, 'Akborsha', 'আকবোরশা', 7, 15),
(143, 'Baijid bostami', 'বাইজিদ বোস্তামী', 7, 15),
(144, 'Bakolia', 'বাকোলিয়া', 7, 15),
(145, 'Bandar', 'বন্দর', 7, 15),
(146, 'Chandgaon', 'চাঁদগাও', 7, 15),
(147, 'Chokbazar', 'চকবাজার', 7, 15),
(148, 'Doublemooring', 'ডাবল মুরিং', 7, 15),
(149, 'EPZ', 'ইপিজেড', 7, 15),
(150, 'Hali Shohor', ' হলী শহর', 7, 15),
(151, 'Kornafuli', 'কর্ণফুলি', 7, 15),
(152, 'Kotwali', 'কোতোয়ালী', 7, 15),
(153, 'Kulshi', 'কুলশি', 7, 15),
(154, 'Pahartali', 'পাহাড়তলী', 7, 15),
(155, 'Panchlaish', 'পাঁচলাইশ', 7, 15),
(156, 'Potenga', 'পতেঙ্গা', 7, 15),
(157, 'Shodhorgat', 'সদরঘাট', 7, 15),
(158, 'Barura', 'বড়ুরা', 7, 15),
(159, 'Brahmanpara', ' ব্রাহ্মণপাড়া', 7, 16),
(160, 'Burichong', 'বুড়িচং', 7, 16),
(161, 'Chandina', 'চান্দিনা', 7, 16),
(162, 'Chauddagram', 'চৌদ্দগ্রাম', 7, 16),
(163, 'Daudkandi', '  দাউদকান্দি', 7, 16),
(164, 'Debidwar', 'দেবীদ্বার', 7, 16),
(165, 'Homna', ' হোমনা', 7, 16),
(166, 'Comilla Sadar', 'কুমিল্লা সদর', 7, 16),
(167, 'Laksam', 'লাকসাম', 7, 16),
(168, 'Monohorgonj', 'মনোহরগঞ্জ', 7, 16),
(169, 'Meghna', 'মেঘনা', 7, 16),
(170, 'Muradnagar', 'মুরাদনগর', 7, 16),
(171, 'Nangalkot', 'নাঙ্গালকোট', 7, 16),
(172, 'Comilla Sadar South', 'কুমিল্লা সদর দক্ষিণ', 7, 16),
(173, 'Titas', 'তিতাস', 7, 16),
(174, 'Chakaria', 'চকরিয়া', 7, 17),
(176, 'Cox\'s Bazar Sadar', 'কক্স বাজার সদর', 7, 17),
(177, 'Kutubdia', 'কুতুবদিয়া', 7, 17),
(178, 'Maheshkhali', 'মহেশখালী', 7, 17),
(179, 'Ramu', ' রামু', 7, 17),
(180, 'Teknaf', 'টেকনাফ', 7, 17),
(181, 'Ukhia', 'উখিয়া', 7, 17),
(182, 'Pekua', 'পেকুয়া', 7, 17),
(183, 'Feni Sadar', 'ফেনী সদর', 7, 18),
(184, 'Chagalnaiya', 'ছাগল নাইয়া', 7, 18),
(185, 'Daganbhyan', 'দাগানভিয়া', 7, 18),
(186, 'Parshuram', 'পরশুরাম', 7, 18),
(188, 'Fhulgazi', 'ফুলগাজি', 7, 18),
(189, 'Sonagazi', 'সোনাগাজি', 7, 18),
(190, 'Dighinala', 'দিঘিনালা', 7, 19),
(191, 'Khagrachhari', 'খাগড়াছড়ি', 7, 19),
(192, 'Lakshmichhari', 'লক্ষ্মীছড়ি', 7, 19),
(193, 'Mahalchhari', 'মহলছড়ি', 7, 19),
(194, 'Manikchhari', 'মানিকছড়ি', 7, 19),
(195, 'Matiranga', 'মাটিরাঙ্গা', 7, 19),
(196, 'Panchhari', 'পানছড়ি', 7, 19),
(197, 'Ramgarh', 'রামগড়', 7, 19),
(198, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 7, 20),
(199, 'Raipur', 'রায়পুর', 7, 20),
(200, 'Ramganj', 'রামগঞ্জ', 7, 20),
(201, 'Ramgati', 'রামগতি', 7, 20),
(202, 'Komol Nagar', 'কমল নগর', 7, 20),
(203, 'Noakhali Sadar', 'নোয়াখালী সদর', 7, 21),
(204, 'Begumganj', 'বেগমগঞ্জ', 7, 21),
(205, 'Chatkhil', 'চাটখিল', 7, 21),
(206, 'Shenbag', 'শেনবাগ', 7, 21),
(207, 'Hatia', 'হাতিয়া', 7, 21),
(208, 'Kobirhat', 'কবিরহাট', 7, 21),
(209, 'Sonaimuri', 'সোনাইমুরি', 7, 21),
(210, 'Suborno Char', 'সুবর্ণ চর', 7, 21),
(211, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 7, 22),
(212, 'Belaichhari', 'বেলাইছড়ি', 7, 22),
(213, 'Bagaichhari', '  বাঘাইছড়ি', 7, 22),
(214, 'Barkal', ' বরকল', 7, 22),
(215, 'Juraichhari', 'জুরাইছড়ি', 7, 22),
(216, 'Rajasthali', 'রাজাস্থলি', 7, 22),
(217, 'Kaptai', 'কাপ্তাই', 7, 22),
(218, 'Langadu', 'লাঙ্গাডু', 7, 22),
(219, 'Nannerchar', 'নান্নেরচর', 7, 22),
(220, 'Kaukhali', 'কাউখালি', 7, 22),
(221, 'Faridpur Sadar', 'ফরিদপুর সদর', 3, 24),
(222, 'Boalmari', 'বোয়ালমারী', 3, 24),
(223, 'Madhukhali', 'মধুখালি', 3, 24),
(224, 'Bhanga', 'ভাঙ্গা', 3, 24),
(225, 'Nagarkanda', 'নগরকান্ড', 3, 24),
(226, 'Charbhadrasan', 'চরভদ্রাসন', 3, 24),
(227, 'Sadarpur', 'সদরপুর', 3, 24),
(228, 'Shriangan', 'শ্রীনগান ', 3, 24),
(229, 'Gazipur Sadar', 'গাজীপুর সদর', 3, 25),
(230, 'Kaliakior', 'কালিয়াকৈর', 3, 25),
(231, 'Kapasia', 'কাপাসিয়া', 3, 25),
(232, 'Sripur', 'শ্রীপুর', 3, 25),
(233, 'Kaliganj', 'কালীগঞ্জ', 3, 25),
(234, 'Tongi', 'টঙ্গি', 3, 25),
(235, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 3, 26),
(236, 'Kashiani', 'কাশিয়ানি', 3, 26),
(237, 'Kotalipara', 'কোটালিপাড়া', 3, 26),
(238, 'Muksudpur', 'মুকসুদপুর', 3, 26),
(239, 'Tungipara', 'টুঙ্গিপাড়া', 3, 26),
(240, 'Astagram', 'অষ্টগ্রাম', 3, 27),
(241, 'Bajitpur', 'বাজিতপুর', 3, 27),
(242, 'Bhairab', 'ভৈরব', 3, 27),
(243, 'Hossainpur', ' হোসেনপুর', 3, 27),
(244, 'Itna', 'ইটনা', 3, 27),
(245, 'Karimganj', 'করিমগঞ্জ', 3, 27),
(246, 'Katiadi', 'কতিয়াদি', 3, 27),
(247, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 3, 27),
(248, 'Kuliarchar', 'কুলিয়ারচর', 3, 27),
(249, 'Mithamain', 'মিঠামাইন', 3, 27),
(250, 'Nikli', 'নিকলি', 3, 27),
(251, 'Pakundia', ' পাকুন্ডা', 3, 27),
(252, 'Tarail', 'তাড়াইল', 3, 27),
(253, 'Madaripur Sadar', 'মাদারীপুর সদর', 3, 28),
(254, 'Kalkini', 'কালকিনি', 3, 28),
(255, 'Rajoir', 'রাজইর', 3, 28),
(256, 'Shibchar', 'শিবচর', 3, 28),
(257, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 3, 29),
(258, 'Singair', ' সিঙ্গাইর', 3, 29),
(259, 'Shibalaya', 'শিবালয়', 3, 29),
(260, 'Saturia', 'সাঠুরিয়া', 3, 29),
(261, 'Harirampur', 'হরিরামপুর', 3, 29),
(262, 'Ghior', 'ঘিওর', 3, 29),
(263, 'Daulatpur', 'দৌলতপুর', 3, 29),
(264, 'Lohajang', 'লোহাজং', 3, 30),
(265, 'Sreenagar', 'শ্রীনগর', 3, 30),
(266, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 3, 30),
(267, 'Sirajdikhan', 'সিরাজদিখান', 3, 30),
(268, 'Tongibari', 'টঙ্গিবাড়ি', 3, 30),
(269, 'Gazaria', 'গজারিয়া', 3, 30),
(270, 'Araihazar', 'আড়াইহাজার', 3, 31),
(271, 'Sonargaon', 'সোনারগাঁও', 3, 31),
(272, 'Bandar', 'বান্দার', 3, 31),
(273, 'Naryanganj Sadar', 'নারায়ানগঞ্জ সদর', 3, 31),
(274, 'Rupganj', 'রূপগঞ্জ', 3, 31),
(275, 'Siddirgonj', 'সিদ্ধিরগঞ্জ', 3, 31),
(276, 'Belabo', 'বেলাবো', 3, 32),
(277, 'Monohardi', 'মনোহরদি', 3, 32),
(278, 'Narsingdi Sadar', 'নরসিংদী সদর', 3, 32),
(279, 'Palash', 'পলাশ', 3, 32),
(280, 'Raipura', 'রায়পুর', 3, 32),
(281, 'Shibpur', 'শিবপুর', 3, 32),
(282, 'Baliakandi', 'বালিয়াকান্দি', 3, 33),
(283, 'Goalandaghat', 'গোয়ালন্দ ঘাট', 3, 33),
(284, 'Pangsha', 'পাংশা', 3, 33),
(285, 'Kalukhali', 'কালুখালি', 3, 33),
(286, 'Rajbari Sadar', 'রাজবাড়ি সদর', 3, 33),
(287, 'Shariatpur Sadar', 'শরীয়তপুর সদর', 3, 34),
(288, 'Damudya', 'দামুদিয়া', 3, 34),
(289, 'Naria', 'নড়িয়া', 3, 34),
(290, 'Jajira', 'জাজিরা', 3, 34),
(291, 'Bhedarganj', 'ভেদারগঞ্জ', 3, 34),
(292, 'Gosairhat', 'গোসাইর হাট', 3, 34),
(293, 'Tangail Sadar', 'টাঙ্গাইল সদর', 3, 35),
(294, 'Sakhipur', ' সখিপুর', 3, 35),
(295, 'Basail', 'বসাইল', 3, 35),
(296, 'Madhupur', 'মধুপুর', 3, 35),
(297, 'Ghatail', 'ঘাটাইল', 3, 35),
(298, 'Kalihati', 'কালিহাতি', 3, 35),
(299, 'Nagarpur', 'নগরপুর', 3, 35),
(300, 'Mirzapur', 'মির্জাপুর', 3, 35),
(301, 'Gopalpur', 'গোপালপুর', 3, 35),
(302, 'Delduar', 'দেলদুয়ার', 3, 35),
(303, 'Bhuapur', 'ভুয়াপুর', 3, 35),
(304, 'Dhanbari', 'ধানবাড়ি', 3, 35),
(305, 'Bagerhat Sadar', 'বাগেরহাট সদর', 6, 36),
(306, 'Chitalmari', 'চিতলমাড়ি', 6, 36),
(307, 'Fakirhat', 'ফকিরহাট', 6, 36),
(308, 'Kachua', 'কচুয়া', 6, 36),
(309, 'Mollahat', 'মোল্লাহাট', 6, 36),
(310, 'Mongla', 'মংলা', 6, 36),
(311, 'Morrelganj', 'মরেলগঞ্জ', 6, 36),
(312, 'Rampal', 'রামপাল', 6, 36),
(313, 'Sarankhola', 'স্মরণখোলা', 6, 36),
(314, 'Damurhuda', 'দামুরহুদা', 6, 37),
(315, 'Chuadanga-S', 'চুয়াডাঙ্গা সদর', 6, 37),
(316, 'Jibannagar', 'জীবন নগর', 6, 37),
(317, 'Alamdanga', 'আলমডাঙ্গা', 6, 37),
(318, 'Abhaynagar', 'অভয়নগর', 6, 38),
(319, 'Keshabpur', '  কেশবপুর', 6, 38),
(320, 'Bagherpara', 'বাঘের পাড়া', 6, 38),
(321, 'Jessore Sadar', 'যশোর সদর', 6, 38),
(322, 'Chaugachha', 'চৌগাছা', 6, 38),
(323, 'Manirampur', 'মনিরামপুর', 6, 38),
(324, 'Jhikargachha', 'ঝিকরগাছা', 6, 38),
(325, 'Sharsha', 'সারশা', 6, 38),
(326, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 6, 39),
(327, 'Maheshpur', 'মহেশপুর', 6, 39),
(328, 'Kaliganj', 'কালীগঞ্জ', 6, 39),
(329, 'Kotchandpur', 'কোট চাঁদপুর', 6, 39),
(330, 'Shailkupa', 'শৈলকুপা', 6, 39),
(331, 'Harinakunda', 'হাড়িনাকুন্দা', 6, 39),
(332, 'Terokhada', 'তেরোখাদা', 6, 40),
(333, 'Batiaghata', 'বাটিয়াঘাটা', 6, 40),
(334, 'Dacope', 'ডাকপে', 6, 40),
(335, 'Dumuria', 'ডুমুরিয়া', 6, 40),
(336, 'Dighalia', 'দিঘলিয়া', 6, 40),
(337, 'Koyra', 'কয়ড়া', 6, 40),
(338, 'Paikgachha', 'পাইকগাছা', 6, 40),
(339, 'Phultala', 'ফুলতলা', 6, 40),
(340, 'Rupsa', 'রূপসা', 6, 40),
(341, 'Aranghata', 'আড়াংঘাটা', 6, 40),
(342, 'Daulatpur', 'দৌলতপুর', 6, 40),
(343, 'Harintana', 'হারিন্তানা', 6, 40),
(344, 'Horintana', 'হরিণতানা', 6, 40),
(345, 'Khalishpur', 'খালিশপুর', 6, 40),
(346, 'Khanjahan Ali', 'খানজাহান আলী', 6, 40),
(347, 'Khulna Sadar', 'খুলনা সদর', 6, 40),
(348, 'Labanchora', 'লাবানছোরা', 6, 40),
(349, 'Sonadanga', 'সোনাডাঙ্গা', 6, 40),
(350, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 6, 41),
(351, 'Kumarkhali', 'কুমারখালি', 6, 41),
(352, 'Daulatpur', 'দৌলতপুর', 6, 41),
(353, 'Mirpur', 'মিরপুর', 6, 41),
(354, 'Bheramara', 'ভেরামারা', 6, 41),
(355, 'Khoksa', 'খোকসা', 6, 41),
(356, 'Magura Sadar', 'মাগুরা সদর', 6, 42),
(357, 'Mohammadpur', 'মোহাম্মাদপুর', 6, 42),
(358, 'Shalikha', 'শালিখা', 6, 42),
(359, 'Sreepur', 'শ্রীপুর', 6, 42),
(360, 'angni', 'আংনি', 6, 43),
(361, 'Mujib Nagar', 'মুজিব নগর', 6, 43),
(362, 'Meherpur-S', 'মেহেরপুর সদর', 6, 43),
(363, 'Narail-Sadar Upazilla', 'নড়াইল সদর', 6, 44),
(364, 'Lohagara Upazilla', 'লোহাগাড়া', 6, 44),
(365, 'Kalia Upazilla', 'কালিয়া', 6, 44),
(366, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 6, 45),
(367, 'Assasuni', 'আসসাশুনি', 6, 45),
(368, 'Debhata', 'দেভাটা', 6, 45),
(369, 'Tala', 'তালা', 6, 45),
(370, 'Kalaroa', 'কলরোয়া', 6, 45),
(371, 'Kaliganj', 'কালীগঞ্জ', 6, 45),
(372, 'Shyamnagar', 'শ্যামনগর', 6, 45),
(373, 'Adamdighi', ' আদমদিঘী', 5, 51),
(374, 'Bogra Sadar', 'বগুড়া সদর', 5, 51),
(375, 'Sherpur', 'শেরপুর', 5, 51),
(376, 'Dhunat', 'ধুনট', 5, 51),
(377, 'Dhupchanchia', 'দুপচাচিয়া', 5, 51),
(378, 'Gabtali', 'গাবতলি', 5, 51),
(379, 'Kahaloo', 'কাহালু', 5, 51),
(380, 'Nandigram', 'নন্দিগ্রাম', 5, 51),
(381, 'Sahajanpur', 'শাহজাহানপুর', 5, 51),
(382, 'Sariakandi', 'সারিয়াকান্দি', 5, 51),
(383, 'Shibganj', 'শিবগঞ্জ', 5, 51),
(384, 'Sonatala', 'সোনাতলা', 5, 51),
(385, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 5, 52),
(386, 'Akkelpur', 'আক্কেলপুর', 5, 52),
(387, 'Kalai', 'কালাই', 5, 52),
(388, 'Khetlal', 'খেতলাল', 5, 52),
(389, 'Panchbibi', 'পাঁচবিবি', 5, 52),
(390, 'Naogaon Sadar', ' নওগাঁ সদর', 5, 53),
(391, 'Mohadevpur', 'মহাদেবপুর', 5, 53),
(392, 'Manda', 'মান্দা', 5, 53),
(393, 'Niamatpur', 'নিয়ামতপুর', 5, 53),
(394, 'Atrai', 'আত্রাই', 5, 53),
(395, 'Raninagar', 'রাণীনগর', 5, 53),
(396, 'Patnitala', 'পত্নীতলা', 5, 53),
(397, 'Dhamoirhat', 'ধামইরহাট', 5, 53),
(398, 'Sapahar', 'সাপাহার', 5, 53),
(399, 'Porsha', 'পোরশা', 5, 53),
(400, 'Badalgachhi', 'বদলগাছি', 5, 53),
(401, 'Natore Sadar', ' নাটোর সদর', 5, 54),
(402, 'Baraigram', 'বড়াইগ্রাম', 5, 54),
(403, 'Bagatipara', 'বাগাতিপাড়া', 5, 54),
(404, 'Lalpur', 'লালপুর', 5, 54),
(405, 'Natore Sadar', 'নাটোর সদর', 5, 54),
(406, 'Baraigram', 'বড়াই গ্রাম', 5, 54),
(407, 'Bholahat', 'ভোলাহাট', 5, 55),
(408, 'Gomastapur', 'গোমস্তাপুর', 5, 55),
(409, 'Nachole', 'নাচোল', 5, 55),
(410, 'Nawabganj Sadar', 'নবাবগঞ্জ সদর', 5, 55),
(411, 'Shibganj', 'শিবগঞ্জ', 5, 55),
(412, 'Atgharia', 'আটঘরিয়া', 5, 56),
(413, 'Bera', 'বেড়া', 5, 56),
(414, 'Bhangura', 'ভাঙ্গুরা', 5, 56),
(415, 'Chatmohar', 'চাটমোহর', 5, 56),
(416, 'Faridpur', 'ফরিদপুর', 5, 56),
(417, 'Ishwardi', 'ঈশ্বরদী', 5, 56),
(418, 'Pabna Sadar', 'পাবনা সদর', 5, 56),
(419, 'Santhia', 'সাথিয়া', 5, 56),
(420, 'Sujanagar', 'সুজানগর', 5, 56),
(421, 'Bagha', 'বাঘা', 5, 57),
(422, 'Bagmara', 'বাগমারা', 5, 57),
(423, 'Charghat', 'চারঘাট', 5, 57),
(424, 'Durgapur', 'দুর্গাপুর', 5, 57),
(425, 'Godagari', 'গোদাগারি', 5, 57),
(426, 'Mohanpur', ' মোহনপুর', 5, 57),
(427, 'Paba', 'পবা', 5, 57),
(428, 'Puthia', 'পুঠিয়া', 5, 57),
(429, 'Tanore', 'তানোর', 5, 57),
(430, 'Boalia', 'বোয়ালিয়া', 5, 57),
(431, 'Motihar', 'মতিহার', 5, 57),
(432, 'Shahmokhdum', 'শাহ্ মকখদুম', 5, 57),
(433, 'Rajpara', 'রাজপারা', 5, 57),
(434, 'Sirajganj Sadar', ' সিরাজগঞ্জ সদর', 5, 59),
(435, 'Belkuchi', 'বেলকুচি', 5, 59),
(436, 'Chauhali', 'চৌহালি', 5, 59),
(437, 'Kamarkhanda', 'কামারখান্দা', 5, 59),
(438, 'Kazipur', 'কাজীপুর', 5, 59),
(439, 'Raiganj', 'রায়গঞ্জ', 5, 59),
(440, 'Shahjadpur', 'শাহজাদপুর', 5, 59),
(441, 'Tarash', 'তারাশ', 5, 59),
(442, 'Ullahpara', 'উল্লাপাড়া', 5, 59),
(443, 'Birampur', 'বিরামপুর', 9, 60),
(444, 'Birganj', 'বীরগঞ্জ', 9, 60),
(445, 'Biral', 'বিড়াল', 9, 60),
(446, 'Bochaganj', 'বোচাগঞ্জ', 9, 60),
(447, 'Chirirbandar', 'চিরিরবন্দর', 9, 60),
(448, 'Phulbari', 'ফুলবাড়ি', 9, 60),
(449, 'Ghoraghat', 'ঘোড়াঘাট', 9, 60),
(450, 'Hakimpur', 'হাকিমপুর', 9, 60),
(451, 'Kaharole', 'কাহারোল', 9, 60),
(452, 'Khansama', 'খানসামা', 9, 60),
(453, 'Dinajpur Sadar', 'দিনাজপুর সদর', 9, 60),
(454, 'Nawabganj', 'নবাবগঞ্জ', 9, 60),
(455, 'Parbatipur', 'পার্বতীপুর', 9, 60),
(456, 'Fulchhari', 'ফুলছড়ি', 9, 61),
(457, 'Gaibandha sadar', 'গাইবান্ধা সদর', 9, 61),
(458, 'Gobindaganj', 'গোবিন্দগঞ্জ', 9, 61),
(459, 'Palashbari', 'পলাশবাড়ী', 9, 61),
(460, 'Sadullapur', 'সাদুল্যাপুর', 9, 61),
(461, 'Saghata', 'সাঘাটা', 9, 61),
(462, 'Sundarganj', 'সুন্দরগঞ্জ', 9, 61),
(463, 'Kurigram Sadar', ' কুড়িগ্রাম সদর', 9, 62),
(464, 'Nageshwari', 'নাগেশ্বরীনাগেশ্বরী', 9, 62),
(465, 'Bhurungamari', 'ভুরুঙ্গামারি', 9, 62),
(466, 'Phulbari', 'ফুলবাড়ি', 9, 62),
(467, 'Rajarhat', 'রাজারহাট', 9, 62),
(468, 'Chilmari', 'চিলমারি', 9, 62),
(469, 'Rowmari', 'রউমারি', 9, 62),
(470, 'Char Rajibpur', 'চর রাজিবপুর', 9, 62),
(471, 'Lalmanirhat Sadar', 'লালমনিরহাট সদর', 9, 63),
(472, 'Aditmari', 'আদিতমারি', 9, 63),
(473, 'Kaliganj', 'কালীগঞ্জ', 9, 63),
(474, 'Hatibandha', 'হাতিবান্ধা', 9, 63),
(475, 'Patgram', 'পাটগ্রাম', 9, 63),
(476, 'Nilphamari Sadar', 'নীলফামারী সদর', 9, 64),
(477, 'Saidpur', 'সৈয়দপুর', 9, 64),
(478, 'Jaldhaka', 'জলঢাকা', 9, 64),
(479, 'Kishoreganj', 'কিশোরগঞ্জ', 9, 64),
(480, 'Domar', 'ডোমার', 9, 64),
(481, 'Dimla', 'ডিমলা', 9, 64),
(482, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 9, 65),
(483, 'Debiganj', 'দেবীগঞ্জ', 9, 65),
(484, 'Boda', 'বোদা', 9, 65),
(485, 'Atwari', 'আটোয়ারি', 9, 65),
(486, 'Tetulia', 'তেতুলিয়া', 9, 65),
(487, 'Badarganj', 'বদরগঞ্জ', 9, 66),
(488, 'Mithapukur', 'মিঠাপুকুর', 9, 66),
(489, 'Gangachara', 'গঙ্গাচরা', 9, 66),
(490, 'Kaunia', 'কাউনিয়া', 9, 66),
(491, 'Rangpur Sadar', 'রংপুর সদর', 9, 66),
(492, 'Pirgachha', 'পীরগাছা', 9, 66),
(493, 'Pirganj', 'পীরগঞ্জ', 9, 66),
(494, 'Taraganj', ' তারাগঞ্জ', 9, 66),
(495, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 9, 67),
(496, 'Pirganj', 'পীরগঞ্জ', 9, 67),
(497, 'Baliadangi', 'বালিয়াডাঙ্গি', 9, 67),
(498, 'Haripur', 'হরিপুর', 9, 67),
(499, 'Ranisankail', 'রাণীসংকইল', 9, 67),
(500, 'Ajmiriganj', 'আজমিরিগঞ্জ', 8, 68),
(501, 'Baniachang', ' বানিয়াচং', 8, 68),
(502, 'Bahubal', 'বাহুবল', 8, 68),
(503, 'Chunarughat', ' চুনারুঘাট', 8, 68),
(504, 'Habiganj Sadar', ' হবিগঞ্জ সদর', 8, 68),
(505, 'Lakhai', 'লাক্ষাই', 8, 68),
(506, 'Madhabpur', 'মাধবপুর', 8, 68),
(507, 'Nabiganj', 'নবীগঞ্জ', 8, 68),
(508, 'Shaistagonj', 'শায়েস্তাগঞ্জ', 8, 68),
(509, 'Moulvibazar Sadar', 'মৌলভীবাজার', 8, 69),
(510, 'Barlekha', 'বড়লেখা', 8, 69),
(511, 'Juri', 'জুড়ি', 8, 69),
(512, 'Kamalganj', 'কামালগঞ্জ', 8, 69),
(513, 'Kulaura', 'কুলাউরা', 8, 69),
(514, 'Rajnagar', 'রাজনগর', 8, 69),
(515, 'Sreemangal', 'শ্রীমঙ্গল', 8, 69),
(516, 'Bishwamvarpur', 'বিসশম্ভারপুর', 8, 70),
(517, 'Chhatak', 'ছাতক', 8, 70),
(518, 'Derai', 'দেড়াই', 8, 70),
(519, 'Dharampasha', 'ধরমপাশা', 8, 70),
(520, 'Dowarabazar', 'দোয়ারাবাজার', 8, 70),
(521, 'Jagannathpur', 'জগন্নাথপুর', 8, 70),
(522, 'Jamalganj', 'জামালগঞ্জ', 8, 70),
(523, 'Sulla', 'সুল্লা', 8, 70),
(524, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 8, 70),
(525, 'Shanthiganj', 'শান্তিগঞ্জ', 8, 70),
(526, 'Tahirpur', 'তাহিরপুর', 8, 70),
(527, 'Sylhet Sadar', 'সিলেট সদর', 8, 71),
(528, 'Beanibazar', 'বেয়ানিবাজার', 8, 71),
(529, 'Bishwanath', 'বিশ্বনাথ', 8, 71),
(530, 'Dakshin Surma', 'দক্ষিণ সুরমা', 8, 71),
(531, 'Balaganj', 'বালাগঞ্জ', 8, 71),
(532, 'Companiganj', 'কোম্পানিগঞ্জ', 8, 71),
(533, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 8, 71),
(534, 'Golapganj', 'গোলাপগঞ্জ', 8, 71),
(535, 'Gowainghat', 'গোয়াইনঘাট', 8, 71),
(536, 'Jaintiapur', 'জয়ন্তপুর', 8, 71),
(537, 'Kanaighat', 'কানাইঘাট', 8, 71),
(538, 'Zakiganj', 'জাকিগঞ্জ', 8, 71),
(539, 'Nobigonj', 'নবীগঞ্জ', 8, 71),
(540, 'Airport', 'বিমানবন্দর', 8, 71),
(541, 'Hazrat Shah Paran', 'হযরত শাহ পরাণ', 8, 71),
(542, 'Jalalabad', 'জালালাবাদ', 8, 71),
(543, 'Kowtali', 'কোতোয়ালী', 8, 71),
(544, 'Moglabazar', 'মোগলাবাজার', 8, 71),
(545, 'Osmani Nagar', 'ওসমানী নগর', 8, 71),
(546, 'South Surma', ' দক্ষিণ সুরমা', 8, 71),
(547, 'Dewanganj', 'দেওয়ানগঞ্জ', 10, 46),
(548, 'Baksiganj', 'বকসিগঞ্জ', 10, 46),
(549, 'Islampur', 'ইসলামপুর', 10, 46),
(550, 'Jamalpur Sadar', ' জামালপুর সদর', 10, 46),
(551, 'Madarganj', ' মাদারগঞ্জ', 10, 46),
(552, 'Melandaha', 'মেলানদাহা', 10, 46),
(553, 'Sarishabari', 'সরিষাবাড়ি', 10, 46),
(554, 'Narundi Police I.C', ' নারুন্দি', 10, 46),
(555, 'Kendua Upazilla', 'কেন্দুয়া', 10, 49),
(556, 'Atpara Upazilla', ' আটপাড়া', 10, 49),
(557, 'Barhatta Upazilla', ' বরহাট্টা', 10, 49),
(558, 'Durgapur Upazilla', ' দুর্গাপুর', 10, 49),
(559, 'Kalmakanda Upazilla', 'কলমাকান্দা', 10, 49),
(560, 'Madan Upazilla', 'মদন', 10, 49),
(561, 'Moddhynagar Upazilla', 'মোদ্ধ্যনগর', 10, 49),
(562, 'Mohanganj Upazilla', 'মোহনগঞ্জ', 10, 49),
(563, 'Netrakona-S Upazilla', 'নেত্রকোনা সদর', 10, 49),
(564, 'Purbadhala Upazilla', 'পূর্বধলা', 10, 49),
(565, 'Khaliajuri Upazilla', 'খালিয়াজুরি', 10, 49),
(566, 'Jhenaigati', 'ঝিনাইগাতি', 10, 50),
(567, 'Nakla', 'নাকলা', 10, 50),
(568, 'Nalitabari', 'নালিতাবাড়ি', 10, 50),
(569, 'Sherpur Sadar', ' শেরপুর সদর', 10, 50),
(570, 'Sreebardi', 'শ্রীবরদি', 10, 50),
(571, 'Swarupkathi', 'স্বরূপকাঠি', 15, 11),
(572, 'Hajirhat', 'হাজিরহাট', 15, 8),
(573, 'Hatshoshiganj', 'হাটশোশিগঞ্জ', 15, 8),
(576, 'Chattogram Sadar', 'চাটোগ্রাম সদর', 7, 15),
(577, 'East Joara', 'পূর্ব জোয়ারা', 7, 15),
(578, 'Jaldi', 'জলদি', 7, 15),
(579, 'Barura', 'বড়ুরা ', 7, 16),
(580, 'Langalkot', 'লাঙ্গলকোট', 7, 16),
(581, 'Gorakghat', 'গোরাকঘাট ', 7, 17),
(582, 'Char Alexgander', 'চর আলেক্সগান্ডার ', 7, 20),
(583, 'Basur Hat', 'বসুর হাট ', 7, 21),
(584, 'Kalampati', 'কালামপতি', 7, 22),
(585, 'Marishya', 'মারিশ্যা', 7, 22),
(586, 'Dhaka', 'ঢাকা', 3, 23),
(587, 'Jatrabari', 'যাত্রাবাড়ী', 3, 23),
(588, 'Keraniganj', 'কেরানীগঞ্জ', 3, 23),
(589, 'Nawabganj', 'নবাবগঞ্জ', 3, 23),
(590, 'Savar', 'সাভার', 3, 23),
(591, 'Alfadanga', 'আলফাডাঙ্গা ', 3, 24),
(592, 'Monnunagar', 'মন্নুনগর', 3, 25),
(593, 'Sreepur', 'শ্রীপুর', 3, 25),
(594, 'Ostagram', 'ওস্টগ্রাম ', 3, 27),
(595, 'Barhamganj', 'বারহামগঞ্জ', 3, 28),
(596, 'Lechhraganj', 'লেছড়াগঞ্জ', 3, 29),
(597, 'Baidder Bazar', 'বাইদার বাজার', 3, 31),
(598, 'Fatullah', 'ফতুল্লা ', 3, 31),
(599, 'Melandah', 'মেলান্দহ', 10, 46),
(600, 'Dharampasha', 'ধরমপাশা ', 10, 49),
(601, 'Dhobaura', 'ধোবাউরা ', 10, 49),
(602, 'Bakshigonj', 'বকশীগঞ্জ ', 10, 50),
(603, 'Kalauk', 'কালাউক ', 8, 68),
(604, 'Ghungiar', 'ঘুনগিয়ার ', 8, 70),
(605, 'Sachna', 'সচনা', 8, 70),
(607, 'Bangla Hili', 'বাংলা হিলি ', 9, 60),
(608, 'Mohakhali', 'মহাখালী', 9, 60),
(609, 'Maharajganj', 'মহারাজগঞ্জ ', 9, 60),
(610, 'Setabganj', 'সেতাবগঞ্জ ', 9, 60),
(612, 'Bonarpara', 'বনরপাড়া ', 9, 61),
(613, 'Ulipur', 'উলিপুর', 9, 62),
(614, 'Tushbhandar', 'তুষভান্ডার', 9, 63),
(615, 'Chotto Dab', 'চোটো ড্যাব ', 9, 65),
(616, 'Jibanpur', 'জীবনপুর ', 9, 67),
(617, 'Rayenda', 'রায়েনদা ', 6, 36),
(618, 'Doulatganj', 'দৌলতগঞ্জ ', 6, 37),
(619, 'Noapara', 'নোয়াপাড়া', 6, 38),
(620, 'Naldanga', 'নলডাঙ্গা', 6, 39),
(621, 'Alaipur', 'আলাইপুর ', 6, 40),
(622, 'Chalna Bazar', 'চালনা বাজার', 6, 40),
(623, 'Sajiara', 'সাজিয়ারা', 6, 40),
(624, 'Janipur', 'জনিপুর ', 6, 41),
(625, 'Rafayetpur', 'রাফায়েতপুর', 6, 41),
(626, 'Arpara', 'আরপাড়া  ', 6, 42),
(627, 'Gangni', 'গাংনী', 6, 43),
(628, 'Laxmipasha', 'লক্ষ্মীপাশা', 6, 44),
(630, 'Mohajan', 'মহাজন ', 6, 44),
(631, 'Nakipur', 'নকিপুর', 6, 45),
(632, 'Rohanpur', 'রোহনপুর', 5, 55),
(633, 'Ahsanganj', 'আহসানগঞ্জ ', 5, 53),
(634, 'Nitpur', 'নিতপুর ', 5, 53),
(635, 'Gopalpur UPO', 'গোপালপুর ইউপিও', 5, 54),
(636, 'Harua', 'হারুয়া', 5, 54),
(637, 'Hatgurudaspur', 'হাটগুরুদাসপুর ', 5, 54),
(638, 'Laxman', 'লক্ষ্মণ ', 5, 54),
(639, 'Singra', 'সিংড়া', 5, 54),
(640, 'Banwarinagar', 'বানওয়ারিনগর ', 5, 56),
(641, 'Khod Mohanpur', 'খোডমোহনপুর ', 5, 57),
(642, 'Lalitganj', 'ললিতগঞ্জ ', 5, 57),
(643, 'Rajshahi Sadar', 'রাজশাহী সদর', 5, 57),
(644, 'Baiddya Jam Toil', 'বৈদ্য জাম তোল ', 5, 59),
(645, 'Dhangora', 'ধানগোড়া ', 5, 59);

-- --------------------------------------------------------

--
-- Table structure for table `post_office`
--

CREATE TABLE `post_office` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `bd_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `police_station` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `division` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_office`
--

INSERT INTO `post_office` (`id`, `name`, `bd_name`, `zip`, `police_station`, `district`, `division`, `status`) VALUES
(2, 'Amtali', 'আমতলী', 8710, 71, 6, 15, 0),
(3, 'Bamna', 'বামনা', 8730, 72, 6, 15, 0),
(4, 'Barguna Sadar', 'বরগুনা সদর', 8700, 73, 6, 15, 0),
(5, 'Nali Bandar', 'নালি বান্দর', 8701, 73, 6, 15, 0),
(6, 'Betagi', 'বেতাগী', 8740, 74, 6, 15, 0),
(7, 'Darul Ulam', 'দারুল উলাম ', 8741, 74, 6, 15, 0),
(8, 'Kakchira', 'কাকচিরা', 8721, 75, 6, 15, 0),
(9, 'Patharghata', 'পাথরঘাটা', 8720, 75, 6, 15, 0),
(10, 'Agailzhara', 'আগৈলঝাড়া', 8240, 60, 7, 15, 0),
(11, 'Gaila', 'আগৈলঝাড়া', 8241, 60, 7, 15, 0),
(12, 'Paisarhat', 'পয়সারহাট', 8242, 60, 7, 15, 0),
(13, 'Banaripara', 'বানারীপাড়া', 8530, 63, 7, 15, 0),
(14, 'Chakhar', 'চাখার', 8531, 63, 7, 15, 0),
(15, 'Babuganj', 'বাবুগঞ্জ', 8210, 59, 7, 15, 0),
(16, 'Barishal Cadet', 'বরিশাল ক্যাডেট', 8216, 62, 7, 15, 0),
(17, 'Chandpasha', 'চাঁদপাশা', 8212, 59, 7, 15, 0),
(18, 'Madhabpasha', 'মাধবপাশা', 8213, 59, 7, 15, 0),
(19, 'Nizamuddin College', 'নিজামুদ্দিন কলেজ', 8215, 59, 7, 15, 0),
(20, 'Rahamatpur', 'রহমতপুর', 8211, 59, 7, 15, 0),
(21, 'Thakur Mallik', 'ঠাকুর মল্লিক', 8214, 59, 7, 15, 0),
(22, 'Barishal Sadar', 'বরিশাল সদর', 8200, 61, 7, 15, 0),
(23, 'Baronial', 'বড়জালিয়া', 8260, 65, 7, 15, 0),
(24, 'Osman Manjil', 'ওসমান মঞ্জিল', 8261, 65, 7, 15, 0),
(25, 'Barishal Sadar', 'বরিশাল সদর', 8200, 61, 7, 15, 0),
(26, 'Chandramohon', 'চন্দ্রমোহন', 8200, 61, 7, 15, 0),
(27, 'Bukhainagar', 'বুখাইনগর', 8201, 61, 7, 15, 0),
(28, 'Jaguarhat', 'জাগুয়ারহাট', 8206, 61, 7, 15, 0),
(29, 'Kashipur', 'কাশীপুর', 8205, 61, 7, 15, 0),
(30, 'Patang', 'পাতং', 8204, 61, 7, 15, 0),
(31, 'Saheberhat', 'সাহেবেরহাট', 8202, 61, 7, 15, 0),
(32, 'Sugandia', 'সুগান্দিয়া', 8203, 61, 7, 15, 0),
(33, 'Batajor', 'বাটাজোর', 8233, 64, 7, 15, 0),
(34, 'Gouranadi', 'গৌরনাদি', 8230, 64, 7, 15, 0),
(35, 'Kashemabad', 'কাশেমবাদ', 8232, 64, 7, 15, 0),
(36, 'Tarki Bandar', 'টরকি বান্দর', 8231, 64, 7, 15, 0),
(37, 'Langutia', 'লাঙ্গুটিয়া', 8274, 66, 7, 15, 0),
(38, 'Laskarpur', 'লস্করপুর', 8271, 66, 7, 15, 0),
(39, 'Mahendiganj', 'মহেন্দিগঞ্জ', 8270, 66, 7, 15, 0),
(40, 'Nalgora', 'নলগোড়া', 8273, 66, 7, 15, 0),
(41, 'Ulania', 'ইউলানিয়া', 8272, 66, 7, 15, 0),
(42, 'Charkalekhan', 'চরকলেখান', 8252, 58, 7, 15, 0),
(43, 'Kazirchar', 'কাজিরচর ', 8251, 58, 7, 15, 0),
(44, 'Muladi', 'মুলাদী', 8250, 58, 7, 15, 0),
(45, 'Charamandi', 'চরমণ্ডি', 8281, 62, 7, 15, 0),
(46, 'Kalaskati', 'কালাসকাটি', 8284, 62, 7, 15, 0),
(47, 'Padri Shibpur', 'পাদ্রি শিবপুর ', 8282, 62, 7, 15, 0),
(48, 'Luxmibardhan', 'লাক্সমিবার্ডন ', 8280, 62, 7, 15, 0),
(49, 'Shialguni', 'শিয়ালগুনি ', 8283, 62, 7, 15, 0),
(50, 'Dakuarhat', 'ডাকুয়ারহাট ', 8223, 67, 7, 15, 0),
(51, 'Dhamura', 'ধামুরা', 8221, 67, 7, 15, 0),
(52, 'Jugirkanda', 'জুগিরকান্দা ', 8222, 67, 7, 15, 0),
(53, 'Shikarpur', 'শিকারপুর ', 8224, 67, 7, 15, 0),
(54, 'Uzirpur', 'উজিরপুর ', 8220, 67, 7, 15, 0),
(55, 'Bhola Sadar', 'ভোলা সদর ', 8300, 77, 8, 15, 0),
(56, 'Joynagar', 'জয়নগর', 8301, 77, 8, 15, 0),
(57, 'Borhanuddin UPO', 'বোরহানউদ্দিন ইউপিও ', 8320, 78, 8, 15, 0),
(58, 'Mirzakalu', 'মির্জাকালু ', 8321, 78, 8, 15, 0),
(59, 'Charfashion', 'চরফ্যাশন ', 8340, 79, 8, 15, 0),
(60, 'Dularhat', 'দুলারহাট ', 8341, 79, 8, 15, 0),
(61, 'Keramatganj', 'কেরামতগঞ্জ ', 8342, 79, 8, 15, 0),
(62, 'Doulatkhan', 'দৌলতখান ', 8310, 80, 8, 15, 0),
(63, 'Hajipur', 'হাজিপুর', 8311, 80, 8, 15, 0),
(64, 'Daurihat', 'দৌরীহাট ', 8331, 81, 8, 15, 0),
(65, 'Gazaria', 'গজারিয়া ', 8332, 81, 8, 15, 0),
(66, 'Lalmohan UPO', 'লালমোহন ইউপিও ', 8330, 81, 8, 15, 0),
(67, 'Baukathi', 'বাউকাঠি ', 8402, 84, 9, 15, 0),
(68, 'Gabha', 'গাভা ', 8403, 84, 9, 15, 0),
(69, 'Jhalokati Sadar', 'ঝালকাঠি সদর ', 8400, 84, 9, 15, 0),
(70, 'Nabagram', 'নবগ্রাম ', 8401, 84, 9, 15, 0),
(71, 'Shekherhat', 'শেখেরহাট ', 8404, 84, 9, 15, 0),
(72, 'Amua', 'আমুয়া ', 8431, 85, 9, 15, 0),
(73, 'Niamatee', 'নিয়ামতি ', 8432, 85, 9, 15, 0),
(74, 'Shoulajalia', 'শৈলজালিয়া ', 8433, 85, 9, 15, 0),
(75, 'Beerkathi', 'বিয়ারকাঠি ', 8421, 85, 9, 15, 0),
(76, 'Nalchhiti', 'নলছিটি ', 8420, 86, 9, 15, 0),
(77, 'Rajapur', 'রাজাপুর ', 8410, 87, 9, 15, 0),
(78, 'Bhandaria', 'ভান্ডারিয়া ', 8550, 96, 11, 15, 0),
(79, 'Dhaoa', 'ধোয়া ', 8552, 96, 11, 15, 0),
(80, 'Kanudashkathi', 'কানুদশকাঠি ', 8551, 96, 11, 15, 0),
(81, 'Jolagati', 'কানুদশকাঠি ', 8513, 97, 11, 15, 0),
(82, 'Joykul', 'জয়কুল ', 8512, 97, 11, 15, 0),
(83, 'Kaukhali', 'কাউখালী ', 8510, 97, 11, 15, 0),
(84, 'Keundia', 'কেউনিয়া ', 8511, 97, 11, 15, 0),
(85, 'Betmor Natun Hat', 'বেতমোর নাটুন হাট ', 8565, 98, 11, 15, 0),
(86, 'Gulishakhali', 'গুলিশাখালী ', 8563, 98, 11, 15, 0),
(87, 'Mathbaria', 'ম্যাথবাড়িয়া ', 8560, 98, 11, 15, 0),
(88, 'Halta', 'হালতা ', 8562, 98, 11, 15, 0),
(89, 'Shilarganj', 'শিলারগঞ্জ', 8566, 98, 11, 15, 0),
(90, 'Tiarkhali', 'তিরখালী  ', 8564, 98, 11, 15, 0),
(91, 'Tushkhali', 'তুষখালী ', 8561, 98, 11, 15, 0),
(92, 'Nazirpur', 'নাজিরপুর ', 8540, 99, 11, 15, 0),
(93, 'Nazirpur', 'নাজিরপুর ', 8540, 99, 11, 15, 0),
(94, 'Sriramkathi', 'শ্রীরামকাঠি ', 8541, 99, 11, 15, 0),
(95, 'Hularhat', 'হুলারহাট ', 8501, 101, 11, 15, 0),
(96, 'Parerhat', 'পারেরহাট ', 8502, 101, 11, 15, 0),
(97, 'Pirojpur Sadar', 'পিরোজপুর সদর ', 8500, 101, 11, 15, 0),
(98, 'Darus Sunnat', 'দারুস সুন্নাত ', 8521, 571, 11, 15, 0),
(99, 'Jalabari', 'জালবাড়ী', 8523, 571, 11, 15, 0),
(100, 'Kaurikhara', 'কৌরিখারা 8522', 8522, 571, 11, 15, 0),
(101, 'Swarupkathi', 'স্বরূপকাঠি ', 8520, 571, 11, 15, 0),
(102, 'Hajirhat', 'হাজিরহাট ', 8360, 572, 8, 15, 0),
(103, 'Hatshoshiganj', 'হাটসোশীগঞ্জ', 8350, 573, 8, 15, 0),
(104, 'Bagabandar', 'বাগবন্দর  ', 8621, 88, 10, 15, 0),
(105, 'Bauphal', 'বাউফল ', 8620, 88, 10, 15, 0),
(106, 'Birpasha', 'বীরপাশা ', 8622, 88, 10, 15, 0),
(107, 'Kalaia', 'কলাইয়া ', 8624, 88, 10, 15, 0),
(108, 'Kalishari', 'কালীশারী ', 8623, 88, 10, 15, 0),
(109, 'Dashmina', 'দশমিনা ', 8630, 89, 10, 15, 0),
(110, 'Galachipa', 'গলাচিপা ', 8640, 90, 10, 15, 0),
(111, 'Gazipur Bandar', 'গাজীপুর বান্দর', 8641, 90, 10, 15, 0),
(112, 'Kalapara', 'কলাপাড়া', 8650, 91, 10, 15, 0),
(113, 'Mahipur', 'মহিপুর', 8651, 91, 10, 15, 0),
(114, 'Dumkee', 'ডুমকি  ', 8602, 93, 10, 15, 0),
(115, 'Moukaran', 'মৌকরন ', 8601, 93, 10, 15, 0),
(116, 'Patuakhali Sadar', 'পটুয়াখালী সদর ', 8600, 93, 10, 15, 0),
(117, 'Rahimabad', 'রহিমাবাদ ', 8603, 93, 10, 15, 0),
(118, 'Subidkhali', 'সুবিদখালী ', 8610, 93, 10, 15, 0),
(119, 'Alikadam', 'আলীকদম ', 4650, 575, 12, 7, 0),
(120, 'Bandarban Sadar', 'বান্দরবান সদর', 4600, 103, 12, 7, 0),
(121, 'Naikhong', 'নাইখং', 4660, 106, 12, 7, 0),
(122, 'Roanchhari', 'রওনছড়ি ', 4610, 108, 12, 7, 0),
(123, 'Ruma', 'রুমা ', 4620, 109, 12, 7, 0),
(124, 'Lama', 'লামা ', 4641, 105, 12, 7, 0),
(125, 'Thanchi', 'থানচি', 4630, 104, 12, 7, 0),
(126, 'Akhaura', 'আখাউড়া', 3450, 117, 13, 7, 0),
(127, 'Azampur', 'আজমপুর ', 3451, 118, 13, 7, 0),
(128, 'Gangasagar', 'গঙ্গাসাগর ', 3452, 117, 13, 7, 0),
(129, 'Banchharampur', 'বাঞ্ছারামপুর ', 3420, 118, 13, 7, 0),
(130, 'Ashuganj', 'আশুগঞ্জ ', 3402, 110, 13, 7, 0),
(131, 'Ashuganj Share', 'আশুগঞ্জ শেয়ার ', 3403, 110, 13, 7, 0),
(132, 'Brahamanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর ', 3400, 110, 13, 7, 0),
(133, 'Poun', 'পন ', 3404, 110, 13, 7, 0),
(134, 'Talshahar', 'তালশহর ', 3401, 110, 13, 7, 0),
(135, 'Chandidar', 'চন্ডিদার ', 3462, 116, 13, 7, 0),
(136, 'Chargachh', 'চন্ডিদার', 3463, 116, 13, 7, 0),
(137, 'Gopinathpur', 'গোপীনাথপুর ', 3464, 116, 13, 7, 0),
(138, 'Kasba', 'কসবা ', 3460, 116, 13, 7, 0),
(139, 'Kuti', 'কুটি ', 3461, 116, 13, 7, 0),
(140, 'Jibanganj', 'জীবনগঞ্জ ', 3419, 113, 13, 7, 0),
(141, 'Kaitala', 'কেইতলা ', 3417, 113, 13, 7, 0),
(142, 'Laubfatehpur', 'লাউবফতেহপুর ', 3411, 113, 13, 7, 0),
(143, 'Nabinagar', 'নবীনগর ', 3410, 113, 13, 7, 0),
(144, 'Rasullabad', 'রসুল্লাবাদ ', 3412, 113, 13, 7, 0),
(145, 'Ratanpur', 'রতনপুর ', 3414, 113, 13, 7, 0),
(146, 'Salimganj', 'সেলিমগঞ্জ ', 3418, 113, 13, 7, 0),
(147, 'Shahapur', 'শাহাপুর ', 3415, 113, 13, 7, 0),
(148, 'Shamgram', 'শামগ্রাম ', 3413, 113, 13, 7, 0),
(149, 'Fandauk', 'ফানডৌক', 3441, 112, 13, 7, 0),
(150, 'Nasirnagar', 'নাসিরনগর ', 3443, 112, 13, 7, 0),
(151, 'Chandura', 'চান্দুরা ', 3432, 114, 13, 7, 0),
(152, 'Sarial', 'সেরিয়াল ', 3430, 114, 13, 7, 0),
(153, 'Shahbajpur', 'শাহবাজপুর ', 3431, 114, 13, 7, 0),
(154, 'Baburhat', 'বাবুরহাট', 3602, 120, 14, 7, 0),
(155, 'Chandpur Sadar', 'চাঁদপুর সদর ', 3600, 120, 14, 7, 0),
(156, 'Puranbazar', 'পুরানবাজার ', 3601, 120, 14, 7, 0),
(157, 'Sahatali', 'সাহাতলী ', 3603, 120, 14, 7, 0),
(158, 'Chandra', 'চন্দ্র ', 3651, 121, 14, 7, 0),
(159, 'Faridganj', 'ফরিদগঞ্জ ', 3650, 121, 14, 7, 0),
(160, 'Gridkaliandia', 'গ্রিডকালিয়াণ্ডিয়া ', 3653, 121, 14, 7, 0),
(161, 'Islampur Shah Isain', 'ইসলামপুর শাহ ইসাইন ', 3655, 121, 14, 7, 0),
(162, 'Rampurbazar', 'রামপুরবাজার ', 3654, 121, 14, 7, 0),
(163, 'Rupsha', 'রুপশা ', 3652, 121, 14, 7, 0),
(164, 'Bolakhal', 'বোলাখাল ', 3611, 123, 14, 7, 0),
(165, 'Hajiganj', 'হাজীগঞ্জ ', 3610, 123, 14, 7, 0),
(166, 'Gandamara', 'গন্ডামারা ', 3661, 122, 14, 7, 0),
(167, 'Hayemchar', 'হায়মচর ', 3660, 122, 14, 7, 0),
(168, 'Kachua', 'কচুয়া ', 3630, 124, 14, 7, 0),
(169, 'Pak Shrirampur', 'পাক শ্রীরামপুর ', 3631, 124, 14, 7, 0),
(170, 'Rahima Nagar', 'রহিমা নগর ', 3632, 124, 14, 7, 0),
(171, 'Shachar', 'শাচর ', 3633, 124, 14, 7, 0),
(172, 'Kalipur', 'কালীপুর ', 3642, 125, 14, 7, 0),
(173, 'Matlobganj', 'মতলবগঞ্জ ', 3640, 125, 14, 7, 0),
(174, 'Mohanpur', 'মোহনপুর ', 3641, 126, 14, 7, 0),
(175, 'Chotoshi', 'ছোটোশি ', 3623, 127, 14, 7, 0),
(176, 'Islamia Madrasha', 'ইসলামিয়া মাদ্রাসা ', 3624, 127, 14, 7, 0),
(177, 'Khilabazar', 'খেলাবাজার ', 3621, 127, 14, 7, 0),
(178, 'Pashchim Kherihar Al', 'পশিম খেরিহর আল ', 3622, 127, 14, 7, 0),
(179, 'UNKILA', 'ইউএনকেআইলা', 3620, 127, 14, 7, 0),
(180, 'Anowara', 'আনোয়ারা ', 4376, 128, 15, 7, 0),
(181, 'Battali', 'বাটালি ', 4378, 128, 15, 7, 0),
(182, 'Paroikora', 'পরোইকোড়া ', 4377, 128, 15, 7, 0),
(183, 'Boalkhali', 'বোয়ালখালী ', 4366, 129, 15, 7, 0),
(184, 'Charandwip', 'চরনদ্বীপ ', 4369, 129, 15, 7, 0),
(185, 'Iqbal Park', 'ইকবাল পার্ক ', 4365, 129, 15, 7, 0),
(186, 'Kadurkhal', 'কদুরখাল ', 4368, 129, 15, 7, 0),
(187, 'Kanungopara', 'কানুঙ্গোপাড়া ', 4363, 129, 15, 7, 0),
(188, 'Sakpura', 'সাকপুরা ', 4367, 129, 15, 7, 0),
(189, 'Saroatoli', 'সরোয়াতলি ', 4364, 129, 15, 7, 0),
(190, 'Al- Amin Baria Madra', 'আল- আমিন বড়িয়া মাদরা ', 4221, 576, 15, 7, 0),
(191, 'Amin Jute Mills', 'আমিন জুট মিলস ', 4211, 576, 15, 7, 0),
(192, 'Anandabazar', 'আনন্দবাজার ', 4215, 576, 15, 7, 0),
(193, 'Bayezid Bostami', 'বায়েজিদ বোস্তামি ', 4210, 576, 15, 7, 0),
(194, 'Chandgaon', 'চাঁদগাও ', 4212, 576, 15, 7, 0),
(195, 'Chawkbazar', 'চকবাজার ', 4203, 576, 15, 7, 0),
(196, 'Chitt. Cantonment', 'চিট ক্যান্টনমেন্ট ', 4220, 576, 15, 7, 0),
(197, 'Chitt. Customs Acca', 'চিট কাষ্টম একাকা', 4219, 576, 15, 7, 0),
(198, 'Chitt. Politechnic In.', 'চিট পলিটেকনিক ইন', 4209, 576, 15, 7, 0),
(199, 'Chitt. Sailers Colon', 'চিট. সেলা কলোন ', 4218, 576, 15, 7, 0),
(200, 'Chattogram Airport', 'চাটোগ্রাম বিমানবন্দর', 4205, 576, 15, 7, 0),
(201, 'Chattogram Bandar', 'চাটোগ্রাম বান্দর ', 4100, 576, 15, 7, 0),
(202, 'Chattogram GPO', 'চ্যাটগ্রাম জিপিও ', 4000, 576, 15, 7, 0),
(203, 'Export Processing', 'রফতানি প্রসেসিং', 4223, 576, 15, 7, 0),
(204, 'Firozshah', 'ফিরোজশাহ ', 4207, 576, 15, 7, 0),
(205, 'Halishahar', 'হালিশহর ', 4216, 576, 15, 7, 0),
(206, 'Khulshi', 'খুলশী ', 4225, 576, 15, 7, 0),
(207, 'Jalalabad', 'জালালাবাদ ', 4214, 576, 15, 7, 0),
(208, 'Jaldia Merine Accade', 'জলদিয়া মেরিন অ্যাকડેড ', 4206, 576, 15, 7, 0),
(209, 'Middle Patenga', 'মধ্য পতেঙ্গা ', 4222, 576, 15, 7, 0),
(210, 'Mohard', 'মোহার্ড ', 4208, 576, 15, 7, 0),
(211, 'North Halishahar', 'উত্তর হালিশহর ', 4226, 576, 15, 7, 0),
(212, 'North Katuli', 'উত্তর কাতুলি ', 4217, 576, 15, 7, 0),
(213, 'Pahartoli', 'পাহাড়তলী ', 4202, 576, 15, 7, 0),
(214, 'Patenga', 'পতেঙ্গা ', 4204, 576, 15, 7, 0),
(215, 'Rampur TSO', 'রামপুর টিএসও ', 4224, 576, 15, 7, 0),
(216, 'Wazedia', 'ওয়াজিডিয়া ', 4213, 576, 15, 7, 0),
(217, 'Barma', 'বারমা ', 4383, 577, 15, 7, 0),
(218, 'Dohazari', 'দোহাজারী ', 4382, 577, 15, 7, 0),
(219, 'East Joara', 'পূর্ব জোরা ', 4380, 577, 15, 7, 0),
(220, 'Gachbaria', 'গছবাড়িয়া ', 4381, 577, 15, 7, 0),
(221, 'Bhandar Sharif', 'ভান্ডার শরীফ ', 4352, 132, 15, 7, 0),
(222, 'Fatikchhari', 'ফটিকছড়ি ', 4350, 132, 15, 7, 0),
(223, 'Najirhat', 'নাজিরহাট', 4353, 132, 15, 7, 0),
(224, 'Nanupur', 'নানুপুর ', 4351, 132, 15, 7, 0),
(225, 'Narayanhat', 'নারায়ণহাট ', 4355, 132, 15, 7, 0),
(226, 'Chitt.University', 'চিট বিশ্ববিদ্যালয় ', 4331, 133, 15, 7, 0),
(227, 'Fatahabad', 'ফাতাহাবাদ ', 4335, 133, 15, 7, 0),
(228, 'Gorduara', 'গর্ডুয়ারা ', 4332, 133, 15, 7, 0),
(229, 'Hathazari', 'হাটহাজারী ', 4330, 133, 15, 7, 0),
(230, 'Katirhat', 'কটিরহাট ', 4333, 133, 15, 7, 0),
(231, 'Madrasa', 'মাদ্রাসা ', 4339, 133, 15, 7, 0),
(232, 'Mirzapur', 'মির্জাপুর ', 4334, 133, 15, 7, 0),
(233, 'Nuralibari', 'নুরালিবাড়ি ', 4337, 133, 15, 7, 0),
(234, 'Yunus Nagar', 'ইউনূস নগর ', 4338, 133, 15, 7, 0),
(235, 'Banigram', 'বনিগ্রাম ', 4393, 578, 15, 7, 0),
(236, 'Gunagari', 'গুণগরী ', 4392, 578, 15, 7, 0),
(237, 'Jaldi', 'জলদি ', 4390, 578, 15, 7, 0),
(238, 'Khan Bahadur', 'খান বাহাদুর ', 4391, 578, 15, 7, 0),
(239, 'Chunti', ' কুন্তি', 4398, 134, 15, 7, 0),
(240, 'Lohagara', 'লোহাগাড়া ', 4396, 134, 15, 7, 0),
(241, 'Padua', 'পদুয়া ', 4397, 134, 15, 7, 0),
(242, 'Abutorab', 'আবুতোরব', 4321, 135, 15, 7, 0),
(243, 'Azampur', 'আজমপুর ', 4325, 135, 15, 7, 0),
(244, 'Bharawazhat', 'ভর্তাঘাট  ', 4323, 135, 15, 7, 0),
(245, 'Darrogahat', 'দারোঘাট ', 4322, 135, 15, 7, 0),
(246, 'Joarganj', 'জোয়ারগঞ্জ ', 4324, 135, 15, 7, 0),
(247, 'Korerhat', 'কোরেহাট ', 4327, 135, 15, 7, 0),
(248, 'Mirsharai', 'মীরসরাই ', 4320, 135, 15, 7, 0),
(249, 'Mohazanhat', 'মহাজানহাট ', 4328, 135, 15, 7, 0),
(250, 'Budhpara', 'বুধপাড়া ', 4371, 136, 15, 7, 0),
(251, 'Patiya Head Office', 'পটিয়া হেড অফিস ', 4370, 136, 15, 7, 0),
(252, 'Dhamair', 'ধামইর ', 4361, 137, 15, 7, 0),
(253, 'Rangunia', 'রাঙ্গুনিয়া ', 4360, 137, 15, 7, 0),
(254, 'B.I.T Post Office', 'B.I.T ডাকঘর ', 4349, 138, 15, 7, 0),
(255, 'Beenajuri', 'বীনাজুরী ', 4341, 138, 15, 7, 0),
(256, 'Dewanpur', 'দেওয়ানপুর ', 4347, 138, 15, 7, 0),
(257, 'Fatepur', 'দেওয়ানপুর ', 4345, 138, 15, 7, 0),
(258, 'Gahira', 'গহিরা ', 4343, 138, 15, 7, 0),
(259, 'Guzra Noapara', 'গুজরা নোয়াপাড়া ', 4346, 138, 15, 7, 0),
(260, 'jagannath Hat', 'জগন্নাথ হাট ', 4344, 138, 15, 7, 0),
(261, 'Kundeshwari', 'কুণ্ডেশ্বরী ', 4342, 138, 15, 7, 0),
(262, 'Kundeshwari', 'কুণ্ডেশ্বরী ', 4342, 138, 15, 7, 0),
(263, 'Mohamuni', 'মহামুনি ', 4348, 138, 15, 7, 0),
(264, 'Rouzan', 'রাউজান ', 4340, 138, 15, 7, 0),
(265, 'Sandwip', 'সন্দ্বীপ ', 4300, 139, 15, 7, 0),
(266, 'Shiberhat', 'শিবেরহাট', 4301, 139, 15, 7, 0),
(267, 'Urirchar', 'উরিচর ', 4302, 139, 15, 7, 0),
(268, 'Baitul Ijjat', 'বায়তুল ইজ্জত ', 4387, 140, 15, 7, 0),
(269, 'Bazalia', 'বাজালিয়া ', 4388, 140, 15, 7, 0),
(270, 'Satkania', 'সাতকানিয়া ', 4386, 140, 15, 7, 0),
(271, 'Barabkunda', 'বড়বকুন্ডা ', 4312, 141, 15, 7, 0),
(272, 'Baroidhala', 'বারোডালা ', 4311, 141, 15, 7, 0),
(273, 'Bawashbaria', 'বাওয়াশবাড়িয়া ', 4313, 141, 15, 7, 0),
(274, 'Bhatiari', 'ভাটিয়ারি ', 4315, 141, 15, 7, 0),
(275, 'Fouzdarhat', 'ফৌজদারহাট ', 4316, 141, 15, 7, 0),
(276, 'Jafrabad', 'জাফরাবাদ ', 4317, 141, 15, 7, 0),
(277, 'Kumira', 'কুমীরা ', 4314, 141, 15, 7, 0),
(278, 'Sitakunda', 'সীতাকুণ্ড ', 4310, 141, 15, 7, 0),
(279, 'Barura', 'বড়ুরা ', 3560, 579, 16, 7, 0),
(280, 'Murdafarganj', 'মুরদফরগঞ্জ ', 3562, 579, 16, 7, 0),
(281, 'Poyalgachha', 'পাইয়েলগাছা ', 3561, 579, 16, 7, 0),
(282, 'Brahmanpara', 'ব্রাহ্মণপাড়া ', 3526, 159, 16, 7, 0),
(283, 'Burichang', 'বুড়িচং ', 3520, 160, 16, 7, 0),
(284, 'Maynamoti bazar', 'ময়নামতি বাজার ', 3521, 160, 16, 7, 0),
(285, 'Chandia', 'চান্দিয়া ', 3510, 161, 16, 7, 0),
(286, 'Madhaiabazar', 'মাধাইবাজার ', 3511, 161, 16, 7, 0),
(287, 'Mohichail', 'মহিচাইল ', 3510, 161, 16, 7, 0),
(288, 'Batisa', 'বাটিসা ', 3551, 162, 16, 7, 0),
(289, 'Chiora', 'চিয়েরা', 3552, 162, 16, 7, 0),
(290, 'Chouddagram', 'চৌদ্দগ্রাম ', 3550, 162, 16, 7, 0),
(291, 'Comilla Contoment', 'কুমিল্লা সেনানিবাস ', 3501, 166, 16, 7, 0),
(292, 'Comilla Sadar', 'কুমিল্লা সদর', 3500, 166, 16, 7, 0),
(293, 'Courtbari', 'কোর্টবাড়ি ', 3503, 166, 16, 7, 0),
(294, 'Halimanagar', 'হালিমনগর ', 3502, 166, 16, 7, 0),
(295, 'Suaganj', 'সুয়াগঞ্জ ', 3504, 166, 16, 7, 0),
(296, 'Dashpara', 'দশপাড়া ', 3518, 163, 16, 7, 0),
(297, 'Daudkandi', 'দাউদকান্দি', 3516, 163, 16, 7, 0),
(298, 'Eliotganj', 'এলিয়টগঞ্জ ', 3519, 163, 16, 7, 0),
(299, 'Gouripur', 'গৌরীপুর ', 3517, 163, 16, 7, 0),
(300, 'Barashalghar', 'বড়শালঘর ', 3532, 164, 16, 7, 0),
(301, 'Davidhar', 'ডেভিডার ', 3530, 164, 16, 7, 0),
(302, 'Dhamtee', 'ধামতি ', 3533, 164, 16, 7, 0),
(303, 'Gangamandal', 'গঙ্গামণ্ডল ', 3531, 164, 16, 7, 0),
(304, 'Homna', 'হোমনা', 3546, 165, 16, 7, 0),
(305, 'Bipulasar', 'বিপুলস্যার', 3572, 167, 16, 7, 0),
(306, 'Laksam', 'লাকসাম ', 3570, 167, 16, 7, 0),
(307, 'Lakshamanpur', 'লক্ষ্মণপুর ', 3571, 167, 16, 7, 0),
(308, 'Chhariabazar', 'ছারিয়াবাজার ', 3582, 580, 16, 7, 0),
(309, 'Dhalua', 'ধলুয়া ', 3581, 580, 16, 7, 0),
(310, 'Gunabati', 'গুণাবতী', 3583, 580, 16, 7, 0),
(311, 'Langalkot', 'লাঙ্গলকোট', 3580, 580, 16, 7, 0),
(312, 'Bangra', 'বঙ্গরা ', 3543, 170, 16, 7, 0),
(313, 'Companyganj', 'কোম্পানীগঞ্জ ', 3542, 170, 16, 7, 0),
(314, 'Muradnagar', 'মুরাদনগর ', 3540, 170, 16, 7, 0),
(315, 'Pantibazar', 'পান্তিবাজার ', 3545, 170, 16, 7, 0),
(316, 'Ramchandarpur', 'রামচন্দ্রপুর ', 3541, 170, 16, 7, 0),
(317, 'Sonakanda', 'সোনাকান্দা ', 3544, 170, 16, 7, 0),
(318, 'Badarkali', 'বদরকলি', 4742, 174, 17, 7, 0),
(319, 'Chiringga', 'চিরিংগা ', 4740, 174, 17, 7, 0),
(320, 'Chiringga S.O', 'চিরিংগা এস.ও.', 4741, 174, 17, 7, 0),
(321, 'Malumghat', 'মালুমঘাট ', 4743, 174, 17, 7, 0),
(322, 'Coxs Bazar Sadar', 'কক্সবাজার সদর ', 4700, 176, 17, 7, 0),
(323, 'Eidga', '.দগাহ', 4702, 176, 17, 7, 0),
(324, 'Zhilanja', 'ঝিলানজা ', 4701, 176, 17, 7, 0),
(325, 'Gorakghat', 'গোরাকঘাট ', 4710, 581, 17, 7, 0),
(326, 'Kutubdia', 'কুতুবদিয়া ', 4720, 177, 17, 7, 0),
(327, 'Ramu', 'রামু ', 4730, 179, 17, 7, 0),
(328, 'Hnila', 'হ্নিলা ', 4761, 180, 17, 7, 0),
(329, 'St.Martin', 'সেন্টমার্টিন ', 4762, 180, 17, 7, 0),
(330, 'Teknaf', 'টেকনাফ ', 4760, 180, 17, 7, 0),
(331, 'Ukhia', 'উখিয়া ', 4750, 181, 17, 7, 0),
(332, 'Chhagalnaia', 'ছাগলনাইয়া ', 3910, 184, 18, 7, 0),
(333, 'Daraga Hat', 'দারাগা হাট ', 3912, 184, 18, 7, 0),
(334, 'Maharajganj', 'মহারাজগঞ্জ ', 3911, 184, 18, 7, 0),
(335, 'Puabashimulia', 'পূবাশিমুলিয়া ', 3913, 184, 18, 7, 0),
(336, 'Silonia', 'সিলোনিয়া ', 3922, 185, 18, 7, 0),
(337, 'Dagondhuia', 'দাগনধুয়া ', 3920, 185, 18, 7, 0),
(338, 'Dudmukha', 'দুদমুখ ', 3921, 185, 18, 7, 0),
(339, 'sindurpur', 'সিঁদুরপুর ', 3923, 185, 18, 7, 0),
(340, 'Fazilpur', 'ফাজিলপুর ', 3901, 183, 18, 7, 0),
(341, 'Feni Sadar', 'ফেনী সদর ', 3900, 183, 18, 7, 0),
(342, 'Laskarhat', 'লস্করহাট ', 3903, 183, 18, 7, 0),
(343, 'Sharshadie', 'শার্শাদি ', 3902, 183, 18, 7, 0),
(344, 'Fulgazi', 'ফুলগাজী ', 3942, 186, 18, 7, 0),
(345, 'Munshirhat', 'মুন্সিরহাট ', 3943, 186, 18, 7, 0),
(346, 'Pashurampur', 'পশুরামপুর ', 3940, 186, 18, 7, 0),
(347, 'Shuarbazar', 'শুয়ারবাজার ', 3941, 186, 18, 7, 0),
(348, 'Ahmadpur', 'আহমদপুর ', 3932, 189, 18, 7, 0),
(349, 'Kazirhat', 'কাজিরহাট ', 3933, 189, 18, 7, 0),
(350, 'Motiganj', 'মতিগঞ্জ ', 3931, 189, 18, 7, 0),
(351, 'Sonagazi', 'সোনাগাজি ', 3930, 189, 18, 7, 0),
(352, 'Mangal Kandi', 'মঙ্গল কান্দি ', 3937, 189, 18, 7, 0),
(353, 'Diginala', 'দিঘিনালা ', 4420, 190, 19, 7, 0),
(354, 'Khagrachari Sadar', 'খাগড়াছড়ি সদর ', 4400, 191, 19, 7, 0),
(355, 'Laxmichhari', 'লক্ষ্মীছড়ি ', 4470, 192, 19, 7, 0),
(356, 'Mahalchhari', 'মহালছড়ি ', 4430, 193, 19, 7, 0),
(357, 'Manikchhari', 'মানিকছড়ি ', 4460, 193, 19, 7, 0),
(358, 'Matiranga', 'মাটিরাঙ্গা ', 4450, 195, 19, 7, 0),
(359, 'Panchhari', 'পানছড়ি ', 4410, 196, 19, 7, 0),
(360, 'Ramghar Head Office', 'রামঘর সদর দফতর ', 4440, 197, 19, 7, 0),
(361, 'Char Alexgander', 'চর আলেক্সগান্ডার ', 3730, 582, 20, 7, 0),
(362, 'Ramgatirhat', 'রামগতিরহাট ', 3732, 582, 20, 7, 0),
(363, 'Hazir Hat', 'হাজির হাট ', 3731, 202, 20, 7, 0),
(364, 'Amani Lakshimpur', 'আমানী লক্ষীপুর ', 3709, 198, 20, 7, 0),
(365, 'Bhabaniganj', 'ভবানীগঞ্জ ', 3702, 198, 20, 7, 0),
(366, 'Chandraganj', 'চন্দ্রগঞ্জ ', 3708, 198, 20, 7, 0),
(367, 'Choupalli', 'চৌপল্লি ', 3707, 198, 20, 7, 0),
(368, 'Dalal Bazar', 'দালাল বাজার ', 3701, 198, 20, 7, 0),
(369, 'Duttapara', 'দত্তপাড়া ', 3706, 198, 20, 7, 0),
(370, 'Keramatganj', 'কেরামতগঞ্জ ', 3704, 198, 20, 7, 0),
(371, 'Lakshimpur Sadar', 'লক্ষীপুর সদর ', 3700, 198, 20, 7, 0),
(372, 'Mandari', 'মান্ডারী ', 3703, 198, 20, 7, 0),
(373, 'Rupchara', 'রুপচারা ', 3705, 198, 20, 7, 0),
(374, 'Alipur', 'আলিপুর ', 3721, 200, 20, 7, 0),
(375, 'Dolta', 'ডল্টা ', 3725, 200, 20, 7, 0),
(376, 'Kanchanpur', 'কাঞ্চনপুর ', 3723, 200, 20, 7, 0),
(377, 'Naagmud', 'নাগমুদ ', 3724, 200, 20, 7, 0),
(378, 'Panpara', 'পানপাড়া ', 3722, 200, 20, 7, 0),
(379, 'Ramganj', 'রামগঞ্জ ', 3720, 200, 20, 7, 0),
(380, 'Bhuiyanbari', 'ভূঁইবাড়ী ', 3714, 199, 20, 7, 0),
(381, 'Haydarganj', 'হায়দারগঞ্জ ', 3713, 199, 20, 7, 0),
(382, 'Haydarganj', 'হায়দারগঞ্জ ', 3713, 199, 20, 7, 0),
(383, 'Khaser Hat', 'খাসের হাট ', 3713, 199, 20, 7, 0),
(384, 'Nagerdighirpar	3712', 'নাগেরদীঘিরপাড়', 3712, 199, 20, 7, 0),
(385, 'Rakhallia', 'রাখালিয়া ', 3711, 199, 20, 7, 0),
(386, 'Raypur', 'রায়পুর ', 3710, 199, 20, 7, 0),
(387, 'Basur Hat', 'বসুর হাট ', 3850, 583, 21, 7, 0),
(388, 'Charhajari', 'চরহাজারী ', 3851, 583, 21, 7, 0),
(389, 'Alaiarpur', 'আলাইপুরপুর ', 3831, 204, 21, 7, 0),
(390, 'Amisha Para', 'আমিশা পাড়া ', 3847, 204, 21, 7, 0),
(391, 'Banglabazar', 'বাংলাবাজার ', 3822, 204, 21, 7, 0),
(392, 'Bazra', 'বজরা ', 3824, 204, 21, 7, 0),
(393, 'Begumganj', 'বেগমগঞ্জ ', 3820, 204, 21, 7, 0),
(394, 'Bhabani Jibanpur', 'ভবানী জীবনপুর ', 3837, 204, 21, 7, 0),
(395, 'Choumohani', 'চৌমোহনী ', 3821, 204, 21, 7, 0),
(396, 'Dauti', 'দৌতি ', 3843, 204, 21, 7, 0),
(397, 'Durgapur', 'দুর্গাপুর ', 3848, 204, 21, 7, 0),
(398, 'Gopalpur', 'গোপালপুর ', 3828, 204, 21, 7, 0),
(399, 'Jamidar Hat', 'জামিদার হাট ', 3825, 204, 21, 7, 0),
(400, 'Joyag', 'জয়াগ ', 3844, 204, 21, 7, 0),
(401, 'Joynarayanpur', 'জয়নারায়ণপুর ', 3829, 204, 21, 7, 0),
(402, 'Khalafat Bazar', 'খালাফাত বাজার ', 3833, 204, 21, 7, 0),
(403, 'Khalishpur', 'খালিশপুর ', 3842, 204, 21, 7, 0),
(404, 'Maheshganj', 'মহেশগঞ্জ ', 3838, 204, 21, 7, 0),
(405, 'Mir Owarishpur', 'মীর ওওয়ারিশপুর ', 3823, 204, 21, 7, 0),
(406, 'Nadona', 'নাদোনা ', 3839, 204, 21, 7, 0),
(407, 'Nandiapara', 'নন্দিয়াপাড়া ', 3841, 204, 21, 7, 0),
(408, 'Oachhekpur', 'ওচেকপুর ', 3835, 204, 21, 7, 0),
(409, 'Rajganj', 'রাজগঞ্জ ', 3834, 204, 21, 7, 0),
(410, 'Sonaimuri', 'সোনাইমুড়ি ', 3827, 204, 21, 7, 0),
(411, 'Tangirpar', 'টাঙ্গিরপাড় ', 3832, 204, 21, 7, 0),
(412, 'Thanar Hat', 'থানার হাট ', 3845, 204, 21, 7, 0),
(413, 'Bansa Bazar', 'বনসা বাজার ', 3879, 205, 21, 7, 0),
(414, 'Bodalcourt', 'বোডালকোর্ট ', 3873, 205, 21, 7, 0),
(415, 'Chatkhil', 'চাটখিল ', 3870, 205, 21, 7, 0),
(416, 'Dosh Gharia', 'দোষ ঘড়িয়া ', 3878, 205, 21, 7, 0),
(417, 'Karihati', 'কারিহাটি ', 3877, 205, 21, 7, 0),
(418, 'Khilpara', 'খিলপাড়া ', 3872, 205, 21, 7, 0),
(419, 'Palla', 'পল্লা ', 3871, 205, 21, 7, 0),
(420, 'Rezzakpur', 'রেজ্জাকপুর ', 3874, 205, 21, 7, 0),
(421, 'Sahapur', 'সাহাপুর ', 3881, 205, 21, 7, 0),
(422, 'Sampara', 'সাম্পারা ', 3882, 205, 21, 7, 0),
(423, 'Shingbahura', 'শিংবাহুরা ', 3883, 205, 21, 7, 0),
(424, 'Solla', 'সোল্লা ', 3875, 205, 21, 7, 0),
(425, 'Afazia', 'আফাজিয়া ', 3891, 207, 21, 7, 0),
(426, 'Hatiya', 'হাতিয়া ', 3890, 207, 21, 7, 0),
(427, 'Tamoraddi', 'তমোরাদদী ', 3892, 207, 21, 7, 0),
(428, 'Chaprashir Hat', 'চাপড়াশির হাট ', 3811, 203, 21, 7, 0),
(429, 'Char Jabbar', 'চর জব্বার ', 3812, 203, 21, 7, 0),
(430, 'Charam Tua', 'চর তুয়া ', 3809, 203, 21, 7, 0),
(431, 'Din Monir Hat', 'দিন মনির হাট ', 3803, 203, 21, 7, 0),
(432, 'Kabirhat', 'কবিরহাট ', 3807, 203, 21, 7, 0),
(433, 'Khalifar Hat', 'কবিরহাট ', 3808, 203, 21, 7, 0),
(434, 'Mriddarhat', 'মৃদ্দারহাট ', 3806, 203, 21, 7, 0),
(435, 'Noakhali College', 'নোয়াখালী কলেজ ', 3801, 203, 21, 7, 0),
(436, 'Noakhali Sadar', 'নোয়াখালী সদর ', 3800, 203, 21, 7, 0),
(437, 'Pak Kishoreganj', 'পাক কিশোরগঞ্জ', 3804, 203, 21, 7, 0),
(438, 'Sonapur', 'সোনাপুর ', 3802, 203, 21, 7, 0),
(439, 'Beezbag', 'বিজেবাগ ', 3862, 206, 21, 7, 0),
(440, 'Chatarpaia', 'চাটরপইয়া ', 3864, 206, 21, 7, 0),
(441, 'Kallyandi', 'কল্যাণ্ডী ', 3861, 206, 21, 7, 0),
(442, 'Kankirhat', 'কঙ্কিরহাট ', 3863, 206, 21, 7, 0),
(443, 'Senbag', 'সেনবাগ ', 3860, 206, 21, 7, 0),
(444, 'T.P. Lamua', 'টি.পি. লামুয়া ', 3865, 206, 21, 7, 0),
(445, 'Barakal', 'বড়কাল ', 4570, 214, 22, 7, 0),
(446, 'Bilaichhari', 'বিলাইছড়ি ', 4550, 212, 22, 7, 0),
(447, 'Jarachhari', 'জারাছড়ি ', 4560, 215, 22, 7, 0),
(448, 'Betbunia', 'বেতবুনিয়া', 4511, 584, 22, 7, 0),
(449, 'Kalampati', 'কালামপতি', 4510, 584, 22, 7, 0),
(450, 'Chandraghona', 'চন্দ্রঘোনা ', 4531, 217, 22, 7, 0),
(451, 'Kaptai', 'কাপ্তাই ', 4530, 217, 22, 7, 0),
(452, 'Kaptai Nuton Bazar', 'কাপ্তাই নতুন বাজার ', 4533, 217, 22, 7, 0),
(453, 'Kaptai Project', 'কাপ্তাই প্রকল্প ', 4532, 217, 22, 7, 0),
(454, 'Longachh', 'লঙ্গাছ ', 4580, 218, 22, 7, 0),
(455, 'Marishya', 'মেরিশ্যা ', 4590, 585, 22, 7, 0),
(456, 'Nanichhar', 'নানিচর ', 4520, 219, 22, 7, 0),
(457, 'Rajsthali', 'রাজস্থালি', 4540, 216, 22, 7, 0),
(458, 'Rangamati Sadar', 'রাঙ্গামাটি সদর ', 4500, 211, 22, 7, 0),
(459, 'Dhaka Cantonment--TSO', 'ঢাকা সেনানিবাস - টিএসও ', 1206, 586, 23, 3, 0),
(460, 'Dhamrai', 'ধামরাই ', 1350, 41, 23, 3, 0),
(461, 'Kalampur', 'কালামপুর ', 1351, 41, 23, 3, 0),
(462, 'Jigatala TSO', 'জিগাতলা টিএসও ', 1209, 45, 23, 3, 0),
(463, 'Banani TSO', 'বনানী টিএসও ', 1213, 20, 23, 3, 0),
(464, 'Badda', 'বাড্ডা ', 1212, 20, 23, 3, 0),
(465, 'Gulshan Model Town', 'গুলশান মডেল টাউন ', 1212, 20, 23, 3, 0),
(466, 'Dhania TSO', 'ধনিয়া টিএসও ', 1236, 587, 23, 3, 0),
(467, 'Meghula', 'মেঘুলা ', 1330, 41, 23, 3, 0),
(468, 'Joypara', 'জয়পাড়া ', 1331, 41, 23, 3, 0),
(469, 'Narisha', 'নরিশা ', 1332, 41, 23, 3, 0),
(470, 'Palamganj', 'পালমগঞ্জ ', 1331, 41, 23, 3, 0),
(471, 'Ati', 'এতি ', 1312, 588, 23, 3, 0),
(472, 'Dhaka Jute Mills', 'ঢাকা পাট মিলস 1311', 1311, 588, 23, 3, 0),
(473, 'Kalatia', 'কলটিয়া ', 1313, 588, 23, 3, 0),
(474, 'Keraniganj', 'কেরানীগঞ্জ ', 1310, 588, 23, 3, 0),
(475, 'KhilgaonTSO', 'খিলগাঁও এসটিও ', 1219, 17, 23, 3, 0),
(476, 'KhilkhetTSO', 'খিলক্ষেতএসও ', 1229, 21, 23, 3, 0),
(477, 'Posta TSO', 'পোস্ট টিএসও  ', 1211, 49, 23, 3, 0),
(478, 'Mirpur TSO', 'মিরপুর টিএসও ', 1216, 15, 23, 3, 0),
(479, 'Mohammadpur Housing', 'মোহাম্মদপুর হাউজিং ', 1207, 19, 23, 3, 0),
(480, 'Sangsad BhabanTSO', 'সংসদ ভবন ', 1225, 19, 23, 3, 0),
(481, 'BangabhabanTSO', 'বঙ্গভবন', 1222, 16, 23, 3, 0),
(482, 'DilkushaTSO', 'দিলকুশতসো  ', 1223, 16, 23, 3, 0),
(483, 'Churain', 'চুরাইন ', 1325, 589, 23, 3, 0),
(484, 'Daudpur', 'দাউদপুর ', 1322, 589, 23, 3, 0),
(485, 'Hasnabad', 'হাসনাবাদ ', 1321, 589, 23, 3, 0),
(486, 'Khalpar', 'খাল্পার ', 1324, 589, 23, 3, 0),
(487, 'Nawabganj', 'নবাবগঞ্জ ', 1320, 589, 23, 3, 0),
(488, 'Kalabagan', 'কলাবাগান ', 1205, 52, 23, 3, 0),
(489, 'Dhaka GPO', 'ঢাকা জিপিও  ', 1000, 29, 23, 3, 0),
(490, 'Shantinagr TSO', 'শান্তিনাগর টিএসও ', 1217, 33, 23, 3, 0),
(491, 'Basabo TSO', 'বাসাবো টিএসও', 1214, 54, 23, 3, 0),
(492, 'Amin Bazar', 'আমিন বাজার ', 1348, 590, 23, 3, 0),
(493, 'Dairy Farm', 'দুগ্ধ খামার ', 1341, 590, 23, 3, 0),
(494, 'EPZ', 'ইপিজেড ', 1349, 590, 23, 3, 0),
(495, 'Jahangirnagar University', 'জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ', 1342, 590, 23, 3, 0),
(496, 'Kashem Cotton Mills', 'কাশেম কটন মিলস ', 1346, 590, 23, 3, 0),
(497, 'Rajphulbaria', 'রাজফুলবাড়িয়া ', 1347, 590, 23, 3, 0),
(498, 'Savar', 'সাভার ', 1340, 590, 23, 3, 0),
(499, 'Savar Canttonment', 'সাভার ক্যান্টনমেন্ট ', 1344, 590, 23, 3, 0),
(500, 'Saver P.A.T.C', 'সাভার P.A.T.C ', 1343, 590, 23, 3, 0),
(501, 'Shimulia', 'শিমুলিয়া ', 1345, 590, 23, 3, 0),
(502, 'Dhaka Sadar HO', 'ঢাকা সদর এইচও 1100', 1100, 25, 23, 3, 0),
(503, 'Gandaria TSO', 'গেন্ডারিয়া টিএসও ', 1204, 25, 23, 3, 0),
(504, 'Wari TSO', 'ওয়ারী টিএসও ', 1203, 25, 23, 3, 0),
(505, 'Tejgaon TSO', 'তেজগাঁও টিএসও ', 1215, 24, 23, 3, 0),
(506, 'Dhaka Politechnic', ' ঢাকা পলিটেকনিক  ', 1208, 56, 23, 3, 0),
(507, 'Uttara Model TownTSO', 'উত্তরা মডেল টাউনটিএসও ', 1230, 27, 23, 3, 0),
(508, 'Alfadanga', 'আলফাডাঙ্গা ', 7870, 591, 24, 3, 0),
(509, 'Bhanga', 'ভাঙ্গা ', 7830, 224, 24, 3, 0),
(510, 'Boalmari', 'বোয়ালমারী ', 7860, 222, 24, 3, 0),
(511, 'Rupatpat', 'রুপতপট ', 7861, 222, 24, 3, 0),
(512, 'Charbadrashan', 'চরব্রদশন ', 7810, 226, 24, 3, 0),
(513, 'Ambikapur', 'অম্বিকাপুর ', 7802, 221, 24, 3, 0),
(514, 'Baitulaman Politecni', 'বায়তুলামন পলিটেকনি ', 7803, 221, 24, 3, 0),
(515, 'Faridpursadar', 'ফরিদপুরসদার ', 7800, 221, 24, 3, 0),
(516, 'Kanaipur', 'কানাইপুর ', 7801, 221, 24, 3, 0),
(517, 'Kamarkali', 'কামারকালি ', 7851, 223, 24, 3, 0),
(518, 'Madukhali', 'মদুখালী ', 7850, 223, 24, 3, 0),
(519, 'Nagarkanda', 'নগরকান্দা ', 7840, 225, 24, 3, 0),
(520, 'Talma', 'তালমা ', 7841, 225, 24, 3, 0),
(521, 'Bishwa jaker Manjil', 'বিশ্ব যকার মনজিল ', 7822, 227, 24, 3, 0),
(522, 'Hat Krishapur', 'হাট কৃষাপুর ', 7821, 227, 24, 3, 0),
(523, 'Sadarpur', 'সদরপুর ', 7820, 227, 24, 3, 0),
(524, 'Shriangan', 'শ্রীনগান ', 7804, 228, 24, 3, 0),
(525, 'B.O.F', 'B.O.F	', 1703, 229, 25, 3, 0),
(526, 'B.R.R', 'B.R.R	', 1701, 229, 25, 3, 0),
(527, 'Chandna', 'চন্দনা ', 1702, 229, 25, 3, 0),
(528, 'Gazipur Sadar', 'গাজীপুর সদর ', 1700, 229, 25, 3, 0),
(529, 'National University', 'জাতীয় বিশ্ববিদ্যালয় ', 1704, 229, 25, 3, 0),
(530, 'Kaliakaar', 'কালিয়াকার ', 1750, 230, 25, 3, 0),
(531, 'Safipur', 'সাফিপুর ', 1751, 230, 25, 3, 0),
(532, 'Kaliganj', 'কালীগঞ্জ ', 1720, 233, 25, 3, 0),
(533, 'Pubail', 'পুবাইল ', 1721, 233, 25, 3, 0),
(534, 'Santanpara', 'সানতানপাড়া ', 1722, 233, 25, 3, 0),
(535, 'Vaoal Jamalpur', 'ভোয়াল জামালপুর ', 1723, 233, 25, 3, 0),
(536, 'kapashia', 'কাপাশিয়া', 1730, 231, 25, 3, 0),
(537, 'Ershad Nagar', 'এরশাদ নগর ', 1712, 592, 25, 3, 0),
(538, 'Monnunagar', 'মন্নুনগর ', 1710, 592, 25, 3, 0),
(539, 'Nishat Nagar', 'নিশাত নগর ', 1711, 592, 25, 3, 0),
(540, 'Barmi', 'বার্মি ', 1743, 593, 25, 3, 0),
(541, 'Bashamur', 'বাশামুর ', 1747, 593, 25, 3, 0),
(542, 'Boubi', 'বউবি ', 1748, 593, 25, 3, 0),
(543, 'Kawraid', 'কাওরেড ', 1745, 232, 25, 3, 0),
(544, 'Satkhamair', 'সাতখামায়ের ', 1744, 593, 25, 3, 0),
(545, 'Sreepur', 'শ্রীপুর ', 1740, 593, 25, 3, 0),
(546, 'Tepirbari', 'টেপিবাড়ী ', 1740, 232, 25, 3, 0),
(547, 'Tengra', 'টেংরা ', 1740, 232, 25, 3, 0),
(548, 'Rajendrapur', 'রাজেন্দ্রপুর ', 1741, 232, 25, 3, 0),
(549, 'Rajendrapur Canttome', 'রাজেন্দ্রপুর ক্যান্টোম ', 1742, 232, 25, 3, 0),
(550, 'Barfa', 'বারফা ', 8102, 235, 26, 3, 0),
(551, 'Chandradighalia', 'চন্দ্রাদিঘলিয়া ', 8013, 235, 26, 3, 0),
(552, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর ', 8100, 235, 26, 3, 0),
(553, 'Ulpur', 'উলপুর ', 8101, 235, 26, 3, 0),
(554, 'Jonapur', 'জোনাপুর ', 8133, 236, 26, 3, 0),
(555, 'Kashiani', 'কাশিয়ানী ', 8130, 236, 26, 3, 0),
(556, 'Ramdia College', 'রামদিয়া কলেজ ', 8131, 236, 26, 3, 0),
(557, 'Ratoil', 'রাতোয়েল ', 8132, 236, 26, 3, 0),
(558, 'Kotalipara', 'কোটালীপাড়া ', 8110, 237, 26, 3, 0),
(559, 'Batkiamari', 'বাটকিয়ামারী ', 8141, 238, 26, 3, 0),
(560, 'Khandarpara', 'খন্দরপাড়া ', 8142, 238, 26, 3, 0),
(561, 'Muksudpur', 'মুকসুদপুর ', 8140, 238, 26, 3, 0),
(562, 'Patgati', 'পাটগাটি ', 8121, 239, 26, 3, 0),
(563, 'Tungipara', 'টুঙ্গিপাড়া ', 8120, 239, 26, 3, 0),
(564, 'Bajitpur', '', 2336, 241, 27, 3, 0),
(565, 'Laksmipur', 'লক্ষ্মীপুর ', 2338, 248, 27, 3, 0),
(566, 'Sararchar', 'সরারচর ', 2337, 241, 27, 3, 0),
(567, 'Bhairab', 'ভৈরব ', 2350, 242, 27, 3, 0),
(568, 'Hossenpur', 'হোসেনপুর ', 2320, 243, 27, 3, 0),
(569, 'Itna', 'ইটনা', 2390, 244, 27, 3, 0),
(570, 'Karimganj', 'করিমগঞ্জ ', 2310, 245, 27, 3, 0),
(571, 'Gochhihata', 'গোচিহাতা ', 2331, 246, 27, 3, 0),
(572, 'Katiadi', 'কটিয়াদি ', 2330, 246, 27, 3, 0),
(573, 'Kishoreganj S.Mills', 'কিশোরগঞ্জ এস.মিলস ', 2301, 247, 27, 3, 0),
(574, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর ', 2300, 247, 27, 3, 0),
(575, 'Maizhati', 'মাইজাতি ', 2302, 247, 27, 3, 0),
(576, 'Nilganj', 'নীলগঞ্জ ', 2303, 247, 27, 3, 0),
(577, 'Chhoysuti', 'ছায়সুটি ', 2341, 248, 27, 3, 0),
(578, 'Kuliarchar', 'কুলিয়ারচর ', 2340, 248, 27, 3, 0),
(579, 'Abdullahpur', 'আবদুল্লাহপুর ', 2371, 249, 27, 3, 0),
(580, 'MIthamoin', 'এমথামাইন ', 2370, 249, 27, 3, 0),
(581, 'Nikli', 'নিকলি ', 2360, 250, 27, 3, 0),
(582, 'Ostagram', 'ওস্টগ্রাম ', 2380, 594, 27, 3, 0),
(583, 'Pakundia', 'পাকুন্দিয়া ', 2326, 251, 27, 3, 0),
(584, 'Tarial', 'তারিয়াল ', 2316, 252, 27, 3, 0),
(585, 'Bahadurpur', 'বাহাদুরপুর ', 7932, 595, 28, 3, 0),
(586, 'Barhamganj', 'বারহামগঞ্জ', 7930, 595, 28, 3, 0),
(587, 'Nilaksmibandar', 'নীলক্ষ্মীবন্দর ', 7931, 595, 28, 3, 0),
(588, 'Umedpur', 'উমেদপুর ', 7933, 595, 28, 3, 0),
(589, 'Kalkini', 'কালকিনি ', 7920, 254, 28, 3, 0),
(590, 'Sahabrampur', 'সাহাবরামপুর ', 7921, 254, 28, 3, 0),
(591, 'Charmugria', 'চারমুগ্রিয়া ', 7901, 253, 28, 3, 0),
(592, 'Habiganj', 'হবিগঞ্জ ', 7903, 253, 28, 3, 0),
(593, 'Kulpaddi', 'কুলপদ্দি ', 7902, 253, 28, 3, 0),
(594, 'Madaripur Sadar', 'মাদারীপুর সদর ', 7900, 253, 28, 3, 0),
(595, 'Mustafapur', 'মোস্তফাপুর ', 7904, 253, 28, 3, 0),
(596, 'Khalia', 'খালিয়া ', 7911, 255, 28, 3, 0),
(597, 'Rajoir', 'রাজোয়ার ', 7910, 255, 28, 3, 0),
(598, 'Doulatpur', 'দৌলতপুর ', 1860, 263, 29, 3, 0),
(599, 'Ghior', 'ঘিওর ', 1840, 262, 29, 3, 0),
(600, 'Jhitka', 'ঝিটকা ', 1831, 596, 29, 3, 0),
(601, 'Lechhraganj', 'লেছড়াগঞ্জ ', 1830, 596, 29, 3, 0),
(602, 'Barangail', 'বড়ঙ্গাইল ', 1804, 257, 29, 3, 0),
(603, 'Barangail', 'বড়ঙ্গাইল ', 1804, 257, 29, 3, 0),
(604, 'Gorpara', 'গোরপাড়া ', 1802, 257, 29, 3, 0),
(605, 'Mahadebpur', 'মহাদেবপুর ', 1803, 257, 29, 3, 0),
(606, 'Manikganj Bazar', 'মানিকগঞ্জ বাজার ', 1801, 257, 29, 3, 0),
(607, 'Manikganj Sadar', 'মানিকগঞ্জ সদর ', 1800, 257, 29, 3, 0),
(608, 'Baliati', 'বালিয়াটি ', 1811, 260, 29, 3, 0),
(609, 'Saturia', 'সাটুরিয়া ', 1810, 260, 29, 3, 0),
(610, 'Aricha', 'আরিচা ', 1851, 259, 29, 3, 0),
(611, 'Shibaloy', 'শিবালোয় ', 1850, 259, 29, 3, 0),
(612, 'Tewta', 'তেওতা ', 1852, 259, 29, 3, 0),
(613, 'Uthli', 'উথলি ', 1853, 259, 29, 3, 0),
(614, 'Baira', 'বায়রা ', 1821, 258, 29, 3, 0),
(615, 'joymantop', 'বায়রা ', 1822, 258, 29, 3, 0),
(616, 'Singair', 'সিংগাইর ', 1820, 258, 29, 3, 0),
(617, 'Gajaria', 'গজারিয়া ', 1510, 269, 30, 3, 0),
(618, 'Hossendi', 'হোসেন্ডি ', 1511, 269, 30, 3, 0),
(619, 'Rasulpur', 'রসুলপুর ', 1512, 269, 30, 3, 0),
(620, 'Gouragonj', 'গৌড়গঞ্জ ', 1334, 264, 30, 3, 0),
(621, 'Haldia SO', 'হলদিয়া এসও ', 1532, 264, 30, 3, 0),
(622, 'Haridia', 'হরিদিয়া ', 1333, 264, 30, 3, 0),
(623, 'Haridia DESO', 'হরিদিয়া ডেসো ', 1533, 264, 30, 3, 0),
(624, 'Korhati', 'কোরহাটি ', 1531, 264, 30, 3, 0),
(625, 'Lohajang', 'লোহাজং ', 1530, 264, 30, 3, 0),
(626, 'Madini Mandal', 'মাদিনী মণ্ডল ', 1335, 264, 30, 3, 0),
(627, 'Medini Mandal EDSO', 'মেদিনী মণ্ডল ইডিএসও ', 1535, 264, 30, 3, 0),
(628, 'Kathakhali', 'কাঠখালী ', 1503, 266, 30, 3, 0),
(629, 'Mirkadim', 'মিরকাদিম ', 1502, 266, 30, 3, 0),
(630, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর ', 1500, 266, 30, 3, 0),
(631, 'Rikabibazar', 'রিকাবিবাজার ', 1501, 266, 30, 3, 0),
(632, 'Ichapur', 'ইছাপুর ', 1542, 267, 30, 3, 0),
(633, 'Kola', 'কোলা ', 1541, 267, 30, 3, 0),
(634, 'Malkha Nagar', 'মালখা নগর ', 1543, 267, 30, 3, 0),
(635, 'Shekher Nagar', 'শেখের নগর ', 1544, 267, 30, 3, 0),
(636, 'Sirajdikhan', 'সিরাজদিখান ', 1540, 267, 30, 3, 0),
(637, 'Baghra', 'বাঘরা ', 1557, 265, 30, 3, 0),
(638, 'Rarikhal', 'রারিখাল ', 1551, 265, 30, 3, 0),
(639, 'Bhaggyakul', 'ভাগ্যকুল ', 1558, 265, 30, 3, 0),
(640, 'Hashara', 'হাশরা ', 1553, 265, 30, 3, 0),
(641, 'Kolapara', 'কোলাপাড়া', 1554, 265, 30, 3, 0),
(642, 'Kumarbhog', 'কুমারভোগ ', 1555, 265, 30, 3, 0),
(643, 'Maijpara', 'মাইজপাড়া ', 1552, 265, 30, 3, 0),
(644, 'Sreenagar', 'শ্রীনগর ', 1550, 265, 30, 3, 0),
(645, 'Vaggyakul SO', 'ভগ্যাকুল এসও ', 1556, 265, 30, 3, 0),
(646, 'Bajrajugini', 'বজরাজুগিনী ', 1523, 268, 30, 3, 0),
(647, 'Baligao', 'বালিগাও ', 1522, 268, 30, 3, 0),
(648, 'Betkahat', 'বেতকাট', 1521, 268, 30, 3, 0),
(649, 'Dighirpar', 'দিঘিরপাড় ', 1525, 268, 30, 3, 0),
(650, 'Hasail', 'হাসাইল', 1524, 268, 30, 3, 0),
(651, 'Pura', 'পুর ', 1527, 268, 30, 3, 0),
(652, 'Pura EDSO', 'পুর ইডিএসও ', 1526, 268, 30, 3, 0),
(653, 'Tangibari', 'টাঙ্গিবাড়ি ', 1520, 268, 30, 3, 0),
(654, 'Araihazar', 'আড়াইহাজার ', 1450, 270, 31, 3, 0),
(655, 'Jampur', 'জামপুর ', 1460, 271, 31, 3, 0),
(656, 'Gopaldi', 'গোপালদী ', 1451, 270, 31, 3, 0),
(657, 'Baidder Bazar', 'বাইদার বাজার ', 1440, 597, 31, 3, 0),
(658, 'Bara Nagar', 'বড় নগর ', 1441, 597, 31, 3, 0),
(659, 'Barodi', 'বারোদি ', 1442, 597, 31, 3, 0),
(660, 'Bandar', 'বান্দর ', 1410, 272, 31, 3, 0),
(661, 'BIDS', 'বিডস ', 1413, 272, 31, 3, 0),
(662, 'D.C Mills', 'D.C মিলস ', 1411, 272, 31, 3, 0),
(663, 'Madanganj', 'মদনগঞ্জ ', 1414, 272, 31, 3, 0),
(664, 'Nabiganj', 'নবীগঞ্জ ', 1412, 272, 31, 3, 0),
(665, 'Fatulla Bazar', 'ফতুল্লা বাজার ', 1421, 598, 31, 3, 0),
(666, 'Fatullah', 'ফতুল্লা ', 1420, 598, 31, 3, 0),
(667, 'Narayanganj Sadar', 'নারায়ণগঞ্জ সদর', 1400, 273, 31, 3, 0),
(668, 'Bhulta', 'ভুলতা ', 1462, 274, 31, 3, 0),
(669, 'Kanchan', 'কাঞ্চন ', 1461, 274, 31, 3, 0),
(670, 'Murapara', 'মুরাপাড়া', 1464, 274, 31, 3, 0),
(671, 'Nagri', 'নাগরী ', 1463, 274, 31, 3, 0),
(672, 'Rupganj', 'রূপগঞ্জ ', 1460, 274, 31, 3, 0),
(673, 'Adamjeenagar', 'আদমজীনগর ', 1431, 275, 31, 3, 0),
(674, 'LN Mills', 'এলএন মিলস ', 1432, 275, 31, 3, 0),
(675, 'Siddirganj', 'সিদ্দিরগঞ্জ ', 1430, 275, 31, 3, 0),
(676, 'Belabo', 'বেলাবো ', 1640, 276, 32, 3, 0),
(677, 'Hatirdia', 'হাতিরডিয়া ', 1651, 277, 32, 3, 0),
(678, 'Katabaria', 'কাটাবাড়িয়া ', 1652, 277, 32, 3, 0),
(679, 'Monohordi', 'মনোহরডি ', 1650, 277, 32, 3, 0),
(680, 'Karimpur', 'করিমপুর ', 1605, 278, 32, 3, 0),
(681, 'Madhabdi', 'মাধবদী ', 1604, 278, 32, 3, 0),
(682, 'Narsingdi College', 'নরসিংদী কলেজ', 1602, 278, 32, 3, 0),
(683, 'Narsingdi Sadar', 'নরসিংদী সদর ', 1600, 278, 32, 3, 0),
(684, 'Panchdona', 'পাঁচডোনা', 1603, 278, 32, 3, 0),
(685, 'UMC Jute Mills', 'ইউএমসি জুট মিলস ', 1601, 278, 32, 3, 0),
(686, 'Char Sindhur', 'চর সিন্ধুর', 1612, 279, 32, 3, 0),
(687, 'Ghorashal', 'ঘোড়াশাল ', 1613, 279, 32, 3, 0),
(688, 'Sarkarkhana', 'সরকারখানা ', 1611, 279, 32, 3, 0),
(689, 'Palash', 'পলাশ ', 1610, 279, 32, 3, 0),
(690, 'Bazar Hasnabad', 'বাজার হাসনাবাদ ', 1631, 280, 32, 3, 0),
(691, 'Radhaganj bazar', 'রাধাগঞ্জ বাজার ', 1632, 280, 32, 3, 0),
(692, 'Raypura', 'রায়পুরা', 1630, 280, 32, 3, 0),
(693, 'Shibpur', 'শিবপুর', 1620, 281, 32, 3, 0),
(694, 'Baliakandi', 'বালিয়াকান্দি ', 7730, 282, 33, 3, 0),
(695, 'Nalia', 'নালিয়া ', 7731, 282, 33, 3, 0),
(696, 'Mrigibazar', 'মৃগীবাজার', 7723, 284, 33, 3, 0),
(697, 'Pangsha', 'পাংশা ', 7720, 284, 33, 3, 0),
(698, 'Ramkol', 'রামকোল ', 7721, 284, 33, 3, 0),
(699, 'Ratandia', 'রতানদিয়া', 7722, 284, 33, 3, 0),
(700, 'Goalanda', 'গোয়ালন্দ ', 7710, 286, 33, 3, 0),
(701, 'Khankhanapur', 'খানখানাপুর ', 7711, 286, 33, 3, 0),
(702, 'Rajbari Sadar', 'রাজবাড়ী সদর ', 7700, 286, 33, 3, 0),
(703, 'Bhedorganj', 'ভেদরগঞ্জ ', 8030, 291, 34, 3, 0),
(704, 'Damudhya', 'দামুধ্যা ', 8040, 288, 34, 3, 0),
(705, 'Gosairhat', 'গোসাইরহাট ', 8050, 292, 34, 3, 0),
(706, 'Jajira', 'জাজিরা ', 8010, 290, 34, 3, 0),
(707, 'Bhozeshwar', 'ভোজেশ্বর ', 8021, 289, 34, 3, 0),
(708, 'Gharisar', 'ঘড়িসর ', 8022, 289, 34, 3, 0),
(709, 'Kartikpur', 'কার্তিকপুর', 8024, 289, 34, 3, 0),
(710, 'Naria', 'নড়িয়া ', 8020, 289, 34, 3, 0),
(711, 'Upshi', 'উপশি ', 8023, 289, 34, 3, 0),
(712, 'Angaria', 'অ্যাঙ্গারিয়া ', 8001, 287, 34, 3, 0),
(713, 'Chikandi', 'চিকান্দি ', 8002, 287, 34, 3, 0),
(714, 'Shariatpur Sadar', 'শরীয়তপুর সদর ', 8000, 287, 34, 3, 0),
(715, 'Basail', 'বাসাইল ', 1920, 295, 35, 3, 0),
(716, 'Bhuapur', 'ভূয়াপুর ', 1960, 303, 35, 3, 0),
(717, 'Delduar', 'দেলদুয়ার ', 1910, 302, 35, 3, 0),
(718, 'Elasin', 'এলাসিন ', 1913, 302, 35, 3, 0),
(719, 'Hinga Nagar', 'হিঙ্গা নগর', 1914, 302, 35, 3, 0),
(720, 'Jangalia', 'জাঙ্গালিয়া ', 1911, 302, 35, 3, 0),
(721, 'Lowhati', 'লোহাতী ', 1915, 302, 35, 3, 0),
(722, 'Patharail', 'পাথরাইল ', 1912, 302, 35, 3, 0),
(723, 'D. Pakutia', 'ডা. পাকুটিয়া 1982', 1982, 297, 35, 3, 0),
(724, 'Dhalapara', 'ধলাপাড়া', 1983, 297, 35, 3, 0),
(725, 'Ghatial', 'ঘাটিয়াল ', 1980, 297, 35, 3, 0),
(726, 'Lohani', 'লোহানী ', 1984, 297, 35, 3, 0),
(727, 'Zahidganj', 'জাহিদগঞ্জ', 1981, 297, 35, 3, 0),
(728, 'Gopalpur', 'গোপালপুর ', 1990, 301, 35, 3, 0),
(729, 'Hemnagar', 'হেমনগর', 1992, 301, 35, 3, 0),
(730, 'Jhowail', 'ঝোয়েল ', 1991, 301, 35, 3, 0),
(731, 'Chatutia', 'চাটুয়া ', 1991, 301, 35, 3, 0),
(732, 'Ballabazar', 'বল্লাবাজার ', 1973, 298, 35, 3, 0),
(733, 'Elinga', 'এলিংগা ', 1974, 298, 35, 3, 0),
(734, 'Kalihati', 'কালিহাতী ', 1970, 298, 35, 3, 0),
(735, 'Nagarbari', 'নগরবাড়ী ', 1977, 298, 35, 3, 0),
(736, 'Nagarbari SO', 'নগরবাড়ী এসও ', 1976, 298, 35, 3, 0),
(737, 'Nagbari', 'নাগবাড়ী ', 1972, 298, 35, 3, 0),
(738, 'Palisha', 'পলিশা', 1975, 298, 35, 3, 0),
(739, 'Rajafair', 'রাজাফায়ের ', 1971, 298, 35, 3, 0),
(740, 'Kashkawlia', 'কাশকাওলিয়া ', 1930, 296, 35, 3, 0),
(741, 'Dhonbari', 'ধোনবাড়ী ', 1997, 296, 35, 3, 0),
(742, 'Madhupur', 'মধুপুর ', 1996, 296, 35, 3, 0),
(743, 'Gorai', 'গড়াই ', 1941, 300, 35, 3, 0),
(744, 'Jarmuki', 'জারমুকি ', 1944, 300, 35, 3, 0),
(745, 'M.C. College', 'এম.সি. কলেজ ', 1942, 300, 35, 3, 0),
(746, 'Mirzapur', 'মির্জাপুর ', 1940, 300, 35, 3, 0),
(747, 'Mohera', 'মহেড়া ', 1945, 300, 35, 3, 0),
(748, 'Warri paikpara', 'ওয়ারী পাইকপাড়া', 1943, 300, 35, 3, 0),
(749, 'Dhuburia', 'ধুবুরিয়া ', 1937, 299, 35, 3, 0),
(750, 'Nagarpur', 'ধুবুরিয়া ', 1936, 299, 35, 3, 0),
(751, 'Salimabad', 'সালিমাবাদ ', 1938, 299, 35, 3, 0),
(752, 'Kochua', 'কোচুয়া ', 1951, 294, 35, 3, 0),
(753, 'Sakhipur', 'সখিপুর ', 1950, 294, 35, 3, 0),
(754, 'Kagmari', 'কাগমারী ', 1901, 293, 35, 3, 0),
(755, 'Korotia', 'করোটিয়া', 1903, 293, 35, 3, 0),
(756, 'Purabari', 'পুরবাড়ী ', 1904, 293, 35, 3, 0),
(757, 'Santosh', 'সন্তোষ ', 1902, 293, 35, 3, 0),
(758, 'Tangail Sadar', 'টাঙ্গাইল সদর ', 1900, 293, 35, 3, 0),
(759, 'Bakshiganj', 'বকশীগঞ্জ', 2140, 548, 46, 10, 0),
(760, 'Dewangonj', 'দেওয়ানগঞ্জ', 2030, 547, 46, 10, 0),
(761, 'Dewangonj S. Mills', 'দেওয়ানগঞ্জ এস মিলস ', 2032, 547, 46, 10, 0),
(762, 'Durmoot', 'দুর্মূত', 2021, 549, 46, 10, 0),
(763, 'Gilabari', 'গিলবাড়ী ', 2022, 549, 46, 10, 0),
(764, 'Islampur', 'ইসলামপুর ', 2020, 549, 46, 10, 0),
(765, 'Jamalpur', 'জামালপুর', 2000, 549, 46, 10, 0),
(766, 'Jamalpur', 'জামালপুর', 2000, 550, 46, 10, 0),
(767, 'Nandina', 'নন্দিনা ', 2001, 550, 46, 10, 0),
(768, 'Narundi', 'নুরুন্ডি', 2002, 550, 46, 10, 0),
(769, 'Jalalpur', 'মেলান্দহ', 2011, 599, 46, 10, 0),
(770, 'Mahmudpur', 'মাহমুদপুর ', 2013, 599, 46, 10, 0),
(771, 'Malancha', 'মালঞ্চা ', 2012, 599, 46, 10, 0),
(772, 'Melandah', 'মেলান্দাহ ', 2010, 599, 46, 10, 0),
(773, 'Balijhuri', 'বালিঝুরি ', 2041, 551, 46, 10, 0),
(774, 'Madarganj', 'মাদারগঞ্জ ', 2040, 551, 46, 10, 0),
(775, 'Bausee	2052', 'বিরস ', 2052, 553, 46, 10, 0),
(776, 'Bausee	2052', 'বিরস ', 2052, 553, 46, 10, 0),
(777, 'Adarvita', 'আদরভিটা ', 2051, 551, 46, 10, 0),
(778, 'Jagannath Ghat', 'জগন্নাথ ঘাট ', 2053, 553, 46, 10, 0),
(779, 'Jamuna Sar Karkhana', 'যমুনা সর করখানা ', 2055, 553, 46, 10, 0),
(780, 'Pingna', 'পিংনা ', 2054, 553, 46, 10, 0),
(781, 'Sharishabari', 'শরিশবাড়ি ', 2050, 553, 46, 10, 0),
(782, 'Bhaluka', 'ভালুকা ', 2240, 2, 48, 10, 0),
(783, 'Fulbaria', 'ফুলবাড়িয়া ', 2216, 7, 48, 10, 0),
(784, 'Gaforgaon', 'গাফোরগাঁও', 2230, 8, 48, 10, 0),
(785, 'Dobasia', 'ডোবাসিয়া ', 2234, 8, 48, 10, 0),
(786, 'Kandipara', 'কান্দিপাড়া ', 2233, 8, 48, 10, 0),
(787, 'Shibganj', 'শিবগঞ্জ', 2231, 8, 48, 10, 0),
(788, 'Usti', 'উস্তি', 2232, 8, 48, 10, 0),
(789, 'Gouripur', 'গৌরীপুর ', 2270, 9, 48, 10, 0),
(790, 'Gouripur', 'গৌরীপুর ', 2270, 9, 48, 10, 0),
(791, 'Ramgopalpur', 'রামগোপালপুর ', 2271, 9, 48, 10, 0),
(792, 'Dhara', 'ধর ', 2261, 4, 48, 10, 0),
(793, 'Dhara', 'ধর ', 2261, 4, 48, 10, 0),
(794, 'Haluaghat', 'হালুয়াঘাট ', 2260, 4, 48, 10, 0),
(795, 'Munshirhat', 'মুন্সিরহাট ', 2262, 4, 48, 10, 0),
(796, 'Atharabari', 'অথরবাড়ি ', 2282, 10, 48, 10, 0),
(797, 'Isshwargonj', 'ইশওয়ারগঞ্জ ', 2280, 10, 48, 10, 0),
(798, 'Sohagi', 'সোহাগি ', 2281, 10, 48, 10, 0),
(799, 'Muktagachha', 'মুক্তগাছা ', 2210, 5, 48, 10, 0),
(800, 'Agriculture Universi', 'কৃষি বিশ্ববিদ্যালয় ', 2202, 1, 48, 10, 0),
(801, 'Agriculture Universi', 'কৃষি বিশ্ববিদ্যালয় ', 2202, 1, 48, 10, 0),
(802, 'Biddyaganj', 'বিদ্যাগঞ্জ', 2204, 1, 48, 10, 0),
(803, 'Kawatkhali', 'কাওয়াতখালী ', 2201, 1, 48, 10, 0),
(804, 'Mymensingh Sadar', 'ময়মনসিংহ সদর ', 2200, 1, 48, 10, 0),
(805, 'Pearpur', 'পেয়ারপুর ', 2205, 1, 48, 10, 0),
(806, 'Shombhuganj', 'শম্ভুগঞ্জ ', 2203, 1, 48, 10, 0),
(807, 'Gangail', 'গঙ্গাইল ', 2291, 11, 48, 10, 0),
(808, 'Nandail', 'নান্দাইল ', 2290, 11, 48, 10, 0),
(809, 'Beltia', 'বেলটিয়া ', 2251, 12, 48, 10, 0),
(810, 'Phulpur', 'ফুলপুর ', 2250, 12, 48, 10, 0),
(811, 'Tarakanda', 'তারাকান্দা ', 2252, 12, 48, 10, 0),
(812, 'Ahmadbad', 'আহমেদাবাদ ', 2221, 3, 48, 10, 0),
(813, 'Dhala', 'আহমেদাবাদ ', 2223, 3, 48, 10, 0),
(814, 'Ram Amritaganj', 'আহমেদাবাদ ', 2222, 3, 48, 10, 0),
(815, 'Trishal', 'ত্রিশাল ', 2220, 3, 48, 10, 0),
(816, 'Susnng Durgapur', 'সুসং দুর্গাপুর', 2420, 558, 49, 10, 0),
(817, 'Atpara', 'আটপাড়া ', 2470, 556, 49, 10, 0),
(818, 'Barhatta', 'বারহাট্টা ', 2440, 557, 49, 10, 0),
(819, 'Dharampasha', 'ধরমপাশা ', 2450, 600, 49, 10, 0),
(820, 'Dhobaura', 'ধোবাউরা ', 2416, 601, 49, 10, 0),
(821, 'Sakoai', 'ধোবাউরা ', 2417, 601, 49, 10, 0),
(822, 'Kalmakanda', 'কলমাকান্দা ', 2430, 559, 49, 10, 0),
(823, 'Kendua', 'কেন্দুয়া ', 2480, 555, 49, 10, 0),
(824, 'Khaliajhri', 'খালিয়াঝরি ', 2460, 565, 49, 10, 0),
(825, 'Shaldigha', 'শালদিঘা ', 2462, 565, 49, 10, 0),
(826, 'Madan', 'মদন ', 2490, 560, 49, 10, 0),
(827, 'Moddoynagar', 'মোদোদয়নগর ', 2456, 561, 49, 10, 0),
(828, 'Mohanganj', 'মোহনগঞ্জ ', 2446, 562, 49, 10, 0),
(829, 'Baikherhati', 'বৈখেরহাটি ', 2401, 563, 49, 10, 0),
(830, 'Netrakona Sadar', 'নেত্রকোনা সদর ', 2400, 563, 49, 10, 0),
(831, 'Jaria Jhanjhail', 'জারিয়া ঝাঁঝাইল ', 2412, 564, 49, 10, 0),
(832, 'Purbadhola	2410', 'পূর্বধোলা ', 2410, 564, 49, 10, 0),
(833, 'Shamgonj', 'শামগনজ ', 2411, 564, 49, 10, 0),
(834, 'Bakshigonj', 'বকশীগঞ্জ ', 2140, 602, 50, 10, 0),
(835, 'Jhinaigati', 'ঝিনাইগতি ', 2120, 566, 50, 10, 0),
(836, 'Gonopaddi', 'ঝিনাইগতি ', 2151, 567, 50, 10, 0),
(837, 'Nakla', 'নকলা ', 2150, 567, 50, 10, 0),
(838, 'Hatibandha', 'হাতীবন্ধ ', 2111, 568, 50, 10, 0),
(839, 'Nalitabari', 'নালিতাবাড়ী ', 2110, 568, 50, 10, 0),
(840, 'Sherpur Sadar', 'শেরপুর সদর ', 2100, 569, 50, 10, 0),
(841, 'Shribardi', 'শ্রীবরদী ', 2130, 570, 50, 10, 0),
(842, 'Azmireeganj', 'আজমিরীগঞ্জ ', 3360, 500, 68, 8, 0),
(843, 'Bahubal', 'বাহুবল ', 3310, 502, 68, 8, 0),
(844, 'Baniachang', 'বানিয়াচং ', 3350, 501, 68, 8, 0),
(845, 'Jatrapasha', 'যাত্রাপশা ', 3351, 501, 68, 8, 0),
(846, 'Kadirganj', 'কাদিরগঞ্জ ', 3352, 501, 68, 8, 0),
(847, 'Chandpurbagan', 'চাঁদপুরবাগান ', 3321, 503, 68, 8, 0),
(848, 'Chunarughat', 'চুনারুঘাট ', 3320, 503, 68, 8, 0),
(849, 'Narapati', 'নরপতি ', 3322, 503, 68, 8, 0),
(850, 'Gopaya', 'গোপায়া ', 3302, 504, 68, 8, 0),
(851, 'Habiganj Sadar', 'হবিগঞ্জ সদর ', 3300, 504, 68, 8, 0),
(852, 'Shaestaganj', 'শায়েস্তাগঞ্জ ', 3301, 504, 68, 8, 0),
(853, 'Kalauk', 'কালাউক ', 3340, 603, 68, 8, 0),
(854, 'Lakhai', 'লখাই ', 3341, 603, 68, 8, 0),
(855, 'Itakhola', 'ইটাখোলা ', 3331, 506, 68, 8, 0),
(856, 'Madhabpur', 'মাধবপুর ', 3330, 506, 68, 8, 0),
(857, 'Saihamnagar', 'সাইমনগর ', 3333, 506, 68, 8, 0),
(858, 'Shahajibazar', 'শাহাজিবাজার ', 3332, 506, 68, 8, 0),
(859, 'Digalbak', 'দিগলবাক ', 3373, 507, 68, 8, 0),
(860, 'Golduba', 'গোল্ডুবা ', 3372, 507, 68, 8, 0),
(861, 'Goplarbazar', 'গোপালবাজার ', 3371, 507, 68, 8, 0),
(862, 'Inathganj', 'ইনাথগঞ্জ ', 3374, 507, 68, 8, 0),
(863, 'Nabiganj', 'ইনাথগঞ্জ ', 3370, 507, 68, 8, 0),
(864, 'Baralekha', 'বড়লেখা ', 3250, 510, 69, 8, 0),
(865, 'Dhakkhinbag', 'বড়লেখা ', 3252, 510, 69, 8, 0),
(866, 'Juri', 'জুড়ি ', 3251, 510, 69, 8, 0),
(867, 'Purbashahabajpur', 'পূর্বশাহাজপুর ', 3253, 510, 69, 8, 0),
(868, 'Kamalganj', 'কমলগঞ্জ ', 3220, 512, 69, 8, 0),
(869, 'Keramatnaga', 'কেরামত্নগা ', 3221, 512, 69, 8, 0),
(870, 'Munshibazar', 'মুন্সিবাজার ', 3224, 512, 69, 8, 0),
(871, 'Patrakhola', 'পাত্রখোলা ', 3222, 512, 69, 8, 0),
(872, 'Shamsher Nagar', 'শমসের নগর ', 3223, 512, 69, 8, 0),
(873, 'Baramchal', 'বড়মচল ', 3237, 513, 69, 8, 0),
(874, 'Kajaldhara', 'কাজলধারা ', 3234, 513, 69, 8, 0),
(875, 'Karimpur', 'করিমপুর ', 3235, 513, 69, 8, 0),
(876, 'Kulaura', 'কুলাউড়া ', 3230, 513, 69, 8, 0),
(877, 'Langla', 'লাংলা ', 3232, 513, 69, 8, 0),
(878, 'Prithimpasha', 'পৃথিমপাশা ', 3233, 513, 69, 8, 0),
(879, 'Tillagaon', 'টিলগাঁও ', 3231, 513, 69, 8, 0),
(880, 'Afrozganj', 'আফরোজগঞ্জ ', 3203, 509, 69, 8, 0),
(881, 'Barakapan', 'বরকাপান ', 3201, 509, 69, 8, 0),
(882, 'Monumukh', 'মনুমুখ ', 3202, 509, 69, 8, 0),
(883, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর ', 3200, 509, 69, 8, 0),
(884, 'Rajnagar', 'রাজনগর ', 3240, 514, 69, 8, 0),
(885, 'Kalighat', 'কালীঘাট ', 3212, 515, 69, 8, 0),
(886, 'Khejurichhara', 'খেজুরিছড়া ', 3213, 515, 69, 8, 0),
(887, 'Narain Chora', 'নারায়ণ চোরা ', 3211, 515, 69, 8, 0),
(888, 'Satgaon', 'সাতগাঁও ', 3214, 515, 69, 8, 0),
(889, 'Srimangal', 'শ্রীমঙ্গল ', 3210, 515, 69, 8, 0),
(890, 'Bishamsapur', 'বিসমসাপুর ', 3010, 516, 70, 8, 0),
(891, 'Chhatak', 'ছাতক ', 3080, 517, 70, 8, 0),
(892, 'Chhatak Cement Facto', 'ছাতক সিমেন্ট ফ্যাক্ট ', 3081, 517, 70, 8, 0),
(893, 'Chhatak Paper Mills', 'ছাতক পেপার মিলস ', 3082, 517, 70, 8, 0),
(894, 'Chourangi Bazar', 'চৌরঙ্গি বাজার ', 3893, 517, 70, 8, 0),
(895, 'Gabindaganj', 'গাবিন্দগঞ্জ ', 3083, 517, 70, 8, 0),
(896, 'Gabindaganj Natun Bajar', 'গবিন্দগঞ্জ নতুন বাজর ', 3084, 517, 70, 8, 0),
(897, 'Islamabad', 'ইসলামাবাদ ', 3088, 517, 70, 8, 0),
(898, 'jahidpur', 'জাহিদপুর ', 3087, 517, 70, 8, 0),
(899, 'Khurma', 'খুরমা ', 3085, 517, 70, 8, 0),
(900, 'Moinpur', 'মনিপুর', 3086, 517, 70, 8, 0),
(901, 'Dhirai Chandpur', 'ধীরই চাঁদপুর', 3040, 518, 70, 8, 0),
(902, 'Jagdal', 'জগদল ', 3041, 518, 70, 8, 0),
(903, 'Duara bazar', 'দুয়ারা বাজার ', 3070, 520, 70, 8, 0),
(904, 'Ghungiar', 'ঘুনগিয়ার ', 3050, 604, 70, 8, 0),
(905, 'Atuajan', 'অতুজন ', 3062, 521, 70, 8, 0),
(906, 'Hasan Fatemapur', 'হাসান ফাতেমপুর ', 3063, 521, 70, 8, 0),
(907, 'Jagnnathpur', 'জগন্নাথপুর ', 3060, 521, 70, 8, 0),
(908, 'Rasulganj', 'রসুলগঞ্জ ', 3064, 521, 70, 8, 0),
(909, 'Shiramsi', 'শিরামসি ', 3065, 521, 70, 8, 0),
(910, 'Syedpur', 'সৈয়দপুর ', 3061, 521, 70, 8, 0),
(911, 'Dawrai Bazar', 'দাওরাই বাজার ', 3127, 521, 70, 8, 0),
(912, 'Sachna', 'সচনা', 3020, 605, 70, 8, 0),
(913, 'Pagla', 'পাগলা ', 3001, 524, 70, 8, 0),
(914, 'Patharia', 'পাথারিয়া ', 3002, 524, 70, 8, 0),
(915, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর ', 3000, 524, 70, 8, 0),
(916, 'Tahirpur', 'তাহিরপুর ', 3030, 526, 70, 8, 0),
(917, 'Balaganj', 'বালাগঞ্জ ', 3120, 531, 71, 8, 0),
(918, 'Begumpur', 'বেগমপুর ', 3125, 531, 71, 8, 0),
(919, 'Brahman Shashon', 'ব্রাহ্মণ শাশন ', 3122, 531, 71, 8, 0),
(920, 'Gaharpur', 'গহরপুর ', 3128, 531, 71, 8, 0),
(921, 'Goala Bazar', 'গোয়ালা বাজার ', 3124, 531, 71, 8, 0),
(922, 'Karua', 'কারুয়া ', 3121, 531, 71, 8, 0),
(923, 'Kathal Khair', 'কাঠাল খায়ের ', 3127, 531, 71, 8, 0),
(924, 'Natun Bazar', 'নতুন বাজার ', 3129, 531, 71, 8, 0),
(925, 'Omarpur', 'ওমরপুর ', 3126, 531, 71, 8, 0),
(926, 'Tajpur', 'তাজপুর', 3123, 531, 71, 8, 0),
(927, 'Bianibazar', 'বিয়ানীবাজার 3170', 3170, 528, 71, 8, 0),
(928, 'Churkai', 'চুরকাই ', 3175, 528, 71, 8, 0),
(929, 'jaldup', 'জলডুপ', 3171, 528, 71, 8, 0),
(930, 'Kurar bazar', 'কুরার বাজার ', 3173, 528, 71, 8, 0),
(931, 'Mathiura', 'মথিউরা ', 3172, 528, 71, 8, 0),
(932, 'Salia bazar', 'সালিয়া বাজার ', 3174, 528, 71, 8, 0),
(933, 'Bishwanath', 'বিশ্বনাথ ', 3130, 528, 71, 8, 0),
(934, 'Dashghar', 'দশঘর ', 3131, 528, 71, 8, 0),
(935, 'Deokalas', 'দেওকালাস ', 3133, 528, 71, 8, 0),
(936, 'Doulathpur', 'দৌলতপুর ', 3132, 528, 71, 8, 0),
(937, 'Singer kanch', 'গায়ক কাঞ্চ ', 3134, 528, 71, 8, 0);
INSERT INTO `post_office` (`id`, `name`, `bd_name`, `zip`, `police_station`, `district`, `division`, `status`) VALUES
(938, 'Fenchuganj', 'ফেঞ্চুগঞ্জ ', 3116, 528, 71, 8, 0),
(939, 'Fenchuganj SareKarkh', 'ফেঞ্চুগঞ্জ সারেকর্খ ', 3117, 528, 71, 8, 0),
(940, 'Chiknagul', 'চিকনাগল ', 3152, 535, 71, 8, 0),
(941, 'Goainghat', 'গোয়াইনঘাট ', 3150, 535, 71, 8, 0),
(942, 'Jaflong', 'জাফলং ', 3151, 535, 71, 8, 0),
(943, 'banigram', 'বনগ্রাম ', 3164, 534, 71, 8, 0),
(944, 'Chandanpur', 'চন্দনপুর ', 3165, 534, 71, 8, 0),
(945, 'Dakkhin Bhadashore', 'ডাকখিন ভাদাশোর ', 3162, 534, 71, 8, 0),
(946, 'Dhaka Dakkshin', 'ঢাকা দক্ষিণ ', 3161, 534, 71, 8, 0),
(947, 'Golapganj', 'গোলাপগঞ্জ ', 3160, 534, 71, 8, 0),
(948, 'Ranaping', 'রানাপিং ', 3163, 534, 71, 8, 0),
(949, 'Jaintapur', 'জৈন্তাপুর ', 3156, 536, 71, 8, 0),
(950, 'Ichhamati', 'ইছামতি', 3191, 538, 71, 8, 0),
(951, 'Jakiganj', 'জকিগঞ্জ ', 3190, 538, 71, 8, 0),
(952, 'Chatulbazar', 'চতুলবাজার ', 3181, 537, 71, 8, 0),
(953, 'Gachbari', 'গছবাড়ী ', 3183, 537, 71, 8, 0),
(954, 'Kanaighat', 'কানাইঘাট ', 3180, 537, 71, 8, 0),
(955, 'Manikganj', 'মানিকগঞ্জ ', 3182, 537, 71, 8, 0),
(956, 'Kompanyganj', 'কমপানিগঞ্জ ', 3140, 532, 71, 8, 0),
(957, 'Birahimpur', 'বিরহিমপুর ', 3106, 527, 71, 8, 0),
(958, 'Jalalabad', 'জালালাবাদ ', 3107, 527, 71, 8, 0),
(959, 'Jalalabad Cantoment', 'জালালাবাদ ক্যান্টোমেন্ট ', 3104, 546, 71, 8, 0),
(960, 'Kadamtali', 'কদমতলী ', 3111, 527, 71, 8, 0),
(961, 'Kamalbazer', 'কমলবাজার ', 3112, 527, 71, 8, 0),
(962, 'Khadimnagar', 'খাদিমনগর ', 3103, 527, 71, 8, 0),
(963, 'Lalbazar', 'লালবাজার ', 3113, 527, 71, 8, 0),
(964, 'Mogla', 'মোগলা ', 3108, 527, 71, 8, 0),
(965, 'Ranga Hajiganj', 'রাঙ্গা হাজীগঞ্জ ', 3109, 527, 71, 8, 0),
(966, 'Shahajalal Science &', 'শাহজালাল বিজ্ঞান & ', 3114, 527, 71, 8, 0),
(967, 'Silam', 'সিলাম ', 3105, 527, 71, 8, 0),
(968, 'Sylhet Sadar', 'সিলেট সদর ', 3100, 527, 71, 8, 0),
(969, 'Sylhet Biman Bondar', 'সিলেট বিমান বান্দর ', 3102, 527, 71, 8, 0),
(970, 'Sylhet Cadet Col', 'সিলেট ক্যাডেট কর্নেল ', 3101, 527, 71, 8, 0),
(971, 'Bangla Hili', 'বাংলা হিলি ', 5270, 607, 60, 9, 0),
(972, 'Biral', 'বিরল ', 5210, 445, 60, 9, 0),
(973, 'Birampur', 'বিরামপুর ', 5266, 608, 60, 9, 0),
(974, 'Birganj', 'বীরগঞ্জ ', 5220, 444, 60, 9, 0),
(975, 'Chirirbandar', 'চিরিরবন্দর ', 5240, 447, 60, 9, 0),
(976, 'Ranirbandar', 'রানিরবন্দর ', 5241, 447, 60, 9, 0),
(977, 'Dinajpur Rajbari', 'দিনাজপুর রাজবাড়ী ', 5201, 453, 60, 9, 0),
(978, 'Dinajpur Sadar', 'দিনাজপুর সদর ', 5200, 453, 60, 9, 0),
(979, 'Khansama', 'খানসামা ', 5230, 452, 60, 9, 0),
(980, 'Pakarhat', 'পাকারহাট ', 5231, 452, 60, 9, 0),
(981, 'Maharajganj', 'মহারাজগঞ্জ ', 5226, 609, 60, 9, 0),
(982, 'Daudpur', 'দাউদপুর ', 5281, 454, 60, 9, 0),
(983, 'Gopalpur', 'গোপালপুর ', 5282, 454, 60, 9, 0),
(984, 'Nawabganj', 'নবাবগঞ্জ ', 5280, 454, 60, 9, 0),
(985, 'Ghoraghat', 'ঘোড়াঘাট ', 5291, 449, 60, 9, 0),
(986, 'Osmanpur', 'ওসমানপুর ', 5290, 449, 60, 9, 0),
(987, 'Osmanpur', 'ওসমানপুর ', 5290, 449, 60, 9, 0),
(988, 'Parbatipur', 'পার্বতীপুর ', 5250, 455, 60, 9, 0),
(989, 'Phulbari', 'ফুলবাড়ী ', 5260, 448, 60, 9, 0),
(990, 'Setabganj', 'সেতাবগঞ্জ ', 5216, 610, 60, 9, 0),
(991, 'Bonarpara', 'বনরপাড়া ', 5750, 612, 61, 9, 0),
(992, 'saghata', 'সাঘাটা ', 5751, 612, 61, 9, 0),
(993, 'Gaibandha Sadar', 'গাইবান্ধা সদর ', 5700, 457, 61, 9, 0),
(994, 'Gobindhaganj', 'গোবিন্দগঞ্জ ', 5740, 458, 61, 9, 0),
(995, 'Mahimaganj', 'মহিমাগঞ্জ ', 5741, 458, 61, 9, 0),
(996, 'Palashbari', 'পলাশবাড়ী ', 5730, 459, 61, 9, 0),
(997, 'Bharatkhali', 'ভারতখালী ', 5761, 456, 61, 9, 0),
(998, 'Fhulchhari', 'ফুলছড়ি ', 5760, 456, 61, 9, 0),
(999, 'Naldanga', 'নলডাঙ্গা', 5711, 460, 61, 9, 0),
(1000, 'Saadullapur', 'সাদুল্লাপুর', 5710, 460, 61, 9, 0),
(1001, 'Bamandanga', 'বামনডাঙ্গা', 5721, 462, 61, 9, 0),
(1002, 'Sundarganj', 'সুন্দরগঞ্জ', 5720, 462, 61, 9, 0),
(1003, 'Bhurungamari', 'ভুরুঙ্গামারী', 5670, 465, 62, 9, 0),
(1004, 'Chilmari', 'চিলমারী', 5630, 468, 62, 9, 0),
(1005, 'Jorgachh', 'জোরগাছ', 5631, 468, 62, 9, 0),
(1006, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 5600, 463, 62, 9, 0),
(1007, 'Pandul', 'পান্ডুল', 5601, 463, 62, 9, 0),
(1008, 'Phulbari', 'ফুলবাড়ী', 5680, 463, 62, 9, 0),
(1009, 'Nageshwar', 'নাগেশ্বর', 5660, 464, 62, 9, 0),
(1010, 'Nazimkhan', 'নাজিমখান', 5611, 467, 62, 9, 0),
(1011, 'Rajarhat', 'রাজারহাট ', 5610, 467, 62, 9, 0),
(1012, 'Rajibpur', 'রাজীবপুর ', 5650, 470, 62, 9, 0),
(1013, 'Roumari', 'রৌমারী ', 5640, 469, 62, 9, 0),
(1014, 'Bozra hat', 'বোজরা হাট ', 5621, 613, 62, 9, 0),
(1015, 'Ulipur', 'উলিপুর ', 5620, 613, 62, 9, 0),
(1016, 'Aditmari', 'আদিতমারী', 5510, 472, 63, 9, 0),
(1017, 'Hatibandha', 'হাতীবান্ধা ', 5530, 474, 63, 9, 0),
(1018, 'Kulaghat SO', 'কুলাঘাট এসও ', 5502, 471, 63, 9, 0),
(1019, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর ', 5500, 471, 63, 9, 0),
(1020, 'Moghalhat', 'মোগলহাট ', 5501, 471, 63, 9, 0),
(1021, 'Baura', 'বাউরা ', 5541, 475, 63, 9, 0),
(1022, 'Burimari', 'বুড়িমারী ', 5542, 475, 63, 9, 0),
(1023, 'Patgram', 'পাটগ্রাম ', 5540, 475, 63, 9, 0),
(1024, 'Tushbhandar', 'তুষভান্ডার', 5520, 614, 63, 9, 0),
(1025, 'Dimla', 'ডিমলা ', 5350, 481, 64, 9, 0),
(1026, 'Ghaga Kharibari', 'ঘাগা খারিবাড়ী ', 5351, 481, 64, 9, 0),
(1027, 'Chilahati', 'চিলাহাটি ', 5341, 480, 64, 9, 0),
(1028, 'Domar', 'ডোমার ', 5340, 480, 64, 9, 0),
(1029, 'Jaldhaka', 'জলধাকা', 5330, 478, 64, 9, 0),
(1030, 'Kishoriganj', 'কিশোরীগঞ্জ ', 5320, 479, 64, 9, 0),
(1031, 'Nilphamari Sadar', 'নীলফামারী সদর ', 5300, 476, 64, 9, 0),
(1032, 'Nilphamari Sugar Mil', 'নীলফামারী সুগার মিল ', 5301, 476, 64, 9, 0),
(1033, 'Saidpur', 'সৈয়দপুর ', 5310, 477, 64, 9, 0),
(1034, 'Saidpur Upashahar', 'সৈয়দপুর উপশহর ', 5311, 477, 64, 9, 0),
(1035, 'Boda', 'বোদা ', 5010, 484, 65, 9, 0),
(1036, 'Chotto Dab', 'চোটো ড্যাব ', 4050, 615, 65, 9, 0),
(1037, 'Mirjapur', 'মিরজাপুর ', 5041, 615, 65, 9, 0),
(1038, 'Dabiganj', 'দেবগঞ্জ ', 5020, 483, 65, 9, 0),
(1039, 'Panchagar Sadar', 'পঞ্চগড় সদর ', 5000, 482, 65, 9, 0),
(1040, 'Tetulia', 'তেতুলিয়া ', 5030, 482, 65, 9, 0),
(1041, 'Taraganj', 'তারাগঞ্জ ', 5420, 494, 66, 9, 0),
(1042, 'Shyampur', 'শ্যামপুর ', 5431, 487, 66, 9, 0),
(1043, 'Gangachara', 'গঙ্গাচড়া ', 5410, 489, 66, 9, 0),
(1044, 'Haragachh', 'হারাগাছ ', 5441, 490, 66, 9, 0),
(1045, 'Kaunia', 'কাউনিয়া ', 5440, 490, 66, 9, 0),
(1046, 'Pirgachha', 'পীরগাছা ', 5450, 492, 66, 9, 0),
(1047, 'Mithapukur', 'মিঠাপুকুর ', 5460, 488, 66, 9, 0),
(1048, 'Gujjipara', 'গুজজিপাড়া ', 5470, 493, 66, 9, 0),
(1049, 'Alamnagar', 'আলমনগর ', 5402, 491, 66, 9, 0),
(1050, 'Mahiganj', 'মাহিগঞ্জ ', 5403, 491, 66, 9, 0),
(1051, 'Rangpur Cadet Colleg', 'রংপুর ক্যাডেট কলেজ ', 5404, 491, 66, 9, 0),
(1052, 'Rangpur Carmiecal Col', 'রংপুর কারমাইকাল কর্নেল', 5405, 491, 66, 9, 0),
(1053, 'Rangpur Sadar', 'রংপুর সদর ', 5400, 491, 66, 9, 0),
(1054, 'Rangpur Upa-Shahar', 'রংপুর উপজেলা-শাহার ', 5401, 491, 66, 9, 0),
(1055, 'Badarganj', 'বদরগঞ্জ ', 5430, 487, 66, 9, 0),
(1056, 'Baliadangi', 'বালিয়াডাঙ্গী ', 5140, 497, 67, 9, 0),
(1057, 'Lahiri', 'লাহিড়ী ', 5141, 497, 67, 9, 0),
(1058, 'Jibonpur', 'জীবনপুর ', 5130, 616, 67, 9, 0),
(1059, 'Pirganj', 'পীরগঞ্জ ', 5470, 493, 66, 9, 0),
(1060, 'Pirganj', 'পীরগঞ্জ ', 5110, 496, 67, 9, 0),
(1061, 'Nekmarad', 'নেকমারাদ ', 5121, 499, 67, 9, 0),
(1062, 'Rani Sankail', 'রানী সঙ্কাইল ', 5120, 499, 67, 9, 0),
(1063, 'Ruhia', 'রুহিয়া ', 5103, 495, 67, 9, 0),
(1064, 'Shibganj', 'শিবগঞ্জ ', 5102, 495, 67, 9, 0),
(1065, 'Thakurgaon Road', 'ঠাকুরগাঁও রোড ', 5101, 495, 67, 9, 0),
(1066, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর ', 5100, 495, 67, 9, 0),
(1067, 'Bagerhat Sadar', 'বাগেরহাট সদর ', 9300, 305, 36, 6, 0),
(1068, 'P.C College', 'পি সি কলেজ ', 9301, 305, 36, 6, 0),
(1069, 'Rangdia', 'রংদিয়া ', 9302, 305, 36, 6, 0),
(1070, 'Chalna Ankorage', 'চালনা অ্যাঙ্করেজ ', 9350, 305, 36, 6, 0),
(1071, 'Mongla Port', 'মংলা বন্দর', 9351, 305, 36, 6, 0),
(1072, 'Barabaria', 'বড়বাড়িয়া ', 9361, 306, 36, 6, 0),
(1073, 'Chitalmari', 'চিতলমারী ', 9360, 306, 36, 6, 0),
(1074, 'Bhanganpar Bazar', 'ভাঙ্গনপাড় বাজার ', 9372, 307, 36, 6, 0),
(1075, 'Fakirhat', 'ফকিরহাট ', 9370, 307, 36, 6, 0),
(1076, 'Mansa', 'মনসা ', 9371, 307, 36, 6, 0),
(1077, 'Kachua', 'কচুয়া ', 9310, 308, 36, 6, 0),
(1078, 'Sonarkola', 'সোনারকোলা', 9311, 308, 36, 6, 0),
(1079, 'Charkulia', 'চারকুলিয়া', 9383, 309, 36, 6, 0),
(1080, 'Dariala', 'দরিলা', 9382, 309, 36, 6, 0),
(1081, 'Mollahat', 'মোলাহাট', 9380, 309, 36, 6, 0),
(1082, 'Nagarkandi', 'নগরকান্দি', 9384, 309, 36, 6, 0),
(1083, 'Pak Gangni', 'পাক গাংনী', 9385, 309, 36, 6, 0),
(1084, 'Morelganj', 'মোরেলগঞ্জ', 9320, 311, 36, 6, 0),
(1085, 'Sannasi Bazar', 'সন্নাসী বাজার ', 9321, 311, 36, 6, 0),
(1086, 'Teligatee', 'টেলিগেটে ', 9322, 311, 36, 6, 0),
(1087, 'Foylahat', 'ফয়েলাহাট ', 9341, 312, 36, 6, 0),
(1088, 'Gourambha', 'গৌরম্ভ ', 9343, 312, 36, 6, 0),
(1089, 'Rampal', 'রামপাল ', 9340, 312, 36, 6, 0),
(1090, 'Sonatunia', 'সোনাতুনিয়া ', 9342, 312, 36, 6, 0),
(1091, 'Rayenda', 'রায়েনদা ', 9330, 617, 36, 6, 0),
(1092, 'Alamdanga', 'আলমডাঙ্গা ', 7210, 317, 37, 6, 0),
(1093, 'Hardi', 'হার্ডি ', 7211, 317, 37, 6, 0),
(1094, 'Hardi', 'হার্ডি ', 7211, 317, 37, 6, 0),
(1095, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর ', 7200, 315, 37, 6, 0),
(1096, 'Munshiganj', 'মুন্সিগঞ্জ ', 7201, 315, 37, 6, 0),
(1097, 'Andulbaria', 'আন্দুলবাড়িয়া ', 7222, 314, 37, 6, 0),
(1098, 'Damurhuda', 'দামুড়হুদা ', 7220, 314, 37, 6, 0),
(1099, 'Darshana', 'দর্শনা ', 7221, 314, 37, 6, 0),
(1100, 'Doulatganj', 'দৌলতগঞ্জ ', 7230, 618, 37, 6, 0),
(1101, 'Bagharpara', 'বাঘারপাড়া ', 7470, 320, 38, 6, 0),
(1102, 'Gouranagar', 'গৌরনগর ', 7471, 320, 38, 6, 0),
(1103, 'Chougachha', 'চৌগাছা ', 7410, 322, 38, 6, 0),
(1104, 'Basundia', 'বসুন্দিয়া ', 7406, 321, 38, 6, 0),
(1105, 'Chanchra', 'চঞ্চড়া ', 7402, 321, 38, 6, 0),
(1106, 'Churamankathi', 'চুরমনকাঠি ', 7407, 321, 38, 6, 0),
(1107, 'Jashore Airbach', 'যশোর এয়ারবাচ 7404', 7404, 321, 38, 6, 0),
(1108, 'Jashore canttonment', 'যশোর সেনানিবাস ', 7403, 321, 38, 6, 0),
(1109, 'Jashore Sadar', 'যশোরে সদর ', 7400, 321, 38, 6, 0),
(1110, 'Rupdia', 'রূপদিয়া ', 7405, 321, 38, 6, 0),
(1111, 'Jhikargachha', 'ঝিকরগাছা ', 7420, 324, 38, 6, 0),
(1112, 'Keshobpur', 'কেশবপুর ', 7450, 319, 38, 6, 0),
(1113, 'Monirampur', 'মণিরামপুর ', 7440, 323, 38, 6, 0),
(1114, 'Bhugilhat', 'ভূগিলহাট ', 7462, 619, 38, 6, 0),
(1115, 'Noapara', 'নোয়াপাড়া', 7460, 619, 38, 6, 0),
(1116, 'Rajghat', 'রাজঘাট ', 7461, 619, 38, 6, 0),
(1117, 'Bag Achra', 'ব্যাগ আছড়া ', 7433, 325, 38, 6, 0),
(1118, 'Benapole', 'বেনাপোল ', 7431, 325, 38, 6, 0),
(1119, 'Jadabpur', 'যাদবপুর ', 7432, 325, 38, 6, 0),
(1120, 'Sarsa', 'সরসা ', 7430, 325, 38, 6, 0),
(1121, 'Harinakundu', 'হরিণাকুন্ডু ', 7310, 331, 39, 6, 0),
(1122, 'Jhenaidah Cadet College', 'ঝিনাইদহ ক্যাডেট কলেজ ', 7301, 326, 39, 6, 0),
(1123, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর ', 7300, 326, 39, 6, 0),
(1124, 'Kotchandpur', 'কোটচাঁদপুর ', 7330, 329, 39, 6, 0),
(1125, 'Maheshpur', 'মহেশপুর ', 7340, 327, 39, 6, 0),
(1126, 'Hatbar Bazar', 'হাটবার বাজার ', 7351, 620, 39, 6, 0),
(1127, 'Naldanga', 'নলডাঙ্গা ', 7350, 620, 39, 6, 0),
(1128, 'Kumiradaha', 'কুমিরদহ ', 7321, 330, 39, 6, 0),
(1129, 'Shailakupa', 'শৈলকূপা ', 7320, 330, 39, 6, 0),
(1130, 'Alaipur', 'আলাইপুর ', 9240, 621, 40, 6, 0),
(1131, 'Alaipur', 'আলাইপুর ', 9240, 621, 40, 6, 0),
(1132, 'Belphulia', 'বেলফুলিয়া ', 9242, 621, 40, 6, 0),
(1133, 'Rupsha', 'রুপশা ', 9241, 621, 40, 6, 0),
(1134, 'Batiaghat', 'বটিয়াঘাট ', 9260, 333, 40, 6, 0),
(1135, 'Surkalee', 'সুরকলি ', 9261, 333, 40, 6, 0),
(1136, 'Bajua', 'বাজুয়া ', 9272, 622, 40, 6, 0),
(1137, 'Chalna Bazar', 'চালনা বাজার ', 9270, 622, 40, 6, 0),
(1138, 'Dakup', 'ডাকুপ ', 9271, 622, 40, 6, 0),
(1139, 'Nalian', 'নালিয়ান ', 9273, 622, 40, 6, 0),
(1140, 'Chandni Mahal', 'চাঁদনী মহল ', 9221, 336, 40, 6, 0),
(1141, 'Digalia', 'দিগালিয়া ', 9220, 336, 40, 6, 0),
(1142, 'Gazirhat', 'গাজিরহাট ', 9224, 336, 40, 6, 0),
(1143, 'Ghoshghati', 'ঘোষঘাটি ', 9223, 336, 40, 6, 0),
(1144, 'Senhati', 'সেনহাটি ', 9222, 336, 40, 6, 0),
(1145, 'Atra Shilpa Area', 'আতরা শিল্পা অঞ্চল ', 9207, 347, 40, 6, 0),
(1146, 'BIT Khulna', 'বিআইটি খুলনা ', 9203, 347, 40, 6, 0),
(1147, 'Doulatpur', 'দৌলতপুর ', 9202, 347, 40, 6, 0),
(1148, 'Jahanabad Canttonmen', 'জাহানাবাদ ক্যান্টনম্যান ', 9205, 347, 40, 6, 0),
(1149, 'Khula Sadar', 'খুলা সদর ', 9100, 347, 40, 6, 0),
(1150, 'Khulna G.P.O', 'খুলনা জি.পি.ও ', 9000, 347, 40, 6, 0),
(1151, 'Khulna Shipyard', 'খুলনা শিপইয়ার্ড ', 9201, 347, 40, 6, 0),
(1152, 'Khulna University', 'খুলনা বিশ্ববিদ্যালয় ', 9208, 347, 40, 6, 0),
(1153, 'Siramani', 'সিরামনি ', 9204, 347, 40, 6, 0),
(1154, 'Sonali Jute Mills', 'সোনালী জুট মিলস ', 9206, 347, 40, 6, 0),
(1155, 'Amadee', 'আমাদে ', 9291, 337, 40, 6, 0),
(1156, 'Koyra', 'কয়রা ', 9290, 337, 40, 6, 0),
(1157, 'Chandkhali', 'চাঁদখালী ', 9284, 338, 40, 6, 0),
(1158, 'Garaikhali', 'গড়াইখালী ', 9285, 338, 40, 6, 0),
(1159, 'Godaipur', 'গোদাইপুর ', 9281, 338, 40, 6, 0),
(1160, 'Kapilmoni', 'কপিলমনি ', 9282, 338, 40, 6, 0),
(1161, 'Katipara', 'কাটিপাড়া ', 9283, 338, 40, 6, 0),
(1162, 'Paikgachha', 'পাইকগাছা ', 9280, 338, 40, 6, 0),
(1163, 'Phultala', 'ফুলতলা ', 9210, 339, 40, 6, 0),
(1164, 'Pak Barasat', 'চুকনগর ', 9231, 332, 40, 6, 0),
(1165, 'Terakhada', 'তেরখাদা ', 9230, 332, 40, 6, 0),
(1166, 'Sajiara', 'সাজিয়ারা', 9250, 623, 40, 6, 0),
(1167, 'Chuknagar', 'চুকনগর ', 9252, 623, 40, 6, 0),
(1168, 'Ghonabanda', 'ঘোনাবান্দা ', 9251, 623, 40, 6, 0),
(1169, 'Shahapur', 'শাহাপুর ', 9253, 623, 40, 6, 0),
(1170, 'Allardarga', 'আল্লারদর্গা ', 7042, 354, 41, 6, 0),
(1171, 'Bheramara', 'ভেড়ামারা ', 7040, 354, 41, 6, 0),
(1172, 'Ganges Bheramara', 'গঙ্গা ভেড়ামারা ', 7041, 354, 41, 6, 0),
(1173, 'Janipur', 'জনিপুর ', 7020, 624, 41, 6, 0),
(1174, 'Khoksa', 'খোকসা ', 7021, 624, 41, 6, 0),
(1175, 'Kumarkhali', 'কুমারখালী ', 7010, 351, 41, 6, 0),
(1176, 'Panti', 'প্যান্টি ', 7011, 351, 41, 6, 0),
(1177, 'Islami University', 'ইসলামী বিশ্ববিদ্যালয় ', 7003, 350, 41, 6, 0),
(1178, 'Jagati', 'জগতি ', 7002, 350, 41, 6, 0),
(1179, 'Kushtia Mohini', 'কুষ্টিয়া মোহিনী ', 7001, 350, 41, 6, 0),
(1180, 'Kushtia Sadar', 'কুষ্টিয়া সদর ', 7000, 350, 41, 6, 0),
(1181, 'Amla Sadarpur', 'আমলা সদরপুর ', 7032, 353, 41, 6, 0),
(1182, 'Mirpur', 'মিরপুর ', 7030, 353, 41, 6, 0),
(1183, 'Poradaha', 'Poradaha	', 7031, 353, 41, 6, 0),
(1184, 'Khasmathurapur', 'খসমথুরাপুর ', 7052, 625, 41, 6, 0),
(1185, 'Rafayetpur', 'রাফায়েতপুর ', 7050, 625, 41, 6, 0),
(1186, 'Taragunia', 'তারাগুনিয়া ', 7051, 625, 41, 6, 0),
(1187, 'Arpara', 'আরপাড়া ', 7620, 626, 42, 6, 0),
(1188, 'Magura Sadar', 'মাগুরা সদর ', 7600, 356, 42, 6, 0),
(1189, 'Binodpur', 'বিনোদপুর ', 7631, 357, 42, 6, 0),
(1190, 'Mohammadpur', 'মোহাম্মদপুর ', 7630, 357, 42, 6, 0),
(1191, 'Nahata', 'নাহতা ', 7632, 357, 42, 6, 0),
(1192, 'Langalbadh', 'লাঙ্গলবাদ ', 7611, 359, 42, 6, 0),
(1193, 'Nachol', 'নাচোল ', 7612, 359, 42, 6, 0),
(1194, 'Shripur', 'শ্রীপুর ', 7610, 359, 42, 6, 0),
(1195, 'Gangni', 'গাংনী', 7110, 627, 43, 6, 0),
(1196, 'Amjhupi', 'আমঝুপি ', 7101, 362, 43, 6, 0),
(1197, 'Amjhupi', 'আমঝুপি ', 7152, 362, 43, 6, 0),
(1198, 'Meherpur Sadar', 'মেহেরপুর সদর ', 7100, 362, 43, 6, 0),
(1199, 'Mujib Nagar Complex', 'মুজিব নগর কমপ্লেক্স', 7102, 362, 43, 6, 0),
(1200, 'Kalia', 'কালিয়া ', 7520, 365, 44, 6, 0),
(1201, 'Baradia', 'বড়দিয়া', 7514, 628, 44, 6, 0),
(1202, 'Itna', 'ইটনা', 7512, 628, 44, 6, 0),
(1203, 'Laxmipasha', 'লক্ষ্মীপাশা ', 7510, 628, 44, 6, 0),
(1204, 'Lohagora', 'লোহাগোড়া ', 7511, 628, 44, 6, 0),
(1205, 'Lohagora', 'লোহাগোড়া ', 7511, 628, 44, 6, 0),
(1206, 'Naldi', 'নলদী ', 7513, 628, 44, 6, 0),
(1207, 'Mohajan', 'মহাজন ', 7521, 630, 44, 6, 0),
(1208, 'Narail Sadar', 'নড়াইল সদর ', 7500, 363, 44, 6, 0),
(1209, 'Ratanganj', 'রতনগঞ্জ ', 7501, 363, 44, 6, 0),
(1210, 'Ashashuni', 'আশাশুনি ', 9460, 367, 45, 6, 0),
(1211, 'Baradal', 'বড়দল ', 9461, 367, 45, 6, 0),
(1212, 'Debbhata', 'দেবভাটা ', 9430, 368, 45, 6, 0),
(1213, 'Gurugram', 'গুরুগ্রাম ', 9431, 368, 45, 6, 0),
(1214, 'Chandanpur', 'চন্দনপুর ', 9415, 370, 45, 6, 0),
(1215, 'Hamidpur', 'হামিদপুর ', 9413, 370, 45, 6, 0),
(1216, 'Jhaudanga', 'ঝাউডাঙ্গা ', 9412, 370, 45, 6, 0),
(1217, 'kalaroa', 'কলারোয়া ', 9410, 370, 45, 6, 0),
(1218, 'Khordo', 'খর্ডো ', 9414, 370, 45, 6, 0),
(1219, 'Murarikati', 'মুরারিকাটি ', 9410, 370, 45, 6, 0),
(1220, 'Kaliganj UPO', 'কালীগঞ্জ ইউপিও ', 9440, 371, 45, 6, 0),
(1221, 'Nalta Mubaroknagar', 'নলতা মুবারোকনগর ', 9441, 371, 45, 6, 0),
(1222, 'Ratanpur', 'রতনপুর ', 9442, 371, 45, 6, 0),
(1223, 'Nakipur', 'নকিপুর', 9450, 631, 45, 6, 0),
(1224, 'Habinagar', 'হাবিনগর ', 9455, 631, 45, 6, 0),
(1225, 'Gabura', 'গাবুরা ', 9454, 631, 45, 6, 0),
(1226, 'Buri Goalini', 'বুড়ি গোয়ালিনী ', 9453, 631, 45, 6, 0),
(1227, 'Naobeki', 'নাওবেকি ', 9452, 631, 45, 6, 0),
(1228, 'Noornagar', 'নূরনগর ', 9451, 631, 45, 6, 0),
(1229, 'Budhhat', 'বুধহাত ', 9403, 366, 45, 6, 0),
(1230, 'Gunakar kati', 'গুণকর কাটি ', 9402, 366, 45, 6, 0),
(1231, 'Satkhira Islamia Acc', 'সাতক্ষীরা ইসলামিয়া এ্যাক ', 9401, 366, 45, 6, 0),
(1232, 'Satkhira Sadar', 'সাতক্ষীরা সদর ', 9400, 366, 45, 6, 0),
(1233, 'Patkelghata', 'পাটকেলঘাটা ', 9421, 369, 45, 6, 0),
(1234, 'Tala', 'তালা ', 9420, 369, 45, 6, 0),
(1235, 'Adamdighi', 'আদমদীঘি ', 5890, 373, 51, 5, 0),
(1236, 'Nasharatpur', 'নশরতপুর ', 5892, 373, 51, 5, 0),
(1237, 'Santahar', 'সান্তাহার ', 5891, 373, 51, 5, 0),
(1238, 'Bogura Canttonment', 'বগুড়া সেনানিবাস ', 5801, 374, 51, 5, 0),
(1239, 'Bogura Sadar', 'বগুড়া সদর ', 5800, 374, 51, 5, 0),
(1240, 'Dhunat', 'ধুনট ', 5850, 376, 51, 5, 0),
(1241, 'Gosaibari', 'গোসাইবাড়ি ', 5851, 376, 51, 5, 0),
(1242, 'Dupchanchia', 'দুপচাঁচিয়া ', 5880, 377, 51, 5, 0),
(1243, 'Talora', 'তালোড়া ', 5881, 377, 51, 5, 0),
(1244, 'Gabtoli', 'গাবতলী', 5820, 378, 51, 5, 0),
(1245, 'Sukhanpukur', 'সুখনপুকুর ', 5821, 378, 51, 5, 0),
(1246, 'Kahalu', 'কাহালু ', 5870, 379, 51, 5, 0),
(1247, 'Nandigram', 'নন্দীগ্রাম ', 5860, 380, 51, 5, 0),
(1248, 'Chandan Baisha', 'চন্দন বৈশা ', 5831, 382, 51, 5, 0),
(1249, 'Sariakandi', 'সারিয়াকান্দি ', 5830, 382, 51, 5, 0),
(1250, 'Chandaikona', 'চান্দাইকোনা ', 5841, 375, 51, 5, 0),
(1251, 'Palli Unnyan Accadem', 'পল্লী উন্যান অ্যাকাদেম ', 5842, 375, 51, 5, 0),
(1252, 'Sherpur', 'শেরপুর ', 5840, 375, 51, 5, 0),
(1253, 'Shibganj', 'শিবগঞ্জ ', 5810, 383, 51, 5, 0),
(1254, 'Sonatola', 'সোনাতোলা ', 5826, 384, 51, 5, 0),
(1255, 'Amnura', 'আমনুরা ', 6303, 410, 55, 5, 0),
(1256, 'Chapai Nawabganj Sadar', 'চাঁপাই নবাবগঞ্জ সদর ', 6300, 410, 55, 5, 0),
(1257, 'Rajarampur', 'রাজারামপুর ', 6301, 410, 55, 5, 0),
(1258, 'Ramchandrapur', 'রামচন্দ্রপুর ', 6302, 410, 55, 5, 0),
(1259, 'Mandumala', 'মান্দুমালা ', 6311, 409, 55, 5, 0),
(1260, 'Nachol', 'নাচোল ', 6310, 409, 55, 5, 0),
(1261, 'Gomashtapur', 'গোমষ্টপুর ', 6321, 632, 55, 5, 0),
(1262, 'Rohanpur', 'রোহনপুর ', 6320, 632, 55, 5, 0),
(1263, 'Kansart', 'কানসার্ট ', 6341, 411, 55, 5, 0),
(1264, 'Manaksha', 'মানাক্ষা ', 6342, 411, 55, 5, 0),
(1265, 'Shibganj U.P.O', 'শিবগঞ্জ ইউ.পি.ও ', 6340, 411, 55, 5, 0),
(1266, 'Akklepur', 'আক্কেলপুর ', 5940, 386, 52, 5, 0),
(1267, 'jamalganj', 'জামালগঞ্জ ', 5941, 386, 52, 5, 0),
(1268, 'Tilakpur', 'তিলকপুর ', 5942, 386, 52, 5, 0),
(1269, 'Joypurhat Sadar', 'জয়পুরহাট সদর ', 5900, 385, 52, 5, 0),
(1270, 'kalai', 'কলাই ', 5930, 387, 52, 5, 0),
(1271, 'Khetlal', 'ক্ষেতলাল ', 5920, 388, 52, 5, 0),
(1272, 'Panchbibi', 'পাঁচবিবি ', 5910, 389, 52, 5, 0),
(1273, 'Ahsanganj', 'আহসানগঞ্জ ', 6596, 633, 53, 5, 0),
(1274, 'Bandai', 'বান্দাই ', 6597, 633, 53, 5, 0),
(1275, 'Badalgachhi', 'বাদলগাছি ', 6570, 400, 53, 5, 0),
(1276, 'Dhamuirhat', 'ধামইরহাট ', 6580, 397, 53, 5, 0),
(1277, 'Mahadebpur', 'মহাদেবপুর ', 6530, 391, 53, 5, 0),
(1278, 'Naogaon Sadar', 'নওগাঁ সদর ', 6500, 390, 53, 5, 0),
(1279, 'Niamatpur', 'নিয়ামতপুর ', 6520, 393, 53, 5, 0),
(1280, 'Nitpur', 'নিতপুর ', 6550, 634, 53, 5, 0),
(1281, 'Panguria', 'পাঙ্গুরিয়া ', 6552, 634, 53, 5, 0),
(1282, 'Porsa', 'পোরসা ', 6551, 634, 53, 5, 0),
(1283, 'Patnitala', 'পাটনিটলা ', 6540, 396, 53, 5, 0),
(1284, 'Balihar', 'বলিহার ', 6512, 399, 53, 5, 0),
(1285, 'Manda', 'মান্ডা ', 6511, 399, 53, 5, 0),
(1286, 'Prasadpur', 'প্রসাদপুর ', 6510, 399, 53, 5, 0),
(1287, 'Kashimpur', 'কাশিমপুর ', 6591, 395, 53, 5, 0),
(1288, 'Raninagar', 'রানিনগর ', 6590, 395, 53, 5, 0),
(1289, 'Moduhil', 'মোদুহিল ', 6561, 398, 53, 5, 0),
(1290, 'Sapahar', 'সাপাহার ', 6560, 398, 53, 5, 0),
(1291, 'Abdulpur', 'আব্দুলপুর ', 6422, 635, 54, 5, 0),
(1292, 'Gopalpur U.P.O', 'গোপালপুর ইউপিও', 6420, 635, 54, 5, 0),
(1293, 'Lalpur S.O', 'লালপুর এসও ', 6421, 635, 54, 5, 0),
(1294, 'Baraigram', 'বড়াইগ্রাম ', 6432, 636, 54, 5, 0),
(1295, 'Dayarampur', 'দয়ারামপুর ', 6431, 636, 54, 5, 0),
(1296, 'Harua', 'হারুয়া ', 6430, 636, 54, 5, 0),
(1297, 'Hatgurudaspur', 'হাটগুরুদাসপুর ', 6440, 637, 54, 5, 0),
(1298, 'Laxman', 'লক্ষ্মণ ', 6410, 638, 54, 5, 0),
(1299, 'Baiddyabal Gharia', 'বৈদ্যবল ঘড়িয়া ', 6402, 405, 54, 5, 0),
(1300, 'Digapatia', 'দিগাপতিয়া ', 6401, 405, 54, 5, 0),
(1301, 'Madhnagar', 'মাধনগর ', 6403, 405, 54, 5, 0),
(1302, 'Natore Sadar', 'নাটোর সদর ', 6400, 405, 54, 5, 0),
(1303, 'Singra', 'সিংড়া ', 6450, 639, 54, 5, 0),
(1304, 'Banawarianagar', 'বানওয়ারিনগর ', 6650, 640, 56, 5, 0),
(1305, 'Bera', 'বেরা ', 6680, 413, 56, 5, 0),
(1306, 'Kashinathpur', 'কাশিনাথপুর ', 6682, 413, 56, 5, 0),
(1307, 'Nakalia', 'নকলিয়া ', 6681, 413, 56, 5, 0),
(1308, 'Puran Bharenga', 'পুরান ভারেঙ্গা ', 6683, 413, 56, 5, 0),
(1309, 'Bhangura', 'ভাঙ্গুড়া ', 6640, 414, 56, 5, 0),
(1310, 'Chatmohar', 'চাটমোহর ', 6630, 415, 56, 5, 0),
(1311, 'Atghoria', 'আটঘরিয়া ', 6610, 412, 56, 5, 0),
(1312, 'Dhapari', 'ধাপরি ', 6621, 417, 56, 5, 0),
(1313, 'Ishwardi', 'ঈশ্বরদী ', 6620, 417, 56, 5, 0),
(1314, 'Pakshi', 'পাকশি ', 6622, 417, 56, 5, 0),
(1315, 'Rajapur', 'রাজাপুর ', 6623, 417, 56, 5, 0),
(1316, 'Rajapur', 'রাজাপুর ', 6623, 417, 56, 5, 0),
(1317, 'Hamayetpur', 'হামায়িতপুর ', 6602, 418, 56, 5, 0),
(1318, 'Kaliko Cotton Mills', 'কালিকো কটন মিলস ', 6601, 418, 56, 5, 0),
(1319, 'Pabna Sadar', 'পাবনা সদর ', 6600, 418, 56, 5, 0),
(1320, 'Sathia', 'সাথিয়া ', 6670, 419, 56, 5, 0),
(1321, 'Sagarkandi', 'সাগরকান্দি ', 6661, 420, 56, 5, 0),
(1322, 'Sujanagar', 'সুজনগর ', 6660, 420, 56, 5, 0),
(1323, 'Arani', 'অরণি ', 6281, 421, 57, 5, 0),
(1324, 'Bagha', 'বাঘা ', 6280, 421, 57, 5, 0),
(1325, 'Bhabaniganj', 'ভবানীগঞ্জ ', 6250, 422, 57, 5, 0),
(1326, 'Taharpur', 'তাহারপুর ', 6251, 422, 57, 5, 0),
(1327, 'Charghat', 'চারঘাট ', 6270, 423, 57, 5, 0),
(1328, 'Sarda', 'সারদা ', 6271, 423, 57, 5, 0),
(1329, 'Durgapur', 'দুর্গাপুর ', 6240, 424, 57, 5, 0),
(1330, 'Godagari', 'গোদাগাড়ী ', 6290, 425, 57, 5, 0),
(1331, 'Premtoli', 'প্রেমতোলি ', 6291, 425, 57, 5, 0),
(1332, 'Khodmohanpur', 'খোডমোহনপুর ', 6220, 641, 57, 5, 0),
(1333, 'Lalitganj', 'ললিতগঞ্জ ', 6210, 642, 57, 5, 0),
(1334, 'Rajshahi Sugar Mills', 'রাজশাহী সুগার মিলস ', 6211, 642, 57, 5, 0),
(1335, 'Shyampur', 'শ্যামপুর ', 6212, 642, 57, 5, 0),
(1336, 'Putia', 'পুটিয়া ', 6260, 428, 57, 5, 0),
(1337, 'Binodpur Bazar', 'বিনোদপুর বাজার ', 6206, 643, 57, 5, 0),
(1338, 'Ghuramara', 'ঘুরমারা ', 6100, 643, 57, 5, 0),
(1339, 'Ghuramara', 'ঘুরমারা ', 6100, 643, 57, 5, 0),
(1340, 'Kazla', 'কাজলা ', 6204, 643, 57, 5, 0),
(1341, 'Rajshahi Canttonment', 'রাজশাহী সেনানিবাস ', 6202, 643, 57, 5, 0),
(1342, 'Rajshahi Court', 'রাজশাহী আদালত ', 6201, 643, 57, 5, 0),
(1343, 'Rajshahi Sadar', 'রাজশাহী সদর ', 6000, 643, 57, 5, 0),
(1344, 'Rajshahi University', 'রাজশাহী বিশ্ববিদ্যালয় ', 6205, 643, 57, 5, 0),
(1345, 'Sapura', 'সাপুরা 6203', 6203, 643, 57, 5, 0),
(1346, 'Tanor', 'ট্যানর ', 6230, 429, 57, 5, 0),
(1347, 'Baiddya Jam Toil', 'বৈদ্য জাম তোল ', 6730, 644, 59, 5, 0),
(1348, 'Belkuchi', 'বেলকুচি ', 6740, 435, 59, 5, 0),
(1349, 'Enayetpur', 'এনায়েতপুর ', 6751, 435, 59, 5, 0),
(1350, 'Rajapur', 'রাজাপুর ', 6742, 435, 59, 5, 0),
(1351, 'Sohagpur', 'সোহাগপুর ', 6741, 435, 59, 5, 0),
(1352, 'Sthal', 'স্থল ', 6752, 435, 59, 5, 0),
(1353, 'Dhangora', 'ধানগোড়া ', 6720, 645, 59, 5, 0),
(1354, 'Malonga', 'মালঙ্গা ', 6721, 645, 59, 5, 0),
(1355, 'Gandail', 'গ্যান্ডেল ', 6712, 438, 59, 5, 0),
(1356, 'Kazipur', 'কাজিপুর ', 6710, 438, 59, 5, 0),
(1357, 'Shuvgachha', 'শুভগাছা ', 6711, 438, 59, 5, 0),
(1358, 'Jamirta', 'জামির্তা ', 6772, 440, 59, 5, 0),
(1359, 'Kaijuri', 'কাইজুরি ', 6773, 440, 59, 5, 0),
(1360, 'Porjana', 'পোরজানা', 6771, 440, 59, 5, 0),
(1361, 'Shahjadpur', 'শাহজাদপুর ', 6770, 440, 59, 5, 0),
(1362, 'Raipur', 'রায়পুর ', 6701, 434, 59, 5, 0),
(1363, 'Rashidabad', 'রশিদাবাদ ', 6702, 434, 59, 5, 0),
(1364, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর ', 6700, 434, 59, 5, 0),
(1365, 'Tarash', 'তারাশ ', 6780, 441, 59, 5, 0),
(1366, 'Lahiri Mohanpur', 'লাহিড়ী মোহনপুর ', 6762, 442, 59, 5, 0),
(1367, 'Salap', 'স্যালাপ ', 6763, 442, 59, 5, 0),
(1368, 'Ullapara', 'উল্লাপাড়া ', 6760, 442, 59, 5, 0),
(1369, 'Ullapara R.S', 'উল্লাপাড়া আর.এস ', 6761, 442, 59, 5, 0),
(1370, 'Rasulpur', 'রসুলপুর ', 6730, 437, 59, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rentacar`
--

CREATE TABLE `rentacar` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_bin,
  `logo` text,
  `c_photo` text,
  `user_id` int(11) NOT NULL,
  `police_station` int(11) NOT NULL,
  `post_office` int(11) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `district` int(11) NOT NULL,
  `division` int(11) NOT NULL,
  `country` varchar(20) NOT NULL DEFAULT 'Bangladesh',
  `date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentacar`
--

INSERT INTO `rentacar` (`id`, `name`, `phone`, `about`, `logo`, `c_photo`, `user_id`, `police_station`, `post_office`, `zip`, `district`, `division`, `country`, `date`, `status`) VALUES
(1, 'Sundorban rant a car', '01717440931', 'সুন্দরবন রেন্ট এ কার বাংলাদেশের ১ নাম্বার রেন্ট এ কার সেবা দিয়ে থাকে।', '5fb154617c17f1.029042751605456993.png', '5fb1541e694050.500251241605456926.png', 12, 29, 489, '1000', 23, 3, 'Bangladesh', '2020-11-15', 0),
(2, 'Pick and Drop', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5fb1516be5fa64.229538051605456235.png', '5fb15211aadfe5.085615731605456401.jpg', 13, 64, 34, '8230', 7, 15, 'Bangladesh', '2020-11-15', 0),
(3, 'Manishankar Vakta', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '5fb1551cf0afc9.374239291605457180.jpg', 12, 576, 202, '4000', 15, 7, 'Bangladesh', '2020-11-15 07:22 pm', 0),
(4, 'Pick and Drop', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5fb1516be5fa64.229538051605456235.png', '5fb15211aadfe5.085615731605456401.jpg', 13, 18, 1, '1250', 5, 3, 'Bangladesh', '2020-11-15', 0),
(5, 'Manishankar Vakta', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '5fb1551cf0afc9.374239291605457180.jpg', 12, 18, 1, '1250', 5, 3, 'Bangladesh', '2020-11-15 07:22 pm', 0),
(6, 'Sundorban rant a car', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5fb154617c17f1.029042751605456993.png', '5fb1541e694050.500251241605456926.png', 12, 29, 489, '1000', 23, 3, 'Bangladesh', '2020-11-15', 0),
(7, 'Pick and Drop', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5fb1516be5fa64.229538051605456235.png', '5fb15211aadfe5.085615731605456401.jpg', 13, 27, 507, '1230', 23, 3, 'Bangladesh', '2020-11-15', 0),
(8, 'Manishankar Vakta', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '5fb1551cf0afc9.374239291605457180.jpg', 12, 18, 1, '1250', 5, 3, 'Bangladesh', '2020-11-15 07:22 pm', 0),
(9, 'Pick and Drop', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5fb1516be5fa64.229538051605456235.png', '5fb15211aadfe5.085615731605456401.jpg', 13, 18, 1, '1250', 5, 3, 'Bangladesh', '2020-11-15', 0),
(10, 'Manishankar Vakta', '01717440931', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '5fb1551cf0afc9.374239291605457180.jpg', 12, 18, 1, '1250', 5, 3, 'Bangladesh', '2020-11-15 07:22 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `rentacar` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `report` text NOT NULL,
  `actions` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `customer`, `rentacar`, `type`, `report`, `actions`, `date`, `status`) VALUES
(1, 11, 1, 1, 'efgvs gdf', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `review` text NOT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `customer`, `star`, `review`, `offer_id`, `order_id`, `date`, `status`) VALUES
(2, 11, 4, 'resg sdfg sdfhg sdfhg', NULL, 3, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `where_to` int(11) NOT NULL,
  `where_from` int(11) NOT NULL,
  `distance` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `route_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `where_to`, `where_from`, `distance`, `duration`, `status`, `route_no`) VALUES
(1, 7, 23, '250', '5', 0, '1250'),
(2, 23, 40, '400', '7', 0, '1251'),
(3, 23, 71, '150', '4', 0, '1235'),
(4, 34, 23, '250', '4', 0, '1254');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `trip_time` text NOT NULL,
  `route_id` int(11) NOT NULL,
  `picup_point` varchar(150) DEFAULT NULL,
  `drop_point` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `trip_time`, `route_id`, `picup_point`, `drop_point`, `status`) VALUES
(6, 'a:3:{i:0;a:5:{i:0;s:5:\"07:30\";i:1;s:5:\"Dhaka\";i:2;s:7:\"Barisal\";i:3;s:1:\"1\";i:4;s:1:\"0\";}i:1;a:5:{i:0;s:5:\"15:30\";i:1;s:7:\"Barisal\";i:2;s:5:\"Dhaka\";i:3;s:1:\"1\";i:4;s:1:\"0\";}i:2;a:5:{i:0;s:5:\"23:30\";i:1;s:5:\"Dhaka\";i:2;s:7:\"Barisal\";i:3;s:1:\"1\";i:4;s:1:\"0\";}}', 1250, NULL, NULL, 0),
(7, 'a:4:{i:0;a:5:{i:0;s:5:\"09:30\";i:1;s:5:\"Dhaka\";i:2;s:6:\"Khulna\";i:3;s:1:\"2\";i:4;s:1:\"0\";}i:1;a:5:{i:0;s:5:\"08:30\";i:1;s:6:\"Khulna\";i:2;s:5:\"Dhaka\";i:3;s:1:\"2\";i:4;s:1:\"0\";}i:2;a:5:{i:0;s:5:\"10:30\";i:1;s:6:\"Khulna\";i:2;s:5:\"Dhaka\";i:3;s:1:\"3\";i:4;s:1:\"0\";}i:3;a:5:{i:0;s:5:\"09:00\";i:1;s:5:\"Dhaka\";i:2;s:6:\"Khulna\";i:3;s:1:\"3\";i:4;s:1:\"0\";}}', 1251, NULL, NULL, 0),
(8, 'a:2:{i:0;a:5:{i:0;s:5:\"09:30\";i:1;s:5:\"Dhaka\";i:2;s:9:\"Soriotpur\";i:3;s:1:\"5\";i:4;s:1:\"0\";}i:1;a:5:{i:0;s:5:\"21:40\";i:1;s:9:\"Soriotpur\";i:2;s:5:\"Dhaka\";i:3;s:1:\"5\";i:4;s:1:\"0\";}}', 1235, NULL, NULL, 0),
(10, 'a:4:{i:0;a:5:{i:0;s:5:\"14:49\";i:1;s:5:\"Dhaka\";i:2;s:9:\"Soriotpur\";i:3;s:1:\"6\";i:4;s:1:\"0\";}i:1;a:5:{i:0;s:5:\"09:51\";i:1;s:9:\"soriotpur\";i:2;s:5:\"dhaka\";i:3;s:1:\"6\";i:4;s:1:\"0\";}i:2;a:5:{i:0;s:5:\"09:50\";i:1;s:5:\"Dhaka\";i:2;s:9:\"Soriotpur\";i:3;s:1:\"7\";i:4;s:1:\"0\";}i:3;a:5:{i:0;s:5:\"20:30\";i:1;s:9:\"soriotpur\";i:2;s:5:\"Dhaka\";i:3;s:1:\"7\";i:4;s:1:\"0\";}}', 1254, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `user_info` text,
  `address` text,
  `c_info` text,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `photo`, `user_info`, `address`, `c_info`, `type`, `status`) VALUES
(1, 'manishankarvakta@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Manishankar Vakta', '1717440931', NULL, NULL, '', '', 1, 0),
(11, 'customer@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Customer One', '01717440931', NULL, NULL, NULL, NULL, 3, 0),
(12, 'rentacar1@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Rent a Car 01', '01717440931', NULL, NULL, NULL, NULL, 2, 0),
(13, 'rentacar2@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Rent a Car 02', '01717440931', NULL, NULL, NULL, NULL, 2, 0),
(14, 'customer2@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Customer Two', '01717440931', NULL, NULL, NULL, NULL, 3, 0),
(15, 'driver1@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Driver 1', '01717440931', NULL, NULL, NULL, NULL, 4, 0),
(16, 'driver2@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Driver 2', '01717440931', NULL, NULL, NULL, NULL, 4, 0),
(17, 'ccare1@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Customer Care 1', '01717440931', NULL, NULL, NULL, NULL, 5, 0),
(18, 'ccare2@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Customer Care 2', '01717440931', NULL, NULL, NULL, NULL, 5, 0),
(19, 'customer2@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Customer', NULL, NULL, NULL, NULL, NULL, 3, 0),
(20, 'customer3@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'New User', NULL, NULL, NULL, NULL, NULL, 3, 0),
(21, 'customer5@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Manishankar Vakta', NULL, NULL, NULL, NULL, NULL, 3, 0),
(22, 'customer6@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'asdf', NULL, NULL, NULL, NULL, NULL, 3, 0),
(23, 'customer8@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'sada', NULL, NULL, NULL, NULL, NULL, 3, 0),
(24, 'manishankarvakta1@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Manishankar Vakta', NULL, NULL, NULL, NULL, NULL, 3, 0),
(25, 'manishankarvakta5@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Manishankar Vakta', NULL, NULL, NULL, NULL, NULL, 3, 0),
(26, 'manishankarvakta6@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Manishankar Vakta', NULL, NULL, NULL, NULL, NULL, 3, 0),
(27, 'manishankarvakta7@gmail.com', '2eb3189ff1e21a1bddb1b82418b4cbc3', 'Manishankar Vakta', NULL, NULL, NULL, NULL, NULL, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_request`
--
ALTER TABLE `buyer_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_office`
--
ALTER TABLE `post_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentacar`
--
ALTER TABLE `rentacar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buyer_request`
--
ALTER TABLE `buyer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=646;

--
-- AUTO_INCREMENT for table `post_office`
--
ALTER TABLE `post_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1371;

--
-- AUTO_INCREMENT for table `rentacar`
--
ALTER TABLE `rentacar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

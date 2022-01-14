-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 09:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventman`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `xsl` int(10) UNSIGNED NOT NULL,
  `ztime` timestamp NOT NULL DEFAULT current_timestamp(),
  `xemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zrole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customers',
  `xname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xmobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xadd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xflag` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`xsl`, `ztime`, `xemail`, `zemail`, `zpass`, `zrole`, `xname`, `xmobile`, `xadd`, `xflag`) VALUES
(1, '2021-07-06 17:29:08', 'dipu@demo.com', 'admin@demo.com', '12345678', 'customers', 'Dipu', '01641377742', 'Dharat', 1),
(2, '2021-07-06 17:43:20', 'akhtara@abl.com', 'admin@demo.com', '7010796', 'customers', 'Golam', '01611111112', 'dfdf', 0),
(3, '2021-07-06 17:48:47', 'hello@vshop.com', 'admin@demo.com', '12345678', 'customers', 'Jabir Islam', '01764510179', 'Sabaliya', 1),
(6, '2021-09-24 17:21:49', 'dipu5454@demo.com', 'System', '12345678', 'customers', 'Habib Khan', '01643455545', '32323', 1),
(7, '2021-10-20 08:26:17', 'dipu@gmail.com', 'System', '12345678', 'customers', 'Dipu', '01706670708', 'Dharat, Gharinda, Rampura', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `xsl` int(11) NOT NULL,
  `ztime` timestamp NOT NULL DEFAULT current_timestamp(),
  `xdate` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xtime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zemail` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xcode` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `xtype` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'Natok',
  `xvenu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xcast` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xdesc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `xcost` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xmrp` int(11) NOT NULL DEFAULT 0,
  `xseat` int(11) DEFAULT NULL,
  `zseat` int(10) DEFAULT 0,
  `xmobile` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xemail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xflag` int(11) NOT NULL DEFAULT 1,
  `xfeature` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`xsl`, `ztime`, `xdate`, `xtime`, `zemail`, `xcode`, `xname`, `xtype`, `xvenu`, `xcast`, `xdesc`, `xcost`, `xmrp`, `xseat`, `zseat`, `xmobile`, `xemail`, `xflag`, `xfeature`) VALUES
(1, '2021-07-13 18:46:28', '2022-07-13', '', 'admin@demo.com', '000001', 'Mohanogor Session Two', 'Natok', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1000', 1076, 15, 5, '', '', 1, 1),
(2, '2021-07-13 18:49:44', '2021-10-13', '', 'admin@demo.com', '000002', 'Chorki', 'Natok', 'OTP', 'Mahi,Syam,Afran', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1200', 1265, 5, 1, '01717582230', 'sumon@gmail.com', 1, 1),
(3, '2021-07-13 19:51:46', '2021-11-07', '', 'admin@demo.com', '000003', 'Hello Two Three Boisak', 'Natok', 'Dharat', 'James', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1500', 1596, 100, 15, '01775180188', 'nafis@gmail.com', 1, 1),
(4, '2021-07-13 19:51:46', '2022-09-07', '', 'admin@demo.com', '000006', 'Hello Two Three', 'Natok', 'Tangail Nirala', 'James', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1250', 1388, 1200, 700, '01775180188', 'nafis@gmail.com', 1, 1),
(5, '2021-07-13 22:54:24', '2021-11-25', '', 'admin@demo.com', '000004', 'Habsi Natok', 'Natok', 'Gupalgonj', 'Habib', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1000', 1102, 1236, 100, '01717582230', 'nafis@gmail.com', 1, 1),
(6, '2021-07-13 22:58:00', '2021-11-25', '21:44', 'admin@demo.com', '000005', 'Mohanogor', 'Natok', 'Hoichoi Otp Platform Hoichoi Otp Platform', 'Musarof Korim, Momo etc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '120', 214, 1250, 1000, '01717582230', 'sumon@gmail.com', 1, 1),
(7, '2021-07-13 23:10:47', '2022-02-21', '', 'admin@demo.com', '000007', '71 Muktir Natok', 'Natok', 'National Stadium', 'Chanchal,Sabila,Mehejabin etc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '800', 815, 2000, 1257, '01706670708', 'nazmul@os.com', 1, 1),
(8, '2021-07-14 22:58:59', '2021-12-23', '16:55', 'admin@demo.com', '000008', 'Hasna Dilruba', 'Natok', 'Bollywood', 'Hasna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1500', 1595, 1200, 0, '01641377742', 'nafis@gmail.com', 1, 1),
(9, '2021-07-14 23:04:03', '2022-03-07', '18:03', 'admin@demo.com', '000009', '7 March Concert', 'Concert', 'Armi Stdium', 'Bangladeshi Music Brand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '150', 278, 5000, 5, '01775180188', 'eve@gmail.com', 1, 1),
(10, '2021-09-24 15:21:27', '2021-10-25', '21:20', 'admin@demo.com', '000010', 'Happy Concert', 'Concert', 'Dhaka University', 'James. Tahsan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '250', 307, 1000, 5, '01717582230', 'dipu@demo.com', 1, 1),
(11, '2021-09-24 15:24:33', '2021-10-29', '19:25', 'admin@demo.com', '000011', 'Joy Bangla Concert', 'Concert', 'Army Stadium', 'All Bangla Deshi Bands', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Free', 0, 5000, 0, '01515623442', 'dipu@demo.com', 1, 1),
(12, '2021-09-24 16:34:27', '2021-10-29', '22:40', 'admin@demo.com', '000012', 'Hello One Two', 'Fashion', 'OTP', 'Jannat, Rujina', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1200', 1288, 130, 3, '01641377742', 'dipu@demo.com', 1, 1),
(13, '2021-09-24 16:58:16', '2021-11-07', '22:02', 'admin@demo.com', '000013', 'Final Year Alumini', 'Internationl Convocation', 'USA', 'Presedient', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '3000', 3135, 1200, 4, '01643455545', 'dip@gmail.com', 1, 1),
(14, '2021-09-24 16:59:44', '2021-11-28', '22:05', 'admin@demo.com', '000014', 'Five Gost', 'Internationl Convocation', 'New City', 'Black Mens', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1240', 1353, 4500, 0, '01643455545', 'dip@gmail.com', 1, 1),
(15, '2021-10-16 18:23:55', '2021-11-18', '00:24', 'admin@demo.com', '000015', 'Binnas', 'Natok', 'Chorki', 'Syam, Porimoni etc', 'Baazi is a 2021 Indian Bengali-language action thriller film directed by Anshuman Pratyush and produced by Jeet, Gopal Madnani and Amit Jumrani under the banner of Jeetz Filmworks Pvt. Ltd.', '310', 350, 1500, 0, '01717582230', 'dipu@demo.com', 1, 1),
(20, '2021-10-16 18:32:31', '2021-10-18', '00:33', 'admin@demo.com', '000020', 'Baazi', 'Natok', 'Chorki', 'Jeet, Mim, Mithun etc', 'Baazi is a 2021 Indian Bengali-language action thriller film directed by Anshuman Pratyush and produced by Jeet, Gopal Madnani and Amit Jumrani under the banner of Jeetz Filmworks Pvt. Ltd.', '400', 450, 1100, 0, '01515623442', 'dipu@demo.com', 1, 0),
(21, '2021-10-16 18:38:43', '2021-10-30', '00:43', 'admin@demo.com', '000021', 'Concert sales are reaching record levels, despite surging delta variant', 'Concert', 'Dustin Lynch performs on stage at Boots In The Park', 'Sarah Whitten', 'After a year with almost no live shows, Live Nation’s Ticketmaster just had one of its best months ever in North America, a sign that audiences are ready to venture outside the home for events even with the new Covid delta variant surging.', '2500', 3000, 1200, 0, '01706670708', 'con@gmail.com', 1, 0),
(22, '2021-10-16 18:46:45', '2021-10-29', '00:47', 'admin@demo.com', '000022', 'Bangladesh Fashion Week to kick off', 'Fashion', 'TRES Bangladesh Fashion Week', 'Sabrina , Fatma Ahmad', 'Spearheaded by the Fashion Design Council of Bangladesh (FDCB), the event hopes to promote slow fashion, sustainability, and highlight our nation’s storied textile heritage, as well as to increase regional collaboration with our neighbouring countries.', '300', 400, 300, 0, '01725036683', 'sumon@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `xsl` int(10) UNSIGNED NOT NULL,
  `ztime` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xqty` int(11) NOT NULL,
  `xcost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xflag` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`xsl`, `ztime`, `user_id`, `invoice`, `xcode`, `xname`, `xqty`, `xcost`, `xflag`) VALUES
(2, '2021-07-06 19:52:43', '1', '', '000001', 'Mohanogor Session Two', 5, '1000', 1),
(3, '2021-07-06 20:07:59', '2', '', '000001', 'Mohanogor Session Two', 7, '1000', 1),
(4, '2021-07-06 19:52:43', '1', '', '000002', 'Chorki', 3, '1200', 1),
(6, '2021-07-06 19:52:43', '1', '', '000003', 'Hello Two Three Boisak', 1, '1500', 1),
(7, '2021-07-14 22:30:59', '1', NULL, '000007', '71 Muktir Natok', 3, '800', 1),
(8, '2021-07-14 22:43:42', '1', NULL, '000003', 'Hello Two Three Boisak', 4, '1500', 1),
(9, '2021-07-14 22:44:23', '1', NULL, '000004', 'Habsi Natok', 7, '1000', 1),
(10, '2021-09-24 15:27:35', '1', NULL, '000011', 'Joy Bangla Concert', 5, 'Free', 1),
(12, '2021-10-15 19:00:37', '722', NULL, '000009', '7 March Concert', 5, '150', 1),
(13, '2021-10-16 16:28:39', '', NULL, '000013', 'Final Year Alumini', 1, '3000', 1),
(14, '2021-10-16 17:01:14', '1', NULL, '000012', 'Hello One Two', 2, '1200', 1),
(15, '2021-10-16 18:06:11', '1', NULL, '000003', 'Hello Two Three Boisak', 1, '1500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pausers`
--

CREATE TABLE `pausers` (
  `xsl` int(10) UNSIGNED NOT NULL,
  `ztime` timestamp NOT NULL DEFAULT current_timestamp(),
  `zutime` timestamp NULL DEFAULT NULL,
  `bizid` int(11) NOT NULL DEFAULT 100,
  `zemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zpassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zrole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zuserfullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zusermobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zuseradd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xflag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pausers`
--

INSERT INTO `pausers` (`xsl`, `ztime`, `zutime`, `bizid`, `zemail`, `zpassword`, `zrole`, `zuserfullname`, `zusermobile`, `zuseradd`, `xflag`) VALUES
(722, '2020-03-02 04:29:34', NULL, 100, 'admin@demo.com', '123456', 'ADMIN', 'Demo User', '01841923270', '', '1'),
(723, '2020-03-02 04:29:34', NULL, 100, 'nafis@demo.com', '123456', 'Software Development', 'Nafis Chonchol', '01641377742', '', '1'),
(727, '2021-06-25 13:24:53', NULL, 100, 'nafis@vshop.com', '123456', 'Software Development', 'Nafis Chonchol', '01742263748', '', '1'),
(728, '2021-06-27 16:43:14', NULL, 100, 'habib@babui.soft', '123456', 'Customer Service', 'Habib Kham', '01742263748', '', '1'),
(729, '2021-06-28 20:02:46', NULL, 100, 'tara20kkhatun@gmail.com', '123456', 'Graphic Designers', 'Nafis Chonchol', '01742263748', '', '1'),
(730, '2021-07-07 12:15:14', NULL, 100, 'sumon@oshud.os', '123456', 'Delivery Man', 'Sumon Uddin', '017422434', 'Dhan', '1'),
(731, '2021-07-07 12:16:00', NULL, 100, 'akib@oshud.os', '123456', 'Supervisor', 'Akib Khan', '01743434334', 'Narayngonj', '1'),
(732, '2021-07-07 12:16:00', NULL, 100, 'shamol@oshud.os', '123456', 'Supervisor', 'Shamol khan', '01743434334', 'Narayngonj', '1');

-- --------------------------------------------------------

--
-- Table structure for table `smsbox`
--

CREATE TABLE `smsbox` (
  `id` int(11) NOT NULL,
  `ztime` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `xname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `sms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zactive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smsbox`
--

INSERT INTO `smsbox` (`id`, `ztime`, `user_id`, `xname`, `sender`, `sms`, `zactive`) VALUES
(1, '2021-10-20 18:33:31', 7, 'Dipu', 'User', 'Hello Dipu', 1),
(2, '2021-10-20 18:33:31', 7, 'Admin', 'Admin', 'Hello Dipu', 1),
(3, '2021-10-20 18:36:31', 3, 'Jabir Islam', 'User', 'Hi', 1),
(4, '2021-10-20 18:42:20', 7, 'Dipu', 'User', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1),
(5, '2021-10-20 19:47:14', 7, 'Demo User', 'Admin', 'Hi, Dipu. \r\nHow are you?', 1),
(6, '2021-10-20 19:48:37', 7, 'Dipu', 'User', 'I am fine.', 1),
(7, '2021-10-20 19:50:55', 3, 'Demo User', 'Admin', 'Hello Jabir', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`xsl`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`xsl`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`xsl`);

--
-- Indexes for table `pausers`
--
ALTER TABLE `pausers`
  ADD PRIMARY KEY (`xsl`);

--
-- Indexes for table `smsbox`
--
ALTER TABLE `smsbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `xsl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `xsl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `xsl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pausers`
--
ALTER TABLE `pausers`
  MODIFY `xsl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=733;

--
-- AUTO_INCREMENT for table `smsbox`
--
ALTER TABLE `smsbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

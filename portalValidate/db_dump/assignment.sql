-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 08:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--
CREATE DATABASE IF NOT EXISTS `assignment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `assignment`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `coursename` text NOT NULL,
  `assignmentname` text NOT NULL,
  `file_link` text NOT NULL,
  `remarks` text,
  `uploaded_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uploaded_by` text NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `coursename`, `assignmentname`, `file_link`, `remarks`, `uploaded_at`, `uploaded_by`, `deleted_at`) VALUES
(1, 'test', 'test', 'docs/1302-1423-2.jpg', 'test', '2018-09-30 10:27:59', '1302-1423-2', NULL),
(2, 'test by user', 'user name', 'docs/12-95456-1.png', '', '2018-09-30 10:49:53', '12-95456-1', NULL),
(3, 'Advance Operating System', 'Meltdown and Spectre', 'docs/14-26746-2.docx', '', '2018-09-30 11:09:42', '14-26746-2', '2018-09-30 11:30:18'),
(4, '', '', 'docs/13-23101-1.docx', '', '2018-09-30 11:09:53', '13-23101-1', '2018-09-30 11:13:05'),
(5, '', '', 'docs/15-30311-2.doc', '', '2018-09-30 11:10:16', '15-30311-2', '2018-09-30 11:31:52'),
(6, 'AOS', 'meltdown and spectre', 'docs/16-31071-1.docx', '', '2018-09-30 11:10:39', '16-31071-1', '2018-09-30 11:34:17'),
(7, 'Advanced Operating System', 'Meltdown and Spectre', 'docs/16-32070-2.docx', 'Assignment 1', '2018-09-30 11:11:16', '16-32070-2', NULL),
(8, 'Advanced Operating system', 'Meltdown And Spectre', 'docs/15-30031-2.docx', '', '2018-09-30 11:12:23', '15-30031-2', NULL),
(9, 'AOS', 'Assignment 1', 'docs/14-25564-1.docx', '', '2018-09-30 11:12:30', '14-25564-1', NULL),
(10, 'Advance operating system', 'Meltdown and Spectre', 'docs/15-30311-2.doc', '', '2018-09-30 11:12:44', '15-30311-2', '2018-09-30 11:31:06'),
(11, 'Advance Operating System', 'Meltdown and Spectre', 'docs/13-23101-1.docx', '', '2018-09-30 11:12:53', '13-23101-1', '2018-09-30 11:31:49'),
(12, 'Advanced Operating System (AOS)', 'Assignment -01 (Spectre and Meltdown)', 'docs/15-29581-2.docx', '', '2018-09-30 11:13:05', '15-29581-2', '2018-09-30 11:26:24'),
(13, 'Advance Operating System', 'meltdown and spectre vulnerability', 'docs/15-30352-2.docx', '', '2018-09-30 11:13:56', '15-30352-2', '2018-09-30 11:26:55'),
(14, 'AOS', '', 'docs/16-31429-1.docx', '', '2018-09-30 11:14:43', '16-31429-1', NULL),
(15, 'Advanced Operating System', 'Meltdown and Spectre', 'docs/15-29498-2.docx', '', '2018-09-30 11:14:57', '15-29498-2', NULL),
(16, 'Advanced Operating System', 'Meltdown & Spectre', 'docs/15-29532-2.docx', '', '2018-09-30 11:16:00', '15-29532-2', NULL),
(17, 'Advance Operating System', 'Assignment', 'docs/16-32216-2.docx', '', '2018-09-30 11:16:44', '16-32216-2', '2018-09-30 11:28:02'),
(18, 'advance operating system', 'meltdown and spectre', 'docs/15-28591-1.docx', '', '2018-09-30 11:20:53', '15-28591-1', '2018-09-30 11:25:52'),
(19, 'test ', 'test', 'docs/1302-1423-2.png', '', '2018-09-30 11:27:20', '1302-1423-2', NULL),
(20, 'test', 'test', 'docs/1302-1423-2.JPG', '', '2018-09-30 11:27:57', '1302-1423-2', NULL),
(21, 'Advance Operating Systems', 'AOS meltdown and specter', 'docs/15-30437-3.docx', 'AOS meltdown and specter', '2018-09-30 11:28:11', '15-30437-3', NULL),
(22, 'Advance Operating System', 'Assignment 1', 'docs/16-32216-2.docx', '', '2018-09-30 11:28:32', '16-32216-2', NULL),
(23, 'AOS', 'Meltdown and Spectre', 'docs/15-30021-2.docx', '', '2018-09-30 11:28:33', '15-30021-2', NULL),
(24, 'Advanced Operating System (AOS)', 'Assignment -01 (Spectre and Meltdown)', 'docs/15-29581-2.docx', '', '2018-09-30 11:29:20', '15-29581-2', NULL),
(25, 'AOS', 'Meltdown & Spectre', 'docs/16-31429-1.   chowdhury md faisal  ID 16-31429-1docx', '', '2018-09-30 11:29:39', '16-31429-1', NULL),
(26, 'AOS', 'Assignment -1', 'docs/14-25564-1.docx', '', '2018-09-30 11:29:55', '14-25564-1', NULL),
(27, 'Advance Operating System', 'Meltdown and Spectre vulnerability', 'docs/15-30352-2.docx', '', '2018-09-30 11:30:10', '15-30352-2', NULL),
(28, 'advance operating system', 'meltdown and spectre', 'docs/15-28591-1.docx', '', '2018-09-30 11:30:31', '15-28591-1', NULL),
(29, 'AOS', 'Meltdown and Spectre', 'docs/14-26746-2.docx', '', '2018-09-30 11:31:12', '14-26746-2', '2018-09-30 11:31:50'),
(30, 'Advance Operating System', 'Meltdown and Spectre', 'docs/13-23101-1.docx', '', '2018-09-30 11:31:24', '13-23101-1', NULL),
(31, 'Advance operating system', 'Meltdown and Spectre', 'docs/15-30311-2.doc', '', '2018-09-30 11:31:46', '15-30311-2', NULL),
(32, 'AOS', 'Meltdown & Spectre', 'docs/16-31429-1.   chowdhury md faisal  ID 16-31429-1docx', '', '2018-09-30 11:32:13', '16-31429-1', NULL),
(33, 'Advance Operating System', 'Assignment 1', 'docs/13-25094-3.docx', '', '2018-09-30 11:32:29', '13-25094-3', NULL),
(34, 'AOS', 'Meltdown and Spectre', 'docs/14-26746-2.docx', '', '2018-09-30 11:33:07', '14-26746-2', NULL),
(35, 'AOS', 'Meltdown and Spectre', 'docs/16-31071-1.docx', '', '2018-09-30 11:33:38', '16-31071-1', NULL),
(36, 'Advanced Operating System', 'Spectre and Meltdown', 'docs/14-27848-3.docx', '', '2018-09-30 11:37:11', '14-27848-3', NULL),
(37, 'ADVANCED OPERATING SYSTEM', 'Meltdown and Spectre ', 'docs/16-31116-1.docx', '', '2018-09-30 11:50:42', '16-31116-1', NULL),
(38, 'Advanced Operating System', 'Assignment 1', 'docs/15-30207-2.docx', '', '2018-09-30 11:57:30', '15-30207-2', NULL),
(39, 'Advance operating system', 'meltdown and spectrum', 'docs/15-29380-1.docx', '', '2018-09-30 11:57:51', '15-29380-1', NULL),
(40, 'Advanced Operating System', 'Meltdown and Spectre', 'docs/14-27029-2.docx', '', '2018-09-30 12:44:28', '14-27029-2', NULL),
(41, 'Advanced Operating System', 'Meltdown and Spectre', 'docs/16-31939-1.txt', '', '2018-09-30 12:52:46', '16-31939-1', NULL),
(42, 'AOS', 'Meltdown and Spectre', 'docs/16-31109-1.docx', '', '2018-09-30 12:59:19', '16-31109-1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `aiubid` text NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '2',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `aiubid`, `fullname`, `email`, `phone`, `password`, `type`, `created_at`) VALUES
(2, '1302-1423-2', 'Saef', 'saef@aiub.edu', '01723456106', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2018-09-30 09:23:56'),
(3, '12-95456-1', 'Saef Ullah', 'saef@aiub.edu', 'nope', '81dc9bdb52d04dc20036dbd8313ed055', 2, '2018-09-30 10:49:05'),
(4, '14-26746-2', 'Neer, Muktasid Islam', 'neer_0008@hotmail.com', '+8801675959615', '6751880434264bc755820dd2ff6b871a', 2, '2018-09-30 11:08:11'),
(5, '16-31071-1', 'Sohel Imran', 'raajkumar4200@gmail.com', '01872539902', 'b4af97c73d8b92291daf7c0753ca7b50', 2, '2018-09-30 11:08:26'),
(6, '14-27848-3', 'MD. TANJILUR RAHMAN', 'md.tanjilurrahmanorko@gmail.com', '01755505446', '9f0c60b87f9358e63189640b8b0482c7', 2, '2018-09-30 11:08:43'),
(7, '16-32070-2', 'ISLAM, MD. NAZMUL', 'nazmuul420@gmail.com', '+8801768883244', '8dc99f4a2174562d5a9e9e648d6b9ada', 2, '2018-09-30 11:08:51'),
(8, '13-23101-1', 'Dipu,Md.Saiful Islam', 'mr.d.sarker@gmail.com', '01675707621', '6c4283471ace6b4af590c180bd13b1bf', 2, '2018-09-30 11:08:58'),
(9, '15-29380-1', 'Daud uddin ahmed', '16nayem@gmail.com', '01909686624', 'fc560adb690f81c6d35bc7ea050e088a', 2, '2018-09-30 11:09:02'),
(10, '15-29532-2', 'Momtaz Begum', 'momtaz.begum09@gmail.com', '01771077702', '67605e1e18becd09fb839c9addfcf2af', 2, '2018-09-30 11:09:02'),
(11, '13-25094-3', 'Nurul Huda Chowdhury', 'shatil.mircl@gmail.com', '01672234371', '7277f902d5edc0aff1ecc2068c1841db', 2, '2018-09-30 11:09:05'),
(12, '15-29532-2', 'Momtaz Begum', 'momtaz.begum09@gmail.com', '01771077702', '67605e1e18becd09fb839c9addfcf2af', 2, '2018-09-30 11:09:09'),
(13, '15-30352-2', 'Faisal Ahamed', 'faisal.hye@gmail.com', '01790220088', '62026aaed5419a1ceaa229bf6886443e', 2, '2018-09-30 11:09:11'),
(14, '15-30311-2', 'shuvrata das shuvo', 'shuvratadas@gmail.com', '01625426189', '9c129d769c95283b9897be229a96a54c', 2, '2018-09-30 11:09:11'),
(15, '16-31939-1', 'Raisa Kamal', 'r.raisakamal@gmail.com', '01623038919', '3258005c1fc5ea04bb9468c310c65c43', 2, '2018-09-30 11:09:21'),
(16, '15-29581-2', 'Zubaer Ahmed Sakib', 'zsakib65@yahoo.com', '01844061295', '3beb6e1603689bc9da81685857c1ec3c', 2, '2018-09-30 11:09:35'),
(17, '15-30031-2', 'Latif Kabir', 'mail2arabi@gmail.com', '01944009966', '5a4d4809a5f4b80d41560122596964f4', 2, '2018-09-30 11:09:40'),
(18, '15-29498-2', 'Mehzabin,Raiya', 'raiyamehzabin@gmail.com', '01755701185', '63a83abcbb417390f52a4c9201fd393a', 2, '2018-09-30 11:10:08'),
(19, '14-25564-1', 'Rafian , Jaber Al', 'jaberalrafian@gmail.com', '01732323429', '9c7245dc4103e3d7fc5687bd0800244e', 2, '2018-09-30 11:10:35'),
(20, '15-30437-3', 'Akibur Rahman Akib', 'akibur_rahman@hotmail.com', '01754103799', 'f80c3b0e630b5d8b38ce58dc550374c4', 2, '2018-09-30 11:10:38'),
(21, '14-26557-2', 'Rajon,Md.Tarek Mahmud', 'tareqmahmudraj@gmail.com', '01688751753', '74b98cba5f9dd6ecbbe58216a885b986', 2, '2018-09-30 11:10:42'),
(22, '15-28591-1', 'zia us samad', 'ziaussamadshourov@gmail.com', '01794377320', '0881ef41c90efd0dc977cd7327db9200', 2, '2018-09-30 11:10:50'),
(23, '15-29532-2', 'Momtaz Begum', 'momtaz.begum09@gmail.com', '01771077702', '67605e1e18becd09fb839c9addfcf2af', 2, '2018-09-30 11:11:13'),
(24, '13-24663-2', 'Roman Abdullah Al', 'arroman276@gmail.com', '01726686368', '172186cbd636f16cf0458311b0d2ec0e', 2, '2018-09-30 11:11:57'),
(25, '16-31429-1', 'Chowdhury Md Faisal', 'fahmanchy@gmail.com', '01775560754', '4c12a3672d2bfdb059fcd2cdf910565e', 2, '2018-09-30 11:12:22'),
(26, '16-31826-1', 'faria hassan', 'fariahassan15@gmail.com', '01631799932', '5e9b018d95402ad06bada69d71c67c4d', 2, '2018-09-30 11:12:24'),
(27, '15-29532-2', 'Momtaz Begum', 'momtaz.begum09@gmail.com', '01771077702', '81dc9bdb52d04dc20036dbd8313ed055', 2, '2018-09-30 11:12:33'),
(28, '16-32216-2', 'Abran-Ul-Huda Talukder', 'abranxperia@gmail.com', '01626014901', 'eaa44b274051635064e6e7ceb6f2c532', 2, '2018-09-30 11:13:21'),
(29, '16-31429-1', 'Chowdhury Md Faisal', 'fahmanchy@gmail.com', '01775560754', 'd553d148479a268914cecb77b2b88e6a', 2, '2018-09-30 11:13:25'),
(30, '14-27132-2', 'Tauhidur Rahman', 'tauhidurrahman.sabbir@gmail.com', '01775372763', '88d1645a78c4c1ea6bf19e7d80ffcd69', 2, '2018-09-30 11:23:27'),
(31, '15-30021-2', 'RAHMAN ASHIQUR ', 'ashiqur.imon@gmail.com', '01680177104', '371c313f33e28a92821dd81d20346488', 2, '2018-09-30 11:27:40'),
(32, '15-29837-2', 'Rafayaat Rushafi Alam', 'rrafayaat@gmail.com', '01984597802', '7e81f2d5da2989edee86db3d401337ed', 2, '2018-09-30 11:34:24'),
(33, '15-30207-2', 'Joyan Barai', 'baraijoyan@gmail.com', '01765422779', 'f436395f2df6b8c7ca3dc953303b1158', 2, '2018-09-30 11:34:40'),
(34, '14-27029-2', 'Tanvir Ul Islam', 'tanvirulislam426@gmail.com', '01829154254', 'fd4747d2df7cab99b740904a2d63b6fa', 2, '2018-09-30 11:37:45'),
(35, '16-31116-1', 'gias,mohiuddin', 'fahimrahaman420.ff@gmail.com', '01683848908', 'fef529a73dca9ebbd11e68b2c4b00e9f', 2, '2018-09-30 11:40:05'),
(36, '14-27802-3', 'Arifur Rahman', 'arifurrahmanromi@gmail.com', '01724923087', 'd81b1e9204665a0e7c47d8bdfe6d1cc7', 2, '2018-09-30 11:40:11'),
(37, '15-30527-3', 'Mujibur Rahman', 'mujib9999955555@gmail.com', '01672649155', '4af0a022914453fc287840bf51008225', 2, '2018-09-30 11:40:32'),
(38, '15-30507-3', 'Mathew Shawon Rodrick', 'mathewrodrick94@hotmail.com', '01823666911', 'e8216949ed7b905b1df59319f21796e9', 2, '2018-09-30 11:48:11'),
(39, '15-30776-3', 'Arman Hossain', 'arman420301@gmail.com', '+8801777130631', '33502d23934b242d2a5581b838daced2', 2, '2018-09-30 11:48:40'),
(40, '16-31109-1', 'bhuiya,md ullash', 'mdullash460@gmail.com', '01837397448', '4705ae0ed2d1246d948f9c3b4097ea5a', 2, '2018-09-30 12:58:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 05:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `8amcipro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `created_at`, `password`) VALUES
(1, '', 'sss', '2019-12-29 03:51:27', 'sss'),
(2, 'shan', 'shan', '2019-12-29 03:56:09', 'shan'),
(3, 'shan', 'shan12', '2019-12-29 03:57:07', '111'),
(4, 'shahbaz', 'shahbaz', '2020-01-12 03:12:04', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(2555) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `author`, `title`, `description`, `image`, `created_at`) VALUES
(3, 'shahbaz', 'shan 111', 'aaaaaaaa Habitasse facilisi aspernatur interdum tempora explicabo, pede, laoreet, delectus, ridiculus bibendum consequatur, ante nascetur, montes, est, senectus elit diamlorem, reprehenderit a aliquip aliquid eget, tortor, pellentesque taciti. Purus asper', '5e1943e7e6973maxresdefault.jpg', '2020-01-11 03:41:27'),
(5, 'shan', 'shan 111', 'asdfrefref', '5e1a8e6c80552images.jpg', '2020-01-12 03:11:40'),
(6, 'shahbaz', 't metus conubia. Officia est dignissim ab nemo optio. Ab velit! Ipsa enim bibendum matti', 'abo voluptatibus harum labore augue quis, iusto mollitia natoque consequat? Proident ullam a praesentium, doloribus, deleniti, dolor quisquam lectus per consectetuer orci dolores distinctio veritatis cumque, hic wisi aenean proin nisi praesent, posuere na', '5e1a8f460d7b9Untitled.png', '2020-01-12 03:15:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

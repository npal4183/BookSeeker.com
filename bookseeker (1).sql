-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 07:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookseeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `nb_id` int(11) NOT NULL,
  `quantity` tinytext NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `uid`, `nb_id`, `quantity`, `seller_id`) VALUES
(54, 18, 32, '1', 0),
(55, 18, 33, '1', 0),
(56, 18, 34, '1', 0),
(57, 18, 36, '1', 0),
(58, 18, 37, '1', 0),
(59, 18, 38, '1', 0),
(60, 18, 39, '1', 0),
(61, 18, 40, '1', 0),
(66, 15, 31, '1', 0),
(67, 15, 32, '1', 0),
(72, 16, 33, '1', 0),
(73, 16, 108, '1', 0),
(74, 16, 81, '1', 0),
(75, 16, 94, '1', 0),
(76, 16, 43, '1', 0),
(77, 16, 105, '1', 0),
(82, 19, 115, '1', 19),
(83, 19, 114, '1', 19),
(84, 19, 112, '1', 19),
(85, 19, 111, '1', 19),
(86, 19, 110, '1', 19);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(9, 'University Books'),
(10, 'Fiction Books'),
(11, 'Editor\'s Corner'),
(12, 'School Textbooks'),
(13, 'Children\'s Books'),
(14, 'Exam Central'),
(15, 'Textbooks'),
(16, 'Indian Language Books'),
(17, 'Computer Science'),
(18, 'Management'),
(19, 'Art or Humanity'),
(20, 'Science'),
(21, 'Commerce'),
(22, 'Novel\'s'),
(23, 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `login_system`
--

CREATE TABLE `login_system` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` longtext NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `seller` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_system`
--

INSERT INTO `login_system` (`uid`, `uname`, `pwd`, `fname`, `lname`, `phone`, `email`, `address`, `seller`) VALUES
(15, 'manish', '$2y$10$sNun2xqRIwSLugVM1eeiUeIygTN2xlvFFmvsTv1jIolIw6tCYQ3O6', 'manish', 'gupta', '7503503953', 'tttt@ggg.cc', 'plot no. 26, pali peer colony, pali(13)', 'Yes'),
(16, 'naresh', '$2y$10$caozMsD.axQmehnfoMiWN.RJIk0B3swa3SM63ZrxBNp4dtJfaQd0C', 'Naresh', 'kumar', '7503503953', 'npal4183@gmail.com', 'faridabad', 'No'),
(17, 'nareshkumar', '$2y$10$cbxW4OkvS0I1QjSMCIx3E.f8Gq/XFFZBjqIC2vfrBtCyB8V82yL/e', 'Naresh', 'kumar', '7503503953', 'npal4183@gmail.com', 'plot no. 26, pali peer colony, pali(13)', 'Yes'),
(18, 'nareshpal', '?', 'Naresh', 'kumar', '7503503953', 'npal4183@gmail.com', 'plot no. 26, pali peer colony, pali(13)', 'No'),
(19, 'cool', '$2y$10$z6zplciISj.rziB/mMuBN.y0xGLYAJAObX06BVTZBFJYM8bvRATm6', 'cool', 'cool', '24356789876', 'cool@cool.com', 'djvjsifujij0d9isd0a9', 'Yes'),
(20, 'ignou', '$2y$10$Dgr/Zcj9zGU9SS6w0Zo79Op3jYZFGb5uIqayVJIJqRL8Tgz4O5Ohy', 'ignou', 'bca', '7503503953', 'ignou@gmail.com', 'xf,jvsijsi,focsij', 'Yes'),
(21, 'Amity', '$2y$10$NSODwcWRfXwjAbSndyQm6O070BMlT1dU1IG7trZ.LWxuxqBeRAReS', 'amity', 'international', '9876543210', 'npal4183@gmail.com', 'saket', 'No'),
(22, 'mohan', '$2y$10$fQlR3g.tedMSt7L5MW7BBevD/EbQvT0UBASVcmgWRNyHoxOVC7NHK', 'mohan', 'state', '1122334455', 'mohan@ignou.in', 'mhoan corparation', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `new_book_ad`
--

CREATE TABLE `new_book_ad` (
  `nb_id` int(9) NOT NULL,
  `nb_title` tinytext NOT NULL,
  `nb_price` tinytext NOT NULL,
  `stock` varchar(4) DEFAULT NULL,
  `nb_details` longtext NOT NULL,
  `author` tinytext,
  `nb_img1` tinytext,
  `nb_img2` tinytext,
  `nb_img3` tinytext,
  `nb_img4` tinytext,
  `nb_img5` tinytext,
  `cat_id` int(11) DEFAULT '0',
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_book_ad`
--

INSERT INTO `new_book_ad` (`nb_id`, `nb_title`, `nb_price`, `stock`, `nb_details`, `author`, `nb_img1`, `nb_img2`, `nb_img3`, `nb_img4`, `nb_img5`, `cat_id`, `uid`) VALUES
(30, 'bcs51', '100', '1', 'ignou 5th semester book', 'ignou', 'upload_image/nareshpal/1.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 9, 15),
(31, 'bcs51', '120', '2', 'ignou 3rd sem book', 'ignou', 'upload_image/nareshpal/2.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 9, 15),
(32, 'bcsl13', '150', '1', 'ignou first semester book', 'ignou', 'upload_image/nareshpal/3.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 9, 15),
(33, 'mcs21', '45', '2', 'ignou first semester book', 'ignou', 'upload_image/nareshpal/3.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 10, 15),
(34, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 10, 15),
(36, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 10, 15),
(37, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 11, 15),
(38, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 11, 15),
(39, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 11, 15),
(40, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 15),
(41, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 16),
(42, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 16),
(43, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 13, 16),
(44, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 13, 16),
(45, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 13, 16),
(46, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 14, 16),
(47, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 14, 16),
(48, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 14, 16),
(49, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 15, 16),
(50, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 15, 16),
(51, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 15, 17),
(52, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 16, 17),
(53, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 16, 17),
(54, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 16, 17),
(55, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 17, 17),
(56, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 17, 17),
(57, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 17, 17),
(58, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 18, 17),
(59, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 18, 17),
(60, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 18, 17),
(61, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 19, 18),
(62, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 19, 18),
(63, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 19, 18),
(64, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 20, 18),
(65, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 20, 18),
(66, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 20, 18),
(67, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 21, 18),
(68, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 21, 18),
(69, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 21, 18),
(70, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 22, 18),
(75, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 23, 19),
(76, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 23, 19),
(77, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 22, 19),
(78, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 21, 19),
(79, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 19, 19),
(80, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 18, 19),
(81, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 17, 20),
(82, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 16, 20),
(83, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 17, 20),
(84, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 16, 20),
(85, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 15, 20),
(86, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 14, 20),
(87, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 13, 20),
(88, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 20),
(89, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 20),
(90, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 20),
(91, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 12, 19),
(92, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 20, 19),
(93, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 11, 18),
(94, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 11, 16),
(95, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 11, 16),
(96, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 23, 17),
(97, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 19, 17),
(98, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 10, 17),
(99, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 10, 19),
(100, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 10, 19),
(101, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 22, 19),
(102, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 18, 15),
(103, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 9, 15),
(105, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 9, 15),
(106, 'rd sharma', '450', '2', 'accontancy book for class 12th', 'rd sharma', 'upload_image/nareshpal/7.jpg', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 21, 15),
(107, 'Java', '250', '10', 'A complete java refrence for java.', 'Oracle', 'upload_image/cool/IMG-20180328-WA0012.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 17, 15),
(108, 'new s latter', '344', '23', 'information', 'PyCham', 'upload_image/cool/image.jpg', 'upload_image/cool/image.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 15),
(109, 'Rich Dad Poor Dad', '329', '100', 'What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!', 'Robert T. Kiyosaki', 'upload_image/cool/81bsw6fnUiL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 19),
(110, 'Biography of a Stock', '337', '100', 'Guide to stock investing', 'Manoj Arora', 'upload_image/cool/814B63zuSYL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 19),
(111, 'C++ (Old Edition)', '235', '100', 'Ideal book to learn Programming', ' Balagurusamy', 'upload_image/cool/71rNgxcJMqL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 19),
(112, 'Java for Dummies', '520', '100', 'Beginning Programming', 'Barry A. Burd', 'upload_image/cool/71Iv0Hq6XxL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 19),
(114, 'HTML 5', '610', '100', 'Covers CSS3, JavaScript', ' DT Editorial Services', 'upload_image/cool/514faGhNXxL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 19),
(115, 'Android Programming', '738', '100', 'Pushing the Limits', 'Erik Hellman', 'upload_image/cool/517Wj3f3h1L.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `old_book_ad`
--

CREATE TABLE `old_book_ad` (
  `ob_id` int(9) NOT NULL,
  `ob_title` tinytext NOT NULL,
  `ob_price` tinytext NOT NULL,
  `ob_details` longtext,
  `ob_description` longtext NOT NULL,
  `author` tinytext,
  `ob_img1` tinytext,
  `ob_img2` tinytext,
  `ob_img3` tinytext,
  `ob_img4` tinytext,
  `ob_img5` tinytext,
  `cat_id` tinytext NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_book_ad`
--

INSERT INTO `old_book_ad` (`ob_id`, `ob_title`, `ob_price`, `ob_details`, `ob_description`, `author`, `ob_img1`, `ob_img2`, `ob_img3`, `ob_img4`, `ob_img5`, `cat_id`, `uid`) VALUES
(2, 'Python', '700', 'Complete Reference for Python ', 'It is best book to learn python for beginner. This book is only 6 month old.', 'PyCham', 'upload_image/nareshpal/P10800.JPG', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', 'upload_image/nareshpal/', '', 19),
(3, 'Python', '500', 'Best book for python', 'This book has all stuff to make you beginner to expert.  ', 'england pro', 'upload_image/naresh/murachs-python-programming.jpg', 'upload_image/naresh/', 'upload_image/naresh/', 'upload_image/naresh/', 'upload_image/naresh/', 'Computer Science', 16),
(4, 'Mathematics', '498', 'Class 10 by R D Sharma', 'Mathematics for Class 10 by R D Sharma (2017-2018 Session)', 'R.D. Sharma', 'upload_image/cool/A16jNAw9OTL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'School Textbooks', 19),
(5, 'Brain in a Jar', '199', 'world of critical situations', 'Brain in a Jar tells the gut-wrenching yet heart-warming tale of a pioneer in the fight against Alzheimer\'s disease. Dr. Beauregard Lee Bercaw, an American neurologist and world traveller, believed from a very young age that Alzheimer\'s was coming for him just as it had for his father. In an attempt to outsmart and outrun the disease', 'Nancy Stearns Bercaw', 'upload_image/cool/81xFbByFDpL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'Fiction Books', 19),
(6, 'Subconscious Mind', '75', 'Unlock Your Master Key', 'This remarkable book by Dr. Joseph Murphy, one of the pioneering voices of affirmative thinking, will unlock for you the truly staggering powers of your subconscious mind. Combining time-honored spiritual wisdom with cutting edge scientific research, Dr. Murphy explains how the subconscious mind influences every single thing that you do and how, by understanding it and learning to control its incredible force, you can improve the quality of your daily life.', 'Joseph Murphy', 'upload_image/cool/8170Bj+bSOL.jpg', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'upload_image/cool/', 'Art or Humanity', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tax_id` tinytext NOT NULL,
  `p_status` tinytext NOT NULL,
  `amount` tinytext NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `book_id`, `qty`, `tax_id`, `p_status`, `amount`, `seller_id`) VALUES
(1, 16, 90, 1, 'ufriuhriuhrg', 'ORDER DISPACHED', '1289', 15),
(2, 16, 33, 1, 'dkjzncgfioacesiu', 'order placeed', '2189', 15),
(3, 16, 108, 1, 'dkjzncgfioacesiu', 'order placeed', '2189', 15),
(4, 16, 81, 1, 'dkjzncgfioacesiu', 'order placeed', '2189', 17),
(5, 16, 94, 1, 'dkjzncgfioacesiu', 'order placeed', '2189', 17),
(6, 16, 43, 1, 'dkjzncgfioacesiu', 'DELIVERY COMPLETE', '2189', 19),
(7, 16, 105, 1, 'dkjzncgfioacesiu', 'OUT FOR DELIVERY', '2189', 19),
(8, 16, 91, 1, 'hdvjhsdgfkjsdha', 'order placeed', '1000', 20),
(9, 16, 89, 1, 'sduxisusnoiuhsdno7ywa', 'order placeed', '450', 20),
(10, 19, 76, 1, 'sduxisusnoiuhsdno7ywa', 'OUT FOR DELIVERY', '450', 19);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pub_id` int(11) NOT NULL,
  `pub_title` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_title`) VALUES
(1, 'Jaico Publishing House'),
(2, 'Westland Publications'),
(3, 'Penguin Random House India'),
(4, 'Roli Books'),
(5, 'Rupa Publications'),
(6, 'Hachette India'),
(7, 'Aleph Book Company'),
(8, 'HarperCollins Publishers India'),
(9, 'Pan Macmillan India'),
(10, 'Scholastic India'),
(11, '24by7Publishing'),
(12, 'Pothi'),
(13, 'Cinnamon Teal Publishing'),
(14, 'Become Shakespeare'),
(15, 'Leadstart Publishing'),
(16, 'Fingerprint Publishing'),
(17, 'Petals Publishers'),
(18, 'Srishti Publishers'),
(19, 'APK Publishers'),
(20, 'Pustak Mahal'),
(21, 'S. Chand Publishing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login_system`
--
ALTER TABLE `login_system`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `new_book_ad`
--
ALTER TABLE `new_book_ad`
  ADD PRIMARY KEY (`nb_id`);

--
-- Indexes for table `old_book_ad`
--
ALTER TABLE `old_book_ad`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login_system`
--
ALTER TABLE `login_system`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `new_book_ad`
--
ALTER TABLE `new_book_ad`
  MODIFY `nb_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `old_book_ad`
--
ALTER TABLE `old_book_ad`
  MODIFY `ob_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

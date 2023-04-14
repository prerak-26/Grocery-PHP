-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 03:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`product_id`, `product_name`) VALUES
(1, 'Oreo Double Cream | 450g'),
(2, 'Oreo Double Cream | 900g'),
(3, 'kitkat');

-- --------------------------------------------------------

--
-- Table structure for table `experienceimage`
--

CREATE TABLE `experienceimage` (
  `experience_imgpath` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experienceimage`
--

INSERT INTO `experienceimage` (`experience_imgpath`, `class_name`) VALUES
('https://i.postimg.cc/HkML5ghf/experience1.jpg', 'experience__img-one'),
('https://i.postimg.cc/x1kSN3c8/experience2.jpg', 'experience__img-two');

-- --------------------------------------------------------

--
-- Table structure for table `experienceinformation`
--

CREATE TABLE `experienceinformation` (
  `experience_number` varchar(255) NOT NULL,
  `experience_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experienceinformation`
--

INSERT INTO `experienceinformation` (`experience_number`, `experience_description`) VALUES
('20', 'Years <br> Experience'),
('10M+', 'Valuable <br> Customers'),
('100+', 'Types of <br> Products');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`image`) VALUES
('https://i.postimg.cc/Nfx21y7T/home1.jpg'),
('https://i.postimg.cc/kXLzv4JJ/home2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offercard`
--

CREATE TABLE `offercard` (
  `offer_id` int(11) NOT NULL,
  `offerimgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offercard`
--

INSERT INTO `offercard` (`offer_id`, `offerimgpath`) VALUES
(1, 'https://i.postimg.cc/4xw8w7x3/half.jpg'),
(2, 'https://i.postimg.cc/JnHP1pcy/black.jpg'),
(3, 'https://i.postimg.cc/sgfmBj4C/25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `offer_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`offer_id`, `text`) VALUES
(1, 'abc'),
(1, 'def'),
(1, 'ghi'),
(2, 'jkl'),
(3, 'mno'),
(3, 'pqr');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`icon`, `title`, `subtitle`) VALUES
('ri-emotion-laugh-line', 'Test', 'Sweetness & Sourness!!'),
('ri-battery-charge-line', 'Nutritional Value', 'Source of Vitamin C'),
('ri-sun-line', 'Texture', 'Juiciness / Fibrousness'),
('ri-timer-flash-line', 'Special offer', '25% off <br> Locked upto 31 Dec.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `offercard`
--
ALTER TABLE `offercard`
  ADD PRIMARY KEY (`offer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

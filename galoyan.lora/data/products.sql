-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2022 at 09:25 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnm_galoyan_lora`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `thumbnail` varchar(256) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `images` varchar(5000) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date_modify` date NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `thumbnail`, `description`, `images`, `quantity`, `date_modify`, `date_create`) VALUES
(2, 'Imp Terrarium', 'Fantasy', 150, 'https://images.pexels.com/photos/4650141/pexels-photo-4650141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Little character inside terrarium.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(3, 'Forest Terrarium', 'Landscape', 100, 'https://images.pexels.com/photos/1466434/pexels-photo-1466434.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Fantasy forest in a glass!', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(4, 'Mountain Terrarium', 'Landscape', 100, 'https://images.pexels.com/photos/8850948/pexels-photo-8850948.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Mountainous terrain in a glass terrarium.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(5, 'Flower Terrarium', 'Floral', 100, 'https://images.pexels.com/photos/11660908/pexels-photo-11660908.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Flowers in a fantasy terrarium.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(6, 'Succulent Terrarium', 'Floral', 100, 'https://images.pexels.com/photos/4507719/pexels-photo-4507719.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Succulent florals in terrarium.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(8, 'Red Terrarium', 'Fantasy', 50, 'https://images.pexels.com/photos/1400375/pexels-photo-1400375.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Features a red flower or plant!', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(9, 'Blue Terrarium', 'Fantasy', 50, 'https://images.pexels.com/photos/4752007/pexels-photo-4752007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Features a blue flower or plant!', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(10, 'Simple Terrarium', 'Fantasy', 150, 'https://images.pexels.com/photos/5830830/pexels-photo-5830830.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Minimalistic terrarium to put in library.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(11, 'Castle Terrarium', 'Fantasy', 150, 'https://images.unsplash.com/photo-1608718117453-659477c7a1a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80', 'Terrarium featuring a tiny castle.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(12, 'Tree Terrarium', 'Landscape', 100, 'https://images.pexels.com/photos/4650144/pexels-photo-4650144.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Terrarium featuring trees.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(13, 'Vine Terrarium', 'Landscape', 100, 'https://images.pexels.com/photos/4752005/pexels-photo-4752005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Terrarium with lots of vines on the inside.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '0000-00-00', '0000-00-00'),
(14, 'Dragon Terrarium', NULL, 200, 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg', 'Dragon character inside a fantasy terrarium.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '2022-05-17', '2022-05-06'),
(15, 'Dragon Terrarium', NULL, 200, 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg', 'Dragon character inside a fantasy terrarium.', 'https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 0, '2022-05-26', '2022-05-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

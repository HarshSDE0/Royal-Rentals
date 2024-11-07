-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 05:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `login_email` varchar(50) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `charge` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `from_date` varchar(50) NOT NULL,
  `to_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`login_email`, `booking_id`, `car_name`, `brand_name`, `charge`, `first_name`, `last_name`, `email`, `phone`, `state_name`, `city_name`, `user_address`, `from_date`, `to_date`) VALUES
('admin@gmail.com', '122032', 'Bugatti Veyron', 'BUGATTI', '8500', 'charan', '', '', '', '', '', '', '2024-03-26', '2024-03-31'),
('', '159450', 'Huracan Evo Spyder', 'LAMBORGHINI', '8000', 'vinit', 'tyjujty', 'abcdef@gmail.com', '', '', '', '', '2024-03-28', '2024-03-30'),
('admin@gmail.com', '214004', 'LP750-4 Aventador SV Coupe', 'LAMBORGHINI', '9000', 'charan', 'charan', 'abcdef@gmail.com', '45345', 'hbdfghhgh', '', '', '2024-03-27', '2024-03-30'),
('abcdef@gmail.com', '477826', 'Aventador SVJ Roadster', 'LAMBORGHINI', '9000', 'r', 'uyyutu', 'abcdef@gmail.com', '785676', 'tghrt', 'yhtyujttyu', 'tujtujt', '2024-03-18', '2024-03-25'),
('tanusha@gmail.com', '502400', 'Aventador SVJ Roadster', 'LAMBORGHINI', '9000', 'Tanusha', 'Naik', 'tanusha@gmail.com', '1234567890', 'karnataka', 'bhatkal', 'kalbandi belke uk bhatkal 581320', '2024-03-18', '2024-03-26'),
('admin@gmail.com', '520094', 'Continental GT Coupe', 'BENTLEY', '6000', 'kjhkjhjfr', 'jhfkjhkjs', 'abcdef@gmail.com', '545615165', 'jhghjasghj', 'jhjhj', '', '2024-03-19', '2024-03-26'),
('admin@gmail.com', '539681', 'M3 Competition', 'BMW', '7000', 'rtyryr', '', '', '', '', '', '', '2024-03-19', '2024-03-27'),
('admin@gmail.com', '558232', '720 S', 'MCLAREN', '8500', 'charan', '', '', '', '', '', '', '2024-03-25', '2024-03-26'),
('admin@gmail.com', '603307', 'GT3 RS', 'PORSCHE', '11000', 'charan', '', '', '', '', '', '', '2024-03-24', '2024-03-30'),
('', '638551', 'RSQ8 Vorsprung', 'AUDI', '4500', 'charan', 'tgyhr', 'charan@gmail.com', '', '', '', '', '2024-03-28', '2024-03-29'),
('harishk1@gmail.com', '644192', 'Aventador SVJ Roadster', 'LAMBORGHINI', '9000', 'hari', 'k', 'hari1@gmail.com', '9985858681', 'karnataka', 'bengluru', 'huhiuiggfh', '2024-03-15', '2024-03-22'),
('admin@gmail.com', '686267', 'Dawn', 'ROLLS ROYCE', '10000', 'charan', '', 'abcdef@gmail.com', '', '', '', '', '2024-03-24', '2024-03-27'),
('admin@gmail.com', '686875', 'F8 Tributo Coupe', 'FERRARI', '8000', 'hshuietr', '', '', '', '', '', '', '2024-03-19', '2024-03-28'),
('admin@gmail.com', '706885', 'Wraith Black Badge', 'ROLLS ROYCE', '10000', 'charan', '', '', '', '', '', '', '2024-03-24', '2024-03-31'),
('admin@gmail.com', '711137', '720 S', 'MCLAREN', '8500', 'charan', '', '', '', '', '', '', '2024-03-24', '2024-03-31'),
('admin@gmail.com', '728583', 'Matte Black 720 S', 'MCLAREN', '9000', 'charan', '', '', '', '', '', '', '2024-03-24', '2024-03-31'),
('admin@gmail.com', '836298', 'GT3 RS', 'PORSCHE', '11000', 'charan', 'charan', 'abcdef@gmail.com', '', '', '', '', '2024-03-25', '2024-03-29'),
('admin@gmail.com', '913337', 'Continental GTC', 'BENTLEY', '6000', 'trhyr', '', '', '', '', '', '', '2024-03-19', '2024-03-26'),
('abcdef@gmail.com', '931368', 'Urus Green', 'LAMBORGHINI', '6000', 'uyi', 'tjutyju', 'abcdef@gmail.com', '7653376563', 'utjntuj', 'htyjtujhty', 'ujtyujt', '2024-03-19', '2024-06-19'),
('charan@gmail.com', '989002', '488 GTB Spyder', 'FERRARI', '9000', 'charan', 'charan', 'abcdef@gmail.com', '1156262', 'karnataka', 'bengluru', 'egggg', '2024-03-24', '2024-03-26'),
('admin@gmail.com', '996077', 'F8 Tributo Coupe', 'FERRARI', '8000', 'charan', 'ghhjdgjhfs', '', '', '', '', '', '2024-03-26', '2024-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_logo`) VALUES
(1, 'audi', './images/logos/audi.png'),
(2, 'bentley', './images/logos/bentley.png'),
(3, 'bmw', './images/logos/bmw.png'),
(4, 'lamborghini', './images/logos/lamborghini.png'),
(5, 'bugatti', './images/logos/bugatti.png'),
(6, 'ferrari', './images/logos/ferrari.png'),
(7, 'mclaren', './images/logos/mclaren.png'),
(8, 'rolls royce', './images/logos/rollsroyce.png'),
(9, 'porsche', './images/logos/porsche.png');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `charge` varchar(50) NOT NULL,
  `acceleration` varchar(50) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `speed` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `seats` varchar(50) NOT NULL,
  `suitcase` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `bname`, `model`, `charge`, `acceleration`, `engine`, `speed`, `transmission`, `seats`, `suitcase`, `image`, `image1`, `image2`, `image3`) VALUES
(1, 'AUDI', 'RS6 Avant', '5000', '3.5', '4.0', '190', 'automatic', '5', '1 large & 1small', 'Audi-RS6-Avant-2.jpg', 'Audi-RS6-Avant-3.jpg', 'Audi-RS6-Avant-1.jpg', 'Audi-RS6-Avant-4.jpg'),
(2, 'AUDI', 'RSQ8 Vorsprung', '4500', '3.6', '4.0', '155', 'Automatic', '5', '1 large & 1small', 'audi-2.jpg', 'audi-11-1.jpg', 'audi-rs-3.jpg', 'audi-4.jpg'),
(3, 'BENTLEY', 'Continental GT Coupe', '6000', '3.5', '4.0', '208', 'Automatic', '4', '1 large & 2 small', '1-4.jpg', '4-5.jpg', '2-8.jpg', '3-6.jpg'),
(4, 'BENTLEY', 'Continental GTC', '6000', '3.5', '4.0', '208', 'Automatic', '4', '1 large & 2 small', 'img_1159e.jpg', 'Generative-Fill-2.jpg', 'Generative-Fill-4.jpg', 'img_1159e.jpg'),
(5, 'BMW', 'M3 Competition', '7000', '3.0', '3.0', '155', 'Automatic', '5', '1 large & 2 small', 'bmw-2.jpg', 'bvmw.jpg', 'bmw-3.jpg', 'bmw-2.jpg'),
(6, 'LAMBORGHINI', 'Aventador SVJ Roadster', '9000', '2.9', '6.5', '218', 'Automatic', '2', '1 small', '1-8.jpg', '2-12.jpg', '3-10.jpg', '1-8.jpg'),
(7, 'LAMBORGHINI', 'Huracan Evo Spyder', '8000', '3.4', '5.2', '217', 'Automatic', '2', '1 small', 'DSC08597-1.jpg', 'DSC08583-1.jpg', 'DSC08569-1.jpg', 'DSC08597-1.jpg'),
(8, 'LAMBORGHINI', 'Urus Green', '6000', '3.0', '4.0', '189', 'Automatic', '5', '1 large & 2 small', '1-15.jpg', '2-18.jpg', '3-16.jpg', '1-15.jpg'),
(9, 'ROLLS ROYCE', 'Dawn', '10000', '4.4', '6.6', '155', 'Automatic', '4', '2 large & 1 small', 'Rolls-Royce-Dawn.jpg', 'Rolls-Royce-Dawn-2.jpg', 'Rolls-Royce-Dawn-3.jpg', 'Rolls-Royce-Dawn.jpg'),
(10, 'FERRARI', 'F8 Tributo Coupe', '8000', '2.9', '3.9', '211', 'Automatic', '2', '2 small', 'F8-TRIBUTO-COUPE-.jpg', 'F8-TRIBUTO-COUPE-4.jpg', 'F8-TRIBUTO-COUPE-2.jpg', 'F8-TRIBUTO-COUPE-3.jpg'),
(11, 'LAMBORGHINI', 'Aventador S Roadster', '6500', '2.9', '6.5', '217', 'Automatic', '2', '1 small', '1-6.jpg', '4-7.jpg', '2-10.jpg', '3-8.jpg'),
(12, 'BENTLEY', 'Bentayga', '7500', '4.4', '4.0', '180', 'Automatic', '5', '2 large & 1 small', '1-3.jpg', '2-7.jpg.webp', '3-5.jpg.webp', '1-3.jpg'),
(13, 'FERRARI', '812 Superfast', '8000', '6.5', '2.7', '211', 'Automatic', '2', '1 large & 1 small', 'ff.jpg.webp', 'ff-2.jpg.webp', 'ff-3.jpg', 'ff.jpg.webp'),
(14, 'FERRARI', '488 GTB Spyder', '9000', '3.0', '3.9', '205', 'Automatic', '2', '2 small', '488-GTB-Spyder-1.jpg', '488-GTB-Spyder-2.jpg', '488-GTB-Spyder-3.jpg', '488-GTB-Spyder-4.jpg'),
(15, 'MCLAREN', '720 S', '8500', '2.8', '4.0', '211', 'Automatic', '2', '1 small', 'mc.jpg.webp', '2-4.jpg', '3-2.jpg.webp', 'mc.jpg.webp'),
(16, 'MCLAREN', 'Matte Black 720 S', '9000', '2.8', '4.0', '211', 'Automatic', '2', '1 small', 'IMG_1207.jpg', 'IMG_1188.jpg', 'IMG_1205.jpg', 'IMG_1207.jpg'),
(17, 'ROLLS ROYCE', 'Wraith Black Badge', '10000', '4.4', '6.6', '155', 'Automatic', '4', '1 large & 2 small', 'Wraith-Black-Badge-.jpg', 'Wraith-Black-Badge-2.jpg', 'Wraith-Black-Badge-3.jpg', 'Wraith-Black-Badge-4.jpg.webp'),
(18, 'ROLLS ROYCE', 'Ghost Series II', '9000', '4.6', '6.6', '155', 'Automatic', '5', '2 large & 1 small', 'Ghost-Series-II.jpg', 'Ghost-Series-II-3.jpg', 'Ghost-Series-II-4.jpg.webp', 'Ghost-Series-II-6.jpg.webp'),
(19, 'PORSCHE', 'GT3 RS', '11000', '2.8', '4.0', '211', 'Automatic', '2', '1 small', 'IMG_16843.jpg', 'IMG_132683.jpg', 'IMG_16853.jpg', 'IMG_16843.jpg'),
(20, 'LAMBORGHINI', 'Huracan Evo Spyder White', '6000', '2.7', '5.2', '201', 'Automatic', '2', '1 small', '1.jpg.webp', '2.jpg.webp', '3.jpg.webp', '1.jpg.webp'),
(21, 'LAMBORGHINI', 'LP750-4 Aventador SV Coupe', '9000', '2.9', '6.5', '217', 'Automatic', '2', '1 small', '1-12.jpg', '2-15.jpg', '3-13.jpg.webp', '4-12.jpg.webp'),
(22, 'BUGATTI', 'Bugatti Veyron', '8500', '2.9', '4.0', '253', 'Automatic', '2', '1 small', 'BugattiVeyron1-4.jpg', '94768.jpeg', 'hn.jpeg', 'black-and-blue-bugatti-veyron-hd-wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `car_id` varchar(50) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `car_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`car_id`, `car_name`, `brand_name`, `car_image`) VALUES
('1', 'RS6 Avant', 'AUDI', 'Audi-RS6-Avant-2.jpg'),
('2', 'RSQ8 Vorsprung', 'AUDI', 'audi-2.jpg'),
('11', 'Aventador S Roadster', 'LAMBORGHINI', '1-6.jpg'),
('14', '488 GTB Spyder', 'FERRARI', '488-GTB-Spyder-1.jpg'),
('15', '720 S', 'MCLAREN', 'mc.jpg.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `pass`, `user_type`) VALUES
('cha', 'naik', 'a@gmail.com', '123', 'user'),
('charan', 'naik', 'abcdef@gmail.com', '111', 'user'),
('admin', 'admin', 'admin@gmail.com', 'admin123', 'admin'),
('charan', 'naik', 'charan@gmail.com', '111', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

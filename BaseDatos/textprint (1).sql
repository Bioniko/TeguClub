-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 11:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `cat_nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`cat_id`, `emp_id`, `cat_nombre`) VALUES
(1, 1, 'Camisas'),
(2, 1, 'Gorras'),
(3, 1, 'Tazas'),
(4, 1, 'Hoddie'),
(5, 1, 'Sublimacion'),
(6, 1, 'Stiker'),
(18, 0, 'Prueba'),
(19, 2, 'Prueba'),
(20, 2, 'Celulares'),
(21, 4, 'Celular');

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `emp_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `emp_nombre` varchar(256) NOT NULL,
  `emp_descripcion` varchar(1024) NOT NULL,
  `emp_logo` varchar(256) NOT NULL,
  `emp_celular` varchar(256) NOT NULL,
  `emp_correo` varchar(256) NOT NULL,
  `emp_menu` varchar(256) NOT NULL,
  `emp_facebook` varchar(1024) NOT NULL,
  `emp_instagram` varchar(1024) NOT NULL,
  `emp_tiktok` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`emp_id`, `log_id`, `emp_nombre`, `emp_descripcion`, `emp_logo`, `emp_celular`, `emp_correo`, `emp_menu`, `emp_facebook`, `emp_instagram`, `emp_tiktok`) VALUES
(1, 1, 'TextPrint', 'Explora las últimas colecciones de Camisetas, Hoddies y mucho mas.', 'd8f37-logo.png', '94854290', '', 'TextPrint', '', '', ''),
(2, 2, 'Jorge Ortiz', '', 'e9bf6-new-project.png', '98448855', 'bioniko.laboratorio@gmail.com', 'Admin', '', '', ''),
(3, 3, 'El rincon de la fiesta', '', '0d468-logorincon.jpg', '3172-5160', 'katy@correo.com', 'Decoraciones', '', '', ''),
(4, 4, 'Tegumovilhn', '', 'cbfb7-tegumovil_hn-removebg-preview.png', '+50489574708', 'allanesquivel23@gmail.com', 'Celulares', 'https://www.facebook.com/jorgealberto.ortizcerrato', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `log_usuario` varchar(512) NOT NULL,
  `log_password` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `log_usuario`, `log_password`) VALUES
(1, 'admin', 'abf8beecd597d3093a335c774158d26f'),
(2, 'bioniko', '1938fd81886033e501ef6c576dd1cd87'),
(3, 'katy', 'f25dcc94eb360a98c3720f1ba712a4c5'),
(4, 'Allan', '1938fd81886033e501ef6c576dd1cd87');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_nombre` varchar(256) NOT NULL,
  `pro_precio` int(11) NOT NULL,
  `pro_foto1` varchar(256) NOT NULL,
  `pro_foto2` varchar(256) NOT NULL,
  `pro_foto3` varchar(256) NOT NULL,
  `pro_foto4` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`pro_id`, `emp_id`, `cat_id`, `pro_nombre`, `pro_precio`, `pro_foto1`, `pro_foto2`, `pro_foto3`, `pro_foto4`) VALUES
(4, 1, 1, 'Breaking Bad', 250, '1d604-5141wbfkdjl._ac_sx522_.jpg', 'bbf8d-61yeuuyny4l._ac_sx679_.jpg', 'e5ccc-51d2vjpgwpl._ac_sx679_.jpg', 'e3292-51d2vjpgwpl._ac_sx679_.jpg'),
(5, 1, 1, 'Simpson', 250, '908db-118785398_1816680458493283_7898372765966370234_n.jpg', 'd653f-images.jpg', 'cbb24-61vv2ac0w7l._ac_sl1001_.jpg', '6a8ba-71z3oxzuzzs._ac_uy1000_.jpg'),
(10, 1, 2, 'Rick yMorty', 250, '697c1-images.jpg', '7eaec-118785398_1816680458493283_7898372765966370234_n.jpg', '', ''),
(11, 2, 20, 'Fold 5', 40, 'b81ab-450_1000.jpeg', '', '', ''),
(12, 4, 21, 'Fold 5', 40062, 'd7aac-450_1000.jpeg', 'd0d38-61lyie34pvl._ac_sx679_.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

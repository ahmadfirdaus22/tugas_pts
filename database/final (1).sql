-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `company_name`, `email`, `country`, `address`, `created_at`, `updated_at`) VALUES
(1, 'GW FOODS CO LTD', 'gwfoodkorea@hanmail.net', 'Korea', 'Hyundae Vision 21 #725, 467-19 Dogok-dong Gangnam-gu\r\nSeoul - Korea, South -', '2022-12-13 01:43:05', NULL),
(4, 'JEONG EUN TRADING CO LTD', 'jeong@gmail.co', 'South Korea', '301 Mopico Bld 693-3 Nambumin-dong Seo-gu\r\n            Busan - Korea, South - 602020', '2022-12-13 03:32:42', NULL),
(6, 'Tokiwa corporation', 'tokiwacorp@gmail.com', 'Japan', '3-8-16, Uchiyama, Chikusa-Ku, Nagoya, Aichi, Japan', '2022-12-15 04:35:04', '2022-12-14 23:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `exporter`
--

CREATE TABLE `exporter` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exporter`
--

INSERT INTO `exporter` (`id`, `name`, `phone`, `email`, `country`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'daus', '123144', 'adasd@gmail.com', 'Indonesia\r\n', 'dimana saja', '$2y$10$KWUI0SEeOfw.GZImRkpsqOVSGU5LfhtOAn97sTvIcCtI0OkcvQh4S', '2022-12-13 03:54:48', NULL),
(3, 'ahmad Firdaus', '08353616312', 'ahmadfirdaus115511@gmail.com', 'Indonesia', 'Jalan sehat lima sempurna', '$2y$10$wGQ02gHMeMt1HT.TYZjUIOllMc6yz8ykj9f7j.oxzoIMyMNXxLFca', '2022-12-16 06:22:37', NULL),
(4, NULL, NULL, 'rex@gmail.com', NULL, NULL, '$2y$10$7Rv8kWX/SX4ZLOobl3vft.HN5ui6X8gPCUvKKeJ1thoX4XMIjYV7.', '2022-12-16 08:30:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hs_code` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `hs_code`, `created_at`, `updated_at`) VALUES
(1, 'White Pepper', '09041190', '2022-12-13 04:15:22', NULL),
(2, 'Apple', '08081000', '2022-12-13 04:40:53', NULL),
(6, 'Young Coconut', '08011910', '2022-12-15 01:40:37', NULL),
(7, 'Carrots', '7061010', '2022-12-15 01:40:37', NULL),
(8, 'Goldfish', '03011192', '2022-12-15 01:42:20', NULL),
(9, 'Soy sauce', '21031000', '2022-12-15 01:43:49', NULL),
(10, 'Palm kernel oil', '15132110', '2022-12-15 06:09:51', '2022-12-15 00:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `trx_buy_id` int(11) NOT NULL,
  `trx_receive_id` int(11) DEFAULT NULL,
  `trx_status` enum('On Way','Received','Departing') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id`, `trx_buy_id`, `trx_receive_id`, `trx_status`, `created_at`, `updated_at`) VALUES
(6, 19, 21, 'Received', '2022-12-16 04:15:10', '2022-12-15 22:18:48'),
(7, 20, 22, 'Received', '2022-12-16 04:15:26', '2022-12-16 02:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `max_quantity` mediumint(9) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `product_id`, `company_name`, `email`, `country`, `address`, `max_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'CV Rempah Jaya', 'rempahjaya@gmail.com', 'Indonesia', 'jalan Kemenangan, sukabumi, Indonesia', 5000, '2022-12-13 04:39:08', NULL),
(3, 6, 'CV Berkah jaya', 'berkahjaya@gmail.com', 'Indonesia', 'jl mencari cari aceh selatan', 3000, '2022-12-13 06:44:36', '2022-12-15 01:19:32'),
(5, 10, 'PT Sampoerna Agro Tbk', 'samporna@gmail.com', 'Indonesia', '\r\nSampoerna Strategic Square, North Tower, 28/F Jln. Jendral Sudirman Kav.45, Jakarta Indonesia 12930', 12000, '2022-12-15 06:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_buy`
--

CREATE TABLE `trx_buy` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `exporter_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_payment` float NOT NULL,
  `port_loading` varchar(200) NOT NULL,
  `port_discharge` varchar(200) NOT NULL,
  `bank_origin` varchar(200) NOT NULL,
  `bank_destination` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_buy`
--

INSERT INTO `trx_buy` (`id`, `date`, `exporter_id`, `supplier_id`, `buyer_id`, `quantity`, `total_payment`, `port_loading`, `port_discharge`, `bank_origin`, `bank_destination`, `created_at`, `updated_at`) VALUES
(19, '2022-12-16', 1, 1, 1, 10000, 3000, 'Pekanbaru Port', 'Nagoya Port', 'Mitshubishi Bank', 'Bank Indonesia', '2022-12-16 04:15:10', NULL),
(20, '2022-12-16', 1, 3, 4, 1000, 20000, 'PangkalBalam Port', ' Antwerp Port', 'Deutsche Bank', 'Bank Rakyat Indonesia', '2022-12-16 04:15:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_receive`
--

CREATE TABLE `trx_receive` (
  `id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `trx_buy_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_receive`
--

INSERT INTO `trx_receive` (`id`, `dates`, `trx_buy_id`, `created_at`, `updated_at`) VALUES
(21, '2022-12-16', 19, '2022-12-16 04:18:48', NULL),
(22, '2022-12-16', 20, '2022-12-16 08:35:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exporter`
--
ALTER TABLE `exporter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_trx_buy_2` (`trx_buy_id`),
  ADD KEY `fk_trx_receive` (`trx_receive_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products` (`product_id`);

--
-- Indexes for table `trx_buy`
--
ALTER TABLE `trx_buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_buyer` (`buyer_id`),
  ADD KEY `fk_exporter` (`exporter_id`),
  ADD KEY `fk_supplier` (`supplier_id`);

--
-- Indexes for table `trx_receive`
--
ALTER TABLE `trx_receive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_trx_buy` (`trx_buy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exporter`
--
ALTER TABLE `exporter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trx_buy`
--
ALTER TABLE `trx_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trx_receive`
--
ALTER TABLE `trx_receive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `fk_trx_buy_2` FOREIGN KEY (`trx_buy_id`) REFERENCES `trx_buy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_trx_receive` FOREIGN KEY (`trx_receive_id`) REFERENCES `trx_receive` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_buy`
--
ALTER TABLE `trx_buy`
  ADD CONSTRAINT `fk_buyer` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_exporter` FOREIGN KEY (`exporter_id`) REFERENCES `exporter` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_receive`
--
ALTER TABLE `trx_receive`
  ADD CONSTRAINT `fk_trx_buy` FOREIGN KEY (`trx_buy_id`) REFERENCES `trx_buy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

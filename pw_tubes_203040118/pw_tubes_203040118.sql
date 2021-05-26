-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 05:54 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040118`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `merek`, `nama`, `deskripsi`, `harga`, `stok`, `foto`) VALUES
(1, 'ROLEX', 'YACHT-MASTER II', 'The only chronograph in the world with a mechanical memory, the Yacht-Master II with its bezel acting as a programmable countdown.', '580000000', '7', '1.jpg'),
(2, 'ROLEX', 'GMT-MASTER II', 'This model features a black dial and a two-colour Cerachrom bezel insert in brown and black ceramic.', '420000000', '5', '2.jpg'),
(3, 'ROLEX', 'COSMOGRAPH DAYTONA', 'This chronograph was designed to be the ultimate timing tool for endurance racing drivers.', '750000000', '3', '3.jpg'),
(4, 'CASIO', 'AE1200WHD-1A', 'Classic – Silver. Silver stainless steel band digital watch with a black & neutral face.', '650000', '42', '4.jpg'),
(5, 'CASIO', 'MRW200H-1BV', 'Couple this with a bi-directional rotating bezel and 100 meter water resistance and you’ve got a timepiece that’s easy-to-read, simple-to-use and durable.', '850000', '38', '5.jpg'),
(6, 'CASIO', 'MCW100H-4AV', 'A heavy duty resin chronograph design with the timeless style of a 3-hand analog.', '2500000', '28', '6.jpg'),
(7, 'SEIKO', 'CHRONOGRAPH SPC236P1', 'Seiko Chronograph SPC236P1 Men\'s Watch is a trendy watch that can be used in any condition, anywhere and anytime.', '320000000', '10', '7.jpg'),
(8, 'SEIKO', 'PRESAGE BROWN LEATHER', 'Presage combines a Japanese aesthetic sense with traditional craftsmanship and Seiko’s mechanical watchmaking skills in an original collection that offers Japanese beauty, quality and long-lasting performance.', '120000000', '12', '8.jpg'),
(9, 'SEIKO', '5 SPORTS STYLE BLACK DIAL', 'It was created for the ever-growing number of men and women who wanted a watch they could trust as they played sports.', '95000000', '18', '9.jpg'),
(10, 'HUBLOT', 'BIG BANG UNICO', 'Hublot’s flagship model, the Big Bang has revolutionized the watchmaking universe with its extraordinary design. A contemporary icon, it is constantly reinventing itself - leaving room for all the technical and aesthetic daring. More than a watch: a state of mind.', '850000000', '3', '10.jpg'),
(11, 'APPLE', 'APPLE WATCH SERI 5', 'This hour has a screen that never sleeps. With the retinal screen that is always active, you always see your time and face face.', '3800000', '34', '11.jpg'),
(12, 'APPLE', 'APPLE WATCH SERI 6', 'Measure oxygen levels in your blood with a revolutionary sensor and application. See your fitness metric in a glimpse with the retina screen is always active that is enhanced. With Apple Watch Series 6 on the wrist, you can enjoy a healthier, active life, and easily connected.', '4900000', '27', '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Asrillper', 'admin', '21232f297a57a5a743894a0e4a801fc3', '08123456789', 'asrillper@gmail.com', 'Jalan. Setiabudhi No. 163, Kota Bandung.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_stok` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'asril', '$2y$10$dIR567/hgmRSkA2WKa66deQeG6T2GgVozSc/QSTKwTmX36TrC2E3O'),
(3, '', '$2y$10$df3olx5RKIrthMX4zM0IMu2U5F0bUR/Cf2cgw2h/6KqmNZl46NTei'),
(4, 'asrillper', '$2y$10$8H2mkOLDFHzZpYkPEZfbPufR8WeJMjWbYcmlXKrzEUh0JBU3Rb6Uy'),
(5, 'user', '$2y$10$46WIXIBImynWJpghjPkHN.hZR/2Gb8yJ6DgLTQrmbh2KQQgrkiG3K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

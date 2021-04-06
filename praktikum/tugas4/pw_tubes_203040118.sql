-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 12:19 PM
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
(2, 'ROLEX', 'GMT-MASTER II', 'This model features a black dial and a two-colour Cerachrom bezel insert in brown and black ceramic.', '420000000', '5', 'dua.jpg'),
(3, 'ROLEX', 'COSMOGRAPH DAYTONA', 'This chronograph was designed to be the ultimate timing tool for endurance racing drivers.', '750000000', '3', '3.jpg'),
(4, 'CASIO', 'AE1200WHD-1A', 'Classic – Silver. Silver stainless steel band digital watch with a black & neutral face.', '650000', '42', '4.jpg'),
(5, 'CASIO', 'MRW200H-1BV', 'Couple this with a bi-directional rotating bezel and 100 meter water resistance and you’ve got a timepiece that’s easy-to-read, simple-to-use and durable.', '850000', '38', '5.jpg'),
(6, 'CASIO', 'MCW100H-4AV', 'A heavy duty resin chronograph design with the timeless style of a 3-hand analog.', '2500000', '28', '6.jpg'),
(7, 'SEIKO', 'CHRONOGRAPH SPC236P1', 'Seiko Chronograph SPC236P1 Men\'s Watch is a trendy watch that can be used in any condition, anywhere and anytime.', '320000000', '10', '7.jpg'),
(8, 'SEIKO', 'PRESAGE GREEN DIAL BROWN LEATHER', 'Presage combines a Japanese aesthetic sense with traditional craftsmanship and Seiko’s mechanical watchmaking skills in an original collection that offers Japanese beauty, quality and long-lasting performance.', '120000000', '12', '8.jpg'),
(9, 'SEIKO', '5 SPORTS STYLE BLACK DIAL CANVAS', 'It was created for the ever-growing number of men and women who wanted a watch they could trust as they played sports.', '95000000', '18', '9.jpg'),
(10, 'HUBLOT', 'BIG BANG UNICO', 'Hublot’s flagship model, the Big Bang has revolutionized the watchmaking universe with its extraordinary design. A contemporary icon, it is constantly reinventing itself - leaving room for all the technical and aesthetic daring. More than a watch: a state of mind.', '850000000', '3', '11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

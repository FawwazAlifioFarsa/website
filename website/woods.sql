-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 08:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woods`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `stok`, `gambar`) VALUES
(1, 'Ash', 'Ash is a hardwood lumber that comes from a variety of trees, including black ash, green ash, white ash, and blue ash. With enough space, an ash tree can grow up to 60 feet tall and spread up to 80 feet wide.', 'Rp.50.000,00', 40, 'ash.png'),
(2, 'Redwood', 'Redwood trees are known as the tallest tree species in the world, growing up to 400 feet. These softwoods grow in a relatively small area of the Pacific Northwest of the United States.', 'Rp50.000,00', 40, 'redwood.png'),
(3, 'Birch', 'Birch is a popular and rather economical hardwood. Birch trees are common in the eastern United States, particularly in the Northeast. These trees grow up to 70 feet tall but tend to stay thinly trunked.', 'Rp50.000,00', 40, 'birch.png'),
(4, 'Mahogany', 'Mahogany is a luxury-grade hardwood that grows in the Central and South Americas, West Africa, and the West Indies. A mahogany tree can grow very tall, reaching heights of more than 150 feet.', 'Rp50.000,00', 40, 'mahogany.png'),
(5, 'Teak', 'When it comes to blending durability and good looks, teak is one of the top choices in the hardwood market. This wood comes from the teak tree, which is native to southern Asia but also grows on farms in Latin America, Africa, and other tropical regions.', 'Rp50.000,00', 40, 'teak.png'),
(6, 'Cherry', 'Cherry trees are good for more than just their fruit: They also produce one of the most sought-after wood types available. The trees are common throughout the Midwest and eastern United State.', 'Rp50.000,00', 40, 'cherry.png'),
(7, 'Pine', 'Pine is a very soft wood that’s incredibly easy to work with. It comes from a variety of pine trees grown all over the United States. Common types include sugar, white, ponderosa, and southern yellow pine.', 'Rp50.000,00', 40, 'pine.png'),
(8, 'Fir', 'Fir, or Douglas fir, is a very hard and durable softwood, and it comes from a tree species of the same name. Douglas fir trees grow very tall, reaching heights of 200 to 300 feet if left to their own devices in the forest.', 'Rp50.000,00', 40, 'fir.png'),
(9, 'Maple', 'The red maple tree is the most common tree species in the United States, but it’s the less popular rock or sugar maple from which the majority of maple wood comes.', 'Rp50.000,00', 40, 'maple.png'),
(10, 'Oak', 'Oak trees, whether they are the red or white variant, are commonly found trees in the United States and produce two of the most popular hardwoods available.', 'Rp50.000,00', 40, 'oak.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `phone`, `password`) VALUES
('Budi', 'budibudi@gmail.com', '081245978723', 'budibudi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

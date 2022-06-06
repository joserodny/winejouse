-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 02:22 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winejouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(10) NOT NULL,
  `customers_ip` varchar(100) NOT NULL,
  `customers_name` text NOT NULL,
  `customers_email` varchar(100) NOT NULL,
  `customers_pass` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `customers_ph` text NOT NULL,
  `customers_city` text NOT NULL,
  `customers_contact` varchar(255) NOT NULL,
  `customers_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customers_ip`, `customers_name`, `customers_email`, `customers_pass`, `type`, `customers_ph`, `customers_city`, `customers_contact`, `customers_image`) VALUES
(3, '::1', 'rod ny', 'atorny112@gmail.com', 'rr', 'Approved', 'new manila', 'manila', '5555', ''),
(5, '::1', 'admin', 'admin', 'admin', 'admin', 'admin', 'gagi', '456456', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_of_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodid` int(100) NOT NULL,
  `prodname` varchar(255) NOT NULL,
  `prodvariety` varchar(255) NOT NULL,
  `prodesc` varchar(255) NOT NULL,
  `prodprice` int(255) NOT NULL,
  `prodimage` text NOT NULL,
  `prodstock` int(255) NOT NULL,
  `prodtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodid`, `prodname`, `prodvariety`, `prodesc`, `prodprice`, `prodimage`, `prodstock`, `prodtype`) VALUES
(63, 'PHEBUS Chardonnay ', 'Chardonnay', ' tropical pineapple and melon fruity character', 645, 'fabre-montmayou-reserva-chardonnay-caja-de-6-botellas.jpg', 2, 'White Wine'),
(64, 'Marques De Caceres Crianza \"Half Bottle\"', 'Tempranillo, Garnacha, Graciano', ' Expressive nose with notes of raspberries, bilberries and cherries, enlivened by a touch of spice and a depth of vanilla.', 572, 'sr005h.jpg', 2, 'Red Wine'),
(65, 'Les Jamelles Cabernet Sauvignon', 'Cabernet Sauvignon', ' Aromas of blackcurrants and strawberries together with a light fresh vegetal note of green peppers, very characteristic of Cabernet, and spicy scents from cinnamon, mint and honey. Subtle woody notes on the finish like cedar, oak and walnuts', 750, 'les-jamelles-cabernet-sauvignon968.jpg', 3, 'Red Wine'),
(66, 'Pinot Noir Reserva', 'Pinot Noir', ' Behind its characteristic nose of cherry and strawberries it reveals a hint of mineral notes, tomate plant and a slightly spicy finish', 848, 'la-mision-pinot-noir1.jpg', 5, 'Red Wine'),
(67, 'Kripta Gran Reserva Brut Nature', 'Macabeu', ' lean aromas, very frank and fruity with a marked presence of ripe fruit and soft toasted nuances in perfect harmony and equilibrium.', 4715, 'cava_agusti_torello_kripta_750ml_1_large-500x500.jpg', 5, 'Sparkling Wine'),
(68, 'Mailly Brut Reserve Grand Cru', 'Pinot Noir, Chardonnay and Pinot Meunier', ' Brilliant colour with straw tones and glints of amber.', 5270, 'mailly brut reserve cru.jpg', 3, 'Sparkling Wine'),
(69, 'Marques De Caceres Rose', 'Tempranillo and Grenacha', ' full of aromas of raspberries, strawberries, red currant and roses.', 590, 'rose marqs.jpg', 4, 'Rose Wine'),
(70, 'Les Jamelles Cinsault', 'Tempranillo and Grenacha', ' Lovely typical pink colour veering towards bright red. Very bright appearance.', 595, 'cinsault-rose-les-jamelles-bottle6.jpg', 4, 'Rose Wine'),
(71, 'MARQUES DE CACERES SATINELA Demi-Sec', 'Single Grape Varietal', ' Expressive nose with notes ofapples, pears and white peaches.', 695, 'mdc_satinela4.jpg', 3, 'White Wine'),
(72, 'Bestue-Blanco-Chardonnaay', 'Chardonnay', 'Medium intense aromas of honeyed-lemon, peaches and tropical fruit.', 820, 'bestue.jpg', 5, 'White Wine'),
(73, 'Sileni Sauvignon Blanc', 'Sauvignon Blanc', ' Aromas of tropical fruit and gooseberry, with grass and herbal notes fleshing out the experience. Cut grass, pink grapefruit and lemon notes dominate the nose too.', 945, 'sileni sauvignon blanc r and s9.jpg', 10, 'White Wine'),
(74, 'CARMES DE RIEUSSEC 2nd Wine Of Chateau Rieussec', 'Sauvignon Blanc', ' intense cherry and forest fruit aromas', 2910, 'les-carmes-de-rieussec-2008.jpg', 6, 'White Wine'),
(75, 'gggggggggggggg', 'gagag', ' 34444444444444446346346', 0, '', 436346, 'Rose Wine');

-- --------------------------------------------------------

--
-- Table structure for table `totalpriceorder`
--

CREATE TABLE `totalpriceorder` (
  `dateorder` date NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `total_price` int(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalpriceorder`
--

INSERT INTO `totalpriceorder` (`dateorder`, `ip_add`, `total_price`, `status`) VALUES
('2019-03-11', '::1', 4715, 'Complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
heroku_3ddd7dfe07b6e5a
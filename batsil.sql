-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 08, 2020 at 05:04 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `b17_23304306_batsil`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id_address` int(11) UNSIGNED NOT NULL,
  `name_place` varchar(25) NOT NULL DEFAULT '',
  `address1` varchar(200) NOT NULL DEFAULT '',
  `address2` varchar(200) DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `phone_address` varchar(12) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_client` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id_address`, `name_place`, `address1`, `address2`, `country`, `city`, `state`, `phone_address`, `cp`, `id_client`) VALUES
(2, 'Capeltic Ibero CDMX', 'Joaquín Gallo 258', '', 'México', 'CDMX', 'DF', '525563881082', 1219, 43);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id_billing` int(11) UNSIGNED NOT NULL,
  `payroll` varchar(100) NOT NULL DEFAULT '',
  `fiscal_address` varchar(250) NOT NULL DEFAULT '',
  `rfc` varchar(13) NOT NULL DEFAULT '',
  `payment_method` varchar(25) NOT NULL DEFAULT '',
  `payment_form` varchar(25) NOT NULL DEFAULT '',
  `payment_use` varchar(25) NOT NULL DEFAULT '',
  `id_client` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id_billing`, `payroll`, `fiscal_address`, `rfc`, `payment_method`, `payment_form`, `payment_use`, `id_client`) VALUES
(28, 'TEST', '', 'TEST', '0', '3', '0', 43);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) UNSIGNED NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(1, 'coffee'),
(2, 'honey'),
(3, 'soap');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) UNSIGNED NOT NULL,
  `name_legal` varchar(100) NOT NULL DEFAULT '',
  `name_alias` varchar(100) NOT NULL DEFAULT '',
  `giro` varchar(250) NOT NULL DEFAULT '',
  `client_type` int(12) NOT NULL DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `name_legal`, `name_alias`, `giro`, `client_type`, `user`, `pass`) VALUES
(43, 'Grupo Yomol Atel', 'Capeltic', 'Cafetería', 1, 'capeltic@capeltic.org', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');

-- --------------------------------------------------------

--
-- Table structure for table `clients_pending`
--

CREATE TABLE `clients_pending` (
  `id_client_pending` int(11) NOT NULL,
  `name_client_pending` varchar(50) NOT NULL,
  `email_client_pending` varchar(50) NOT NULL,
  `phone_client_pending` varchar(20) NOT NULL,
  `day_client_pending` varchar(20) NOT NULL,
  `from_client_pending` varchar(20) NOT NULL,
  `to_client_pending` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(11) UNSIGNED NOT NULL,
  `name_contact` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone_contact` varchar(20) NOT NULL DEFAULT '',
  `id_client` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `name_contact`, `email`, `phone_contact`, `id_client`) VALUES
(32, 'Arturo Acevedo', 'arturoacevedob@gmail.com', '5549114493', 43);

-- --------------------------------------------------------

--
-- Table structure for table `ground_type`
--

CREATE TABLE `ground_type` (
  `id_ground_type` int(11) UNSIGNED NOT NULL,
  `ground_type` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ground_type`
--

INSERT INTO `ground_type` (`id_ground_type`, `ground_type`) VALUES
(1, 'Americano'),
(2, 'Espresso'),
(3, '1'),
(4, '2'),
(5, '3'),
(6, '4'),
(7, '5'),
(8, '6'),
(9, '7');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `id_product`, `image_path`) VALUES
(18, 91, 'images/productos/cafe/capelticorgánico_1kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) UNSIGNED NOT NULL,
  `id_client` int(11) UNSIGNED NOT NULL,
  `id_address` int(11) UNSIGNED NOT NULL,
  `date` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_orders_detail` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `id_weight_price` int(11) UNSIGNED NOT NULL,
  `id_ground_type` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--


CREATE TABLE `products` (
  `id_product` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_product` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `notes` varchar(1000) DEFAULT '',
  `client_type` int(12) DEFAULT '0',
  `id_category` int(11) DEFAULT '1',
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `description`, `notes`, `client_type`, `id_category`)
VALUES
	(91,'Capeltic Orgánico','Un café de preparación americana con excelente calidad que pocos cafés en el mercado nacional logran ofrecer.','Este café presenta un aroma herbal, una acidez cítrica, un cuerpo medio y sabor con notas a madera y caramelo.',1,1),
	(92,'Capeltic Orgánico Gourmet','Descripción','Notas',1,1),
	(94,'Jabón Prueba','Descripción Prueba','Notas Prueba',1,3);

-- --------------------------------------------------------

--
-- Table structure for table `weight_price`
--

CREATE TABLE `weight_price` (
  `id_weight_price` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `weight1` int(4) DEFAULT NULL,
  `weight2` int(4) DEFAULT NULL,
  `weight3` int(4) DEFAULT NULL,
  `price1` int(3) DEFAULT NULL,
  `price2` int(3) DEFAULT NULL,
  `price3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weight_price`
--

INSERT INTO `weight_price` (`id_weight_price`, `id_product`, `weight1`, `weight2`, `weight3`, `price1`, `price2`, `price3`) VALUES
(39, 91, 250, 500, 1000, 65, 105, 190);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id_address`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id_billing`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `clients_pending`
--
ALTER TABLE `clients_pending`
  ADD PRIMARY KEY (`id_client_pending`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `ground_type`
--
ALTER TABLE `ground_type`
  ADD PRIMARY KEY (`id_ground_type`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_address` (`id_address`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id_orders_detail`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_weight_price` (`id_weight_price`),
  ADD KEY `id_ground_type` (`id_ground_type`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `weight_price`
--
ALTER TABLE `weight_price`
  ADD PRIMARY KEY (`id_weight_price`),
  ADD KEY `id_product` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id_address` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id_billing` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `clients_pending`
--
ALTER TABLE `clients_pending`
  MODIFY `id_client_pending` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ground_type`
--
ALTER TABLE `ground_type`
  MODIFY `id_ground_type` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id_orders_detail` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `weight_price`
--
ALTER TABLE `weight_price`
  MODIFY `id_weight_price` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `address_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`);

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_clients` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `image_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_address` FOREIGN KEY (`id_address`) REFERENCES `addresses` (`id_address`),
  ADD CONSTRAINT `order_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`);

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ground_type` FOREIGN KEY (`id_ground_type`) REFERENCES `ground_type` (`id_ground_type`),
  ADD CONSTRAINT `orders_detail_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `orders_detail_weight_price` FOREIGN KEY (`id_weight_price`) REFERENCES `weight_price` (`id_weight_price`);

--
-- Constraints for table `weight_price`
--
ALTER TABLE `weight_price`
  ADD CONSTRAINT `weight_price_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

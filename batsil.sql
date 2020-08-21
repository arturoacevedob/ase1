-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 21, 2020 at 02:39 AM
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
  `name_place` varchar(25) NOT NULL DEFAULT '''',
  `address1` varchar(200) NOT NULL DEFAULT '''',
  `address2` varchar(200) NOT NULL DEFAULT '''',
  `country` varchar(100) NOT NULL DEFAULT '''',
  `city` varchar(100) NOT NULL DEFAULT '''',
  `state` varchar(100) NOT NULL DEFAULT '''',
  `phone_address` varchar(12) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_client` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id_address`, `name_place`, `address1`, `address2`, `country`, `city`, `state`, `phone_address`, `cp`, `id_client`) VALUES
(1, ''Capeltic Santa Fe'', ''Prolongacion Paseo de la Reforma 880'', ''Edificio K-PB'', ''México'', ''CDMX'', ''Ciudad de México'', ''2147483647'', 1219, 1),
(25, '''', '''', '''', '''', '''', '''', '''', 0, 39),
(26, ''Capeltic Santa Fe'', ''Prolongacion Paseo de la Reforma 880'', ''Edificio K-PB'', ''México'', ''CDMX'', ''Ciudad de México'', ''5512341234'', 1219, 40),
(27, ''Nombre del lugar'', ''Calle y número'', ''15'', ''v'', ''Ciudad'', ''Estado'', ''Teléfono'', 12345, 42);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
(''admin'', ''*75C7230067DB30FA97E55648A206415E9B5ECA68'');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id_billing` int(11) UNSIGNED NOT NULL,
  `payroll` varchar(100) NOT NULL DEFAULT '''',
  `fiscal_address` varchar(250) NOT NULL DEFAULT '''',
  `rfc` varchar(13) NOT NULL DEFAULT '''',
  `payment_method` varchar(25) NOT NULL DEFAULT '''',
  `payment_form` varchar(25) NOT NULL DEFAULT '''',
  `payment_use` varchar(25) NOT NULL DEFAULT '''',
  `id_client` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id_billing`, `payroll`, `fiscal_address`, `rfc`, `payment_method`, `payment_form`, `payment_use`, `id_client`) VALUES
(1, ''Payroll'', ''Fiscal Address'', ''RFC'', ''0'', ''2'', ''0'', 1),
(24, '''', '''', '''', '''', '''', '''', 39),
(25, ''Nómina'', '''', ''RFC'', ''1'', ''2'', ''1'', 40),
(26, ''Nómina'', '''', ''RFC'', ''1'', ''3'', ''1'', 42);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) UNSIGNED NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT ''''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(1, ''coffee''),
(2, ''honey''),
(3, ''soap'');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) UNSIGNED NOT NULL,
  `name_legal` varchar(100) NOT NULL DEFAULT '''',
  `name_alias` varchar(100) NOT NULL DEFAULT '''',
  `giro` varchar(250) NOT NULL DEFAULT '''',
  `client_type` int(12) NOT NULL DEFAULT ''0'',
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `name_legal`, `name_alias`, `giro`, `client_type`, `user`, `pass`) VALUES
(40, ''Distribuidora Tseltal de Café'', ''Capeltic'', ''Cafetería con razón social'', 1, ''capeltic@capeltic.org'', ''*75C7230067DB30FA97E55648A206415E9B5ECA68'');

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

--
-- Dumping data for table `clients_pending`
--

INSERT INTO `clients_pending` (`id_client_pending`, `name_client_pending`, `email_client_pending`, `phone_client_pending`, `day_client_pending`, `from_client_pending`, `to_client_pending`) VALUES
(2, ''Arturo Acevedo'', ''arturoacevedob@icloud.com'', ''(55) 2100-1101'', ''14 Mayo 2019'', ''15:30'', ''20:00''),
(4, ''Maria BRavo'', ''arturoacevedob@icloud.com'', ''(55) 2100-0111'', ''2019-05-15 16:28'', ''2019-05-14 16:00'', ''2019-05-14 17:00'');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(11) UNSIGNED NOT NULL,
  `name_contact` varchar(50) NOT NULL DEFAULT '''',
  `email` varchar(50) NOT NULL DEFAULT '''',
  `phone_contact` varchar(20) NOT NULL DEFAULT '''',
  `id_client` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `name_contact`, `email`, `phone_contact`, `id_client`) VALUES
(1, ''Maria Bravo'', ''mbravo@capeltic.org'', ''5521001101'', 1),
(3, ''Maria Bravo'', ''mbravo@capeltic.org'', ''5521001101'', 1),
(26, ''123'', ''123'', '''', 39),
(27, ''Maria Bravo'', ''mbravo@capeltic.org'', ''5521001011'', 40),
(28, ''Nombre'', ''arturoacevedob@icloud.com'', ''Número telefónico'', 41),
(29, ''Nombre'', ''arturoacevedob@icloud.com'', ''Número telefónico'', 42);

-- --------------------------------------------------------

--
-- Table structure for table `ground_type`
--

CREATE TABLE `ground_type` (
  `id_ground_type` int(11) UNSIGNED NOT NULL,
  `ground_type` varchar(50) NOT NULL DEFAULT ''''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ground_type`
--

INSERT INTO `ground_type` (`id_ground_type`, `ground_type`) VALUES
(1, ''Americano''),
(2, ''Espresso''),
(3, ''1''),
(4, ''2''),
(5, ''3''),
(6, ''4''),
(7, ''5''),
(8, ''6''),
(9, ''7'');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `id_product`, `image_path`) VALUES
(1, 1, ''images/productos/cafe/coffee.jpg''),
(6, 10, ''images/productos/cafe/coffee.jpg''),
(17, 90, ''images/productos/cafe/coffee.jpg''),
(18, 91, ''images/productos/cafe/coffee.jpg'');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) UNSIGNED NOT NULL,
  `id_client` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id_order_details` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `notes` varchar(1000) NOT NULL,
  `client_type` int(12) DEFAULT ''0''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `description`, `notes`, `client_type`) VALUES
(1, ''Premium Orgánico'', ''Únicamente los granos que cumplen los más altos estándares de calidad han sido cuidadosamente seleccionados para formar parte de esta mezcla, logrando así un café de calidad premium que logrará satisfacer incluso a los más conocedores.'', ''Este café es rico en aromas dulces y florales, presentando una acidez fina y prolongada, un cuerpo medio-alto, aterciopelada al paladar. En su sabor se distinguen notas de avellana, caramelo, frutos rojos y cítricos.'', 0),
(10, ''Gourmet Orgánico'', ''Un café cuyos granos con preparación europea son seleccionados cuidadosamente para obtener una mezcla única de calidad superior.'', ''Este café presenta un aroma floral, una acidez cítrica moderada, un cuerpo cremoso balanceado y un sabor equilibrado con notas de chocolate, avellana, caramelo y frutos rojos.'', 1),
(90, ''Premium Orgánico2'', ''dasdasd'', ''asdasdasdasd'', 0),
(91, ''Premium Orgánico4'', ''asdasdasd'', ''asdasdasd'', 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weight_price`
--

INSERT INTO `weight_price` (`id_weight_price`, `id_product`, `weight1`, `weight2`, `weight3`, `price1`, `price2`, `price3`) VALUES
(1, 1, NULL, 500, NULL, NULL, 144, NULL),
(23, 10, 250, 500, 1000, 75, 135, 230),
(36, 90, 250, NULL, NULL, 65, NULL, NULL),
(37, 91, NULL, NULL, 1000, NULL, NULL, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id_address`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id_billing`);

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
  ADD PRIMARY KEY (`id_contact`);

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
  ADD KEY `id_client` (`id_client`) USING BTREE;

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id_order_details`),
  ADD UNIQUE KEY `id_order_details` (`id_order_details`);

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
  MODIFY `id_address` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id_billing` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `clients_pending`
--
ALTER TABLE `clients_pending`
  MODIFY `id_client_pending` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_order_details` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `weight_price`
--
ALTER TABLE `weight_price`
  MODIFY `id_weight_price` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

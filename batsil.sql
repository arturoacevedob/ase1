-- -------------------------------------------------------------
-- TablePlus 3.7.1(332)
--
-- https://tableplus.com/
--
-- Database: b17_23304306_batsil
-- Generation Time: 2020-08-20 21:17:48.1770
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `addresses` (
  `id_address` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_place` varchar(25) NOT NULL DEFAULT '',
  `address1` varchar(200) NOT NULL DEFAULT '',
  `address2` varchar(200) NOT NULL DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `phone_address` varchar(12) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_client` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_address`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `billing` (
  `id_billing` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payroll` varchar(100) NOT NULL DEFAULT '',
  `fiscal_address` varchar(250) NOT NULL DEFAULT '',
  `rfc` varchar(13) NOT NULL DEFAULT '',
  `payment_method` varchar(25) NOT NULL DEFAULT '',
  `payment_form` varchar(25) NOT NULL DEFAULT '',
  `payment_use` varchar(25) NOT NULL DEFAULT '',
  `id_client` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_billing`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

CREATE TABLE `categories` (
  `id_category` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE `clients` (
  `id_client` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_legal` varchar(100) NOT NULL DEFAULT '',
  `name_alias` varchar(100) NOT NULL DEFAULT '',
  `giro` varchar(250) NOT NULL DEFAULT '',
  `client_type` int(12) NOT NULL DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

CREATE TABLE `clients_pending` (
  `id_client_pending` int(11) NOT NULL AUTO_INCREMENT,
  `name_client_pending` varchar(50) NOT NULL,
  `email_client_pending` varchar(50) NOT NULL,
  `phone_client_pending` varchar(20) NOT NULL,
  `day_client_pending` varchar(20) NOT NULL,
  `from_client_pending` varchar(20) NOT NULL,
  `to_client_pending` varchar(20) NOT NULL,
  PRIMARY KEY (`id_client_pending`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `contacts` (
  `id_contact` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_contact` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone_contact` varchar(20) NOT NULL DEFAULT '',
  `id_client` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

CREATE TABLE `ground_type` (
  `id_ground_type` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ground_type` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_ground_type`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

CREATE TABLE `images` (
  `id_image` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) unsigned NOT NULL,
  `image_path` varchar(500) NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_product` (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

CREATE TABLE `order_details` (
  `id_order_details` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_order_details`),
  UNIQUE KEY `id_order_details` (`id_order_details`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `orders` (
  `id_order` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_client` (`id_client`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `products` (
  `id_product` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_product` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `notes` varchar(1000) NOT NULL,
  `client_type` int(12) DEFAULT '0',
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

CREATE TABLE `weight_price` (
  `id_weight_price` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) unsigned NOT NULL,
  `weight1` int(4) DEFAULT NULL,
  `weight2` int(4) DEFAULT NULL,
  `weight3` int(4) DEFAULT NULL,
  `price1` int(3) DEFAULT NULL,
  `price2` int(3) DEFAULT NULL,
  `price3` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_weight_price`),
  KEY `id_product` (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

INSERT INTO `addresses` (`id_address`, `name_place`, `address1`, `address2`, `country`, `city`, `state`, `phone_address`, `cp`, `id_client`) VALUES
('1', 'Capeltic Santa Fe', 'Prolongacion Paseo de la Reforma 880', 'Edificio K-PB', 'México', 'CDMX', 'Ciudad de México', '2147483647', '1219', '1'),
('25', '', '', '', '', '', '', '', '0', '39'),
('26', 'Capeltic Santa Fe', 'Prolongacion Paseo de la Reforma 880', 'Edificio K-PB', 'México', 'CDMX', 'Ciudad de México', '5512341234', '1219', '40'),
('27', 'Nombre del lugar', 'Calle y número', '15', 'v', 'Ciudad', 'Estado', 'Teléfono', '12345', '42');

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', '*75C7230067DB30FA97E55648A206415E9B5ECA68');

INSERT INTO `billing` (`id_billing`, `payroll`, `fiscal_address`, `rfc`, `payment_method`, `payment_form`, `payment_use`, `id_client`) VALUES
('1', 'Payroll', 'Fiscal Address', 'RFC', '0', '2', '0', '1'),
('24', '', '', '', '', '', '', '39'),
('25', 'Nómina', '', 'RFC', '1', '2', '1', '40'),
('26', 'Nómina', '', 'RFC', '1', '3', '1', '42');

INSERT INTO `categories` (`id_category`, `category`) VALUES
('1', 'coffee'),
('2', 'honey'),
('3', 'soap');

INSERT INTO `clients` (`id_client`, `name_legal`, `name_alias`, `giro`, `client_type`, `user`, `pass`) VALUES
('40', 'Distribuidora Tseltal de Café', 'Capeltic', 'Cafetería con razón social', '1', 'capeltic@capeltic.org', '*75C7230067DB30FA97E55648A206415E9B5ECA68');

INSERT INTO `clients_pending` (`id_client_pending`, `name_client_pending`, `email_client_pending`, `phone_client_pending`, `day_client_pending`, `from_client_pending`, `to_client_pending`) VALUES
('2', 'Arturo Acevedo', 'arturoacevedob@icloud.com', '(55) 2100-1101', '14 Mayo 2019', '15:30', '20:00'),
('4', 'Maria BRavo', 'arturoacevedob@icloud.com', '(55) 2100-0111', '2019-05-15 16:28', '2019-05-14 16:00', '2019-05-14 17:00');

INSERT INTO `contacts` (`id_contact`, `name_contact`, `email`, `phone_contact`, `id_client`) VALUES
('1', 'Maria Bravo', 'mbravo@capeltic.org', '5521001101', '1'),
('3', 'Maria Bravo', 'mbravo@capeltic.org', '5521001101', '1'),
('26', '123', '123', '', '39'),
('27', 'Maria Bravo', 'mbravo@capeltic.org', '5521001011', '40'),
('28', 'Nombre', 'arturoacevedob@icloud.com', 'Número telefónico', '41'),
('29', 'Nombre', 'arturoacevedob@icloud.com', 'Número telefónico', '42');

INSERT INTO `ground_type` (`id_ground_type`, `ground_type`) VALUES
('1', 'Americano'),
('2', 'Espresso'),
('3', '1'),
('4', '2'),
('5', '3'),
('6', '4'),
('7', '5'),
('8', '6'),
('9', '7');

INSERT INTO `images` (`id_image`, `id_product`, `image_path`) VALUES
('1', '1', 'images/productos/cafe/coffee.jpg'),
('6', '10', 'images/productos/cafe/coffee.jpg'),
('17', '90', 'images/productos/cafe/coffee.jpg'),
('18', '91', 'images/productos/cafe/coffee.jpg');

INSERT INTO `products` (`id_product`, `name_product`, `description`, `notes`, `client_type`) VALUES
('1', 'Premium Orgánico', 'Únicamente los granos que cumplen los más altos estándares de calidad han sido cuidadosamente seleccionados para formar parte de esta mezcla, logrando así un café de calidad premium que logrará satisfacer incluso a los más conocedores.', 'Este café es rico en aromas dulces y florales, presentando una acidez fina y prolongada, un cuerpo medio-alto, aterciopelada al paladar. En su sabor se distinguen notas de avellana, caramelo, frutos rojos y cítricos.', '0'),
('10', 'Gourmet Orgánico', 'Un café cuyos granos con preparación europea son seleccionados cuidadosamente para obtener una mezcla única de calidad superior.', 'Este café presenta un aroma floral, una acidez cítrica moderada, un cuerpo cremoso balanceado y un sabor equilibrado con notas de chocolate, avellana, caramelo y frutos rojos.', '1'),
('90', 'Premium Orgánico2', 'dasdasd', 'asdasdasdasd', '0'),
('91', 'Premium Orgánico4', 'asdasdasd', 'asdasdasd', '0');

INSERT INTO `weight_price` (`id_weight_price`, `id_product`, `weight1`, `weight2`, `weight3`, `price1`, `price2`, `price3`) VALUES
('1', '1', NULL, '500', NULL, NULL, '144', NULL),
('23', '10', '250', '500', '1000', '75', '135', '230'),
('36', '90', '250', NULL, NULL, '65', NULL, NULL),
('37', '91', NULL, NULL, '1000', NULL, NULL, '300');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
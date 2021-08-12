# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: b17_23304306_batsil
# Generation Time: 2021-03-18 06:18:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table addresses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `id_address` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_place` varchar(25) NOT NULL DEFAULT '',
  `address1` varchar(200) NOT NULL DEFAULT '',
  `address2` varchar(200) DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `phone_address` varchar(12) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_client` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_address`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `address_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;

INSERT INTO `addresses` (`id_address`, `name_place`, `address1`, `address2`, `country`, `city`, `state`, `phone_address`, `cp`, `id_client`)
VALUES
	(2,'Capeltic Ibero CDMX','Joaquín Gallo 258','','México','CDMX','DF','525563881082',1219,43);

/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`user`, `pass`)
VALUES
	('admin','*00A51F3F48415C7D4E8908980D443C29C69B60C9');

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table billing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `billing`;

CREATE TABLE `billing` (
  `id_billing` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payroll` varchar(100) NOT NULL DEFAULT '',
  `fiscal_address` varchar(250) NOT NULL DEFAULT '',
  `rfc` varchar(13) NOT NULL DEFAULT '',
  `payment_method` varchar(25) NOT NULL DEFAULT '',
  `payment_form` varchar(25) NOT NULL DEFAULT '',
  `payment_use` varchar(25) NOT NULL DEFAULT '',
  `id_client` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_billing`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `billing_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `billing` WRITE;
/*!40000 ALTER TABLE `billing` DISABLE KEYS */;

INSERT INTO `billing` (`id_billing`, `payroll`, `fiscal_address`, `rfc`, `payment_method`, `payment_form`, `payment_use`, `id_client`)
VALUES
	(28,'TEST','','TEST','0','3','0',43);

/*!40000 ALTER TABLE `billing` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table blog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_path` varchar(500) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;

INSERT INTO `blog` (`id`, `title`, `date`, `image_path`, `body`)
VALUES
	(5,'Blog Test','2021-03-16 16:51:29','images/blog/aaaa.jpg','Etiam commodo lobortis nulla, quis eleifend elit pellentesque ut. Suspendisse ultricies luctus facilisis. Donec nec vestibulum quam, vel mollis metus. Pellentesque viverra cursus aliquet. Aenean luctus lacus lacus, nec elementum turpis tincidunt at. Mauris gravida arcu nunc, vel euismod orci condimentum at. Curabitur et turpis dolor. Vivamus fermentum nibh eget nisl egestas, ut vehicula sem tempor. Nullam placerat, mi et vehicula mollis, nulla mi hendrerit ipsum, vel blandit lorem magna vel tortor. Fusce hendrerit risus at nulla pellentesque euismod. Praesent et dapibus elit, eget varius nunc. Curabitur rutrum varius eleifend. Sed porta dictum lectus id ultrices. Proin laoreet augue et dictum dapibus.'),
	(6,'asdsadasdasdas','2021-03-16 23:01:05','images/blog/aaaa.jpg','Maecenas pulvinar vel dui eu facilisis. Pellentesque euismod, risus eget commodo pellentesque, lectus urna ornare odio, venenatis rutrum tortor elit nec enim. Nulla eget diam enim. Nullam vitae bibendum nunc, vel ornare purus. Curabitur sem ex, suscipit in ultricies quis, sodales sed tellus. Vivamus aliquam felis quis nisi efficitur bibendum. Cras ornare venenatis fermentum. In id tortor hendrerit, luctus velit mattis, hendrerit velit. Donec in orci in nibh efficitur maximus. Aliquam eros massa, volutpat molestie felis congue, aliquam pharetra elit.'),
	(7,'asdfasdfsadfsadfsdf','2021-03-16 23:08:11','images/blog/colortemp.jpg','Maecenas ac tincidunt velit. Donec tempus tellus at metus rutrum condimentum. Nunc metus leo, commodo in cursus non, rhoncus hendrerit odio. Maecenas in nisl sit amet sem consequat euismod vel sed velit. Nam auctor nulla fermentum, aliquam nulla quis, consectetur lectus. Ut dictum eros eget dictum maximus. Nunc odio mi, tristique nec ipsum sit amet, condimentum convallis lectus.');

/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id_category` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id_category`, `category`)
VALUES
	(1,'coffee'),
	(2,'honey'),
	(3,'soap');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id_client` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_legal` varchar(100) NOT NULL DEFAULT '',
  `name_alias` varchar(100) NOT NULL DEFAULT '',
  `giro` varchar(250) NOT NULL DEFAULT '',
  `client_type` int(12) NOT NULL DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id_client`, `name_legal`, `name_alias`, `giro`, `client_type`, `user`, `pass`)
VALUES
	(43,'Grupo Yomol Atel','Capeltic','Cafetería',1,'capeltic@capeltic.org','*00A51F3F48415C7D4E8908980D443C29C69B60C9');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clients_pending
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients_pending`;

CREATE TABLE `clients_pending` (
  `id_client_pending` int(11) NOT NULL AUTO_INCREMENT,
  `name_client_pending` varchar(50) NOT NULL,
  `email_client_pending` varchar(50) NOT NULL,
  `phone_client_pending` varchar(20) NOT NULL,
  `day_client_pending` varchar(20) NOT NULL,
  `from_client_pending` varchar(20) NOT NULL,
  `to_client_pending` varchar(20) NOT NULL,
  PRIMARY KEY (`id_client_pending`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clients_pending` WRITE;
/*!40000 ALTER TABLE `clients_pending` DISABLE KEYS */;

INSERT INTO `clients_pending` (`id_client_pending`, `name_client_pending`, `email_client_pending`, `phone_client_pending`, `day_client_pending`, `from_client_pending`, `to_client_pending`)
VALUES
	(5,'Arturo Acevedo','arturoacevedob@gmail.com','(55) 4911-4493','2020-10-09 14:20','2020-10-08 07:00','2020-10-08 08:00'),
	(6,'Testing','Testing@gmail.com','(55) 4911-4493','2021-03-02 16:32','2021-01-29 10:00','2021-01-29 13:00'),
	(7,'Arturo','arturoacevedob@gmail.com','(55) 4911-4493','2021-02-19 18:57','2021-02-18 18:57','2021-02-18 09:15');

/*!40000 ALTER TABLE `clients_pending` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id_contact` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_contact` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone_contact` varchar(20) NOT NULL DEFAULT '',
  `id_client` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_contact`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `contacts_clients` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id_contact`, `name_contact`, `email`, `phone_contact`, `id_client`)
VALUES
	(32,'Arturo Acevedo','arturoacevedob@gmail.com','5549114493',43);

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ground_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ground_type`;

CREATE TABLE `ground_type` (
  `id_ground_type` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ground_type` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_ground_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ground_type` WRITE;
/*!40000 ALTER TABLE `ground_type` DISABLE KEYS */;

INSERT INTO `ground_type` (`id_ground_type`, `ground_type`)
VALUES
	(1,'Americano'),
	(2,'Espresso'),
	(3,'1'),
	(4,'2'),
	(5,'3'),
	(6,'4'),
	(7,'5'),
	(8,'6'),
	(9,'7');

/*!40000 ALTER TABLE `ground_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id_image` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) unsigned NOT NULL,
  `image_path` varchar(500) NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `image_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id_image`, `id_product`, `image_path`)
VALUES
	(18,91,'images/productos/cafe/capelticorgánico_1kg.jpg'),
	(19,92,'images/productos/cafe/capelticorgánicogourmet_1kg.jpg');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id_order` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` int(11) unsigned NOT NULL,
  `id_address` int(11) unsigned NOT NULL,
  `id_` int(11) DEFAULT NULL,
  `date` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id_order`),
  KEY `id_client` (`id_client`),
  KEY `id_address` (`id_address`),
  CONSTRAINT `order_address` FOREIGN KEY (`id_address`) REFERENCES `addresses` (`id_address`) ON DELETE CASCADE,
  CONSTRAINT `order_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table orders_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders_items`;

CREATE TABLE `orders_items` (
  `id_orders_items` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) unsigned NOT NULL,
  `id_weight_price` int(11) unsigned NOT NULL,
  `id_ground_type` int(11) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id_orders_items`),
  KEY `id_product` (`id_product`),
  KEY `id_weight_price` (`id_weight_price`),
  KEY `id_ground_type` (`id_ground_type`),
  CONSTRAINT `orders_detail_ground_type` FOREIGN KEY (`id_ground_type`) REFERENCES `ground_type` (`id_ground_type`) ON DELETE CASCADE,
  CONSTRAINT `orders_detail_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE,
  CONSTRAINT `orders_detail_weight_price` FOREIGN KEY (`id_weight_price`) REFERENCES `weight_price` (`id_weight_price`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id_product` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_product` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `notes` varchar(1000) DEFAULT '',
  `client_type` int(12) DEFAULT '0',
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id_product`, `name_product`, `description`, `notes`, `client_type`, `id_category`)
VALUES
	(91,'Capeltic Orgánico','Un café de preparación americana con excelente calidad que pocos cafés en el mercado nacional logran ofrecer.','Este café presenta un aroma herbal, una acidez cítrica, un cuerpo medio y sabor con notas a madera y caramelo.',1,1),
	(92,'Capeltic Orgánico Gourmet','Descripción','Notas',1,1);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table weight_price
# ------------------------------------------------------------

DROP TABLE IF EXISTS `weight_price`;

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
  KEY `id_product` (`id_product`),
  CONSTRAINT `weight_price_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `weight_price` WRITE;
/*!40000 ALTER TABLE `weight_price` DISABLE KEYS */;

INSERT INTO `weight_price` (`id_weight_price`, `id_product`, `weight1`, `weight2`, `weight3`, `price1`, `price2`, `price3`)
VALUES
	(39,91,250,500,1000,65,105,190),
	(40,92,NULL,500,NULL,NULL,295,NULL);

/*!40000 ALTER TABLE `weight_price` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

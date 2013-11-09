-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2013 at 03:33 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `palcineweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pal_banner`
--

CREATE TABLE `pal_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `banner_link` varchar(500) NOT NULL,
  `banner_page` varchar(50) NOT NULL,
  `probability` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pal_city`
--

CREATE TABLE `pal_city` (
  `id` varchar(5) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `country_id` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `city_pk` (`id`,`country_id`),
  KEY `fk_city_country` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pal_city`
--

INSERT INTO `pal_city` (`id`, `name`, `country_id`) VALUES
('sps', 'San Pedro Sula', 'hn'),
('tgu', 'Tegucigalpa', 'hn');

-- --------------------------------------------------------

--
-- Table structure for table `pal_country`
--

CREATE TABLE `pal_country` (
  `id` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `dial_code` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country_pk` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pal_country`
--

INSERT INTO `pal_country` (`id`, `name`, `dial_code`) VALUES
('hn', 'Honduras', '50');

-- --------------------------------------------------------

--
-- Table structure for table `pal_franchise`
--

CREATE TABLE `pal_franchise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pal_franchise`
--

INSERT INTO `pal_franchise` (`id`, `name`, `description`) VALUES
(1, 'Metrocinemas', 'Metrocinemas'),
(2, 'Cinepolis', 'Cinepolis');

-- --------------------------------------------------------

--
-- Table structure for table `pal_genre`
--

CREATE TABLE `pal_genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pal_genre`
--

INSERT INTO `pal_genre` (`id`, `name`) VALUES
(1, 'Comedia');

-- --------------------------------------------------------

--
-- Table structure for table `pal_migration`
--

CREATE TABLE `pal_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pal_migration`
--

INSERT INTO `pal_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1382674011),
('m131024_214700_create_database_structure', 1383105781);

-- --------------------------------------------------------

--
-- Table structure for table `pal_movie`
--

CREATE TABLE `pal_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `name_english` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `release_date` datetime DEFAULT NULL,
  `length` varchar(100) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `is_premiere` int(1) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image_thumbnail` varchar(500) NOT NULL,
  `image_thumbnail2x` varchar(500) NOT NULL,
  `trailer_link` varchar(500) NOT NULL,
  `raiting` float(10,2) NOT NULL,
  `restriction` varchar(50) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_movie_genre` (`genre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pal_movie`
--

INSERT INTO `pal_movie` (`id`, `name`, `name_english`, `description`, `release_date`, `length`, `genre_id`, `is_premiere`, `image`, `image_thumbnail`, `image_thumbnail2x`, `trailer_link`, `raiting`, `restriction`, `create_time`, `create_user`, `update_time`, `update_user`) VALUES
(1, 'Nemo', 'Finding Nemo', 'Encontrando a nemo', '2013-10-01 00:00:00', '1', 1, 1, '2.jpg', '1', '1', '1', 4.00, 'Todo publico', NULL, NULL, NULL, NULL),
(7, 'Gravedad', 'Gravity', 'La Dra. Stone es una brillante Ingeniera en Medicina que está en su primera misión en un transbordador, con el veterano astronauta Matt Kowalsky al mando de su último vuelo antes de retirarse. En un paseo espacial, aparentemente de rutina, se desencadena el desastre. El transbordador queda destruido, dejando a Stone y Kowalsky completamente solos, unidos el uno al otro y dando vueltas en la oscuridad.', '2013-10-04 00:00:00', '91', 1, 1, 'gravedad-cartel.jpg', 'gravedad-cartel.jpg', 'gravedad-cartel.jpg', 'http://www.youtube.com/watch?v=Ihv-Md2p8GU', 0.00, 'Mayores de 15', NULL, NULL, NULL, NULL),
(8, 'Aprendices fuera de línea', 'The Internship', 'Billy (Vince Vaughn) y Nick (Owen Wilson) son vendedores cuyas carreras han sido bombardeada por el mundo digital. Intentando probar que no son obsoletos, ellos desafían todos los obstáculos y aplican para una pasantía en Google, junto a un batallón de brillantes estudiantes. Sin embargo, entrar a la pasantía es tan sólo el comienzo. Ahora deben competir contra un grupo de los mejores estudiantes del país, genios de la tecnología y Billy y Nick les probarán que la necesidad es la madre de toda r', '2013-06-07 00:00:00', '117', 1, 1, 'aprendices-fuera-de-linea-cartel.jpg', 'aprendices-fuera-de-linea-cartel.jpg', 'aprendices-fuera-de-linea-cartel.jpg', 'http://www.youtube.com/watch?v=MfiyRWeWOUU', 0.00, 'Todo publico', NULL, NULL, NULL, NULL),
(9, 'Lluvia de hamburguesas', 'Cloudy 2: Revenge of the Leftovers', 'Secuela de Lluvia de hamburguesas, que está en el 8vo puesto de las mejores películas del 2009. \r\nEn esta nueva aventura Flint y Sam regresan junto al mono, el policía y Brent el hombre pollo, a su ciudad de origen pero descubren que la comida que allí habia quedado a tomado vida propia y desarrollado un ecosistema propio que está saliendose fuera de control y pronto podría llegar a invadir el continente. Flint y Sam deben encontrar la manera de ponerle fin a la maquina que comenzó con esta locu', '2013-11-07 00:00:00', '90', 1, 1, 'lluvia-de-hamburguesas-2-cartel.jpg', 'lluvia-de-hamburguesas-2-cartel.jpg', 'lluvia-de-hamburguesas-2-cartel.jpg', 'www.youtube.com', 0.00, 'Todo publico', NULL, NULL, NULL, NULL),
(10, 'Thor: Un Mundo Oscuro', 'Thor: The Dark World ', 'THOR: UN MUNDO OSCURO, continúa las aventuras de Thor,mientras lucha por salvar la Tierra y la totalidad de los Nueve Reinos de un sombrío enemigo, más antiguo que el universo mismo, Thor pelea para restablecer el orden a través del cosmos… pero una antigua raza liderada por el vengativo Malekith regresa para sumergir nuevamente al universo en la oscuridad. Frente a un enemigo que ni Odin ni Asgard pueden resistir, Thor debe embarcarse en su viaje más peligroso y personal a la vez, que lo reunir', '2013-11-01 00:00:00', '112', 1, 1, 'thor the dark world poster.jpg', 'NEl1gEAb2JjRoo_1.jpg', 'NEl1gEAb2JjRoo_1.jpg', 'www.youtube.com', 0.00, 'Todo publico', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pal_movie_comment`
--

CREATE TABLE `pal_movie_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_movie_comment` (`movie_id`),
  KEY `fk_movie_comment_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pal_movie_vote`
--

CREATE TABLE `pal_movie_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote` int(1) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `movie_id` (`movie_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pal_new`
--

CREATE TABLE `pal_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `is_published` int(1) DEFAULT NULL,
  `url` varchar(500) NOT NULL,
  `image_thumbnail` varchar(500) NOT NULL,
  `image_thumbnail2x` varchar(500) NOT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pal_page`
--

CREATE TABLE `pal_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pal_room`
--

CREATE TABLE `pal_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `is_3d` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_room_theater` (`theater_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pal_room`
--

INSERT INTO `pal_room` (`id`, `name`, `theater_id`, `is_3d`) VALUES
(1, 'Metromall - Sala 1', 1, 0),
(2, 'Metromall - Sala 2', 1, 0),
(3, 'Sala 1 Cascadas', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pal_room_time`
--

CREATE TABLE `pal_room_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_room_time` (`room_id`),
  KEY `fk_room_movie` (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pal_room_time`
--

INSERT INTO `pal_room_time` (`id`, `room_id`, `time`, `movie_id`) VALUES
(1, 2, '17:00:00', 1),
(2, 1, '17:00:00', 1),
(3, 3, '23:00:00', 8),
(6, 2, '19:00:00', 10),
(7, 2, '22:00:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pal_theater`
--

CREATE TABLE `pal_theater` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `franchise_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `price_3d` varchar(50) NOT NULL,
  `is_tuesday_half_price` int(1) NOT NULL,
  `country_id` varchar(2) NOT NULL,
  `city_id` varchar(5) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_theater_franchise` (`franchise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pal_theater`
--

INSERT INTO `pal_theater` (`id`, `franchise_id`, `name`, `address`, `latitude`, `longitude`, `price`, `price_3d`, `is_tuesday_half_price`, `country_id`, `city_id`, `create_time`, `create_user`, `update_time`, `update_user`) VALUES
(1, 1, 'Metrocinemas SPS', 'metromall', '1', '1', '1', '1', 1, 'hn', 'tgu', NULL, NULL, NULL, NULL),
(2, 2, 'Cascadas Mall', 'Cascada', '1', '1', '1', '1', 1, 'hn', 'sps', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pal_user`
--

CREATE TABLE `pal_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `temp_password` varchar(500) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bbpin` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_validated` int(1) NOT NULL,
  `validation_code` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `country_id` varchar(2) NOT NULL,
  `city_id` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pal_city`
--
ALTER TABLE `pal_city`
  ADD CONSTRAINT `fk_city_country` FOREIGN KEY (`country_id`) REFERENCES `pal_country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pal_movie`
--
ALTER TABLE `pal_movie`
  ADD CONSTRAINT `fk_movie_genre` FOREIGN KEY (`genre_id`) REFERENCES `pal_genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pal_movie_comment`
--
ALTER TABLE `pal_movie_comment`
  ADD CONSTRAINT `fk_movie_comment_user` FOREIGN KEY (`user_id`) REFERENCES `pal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_comment` FOREIGN KEY (`movie_id`) REFERENCES `pal_movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pal_movie_vote`
--
ALTER TABLE `pal_movie_vote`
  ADD CONSTRAINT `fk_movie_vote_user` FOREIGN KEY (`user_id`) REFERENCES `pal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_vote` FOREIGN KEY (`movie_id`) REFERENCES `pal_movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pal_room`
--
ALTER TABLE `pal_room`
  ADD CONSTRAINT `fk_room_theater` FOREIGN KEY (`theater_id`) REFERENCES `pal_theater` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pal_room_time`
--
ALTER TABLE `pal_room_time`
  ADD CONSTRAINT `fk_room_movie` FOREIGN KEY (`movie_id`) REFERENCES `pal_movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_room_time` FOREIGN KEY (`room_id`) REFERENCES `pal_room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pal_theater`
--
ALTER TABLE `pal_theater`
  ADD CONSTRAINT `fk_theater_franchise` FOREIGN KEY (`franchise_id`) REFERENCES `pal_franchise` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

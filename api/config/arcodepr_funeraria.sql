-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2020 at 06:51 PM
-- Server version: 10.3.24-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arcodepr_funeraria`
--
CREATE DATABASE IF NOT EXISTS `arcodepr_funeraria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `arcodepr_funeraria`;

-- --------------------------------------------------------

--
-- Table structure for table `cementeries`
--
-- Creation: Aug 14, 2020 at 07:26 PM
-- Last update: Sep 28, 2020 at 06:49 PM
--

DROP TABLE IF EXISTS `cementeries`;
CREATE TABLE IF NOT EXISTS `cementeries` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `cementeries`
--

TRUNCATE TABLE `cementeries`;
--
-- Dumping data for table `cementeries`
--

INSERT DELAYED IGNORE INTO `cementeries` (`id`, `name`, `active`) VALUES
(1, 'CEMENTERIO AMBROSIO O\'HIGGINS', 1),
(2, 'CEMENTERIO EL PRINCIPAL', 1),
(3, 'CEMENTERIO CATÓLICO', 1),
(4, 'CEMENTERIO CATÓLICO BAJOS DE MENA', 1),
(5, 'CEMENTERIO COMUNAL DE MONTE NEGRO', 1),
(6, 'CEMENTERIO COMUNITARIO LOMAS DE CALEU', 1),
(7, 'CEMENTERIO GENERAL', 1),
(8, 'CEMENTERIO HACIENDA SAN VICENTE', 1),
(9, 'CEMENTERIO ISRAELITA', 1),
(10, 'CEMENTERIO JARDIN DE ALMAS', 1),
(11, 'CEMENTERIO JARDIN SACRAMENTAL', 1),
(12, 'PARROQUIAL DE MELIPPILLA', 1),
(13, 'CEMENTERIO MEMORY PARK', 1),
(14, 'CEMENTERIO METROPOLITANO', 1),
(15, 'CEMENTERIO MUNICIPAL DE ALHUE', 1),
(16, 'CEMENTERIO MUNICIPAL DE COLINA', 1),
(17, 'CEMENTERIO MUNICIPAL DE EL MONTE', 1),
(18, 'CEMENTERIO MUNICIPAL DE MELIPILLA', 1),
(19, 'CEMENTERIO MUNICIPAL DE PUDAHUEL', 1),
(20, 'CEMENTERIO MUNICIPAL DE QUILICURA', 1),
(21, 'CEMENTERIO MUNICIPAL DE SAN JOSE DE MAIPO', 1),
(22, 'CEMENTERIO PARQUE DEL RECUERDO-AMERICO VESPUCIO', 1),
(23, 'CEMENTERIO PARQUE DEL RECUERDO- CORDILLERA', 1),
(24, 'CEMENTERIO PARQUE DEL RECUERDO-PADRE HURTADO', 1),
(25, 'CEMENTERIO PARQUE DEL SENDERO-MAIPÚ', 1),
(26, 'CEMENTERIO PARQUE DEL SENDERO-SAN BERNARDO', 1),
(27, 'CEMENTERIO PARQUE EL PRADO', 1),
(28, 'CEMENTERIO PARQUE CAMINO A CANAÁN', 1),
(29, 'CEMENTERIO PARQUE JARDIN SAN JOAQUIN', 1),
(30, 'CEMENTERIO PARQUE LAS FLORES-MELIPILLA', 1),
(31, 'CEMENTERIO PARQUE PEÑAFLOR', 1),
(32, 'CEMENTERIO PARQUE SANTIAGO', 1),
(33, 'CEMENTERIO PARROQUIAL CHOCALAN', 1),
(34, 'CEMENTERIO PARROQUIAL DE ACULEO-PINTUE', 1),
(35, 'CEMENTERIO PARROQUIAL DE BUIN', 1),
(36, 'CEMENTERIO PARROQUIAL DE HUELQUEN', 1),
(37, 'CEMENTERIO PARROQUIAL DE ISLA DE MAIPO', 1),
(38, 'CEMENTERIO PARROQUIAL DE LAMPA', 1),
(39, 'CEMENTERIO PARROQUIAL DE MAIPU', 1),
(40, 'CEMENTERIO PARROQUIAL DE PAINE', 1),
(41, 'CEMENTERIO PARROQUIAL DE PEÑAFLOR', 1),
(42, 'CEMENTERIO PARROQUIAL DE SAN BERNARDO', 1),
(43, 'CEMENTERIO PARROQUIAL DE SAN PEDRO', 1),
(44, 'CEMENTERIO PARROQUIAL DE TALAGANTE', 1),
(45, 'CEMENTERIO PARROQUIAL DE TIL-TIL', 1),
(46, 'CEMENTERIO RUSO ORTODOXO', 1),
(47, 'CEMENTERIO VERBO DIVINO', 1),
(48, 'CEMENTERIO PARQUE DEL SENDERO-ARICA', 1),
(49, 'CEMENTERIO PARQUE DEL SENDERO-IQUIQUE', 1),
(50, 'CEMENTERIO PARQUE TOPATER', 1),
(51, 'CEMENTERIO PARQUE DEL LOA', 1),
(52, 'CEMENTERIO PARQUE TOPATER', 1),
(53, 'CEMENTERIO PARQUE DE COPIAPO', 1),
(54, 'CEMENTERIO PARQUE DE VALLENAR', 1),
(55, 'CEMENTERIO CATOLICO DE COQUIMBO', 1),
(56, 'CEMENTERIO MUNICIPAL DE LA SERENA', 1),
(57, 'CEMENTERIO PARQUE DE COQUIMBO', 1),
(58, 'CEMENTERIO PARQUE DE LA SERENA', 1),
(59, 'CEMENTERIO PARQUE LA FORESTA', 1),
(60, 'CEMENTERIO PARQUE BACO', 1),
(61, 'CEMENTERIO PARQUE LOS PENSAMIENTOS', 1),
(62, 'CEMENTERIO PARQUE LOS PENSAMIENTOS', 1),
(63, 'CEMENTERIO PARQUE DEL MAR', 1),
(64, 'CEMENTERIO PARUQUE DEL SENDERO-QUILPUE', 1),
(65, 'CEMENTERIO PARQUE DEL SENDERO-SAN ANTONIO', 1),
(66, 'CEMENTERIO PARQUE DEL SENDERO-VALPARAISO', 1),
(67, 'CEMENTERIO PARQUE DEL SENDERO-VILLA ALEMANA', 1),
(68, 'CEMENTERIO PARQUE LOS PENSAMIENTOS', 1),
(69, 'CEMENTERIO PARQUE QUILLOTA', 1),
(70, 'CEMENTERIO PARQUE TERESA DE JESUS', 1),
(71, 'CEMENTERIO PARQUE VALLE DE AUCO', 1),
(72, 'CEMENTERIO PARROQUIAL DE CON-CON', 1),
(73, 'CEMENTERIO PARROQUIAL DE LOS ANDES', 1),
(74, 'CEMENTERIO PARROQUIAL DE LLO-LLEO', 1),
(75, 'CEMENTERIO PARROQUIAL DE PUTAENDO', 1),
(76, 'CEMENTERIO PARROQUIAL DE QUILLOTA', 1),
(77, 'CEMENTERIO PARROQUIAL DE SAN ANTONIO', 1),
(78, 'CEMENTERIO PARROQUIAL DE SAN ESTEBAN', 1),
(79, 'CEMENTERIO PARROQUIAL DE ZAPALLAR', 1),
(80, 'CEMENTERIO MUNICIPAL DE SAN FERNANDO', 1),
(81, 'CEMENTERIO PARQUE SAN FERNANDO', 1),
(82, 'CEMENTERIO PARQUE DEL SENDERO-RANCAGUA', 1),
(83, 'CEMENTERIO PARQUE JARDIN LAS FLORES-RANCAGUA', 1),
(84, 'CEMENTERIO PARQUE SAN FERNANDO', 1),
(85, 'CEMENTERIO PARROQUIAL DE NAVIDAD', 1),
(86, 'CEMENTERIO PARQUE DEL MAULE', 1),
(87, 'CEMENTERIO PARQUE MUNICIPAL DE CAUQUENES', 1),
(88, 'CEMENTERIO PARROQUIAL DE CAUQUENES', 1),
(89, 'CEMENTERIO PARQUE DE CURICO', 1),
(90, 'CEMENTERIO PARQUE DE LAS FLORES-SAN CLEMENTE', 1),
(91, 'CEMENTERIO PARQUE LAS ROSAS-LINARES', 1),
(92, 'CEMENTERIO PARQUE LAS ROSAS-TALCA', 1),
(93, 'CEMENTERIO PARQUE LAS FLORES-CHILLAN', 1),
(94, 'CEMENTERIO PARQUE LOS HEROES', 1),
(95, 'CEMENTERIO PARQUE DEL PACIFICO', 1),
(96, 'CEMENTERIO GENERAL DE CONCEPCION', 1),
(97, 'CEMENTERIO MUNICIPAL DE ARAUCO', 1),
(98, 'CEMENTERIO PARQUE DEL SENDERO-CONCEPCION', 1),
(99, 'VCEMENTERIO PARQUE LAS FLORES-SAN CARLOS', 1),
(100, 'CEMENTERIO PARQUE LAS FLORES-TALCAHUANO', 1),
(101, 'CEMENTERIO PARQUE SAN PEDRO', 1),
(102, 'CEMENTERIO PARQUE SANTA MARIA', 1),
(103, 'CEMENTERIO PARROQUIAL DE YUMBEL', 1),
(104, 'CEMENTERIO CEMENTERIO DE LABRANZA', 1),
(105, 'CEMENTERIO GENERAL DE TEMUCO', 1),
(106, 'CEMENTERIO GENERAL DE TRAIGUEN', 1),
(107, 'PARQUE DEL SENDERO-TEMUCO', 1),
(108, 'PARQUE LAS FLORES-PUCON', 1),
(109, 'PARQUE JARDIN LAS FLORES-TEMUCO', 1),
(110, 'CEMENTERIO ALEMAN DE OSORNO', 1),
(111, 'CEMENTERIO CATOLICO DE OSORNO', 1),
(112, 'CEMENTERIO CATOLICO DE PTO MONTT', 1),
(113, 'CEMENTERIO CATOLICO DE PUERTO VARAS', 1),
(114, 'CEMENTERIO CATOLICO DE QUELLON', 1),
(115, 'CEMENTERIO MUNICIPAL DE OSORNO', 1),
(116, 'PARQUE AUSTRAL', 1),
(117, 'PARQUE DE LA ESPERANZA', 1),
(118, 'PARQUE JARDIN LAS FLORES-VILLARRICA', 1),
(119, 'PARQUE OSORNO', 1),
(120, 'PARQUE VALLE DE CEDRON', 1),
(121, 'CEMENTERIO PARROQUIAL DE LENCA', 1),
(122, 'CEMENTERIO PARROQUIAL DE PANGUIPULLI', 1),
(123, 'PARQUE CRUZ DE FROWARD', 1),
(124, 'PARQUE DE PUNTA ARENAS', 1),
(125, 'Editado cementerio', 0),
(126, 'Nuevo Cementerio', 0),
(127, 'Nuevo Cementerio', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comunes`
--
-- Creation: Aug 14, 2020 at 08:55 PM
--

DROP TABLE IF EXISTS `comunes`;
CREATE TABLE IF NOT EXISTS `comunes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `region_id` int(8) NOT NULL,
  `region_name` varchar(128) NOT NULL,
  `city_id` int(8) NOT NULL,
  `city_name` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=347 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `comunes`
--

TRUNCATE TABLE `comunes`;
--
-- Dumping data for table `comunes`
--

INSERT DELAYED IGNORE INTO `comunes` (`id`, `name`, `region_id`, `region_name`, `city_id`, `city_name`, `active`) VALUES
(1, 'Arica', 1, 'Arica y Parinacota', 1, 'Arica', 1),
(2, 'Camarones', 1, 'Arica y Parinacota', 1, 'Arica', 1),
(3, 'Putre', 1, 'Arica y Parinacota', 2, 'Parinacota', 1),
(4, 'General Lagos', 1, 'Arica y Parinacota', 2, 'Parinacota', 1),
(5, 'Iquique', 2, 'Tarapacá', 3, 'Iquique', 1),
(6, 'Alto Hospicio', 2, 'Tarapacá', 3, 'Iquique', 1),
(7, 'Pozo Almonte', 2, 'Tarapacá', 4, 'Tamarugal', 1),
(8, 'Camiña', 2, 'Tarapacá', 4, 'Tamarugal', 1),
(9, 'Colchane', 2, 'Tarapacá', 4, 'Tamarugal', 1),
(10, 'Huara', 2, 'Tarapacá', 4, 'Tamarugal', 1),
(11, 'Pica', 2, 'Tarapacá', 4, 'Tamarugal', 1),
(12, 'Antofagasta', 3, 'Antofagasta', 5, 'Antofagasta', 1),
(13, 'Mejillones', 3, 'Antofagasta', 5, 'Antofagasta', 1),
(14, 'Sierra Gorda', 3, 'Antofagasta', 5, 'Antofagasta', 1),
(15, 'Taltal', 3, 'Antofagasta', 5, 'Antofagasta', 1),
(16, 'Calama', 3, 'Antofagasta', 6, 'El Loa', 1),
(17, 'Ollagüe', 3, 'Antofagasta', 6, 'El Loa', 1),
(18, 'San Pedro de Atacama', 3, 'Antofagasta', 6, 'El Loa', 1),
(19, 'Tocopilla', 3, 'Antofagasta', 7, 'Tocopilla', 1),
(20, 'María Elena', 3, 'Antofagasta', 7, 'Tocopilla', 1),
(21, 'Copiapó', 4, 'Atacama', 8, 'Copiapó', 1),
(22, 'Caldera', 4, 'Atacama', 8, 'Copiapó', 1),
(23, 'Tierra Amarilla', 4, 'Atacama', 8, 'Copiapó', 1),
(24, 'Chañaral', 4, 'Atacama', 9, 'Chañaral', 1),
(25, 'Diego de Almagro', 4, 'Atacama', 9, 'Chañaral', 1),
(26, 'Vallenar', 4, 'Atacama', 10, 'Huasco', 1),
(27, 'Alto del Carmen', 4, 'Atacama', 10, 'Huasco', 1),
(28, 'Freirina', 4, 'Atacama', 10, 'Huasco', 1),
(29, 'Huasco', 4, 'Atacama', 10, 'Huasco', 1),
(30, 'La Serena', 5, 'Coquimbo', 11, 'Elqui', 1),
(31, 'Coquimbo', 5, 'Coquimbo', 11, 'Elqui', 1),
(32, 'Andacollo', 5, 'Coquimbo', 11, 'Elqui', 1),
(33, 'La Higuera', 5, 'Coquimbo', 11, 'Elqui', 1),
(34, 'Paihuano', 5, 'Coquimbo', 11, 'Elqui', 1),
(35, 'Vicuña', 5, 'Coquimbo', 11, 'Elqui', 1),
(36, 'Illapel', 5, 'Coquimbo', 12, 'Choapa', 1),
(37, 'Canela', 5, 'Coquimbo', 12, 'Choapa', 1),
(38, 'Los Vilos', 5, 'Coquimbo', 12, 'Choapa', 1),
(39, 'Salamanca', 5, 'Coquimbo', 12, 'Choapa', 1),
(40, 'Ovalle', 5, 'Coquimbo', 13, 'Limarí', 1),
(41, 'Combarbalá', 5, 'Coquimbo', 13, 'Limarí', 1),
(42, 'Monte Patria', 5, 'Coquimbo', 13, 'Limarí', 1),
(43, 'Punitaqui', 5, 'Coquimbo', 13, 'Limarí', 1),
(44, 'Río Hurtado', 5, 'Coquimbo', 13, 'Limarí', 1),
(45, 'Valparaíso', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(46, 'Casablanca', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(47, 'Concón', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(48, 'Juan Fernández', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(49, 'Puchuncaví', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(50, 'Quintero', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(51, 'Viña del Mar', 6, 'Valparaíso', 14, 'Valparaíso', 1),
(52, 'Isla de Pascua', 6, 'Valparaíso', 15, 'Isla de Pascua', 1),
(53, 'Los Andes', 6, 'Valparaíso', 16, 'Los Andes', 1),
(54, 'Calle Larga', 6, 'Valparaíso', 16, 'Los Andes', 1),
(55, 'Rinconada', 6, 'Valparaíso', 16, 'Los Andes', 1),
(56, 'San Esteban', 6, 'Valparaíso', 16, 'Los Andes', 1),
(57, 'La Ligua', 6, 'Valparaíso', 17, 'Petorca', 1),
(58, 'Cabildo', 6, 'Valparaíso', 17, 'Petorca', 1),
(59, 'Papudo', 6, 'Valparaíso', 17, 'Petorca', 1),
(60, 'Petorca', 6, 'Valparaíso', 17, 'Petorca', 1),
(61, 'Zapallar', 6, 'Valparaíso', 17, 'Petorca', 1),
(62, 'Quillota', 6, 'Valparaíso', 16, 'Quillota', 1),
(63, 'La Calera', 6, 'Valparaíso', 16, 'Quillota', 1),
(64, 'Hijuelas', 6, 'Valparaíso', 16, 'Quillota', 1),
(65, 'La Cruz', 6, 'Valparaíso', 16, 'Quillota', 1),
(66, 'Nogales', 6, 'Valparaíso', 16, 'Quillota', 1),
(67, 'San Antonio', 6, 'Valparaíso', 17, 'San Antonio', 1),
(68, 'Algarrobo', 6, 'Valparaíso', 17, 'San Antonio', 1),
(69, 'Cartagena', 6, 'Valparaíso', 17, 'San Antonio', 1),
(70, 'El Quisco', 6, 'Valparaíso', 17, 'San Antonio', 1),
(71, 'El Tabo', 6, 'Valparaíso', 17, 'San Antonio', 1),
(72, 'Santo Domingo', 6, 'Valparaíso', 17, 'San Antonio', 1),
(73, 'San Felipe', 6, 'Valparaíso', 18, 'San Felipe de Aconcagua', 1),
(74, 'Catemu', 6, 'Valparaíso', 18, 'San Felipe de Aconcagua', 1),
(75, 'Llay-Llay', 6, 'Valparaíso', 18, 'San Felipe de Aconcagua', 1),
(76, 'Panquehue', 6, 'Valparaíso', 18, 'San Felipe de Aconcagua', 1),
(77, 'Putaendo', 6, 'Valparaíso', 18, 'San Felipe de Aconcagua', 1),
(78, 'Santa María', 6, 'Valparaíso', 18, 'San Felipe de Aconcagua', 1),
(79, 'Quilpué', 6, 'Valparaíso', 19, 'Marga Marga', 1),
(80, 'Limache', 6, 'Valparaíso', 19, 'Marga Marga', 1),
(81, 'Olmué', 6, 'Valparaíso', 19, 'Marga Marga', 1),
(82, 'Villa Alemana', 6, 'Valparaíso', 19, 'Marga Marga', 1),
(83, 'Santiago', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(84, 'Cerrillos', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(85, 'Cerro Navia', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(86, 'Conchalí', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(87, 'El Bosque', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(88, 'Estación Central', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(89, 'Huechuraba', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(90, 'Independencia', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(91, 'La Cisterna', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(92, 'La Florida', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(93, 'La Granja', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(94, 'La Pintana', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(95, 'La Reina', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(96, 'Las Condes', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(97, 'Lo Barnechea', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(98, 'Lo Espejo', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(99, 'Lo Prado', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(100, 'Macul', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(101, 'Maipú', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(102, 'Ñuñoa', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(103, 'Pedro Aguirre Cerda', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(104, 'Peñalolén', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(105, 'Providencia', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(106, 'Pudahuel', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(107, 'Quilicura', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(108, 'Quinta Normal', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(109, 'Recoleta', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(110, 'Renca', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(111, 'San Joaquín', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(112, 'San Miguel', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(113, 'San Ramón', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(114, 'Vitacura', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(115, 'Puente Alto', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(116, 'Pirque', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(117, 'San José de Maipo', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(118, 'Colina', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(119, 'Lampa', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(120, 'Til Til', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(121, 'San Bernardo', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(122, 'Buin', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(123, 'Calera de Tango', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(124, 'Paine', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(125, 'Melipilla', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(126, 'Alhué', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(127, 'Curacaví', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(128, 'María Pinto', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(129, 'San Pedro', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(130, 'Talagante', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(131, 'El Monte', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(132, 'Isla de Maipo', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(133, 'Padre Hurtado', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(134, 'Peñaflor', 7, 'Metropolitana de Santiago', 33, 'Santiago', 1),
(135, 'Rancagua', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(136, 'Codegua', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(137, 'Coinco', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(138, 'Coltauco', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(139, 'Doñihue', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(140, 'Graneros', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(141, 'Las Cabras', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(142, 'Machalí', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(143, 'Malloa', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(144, 'Mostazal', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(145, 'Olivar', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(146, 'Peumo', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(147, 'Pichidegua', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(148, 'Quinta de Tilcoco', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(149, 'Rengo', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(150, 'Requínoa', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(151, 'San Vicente', 8, 'Libertador General Bernardo O’Higgins', 20, 'Cachapoal', 1),
(152, 'Pichilemu', 8, 'Libertador General Bernardo O’Higgins', 21, 'Cardenal Caro', 1),
(153, 'La Estrella', 8, 'Libertador General Bernardo O’Higgins', 21, 'Cardenal Caro', 1),
(154, 'Litueche', 8, 'Libertador General Bernardo O’Higgins', 21, 'Cardenal Caro', 1),
(155, 'Marchihue', 8, 'Libertador General Bernardo O’Higgins', 21, 'Cardenal Caro', 1),
(156, 'Navidad', 8, 'Libertador General Bernardo O’Higgins', 21, 'Cardenal Caro', 1),
(157, 'Paredones', 8, 'Libertador General Bernardo O’Higgins', 21, 'Cardenal Caro', 1),
(158, 'San Fernando', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(159, 'Chépica', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(160, 'Chimbarongo', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(161, 'Lolol', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(162, 'Nancagua', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(163, 'Palmilla', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(164, 'Peralillo', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(165, 'Placilla', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(166, 'Pumanque', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(167, 'Santa Cruz', 8, 'Libertador General Bernardo O’Higgins', 22, 'Colchagua', 1),
(168, 'Talca', 9, 'Maule', 23, 'Talca', 1),
(169, 'Constitución', 9, 'Maule', 23, 'Talca', 1),
(170, 'Curepto', 9, 'Maule', 23, 'Talca', 1),
(171, 'Empedrado', 9, 'Maule', 23, 'Talca', 1),
(172, 'Maule', 9, 'Maule', 23, 'Talca', 1),
(173, 'Pelarco', 9, 'Maule', 23, 'Talca', 1),
(174, 'Pencahue', 9, 'Maule', 23, 'Talca', 1),
(175, 'Río Claro', 9, 'Maule', 23, 'Talca', 1),
(176, 'San Clemente', 9, 'Maule', 23, 'Talca', 1),
(177, 'San Rafael', 9, 'Maule', 23, 'Talca', 1),
(178, 'Cauquenes', 9, 'Maule', 24, 'Cauquenes', 1),
(179, 'Chanco', 9, 'Maule', 24, 'Cauquenes', 1),
(180, 'Pelluhue', 9, 'Maule', 24, 'Cauquenes', 1),
(181, 'Curicó', 9, 'Maule', 25, 'Curicó', 1),
(182, 'Hualañé', 9, 'Maule', 25, 'Curicó', 1),
(183, 'Licantén', 9, 'Maule', 25, 'Curicó', 1),
(184, 'Molina', 9, 'Maule', 25, 'Curicó', 1),
(185, 'Rauco', 9, 'Maule', 25, 'Curicó', 1),
(186, 'Romeral', 9, 'Maule', 25, 'Curicó', 1),
(187, 'Sagrada Familia', 9, 'Maule', 25, 'Curicó', 1),
(188, 'Teno', 9, 'Maule', 25, 'Curicó', 1),
(189, 'Vichuquén', 9, 'Maule', 25, 'Curicó', 1),
(190, 'Linares', 9, 'Maule', 26, 'Linares', 1),
(191, 'Colbún', 9, 'Maule', 26, 'Linares', 1),
(192, 'Longaví', 9, 'Maule', 26, 'Linares', 1),
(193, 'Parral', 9, 'Maule', 26, 'Linares', 1),
(194, 'Retiro', 9, 'Maule', 26, 'Linares', 1),
(195, 'San Javier', 9, 'Maule', 26, 'Linares', 1),
(196, 'Villa Alegre', 9, 'Maule', 26, 'Linares', 1),
(197, 'Yerbas Buenas', 9, 'Maule', 26, 'Linares', 1),
(198, 'Chillán', 10, 'Ñuble', 27, 'Chillán', 1),
(199, 'Bulnes', 10, 'Ñuble', 27, 'Chillán', 1),
(200, 'Chillán Viejo', 10, 'Ñuble', 27, 'Chillán', 1),
(201, 'El Carmen', 10, 'Ñuble', 27, 'Chillán', 1),
(202, 'Pemuco', 10, 'Ñuble', 27, 'Chillán', 1),
(203, 'Pinto', 10, 'Ñuble', 27, 'Chillán', 1),
(204, 'Quillón', 10, 'Ñuble', 27, 'Chillán', 1),
(205, 'San Ignacio', 10, 'Ñuble', 27, 'Chillán', 1),
(206, 'Yungay', 10, 'Ñuble', 27, 'Chillán', 1),
(207, 'Quirihue', 10, 'Ñuble', 27, 'Chillán', 1),
(208, 'Cobquecura', 10, 'Ñuble', 27, 'Chillán', 1),
(209, 'Coelemu', 10, 'Ñuble', 27, 'Chillán', 1),
(210, 'Ninhue', 10, 'Ñuble', 27, 'Chillán', 1),
(211, 'Portezuelo', 10, 'Ñuble', 27, 'Chillán', 1),
(212, 'Ránquil', 10, 'Ñuble', 27, 'Chillán', 1),
(213, 'Treguaco', 10, 'Ñuble', 27, 'Chillán', 1),
(214, 'San Carlos', 10, 'Ñuble', 27, 'Chillán', 1),
(215, 'Coihueco', 10, 'Ñuble', 27, 'Chillán', 1),
(216, 'Ñiquén', 10, 'Ñuble', 27, 'Chillán', 1),
(217, 'San Fabián', 10, 'Ñuble', 27, 'Chillán', 1),
(218, 'San Nicolás', 10, 'Ñuble', 27, 'Chillán', 1),
(219, 'Concepción', 11, 'Biobío', 28, 'Concepción', 1),
(220, 'Coronel', 11, 'Biobío', 28, 'Concepción', 1),
(221, 'Chiguayante', 11, 'Biobío', 28, 'Concepción', 1),
(222, 'Florida', 11, 'Biobío', 28, 'Concepción', 1),
(223, 'Hualqui', 11, 'Biobío', 28, 'Concepción', 1),
(224, 'Lota', 11, 'Biobío', 28, 'Concepción', 1),
(225, 'Penco', 11, 'Biobío', 28, 'Concepción', 1),
(226, 'San Pedro de La Paz', 11, 'Biobío', 28, 'Concepción', 1),
(227, 'Santa Juana', 11, 'Biobío', 28, 'Concepción', 1),
(228, 'Talcahuano', 11, 'Biobío', 28, 'Concepción', 1),
(229, 'Tomé', 11, 'Biobío', 28, 'Concepción', 1),
(230, 'Hualpén', 11, 'Biobío', 28, 'Concepción', 1),
(231, 'Lebu', 11, 'Biobío', 29, 'Arauco', 1),
(232, 'Arauco', 11, 'Biobío', 29, 'Arauco', 1),
(233, 'Cañete', 11, 'Biobío', 29, 'Arauco', 1),
(234, 'Contulmo', 11, 'Biobío', 29, 'Arauco', 1),
(235, 'Curanilahue', 11, 'Biobío', 29, 'Arauco', 1),
(236, 'Los Álamos', 11, 'Biobío', 29, 'Arauco', 1),
(237, 'Tirúa', 11, 'Biobío', 29, 'Arauco', 1),
(238, 'Los Ángeles', 11, 'Biobío', 30, 'Biobío', 1),
(239, 'Antuco', 11, 'Biobío', 30, 'Biobío', 1),
(240, 'Cabrero', 11, 'Biobío', 30, 'Biobío', 1),
(241, 'Laja', 11, 'Biobío', 30, 'Biobío', 1),
(242, 'Mulchén', 11, 'Biobío', 30, 'Biobío', 1),
(243, 'Nacimiento', 11, 'Biobío', 30, 'Biobío', 1),
(244, 'Negrete', 11, 'Biobío', 30, 'Biobío', 1),
(245, 'Quilaco', 11, 'Biobío', 30, 'Biobío', 1),
(246, 'Quilleco', 11, 'Biobío', 30, 'Biobío', 1),
(247, 'San Rosendo', 11, 'Biobío', 30, 'Biobío', 1),
(248, 'Santa Bárbara', 11, 'Biobío', 30, 'Biobío', 1),
(249, 'Tucapel', 11, 'Biobío', 30, 'Biobío', 1),
(250, 'Yumbel', 11, 'Biobío', 30, 'Biobío', 1),
(251, 'Alto Biobío', 11, 'Biobío', 30, '	 Biobío', 1),
(252, 'Temuco', 12, 'La Araucanía', 31, 'Cautín', 1),
(253, 'Carahue', 12, 'La Araucanía', 31, 'Cautín', 1),
(254, 'Cunco', 12, 'La Araucanía', 31, 'Cautín', 1),
(255, 'Curarrehue', 12, 'La Araucanía', 31, 'Cautín', 1),
(256, 'Freire', 12, 'La Araucanía', 31, 'Cautín', 1),
(257, 'Galvarino', 12, 'La Araucanía', 31, 'Cautín', 1),
(258, 'Gorbea', 12, 'La Araucanía', 31, 'Cautín', 1),
(259, 'Lautaro', 12, 'La Araucanía', 31, 'Cautín', 1),
(260, 'Loncoche', 12, 'La Araucanía', 31, 'Cautín', 1),
(261, 'Melipeuco', 12, 'La Araucanía', 31, 'Cautín', 1),
(262, 'Nueva Imperial', 12, 'La Araucanía', 31, 'Cautín', 1),
(263, 'Padre Las Casas', 12, 'La Araucanía', 31, 'Cautín', 1),
(264, 'Perquenco', 12, 'La Araucanía', 31, 'Cautín', 1),
(265, 'Pitrufquén', 12, 'La Araucanía', 31, 'Cautín', 1),
(266, 'Pucón', 12, 'La Araucanía', 31, 'Cautín', 1),
(267, 'Saavedra', 12, 'La Araucanía', 31, 'Cautín', 1),
(268, 'Teodoro Schmidt', 12, 'La Araucanía', 31, 'Cautín', 1),
(269, 'Toltén', 12, 'La Araucanía', 31, 'Cautín', 1),
(270, 'Vilcún', 12, 'La Araucanía', 31, 'Cautín', 1),
(271, 'Villarrica', 12, 'La Araucanía', 31, 'Cautín', 1),
(272, 'Cholchol', 12, 'La Araucanía', 31, 'Cautín', 1),
(273, 'Angol', 12, 'La Araucanía', 32, 'Malleco', 1),
(274, 'Collipulli', 12, 'La Araucanía', 32, 'Malleco', 1),
(275, 'Curacautín', 12, 'La Araucanía', 32, 'Malleco', 1),
(276, 'Ercilla', 12, 'La Araucanía', 32, 'Malleco', 1),
(277, 'Lonquimay', 12, 'La Araucanía', 32, 'Malleco', 1),
(278, 'Los Sauces', 12, 'La Araucanía', 32, 'Malleco', 1),
(279, 'Lumaco', 12, 'La Araucanía', 32, 'Malleco', 1),
(280, 'Purén', 12, 'La Araucanía', 32, 'Malleco', 1),
(281, 'Renaico', 12, 'La Araucanía', 32, 'Malleco', 1),
(282, 'Traiguén', 12, 'La Araucanía', 32, 'Malleco', 1),
(283, 'Victoria', 12, 'La Araucanía', 32, 'Malleco', 1),
(284, 'Valdivia', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(285, 'Corral', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(286, 'Lanco', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(287, 'Los Lagos', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(288, 'Máfil', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(289, 'Mariquina', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(290, 'Paillaco', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(291, 'Panguipulli', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(292, 'La Unión', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(293, 'Futrono', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(294, 'Lago Ranco', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(295, 'Río Bueno', 13, 'Los Ríos', 34, 'Los Ríos', 1),
(296, 'Puerto Montt', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(297, 'Calbuco', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(298, 'Cochamó', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(299, 'Fresia', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(300, 'Frutillar', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(301, 'Los Muermos', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(302, 'Llanquihue', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(303, 'Maullín', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(304, 'Puerto Varas', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(305, 'Castro', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(306, 'Ancud', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(307, 'Chonchi', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(308, 'Curaco de Vélez', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(309, 'Dalcahue', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(310, 'Puqueldón', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(311, 'Queilén', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(312, 'Quellón', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(313, 'Quemchi', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(314, 'Quinchao', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(315, 'Osorno', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(316, 'Puerto Octay', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(317, 'Purranque', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(318, 'Puyehue', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(319, 'Río Negro', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(320, 'San Juan de la Costa', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(321, 'San Pablo', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(322, 'Chaitén', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(323, 'Futaleufú', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(324, 'Hualaihué', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(325, 'Palena', 14, 'Los Lagos', 35, 'Los Lagos', 1),
(326, 'Coyhaique', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(327, 'Lago Verde', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(328, 'Aysén', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(329, 'Cisnes', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(330, 'Guaitecas', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(331, 'Cochrane', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(332, 'O`Higgins', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(333, 'Tortel', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(334, 'Chile Chico', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(335, 'Río Ibáñez', 15, 'Aysén del General Carlos Ibáñez del Campo', 36, 'Aysén', 1),
(336, 'Punta Arenas', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(337, 'Laguna Blanca', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(338, 'Río Verde', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(339, 'San Gregorio', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(340, 'Cabo de Hornos', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(341, 'Antártica', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(342, 'Porvenir', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(343, 'Primavera', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(344, 'Timaukel', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(345, 'Natales', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1),
(346, 'Torres del Paine', 16, 'Magallanes y la Antártica Chilena', 37, 'Magallanes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--
-- Creation: Sep 03, 2020 at 02:02 PM
-- Last update: Sep 28, 2020 at 05:19 PM
--

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `invoice` int(8) NOT NULL DEFAULT 0,
  `paid_date` date DEFAULT NULL,
  `date` date NOT NULL,
  `user_id` int(8) NOT NULL,
  `s_id` varchar(32) NOT NULL,
  `s_name` varchar(128) NOT NULL,
  `s_last_name` varchar(128) NOT NULL,
  `s_address` varchar(256) DEFAULT NULL,
  `s_region_id` int(8) DEFAULT NULL,
  `s_comune_id` int(8) DEFAULT NULL,
  `s_email` varchar(64) DEFAULT NULL,
  `s_mobile` varchar(64) DEFAULT NULL,
  `s_phone` varchar(64) DEFAULT NULL,
  `d_id` varchar(32) NOT NULL,
  `d_name` varchar(128) NOT NULL,
  `d_address` varchar(256) DEFAULT NULL,
  `d_region_id` int(8) DEFAULT NULL,
  `d_comune_id` int(8) DEFAULT NULL,
  `d_place` varchar(256) DEFAULT NULL,
  `d_marital_status` varchar(256) DEFAULT NULL,
  `d_occupation` varchar(256) DEFAULT NULL,
  `d_education` varchar(256) DEFAULT NULL,
  `c_church` varchar(128) DEFAULT NULL,
  `c_address` varchar(256) DEFAULT NULL,
  `c_region_id` int(8) DEFAULT NULL,
  `c_comune_id` int(8) DEFAULT NULL,
  `f_cementery_id` int(8) NOT NULL,
  `f_datetime` datetime NOT NULL,
  `v_service_id` int(8) NOT NULL,
  `v_provider_id` int(8) NOT NULL DEFAULT 1,
  `v_color` varchar(32) DEFAULT NULL,
  `v_include` text NOT NULL,
  `v_warning` text DEFAULT NULL,
  `v_observation` text DEFAULT NULL,
  `v_cost` int(16) NOT NULL DEFAULT 0,
  `v_discount` int(16) NOT NULL DEFAULT 0,
  `v_total` int(16) NOT NULL DEFAULT 0,
  `v_insurance_id` int(8) NOT NULL DEFAULT 0,
  `v_coverage` int(16) NOT NULL DEFAULT 0,
  `v_payment` int(16) NOT NULL DEFAULT 0,
  `p_transfer` tinyint(1) NOT NULL DEFAULT 0,
  `p_cash` tinyint(1) NOT NULL DEFAULT 0,
  `p_check` tinyint(1) NOT NULL DEFAULT 0,
  `p_check_defered` tinyint(1) NOT NULL DEFAULT 0,
  `p_credit_card` tinyint(1) NOT NULL DEFAULT 0,
  `p_other` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24373 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `contracts`
--

TRUNCATE TABLE `contracts`;
--
-- Dumping data for table `contracts`
--

INSERT DELAYED IGNORE INTO `contracts` (`id`, `invoice`, `paid_date`, `date`, `user_id`, `s_id`, `s_name`, `s_last_name`, `s_address`, `s_region_id`, `s_comune_id`, `s_email`, `s_mobile`, `s_phone`, `d_id`, `d_name`, `d_address`, `d_region_id`, `d_comune_id`, `d_place`, `d_marital_status`, `d_occupation`, `d_education`, `c_church`, `c_address`, `c_region_id`, `c_comune_id`, `f_cementery_id`, `f_datetime`, `v_service_id`, `v_provider_id`, `v_color`, `v_include`, `v_warning`, `v_observation`, `v_cost`, `v_discount`, `v_total`, `v_insurance_id`, `v_coverage`, `v_payment`, `p_transfer`, `p_cash`, `p_check`, `p_check_defered`, `p_credit_card`, `p_other`, `active`) VALUES
(24356, 0, NULL, '2020-08-18', 1, 'dfgsdfgdsfg', 'dfgsdfgsdf', 'sdfgsdfg', '', 1, 1, 'sdfgsdfg', 'sdfgdsfg', 'dfgsdfg', 'sdfgsdfg', 'sdfgsdfg', '', 1, 1, '', '', '', '', '', '', 1, 1, 1, '2020-08-18 17:54:00', 2, 1, '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1),
(24357, 12345, '2020-09-08', '2020-08-21', 1, '15315143-1', 'Andres', 'Robert', 'Santo Domingo 748', 7, 83, 'andres@gmail.com', '952094004', '', '12345678-9', 'Ricardo Reyes', 'Santo Domingo 123', 7, 121, 'Hospital San Juan de Dios', 'Casado', 'Bailarin', 'Media Completa', 'Capilla Sixtina', 'Pasaje Renato 123', 3, 17, 77, '2020-08-21 20:07:00', 5, 1, 'Gris', '', 'Tu familia siempre te recordará [1980 - 2020]', 'Es necesario incluir un diacono', 734234, 200000, 534234, 28, 300000, 234234, 0, 1, 0, 0, 0, 0, 1),
(24359, 0, NULL, '2020-09-08', 1, '15315143-1', 'Andres', 'Robert', 'Santo Domingo 748', 1, 1, 'fabian.rojas1308@gmai.l.com', '952094004', '', '12345678-9', 'Persona 1', 'Direccion 1', 1, 1, '', '', '', '', '', '', 1, 1, 2, '2020-08-31 19:50:00', 1, 1, 'Sin Color', 'Todo', 'Tu familia te quiere y siempre estarÃ¡s en nuestros corazones [1930 - 2020]', '', 235000, 0, 235000, 1, 0, 235000, 1, 0, 0, 0, 0, 0, 1),
(24360, 0, NULL, '2020-09-01', 1, '12312312-3', 'Andres', 'Robert', 'alsdkjlaskjd', 7, 126, 'edorobert@gmail.com', '952094004', '', '2131231-2', '123123123', '123123123', 7, 126, '', '', '', '', '', '', 7, 126, 3, '2020-08-31 20:04:00', 1, 1, 'Sin Color', 'sdefwdfcsadf', '', '', 250000, 0, 250000, 1, 0, 250000, 0, 0, 1, 0, 0, 0, 1),
(24361, 7890, '0000-00-00', '2020-09-01', 1, '7854464-3', 'JUAN CARLOS', 'FUENTES CORREA', 'CALLE EL DURAZNO #329', 8, 147, 'edo.robert@gmail.com', '989916983', '989916983', '4885575-K', 'ROSA AMELIA DIAZ ULLOA', 'EYZAGUIRRE #1422', 7, 115, 'HOSP SOTERO DEL RIO', 'VIUDA', 'PENSIONADA', 'BASICA', 'DOMICILIO', 'EYZAGUIRRE #1422', 7, 115, 4, '2020-08-02 21:00:00', 7, 1, 'Sin Color', 'ZDETJZSRTJ', '', 'TRASLADO VALOR ASDPIAJSÃ‘GKIN', 650000, 30000, 620000, 1, 620000, 0, 0, 0, 0, 0, 0, 1, 1),
(24362, 123456, '2020-09-01', '2020-09-01', 1, '12345678-9', 'Test', 'Test', 'Test', 1, 1, 'test@test.cl', '987657654', '', '12345678-9', 'Tester Tester', '', 1, 1, '', '', '', '', '', '', 1, 1, 5, '2020-10-22 08:30:00', 4, 1, '', 'Tests', '', '', 400000, 39976, 360024, 27, 200000, 160024, 0, 0, 1, 0, 0, 0, 1),
(24363, 0, NULL, '2020-09-01', 1, '12345678-9', 'Test 2', 'Test 2', 'Test 2', 1, 1, 'no informado', 'no informado', '123452345', '12345678-9', 'Test 2', '', 1, 1, '', '', '', '', '', '', 1, 1, 6, '2020-09-30 12:05:00', 1, 1, 'Sin Color', 'Test 2', '', '', 123456, 0, 123456, 1, 0, 123456, 1, 1, 1, 1, 0, 1, 1),
(24364, 0, NULL, '2020-09-02', 1, '7854464-3', 'JUAN CARLOS', 'FUENTES CORREA', 'CALLE EL DURAZNO #329', 8, 147, 'HOLA@YO.CL', '989916983', '297865645', '4885575-K', 'ROSA AMELIA DIAZ ULLOA', 'EYZAGUIRRE #1422', 7, 115, 'HOSP SOTERO DEL RIO', 'VIUDA', 'PENSIONADA', 'BASICA', 'DOMICILIO', 'EYZAGUIRRE #1422', 7, 115, 7, '2020-08-02 21:00:00', 7, 1, 'Sin Color', 'ZDETJZSRTJ', '', 'TRASLADO VALOR ASDPIAJSÃ‘GKIN', 650000, 30000, 620000, 1, 620000, 0, 0, 0, 0, 0, 0, 1, 0),
(24365, 2020, '2020-09-22', '2020-09-02', 1, '12345678-9', 'Test 2', 'Test 2', 'Test 2', 16, 341, 'no informado', 'no informado', '', '12345678-9', 'Test 2', '', 1, 1, '', '', '', '', '', '', 1, 1, 8, '2020-09-30 12:05:00', 1, 1, 'Sin Color', 'Test 2', '', '', 123456, 0, 123456, 29, 0, 123456, 1, 1, 1, 1, 1, 1, 1),
(24366, 0, '0000-00-00', '2020-09-08', 1, '13480264-2', 'KARINA ANDREA', 'ARIA DONOSO', 'MIRADOR AZUL #1447', 7, 92, 'FABIAN.ROJAS1308@GMAIL.COM', '998565606', '2231548975', '5474059-K', 'HPORTENSIA DEL TRANSITO CEA', 'MIRADOR AZUL #1447', 7, 92, 'DOMICILIO', 'VIUDA', 'PENSIONADA', 'BASICA', 'DOMICILIO', 'MIRADOR AZUL #1447', 7, 92, 3, '2020-09-01 20:53:00', 1, 1, 'Sin Color', 'VAN', '', '', 870000, 0, 870000, 31, 619000, 251000, 0, 0, 0, 0, 1, 0, 0),
(24367, 0, NULL, '2020-09-09', 1, '7854464-3', 'JUAN CARLOS', 'FUENTES CORREA', 'CALLE EL DURAZNO #329', 1, 1, 'R.R@GMAIL.COM', '989916983', '', '4885575-K', 'ROSA AMELIA DIAZ ULLOA', 'EYZAGUIRRE #1422', 1, 1, 'HOSP SOTERO DEL RIO', 'VIUDA', 'PENSIONADA', 'BASICA', 'DOMICILIO', 'EYZAGUIRRE #1422', 1, 1, 9, '2020-09-15 06:05:00', 1, 1, 'Sin Color', 'VAN', '', '', 800000, 100000, 700000, 1, 200000, 500000, 0, 0, 1, 0, 0, 0, 1),
(24368, 555, '0000-00-00', '2020-09-14', 1, '12345678-9', 'Francisco', 'Silva', 'aASDasd', 6, 69, 'andresrobert@icloud.com', '952094004', '', '12345678-9', 'Andres Robert', 'sdfsdgfbdfv', 8, 160, 'Casa', '', '', '', '', '', 7, 126, 10, '2020-09-14 13:03:00', 1, 1, 'Sin Color', 'Servicio de dflkasjldfkajsl', '', '', 400000, 0, 400000, 1, 0, 400000, 0, 0, 0, 1, 0, 0, 1),
(24369, 0, '0000-00-00', '2020-09-21', 1, '15315143-1', 'Andres', 'Robert', 'Santo Domingo 123', 7, 126, 'andresrobert@icloud.com', '952094004', '', '15315143-1', 'Andres Robert', 'Santo Domingo 123', 7, 127, '', '', '', '', '', '', 7, 122, 11, '2020-09-23 09:27:00', 3, 1, 'Sin Color', 'Muchas cosas', '', '', 100000, 0, 100000, 1, 0, 100000, 0, 1, 0, 0, 0, 0, 0),
(24370, 0, '0000-00-00', '2020-09-21', 1, '15315143-1', 'Andres', 'Robert', 'Santo Domingo 123', 7, 126, 'andresrobert@icloud.com', '952094004', '', '15315143-1', 'Andres Robert', 'Santo Domingo 123', 7, 126, '', '', '', '', '', '', 7, 126, 12, '2020-09-22 09:35:00', 1, 1, 'Sin Color', 'Muchas cosas', '', '', 123456, 0, 123456, 1, 0, 123456, 0, 0, 1, 0, 0, 0, 0),
(24371, 0, '0000-00-00', '2020-09-21', 1, '15315143-1', 'Andres', 'Robert', 'Santo Domingo 123', 7, 126, 'andresrobert@icloud.com', '952094004', '', '15315143-1', 'Andres Robert', 'Santo Domingo 123', 7, 126, '', '', '', '', '', '', 7, 126, 13, '2020-09-30 09:37:00', 1, 1, 'Sin Color', 'Muchas Cosas', '', '', 234567, 0, 234567, 1, 0, 234567, 0, 1, 0, 0, 0, 0, 0),
(24372, 0, '0000-00-00', '2020-09-21', 1, '7854464-3', 'JUAN CARLOS', 'FUENTES CORREA', 'CALLE EL DURAZNO #329', 1, 1, 'FABIAN.ROJAS1308@GMAIL.COM', '989916983', '', '4885575-K', 'ROSA AMELIA DIAZ ULLOA', 'EYZAGUIRRE #1422', 1, 1, 'HOSP SOTERO DEL RIO', 'VIUDA', '', '', 'DOMICILIO', 'EYZAGUIRRE #1422', 1, 1, 2, '2020-09-22 19:27:00', 1, 1, 'Sin Color', 'NADA', '', '', 600000, 0, 600000, 1, 0, 600000, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--
-- Creation: Aug 14, 2020 at 07:26 PM
--

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE IF NOT EXISTS `insurances` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `insurances`
--

TRUNCATE TABLE `insurances`;
--
-- Dumping data for table `insurances`
--

INSERT DELAYED IGNORE INTO `insurances` (`id`, `name`, `active`) VALUES
(1, 'AFP PROVIDA', 1),
(2, 'AFP CAPITAL', 1),
(3, 'AFP CUPRUM', 1),
(4, 'AFP PLAN VITAL', 1),
(5, 'AFP UNO', 1),
(6, 'AFP MODELO', 1),
(7, 'AFP HABITAT', 1),
(8, 'CIA. DE SEGUROS CON FUTURO', 1),
(9, 'CIA. DE SEGUROS OHIO', 1),
(10, 'CIA. DE SEGUROS VIDA SECURITY', 1),
(11, 'CIA. DE SEGUROS COLMENA', 1),
(12, 'CIA. DE SEGUROS METLIFE', 1),
(13, 'CIA. DE SEGUROS SURA', 1),
(14, 'CIA. DE SEGUROS EUROAMERICA', 1),
(15, 'CIA. DE SEGUROS LIBERTY', 1),
(16, 'CIA. DE SEGUROS RENTA NACIONAL', 1),
(17, 'CIA. DE SEGUROS BICE VIDA', 1),
(18, 'CIA. DE SEGUROS MAS VIDA', 1),
(19, 'CIA. DE SEGUROS CONSORCIO', 1),
(20, 'CIA. DE SEGUROS VIDA CAMARA', 1),
(21, 'CIA. DE SEGUROS RECOVER', 1),
(22, 'CIA. DE SEGUROS BUPA SEGUROS', 1),
(23, 'CIA. DE SEGUROS PRINCIPAL', 1),
(24, 'CIA. DE SEGUROS CHILENA CONSOLIDADA', 1),
(25, 'CIA. DE SEGUROS BTG PACTUAL', 1),
(26, 'CIA. DE SEGUROS PENTA VIDA', 1),
(27, 'CIA. DE SEGUROS BICE SEGUROS', 1),
(28, 'CAPREDENA', 1),
(29, 'DIPRECA', 1),
(30, 'Otra Aseguradora', 0),
(31, 'IPS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--
-- Creation: Aug 14, 2020 at 07:26 PM
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `contract_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  PRIMARY KEY (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `invoices`
--

TRUNCATE TABLE `invoices`;
-- --------------------------------------------------------

--
-- Table structure for table `providers`
--
-- Creation: Aug 14, 2020 at 07:26 PM
--

DROP TABLE IF EXISTS `providers`;
CREATE TABLE IF NOT EXISTS `providers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `providers`
--

TRUNCATE TABLE `providers`;
--
-- Dumping data for table `providers`
--

INSERT DELAYED IGNORE INTO `providers` (`id`, `name`, `active`) VALUES
(1, 'Sin proveedor', 1),
(2, 'delete proveedor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--
-- Creation: Aug 14, 2020 at 07:26 PM
--

DROP TABLE IF EXISTS `quotations`;
CREATE TABLE IF NOT EXISTS `quotations` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `user_id` int(8) NOT NULL,
  `s_id` int(8) NOT NULL,
  `s_name` varchar(128) NOT NULL,
  `s_lastname` varchar(128) NOT NULL,
  `s_address` varchar(256) DEFAULT NULL,
  `s_state_id` int(8) DEFAULT NULL,
  `s_district_id` int(8) DEFAULT NULL,
  `s_email` varchar(32) DEFAULT NULL,
  `s_mobile` varchar(32) DEFAULT NULL,
  `s_phone` varchar(32) DEFAULT NULL,
  `d_name` varchar(128) NOT NULL,
  `v_type` varchar(256) NOT NULL,
  `v_provider_id` int(8) NOT NULL,
  `v_color` varchar(32) DEFAULT NULL,
  `v_includes` text NOT NULL,
  `v_cost` int(16) NOT NULL DEFAULT 0,
  `v_insurance_id` int(8) NOT NULL DEFAULT 0,
  `v_coverage` int(16) NOT NULL DEFAULT 0,
  `v_payment` int(16) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `quotations`
--

TRUNCATE TABLE `quotations`;
-- --------------------------------------------------------

--
-- Table structure for table `roles`
--
-- Creation: Aug 14, 2020 at 07:26 PM
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(8) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `roles`
--

TRUNCATE TABLE `roles`;
--
-- Dumping data for table `roles`
--

INSERT DELAYED IGNORE INTO `roles` (`id`, `name`) VALUES
(1, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--
-- Creation: Aug 26, 2020 at 07:13 PM
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `provider_id` int(8) NOT NULL DEFAULT 1,
  `color` varchar(64) NOT NULL DEFAULT 'Sin Color',
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `services`
--

TRUNCATE TABLE `services`;
--
-- Dumping data for table `services`
--

INSERT DELAYED IGNORE INTO `services` (`id`, `name`, `provider_id`, `color`, `active`) VALUES
(1, 'PLANA ECO LISA CERA S/IMAGEN', 1, 'Sin Color', 1),
(2, 'PLANA ECO LISA CERA C/IMAGEN', 1, 'Sin Color', 1),
(3, 'PLANA ECO LISA BRILLO C/IMAGEN', 1, 'Sin Color', 1),
(4, 'PLANA ECO TALLADA BRILLO', 1, 'Sin Color', 1),
(5, 'PARVULO 40 CM', 1, 'Sin Color', 1),
(6, 'PARVULO PIEL 50 CM', 1, 'Sin Color', 1),
(7, 'MACKELITA ECO LISA BRILLO', 1, 'Sin Color', 1),
(8, 'MACKELITA ECO TALLADA BRILLO', 1, 'Sin Color', 1),
(9, 'MACKELITA ECO MARQ CERA', 1, 'Sin Color', 1),
(10, 'MACKELITA ECO LISA C/IMAGEN CERA', 1, 'Sin Color', 1),
(11, 'MACKELITA ECO TALLADA CERA', 1, 'Sin Color', 1),
(12, 'PARVULO PIEL 1.20 CM', 1, 'Sin Color', 1),
(13, 'PARVULO PIEL 1.60 CM', 1, 'Sin Color', 1),
(14, 'MACKER TER LISO CERA C/ IMAGEN', 1, 'Sin Color', 1),
(15, 'MACKER TER TALLADO CERA', 1, 'Sin Color', 1),
(16, 'MACKER TER PLANO CERA O BRILLO', 1, 'Sin Color', 1),
(17, 'MACKER GONDA TER TALLADA BRILLO', 1, 'Sin Color', 1),
(18, 'MACKER GONDA TER TALLADA CERA', 1, 'Sin Color', 1),
(19, 'MACKER MASSINI TER TALLADA OPACA', 1, 'Sin Color', 1),
(20, 'MACKER MASSINI TER TALLADA BRILLO', 1, 'Sin Color', 1),
(21, 'MACKER MADERA MIXTA LISA BRILLO', 1, 'Sin Color', 1),
(22, 'MACKER MADERA MIXTA LISA CERA', 1, 'Sin Color', 1),
(23, 'MACKER MADERA MIXTA TALLADA CERA', 1, 'Sin Color', 1),
(24, 'MACKER MADERA MIXTA TALLADA BRILLO', 1, 'Sin Color', 1),
(25, 'MACKER MADERA MIXTA MARQ CERA', 1, 'Sin Color', 1),
(26, 'MACKER MADERA PIRAMIDE 1 CERA', 1, 'Sin Color', 1),
(27, 'MACKER MADERA PIRAMIDE 2 OPACA', 1, 'Sin Color', 1),
(28, 'MACKER MADERA PIRAMIDE 2 BRILLO', 1, 'Sin Color', 1),
(29, 'MACKER MADERA TALLADA CRUZ BRILLO', 1, 'Sin Color', 1),
(30, 'MACKER MADERA TALLADA PALOMA/B CERA', 1, 'Sin Color', 1),
(31, 'MACKER MADERA ZAMUDIO CERA', 1, 'Sin Color', 1),
(32, 'MACKER MADERA ZAMUDIO BRILLO', 1, 'Sin Color', 1),
(33, 'HUASCO TERCIADO CERA LISO', 1, 'Sin Color', 1),
(34, 'MACKER MADERA ESCALONADA TALLADA CERA', 1, 'Sin Color', 1),
(35, 'MACKER GONDA MADERA LISA BRILLO', 1, 'Sin Color', 1),
(36, 'MACKER GONDA MADERA TALLADA CERA', 1, 'Sin Color', 1),
(37, 'MACKER ESCALONADA MADERA TALLADA RELIEVE', 1, 'Sin Color', 1),
(38, 'VICTOR MASSINI PINO TALLADO BRILLANTE', 1, 'Sin Color', 1),
(39, 'VICTOR ESPAÑOLA TALLADO EN PIES', 1, 'Sin Color', 1),
(40, 'MACKER GRAN CANCILLER MADERA CERA LISA', 1, 'Sin Color', 1),
(41, 'MACKER GRAN CANCILLER MADERA TALLADA CERA', 1, 'Sin Color', 1),
(42, 'TREBOL PINO SUPER ESPAÑOLA LISA CERA', 1, 'Sin Color', 1),
(43, 'TREBOL PINO SUPER ESPAÑOLA TALLADA BRILLO', 1, 'Sin Color', 1),
(44, 'OCHAVADA PINO MARQ BRI IMPERIAL BRILLO', 1, 'Sin Color', 1),
(45, 'OCHAVADA PINO LISA IMPERIAL CERA', 1, 'Sin Color', 1),
(46, 'MACKER SEMI BOMBO TERCIADO TALLADA BRILLO', 1, 'Sin Color', 1),
(47, 'MACKER SEMI BOMBO MADERA LISO BRILLO', 1, 'Sin Color', 1),
(48, 'MACKER SEMI BOMBO MADERA PN LISA CERA', 1, 'Sin Color', 1),
(49, 'MACKER BOMBO MADERA TALLADA BRILLO', 1, 'Sin Color', 1),
(50, 'MACKER BOMBO MADERA LISA BRILLO', 1, 'Sin Color', 1),
(51, 'URNA REDUCCION METALICA', 1, 'Sin Color', 1),
(52, 'eliminar este servicio', 1, 'Sin Color', 0);

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--
-- Creation: Sep 08, 2020 at 08:33 PM
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `observation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `texts`
--

TRUNCATE TABLE `texts`;
--
-- Dumping data for table `texts`
--

INSERT DELAYED IGNORE INTO `texts` (`id`, `text`, `observation`) VALUES
(1, 'Avda. Vicuña Mackenna 10.634<br>P.23 1/2 La Florida<br>FONO: 22 318 8248 CELULAR: +569 802 3195<br>www.funerariadelbuenpastor.cl', '<b>Contrato</b>: Información de Contacto que aparece en la parte superior del contrato'),
(2, 'CONTRATO / PRESUPUESTO<br>INTERNO', '<b>Contrato</b>: Titulo sobre el numero del contrato'),
(3, 'La persona que firma el presente contrato privado, se responsabiliza por todo el pago del servicio, así como también de los cheques que pudieran extenderse con el fin de pagar a la Funeraria del Buen Pastor en los plazos y fechas pactadas y específicas en el contrato, las cuotas mortuorias del IPS y de AFP se darán por pagadas únicamente cuando estas las hagan efectivas, de lo contrario el contratante se responsabilizará del pago a la funeraria del total de los aranceles que cubran estos beneficios, el presente contrato lo firma exclusivamente el contratante del servicio.', '<b>Contrato</b>: Aviso legal del contrato'),
(4, 'Para pago con transferencia electrÃ³nica los datos son: Cuenta Corriente, Banco SCOTIABANK NÂº 4330037682, Rut 12.060.286-1, Alejandra Silva Morales, email: alejandra@funerariadelbuenpastor.cl', '<b>Contrato</b>: InformaciÃ³n de pago para el contrato'),
(5, 'Funeraria del Buen Pastor', '<b>Email</b>: Título del contrato enviado por correo'),
(6, 'Adjunto en este correo va un link para revisar e imprimir el contrato generado', '<b>Email</b>: Texto del contrato enviado por correo'),
(7, 'Ver Contrato', '<b>Email</b>: Texto del botón para acceder al contrato enviado por correo'),
(8, 'Si usted no ha realizado ningun contrato con la funeraria, por favor ignore este correo.', '<b>Email</b>: Texto en caso de que el correo se haya enviado a un destinatario equivocado'),
(9, 'Se comunica el sensible fallecimiento de  ', '<b>Obituario</b>: texto para identificar al fallecido en el obituario'),
(10, 'El funeral se llevará a cabo en ', '<b>Obituario</b>: texto para indicar el lugar en el que se llevará a cabo el funeral'),
(11, 'Obituario, gentileza de Funeraria del Buen Pastor', '<b>Obituario</b>: texto de gentileza para informar el fallecimiento');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Aug 14, 2020 at 07:26 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `roles_id` int(8) NOT NULL DEFAULT 1,
  `name` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`id`, `roles_id`, `name`, `lastname`, `email`, `password`, `locked`, `active`) VALUES
(1, 1, 'Super', 'User', 'funeraria@fdbp.cl', '$2y$10$YXusQHUUTdTKYBbOAMDqCuDqA3z5q5yLSqDpcSlfbYLcqi5rcfi16', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

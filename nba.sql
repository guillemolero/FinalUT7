-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2017 a las 21:52:50
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nba`
--

CREATE TABLE `nba` (
  `equipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nba`
--

INSERT INTO `nba` (`equipo`) VALUES
('Bucks'),
('Bulls'),
('Cavaliers'),
('Celtics'),
('Clippers'),
('Grizzlies'),
('Hawks'),
('Heat'),
('Hornets'),
('Jazz'),
('Kings'),
('Knicks'),
('Lakers'),
('Magic'),
('Mavericks'),
('Nets'),
('Nuggets'),
('Pacers'),
('Pelicans'),
('Pistons'),
('Raptors'),
('Rockets'),
('Sixers'),
('Spurs'),
('Suns'),
('Thunder'),
('Timberwolves'),
('Trail Blazers'),
('Warriors'),
('Wizards');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nba`
--
ALTER TABLE `nba`
  ADD PRIMARY KEY (`equipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

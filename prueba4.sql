-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2020 a las 22:43:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `sueldo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `direccion`, `sueldo`) VALUES
(1, 'Joaquin Oyarzun', 'Estación los Álamos 3450', 600000),
(6, 'Gonzalo Oyarzun', 'Estación los Álamos 3450', 700000),
(10, 'Jorge Arancibia', 'Puente Alto', 650000),
(11, 'Felipe Rodriguez', 'Inacap', 750000),
(12, 'Joaquin Oyarzun', 'Estación los Álamos 3450', 750000),
(13, 'Joaquin Oyarzun', 'Estación los Álamos 3450', 780000),
(14, 'Joaquin Oyarzun', 'Estación los Álamos 3450', 800000),
(15, 'Gonzalo Oyarzun', 'Estación los Álamos 3450', 730000),
(16, 'Gonzalo Oyarzun', 'Estación los Álamos 3450', 750000),
(17, 'Gonzalo Oyarzun', 'Estación los Álamos 3450', 800000),
(18, 'Jorge Arancibia', 'Puente Alto', 800000),
(19, 'Jorge Arancibia', 'Puente Alto', 850000),
(20, 'Jorge Arancibia', 'Puente Alto', 920000),
(21, 'Felipe Rodriguez', 'Inacap', 800000),
(22, 'Felipe Rodriguez', 'Inacap', 900000),
(23, 'Felipe Rodriguez ', 'Inacap', 1000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2024 a las 19:57:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portalgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(500) NOT NULL,
  `precio_producto` decimal(10,0) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `marca_producto` varchar(500) NOT NULL,
  `añoLanzamiento_producto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `precio_producto`, `stock_producto`, `marca_producto`, `añoLanzamiento_producto`) VALUES
(1, 'GTA San Andreas', 10000, 100, 'Rockstar', '2004-10-26'),
(2, 'Shadow of the Colossus', 12000, 50, 'Sony Computer Entertainment', '2005-10-18'),
(3, 'Resident Evil 4', 9000, 75, 'Capcom Production Studio 4', '2005-01-11'),
(4, 'Final Fantasy X', 9500, 69, 'Squaresoft', '2001-07-19'),
(5, 'PES 6', 8650, 120, 'Konami', '2006-04-27'),
(6, 'Metal Geard Solid 3', 7150, 45, 'Konami', '2004-11-17'),
(7, 'Battlefield 2: Modern Combat', 8000, 80, 'Electronic Arts', '2005-10-24'),
(8, 'The Warriors', 5225, 45, 'Rockstar', '2007-10-17'),
(9, 'God of War 2', 9000, 85, 'Sony Computer Entertainment', '2007-03-13'),
(24, 'Guitar Hero World Tour', 4500, 45, 'Activision', '2008-10-26'),
(26, 'Bully', 8400, 80, 'Rockstar', '2006-10-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1-1.fc34
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2022 a las 17:13:01
-- Versión del servidor: 10.5.13-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perassi`
--

CREATE TABLE `perassi` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(15) NOT NULL,
  `alias` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gr_read` text NOT NULL,
  `gr_write` text NOT NULL,
  `gr_administrator` text NOT NULL,
  `gr_owner` text NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perassi`
--

INSERT INTO `perassi` (`usuario_id`, `usuario_nombre`, `alias`, `password`, `gr_read`, `gr_write`, `gr_administrator`, `gr_owner`, `fecha`) VALUES
(116, 'ruben', 'tuercas', '4565416', 'no', 'si', 'no', 'no', '24-01-2022 2:28:10'),
(117, 'Ramon', 'Dias', 'asdsad1', 'no', 'si', 'no', 'no', '24-01-2022 2:28:15'),
(119, 'jorge', 'pelos', 'jor22', 'si', 'no', 'no', 'no', '24-01-2022 11:39:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perassi`
--
ALTER TABLE `perassi`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perassi`
--
ALTER TABLE `perassi`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

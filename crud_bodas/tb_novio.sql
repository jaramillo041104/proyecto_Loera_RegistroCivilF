-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 05:44:35
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrocivil_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_novio`
--

CREATE TABLE `tb_novio` (
  `idNovio` int(4) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Nombre_papa` varchar(50) NOT NULL,
  `Nombre_mama` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_novio`
--

INSERT INTO `tb_novio` (`idNovio`, `Nombres`, `Apellidos`, `Nombre_papa`, `Nombre_mama`, `Direccion`, `Fecha_nac`) VALUES
(1, '', '', 'Noel Loera Palma', 'Nubia Janeth Jaramillo Gardea', 'Ignacio Enriquez #524', '2004-11-04'),
(2, 'Noel Rodrigo', 'Loera Jaramillo ', 'Noel Loera Palma', 'Nubia Janeth Jaramillo Gardea', 'Ignacio Enriquez #524', '2004-11-04'),
(3, 'Michelle', 'Marquez Jacobo', 'Pedrito Marquez', 'Juanita Jacobo', 'Miguel de la Madrid #222', '2004-02-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_novio`
--
ALTER TABLE `tb_novio`
  ADD PRIMARY KEY (`idNovio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_novio`
--
ALTER TABLE `tb_novio`
  MODIFY `idNovio` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

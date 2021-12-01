-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 05:37:39
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
-- Estructura de tabla para la tabla `tb_empleado`
--

CREATE TABLE `tb_empleado` (
  `idEmpleado` int(4) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `Telefono` int(13) NOT NULL,
  `Fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_empleado`
--

INSERT INTO `tb_empleado` (`idEmpleado`, `Nombres`, `Apellidos`, `Direccion`, `correo`, `Telefono`, `Fecha_nac`) VALUES
(1, '', 'loera', 'Ignacio Enriquez #524', 'loeranoel43@gmail.com', 2147483647, '0003-02-01'),
(2, '', 'loera', 'Ignacio Enriquez #524', 'loeranoel43@gmail.com', 2147483647, '1111-02-01'),
(3, 'Noel Javier', 'Loera Palma', 'Miguel de la Madrid #222', 'loerapalmanoel@hotmail.com', 2147483647, '1976-09-25'),
(4, '', '', 'Noel Loera Palma', 'Nubia Janeth Jaramillo Gardea', 0, '2004-11-04'),
(5, '', '', '', '', 0, '0000-00-00'),
(6, '', '', 'Noel Loera Palma', 'Nubia Janeth Jaramillo Gardea', 0, '2004-11-04'),
(7, '', '', 'Noel Loera Palma', 'Nubia Janeth Jaramillo Gardea', 0, '2004-11-04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_empleado`
--
ALTER TABLE `tb_empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_empleado`
--
ALTER TABLE `tb_empleado`
  MODIFY `idEmpleado` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

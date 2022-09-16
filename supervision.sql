-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2021 a las 05:47:58
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supervision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `aviso` varchar(200) COLLATE utf8_bin NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id`, `aviso`, `hora`, `fecha`) VALUES
(15, 'Primer aviso del día', '22:45:40', '2021-01-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `clave` varchar(100) COLLATE utf8_bin NOT NULL,
  `puesto` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `clave`, `puesto`) VALUES
(1, 'Miriam Edith Hernández Ramírez', 'miriam', '123456789', 'Administrador'),
(2, 'Patricia Sánchez Vargas', 'paty', '123456', 'Empleado'),
(3, 'Jimena Cruz Ortiz', 'jime', '12345', 'Empleado'),
(4, 'Rogelio Manuel Perez Sanchez', 'roge', '123456', 'Administrador'),
(5, 'Pablo Pacheco Grande', 'pablo', '123456789', 'Empleado'),
(11, 'Supervision Escolar BG 48', 'BG48', '48', 'Office');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

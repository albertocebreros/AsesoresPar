-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2019 a las 21:15:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asesorespar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `IdAsesor` int(11) NOT NULL,
  `Nombre_Completo` varchar(400) NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Numero_De_Cuenta` int(11) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `Contrasena` varchar(200) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `IdAsesorado` int(11) DEFAULT NULL,
  `IdMateria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`IdAsesor`, `Nombre_Completo`, `Telefono`, `Correo`, `Numero_De_Cuenta`, `Usuario`, `Contrasena`, `Estatus`, `IdAsesorado`, `IdMateria`) VALUES
(25, 'jesus alberto cebreros quintero', '6671972435', 'jesus123alberto456@gmail.com', 12345667, 'betto', '12345678', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorado`
--

CREATE TABLE `asesorado` (
  `IdAsesorado` int(11) NOT NULL,
  `Nombre_Completo` varchar(400) NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `Contrasena` varchar(200) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `IdAsesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asesorado`
--

INSERT INTO `asesorado` (`IdAsesorado`, `Nombre_Completo`, `Telefono`, `Correo`, `Usuario`, `Contrasena`, `Estatus`, `IdAsesor`) VALUES
(10, 'joel ulises martines fernandes', '2147483647', 'joel@gmail.com', 'joelshido', '12345678', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Nombre_Materia` varchar(200) NOT NULL,
  `idmateria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`Nombre_Materia`, `idmateria`) VALUES
('matematicas', '323213');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` text,
  `contrasena` text,
  `tipo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contrasena`, `tipo`) VALUES
('betto', '123', '1'),
('joel', '123', '3'),
('dato', '123', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`IdAsesor`);

--
-- Indices de la tabla `asesorado`
--
ALTER TABLE `asesorado`
  ADD PRIMARY KEY (`IdAsesorado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesor`
--
ALTER TABLE `asesor`
  MODIFY `IdAsesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `asesorado`
--
ALTER TABLE `asesorado`
  MODIFY `IdAsesorado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

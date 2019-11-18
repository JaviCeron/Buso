-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2019 a las 22:28:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine_2019`
--
CREATE DATABASE IF NOT EXISTS `cine_2019` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cine_2019`;

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `GuardarVenta` (`idusuario_val` INT, `idcliente_val` INT) RETURNS INT(11) BEGIN
  INSERT INTO venta (idusuario, idcliente) VALUES (idusuario_val, idcliente_val);
  RETURN LAST_INSERT_ID();
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE `boleto` (
  `idboleto` int(11) NOT NULL,
  `idhorario` int(11) NOT NULL,
  `idbutaca` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `boleto`
--

INSERT INTO `boleto` (`idboleto`, `idhorario`, `idbutaca`, `idventa`, `estado`) VALUES
(1, 2, 5, 4, 1),
(2, 2, 5, 5, 1),
(3, 2, 5, 6, 1),
(4, 2, 6, 6, 1),
(5, 2, 5, 7, 1),
(6, 2, 6, 7, 1),
(7, 2, 5, 8, 1),
(8, 2, 6, 8, 1),
(9, 2, 5, 9, 1),
(10, 2, 6, 9, 1),
(11, 2, 5, 10, 1),
(12, 2, 6, 10, 1),
(13, 2, 4, 11, 1),
(14, 2, 3, 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `butaca`
--

CREATE TABLE `butaca` (
  `idbutaca` int(11) NOT NULL,
  `nombre` varchar(5) NOT NULL,
  `idsala` smallint(6) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `butaca`
--

INSERT INTO `butaca` (`idbutaca`, `nombre`, `idsala`, `estado`) VALUES
(1, 'A1', 1, 1),
(2, 'A2', 1, 1),
(3, 'A3', 1, 2),
(4, 'A4', 1, 2),
(5, 'A5', 1, 2),
(6, 'A6', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `tarjeta` varchar(16) NOT NULL,
  `fechavencimientotarjeta` date NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `apellido`, `email`, `clave`, `identificacion`, `tarjeta`, `fechavencimientotarjeta`, `estado`) VALUES
(0, 'Cliente', 'Local', 'clientelocal@gmail.com', '202cb962ac59075b964b07152d234b70', '012345678', '0123456789012345', '2022-12-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL,
  `fechapelicula` date NOT NULL,
  `horapelicula` time NOT NULL,
  `idpelicula` int(11) NOT NULL,
  `idsala` smallint(6) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idhorario`, `fechapelicula`, `horapelicula`, `idpelicula`, `idsala`, `estado`) VALUES
(1, '2019-05-31', '08:00:00', 1, 1, 1),
(2, '2019-05-30', '10:00:00', 1, 1, 1),
(3, '2019-05-31', '14:00:00', 2, 1, 1),
(4, '2019-05-29', '11:00:00', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idpelicula` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `duracion` varchar(15) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `clasificacion` char(1) NOT NULL,
  `director` varchar(50) NOT NULL,
  `reparto` varchar(250) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idpelicula`, `nombre`, `imagen`, `duracion`, `tipo`, `clasificacion`, `director`, `reparto`, `descripcion`, `precio`, `estado`) VALUES
(1, 'John Wick 3: Parabellum', 'jw3.jpg', '130 min', 'Acción', 'C', 'Chad Stahelski', 'Keanu Reeves, Asia Kate Dillon, Ian McShane', 'John Wick regresa a la acción, solo que esta vez con una recompensa de 14 millones de dólares sobre su cabeza y con un ejército de mercenarios intentando darle caza. Tras asesinar a uno de los miembros del gremio de asesinos al que pertenecía, Wick es exp', '3.75', 1),
(2, 'Avengers: Endgame', 'Avengers_EndGame.jpg', '185 min', 'Acción', 'B', ' Anthony Russo, Joe Russo', 'obert Downey Jr, Josh Brolin, Chris Evans, Brie Larson, Bradley Cooper, Scarlett Johansson', 'Después que Thanos acabó con la mitad de toda la vida en el universo, en un evento denominado \"La Decimación\", el universo está en ruinas, Los Vengadores y Los Guardianes de la Galaxia, entre otros superhéroes, tratan hacer lo que sea necesario para desha', '3.75', 1),
(3, 'Brightburn: Hijo de la Oscuridad', 'brightburn.jpg', '90 min', 'Drama', 'C', 'David Yarovesky', 'Elizabeth Banks, Jackson A. Dunn, Jennifer Holland', '¿Qué pasaría si un niño de otro mundo realizara un aterrizaje de emergencia en la Tierra y en lugar de convertirse en un héroe para la humanidad demostrara ser algo mucho más siniestro? El matrimonio formado por Tori (Elizabeth Banks) y Kyle Breyer (David', '4.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `idsala` smallint(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`idsala`, `nombre`, `tipo`, `estado`) VALUES
(1, 'Sala 1', '2D', 1),
(2, 'Sala 2', '3D', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `email`, `clave`, `estado`) VALUES
(1, 'Daniela', 'Beltran', 'dany@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'José', 'Valladares', 'jv@itca.edu.sv', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `fechaventa` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idusuario` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `fechaventa`, `idusuario`, `idcliente`, `estado`) VALUES
(3, '2019-06-05 09:55:59', 1, 0, 1),
(4, '2019-06-05 10:16:05', 1, 0, 1),
(5, '2019-06-05 10:19:25', 1, 0, 1),
(6, '2019-06-05 10:22:02', 1, 0, 1),
(7, '2019-06-05 10:22:51', 1, 0, 1),
(8, '2019-06-05 10:23:39', 1, 0, 1),
(9, '2019-06-05 10:27:28', 1, 0, 1),
(10, '2019-06-05 10:28:31', 1, 0, 1),
(11, '2019-06-05 10:34:03', 1, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`idboleto`),
  ADD KEY `fk_boleto_butaca` (`idbutaca`),
  ADD KEY `fk_boleto_horario` (`idhorario`),
  ADD KEY `fk_boleto_idventa` (`idventa`);

--
-- Indices de la tabla `butaca`
--
ALTER TABLE `butaca`
  ADD PRIMARY KEY (`idbutaca`),
  ADD KEY `fk_butaca_sala` (`idsala`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idhorario`),
  ADD KEY `fk_horario_pelicula` (`idpelicula`),
  ADD KEY `fk_horario_sala` (`idsala`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idpelicula`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idsala`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `fk_venta_cliente` (`idcliente`),
  ADD KEY `fk_venta_usuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `idboleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `butaca`
--
ALTER TABLE `butaca`
  MODIFY `idbutaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idpelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `idsala` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD CONSTRAINT `fk_boleto_butaca` FOREIGN KEY (`idbutaca`) REFERENCES `butaca` (`idbutaca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_boleto_horario` FOREIGN KEY (`idhorario`) REFERENCES `horario` (`idhorario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_boleto_idventa` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `butaca`
--
ALTER TABLE `butaca`
  ADD CONSTRAINT `fk_butaca_sala` FOREIGN KEY (`idsala`) REFERENCES `sala` (`idsala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_pelicula` FOREIGN KEY (`idpelicula`) REFERENCES `pelicula` (`idpelicula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_sala` FOREIGN KEY (`idsala`) REFERENCES `sala` (`idsala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

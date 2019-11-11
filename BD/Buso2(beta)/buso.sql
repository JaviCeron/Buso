-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2019 a las 04:10:14
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bus`
--

CREATE TABLE `bus` (
  `idbus` int(25) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `idruta` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bus`
--

INSERT INTO `bus` (`idbus`, `nombre`, `idruta`) VALUES
(1, 'Magaly', 133);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idhorario` int(25) NOT NULL,
  `hora_salida` time NOT NULL,
  `hora_meta` time NOT NULL,
  `idbus` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idhorario`, `hora_salida`, `hora_meta`, `idbus`) VALUES
(11, '03:00:00', '04:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `idruta` int(25) NOT NULL,
  `numero_ruta` varchar(25) NOT NULL,
  `tarifa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`idruta`, `numero_ruta`, `tarifa`) VALUES
(133, '133', '0.75');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminal`
--

CREATE TABLE `terminal` (
  `idterminal` int(25) NOT NULL,
  `terminal_salida` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `terminal_meta` varchar(200) NOT NULL,
  `idhorario` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `terminal`
--

INSERT INTO `terminal` (`idterminal`, `terminal_salida`, `terminal_meta`, `idhorario`) VALUES
(2, 'San Marcos', 'Zacatecoluca', 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`idbus`),
  ADD KEY `fk_idruta` (`idruta`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idhorario`),
  ADD KEY `idbus` (`idbus`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`idruta`);

--
-- Indices de la tabla `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`idterminal`),
  ADD KEY `fk_idhorario` (`idhorario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bus`
--
ALTER TABLE `bus`
  MODIFY `idbus` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `idruta` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `terminal`
--
ALTER TABLE `terminal`
  MODIFY `idterminal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `fk_idruta` FOREIGN KEY (`idruta`) REFERENCES `ruta` (`idruta`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`idbus`) REFERENCES `bus` (`idbus`);

--
-- Filtros para la tabla `terminal`
--
ALTER TABLE `terminal`
  ADD CONSTRAINT `fk_idhorario` FOREIGN KEY (`idhorario`) REFERENCES `horario` (`idhorario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

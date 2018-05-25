-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2018 a las 04:53:42
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ficomp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotaciones`
--

CREATE TABLE `anotaciones` (
  `anotacionID` int(11) NOT NULL,
  `prestamoID` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `resuelto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `aulaID` int(11) NOT NULL,
  `numero` int(3) NOT NULL,
  `edificio` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `claseID` int(11) NOT NULL,
  `aulaID` int(11) NOT NULL,
  `profesorID` int(11) NOT NULL,
  `materiaID` int(11) NOT NULL,
  `horarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisiones`
--

CREATE TABLE `divisiones` (
  `divisionID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sigla` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `horarioID` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `materialID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fechaAdquisicion` date NOT NULL,
  `modelo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `materiaID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `divisionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `prestamoID` int(11) NOT NULL,
  `registroID` int(11) NOT NULL,
  `materialID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `profesorID` int(11) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidop` varchar(20) NOT NULL,
  `apellidom` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `registroID` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `horaPrestamo` time NOT NULL,
  `horaEntrega` time DEFAULT NULL,
  `firmaPrestamo` int(1) NOT NULL,
  `formaEntrega` int(1) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosactivos`
--

CREATE TABLE `registrosactivos` (
  `registroActID` int(11) NOT NULL,
  `registroID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD PRIMARY KEY (`anotacionID`),
  ADD KEY `prestamoID` (`prestamoID`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`aulaID`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`claseID`),
  ADD KEY `aulaID` (`aulaID`),
  ADD KEY `profesorID` (`profesorID`),
  ADD KEY `materiaID` (`materiaID`),
  ADD KEY `horarioID` (`horarioID`);

--
-- Indices de la tabla `divisiones`
--
ALTER TABLE `divisiones`
  ADD PRIMARY KEY (`divisionID`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`horarioID`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`materialID`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`materiaID`),
  ADD KEY `divisionID` (`divisionID`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`prestamoID`),
  ADD KEY `registroID` (`registroID`),
  ADD KEY `materialID` (`materialID`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`profesorID`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`registroID`),
  ADD KEY `claseID` (`claseID`);

--
-- Indices de la tabla `registrosactivos`
--
ALTER TABLE `registrosactivos`
  ADD PRIMARY KEY (`registroActID`),
  ADD KEY `registroID` (`registroID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  MODIFY `anotacionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `aulaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `claseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `divisiones`
--
ALTER TABLE `divisiones`
  MODIFY `divisionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `horarioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `materialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `materiaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `prestamoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `profesorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `registroID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD CONSTRAINT `anotaciones_ibfk_1` FOREIGN KEY (`prestamoID`) REFERENCES `prestamos` (`prestamoID`);

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`aulaID`) REFERENCES `aulas` (`aulaID`),
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`aulaID`) REFERENCES `aulas` (`aulaID`),
  ADD CONSTRAINT `clases_ibfk_3` FOREIGN KEY (`profesorID`) REFERENCES `profesores` (`profesorID`),
  ADD CONSTRAINT `clases_ibfk_4` FOREIGN KEY (`materiaID`) REFERENCES `materias` (`materiaID`),
  ADD CONSTRAINT `clases_ibfk_5` FOREIGN KEY (`horarioID`) REFERENCES `horarios` (`horarioID`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`divisionID`) REFERENCES `divisiones` (`divisionID`),
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`divisionID`) REFERENCES `divisiones` (`divisionID`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`registroID`) REFERENCES `registros` (`registroID`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`materialID`) REFERENCES `materiales` (`materialID`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`claseID`) REFERENCES `clases` (`claseID`);

--
-- Filtros para la tabla `registrosactivos`
--
ALTER TABLE `registrosactivos`
  ADD CONSTRAINT `registrosactivos_ibfk_1` FOREIGN KEY (`registroID`) REFERENCES `registros` (`registroID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2019 a las 13:04:51
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `idaula` int(11) NOT NULL,
  `aula` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`idaula`, `aula`) VALUES
(1, '4.07'),
(4, 'C3'),
(5, '4.08'),
(8, 'Computo2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idenc` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `evalsistema` int(11) NOT NULL,
  `facultad` varchar(100) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `implementacion` varchar(2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `nserie` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechre` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `idtipo`, `idusuario`, `marca`, `modelo`, `nserie`, `cantidad`, `fechre`) VALUES
(11, 2, 23, 'a', 'a', 'a', 2, '2019-10-16 17:23:33'),
(12, 2, 27, 'Sony', 'PS4', 'QWWW', 0, '2019-10-16 23:23:12'),
(14, 2, 27, 'Sony', 'VaioX3', 'SMC-111234', 15, '2019-10-17 22:13:33'),
(15, 2, 27, 'Sony', 'PS4', 'SERIE2', 47, '2019-10-16 23:23:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesoasig`
--

CREATE TABLE `procesoasig` (
  `idasig` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL,
  `idaula` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaasig` datetime NOT NULL DEFAULT current_timestamp(),
  `aprob` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `procesoasig`
--

INSERT INTO `procesoasig` (`idasig`, `idequipo`, `idaula`, `idusuario`, `cantidad`, `fechaasig`, `aprob`) VALUES
(12, 14, 5, 27, 12, '2019-10-17 22:13:58', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correl` int(11) NOT NULL,
  `idrol` int(11) DEFAULT NULL,
  `nombreusuario` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `activo` int(11) NOT NULL,
  `fotor` longblob DEFAULT NULL,
  `fechar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idusuario`, `nombre`, `apellidos`, `correl`, `idrol`, `nombreusuario`, `correo`, `password`, `activo`, `fotor`, `fechar`) VALUES
(23, 'Alisson2019', 'Hernandez', 20180202, 3, 'alis15', 'r', 'd9b1d7db4cd6e70935368a1efb10e377', 0, 0x30, '2019-09-26 16:49:27'),
(27, 'Laura', '2', 20181919, 2, '2', '2', '202cb962ac59075b964b07152d234b70', 0, 0x30, '2019-10-01 17:03:26'),
(31, 'Laura', 'Gallegos', 2018020, 1, 'lmsldec', 'asd', '202cb962ac59075b964b07152d234b70', 0, 0x30, '2019-10-24 17:31:59'),
(32, 'Laura', 'Gallegos', 2018020158, 3, 'lmsldec', '123', '202cb962ac59075b964b07152d234b70', 0, 0x30, '2019-10-24 17:33:37'),
(46, 'Ricardo Angel', 'Gallegos Sanchez', 2018020158, 3, 'rgs9313', 'rgs9313@gmail.com', '202cb962ac59075b964b07152d234b70', 0, NULL, '2019-10-28 16:41:26'),
(48, 'Ricardo Angel ', 'Gallegos Sanchez', 2018020202, 3, 'rg9319', 'abc@abc.com', '202cb962ac59075b964b07152d234b70', 0, 0x30, '2019-10-29 00:25:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `descripcion`) VALUES
(1, 'Usuario'),
(2, 'Tecnico'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idtipo`, `nombre`) VALUES
(2, 'Computadora'),
(3, 'Mobiliario'),
(4, 'Proyector');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idaula`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idenc`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`),
  ADD KEY `idtipo` (`idtipo`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `procesoasig`
--
ALTER TABLE `procesoasig`
  ADD PRIMARY KEY (`idasig`),
  ADD KEY `idequipo` (`idequipo`),
  ADD KEY `idaula` (`idaula`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `idaula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `procesoasig`
--
ALTER TABLE `procesoasig`
  MODIFY `idasig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `registro` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encuesta_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `registro` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `procesoasig`
--
ALTER TABLE `procesoasig`
  ADD CONSTRAINT `procesoasig_ibfk_1` FOREIGN KEY (`idaula`) REFERENCES `aula` (`idaula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procesoasig_ibfk_2` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procesoasig_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `registro` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

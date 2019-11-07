-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 22:20:57
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
(4, 'C5'),
(5, '4.08'),
(8, 'Computo2'),
(9, 'Aulabot');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botrecord`
--

CREATE TABLE `botrecord` (
  `idregistrobot` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `botrecord`
--

INSERT INTO `botrecord` (`idregistrobot`, `idusuario`, `token`, `chat`) VALUES
(8, 69, '957432837:AAGf5zOwEH7nRXoRPUYLyokhwz7FqZSG19s', '1054005466'),
(9, 76, '957432837:AAGf5zOwEH7nRXoRPUYLyokhwz7FqZSG19s', '1054005466'),
(10, 75, '957432837:AAGf5zOwEH7nRXoRPUYLyokhwz7FqZSG19s', '1054005466');

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
(20, 4, 75, 'Sony', 'Inspirion 15', 'QWWW', 15, '2019-11-04 20:38:43'),
(21, 4, 75, 'Dell', 'PS4', 'SMC-111234', 12332, '2019-11-01 20:38:53'),
(24, 8, 76, 'Samsung', 'SM-G935T', '355018081383575', 50, '2019-11-05 16:47:22'),
(25, 8, 69, 'Q', 'asss', '112', 222, '2019-11-07 11:16:31');

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
(26, 21, 5, 69, 12, '2019-11-01 00:00:00', 0),
(29, 24, 9, 76, 10, '2019-11-05 16:48:22', 2),
(30, 24, 4, 69, 150, '2019-11-05 22:03:57', 0);

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
  `fotor` varchar(200) DEFAULT NULL,
  `fechar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idusuario`, `nombre`, `apellidos`, `correl`, `idrol`, `nombreusuario`, `correo`, `password`, `activo`, `fotor`, `fechar`) VALUES
(69, 'Ricardo Angel', 'Gallegos Sanchez', 2018010201, 3, 'rgs9313', 'modificado', '202cb962ac59075b964b07152d234b70', 0, 'assets/fotos/69.jpg', '2019-11-04 19:17:42'),
(73, 'root', 'eee', 2018020158, 2, 'root', '123', '202cb962ac59075b964b07152d234b70', 0, 'assets/fotos/73.jpg', '2019-11-04 19:34:38'),
(75, 'Ricardo Angel', 'Gallegos Sanchez', 2018020159, 3, 'rg919', 'eee', '202cb962ac59075b964b07152d234b70', 0, 'assets/fotos/75.jpg', '2019-11-04 19:38:47'),
(76, 'Nuevo Usuario', 'Gallegos', 678, 3, '221', 'q', '202cb962ac59075b964b07152d234b70', 0, 'assets/fotos/76.jpg', '2019-11-05 16:33:48'),
(77, 'Ricardo Angel', '2', 21, 3, 'SUSTEWR', '3', '202cb962ac59075b964b07152d234b70', 0, 'assets/fotos/77.jpg', '2019-11-05 16:36:38');

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
(3, 'Vamonos'),
(4, 'Proyector'),
(8, 'Telefonia'),
(11, 'Categoria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idaula`);

--
-- Indices de la tabla `botrecord`
--
ALTER TABLE `botrecord`
  ADD PRIMARY KEY (`idregistrobot`),
  ADD KEY `idusuario` (`idusuario`);

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
  MODIFY `idaula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `botrecord`
--
ALTER TABLE `botrecord`
  MODIFY `idregistrobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `procesoasig`
--
ALTER TABLE `procesoasig`
  MODIFY `idasig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `botrecord`
--
ALTER TABLE `botrecord`
  ADD CONSTRAINT `botrecord_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `registro` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

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

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2022 a las 01:24:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_caritas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `benefactores`
--

CREATE TABLE `benefactores` (
  `id_benefactores` int(11) NOT NULL,
  `nomBenef` varchar(30) DEFAULT NULL,
  `tipoPersona` varchar(30) DEFAULT NULL,
  `rfc` varchar(30) DEFAULT NULL,
  `activo` varchar(30) DEFAULT NULL,
  `id_donaExpecie` char(1) DEFAULT NULL,
  `id_donaEconom` char(1) DEFAULT NULL,
  `usuario` char(2) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `id_beneficiario` int(11) NOT NULL,
  `nomBen` varchar(30) NOT NULL,
  `apePatBenef` varchar(20) NOT NULL,
  `apeMatBenef` varchar(20) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `identOficial` varchar(0) NOT NULL,
  `edad` char(2) NOT NULL,
  `estadoCivil` varchar(11) NOT NULL,
  `fecha_rag` datetime DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `usuario` char(1) DEFAULT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id_carrusel` int(11) NOT NULL,
  `nombresCarr` varchar(25) NOT NULL,
  `cantImages` char(2) NOT NULL,
  `id_perm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaeconom`
--

CREATE TABLE `donaeconom` (
  `id_donaEcom` int(11) NOT NULL,
  `tipoDonacion` varchar(22) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `usuario` char(2) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaespecie`
--

CREATE TABLE `donaespecie` (
  `id_donaEspecia` int(11) NOT NULL,
  `articulo` varchar(20) DEFAULT NULL,
  `tipo` int(20) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `usuario` char(2) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nomEmp` varchar(30) NOT NULL,
  `apePatEmp` varchar(20) NOT NULL,
  `apeMatEmp` varchar(20) NOT NULL,
  `puesto` varchar(30) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `usuario` char(1) NOT NULL,
  `fecha_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` int(11) NOT NULL,
  `permiso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `ruta` text NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `usuario` char(1) NOT NULL,
  `fecha_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `aPaterno` varchar(20) NOT NULL,
  `aMaterno` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `pass`, `admin`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `enlace` varchar(45) DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `usuario` char(1) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE `voluntarios` (
  `id_voluntario` int(11) NOT NULL,
  `nombreVol` varchar(30) NOT NULL,
  `aPatVolun` varchar(20) NOT NULL,
  `aMatVolun` varchar(20) NOT NULL,
  `activo` text NOT NULL,
  `usuario` char(1) NOT NULL,
  `fecha_reg` datetime DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `benefactores`
--
ALTER TABLE `benefactores`
  ADD PRIMARY KEY (`id_benefactores`);

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`id_beneficiario`);

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id_carrusel`);

--
-- Indices de la tabla `donaeconom`
--
ALTER TABLE `donaeconom`
  ADD PRIMARY KEY (`id_donaEcom`);

--
-- Indices de la tabla `donaespecie`
--
ALTER TABLE `donaespecie`
  ADD PRIMARY KEY (`id_donaEspecia`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`id_voluntario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `benefactores`
--
ALTER TABLE `benefactores`
  MODIFY `id_benefactores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `id_beneficiario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id_carrusel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `donaeconom`
--
ALTER TABLE `donaeconom`
  MODIFY `id_donaEcom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `donaespecie`
--
ALTER TABLE `donaespecie`
  MODIFY `id_donaEspecia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

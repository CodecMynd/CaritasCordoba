-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2022 a las 22:10:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

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
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE `directivos` (
  `idDirectivo` int(11) NOT NULL,
  `nombreDirec` varchar(30) DEFAULT '--',
  `aPatDirec` varchar(25) DEFAULT '--',
  `aMatDirec` varchar(25) DEFAULT '--',
  `puesto` varchar(30) DEFAULT '--',
  `funcionPuesto` varchar(100) DEFAULT '--',
  `tel` varchar(14) DEFAULT '--',
  `correoElect` varchar(35) DEFAULT '--',
  `id_CapC` int(11) DEFAULT 0,
  `archivo` varchar(200) DEFAULT '--',
  `fecha_creacion` datetime DEFAULT '0000-01-01 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `verTablaUsuario` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `editarUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `asignarCon` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliminarUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `asignarPer` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `nuevoUsu` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regImgNosotros` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgNosotros` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgNosotros` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaImgNosotros` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regImgNosotrosDirectorio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgNosotrosDirectorio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgNosotrosDirectorio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaImgNosotrosDirectorio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regImgQayudar` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgQayudar` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgQayudar` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaImgQayudar` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regImgReportes` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgReportes` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgReportes` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaImgReportes` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regImgServicios` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgServicios` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgServicios` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaImgServicios` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `verTablaUsuario`, `editarUsu`, `asignarCon`, `eliminarUsu`, `asignarPer`, `nuevoUsu`, `verTablaImgInicio`, `regImgInicio`, `editarImgInicio`, `eliImgInicio`, `regImgNosotros`, `editarImgNosotros`, `eliImgNosotros`, `verTablaImgNosotros`, `regImgNosotrosDirectorio`, `editarImgNosotrosDirectorio`, `eliImgNosotrosDirectorio`, `verTablaImgNosotrosDirectorio`, `regImgQayudar`, `editarImgQayudar`, `eliImgQayudar`, `verTablaImgQayudar`, `regImgReportes`, `editarImgReportes`, `eliImgReportes`, `verTablaImgReportes`, `regImgServicios`, `editarImgServicios`, `eliImgServicios`, `verTablaImgServicios`, `id_usuario`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE `recursos` (
  `id_recurso` int(11) NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `ruta` text COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `titulo` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `subtitulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `descripcion` text COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `modulo` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `fecha_creacion` datetime DEFAULT '0000-01-01 00:00:00',
  `fecha_mod` datetime DEFAULT '0000-01-01 00:00:00',
  `id_capC` int(11) DEFAULT 0,
  `id_capM` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `aPaterno` varchar(20) NOT NULL,
  `aMaterno` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `super` tinyint(1) NOT NULL DEFAULT 0,
  `estatus` varchar(7) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT NULL,
  `id_captM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `pass`, `email`, `tel`, `admin`, `super`, `estatus`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'hola', '', 1, 1, '', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`idDirectivo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id_recurso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `idDirectivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id_recurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

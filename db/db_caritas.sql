-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 03:47:07
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
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE `recursos` (
  `id_recurso` int(11) NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ruta` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `subtitulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `modulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `recursos`
--

INSERT INTO `recursos` (`id_recurso`, `file`, `ruta`, `titulo`, `subtitulo`, `descripcion`, `modulo`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'banner-1.jpg', '../src/img/inicio/banner-1.jpg', 'Titulo Prueba', 'Subtitulo de prueba', 'adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit lab', 'carrusel1', '2022-03-16 00:47:56', '2022-03-16 01:35:55', 1, 1),
(2, 'banner-2.jpg', 'src/img/banner/banner-2.jpg', 'Titulo Prueba 2', 'Subtitulo prueba 2', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis ', 'carrusel1', '2022-03-16 01:21:13', NULL, 1, NULL),
(3, 'banner-3.jpg', 'src/img/banner/banner-3.jpg', 'Titulo Prueba 3', 'Subtitulo prueba 3', 'adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit lab', 'carrusel1', '2022-03-16 01:31:58', NULL, 1, NULL),
(4, 'banner-4.jpg', 'src/img/banner/banner-4.jpg', 'Titulo Prueba 4', 'Subtitulo prueba 4', 'adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit lab', 'carrusel1', '2022-03-16 01:32:18', NULL, 1, NULL),
(5, 'resenia-2 - copia.jpg', 'src/img/banner/resenia-2 - copia.jpg', 'Titulo Prueba', 'Subtitulo', 'aaa', 'carrusel2', '2022-03-16 01:56:42', NULL, 1, NULL),
(6, 'resenia-2.jpg', 'src/img/banner/resenia-2.jpg', 'Titulo Prueba', 'Subtitulo prueba 2', 's', 'carrusel2', '2022-03-16 02:07:28', NULL, 1, NULL),
(7, 'resenia-1.jpg', 'src/img/banner/resenia-1.jpg', 'Titulo Prueba', 'Subtitulo', '--', 'carrusel2', '2022-03-16 02:29:39', NULL, 1, NULL);

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
  `nuevoImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `editarImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliImgInicio` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `verTablaUsuario`, `editarUsu`, `asignarCon`, `eliminarUsu`, `asignarPer`, `nuevoUsu`, `verTablaImgInicio`, `nuevoImgInicio`, `editarImgInicio`, `eliImgInicio`, `id_usuario`) VALUES
(1, '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', 1),
(2, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 2);

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
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id_recurso`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id_recurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

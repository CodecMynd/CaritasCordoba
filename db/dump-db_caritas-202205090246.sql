-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: db_caritas
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCompleto` varchar(80) NOT NULL,
  `correoElectronico` varchar(40) DEFAULT '--',
  `asunto` varchar(30) DEFAULT '--',
  `mensaje` text DEFAULT '--',
  `tel` varchar(14) DEFAULT NULL,
  `id_CapC` int(11) DEFAULT 0,
  `fecha_creacion` datetime DEFAULT '0000-01-01 00:00:00',
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (4,'jose uriel guerra','aaa@a.aaaa','prueba','hola como estas','(221) 209-6482',1,'2022-04-30 19:32:34');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directivos`
--

DROP TABLE IF EXISTS `directivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directivos` (
  `idDirectivo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreDirec` varchar(30) DEFAULT '--',
  `aPatDirec` varchar(25) DEFAULT '--',
  `aMatDirec` varchar(25) DEFAULT '--',
  `puesto` varchar(30) DEFAULT '--',
  `funcionPuesto` varchar(100) DEFAULT '--',
  `tel` varchar(14) DEFAULT '--',
  `correoElect` varchar(35) DEFAULT '--',
  `id_CapC` int(11) DEFAULT 0,
  `archivo` varchar(200) DEFAULT '--',
  `fecha_creacion` datetime DEFAULT '0000-01-01 00:00:00',
  PRIMARY KEY (`idDirectivo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directivos`
--

LOCK TABLES `directivos` WRITE;
/*!40000 ALTER TABLE `directivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `directivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeriaservicios`
--

DROP TABLE IF EXISTS `galeriaservicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeriaservicios` (
  `id_galServicio` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `mes_anio` varchar(10) NOT NULL,
  `modulo` varchar(40) NOT NULL,
  `fechaRegistro` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_galServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeriaservicios`
--

LOCK TABLES `galeriaservicios` WRITE;
/*!40000 ALTER TABLE `galeriaservicios` DISABLE KEYS */;
INSERT INTO `galeriaservicios` VALUES (2,'1.jpeg','Prueba de Imagen ????????','2022-05','Servicio Escucha de Casos','2022-05-02 21:51:35',1);
/*!40000 ALTER TABLE `galeriaservicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
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
  `nuevoEscuchaCasos` tinyint(1) NOT NULL DEFAULT 0,
  `editarSerEscuCasos` tinyint(1) NOT NULL DEFAULT 0,
  `eliminarSerEscuCasos` tinyint(1) NOT NULL DEFAULT 0,
  `verTablaEscuchaCasos` tinyint(1) NOT NULL DEFAULT 0,
  `nuevoGalServicios` tinyint(1) NOT NULL DEFAULT 0,
  `eliminarGalServicios` tinyint(1) NOT NULL DEFAULT 0,
  `verTablaGalServicios` tinyint(1) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` VALUES (1,'1','1','1','1','1','1','1','1','1','1','1','1','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0',0,0,0,0,0,0,0,1);
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos`
--

DROP TABLE IF EXISTS `recursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos` (
  `id_recurso` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `ruta` text COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `titulo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `subtitulo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `descripcion` text COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `modulo` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `idServicio` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '--',
  `fechaImgServ` varchar(7) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT '0000-01-01 00:00:00',
  `fecha_mod` datetime DEFAULT '0000-01-01 00:00:00',
  `id_capC` int(11) DEFAULT 0,
  `id_capM` int(11) DEFAULT 0,
  PRIMARY KEY (`id_recurso`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos`
--

LOCK TABLES `recursos` WRITE;
/*!40000 ALTER TABLE `recursos` DISABLE KEYS */;
INSERT INTO `recursos` VALUES (18,'banner.jpg','servicios','--','--','--','bannerServ','--','','2022-05-09 01:05:09','0000-01-01 00:00:00',1,0),(19,'1-escuchaCasos.png','servicios','Escucha de Casos','--','Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eleifend efficitur enim, sed pretium purus gravida nec. Aenean porta tortor ac ipsum egestas porttitor. Aliquam erat volutpat. Dui','escuchaCasos','--','','2022-05-09 01:07:29','0000-01-01 00:00:00',1,0),(21,'1-despensaAncianos.png','servicios','Consultas Psicológicas','--','Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eleifend efficitur enim, sed pretium purus gravida nec. Aenean porta tortor ac ipsum egestas porttitor. Aliquam erat volutpat. Dui','consultasPsicologicas','--','','2022-05-09 01:35:45','0000-01-01 00:00:00',1,0);
/*!40000 ALTER TABLE `recursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(40) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `modulo` varchar(40) NOT NULL,
  `imgBanner` varchar(100) NOT NULL,
  `imgPrincipal` varchar(100) NOT NULL,
  `fechaRegistro` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (5,'Escucha de Casos','Nuestro Servicio','Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eleifend efficitur enim, sed pretium purus gravida nec. Aenean porta tortor ac ipsum egestas porttitor. Aliquam erat volutpat. Duis iaculis dolor ligula, fringilla congue metus mollis quis. Vivamus eu viverra nisi. Quisque non felis sem. Integer mauris nisi, interdum interdum molestie id, maximus ac eros. Curabitur ut urna hendrerit, rutrum ante rhoncus, venenatis libero. Vivamus lacus turpis, dignissim nec magna vitae, condim','Servicio Escucha de Casos','resenia-1.jpg','resenia-2.jpg','2022-05-09 01:08:27',1);
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_captM` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','admin','admin','admin','admin','hola','',1,1,'',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_caritas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-09  2:46:53

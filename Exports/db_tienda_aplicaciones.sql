-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 05:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tienda_aplicaciones`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aplicaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_aplicaciones` (
  `codigo_aplicacion` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_desarrollador` int(11) NOT NULL,
  `nombre_aplicacion` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL,
  `version` varchar(45) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `url_icono` varchar(45) NOT NULL,
  `calificacion` decimal(10,0) NOT NULL,
  PRIMARY KEY (`codigo_aplicacion`),
  KEY `fk_tbl_aplicaciones_tbl_usuarios1_idx` (`codigo_desarrollador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_aplicaciones`
--

INSERT INTO `tbl_aplicaciones` (`codigo_aplicacion`, `codigo_desarrollador`, `nombre_aplicacion`, `descripcion`, `fecha_publicacion`, `fecha_actualizacion`, `version`, `url`, `url_icono`, `calificacion`) VALUES
(1, 1, 'Facebook', 'Aplicacion para buscar amigos', '2016-10-20', '2016-10-27', '1.0', 'apks/aplicacion1.apk', 'http://localhost/playstore/img/icono1.png', '5'),
(2, 1, 'Youtube', 'Aplicacion para ver videos', '2016-10-12', '2016-10-11', '1.5', 'apks/aplicacion2.apk', 'http://localhost/playstore/img/icono2.png', '4'),
(3, 2, 'Clash of Clans', 'Aplicacion para jugar mucho', '2016-10-04', '2016-10-13', '5.0', 'apks/aplicacion3.apk', 'http://localhost/playstore/img/icono3.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorias`
--

CREATE TABLE IF NOT EXISTS `tbl_categorias` (
  `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`codigo_categoria`, `nombre_categoria`) VALUES
(6, 'Juegos'),
(7, 'Sociales'),
(8, 'Musica'),
(9, 'Casuales'),
(10, 'nueva Categoria');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorias_x_aplicacion`
--

CREATE TABLE IF NOT EXISTS `tbl_categorias_x_aplicacion` (
  `codigo_categoria` int(11) NOT NULL,
  `codigo_aplicacion` int(11) NOT NULL,
  PRIMARY KEY (`codigo_categoria`,`codigo_aplicacion`),
  KEY `fk_tbl_categorias_has_tbl_aplicaciones_tbl_aplicaciones1_idx` (`codigo_aplicacion`),
  KEY `fk_tbl_categorias_has_tbl_aplicaciones_tbl_categorias1_idx` (`codigo_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comentarios`
--

CREATE TABLE IF NOT EXISTS `tbl_comentarios` (
  `codigo_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `calificacion` decimal(10,0) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_aplicacion` int(11) NOT NULL,
  PRIMARY KEY (`codigo_comentario`),
  KEY `fk_tbl_comentarios_tbl_usuarios1_idx` (`codigo_usuario`),
  KEY `fk_tbl_comentarios_tbl_aplicaciones1_idx` (`codigo_aplicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipos_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarios` (
  `codigo_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_tipos_usuarios`
--

INSERT INTO `tbl_tipos_usuarios` (`codigo_tipo_usuario`, `nombre_tipo_usuario`) VALUES
(1, 'Usuario normal'),
(2, 'Desarrollador');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_tipo_usuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fotografia` blob,
  PRIMARY KEY (`codigo_usuario`),
  KEY `fk_tbl_usuarios_tbl_tipos_usuarios_idx` (`codigo_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `codigo_tipo_usuario`, `usuario`, `correo_electronico`, `nombre`, `apellido`, `genero`, `fecha_nacimiento`, `fotografia`) VALUES
(1, 2, 'jperez', 'juan@gmail.com', 'Juan', 'Perez', 'M', '2016-10-21', NULL),
(2, 2, 'mrodriguez', 'mrodriguez@gmail.com', 'Maria', 'Rodriguez', 'F', '2016-10-18', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_categorias_x_aplicacion`
--
ALTER TABLE `tbl_categorias_x_aplicacion`
  ADD CONSTRAINT `fk_tbl_categorias_has_tbl_aplicaciones_tbl_aplicaciones1` FOREIGN KEY (`codigo_aplicacion`) REFERENCES `tbl_aplicaciones` (`codigo_aplicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_categorias_has_tbl_aplicaciones_tbl_categorias1` FOREIGN KEY (`codigo_categoria`) REFERENCES `tbl_categorias` (`codigo_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD CONSTRAINT `fk_tbl_comentarios_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

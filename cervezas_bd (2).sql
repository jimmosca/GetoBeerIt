-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 23:54:01
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cervezas_bd`
--
CREATE DATABASE IF NOT EXISTS `cervezas_bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `cervezas_bd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `Nombre`) VALUES
(5, 'Bea'),
(6, 'Bea'),
(7, 'Bea'),
(8, 'Bea'),
(9, 'Bea'),
(10, 'Bea'),
(11, 'Bea'),
(12, 'Bea'),
(13, 'Bea'),
(14, 'Bea'),
(15, 'Bea'),
(16, 'Bea'),
(17, 'Bea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(1, 'Leffe'),
(2, 'Spaten'),
(3, 'La Virgen'),
(4, 'Franziskaner '),
(5, 'Paulaner '),
(6, 'Estrella Galicia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

DROP TABLE IF EXISTS `opiniones`;
CREATE TABLE `opiniones` (
  `id_opinion` int(11) NOT NULL,
  `id_usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_producto` int(11) NOT NULL,
  `titulo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estrellas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`id_opinion`, `id_usuario`, `id_producto`, `titulo`, `texto`, `estrellas`) VALUES
(1, 'Bea', 4, 'Vaya Mierda', 'Me parece decepcionante que puedan vender semejante basura a tal precio, no lo recomiendo', 2),
(2, 'Bea', 4, 'Vaya Mierda', 'Esto mola', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `botella` int(4) NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novedad` tinyint(1) NOT NULL DEFAULT '0',
  `descuento` int(11) NOT NULL DEFAULT '0',
  `graduacion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `stock`, `id_marca`, `id_tipo`, `botella`, `imagen`, `pais`, `novedad`, `descuento`, `graduacion`) VALUES
(4, 'Franziskaner', 15, 40, 4, 1, 330, 'franziskaner.png', 'Alemania', 0, 0, 3.5),
(5, 'Jamonera', 3, 25, 3, 1, 330, 'La_Virgen_Jamonera.jpg', 'España', 0, 0, 5.6),
(6, 'Leffe', 2, 50, 1, 2, 330, 'leffe.jpg', 'Bélgica', 1, 0, 6.6),
(7, 'Leffe Ruby', 4, 30, 1, 4, 550, 'cerveza-leffe-ruby.png', 'Bélgica', 0, 1, 5),
(8, 'Rituel 9', 6, 20, 1, 3, 660, 'cerveza-leffe-rituel-9.jpg', 'Bélgica', 1, 0, 10),
(9, 'Madrid', 6, 50, 3, 2, 550, 'La_virgen_madrid_lager.jpg', 'España', 1, 0, 5.2),
(10, 'Black Coupage', 12, 10, 6, 2, 660, 'Black_Coupage.jpg', 'España', 0, 1, 3.4),
(11, 'Franziskaner dunkel', 8, 40, 4, 3, 550, 'cerveza-franziskaner-weissbier-dunkel.jpg', 'Alemania', 1, 0, 7.6),
(12, 'Optimator', 13, 50, 2, 2, 660, 'cerveza-spaten-optimator.png', 'Alemania', 0, 0, 3.8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cerveza`
--

DROP TABLE IF EXISTS `tipo_cerveza`;
CREATE TABLE `tipo_cerveza` (
  `id_cerveza` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_cerveza`
--

INSERT INTO `tipo_cerveza` (`id_cerveza`, `nombre`) VALUES
(1, 'Ale'),
(2, 'Lager'),
(3, 'Pale'),
(4, 'Lambic');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_cuenta` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `contrasena`, `direccion`, `telefono`, `email`, `nombre`, `apellido`, `num_cuenta`) VALUES
('Bea', '1234', 'Luis LÃ³pez n16', 665980699, 'blopezdm@gmail.com', 'lopez', 'moral', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id_opinion`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `tipo_cerveza`
--
ALTER TABLE `tipo_cerveza`
  ADD PRIMARY KEY (`id_cerveza`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id_opinion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_cerveza`
--
ALTER TABLE `tipo_cerveza`
  MODIFY `id_cerveza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD CONSTRAINT `opiniones_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `opiniones_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_cerveza` (`id_cerveza`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_cerveza` (`id_cerveza`),
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

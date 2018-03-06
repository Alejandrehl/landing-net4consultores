-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-02-2018 a las 11:51:01
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `netcl_sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nombre_cliente` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `nombre_comercial` varchar(255) NOT NULL,
  `numero_identificacion` varchar(11) NOT NULL,
  `giro` varchar(150) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `email` varchar(64) NOT NULL,
  `fijo` varchar(30) NOT NULL,
  `movil` varchar(30) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha_agregado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `nombre_cliente`, `nombre_comercial`, `numero_identificacion`, `giro`, `contacto`, `email`, `fijo`, `movil`, `direccion`, `fecha_agregado`) VALUES
(29, 'Prueba', 'pruena', 'prueba', 'prueba', 'prueba', 'prueba@prueba.cl', 'prueba', 'prueba', 'prueba', '2018-02-14 17:22:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detail_estimate`
--

CREATE TABLE `detail_estimate` (
  `id_detalle_cotizacion` int(11) NOT NULL,
  `numero_cotizacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descuento` int(2) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detail_estimate`
--

INSERT INTO `detail_estimate` (`id_detalle_cotizacion`, `numero_cotizacion`, `id_producto`, `cantidad`, `descuento`, `precio_venta`) VALUES
(302, 1, 1061, 1, 0, 1000),
(303, 1, 1061, 1, 0, 1000),
(304, 1, 1061, 12, 0, 1000),
(305, 1, 1061, 1, 0, 1000),
(306, 1, 1061, 1, 0, 1000),
(307, 1, 1061, 1, 0, 1000),
(308, 1, 1061, 1, 0, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `propietario` varchar(60) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(64) NOT NULL,
  `giro` varchar(150) NOT NULL,
  `nrc` varchar(12) NOT NULL,
  `iva` int(2) NOT NULL,
  `moneda` varchar(3) NOT NULL,
  `date_added` datetime NOT NULL,
  `logo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `propietario`, `direccion`, `telefono`, `email`, `giro`, `nrc`, `iva`, `moneda`, `date_added`, `logo_url`) VALUES
(1, 'Eleredes ', 'Jose Luis Guajardo Garcia', 'Santiago', '(+56) 9 7 691461', 'jguajardo@eleredes.com', 'Redes Informaticas', '123456-2', 16, '$', '2016-03-09 00:00:00', 'img/logo/google30.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estimates`
--

CREATE TABLE `estimates` (
  `id_cotizacion` int(11) NOT NULL,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `notas` varchar(255) NOT NULL,
  `null` varchar(255) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `total_neto` double NOT NULL,
  `total_iva` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) DEFAULT NULL,
  `status_fabricante` int(1) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `manufacturers`
--

INSERT INTO `manufacturers` (`id_marca`, `nombre_marca`, `status_fabricante`, `date_added`) VALUES
(97, 'prueba', 1, '2018-02-14 17:23:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` varchar(20) DEFAULT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `modelo_producto` varchar(30) DEFAULT NULL,
  `id_marca_producto` int(11) DEFAULT NULL,
  `status_producto` int(11) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL DEFAULT '2015-11-21 00:00:00',
  `precio_producto` double NOT NULL DEFAULT '1000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `codigo_producto`, `nombre_producto`, `modelo_producto`, `id_marca_producto`, `status_producto`, `date_added`, `precio_producto`) VALUES
(1061, 'prueba', 'prueba', 'prueba', 97, 1, '2018-02-14 17:23:17', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_estimate`
--

CREATE TABLE `tmp_estimate` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `descuento_tmp` int(2) NOT NULL,
  `precio_tmp` double DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tmp_estimate`
--

INSERT INTO `tmp_estimate` (`id_tmp`, `id_producto`, `cantidad_tmp`, `descuento_tmp`, `precio_tmp`, `session_id`) VALUES
(519, 1061, 1, 0, 1000, 'i47c6ii2ljsa1cq0ki7t6u7l11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(17, '', '', 'admin', '$2y$10$vQxYj6yA0/TJZ48jDxj4AuF2QWLadaBOZ09oz6he6vLw7xhCoHR36', 'admin@admin.com', '2016-03-09 13:56:10'),
(19, 'jguajardo', 'prueba', 'prueba', '$2y$10$78.vJQOl/c4ogOi3k88tau1rVeqZgHPgtG6z7p/qcdhtUuV.Wr0ke', 'prueba@prueba.cl', '2018-02-14 17:24:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detail_estimate`
--
ALTER TABLE `detail_estimate`
  ADD PRIMARY KEY (`id_detalle_cotizacion`),
  ADD KEY `numero_cotizacion` (`numero_cotizacion`,`id_producto`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `estimates`
--
ALTER TABLE `estimates`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD UNIQUE KEY `numero_cotizacion` (`numero_cotizacion`);

--
-- Indices de la tabla `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tmp_estimate`
--
ALTER TABLE `tmp_estimate`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `detail_estimate`
--
ALTER TABLE `detail_estimate`
  MODIFY `id_detalle_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estimates`
--
ALTER TABLE `estimates`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1062;

--
-- AUTO_INCREMENT de la tabla `tmp_estimate`
--
ALTER TABLE `tmp_estimate`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

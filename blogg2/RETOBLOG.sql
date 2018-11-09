-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2018 a las 10:42:25
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `RETOBLOG`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `numero_comentario` bigint(20) UNSIGNED NOT NULL,
  `titulo_entrada` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario_comentario` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`numero_comentario`, `titulo_entrada`, `contenido`, `fecha`, `usuario_comentario`) VALUES
(1, 'TARTA DE CHOCOLATE', 'muy rica', '2018-01-28 00:00:00', 'admin'),
(2, 'Platano', 'que rico', '2018-11-15 00:00:00', 'anne'),
(3, 'TARTA DE CHOCOLATE', 'la receta mas buena', '2018-11-20 00:00:00', 'anne');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fecha_entrada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`titulo`, `contenido`, `fecha_entrada`) VALUES
('Flan de huevo', '1.- PreparaciÃ³n del caramelo. Coloca en un cazo el azÃºcar para el caramelo y aÃ±ade 2 o 3 cucharadas de agua. Enciende el fuego y deja hasta que se dore. No hay que hacerle nada, solo esperar a que coja un bonito color dorado. Cuando el caramelo alcance el color dorado que desees, viÃ©rtelo en el molde donde vas a preparar el flan. Reserva.', '2018-10-19 00:00:00'),
('HELADO', 'Colocar todos los ingredientes en el vaso de la batidora y triturar hasta tener una mezcla homogÃ©nea. \r\nRepartir en los moldes para polos y congelar.', '2018-10-24 00:00:00'),
('Platano', 'platano', '2018-10-11 00:00:00'),
('prueba', 'prueba', '2018-10-10 00:00:00'),
('TARTA DE CHOCOLATE', 'Esta tarta mousse es un capricho para los amantes del chocolate, tan delicada que se funde en la boca. Tiene una textura muy suave y, pese a sus ingredientes es muy ligera. Esta receta lleva una deliciosa y ya clÃ¡sica base de galletas que contrasta con el mousse.', '2018-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `correo`, `pass`) VALUES
('admin', 'admin@admin.com', '$2y$10$1uzjeDugRELgdxHWeUsrfOvEht1bNlhJnIcJBu.m375mDM7Uj.ttu'),
('anne', 'anne@anne.com', '$2y$10$z9wEHuvCBWDKL6S5gh74o.9J8R65SYhqD/rBbegL4yjhSjX/YxB6a'),
('vanesa', 'vanesa@vanesa.com', '$2y$10$IkcbTX2BWo68LnJl6blPxe5ezFL3QLTZq/F.VW3TRWs4cSsVpnmBa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`numero_comentario`),
  ADD UNIQUE KEY `id_comentario` (`numero_comentario`),
  ADD KEY `usuario_comentario` (`usuario_comentario`),
  ADD KEY `titulo_entrada` (`titulo_entrada`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `numero_comentario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usuario_comentario`) REFERENCES `usuario` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`titulo_entrada`) REFERENCES `entrada` (`titulo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

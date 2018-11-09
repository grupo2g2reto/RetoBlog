-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2018 a las 17:33:14
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
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_comentario` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`numero_comentario`, `titulo_entrada`, `contenido`, `fecha`, `usuario_comentario`) VALUES
(1, 'TARTA DE CHOCOLATE', 'muy rica', '2018-01-28 00:00:00', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fecha_entrada` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`titulo`, `contenido`, `fecha_entrada`) VALUES
('Flan de huevo', '1.- PreparaciÃ³n del caramelo. Coloca en un cazo el azÃºcar para el caramelo y aÃ±ade 2 o 3 cucharadas de agua. Enciende el fuego y deja hasta que se dore. No hay que hacerle nada, solo esperar a que coja un bonito color dorado. Cuando el caramelo alcance el color dorado que desees, viÃ©rtelo en el molde donde vas a preparar el flan. Reserva.', '2018-10-19 00:00:00'),
('HELADO', 'Colocar todos los ingredientes en el vaso de la batidora y triturar hasta tener una mezcla homogÃ©nea. \r\nRepartir en los moldes para polos y congelar.', '2018-10-24 00:00:00'),
('Pastel Tres Leches', '30 mins. de preparaciÃ³n\r\n20 mins. de cocciÃ³n\r\n0 mins. de descanso\r\n50 mins. en total\r\nPorciones: 12\r\nDificultad: Avanzado\r\n\r\n\r\nGuardar Email Imprimir\r\nIngredientes\r\nPASTEL\r\n6 claras de huevo tamaÃ±o grande\r\n1/2 taza de azÃºcar granulada, uso dividido\r\n6 yemas de huevo tamaÃ±o grande\r\n1 taza de harina para todo uso, cernida\r\nCREMA\r\n1 lata (14 oz.) de leche condensada NESTLÃ‰ CARNATION Sweetened Condensed Milk\r\n1 lata (7.6 fl. oz.) de Media Crema NESTLÃ‰, o 1 taza de crema espesa para batir', '2018-11-09 00:00:00'),
('TARTA DE CHOCOLATE', 'Esta tarta mousse es un capricho para los amantes del chocolate, tan delicada que se funde en la boca. Tiene una textura muy suave y, pese a sus ingredientes es muy ligera. Esta receta lleva una deliciosa y ya clÃ¡sica base de galletas que contrasta con el mousse.', '2018-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `correo`, `pass`) VALUES
('admin', 'admin@admin.com', '$2y$10$1uzjeDugRELgdxHWeUsrfOvEht1bNlhJnIcJBu.m375mDM7Uj.ttu'),
('andoni', 'andoni@andoni.com', '$2y$10$bvbUyB/kU3QHSiGDE2M11OV05fC2GdkWNnSoiIgfih9uO7XKEQHFC');

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
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `numero_comentario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usuario_comentario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`titulo_entrada`) REFERENCES `entrada` (`titulo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

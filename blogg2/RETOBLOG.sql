-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2018 a las 19:51:09
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
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fecha_entrada` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`titulo`, `contenido`, `fecha_entrada`) VALUES
('BRAZO DE GITANO CON CREMA DE CASTANA', 'Ingredientes para Brazo de gitano con crema de castaÃ±as\r\nPara el bizcocho: 4 huevos (tamaÃ±o L)\r\n120 gr. de harina tamizada\r\n120 gr. de azÃºcar\r\nÂ½ sobre de levadura en polvo (8 gr.)\r\nuna pizca de sal fina\r\nPara el relleno: 300 gr. de crema de castaÃ±as\r\n150 ml. de nata lÃ­quida (para montar)\r\nPara la decoraciÃ³n: Cacao en polvo sin azÃºcar (vuestra marca preferida) y canela en rama\r\nPreparaciÃ³n del brazo de gitano relleno de crema de castaÃ±as\r\nMontamos la nata con la batidora, y aÃ±adimos a la crema de castaÃ±as. Con una espÃ¡tula mezclamos con movimientos envolventes, para que quede bien cremosa. Reservamos en la nevera, asÃ­ cogerÃ¡ textura y consistencia.\r\nSeparamos las yemas de las claras. Montamos las claras a punto de nieve, con una pizca de sal. Cuando estÃ©n listas, vamos aÃ±adiendo las yemas, al tiempo que mezclamos bien.\r\nA continuaciÃ³n el azÃºcar, que echamos poco a poco, y seguimos mezclando sin parar. Finalmente, echamos la harina y volvemos a remover para obtener una crema homogÃ©nea y sin grumos.\r\nPrecalentamos el horno, 5 minutos a 180Âº C. Colocamos papel sobre la bandeja del horno, y vertemos la crema sobre Ã©l. Horneamos unos 10/12 minutos, en la funciÃ³n calor arriba-abajo o â€œcalor totalâ€. Estad atentos de que no se tueste demasiado.\r\nRetiramos y dejamos que se atempere, cubierto con un paÃ±o limpio. Le damos la vuelta a la bandeja y desmoldamos. Recortamos las esquinas, y dejamos un rectÃ¡ngulo. Con la ayuda del trapo, vamos enrollando el bizcocho (a lo ancho), para que vaya cogiendo la forma.\r\nCon la ayuda del trapo, enrollamos el bizcocho, para que coja la forma. Dejamos asÃ­ tapado y enrollado, hasta que enfrÃ­e. Desenrollamos, extendemos la crema de castaÃ±as y nata, y volvemos a enrollar cuidadosamente. Hasta que consigamos un rulo perfecto.\r\nEl bizcocho enrollado lo metemos a la nevera para que enfrÃ­e, y la crema se compacte aÃºn mÃ¡s. Por lo menos debe de estar unas 2 horas, aunque os recomiendo hacerlo de â€œvÃ­speraâ€, el dÃ­a anterior.\r\nLa mejor opciÃ³n es decorarlo un rato antes de servirlo en la mesa. Espolvoreamos cacao en polvo sobre el brazo de gitano, con la ayuda de un colador. Por encima, le he puesto unas lÃ¡minas rotas de canela en rama.', '2018-11-09 19:02:44'),
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
('andoni', 'andoni@andoni.com', '$2y$10$bvbUyB/kU3QHSiGDE2M11OV05fC2GdkWNnSoiIgfih9uO7XKEQHFC'),
('anne', 'anne@anne.com', '$2y$10$/glLLbngIjv3gpfcozInnOv8yFBCwNpjAFp2mm1xjfc9NINvot3xC');

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
  MODIFY `numero_comentario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 00:50:39
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `retoblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `numero_comentario` bigint(20) UNSIGNED NOT NULL,
  `titulo_entrada` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_comentario` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`numero_comentario`, `titulo_entrada`, `contenido`, `fecha`, `usuario_comentario`) VALUES
(7, 'PASTEL TRES LECHES', 'que rico', '2018-11-12 18:20:46', 'anne'),
(10, 'BRAZO DE GITANO DE CASTANA', 'MUY ORIGINAL', '2018-11-12 18:23:50', 'anne');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fecha_entrada` datetime DEFAULT CURRENT_TIMESTAMP,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`titulo`, `contenido`, `fecha_entrada`, `imagen`) VALUES
('BRAZO DE GITANO DE CASTANA', 'Ingredientes para Brazo de gitano con crema de castaÃ±as\r\nPara el bizcocho: 4 huevos (tamaÃ±o L)\r\n120 gr. de harina tamizada\r\n120 gr. de azÃºcar\r\nÂ½ sobre de levadura en polvo (8 gr.)\r\nuna pizca de sal fina\r\nPara el relleno: 300 gr. de crema de castaÃ±as\r\n150 ml. de nata lÃ­quida (para montar)\r\nPara la decoraciÃ³n: Cacao en polvo sin azÃºcar (vuestra marca preferida) y canela en rama\r\nPreparaciÃ³n del brazo de gitano relleno de crema de castaÃ±as\r\nMontamos la nata con la batidora, y aÃ±adimos a la crema de castaÃ±as. Con una espÃ¡tula mezclamos con movimientos envolventes, para que quede bien cremosa. Reservamos en la nevera, asÃ­ cogerÃ¡ textura y consistencia.\r\nSeparamos las yemas de las claras. Montamos las claras a punto de nieve, con una pizca de sal. Cuando estÃ©n listas, vamos aÃ±adiendo las yemas, al tiempo que mezclamos bien.\r\nA continuaciÃ³n el azÃºcar, que echamos poco a poco, y seguimos mezclando sin parar. Finalmente, echamos la harina y volvemos a remover para obtener una crema homogÃ©nea y sin grumos.\r\nPrecalentamos el horno, 5 minutos a 180Âº C. Colocamos papel sobre la bandeja del horno, y vertemos la crema sobre Ã©l. Horneamos unos 10/12 minutos, en la funciÃ³n calor arriba-abajo o â€œcalor totalâ€. Estad atentos de que no se tueste demasiado.\r\nRetiramos y dejamos que se atempere, cubierto con un paÃ±o limpio. Le damos la vuelta a la bandeja y desmoldamos. Recortamos las esquinas, y dejamos un rectÃ¡ngulo. Con la ayuda del trapo, vamos enrollando el bizcocho (a lo ancho), para que vaya cogiendo la forma.\r\nCon la ayuda del trapo, enrollamos el bizcocho, para que coja la forma. Dejamos asÃ­ tapado y enrollado, hasta que enfrÃ­e. Desenrollamos, extendemos la crema de castaÃ±as y nata, y volvemos a enrollar cuidadosamente. Hasta que consigamos un rulo perfecto.\r\nEl bizcocho enrollado lo metemos a la nevera para que enfrÃ­e, y la crema se compacte aÃºn mÃ¡s. Por lo menos debe de estar unas 2 horas, aunque os recomiendo hacerlo de â€œvÃ­speraâ€, el dÃ­a anterior.\r\nLa mejor opciÃ³n es decorarlo un rato antes de servirlo en la mesa. Espolvoreamos cacao en polvo sobre el brazo de gitano, con la ayuda de un colador. Por encima, le he puesto unas lÃ¡minas rotas de canela en rama.', '2018-11-09 19:02:44', ''),
('NUEZ CON PINA', 'Ingredientes\r\n1 lata (12 fl. oz.) de leche evaporada NESTLÃ‰ CARNATION Evaporated Milk\r\n1 taza de nueces (pacanas), picadas\r\n1 paquete (8 oz.) de queso crema, cortado\r\n1 frasco (12 oz.) de mermelada de piÃ±a\r\n1 trozos de piÃ±a fresca y hojas de menta\r\n\r\nVIERTE la leche evaporada, las nueces (pacanas), queso crema y la conserva de piÃ±a en la licuadora; cÃºbrelo. Licua hasta que estÃ© suave. Vierte 1/2 taza de la mezcla en cada una de las 8 copas de postre o moldecitos para flan. RefrigÃ©ralos durante 2 horas o hasta que estÃ©n bien frÃ­os. Decora con trozos de piÃ±a y hojas de menta, si lo deseas.', '2018-11-12 19:52:06', ''),
('PASTEL TRES LECHES', '30 mins. de preparacion\r\n20 mins. de coccion\r\n0 mins. de descanso\r\n50 mins. en total\r\nPorciones: 12\r\nDificultad: Avanzado\r\n\r\n\r\nGuardar Email Imprimir\r\nIngredientes\r\nPASTEL\r\n6 claras de huevo tamaÃ±o grande\r\n1/2 taza de azÃºcar granulada, uso dividido\r\n6 yemas de huevo tamaÃ±o grande\r\n1 taza de harina para todo uso, cernida\r\nCREMA\r\n1 lata (14 oz.) de leche condensada NESTLÃ‰ CARNATION Sweetened Condensed Milk\r\n1 lata (7.6 fl. oz.) de Media Crema NESTLE, o 1 taza de crema espesa para batir', '2018-11-09 09:00:00', ''),
('TARTA DE CHOCOLATE', 'Ingredientes de la receta de tarta de chocolate:\r\nPara 4-6 personas:\r\n250 gr de chocolate de cobertura\r\n2 vasos de leche\r\n250 gr de azÃºcar\r\n125 gr de mantequilla\r\n125 gr de harina\r\n6 yemas y 8 claras de huevo\r\nmantequilla y harina para untar el molde\r\n150 gr de chocolate glaseado\r\n\r\nElaboraciÃ³n de la receta de tarta de chocolate:\r\nEn una cazuela pon la leche con el azÃºcar, la mantequilla y el chocolate. Calienta suavemente y removiendo hasta que los ingredientes se fundan y se mezclen. AÃ±ade las yemas sin parar de remover y a continuaciÃ³n la harina tamizada, mezclÃ¡ndolo todo bien. Retira del fuego.\r\n\r\nDeja reposar la masa hasta que pierda calor. Mientras, monta las claras a punto de nieve. AÃ±ade estas claras al resto y mezcla con cuidado.\r\n\r\nColoca la masa en un molde untado con mantequilla y espolvoreado con harina. Hornea a 175Âº durante 30 a 40 minutos. Deja enfriar, desmolda y baÃ±a la tarta con el chocolate glaseado.', '2018-11-12 19:49:14', '');

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
('anne', 'anne@anne.com', '$2y$10$/glLLbngIjv3gpfcozInnOv8yFBCwNpjAFp2mm1xjfc9NINvot3xC'),
('vanesa', 'vanesa@vanesa.com', '$2y$10$hvF.4cyi52X3ZtlgYH.EVevPoQRz8AcEEZudLhCmUbU0UGa2sSqki');

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
  MODIFY `numero_comentario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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

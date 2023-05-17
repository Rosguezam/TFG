-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2023 a las 18:45:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajofingrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pillbox`
--

CREATE TABLE `pillbox` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tomas_diarias` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `principio_activo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_farmaceutica` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `via_administracion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pillbox`
--

INSERT INTO `pillbox` (`id`, `usuario_id`, `nombre`, `dosis`, `descripcion`, `tomas_diarias`, `principio_activo`, `forma_farmaceutica`, `via_administracion`) VALUES
(1, 7, 'Ibuprofeno ', '100mg', 'Pastillita redonda pequeña  ', '4  ', 'Ibuprofeno ', 'Forma redonda  ', 'Oral'),
(3, 7, 'Aspirina ', '250g', 'Pastillita redonda pequeña ', '4 ', 'AAS ', 'Forma redonda ', 'Sublingual '),
(5, 7, 'paracetamol', '400g', 'sobres', '3', 'paracetamol', 'soluble', 'oral'),
(36, 12, 'Ibuprofeno       ', '500mg       ', 'Analgésico e aintiinflamatorio       ', '4 al día     ', 'Ibuprofeno       ', 'Capsula       ', 'Oral       '),
(37, 12, 'DIGOXINA KERN PHARMA ', '0,25mg', 'Se usa para tratar la insufiencia cardiaca y para problemas con el ritmo del corazón', '1 al día', 'DIGOXINA', 'COMPRIMIDO', 'Oral'),
(38, 12, 'AMERIDE', '5/50 MG/MG', 'Hipertensivo', '', 'AMILORIDA HIDROCLORURO,HIDROCLOROTIAZIDA', 'COMPRIMIDO', 'Oral'),
(39, 12, 'ACTRAPID  ', '100 UI/ML ', 'Bote rojo ', '3 al día ', 'Insulina soluble', 'Solucion inyectable ', 'Ultravenosa y subcutánea '),
(40, 12, 'Caso persona mayor', '', 'Pastilla blanca larga', '2. Mañana y Noche', '', '', 'Oral'),
(45, 19, 'Aspirina', '', 'Pastilla blanca redonda, para el dolor de cabeza', '3, mañana , tarde y noche', '', '', 'Oral'),
(46, 19, 'Sintrom  ', '  ', 'Para la sangre. Pastilla blanca pequeña con una cruz  ', '2.Mañana y noche tras comer ', '  ', 'pastilla  ', 'oral  '),
(47, 12, 'Aspirina', '500mg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'prueba@mail.com', '$2y$10$.nB7yRTRLo33yfqaiMcNYe7uYC18nr9dHwbT2B6DWI89wzC.mWkLG'),
(2, 'prueba2@mail.com', '$2y$10$vjLBuHhVAL9fC8lC1pN2t.8LTS/ZHZBTWkxRbO6vNFK7z1kRD2m8e'),
(3, 'prueba3@mail.com', '$2y$10$TbL6xMQ2XlDjXlC5qq8kze38NPo9B7DbkgNn3PaTpzqBdCAPIGFVO'),
(4, 'test3@mail.com', '$2y$10$ilAahQk6Qr9tXGWbVPwXyOoE2HrAbtc9nTgRk8Fu7ONCSG3mdg/Ie'),
(5, 'rosaprueba@gmail.com', '$2y$10$Wp2PLU9zUw08h7HG5MypoO.D4HIack/Zwq.7qw27QEx0V8qWCog6a'),
(7, 'rosa2@mail.com', '$2y$10$SuqUxcmqlXEhvQyWpc56l.9zq7EshoIzQBgb1pcmOuJrIUVL3VsGa'),
(8, 'rosa3@mail.com', '$2y$10$a97nKRJPaRHPl3nkRPbSKOaZz9qi43WqT8KZShho/GR/ykRnHJSue'),
(12, '1', '$2y$10$Eaq5nGw0ehOnumcawnZzfeqkCxayx6RTEGkITH7EyF9ryK44jkMDy'),
(19, '2', '$2y$10$iDUW/yjDLISsuIV9LVbWVOgAQzxlClEXfaLPMmAZMeoXAO3hOnqQG'),
(20, '2', '$2y$10$YUx.q0TRtQ/jO7NLRvXz6uo6ZciQXstFAJ80r32jbDueX4vYE5zBu'),
(21, '3', '$2y$10$MT7sYpsYAC/Z2vmIrnU1OOaFgm/of7Aiwy7O947TIdx1nnW2lObxi'),
(22, '3', '$2y$10$q206bkmxSqiULKXaLPpqj.Iv7PFuA0ky96UgP3vORNfG.4YkUr1EC'),
(23, '4', '$2y$10$4vgZ/Fl6CfiDobqnZ3bByu8jN6bJBx6v4hdlekTEEDI3GZHLVJITG'),
(24, '4', '$2y$10$DMsskNDP4Gwzxih7loEHyO5ZB.9sL/ISY.r3/mHcRjxt0adM9FUQW'),
(25, '4', '$2y$10$2F83ifjXsgzzSYoD4C1xQOg.J2mDg8hYKX/iNw.1TcqxxTBO8Ov5S'),
(26, '5', '$2y$10$SmvI1sX7Pc7RsYA6DpR4OeSLpLk0WsCVFIQrJCkYSwXoRn7oPbbWm'),
(27, '7', '$2y$10$OARsc0yIEaLnURAk8SCH5OalSAvTE5.Bvz28XacI6zVGuFfigCRwq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pillbox`
--
ALTER TABLE `pillbox`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pillbox`
--
ALTER TABLE `pillbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pillbox`
--
ALTER TABLE `pillbox`
  ADD CONSTRAINT `pillbox_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

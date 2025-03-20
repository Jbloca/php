-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-03-2025 a las 12:55:33
-- Versión del servidor: 10.5.28-MariaDB-cll-lve
-- Versión de PHP: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campusvi_report`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DB_Reporte`
--

CREATE TABLE `DB_Reporte` (
  `id` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_activity_at` datetime DEFAULT NULL,
  `subscribed_at` datetime DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `NombreSura` varchar(255) DEFAULT NULL,
  `Numero_de_cedula` varchar(255) DEFAULT NULL,
  `Correo_corporativo` varchar(255) DEFAULT NULL,
  `Aplicacion_empatia` varchar(255) DEFAULT NULL,
  `Aplicacion_que_resuelve` varchar(255) DEFAULT NULL,
  `Aplicacion_que_empodera` varchar(255) DEFAULT NULL,
  `Pregunta_1` varchar(255) DEFAULT NULL,
  `Pregunta_2` varchar(255) DEFAULT NULL,
  `Pregunta_3` varchar(255) DEFAULT NULL,
  `Certificado` varchar(255) DEFAULT NULL,
  `Satisfaccion` int(11) DEFAULT NULL,
  `Feedback` varchar(255) DEFAULT NULL,
  `Aplicacion_accesible` varchar(255) DEFAULT NULL,
  `Puntaje` int(11) DEFAULT NULL,
  `DIPLOMA_VIRTUAL` varchar(255) DEFAULT NULL,
  `Empatica` int(11) DEFAULT NULL,
  `Accesible` int(11) DEFAULT NULL,
  `Que_resuelve` varchar(255) DEFAULT NULL,
  `Que_empodera` varchar(255) DEFAULT NULL,
  `Progreso1` int(11) DEFAULT NULL,
  `Progreso2` int(11) DEFAULT NULL,
  `Progreso3` int(11) DEFAULT NULL,
  `Progreso4` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_logins`
--

CREATE TABLE `failed_logins` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `attempts` int(11) NOT NULL DEFAULT 1,
  `last_attempt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `failed_logins`
--

INSERT INTO `failed_logins` (`id`, `ip_address`, `attempts`, `last_attempt`) VALUES
(7, '38.25.17.122', 5, '2024-10-02 22:48:18'),
(9, '132.191.2.22', 5, '2024-12-30 22:12:01'),
(13, '190.235.45.201', 2, '2025-01-13 19:53:59'),
(26, '132.191.3.64', 1, '2025-02-10 22:28:08'),
(14, '190.236.3.25', 1, '2025-01-14 02:12:55'),
(15, '190.235.17.181', 1, '2025-01-14 05:21:59'),
(18, '190.237.15.177', 1, '2025-01-15 23:20:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'test', 'alonso_arana@hotmail.com', '$2y$10$tdJTRgjDXp2DLYxGTb3Lx.Rz0Rx6ZAQl8XpNBS51R4U.RshECTOU2'),
(2, 'prueba', 'jose.pisconti@gmail.com', '$2y$10$hgwgcNDt5QT968VudS3SR.yedAVFm1VUa1.GgPFhL/7.kCulqs7La');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_BD`
--

CREATE TABLE `usuarios_BD` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_BD`
--

INSERT INTO `usuarios_BD` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'test', 'alonso_arana@hotmail.com', '$2y$10$tdJTRgjDXp2DLYxGTb3Lx.Rz0Rx6ZAQl8XpNBS51R4U.RshECTOU2')

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `DB_Reporte`
--
ALTER TABLE `DB_Reporte`
  ADD PRIMARY KEY (`phone`);

--
-- Indices de la tabla `failed_logins`
--
ALTER TABLE `failed_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_ip` (`ip_address`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuarios_BD`
--
ALTER TABLE `usuarios_BD`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_logins`
--
ALTER TABLE `failed_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios_BD`
--
ALTER TABLE `usuarios_BD`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

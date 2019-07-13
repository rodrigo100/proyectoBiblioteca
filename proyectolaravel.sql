-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2017 a las 00:34:15
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectolaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_publicador` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `descripcion`, `archivo`, `id_publicador`, `created_at`, `updated_at`, `remember_token`) VALUES
(10, 'erfe', 'erf', 'app/documentos/1625-proyecto_final (1).pdf', 1, '2017-03-22 21:15:28', '2017-03-22 21:15:28', NULL),
(7, 'pogramacion', 'wverververvewewr', 'app/documentos/2481-proyecto_final (1).pdf', 1, '2017-03-22 21:12:29', '2017-03-22 21:12:37', NULL),
(8, 'drg', 'eber', 'app/documentos/7079-proyecto_final (1).pdf', 1, '2017-03-22 21:14:41', '2017-03-22 21:14:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2017_03_09_195645_create_usuarios_table', 1),
(20, '2017_03_09_204422_create_libros_table', 1),
(21, '2017_03_09_205642_create_suscripcions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id_suscripcion` int(10) UNSIGNED NOT NULL,
  `id_lector` int(10) UNSIGNED NOT NULL,
  `id_libro` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id_suscripcion`, `id_lector`, `id_libro`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-03-22 20:09:31', '2017-03-22 20:09:31'),
(2, 4, 1, '2017-03-22 20:54:31', '2017-03-22 20:54:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('adm','pub','lec') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'lec',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `email`, `username`, `password`, `tipo`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Rodrigo', 'Acuña', 'alexsof9@gmail.com', 'admin', '$2y$10$VBCJb.RwZkCqMq8cpMAoh.a3De9l80NObGwJR9pcO.9QBoGRWS9pm', 'adm', '2017-03-22 19:54:55', '2017-03-22 19:54:55', '3gygmo16hI31YGTYPqVKZq9tbfzJtRwdghOMOmGsZCrRZzCSTPyPzDb6DRMA'),
(2, 'Alexander', 'Reinaga', 'alexsof9@gmail.com', 'pub1', '$2y$10$aMd5aUcSzyC4X6M2Z0yfAOjqvejDB6AhGTqFyBMiT2N9u97AFlwoy', 'pub', '2017-03-22 19:54:55', '2017-03-22 19:54:55', NULL),
(3, 'Alexander', 'Reinaga', 'alexsof9@gmail.com', 'pub2', '$2y$10$QjZ4T81eDHiJOYlPqA39wOU.rKH/dgh0ivUEXkVZfcunJNp68mZku', 'pub', '2017-03-22 19:54:55', '2017-03-22 19:54:55', 'Fz79Na0zZgpjfeYTP7lK2GB20RHNAefnpCMzzUnZc85fIdY7ANQzlLT4GZGY'),
(4, 'Alexander', 'Reinaga', 'alexsof9@gmail.com', 'lec1', '$2y$10$SxtjU3yCNYON94jMFef89O/SOUS1NL0BKqz3xCpVytUCSqZ9OTkAG', 'lec', '2017-03-22 19:54:55', '2017-03-22 19:54:55', 'g49ZycvvaqtNcpLwA7dpUfCHH7ogpPepLszmcrQR6L3WWeBOuxaRFM88gNDn'),
(5, 'Alexander', 'Reinaga', 'alexsof9@gmail.com', 'lec2', '$2y$10$F7VtZos3nEwjTUd/ishyIuYaKblUTb.pwAZQTUKYEr.FdHaQk9Nxa', 'lec', '2017-03-22 19:54:55', '2017-03-22 19:54:55', NULL),
(6, 'Alexander', 'Reinaga', 'alexsof9@gmail.com', 'lec3', '$2y$10$kl0ME7L.4W/lsSM/usVnHeZu8yXq/rYv0jHmc6DFdx2cJtV.D1JYK', 'lec', '2017-03-22 19:54:56', '2017-03-22 19:54:56', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `libros_id_publicador_foreign` (`id_publicador`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id_suscripcion`),
  ADD KEY `suscripciones_id_lector_foreign` (`id_lector`),
  ADD KEY `suscripciones_id_libro_foreign` (`id_libro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id_suscripcion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

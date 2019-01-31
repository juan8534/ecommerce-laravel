-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2019 a las 18:41:36
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `products_course`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tecnologia', '2018-01-09 01:23:54', '2018-01-09 01:23:54'),
(3, 'Ropa para hombre', '2018-01-09 02:47:25', '2018-01-09 02:47:25'),
(4, 'Ropa para niño', '2018-01-08 22:04:40', '2018-01-09 03:04:40'),
(5, 'Consolas', '2018-01-09 03:11:23', '2018-01-09 03:11:23'),
(6, 'Electrodomesticos', '2018-01-25 04:56:06', '2018-01-25 04:56:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'product_1515461779.png', 5, '2018-01-09 06:36:19', '2018-01-09 06:36:19'),
(2, 'product_1515466657.jpg', 6, '2018-01-09 07:57:37', '2018-01-09 07:57:37'),
(3, 'product_1515879325.jpg', 7, '2018-01-14 02:35:25', '2018-01-14 02:35:25'),
(5, 'product_1515880175.jpg', 9, '2018-01-14 02:49:35', '2018-01-14 02:49:35'),
(6, 'product_1515881022.jpg', 10, '2018-01-14 03:03:42', '2018-01-14 03:03:42'),
(7, 'product_1515881162.png', 11, '2018-01-14 03:06:02', '2018-01-14 03:06:02'),
(9, 'product_1515881573.jpg', 13, '2018-01-14 03:12:53', '2018-01-14 03:12:53'),
(10, 'product_1515882140.jpg', 14, '2018-01-14 03:22:20', '2018-01-14 03:22:20'),
(11, 'product_1516837800.jpeg', 15, '2018-01-25 04:50:00', '2018-01-25 04:50:00'),
(12, 'product_1516842579.jpg', 16, '2018-01-25 06:09:39', '2018-01-25 06:09:39'),
(13, 'product_1516843230.jpg', 17, '2018-01-25 06:20:30', '2018-01-25 06:20:30'),
(14, 'product_1548904145.jpg', 18, '2019-01-31 08:09:05', '2019-01-31 08:09:05'),
(15, 'product_1548949196.jpg', 19, '2019-01-31 20:39:56', '2019-01-31 20:39:56'),
(16, 'product_1548951124.jpg', 20, '2019-01-31 21:12:04', '2019-01-31 21:12:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_shopping_carts`
--

CREATE TABLE `in_shopping_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `shopping_cart_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `in_shopping_carts`
--

INSERT INTO `in_shopping_carts` (`id`, `product_id`, `shopping_cart_id`, `created_at`, `updated_at`) VALUES
(1, 13, 17, '2018-01-14 21:03:44', '2018-01-14 21:03:44'),
(2, 14, 17, '2018-01-14 21:18:34', '2018-01-14 21:18:34'),
(3, 13, 20, '2018-01-15 05:35:32', '2018-01-15 05:35:32'),
(4, 14, 21, '2018-01-15 07:01:43', '2018-01-15 07:01:43'),
(5, 13, 21, '2018-01-15 07:01:49', '2018-01-15 07:01:49'),
(6, 14, 29, '2018-01-21 20:11:04', '2018-01-21 20:11:04'),
(7, 11, 29, '2018-01-21 20:30:29', '2018-01-21 20:30:29'),
(8, 7, 29, '2018-01-21 20:32:14', '2018-01-21 20:32:14'),
(9, 13, 30, '2018-01-21 20:58:12', '2018-01-21 20:58:12'),
(10, 14, 31, '2018-01-21 21:01:01', '2018-01-21 21:01:01'),
(11, 11, 32, '2018-01-21 21:09:00', '2018-01-21 21:09:00'),
(12, 9, 33, '2018-01-21 21:11:50', '2018-01-21 21:11:50'),
(13, 10, 36, '2018-01-22 01:27:52', '2018-01-22 01:27:52'),
(14, 10, 38, '2018-01-22 01:30:05', '2018-01-22 01:30:05'),
(15, 13, 39, '2018-01-22 01:31:41', '2018-01-22 01:31:41'),
(16, 9, 45, '2018-01-22 02:25:36', '2018-01-22 02:25:36'),
(17, 5, 45, '2018-01-22 02:26:00', '2018-01-22 02:26:00'),
(18, 13, 52, '2018-01-25 04:57:44', '2018-01-25 04:57:44'),
(19, 15, 52, '2018-01-25 04:58:22', '2018-01-25 04:58:22'),
(20, 6, 54, '2018-01-25 05:04:27', '2018-01-25 05:04:27'),
(21, 10, 60, '2018-01-25 05:56:39', '2018-01-25 05:56:39'),
(22, 16, 63, '2018-01-25 06:10:17', '2018-01-25 06:10:17'),
(23, 17, 66, '2018-01-25 06:21:06', '2018-01-25 06:21:06'),
(24, 17, 67, '2018-01-25 06:24:34', '2018-01-25 06:24:34'),
(25, 16, 70, '2018-01-25 06:38:46', '2018-01-25 06:38:46'),
(26, 17, 71, '2018-01-25 06:42:27', '2018-01-25 06:42:27'),
(27, 14, 75, '2019-01-31 07:12:02', '2019-01-31 07:12:02'),
(28, 17, 79, '2019-01-31 07:51:57', '2019-01-31 07:51:57'),
(29, 17, 79, '2019-01-31 07:51:57', '2019-01-31 07:51:57'),
(30, 10, 85, '2019-01-31 08:05:32', '2019-01-31 08:05:32'),
(31, 13, 85, '2019-01-31 08:05:43', '2019-01-31 08:05:43'),
(32, 18, 87, '2019-01-31 08:14:12', '2019-01-31 08:14:12'),
(33, 18, 87, '2019-01-31 08:14:12', '2019-01-31 08:14:12'),
(34, 19, 88, '2019-01-31 20:42:57', '2019-01-31 20:42:57'),
(35, 20, 89, '2019-01-31 22:36:29', '2019-01-31 22:36:29'),
(36, 6, 89, '2019-01-31 23:19:08', '2019-01-31 23:19:08'),
(37, 19, 89, '2019-01-31 23:30:29', '2019-01-31 23:30:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `shopping_cart_id` int(10) UNSIGNED NOT NULL,
  `line1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recipient_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estate_id` int(10) NOT NULL DEFAULT '1',
  `guide_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `shopping_cart_id`, `line1`, `line2`, `city`, `postal_code`, `country_code`, `state`, `recipient_name`, `email`, `estate_id`, `guide_number`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 20, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 3, NULL, 60, 13, '2018-01-15 05:37:51', '2018-01-21 22:49:52'),
(2, 21, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 120, 13, '2018-01-15 07:02:39', '2018-01-15 07:02:39'),
(3, 30, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 60, 13, '2018-01-21 20:59:54', '2018-01-21 20:59:54'),
(4, 33, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 150, 13, '2018-01-21 21:12:35', '2018-01-21 21:12:35'),
(5, 39, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 60, 13, '2018-01-22 01:32:42', '2018-01-22 01:32:42'),
(6, 45, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 450, 13, '2018-01-22 02:27:20', '2018-01-22 02:27:20'),
(7, 54, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 2, NULL, 300, 13, '2018-01-25 05:05:59', '2018-01-25 05:08:41'),
(8, 60, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 220, 13, '2018-01-25 05:57:42', '2018-01-25 05:57:42'),
(9, 63, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 20, 13, '2018-01-25 06:11:26', '2018-01-25 06:11:26'),
(10, 66, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 30, 13, '2018-01-25 06:21:49', '2018-01-25 06:21:49'),
(11, 67, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 30, 13, '2018-01-25 06:25:10', '2018-01-25 06:25:10'),
(12, 71, '1 Main St', NULL, 'San Jose', '95131', 'US', 'CA', 'pruebas proyecto', 'pruebascompumundo@gmail.com', 1, NULL, 30, 13, '2018-01-25 06:44:32', '2018-01-25 06:44:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `pricing` decimal(9,2) NOT NULL,
  `category_id` int(10) NOT NULL,
  `discount_start_date` date DEFAULT NULL,
  `discount_end_date` date DEFAULT NULL,
  `discount_value` decimal(9,0) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `description`, `pricing`, `category_id`, `discount_start_date`, `discount_end_date`, `discount_value`, `created_at`, `updated_at`) VALUES
(5, 2, 'Play Station 4 Pro', 'Play Station 4 Pro de 500 GB, viene con 3 juegos', '300.00', 5, NULL, NULL, '0', '2018-01-09 06:36:19', '2018-01-09 06:36:19'),
(6, 2, 'Nintendo Swicht', 'Nintendo Switc de color gris, con el juego the legend of zelda breath of the wild', '300.00', 5, NULL, NULL, '0', '2018-01-09 07:57:37', '2018-01-09 07:57:37'),
(7, 12, 'Motorola g5s', 'Motorola G5s color negro incluye auriculares ', '200.00', 1, NULL, NULL, '0', '2018-01-14 02:35:25', '2018-01-14 02:35:25'),
(9, 12, 'Camiseta Barcelona', 'Camiseta del futbol club Barcelona Rakuten ', '150.00', 3, NULL, NULL, '0', '2018-01-14 02:49:35', '2018-01-14 02:50:49'),
(10, 12, 'Nintendo 2DS XL', 'Nintendo 2DS XL edición especial de pokemon sol', '220.00', 5, NULL, NULL, '0', '2018-01-14 03:03:42', '2018-01-14 03:03:42'),
(11, 12, 'Lenovo G40-80', 'Lenovo G40-80 de color negro, con 1 terabyte de disco duro, 8 gigas de memoria ram ', '280.00', 1, NULL, NULL, '0', '2018-01-14 03:06:02', '2018-01-14 03:06:02'),
(13, 12, 'GOD OF WAR III', 'God of war III, juego para ps4', '60.00', 1, NULL, NULL, '0', '2018-01-14 03:12:53', '2018-01-14 03:12:53'),
(14, 12, 'Pokemon stars', 'Pokemon stars, juego para nintendo swicht', '60.00', 5, NULL, NULL, '0', '2018-01-14 03:22:20', '2018-01-14 03:22:20'),
(15, 12, 'Zapatos', 'Zapato talla 40 para hombre color negro', '80.00', 3, NULL, NULL, '0', '2018-01-25 04:50:00', '2018-01-25 04:50:00'),
(16, 12, 'Audífonos capi', 'Audífonos del capitán américa color azul', '20.00', 1, '2019-01-31', '2019-02-02', '3', '2018-01-25 06:09:39', '2019-01-31 23:05:28'),
(17, 12, 'Audífono iron man', 'Audífonos iron man color rojo ', '30.00', 1, NULL, NULL, '0', '2018-01-25 06:20:30', '2018-01-25 06:20:30'),
(18, 17, 'nintendo 3ds', 'Nintendo 3ds edicion Mario Kart', '250.00', 5, NULL, NULL, '0', '2019-01-31 08:09:05', '2019-01-31 08:09:05'),
(19, 16, 'figura dragon ball', 'Figura Dragon ball', '30.00', 1, '2019-01-31', '2019-02-02', '5', '2019-01-31 20:39:56', '2019-01-31 21:15:03'),
(20, 16, 'Figura homero', 'Figura homero simpson cabeza de dona', '50.00', 1, '2019-01-31', '2019-02-02', '4', '2019-01-31 21:12:04', '2019-01-31 21:12:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `description`) VALUES
(1, 'admin'),
(2, 'Comprador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `status`, `created_at`, `updated_at`, `customid`) VALUES
(1, 'incompleted', '2018-01-07 21:36:54', '2018-01-07 21:36:54', NULL),
(2, 'incompleted', '2018-01-08 01:52:41', '2018-01-08 01:52:41', NULL),
(3, 'incompleted', '2018-01-08 18:04:41', '2018-01-08 18:04:41', NULL),
(4, 'incompleted', '2018-01-08 21:17:20', '2018-01-08 21:17:20', NULL),
(5, 'incompleted', '2018-01-09 07:27:39', '2018-01-09 07:27:39', NULL),
(6, 'incompleted', '2018-01-09 07:32:36', '2018-01-09 07:32:36', NULL),
(7, 'incompleted', '2018-01-10 06:31:04', '2018-01-10 06:31:04', NULL),
(8, 'incompleted', '2018-01-10 07:15:17', '2018-01-10 07:15:17', NULL),
(9, 'incompleted', '2018-01-10 07:30:12', '2018-01-10 07:30:12', NULL),
(10, 'incompleted', '2018-01-12 06:39:35', '2018-01-12 06:39:35', NULL),
(11, 'incompleted', '2018-01-12 06:58:45', '2018-01-12 06:58:45', NULL),
(12, 'incompleted', '2018-01-12 07:24:07', '2018-01-12 07:24:07', NULL),
(13, 'incompleted', '2018-01-12 08:05:44', '2018-01-12 08:05:44', NULL),
(14, 'incompleted', '2018-01-13 23:10:50', '2018-01-13 23:10:50', NULL),
(15, 'incompleted', '2018-01-14 02:25:15', '2018-01-14 02:25:15', NULL),
(16, 'incompleted', '2018-01-14 02:30:25', '2018-01-14 02:30:25', NULL),
(17, 'incompleted', '2018-01-14 19:31:15', '2018-01-14 19:31:15', NULL),
(18, 'incompleted', '2018-01-14 22:36:09', '2018-01-14 22:36:09', NULL),
(19, 'incompleted', '2018-01-15 03:36:30', '2018-01-15 03:36:30', NULL),
(20, 'approved', '2018-01-15 05:34:38', '2018-01-15 05:37:55', '65ddb0c71ed071c406e821b4a4fefe6f'),
(21, 'approved', '2018-01-15 05:37:51', '2018-01-15 07:02:43', '1c0e5be8fb621a2d9e16a8cea506285b'),
(22, 'incompleted', '2018-01-15 05:38:13', '2018-01-15 05:38:13', NULL),
(23, 'incompleted', '2018-01-15 07:02:40', '2018-01-15 07:02:40', NULL),
(24, 'incompleted', '2018-01-15 08:10:21', '2018-01-15 08:10:21', NULL),
(25, 'incompleted', '2018-01-15 08:15:31', '2018-01-15 08:15:31', NULL),
(26, 'incompleted', '2018-01-21 19:15:01', '2018-01-21 19:15:01', NULL),
(27, 'incompleted', '2018-01-21 19:15:40', '2018-01-21 19:15:40', NULL),
(28, 'incompleted', '2018-01-21 20:06:38', '2018-01-21 20:06:38', NULL),
(29, 'incompleted', '2018-01-21 20:07:05', '2018-01-21 20:07:05', NULL),
(30, 'incompleted', '2018-01-21 20:52:52', '2018-01-21 20:52:52', NULL),
(31, 'incompleted', '2018-01-21 20:59:55', '2018-01-21 20:59:55', NULL),
(32, 'incompleted', '2018-01-21 21:08:09', '2018-01-21 21:08:09', NULL),
(33, 'approved', '2018-01-21 21:11:27', '2018-01-21 21:12:39', 'c07399e447de447cd3b70d9eac85d124'),
(34, 'incompleted', '2018-01-21 21:12:36', '2018-01-21 21:12:36', NULL),
(35, 'incompleted', '2018-01-21 22:39:40', '2018-01-21 22:39:40', NULL),
(36, 'incompleted', '2018-01-22 01:27:28', '2018-01-22 01:27:28', NULL),
(37, 'incompleted', '2018-01-22 01:29:30', '2018-01-22 01:29:30', NULL),
(38, 'incompleted', '2018-01-22 01:29:35', '2018-01-22 01:29:35', NULL),
(39, 'approved', '2018-01-22 01:31:20', '2018-01-22 01:32:45', '2356da3579e9915ce2f7c3a20d4d1b42'),
(40, 'incompleted', '2018-01-22 01:32:42', '2018-01-22 01:32:42', NULL),
(41, 'incompleted', '2018-01-22 01:52:02', '2018-01-22 01:52:02', NULL),
(42, 'incompleted', '2018-01-22 01:57:26', '2018-01-22 01:57:26', NULL),
(43, 'incompleted', '2018-01-22 01:57:41', '2018-01-22 01:57:41', NULL),
(44, 'incompleted', '2018-01-22 02:19:28', '2018-01-22 02:19:28', NULL),
(45, 'approved', '2018-01-22 02:25:16', '2018-01-22 02:27:23', 'b887f4e6743c76e850dc0f9303d1be5e'),
(46, 'incompleted', '2018-01-22 02:27:20', '2018-01-22 02:27:20', NULL),
(47, 'incompleted', '2018-01-22 05:39:18', '2018-01-22 05:39:18', NULL),
(48, 'incompleted', '2018-01-22 05:44:24', '2018-01-22 05:44:24', NULL),
(49, 'incompleted', '2018-01-22 05:50:04', '2018-01-22 05:50:04', NULL),
(50, 'incompleted', '2018-01-22 05:51:51', '2018-01-22 05:51:51', NULL),
(51, 'incompleted', '2018-01-22 05:55:50', '2018-01-22 05:55:50', NULL),
(52, 'incompleted', '2018-01-25 04:39:05', '2018-01-25 04:39:05', NULL),
(53, 'incompleted', '2018-01-25 04:41:50', '2018-01-25 04:41:50', NULL),
(54, 'approved', '2018-01-25 04:58:52', '2018-01-25 05:06:03', 'a97278d56bafb4a113e4e4f0adcf4955'),
(55, 'incompleted', '2018-01-25 05:05:59', '2018-01-25 05:05:59', NULL),
(56, 'incompleted', '2018-01-25 05:08:17', '2018-01-25 05:08:17', NULL),
(57, 'incompleted', '2018-01-25 05:08:48', '2018-01-25 05:08:48', NULL),
(58, 'incompleted', '2018-01-25 05:15:50', '2018-01-25 05:15:50', NULL),
(59, 'incompleted', '2018-01-25 05:53:40', '2018-01-25 05:53:40', NULL),
(60, 'approved', '2018-01-25 05:55:29', '2018-01-25 05:57:46', '871f72919ee8c1fa692de459a0596885'),
(61, 'incompleted', '2018-01-25 05:57:42', '2018-01-25 05:57:42', NULL),
(62, 'incompleted', '2018-01-25 06:01:50', '2018-01-25 06:01:50', NULL),
(63, 'approved', '2018-01-25 06:09:51', '2018-01-25 06:11:29', '72d5f28ee04afaf104b9c132b3fa20ee'),
(64, 'incompleted', '2018-01-25 06:11:26', '2018-01-25 06:11:26', NULL),
(65, 'incompleted', '2018-01-25 06:19:29', '2018-01-25 06:19:29', NULL),
(66, 'approved', '2018-01-25 06:20:36', '2018-01-25 06:21:52', '814eee6c0009aca7aeeb6933f0647146'),
(67, 'approved', '2018-01-25 06:21:49', '2018-01-25 06:25:13', 'b68da15785678bf73702553c6b9bc13d'),
(68, 'incompleted', '2018-01-25 06:25:10', '2018-01-25 06:25:10', NULL),
(69, 'incompleted', '2018-01-25 06:35:00', '2018-01-25 06:35:00', NULL),
(70, 'incompleted', '2018-01-25 06:38:10', '2018-01-25 06:38:10', NULL),
(71, 'approved', '2018-01-25 06:41:55', '2018-01-25 06:44:55', '1cda5d010bcd8e5625f1bbb278e16287'),
(72, 'incompleted', '2018-01-25 06:44:33', '2018-01-25 06:44:33', NULL),
(73, 'incompleted', '2018-01-25 06:45:23', '2018-01-25 06:45:23', NULL),
(74, 'incompleted', '2019-01-30 05:00:00', '2019-01-30 05:00:00', NULL),
(75, 'incompleted', '2019-01-31 07:11:31', '2019-01-31 07:11:31', NULL),
(76, 'incompleted', '2019-01-31 07:29:08', '2019-01-31 07:29:08', NULL),
(77, 'incompleted', '2019-01-31 07:30:25', '2019-01-31 07:30:25', NULL),
(78, 'incompleted', '2019-01-31 07:42:38', '2019-01-31 07:42:38', NULL),
(79, 'incompleted', '2019-01-31 07:44:47', '2019-01-31 07:44:47', NULL),
(80, 'incompleted', '2019-01-31 07:46:58', '2019-01-31 07:46:58', NULL),
(81, 'incompleted', '2019-01-31 07:53:10', '2019-01-31 07:53:10', NULL),
(82, 'incompleted', '2019-01-31 07:59:58', '2019-01-31 07:59:58', NULL),
(83, 'incompleted', '2019-01-31 08:00:26', '2019-01-31 08:00:26', NULL),
(84, 'incompleted', '2019-01-31 08:04:05', '2019-01-31 08:04:05', NULL),
(85, 'incompleted', '2019-01-31 08:04:22', '2019-01-31 08:04:22', NULL),
(86, 'incompleted', '2019-01-31 08:05:58', '2019-01-31 08:05:58', NULL),
(87, 'incompleted', '2019-01-31 08:06:35', '2019-01-31 08:06:35', NULL),
(88, 'incompleted', '2019-01-31 20:36:52', '2019-01-31 20:36:52', NULL),
(89, 'incompleted', '2019-01-31 21:16:26', '2019-01-31 21:16:26', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` int(10) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `description`) VALUES
(1, 'Creada'),
(2, 'Enviado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `cantidad` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_profile` int(10) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `id_profile`) VALUES
(2, 'juan pablo vargas', 'juanpablo85342@gmail.com', '$2y$10$dx3d5TPBSR4BjMt5qAt9OOkMkaejepM6pOsQFwgVDJVvq/olojCCG', '', '2018-01-08 02:39:50', '2018-01-10 06:34:44', 1),
(12, 'juan', 'juanpablo8534@gmail.com', '$2y$10$bWP8xeKNN1bLwy17b8zRReQ7RggqJYWeYMR5qOZSCjoi8cQxqZLWq', 'vMRV8I1mXwrHTdpmJKBlWWidRy5aPko89G2Nm4OoAMc8JXpdTEGCqXxziZHJ', '2018-01-14 02:29:48', '2019-01-31 08:04:05', 1),
(13, 'compumundo', 'pruebascompumundo@gmail.com', '$2y$10$to/FEEmQJjtVVHcfu6ZAAuqHesd8ZvRz/B5JrYVmP2Xv7XfvTE5Ey', 'QLUzXUe1zxz1cTZV9Tjm5w8FVrx2TA4muiu6L8dwNlsns4hNh3kb4q2IC8rJ', '2018-01-15 05:35:13', '2018-01-25 06:45:23', 2),
(16, 'administrador', 'admin@admin.com', '$2y$10$xA5jgzeUccrlkJKesNUrOOzJSd1.yJUZhfzCgUgkMjCHg1iEItC/O', 'StnaprqGIblDretMr4wojN975Cpk2rdqu0YJCFe0D0E3QhY02SjHvC69oYmu', '2019-01-31 08:00:21', '2019-01-31 21:16:26', 1),
(17, 'admin pro', 'admin1@admin.com', '$2y$10$9v5dkRHfMTss3qQAZ7bmJuBBcjYPL6AODlPd5o37QzLnoy2Mnnvpu', 'yqXzw2BBiUM3xzvS8GeGxroUD4UFkHr9lAKdqpcCXAwxMoQEazOOMCGuB766', '2019-01-31 08:03:46', '2019-01-31 08:04:22', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `in_shopping_carts`
--
ALTER TABLE `in_shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_shopping_carts_product_id_foreign` (`product_id`),
  ADD KEY `in_shopping_carts_shopping_cart_id_foreign` (`shopping_cart_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_shopping_cart_id_foreign` (`shopping_cart_id`),
  ADD KEY `id_estatus` (`estate_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_index` (`user_id`),
  ADD KEY `fk_categories` (`category_id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shopping_carts_customid_unique` (`customid`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_users_profile` (`id_profile`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `in_shopping_carts`
--
ALTER TABLE `in_shopping_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_foreing` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `in_shopping_carts`
--
ALTER TABLE `in_shopping_carts`
  ADD CONSTRAINT `in_shopping_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `in_shopping_carts_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_carts` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_carts` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_profile` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

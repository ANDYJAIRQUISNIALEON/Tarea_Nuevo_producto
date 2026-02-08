-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2026 a las 06:39:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `stock`, `fecha_creacion`) VALUES
(1, 'Laptop Dell XPS 15', 'Portátil de alto rendimiento con procesador Intel Core i7, 16GB RAM y SSD de 512GB. Ideal para trabajo profesional y diseño.', 1299.99, 5, '2026-02-08 04:16:53'),
(2, 'Mouse Logitech MX Master 3', 'Mouse ergonómico inalámbrico con sensor de alta precisión y batería de larga duración. Perfecto para productividad.', 99.99, 45, '2026-02-08 04:16:53'),
(3, 'Teclado Mecánico Keychron K2', 'Teclado mecánico compacto con switches Gateron, retroiluminación RGB y conexión Bluetooth. Compatible con Mac y Windows.', 89.99, 30, '2026-02-08 04:16:53'),
(4, 'Monitor Samsung 27\" 4K', 'Monitor profesional 4K UHD con tecnología IPS, HDR10 y frecuencia de 60Hz. Ideal para edición y diseño gráfico.', 449.99, 20, '2026-02-08 04:16:53'),
(5, 'Webcam Logitech C920', 'Cámara web Full HD 1080p con micrófono estéreo incorporado. Perfecta para videoconferencias y streaming.', 79.99, 50, '2026-02-08 04:16:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

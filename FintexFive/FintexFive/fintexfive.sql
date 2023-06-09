-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 03:56:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fintexfive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constructoras`
--

CREATE TABLE `constructoras` (
  `idConstructoras` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Ubicacion` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Imagen` varchar(45) DEFAULT NULL,
  `Suscripcion_idSuscripcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `idSuscripcion` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Precio` double DEFAULT NULL,
  `Duracion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetadecredito`
--

CREATE TABLE `tarjetadecredito` (
  `TarjetaDeCredito` int(20) NOT NULL,
  `FechaExpiracion` varchar(45) DEFAULT NULL,
  `CVV` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Contraseña` varchar(45) DEFAULT NULL,
  `Suscripcion_idSuscripcion` int(11) NOT NULL,
  `TarjetaDeCredito_TarjetaDeCredito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `constructoras`
--
ALTER TABLE `constructoras`
  ADD PRIMARY KEY (`idConstructoras`),
  ADD KEY `fk_Constructoras_Suscripcion1_idx` (`Suscripcion_idSuscripcion`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`idSuscripcion`);

--
-- Indices de la tabla `tarjetadecredito`
--
ALTER TABLE `tarjetadecredito`
  ADD PRIMARY KEY (`TarjetaDeCredito`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Usuarios_Suscripcion_idx` (`Suscripcion_idSuscripcion`),
  ADD KEY `fk_Usuarios_TarjetaDeCredito1_idx` (`TarjetaDeCredito_TarjetaDeCredito`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `constructoras`
--
ALTER TABLE `constructoras`
  MODIFY `idConstructoras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `idSuscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `constructoras`
--
ALTER TABLE `constructoras`
  ADD CONSTRAINT `fk_Constructoras_Suscripcion1` FOREIGN KEY (`Suscripcion_idSuscripcion`) REFERENCES `suscripcion` (`idSuscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Suscripcion` FOREIGN KEY (`Suscripcion_idSuscripcion`) REFERENCES `suscripcion` (`idSuscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_TarjetaDeCredito1` FOREIGN KEY (`TarjetaDeCredito_TarjetaDeCredito`) REFERENCES `tarjetadecredito` (`TarjetaDeCredito`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 03:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fintexfive`
--

-- --------------------------------------------------------

--
-- Table structure for table `constructoras`
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
-- Table structure for table `suscripcion`
--

CREATE TABLE `suscripcion` (
  `idSuscripcion` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Precio` double DEFAULT NULL,
  `Duracion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suscripcion`
--

INSERT INTO `suscripcion` (`idSuscripcion`, `Nombre`, `Precio`, `Duracion`) VALUES
(1, 'alex', 23433, '32');

-- --------------------------------------------------------

--
-- Table structure for table `tarjetadecredito`
--

CREATE TABLE `tarjetadecredito` (
  `TarjetaDeCredito` int(20) NOT NULL,
  `FechaExpiracion` varchar(45) DEFAULT NULL,
  `CVV` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tarjetadecredito`
--

INSERT INTO `tarjetadecredito` (`TarjetaDeCredito`, `FechaExpiracion`, `CVV`) VALUES
(456545436, '03/23', '343');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Correo`, `Contraseña`, `Suscripcion_idSuscripcion`, `TarjetaDeCredito_TarjetaDeCredito`) VALUES
(6, 'Alex', 'Alex@outlook.com', 'Alex1', 1, 456545436);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constructoras`
--
ALTER TABLE `constructoras`
  ADD PRIMARY KEY (`idConstructoras`),
  ADD KEY `fk_Constructoras_Suscripcion1_idx` (`Suscripcion_idSuscripcion`);

--
-- Indexes for table `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`idSuscripcion`);

--
-- Indexes for table `tarjetadecredito`
--
ALTER TABLE `tarjetadecredito`
  ADD PRIMARY KEY (`TarjetaDeCredito`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Usuarios_Suscripcion_idx` (`Suscripcion_idSuscripcion`),
  ADD KEY `fk_Usuarios_TarjetaDeCredito1_idx` (`TarjetaDeCredito_TarjetaDeCredito`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constructoras`
--
ALTER TABLE `constructoras`
  MODIFY `idConstructoras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `idSuscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `constructoras`
--
ALTER TABLE `constructoras`
  ADD CONSTRAINT `fk_Constructoras_Suscripcion1` FOREIGN KEY (`Suscripcion_idSuscripcion`) REFERENCES `suscripcion` (`idSuscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Suscripcion` FOREIGN KEY (`Suscripcion_idSuscripcion`) REFERENCES `suscripcion` (`idSuscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_TarjetaDeCredito1` FOREIGN KEY (`TarjetaDeCredito_TarjetaDeCredito`) REFERENCES `tarjetadecredito` (`TarjetaDeCredito`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

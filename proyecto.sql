-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2022 a las 22:26:39
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `ID_DF` int(11) NOT NULL,
  `ID_F2` int(11) NOT NULL,
  `ID_R2` int(11) NOT NULL,
  `SUBTOTAL` decimal(10,0) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenador`
--

CREATE TABLE `disenador` (
  `documento_d` int(11) NOT NULL,
  `tipo_documento_d` varchar(5) NOT NULL,
  `nombre_d` varchar(25) NOT NULL,
  `apellido_d` varchar(45) NOT NULL,
  `fecha_naci_d` date NOT NULL,
  `email_d` varchar(60) NOT NULL,
  `password_d` varchar(8) NOT NULL,
  `direccion_d` varchar(20) NOT NULL,
  `celular_d` varchar(13) NOT NULL,
  `telefono_d` varchar(10) NOT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `direccion_empresa` varchar(20) DEFAULT NULL,
  `celular_empresa` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disenador`
--

INSERT INTO `disenador` (`documento_d`, `tipo_documento_d`, `nombre_d`, `apellido_d`, `fecha_naci_d`, `email_d`, `password_d`, `direccion_d`, `celular_d`, `telefono_d`, `nombre_empresa`, `direccion_empresa`, `celular_empresa`) VALUES
(1, '', 'Esteban', 'Lopera Olaya', '0000-00-00', 'lopreesteban@gmail.com', '123', 'cr:33 # 34-33', '3005458283', '', 'retazos', 'cr:46 #56-23', '3132375396'),
(2, '', 'juan', 'perez', '0000-00-00', 'juan@hotmail.com', '8727382j', 'cr:33#54-22', '300672834', '', 'marta', 'cr:74#74-92', '378822990'),
(3, '', 'Paula', 'Castillo', '0000-00-00', 'Paula@gmail.com', 'CLL5643H', 'cr:36#53-22', '30067545', '', 'rophshot', 'cr:74#74-92', '392047343'),
(4, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(5, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(6, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(7, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(8, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(9, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(10, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(1017122545, 'cc', 'este', 'lopera', '2022-11-15', 'lopreesteban@gmail.com', '31226011', 'cr33', '300545', '300545', 'locho', 'cr33', '3003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_FACTURA` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` datetime NOT NULL,
  `TOTAL` decimal(10,0) NOT NULL,
  `ID_US2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropa`
--

CREATE TABLE `ropa` (
  `ID_ROPA` int(11) NOT NULL,
  `TALLA` varchar(20) NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `NOMBRE_R` varchar(20) NOT NULL,
  `DESCRIPCION` varchar(200) DEFAULT NULL,
  `ID_ropa2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento_u` int(11) NOT NULL,
  `nombre_u` varchar(50) NOT NULL,
  `apellido_u` varchar(50) NOT NULL,
  `fecha_naci_u` date NOT NULL,
  `email_u` varchar(60) NOT NULL,
  `password_u` varchar(18) NOT NULL,
  `telefono_u` varchar(11) DEFAULT NULL,
  `direccion_u` varchar(20) NOT NULL,
  `celular_u` varchar(13) NOT NULL,
  `tipo_documento_u` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento_u`, `nombre_u`, `apellido_u`, `fecha_naci_u`, `email_u`, `password_u`, `telefono_u`, `direccion_u`, `celular_u`, `tipo_documento_u`) VALUES
(1, 'Hugo', 'Andrade', '0000-00-00', 'Andrade@GMAIL.COM', '3232AXA', NULL, 'CLL29B343H', '310286357', 'M'),
(2, 'Lucía', 'Castro', '0000-00-00', 'Castro@GMAIL.COM', '75rrgfdr45', NULL, 'CLL22J79', '310286357', 'F'),
(3, 'Leo', 'Hernández', '0000-00-00', 'Contrerase@GMAIL.COM', '3243533sd', NULL, 'CLL29B343H', '310286357', 'M'),
(4, 'Alejandro', 'Gutiérrez', '0000-00-00', 'Andrade@GMAIL.COM', '3243244ef', NULL, 'CLL29B343H', '310286357', 'M'),
(5, 'Pablo', 'Quispe', '0000-00-00', 'Andrade@GMAIL.COM', '38384746', NULL, 'CLL29B343H', '310286357', 'M'),
(6, 'Emerico ', 'Salazar', '0000-00-00', 'Andrade@GMAIL.COM', 'peodk224', NULL, 'CLL29B343H', '310286357', 'M'),
(7, 'Paula', 'Zambrano', '0000-00-00', 'Andrade@GMAIL.COM', 'loca69', NULL, 'CLL29B343H', '310286357', 'F'),
(8, 'Valeria', 'Espinoza', '0000-00-00', 'Andrade@GMAIL.COM', 'ereperro22', NULL, 'CLL29B343H', '310286357', 'F'),
(9, 'Emma', 'Castillo', '0000-00-00', 'Castillo@GMAIL.COM', '191919p', NULL, 'CLL7833F', '31224557', 'F'),
(10, 'Martín', 'Benítez', '0000-00-00', 'Benítez@GMAIL.COM', '83838kd', NULL, 'CLL5643H', '311256357', 'M'),
(11, 'N1', 'A1', '0000-00-00', 'P1@GMAIL.COM', '123', NULL, 'CL30', '1111', 'F'),
(1017, 'esteban', 'lopera', '2022-11-03', 'lopreesteban@gmail.com', '3122601131Est', '545', 'cr:33', '3005', 'cc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`ID_DF`),
  ADD KEY `ID_F2` (`ID_F2`),
  ADD KEY `ID_R2` (`ID_R2`);

--
-- Indices de la tabla `disenador`
--
ALTER TABLE `disenador`
  ADD PRIMARY KEY (`documento_d`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_FACTURA`),
  ADD KEY `ID_US2` (`ID_US2`);

--
-- Indices de la tabla `ropa`
--
ALTER TABLE `ropa`
  ADD PRIMARY KEY (`ID_ROPA`),
  ADD KEY `ID_ropa2` (`ID_ropa2`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `ID_DF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_FACTURA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ropa`
--
ALTER TABLE `ropa`
  MODIFY `ID_ROPA` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`ID_F2`) REFERENCES `factura` (`ID_FACTURA`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`ID_R2`) REFERENCES `ropa` (`ID_ROPA`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_US2`) REFERENCES `usuario` (`documento_u`);

--
-- Filtros para la tabla `ropa`
--
ALTER TABLE `ropa`
  ADD CONSTRAINT `ropa_ibfk_1` FOREIGN KEY (`ID_ropa2`) REFERENCES `disenador` (`documento_d`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

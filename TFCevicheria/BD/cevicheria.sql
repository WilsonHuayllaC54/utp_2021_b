-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2021 a las 01:59:13
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cevicheria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbclientes`
--

CREATE TABLE `tbclientes` (
  `IdCliente` int(11) NOT NULL,
  `Nombres` varchar(255) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Dni` int(11) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Estado` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbclientes`
--

INSERT INTO `tbclientes` (`IdCliente`, `Nombres`, `Apellidos`, `Dni`, `Direccion`, `Telefono`, `Estado`) VALUES
(1, 'Jerry', 'Prado Jimenez', 56863536, 'Calle Los naranjos', '985624358', 1),
(2, 'Rosario ', 'Cruz', 65897852, 'av Moran', '965845632', 1),
(5, 'Jean', 'Cuba Castro', 85437534, 'los olivos', '984395543', 0),
(8, 'Lucas', 'Jimenez Suarez', 74353455, 'av Brazil', '983143892', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdetalleventa`
--

CREATE TABLE `tbdetalleventa` (
  `IdDetalleVenta` int(11) NOT NULL,
  `IdVenta` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `SubTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbprivilegios`
--

CREATE TABLE `tbprivilegios` (
  `IdPrivilegio` int(11) NOT NULL,
  `Privilegio` varchar(20) DEFAULT NULL,
  `Estado` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbprivilegios`
--

INSERT INTO `tbprivilegios` (`IdPrivilegio`, `Privilegio`, `Estado`) VALUES
(1, 'Adminstrador', 1),
(2, 'user', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproductos`
--

CREATE TABLE `tbproductos` (
  `IdProducto` int(11) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Precio` double(10,2) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Detalle` text DEFAULT NULL,
  `Estado` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbproductos`
--

INSERT INTO `tbproductos` (`IdProducto`, `Descripcion`, `Precio`, `Stock`, `Detalle`, `Estado`) VALUES
(1, 'Pescado', 5.50, 30, 'Pescado bonito', 1),
(2, 'limones', 4.50, 7, '3 cajas de limones', 1),
(3, 'camote', 2.00, 2, '2 sacos de camote', 1),
(7, 'Arroz', 110.00, 5, '5 sacos de arroz', 1),
(8, 'gaseosa Cocacola', 11.50, 40, ' gaseosa de 3 litros cocacola', 1),
(9, 'Inca Kola', 11.00, 45, 'gaseosa de 3 lt Inca Kola', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Dni` varchar(20) DEFAULT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `FechaIngreso` date DEFAULT NULL,
  `Usuario` varchar(100) DEFAULT NULL,
  `Clave` varchar(100) DEFAULT NULL,
  `IdPrivilegio` int(11) DEFAULT NULL,
  `Estado` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbusuarios`
--

INSERT INTO `tbusuarios` (`IdUsuario`, `Dni`, `Nombres`, `Apellidos`, `Direccion`, `Telefono`, `FechaIngreso`, `Usuario`, `Clave`, `IdPrivilegio`, `Estado`) VALUES
(1, '65423455', 'Wilson', 'Huaylla Chuctaya', 'Calle Mercaderes', '987456325', '2021-11-19', 'admin', 'admin', 1, 1),
(2, '12345', 'Adriana', 'Lopez Tobar', 'Calle Jerusalen', '958741236', '2021-12-10', 'Fer', 'Fer', 2, 1),
(4, '65325346', 'Lurdes', 'Caballero Diaz', 'Av. Trinidad y Tovan', '981924343', '2021-12-23', 'lucio', 'lucio', 2, 1),
(9, '65878954', 'Jorge', 'Miranda Bejar', 'Calle las maravillas', '987563254', '2022-12-13', 'jm@gmail.com', '123', 2, NULL),
(10, '65878954', 'Jorge', 'Miranda Bejar', 'Calle las maravillas', '987563254', '2022-12-13', 'jm@gmail.com', '123', 2, NULL),
(11, '65878954', 'Jorge', 'Miranda Bejar', 'Calle las maravillas', '987563254', '2022-12-13', 'jm@gmail.com', '123', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventas`
--

CREATE TABLE `tbventas` (
  `IdVenta` int(11) NOT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `PrecioTotal` decimal(10,2) DEFAULT NULL,
  `FechaVenta` date DEFAULT NULL,
  `Estado` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `tbdetalleventa`
--
ALTER TABLE `tbdetalleventa`
  ADD PRIMARY KEY (`IdDetalleVenta`),
  ADD KEY `IdVenta` (`IdVenta`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `tbprivilegios`
--
ALTER TABLE `tbprivilegios`
  ADD PRIMARY KEY (`IdPrivilegio`);

--
-- Indices de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `IdPrivilegio` (`IdPrivilegio`);

--
-- Indices de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  ADD PRIMARY KEY (`IdVenta`),
  ADD KEY `IdCliente` (`IdCliente`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbdetalleventa`
--
ALTER TABLE `tbdetalleventa`
  MODIFY `IdDetalleVenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbprivilegios`
--
ALTER TABLE `tbprivilegios`
  MODIFY `IdPrivilegio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  MODIFY `IdVenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbdetalleventa`
--
ALTER TABLE `tbdetalleventa`
  ADD CONSTRAINT `IdProducto` FOREIGN KEY (`IdProducto`) REFERENCES `tbproductos` (`IdProducto`),
  ADD CONSTRAINT `IdVenta` FOREIGN KEY (`IdVenta`) REFERENCES `tbventas` (`IdVenta`);

--
-- Filtros para la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD CONSTRAINT `IdPrivilegio` FOREIGN KEY (`IdPrivilegio`) REFERENCES `tbprivilegios` (`IdPrivilegio`);

--
-- Filtros para la tabla `tbventas`
--
ALTER TABLE `tbventas`
  ADD CONSTRAINT `IdCliente` FOREIGN KEY (`IdCliente`) REFERENCES `tbclientes` (`IdCliente`),
  ADD CONSTRAINT `IdUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tbusuarios` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

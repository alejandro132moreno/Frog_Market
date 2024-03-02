-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2024 a las 04:27:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frog_market`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID_Comment` smallint(6) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID_Comment`, `nombre`, `correo`, `comentario`) VALUES
(1, 'oswaldo', 'oswaldo@gmail.com', 'oswaldo'),
(5, 'Z3t3rn41', 'z03t3rn41@hotmail.com', 'Z3t3rn41'),
(8, 'Emmanuel Eduardo Lara Mares', 'manelara6828@gmail.com', 'hola'),
(9, 'Blanca Aide Ramos Ramírez', 'blanda.aide@gmail.com', 'buena pagina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_login`
--

CREATE TABLE `registro_login` (
  `ID_Usuario` smallint(6) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_login`
--

INSERT INTO `registro_login` (`ID_Usuario`, `nombre`, `usuario`, `correo`, `contraseña`) VALUES
(2, 'Emmanuel Eduardo Lara Mares', 'manemanito69', 'mane@gmail.com', 'xxmaneitorxx'),
(3, 'Wilson Ivan Adame Reyes', 'wil20', 'wil20@gmail.com', 'wilsonadame'),
(4, 'Mitzi Martínez Puga', 'insanaFF', 'heroicoenFF@gmail.com', 'mitzi123'),
(6, 'Jose Juan de Lira Romo', 'príncipeencantador', 'encantador123@gmail.com', 'qazwsxedcrfv'),
(8, 'Blanca Aide Ramos Ramírez', 'blanquita123', 'blanda.aide@gmail.com', 'tgbyhnujmik'),
(9, 'lindsay araceli gonzalez luevano', 'lindsayuwu', 'lindsay@gmail.com', 'qazwsxedcrfv'),
(10, 'Jasiel Casillas Vázquez', 'jasielowo', 'jasiel@gmail.com', '123'),
(11, 'Blanca', 'Z3t3n41', 'zer0@gmail.com', '1234'),
(12, 'Luis Felipe Pinales Romo', 'pinales03', 'luis.pinales@gmail.com', '0987654321'),
(13, 'Ernesto Cháves', 'largo123', 'ernesto.chaves@gmail.com', '123456789'),
(14, 'Adaly Ortiz Flores', 'adaly03', 'adaly.ortiz@gmail.com', '987456321'),
(15, 'Emmanuel Eduardo Lara Mares', 'manemanito69', 'manelara6828@gmail.com', '123456'),
(16, 'Nereida Monserrat Terrones', 'nereida', 'nereida.terrones@gmail.com', '987654321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_Comment`);

--
-- Indices de la tabla `registro_login`
--
ALTER TABLE `registro_login`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_Comment` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registro_login`
--
ALTER TABLE `registro_login`
  MODIFY `ID_Usuario` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

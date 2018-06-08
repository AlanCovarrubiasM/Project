-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2018 at 06:51 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Convocatorias`
--

CREATE TABLE `Convocatorias` (
  `Id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `categoria` text NOT NULL,
  `descripcion` text NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Convocatorias`
--

INSERT INTO `Convocatorias` (`Id`, `nombre`, `categoria`, `descripcion`, `fechaInicio`, `fechaFin`) VALUES
(3, 'Jose', '1', 'asdasdasdasdasd', '0000-00-00', '0000-00-00'),
(4, 'Jose', '1', 'asdasdasdasdasd', '0000-00-00', '0000-00-00'),
(5, 'asd', '1', 'asdasd', '2018-05-07', '2018-05-18'),
(6, 'Pedro', '2', 'Hola', '2018-05-07', '2018-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `convocatoria_registro`
--

CREATE TABLE `convocatoria_registro` (
  `id` int(11) NOT NULL,
  `id_convocatoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convocatoria_registro`
--

INSERT INTO `convocatoria_registro` (`id`, `id_convocatoria`, `id_usuario`) VALUES
(1, 0, 0),
(2, 3, 5),
(3, 5, 5),
(4, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `Proyectos`
--

CREATE TABLE `Proyectos` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `documento` text NOT NULL,
  `id_convocatoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Proyectos`
--

INSERT INTO `Proyectos` (`Id`, `nombre`, `id_usuario`, `descripcion`, `id_categoria`, `documento`, `id_convocatoria`) VALUES
(1, '', 0, '', 0, '', 0),
(2, '', 0, '', 0, '', 0),
(3, '', 0, '', 0, '', 0),
(4, 'ascasc', 9, 'ascasc', 1, '', 3),
(5, 'ascasc', 9, 'ascacs', 1, '', 3),
(6, 'wecwcw', 9, 'wecwec', 1, '', 3),
(7, '', 0, '', 0, '', 0),
(8, '', 0, '', 0, '', 0),
(9, '', 0, '', 0, '', 0),
(10, 'asxasx', 9, 'asxasx', 1, '', 3),
(11, 'wedwed', 9, 'wedwed', 1, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(250) NOT NULL,
  `nombre` text NOT NULL,
  `apellidoPaterno` text NOT NULL,
  `apellidoMaterno` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `email`, `username`, `password`, `rol`) VALUES
(8, 'Alan', 'Covarrubias', 'Medina', 'alan@ucol.mx', 'alan15', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 1),
(9, 'pedro', 'fernandez', 'palominos', 'pfernandezp91@gmail.com', 'pfernandez', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 3),
(10, 'sdcsdc', 'sdcsdc', 'sdcsdc', 'pfernandezp91@gmail.com', 'admin', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 2),
(11, 'demo', 'demo', 'demo', 'demo@demo.com', 'demo', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Convocatorias`
--
ALTER TABLE `Convocatorias`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `convocatoria_registro`
--
ALTER TABLE `convocatoria_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Proyectos`
--
ALTER TABLE `Proyectos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Convocatorias`
--
ALTER TABLE `Convocatorias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `convocatoria_registro`
--
ALTER TABLE `convocatoria_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Proyectos`
--
ALTER TABLE `Proyectos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

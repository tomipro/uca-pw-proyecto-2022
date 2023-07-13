-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2023 at 09:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uca-pw-proyecto-DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Arte`
--

CREATE TABLE `Arte` (
  `Id_Arte` int(11) NOT NULL,
  `Id_Coleccion` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Privado` tinyint(1) NOT NULL DEFAULT 0,
  `img_arte` varchar(255) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Arte`
--

INSERT INTO `Arte` (`Id_Arte`, `Id_Coleccion`, `User_Id`, `Privado`, `img_arte`, `Precio`) VALUES
(1, 1, 1, 0, '../imgs/nft-art/3.jpeg', 40),
(2, 2, 1, 0, '../imgs/nft-art/4.jpeg', 143),
(3, 2, 1, 0, '../imgs/nft-art/5.jpeg', 10),
(4, 2, 2, 0, '../imgs/nft-art/6.jpeg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `Colecciones`
--

CREATE TABLE `Colecciones` (
  `Id_Coleccion` int(11) NOT NULL,
  `Nombre_Coleccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Colecciones`
--

INSERT INTO `Colecciones` (`Id_Coleccion`, `Nombre_Coleccion`) VALUES
(1, 'boredApes'),
(2, 'mutantApes');

-- --------------------------------------------------------

--
-- Table structure for table `Compras`
--

CREATE TABLE `Compras` (
  `Comprador` int(11) NOT NULL,
  `Vendedor` int(11) NOT NULL,
  `Id_compra` int(11) NOT NULL,
  `Id_arte` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Hora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Compras`
--

INSERT INTO `Compras` (`Comprador`, `Vendedor`, `Id_compra`, `Id_arte`, `Precio`, `Hora`) VALUES
(2, 1, 1, 1, 40, '2022-11-11'),
(3, 2, 2, 3, 10, '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `User_Id` int(11) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL,
  `User_Level` int(1) NOT NULL DEFAULT 0,
  `User_Alias` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`User_Id`, `User_Email`, `User_Password`, `User_Level`, `User_Alias`) VALUES
(1, 'lucasdeb@uca.edu.ar', 'Nashe', 1, 'vitalik_buterin'),
(2, 'lucas1702debarbieri@gmail.com', 'holahola', 1, 'juanpablo'),
(3, 'joaco@gmail.com', 'passw0rd', 1, 'joaco.nft'),
(4, 'lucas@email.com', 'querido', 0, 'lucas1234'),
(6, 't@t.com', 'testtest', 0, 'testing'),
(7, 'test@test.com', 'prueba1', 0, 'dorota1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Arte`
--
ALTER TABLE `Arte`
  ADD PRIMARY KEY (`Id_Arte`,`Id_Coleccion`,`User_Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `arte_ibfk_2` (`Id_Coleccion`),
  ADD KEY `PRECIO` (`Precio`);

--
-- Indexes for table `Colecciones`
--
ALTER TABLE `Colecciones`
  ADD PRIMARY KEY (`Id_Coleccion`),
  ADD UNIQUE KEY `UNIQUE` (`Nombre_Coleccion`);

--
-- Indexes for table `Compras`
--
ALTER TABLE `Compras`
  ADD PRIMARY KEY (`Id_compra`),
  ADD UNIQUE KEY `UNIQUE` (`Comprador`),
  ADD UNIQUE KEY `UNIQUE 2` (`Vendedor`),
  ADD UNIQUE KEY `Arte` (`Id_arte`),
  ADD KEY `PRECIO` (`Precio`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `UNIQUE` (`User_Alias`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Arte`
--
ALTER TABLE `Arte`
  MODIFY `Id_Arte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Colecciones`
--
ALTER TABLE `Colecciones`
  MODIFY `Id_Coleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Arte`
--
ALTER TABLE `Arte`
  ADD CONSTRAINT `arte_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `Usuarios` (`User_Id`),
  ADD CONSTRAINT `arte_ibfk_2` FOREIGN KEY (`Id_Coleccion`) REFERENCES `Colecciones` (`Id_Coleccion`);

--
-- Constraints for table `Compras`
--
ALTER TABLE `Compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`Comprador`) REFERENCES `Usuarios` (`User_Id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`Vendedor`) REFERENCES `Usuarios` (`User_Id`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`Id_arte`) REFERENCES `Arte` (`Id_Arte`),
  ADD CONSTRAINT `compras_ibfk_4` FOREIGN KEY (`Precio`) REFERENCES `Arte` (`Precio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2017 às 06:42
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_itens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_item`
--

CREATE TABLE `area_item` (
  `id` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area_item`
--

INSERT INTO `area_item` (`id`, `id_area`, `id_item`, `quant`) VALUES
(4, 1, 2, 40),
(5, 2, 2, 5),
(6, 4, 2, 5),
(7, 2, 3, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quant` int(11) NOT NULL,
  `disponivel` int(11) NOT NULL,
  `id_repositorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id`, `nome`, `quant`, `disponivel`, `id_repositorio`) VALUES
(2, 'Alicate', 50, 0, 2),
(3, 'Maconha', 10, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_item`
--
ALTER TABLE `area_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_item`
--
ALTER TABLE `area_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

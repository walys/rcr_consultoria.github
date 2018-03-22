-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Mar-2018 às 08:28
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcr_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE `cores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`) VALUES
(1, 'Walyson', 'walysonfelix1991@gmail.com'),
(2, 'Walyson Felix do Santos', 'walysonfelix1991@gmail.com'),
(3, 'Werike ', 'werike@gmail.com'),
(4, 'Walyson Felix dos Santos ', 'walyson1991@gmail.com'),
(5, 'Walyson Felix dos Santos ', 'walyson1991@gmail.com'),
(6, 'Walyson Felix dos Santos', 'walysonfelix1991@gmail.com'),
(7, 'Walyson Ramon ', 'walysonfelix1991@gmail.com'),
(8, 'Walyson Felipe', 'walysonfelix1991@gmail.com'),
(9, 'Walyson Felix', 'walysonfelix1991@gmail.com'),
(10, 'Walyson D', 'walysonfelix1991@gmail.com'),
(11, 'Walyson Gleibisson', 'walysonfelix1991@gmail.com'),
(12, 'Walyson F', 'walysonfelix1991@gmail.com'),
(13, 'Walyson A', 'walysonfelix1991@gmail.com'),
(14, 'Walyson H', 'walysonfelix1991@gmail.com'),
(15, '', 'walysonfelix1991@gmail.com'),
(16, 'Walyson Ola', 'walysonfelix1991@gmail.com'),
(17, 'Walyson o', 'walysonfelix1991@gmail.com'),
(18, 'Walyson lllllllll', 'walysonfelix1991@gmail.com'),
(19, 'Walyson G', 'walysonfelix1991@gmail.com'),
(20, 'Walyson J', 'walysonfelix1991@gmail.com'),
(21, 'Walyson Q', 'walysonfelix1991@gmail.com'),
(22, 'Walyson oi', 'walysonfelix1991@gmail.com'),
(23, 'Walyson i', 'walysonfelix1991@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cores`
--
ALTER TABLE `cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

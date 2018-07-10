-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 05:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5
-- Author: Bruna Slavez Rodrigues

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'gestao_incidentes'
-- Database criada por mim, para inserir as tabelas especificadas no documento
--

-- --------------------------------------------------------

--
-- Table structure for table `atendentes`
-- Tabela para atendentes, com campos de id e nome
--

CREATE TABLE `atendentes` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
-- Tabela para cliente, com campos de id, nome e empresa
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) COLLATE utf8_bin NOT NULL,
  `empresa` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `incidente`
-- tabela de incidente, com campos de id, atendente, cliente, descricao, status e hora de criacao
--

CREATE TABLE `incidente` (
  `id` int(11) NOT NULL,
  `atendente` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `descricao` varchar(512) COLLATE utf8_bin NOT NULL,
  `status` varchar(16) COLLATE utf8_bin NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendentes`
--
ALTER TABLE `atendentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

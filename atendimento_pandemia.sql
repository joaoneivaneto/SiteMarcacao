-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Mar-2021 às 18:32
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atendimento_pandemia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atende`
--

CREATE TABLE `atende` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_estabecimento1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `Id` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` int(14) NOT NULL,
  `Rua` varchar(50) NOT NULL,
  `Nun_Casa` int(5) NOT NULL,
  `Bairro` varchar(20) NOT NULL,
  `Complemento` varchar(10) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(2) NOT NULL,
  `cep` int(9) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(10) NOT NULL,
  `CPF` double NOT NULL,
  `Sexo` varchar(9) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Id_cadastro` int(11) NOT NULL,
  `id_esta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `Id` int(11) NOT NULL,
  `CNPJ` double NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `id_cadastro1` int(11) NOT NULL,
  `id_atendi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista de marcação`
--

CREATE TABLE `lista de marcação` (
  `id` int(11) NOT NULL,
  `Aprov_Marc` varchar(15) NOT NULL DEFAULT 'em andamento',
  `Data` date NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atende`
--
ALTER TABLE `atende`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_cliente` (`id_cliente`),
  ADD KEY `Id_estabelecimento_Fk` (`id_estabecimento1`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_cadastro_fk` (`Id_cadastro`),
  ADD KEY `id_estabelecimento` (`id_esta`);

--
-- Indexes for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_atendimento_FK` (`id_atendi`),
  ADD KEY `id_estabeceli_FK` (`id_cadastro1`);

--
-- Indexes for table `lista de marcação`
--
ALTER TABLE `lista de marcação`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atende`
--
ALTER TABLE `atende`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atende`
--
ALTER TABLE `atende`
  ADD CONSTRAINT `Id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Id_estabelecimento_Fk` FOREIGN KEY (`id_estabecimento1`) REFERENCES `estabelecimento` (`Id`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Id_cadastro_fk` FOREIGN KEY (`Id_cadastro`) REFERENCES `cadastro` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_estabelecimento` FOREIGN KEY (`id_esta`) REFERENCES `estabelecimento` (`Id`);

--
-- Limitadores para a tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD CONSTRAINT `id_atendimento_FK` FOREIGN KEY (`id_atendi`) REFERENCES `lista de marcação` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_estabeceli_FK` FOREIGN KEY (`id_cadastro1`) REFERENCES `cadastro` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/08/2023 às 21:07
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sysprot`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `protocolos`
--

CREATE TABLE `protocolos` (
  `id` int(11) NOT NULL,
  `numeroProtocolo` varchar(100) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipoDoc` varchar(255) NOT NULL,
  `dataDoc` date NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `momento_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `protocolos`
--

INSERT INTO `protocolos` (`id`, `numeroProtocolo`, `nome`, `tipoDoc`, `dataDoc`, `comentario`, `momento_registro`) VALUES
(37, 'a1515', 'exemplo', 'teste', '1202-02-01', 'teste', '2023-08-22 14:57:39'),
(38, 'a1515', 'exemplo', 'teste', '1202-02-01', 'teste', '2023-08-22 14:58:18'),
(39, 'a320', 'biostar', 'motherboard', '2003-04-01', 'teste', '2023-08-22 15:00:57'),
(40, 'a100', 'bruno', 'atestado', '0003-02-01', 'teste', '2023-08-22 15:29:16');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `protocolos`
--
ALTER TABLE `protocolos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `protocolos`
--
ALTER TABLE `protocolos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

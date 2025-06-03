-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/06/2025 às 04:16
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `honeycomb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `assinatura`
--

CREATE TABLE `assinatura` (
  `id` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `assinatura`
--

INSERT INTO `assinatura` (`id`, `nome`) VALUES
(1, 'operario'),
(2, 'zangao'),
(3, 'rainha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_produto`, `id_usuario`, `descricao`) VALUES
(6, 1, 1, NULL),
(7, 2, 1, ''),
(8, 3, 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `descricao` varchar(800) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `estoque`, `path`) VALUES
(1, 'Abelha de pelucia', 'Almofada de abelha de pelucia', 1, 5, 'img/pelucia.jpg'),
(2, 'pote de mel', 'Pote de mel com 500g de mel', 2, 10, 'img/pote de mel.jpeg'),
(3, 'hidratante labial', 'Hidratante labial natural de cera de abelha', 2, 8, 'img/labio.jpg'),
(4, 'sabonete', 'sabonete de mel, antisséptico e cicatrizante', 2, 10, 'img/sabonete2.jpg'),
(5, 'ecobag', 'Ecobag temática de abelha', 1, 15, 'img/ecobag.jpg'),
(6, 'bee hotel', 'Abrigo para abelhas solitárias', 2, 8, 'img/beehotel.jpg'),
(7, 'kit de jardinagem', 'Kit de jardinagem maleta com 8 pecas', 3, 5, 'img/kit.jpg'),
(8, 'kit de apicultor', 'kit de apicultor com macacão e fumigador', 5, 10, 'img/apicultor.webp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_assinatura` int(11) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `senha` varchar(300) DEFAULT NULL,
  `nome` varchar(500) DEFAULT NULL,
  `pontos` int(11) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(70) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_assinatura`, `email`, `senha`, `nome`, `pontos`, `estado`, `cidade`, `bairro`, `cep`) VALUES
(1, 2, 'gigatom3423@gmail.com', 'boladao123', 'xei de odiu du guvernu', 0, 'CE', 'Sao goncalo do amarante', 'Umarituba', 'Sao goncalo do amarante'),
(2, 1, 'zupoguha@gmail.com', 'ursao123', 'Zupo Apelaou 1208', NULL, NULL, NULL, NULL, NULL),
(8, 3, 'bymoto@gmail.com', 'avara123', 'Hajime Tetako Avara', 3, NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

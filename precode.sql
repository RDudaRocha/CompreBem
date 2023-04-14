-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/04/2023 às 04:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `precode`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(3, 'Teste'),
(4, 'Teste2'),
(5, 'Teste3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `imposto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `preco_imposto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `descricao`, `preco`, `estoque`, `foto`, `categoria`, `preco_imposto`) VALUES
(1, 'samsumg samsumg preto', 'samsumg preto todo dia e bonito. Este produto foi listado pela precode sistemas de software em geral.', 989.90, 20, 'celular-samsung.jpg', 'Eletrônico ', ''),
(2, 'fogao dako preto', 'fogao dako todo dia e bonito. Este produto foi listado pela precode sistemas de software em geral.', 989.90, 15, 'fodao-preto.jpg', 'Eletrônico ', ''),
(3, 'lavadora lav 13', 'lavadora lav 13 todo dia e bonito. Este produto foi listado pela precode sistemas de software em geral.', 1989.90, 35, 'lav-13.jpg', NULL, ''),
(4, 'tv-smart sony\r\n', 'tv smart sony todo dia e bonito. Este produto foi listado pela precode sistemas de software em geral.', 1989.90, 35, 'tv-smart.jpg', NULL, ''),
(30, 'PS4', 'Plastation, Branco, 1T', 3100.00, 24, '../../Assets/img/shopping-g2eed4b6d8_1920.jpg', 'categoria', '800.00'),
(36, 'Produto 30', 'Produto 30', 30.00, 5, 'Green Modern Forest Desktop Wallpaper (1).png', '5', '2.00'),
(37, 'Seda Cachos Frozen', 'Creme de pentear', 12.00, 37, '7891150083639.01-55354144-png.avif', 'Teste3', '2.00'),
(38, 'Seda Cachos Frozen', 'Creme de pentear', 12.00, 37, '7891150083639.01-55354144-png.avif', 'Teste3', '2.00'),
(40, 'Coraçãozinho', 'Carne', 12.00, 90, '1.png', 'Teste3', '6.00'),
(41, 'Produto 3', 'Produto', 32.00, 60, 'Assets/img/4.png', 'Teste2', '6.00'),
(42, 'Produto 3', 'Produto', 32.00, 60, 'Assets/img/4.png', 'Teste2', '6.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

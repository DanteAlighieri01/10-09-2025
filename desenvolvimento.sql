-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/09/2025 às 19:04
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
-- Banco de dados: `desenvolvimento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` int(20) NOT NULL,
  `complemento` varchar(150) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `celular`, `endereco`, `numero`, `complemento`, `cidade`, `cpf`) VALUES
(1, 'João Silva', '11987654321', 'Rua das Flores', 123, 'Apto 12', 'São Paulo', '12345678901'),
(2, 'Maria Oliveira', '11998765432', 'Av. Paulista', 456, 'Bloco B', 'São Paulo', '23456789012'),
(3, 'Pedro Santos', '11991234567', 'Rua das Acácias', 789, '', 'Campinas', '34567890123'),
(4, 'Ana Souza', '21992345678', 'Rua do Sol', 321, 'Casa', 'Rio de Janeiro', '45678901234'),
(5, 'Carlos Pereira', '99990000', 'Av. Brasil', 654, 'Sala 101', 'Belo Horizonte', '56789012345'),
(6, 'Fernanda Costa', '41994567890', 'Rua das Palmeiras', 987, '', 'Curitiba', '67890123456'),
(7, 'Ricardo Lima', '51995678901', 'Rua Central', 135, 'Fundos', 'Porto Alegre', '78901234567'),
(8, 'Juliana Martins', '61996789012', 'Av. Goiás', 246, 'Casa 2', 'Goiânia', '89012345678'),
(9, 'Felipe Alves', '71997890123', 'Rua Nova', 369, '', 'Salvador', '90123456789'),
(10, 'Patrícia Mendes', '81998901234', 'Rua Principal', 147, 'Cobertura', 'Recife', '01234567890');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_pedido` date NOT NULL,
  `data_entrega` date NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_salgados`
--

CREATE TABLE `pedidos_salgados` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_salgado` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `salgados`
--

CREATE TABLE `salgados` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `salgados`
--

INSERT INTO `salgados` (`id`, `nome`, `tipo`, `valor`) VALUES
(1, 'Coxinha de Frango', 'Frito', 1.5),
(2, 'Bolinha de Queijo', 'Frito', 2.23),
(3, 'Kibe', 'Frito', 1.6),
(4, 'Risole de Carne', 'Frito', 1.4),
(5, 'Enroladinho de Salsicha', 'Assado', 1.3),
(6, 'Esfiha de Carne', 'Assado', 1.7),
(7, 'Empada de Frango', 'Assado', 2),
(8, 'Pastel de Palmito', 'Frito', 1.8),
(9, 'Mini Pizza Mussarela', 'Assado', 2.5),
(10, 'Pão de Queijo', 'Assado', 1),
(12, 'Esfiha de Palmito', 'Assado', 2.34);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES
(1, 'teste', 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos_salgados`
--
ALTER TABLE `pedidos_salgados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `salgados`
--
ALTER TABLE `salgados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos_salgados`
--
ALTER TABLE `pedidos_salgados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `salgados`
--
ALTER TABLE `salgados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

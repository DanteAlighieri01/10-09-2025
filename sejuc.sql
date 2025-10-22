-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2025 às 03:23
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
-- Banco de dados: `sejuc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `senha`) VALUES
(2, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `idade` varchar(3) NOT NULL,
  `genero` varchar(999) NOT NULL,
  `mail` varchar(9999) NOT NULL,
  `celular` varchar(16) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `idade`, `genero`, `mail`, `celular`, `cep`) VALUES
(3, 'dante', '15', 'masculino', 'teste@gmail.com', '888787878', '87083420'),
(4, 'Dante ', '12', 'estudando', 'teste2@gmail.com', '999999', '87083420');

-- --------------------------------------------------------

--
-- Estrutura para tabela `questionario`
--

CREATE TABLE `questionario` (
  `id` int(11) NOT NULL,
  `cursos` mediumtext NOT NULL,
  `interesse` mediumtext NOT NULL,
  `horarios` mediumtext NOT NULL,
  `esportes` varchar(200) NOT NULL,
  `espaco_esportivo` mediumtext NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `musica` varchar(200) NOT NULL,
  `conhece` varchar(200) NOT NULL,
  `informar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `questionario`
--

INSERT INTO `questionario` (`id`, `cursos`, `interesse`, `horarios`, `esportes`, `espaco_esportivo`, `conteudo`, `musica`, `conhece`, `informar`) VALUES
(1, 'Informática', 'sim', 'manha', 'Array', 'vvv', 'filmes', 'Array', 'sim', 'redes sociais');

-- --------------------------------------------------------

--
-- Estrutura para tabela `questionario_cadastro`
--

CREATE TABLE `questionario_cadastro` (
  `id` int(11) NOT NULL,
  `id_jovem` int(11) NOT NULL,
  `id_respotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `questionario_cadastro`
--
ALTER TABLE `questionario_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `questionario`
--
ALTER TABLE `questionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `questionario_cadastro`
--
ALTER TABLE `questionario_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

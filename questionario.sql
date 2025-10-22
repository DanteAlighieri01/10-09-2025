-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2025 às 22:11
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
-- Banco de dados: `sejuc`
--

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
(1, 'Informática', 'sim', 'manha', 'Array', 'vvv', 'filmes', 'Array', 'sim', 'redes sociais'),
(2, 'Informática, Mídia e Multimeios', 'sim', 'manha', 'Array', 'dada', 'jogos', 'Array', 'sim', 'escola'),
(3, 'Informática', 'sim', 'manha', 'outro', 'dada', 'series', 'outro', 'sim', 'escola'),
(4, 'Informática, Mídia e Multimeios', 'sim', 'manha', 'skate, dança', 'dada', 'filmes', 'rock, gospel', 'sim', 'whatsapp');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `questionario`
--
ALTER TABLE `questionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

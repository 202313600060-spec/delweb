-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/12/2025 às 21:01
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
-- Banco de dados: `delweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `Id_den` int(11) NOT NULL,
  `Tipo` text NOT NULL,
  `URL` text NOT NULL,
  `Descrição` text NOT NULL,
  `Stat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `denuncia`
--

INSERT INTO `denuncia` (`Id_den`, `Tipo`, `URL`, `Descrição`, `Stat`) VALUES
(28, 'Violação 2', 'a', ' a', 'F'),
(35, 'Violação 5', 'b', ' b', 'V'),
(38, 'Violação 5', 'b', ' b', 'F'),
(39, 'Violação 8', '1234567890.com', ' não gosto de números', 'F'),
(40, 'Violação 4', 'teste', ' teste2', 'F'),
(42, 'Violação 2', 'radar64.com', ' feijão com farinha e banana', 'V'),
(43, 'Violação 4', 'bmvandwebbbea.COM.br', ' asdasdsadsafeijoada', 'V');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL,
  `Telefone` text DEFAULT NULL,
  `CPF` text NOT NULL,
  `Tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id_user`, `Nome`, `Email`, `Senha`, `Telefone`, `CPF`, `Tipo`) VALUES
(1, '', 'abacaxi@as', '123', NULL, '', ''),
(2, '', 'banana@gmail.com', '1414', NULL, '', ''),
(3, '', 'maca@gmail.com', '1414', NULL, '', ''),
(4, 'bananilson', 'b@gmail.com', 'abc', '134', '12345 ', 'U'),
(5, 'Maçã', 'm@hotmail.com', 'abc', '1234-5678', '1.2.3-4', 'F'),
(6, 'alfabeto', 'alfabeto@abc.com', '123', '789', '456 ', 'U');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`Id_den`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `Id_den` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

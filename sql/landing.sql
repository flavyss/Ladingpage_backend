-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2023 às 22:31
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
-- Banco de dados: `landing`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `iduser` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `txt1` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `tt1` varchar(255) NOT NULL,
  `tt2` varchar(255) NOT NULL,
  `tt3` varchar(255) NOT NULL,
  `dd1` varchar(255) NOT NULL,
  `dd2` varchar(255) NOT NULL,
  `dd3` varchar(255) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `site`
--

INSERT INTO `site` (`id`, `iduser`, `logo`, `txt1`, `img1`, `img2`, `img3`, `tt1`, `tt2`, `tt3`, `dd1`, `dd2`, `dd3`, `fotos`, `banner`) VALUES
(8, '1', 'src/uploads/logo.png', '<span style=\"color:red;\">A</span>ndamos juntos <br><span style=\"color:yellow;\">R</span>umo a nova<br><span style=\"color:blue;\">T</span>erra', 'src/uploads/bg3.jpg', 'src/uploads/bg2.jpg', 'src/uploads/bg1.png', 'Titulo de arte', 'Titulo de algo', 'Titulo de algo mais', 'Algo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezes', 'Algo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezes', 'Algo escrito varias vezesAlgo escrito varias vezesAlgo escrito varias vezes', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'admin', 'admin@com', '$2y$10$px0VRaHmCIK5YhVwJx9XI.PfNPlBgCW.ufVvclzpH3hmz0.OLrjqm');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `site`
--
ALTER TABLE `site`
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
-- AUTO_INCREMENT de tabela `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

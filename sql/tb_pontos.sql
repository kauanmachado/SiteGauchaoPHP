-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2022 às 23:08
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gaucho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pontos`
--

CREATE TABLE `tb_pontos` (
  `id_time` int(11) NOT NULL,
  `pontos_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_pontos`
--

INSERT INTO `tb_pontos` (`id_time`, `pontos_time`) VALUES
(1, 19),
(2, 21),
(3, 21),
(4, 16),
(5, 15),
(6, 15),
(7, 15),
(8, 14),
(9, 13),
(10, 11),
(11, 9),
(12, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_pontos`
--
ALTER TABLE `tb_pontos`
  ADD PRIMARY KEY (`id_time`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pontos`
--
ALTER TABLE `tb_pontos`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_pontos`
--
ALTER TABLE `tb_pontos`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id_time`) REFERENCES `tb_times` (`id_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

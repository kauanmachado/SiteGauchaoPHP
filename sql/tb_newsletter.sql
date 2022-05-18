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
-- Estrutura da tabela `tb_newsletter`
--

CREATE TABLE `tb_newsletter` (
  `id` int(11) NOT NULL,
  `email_usuario` varchar(260) NOT NULL,
  `nm_time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_newsletter`
--

INSERT INTO `tb_newsletter` (`id`, `email_usuario`, `nm_time`) VALUES
(9, 'kauan@gmail.com', 'BRASIL DE PELOTAS'),
(10, 'gabriel@gmail.com', 'INTERNACIONAL');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_email` (`email_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email_usuario`) REFERENCES `tb_usuario` (`email_usuario`),
  ADD CONSTRAINT `fk_time` FOREIGN KEY (`nm_time`) REFERENCES `tb_times` (`nm_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

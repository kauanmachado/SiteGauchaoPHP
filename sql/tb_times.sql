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
-- Estrutura da tabela `tb_times`
--

CREATE TABLE `tb_times` (
  `id_time` int(11) NOT NULL,
  `nm_time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_times`
--

INSERT INTO `tb_times` (`id_time`, `nm_time`) VALUES
(8, 'AIMORÉ'),
(4, 'BRASIL DE PELOTAS'),
(5, 'CAXIAS'),
(2, 'GRÊMIO'),
(12, 'GUARANY DE BAGÉ'),
(1, 'INTERNACIONAL'),
(10, 'JUVENTUDE'),
(7, 'NOVO HAMBURGO'),
(6, 'SÃO JOSÉ '),
(9, 'SÃO LUIZ'),
(11, 'UNIÃO FREDERIQUENSE'),
(3, 'YPIRANGA ERECHIM');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_times`
--
ALTER TABLE `tb_times`
  ADD PRIMARY KEY (`id_time`),
  ADD UNIQUE KEY `uk_time` (`nm_time`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_times`
--
ALTER TABLE `tb_times`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

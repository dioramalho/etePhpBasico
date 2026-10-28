-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Out-2026 às 00:18
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_tb`
--

CREATE TABLE `usuario_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario_tb`
--

INSERT INTO `usuario_tb` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`) VALUES
(5, 'Politico de vitória', '22222', '8189898898', 'politico@gmail.com', 'Rua Padre Nestor de Alencar, 5780'),
(6, 'Politico de vitória', '22222', '8189898898', 'politico@gmail.com', 'Rua Padre Nestor de Alencar, 5780'),
(8, 'aaa', '067.416.284-60', '81997941373', 'dioramalho@gmail.com', '87 casa'),
(9, 'João Pessoa', '2323232323', '81997941373', 'jp@gmail.com', 'meu endereço numero 87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario_tb`
--
ALTER TABLE `usuario_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario_tb`
--
ALTER TABLE `usuario_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

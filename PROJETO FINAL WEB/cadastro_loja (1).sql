-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/08/2024 às 00:39
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(220) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `datanascimento` datetime NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` set('Masculino','Feminino','Não informar') NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `datanascimento`, `cpf`, `sexo`, `telefone`, `endereco`, `cep`, `senha`) VALUES
(8, 'RAFAEL RODRIGUES DOS SANTOS', 'rafa@hotmail.com', '1996-11-03 00:00:00', '031.709.081', 'Masculino', '(61) 9932-9011', 'qroa cnjuto 4', '12345-666', '123456'),
(9, 'Francisca rodrigues', 'Francisca@hotmail.com', '1555-11-03 00:00:00', '100.709.081', 'Feminino', '(61) 9932-8011', 'qroa cnjuto E', '15717-27', '123456'),
(17, 'rafael rodrigues dos santos', 'rafraelgoo@gmail.com', '9966-11-03 00:00:00', '100.709.081', 'Masculino', '(61) 9932-9011', 'qroa cnjut', '12345-666', '123456'),
(18, 'jovem', 'rafael.rsantos@a.ucb.br', '9966-11-03 00:00:00', '100.709.081', 'Masculino', '(61) 9932-9011', 'qroa cnjut', '12345-666', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: zabbix_mysql
-- Generation Time: 13-Set-2018 às 15:56
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailtrack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `trackID` varchar(512) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`trackID`, `data`) VALUES
('c43cd12dce861b4c49ab2a5b0e1adb4e.png', '2018-09-13 12:47:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trackIDs`
--

CREATE TABLE `trackIDs` (
  `trackID` varchar(512) NOT NULL,
  `email_usuario` varchar(250) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `contagem_acessos` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '0',
  `observacao` varchar(512) NOT NULL,
  `primeiro_acesso` datetime DEFAULT NULL,
  `ultimo_acesso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `trackIDs`
--

INSERT INTO `trackIDs` (`trackID`, `email_usuario`, `data_criacao`, `contagem_acessos`, `ativo`, `observacao`, `primeiro_acesso`, `ultimo_acesso`) VALUES
('c43cd12dce861b4c49ab2a5b0e1adb4e.png', 'miliorinimatheus@gmail.com', '2018-09-13 12:44:07', 0, 1, 'Teste1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email_usuario` varchar(250) NOT NULL,
  `primeiro_nome` varchar(256) NOT NULL,
  `ultimo_nome` varchar(512) NOT NULL,
  `senha` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email_usuario`, `primeiro_nome`, `ultimo_nome`, `senha`) VALUES
('miliorinimatheus@gmail.com', '', '', 'glock9mm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD KEY `trackids_acessos_fk` (`trackID`);

--
-- Indexes for table `trackIDs`
--
ALTER TABLE `trackIDs`
  ADD PRIMARY KEY (`trackID`),
  ADD KEY `usuarios_trackids_fk` (`email_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email_usuario`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessos`
--
ALTER TABLE `acessos`
  ADD CONSTRAINT `trackids_acessos_fk` FOREIGN KEY (`trackID`) REFERENCES `trackIDs` (`trackID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `trackIDs`
--
ALTER TABLE `trackIDs`
  ADD CONSTRAINT `usuarios_trackids_fk` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

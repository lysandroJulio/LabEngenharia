-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2019 às 21:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testela`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `cod_avaliacao` int(11) NOT NULL,
  `conhecimento_pratico` int(11) DEFAULT NULL,
  `relacionamento_superior` int(11) DEFAULT NULL,
  `relacionamento_equipe` int(11) DEFAULT NULL,
  `respeita_normas` int(11) DEFAULT NULL,
  `assiduidade` int(11) DEFAULT NULL,
  `epis_correto` int(11) DEFAULT NULL,
  `cuidado_ferramentas` int(11) DEFAULT NULL,
  `dinamico` int(11) DEFAULT NULL,
  `comportamento_obra` int(11) DEFAULT NULL,
  `comportamento_alojamento` int(11) DEFAULT NULL,
  `cod_contrato` int(11) DEFAULT NULL,
  `D_E_L_E_T_` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`cod_avaliacao`, `conhecimento_pratico`, `relacionamento_superior`, `relacionamento_equipe`, `respeita_normas`, `assiduidade`, `epis_correto`, `cuidado_ferramentas`, `dinamico`, `comportamento_obra`, `comportamento_alojamento`, `cod_contrato`, `D_E_L_E_T_`) VALUES
(1, 2, 4, 4, 4, 4, 3, 4, 4, 3, 4, 1, NULL),
(2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 3, 2, NULL),
(3, 4, 4, 4, 4, 3, 4, 3, 3, 4, 4, 3, NULL),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 7, NULL),
(5, 1, 4, 3, 4, NULL, 2, 3, 4, 4, 4, 8, NULL),
(6, 4, 3, 4, 4, NULL, 3, 4, 3, 3, 4, 9, NULL),
(7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, NULL),
(8, 4, 4, 3, 4, 4, 4, 4, 3, 4, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `cod_cargo` int(11) NOT NULL,
  `descricao_cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_E_L_E_T_` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`cod_cargo`, `descricao_cargo`, `D_E_L_E_T_`) VALUES
(1, 'Soldador', NULL),
(2, 'Ajudante', NULL),
(3, 'Montador', NULL),
(4, 'Caldeireiro', NULL),
(5, 'Almoxarifado', NULL),
(6, 'Tecnico de Segurança do Trabalho', NULL),
(7, 'Encarregado', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `cod_contrato` int(11) NOT NULL,
  `data_admissao` date DEFAULT NULL,
  `data_demissao` date DEFAULT NULL,
  `acao_judicial` tinyint(1) DEFAULT NULL,
  `testemunha_judicial` tinyint(1) DEFAULT NULL,
  `observacoes_contrato` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obra_trabalhada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_funcionario` int(11) DEFAULT NULL,
  `D_E_L_E_T_` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`cod_contrato`, `data_admissao`, `data_demissao`, `acao_judicial`, `testemunha_judicial`, `observacoes_contrato`, `obra_trabalhada`, `cod_funcionario`, `D_E_L_E_T_`) VALUES
(1, '2019-03-14', '2019-03-30', 0, 0, 'Nada consta', 'Lab Engenharia', 1, NULL),
(2, '2019-03-14', '2019-03-30', 0, 0, ' Nada consta', 'Lab Engenharia', 2, NULL),
(3, '2019-03-14', '2019-03-30', 0, 0, ' nada consta', 'Lab Engenharia', 3, NULL),
(4, '2019-05-03', NULL, 0, 0, NULL, 'Lab Fatec', 66, NULL),
(5, '2019-05-03', '2019-05-10', 0, 1, 'nada', 'Lab Fatec', 67, NULL),
(6, '2019-05-03', NULL, 0, 0, 'nada', 'Lab Fatec', 68, NULL),
(7, '2019-05-03', '2019-05-09', 0, 0, NULL, 'Lab Fatec', 69, NULL),
(8, '2019-05-07', '2019-05-09', 0, 0, 'Nada', 'Lab Fatec', 70, NULL),
(9, '2019-05-09', '2019-05-10', 0, 0, 'Teste', 'Lab Fatec 2', 71, NULL),
(10, '2019-05-07', '2019-05-10', 0, 0, 'Nenhuma', 'Lab Fatec 2', 72, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cod_funcionario` int(11) NOT NULL,
  `cpf_funcionario` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_funcionario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone2` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_cargo` int(11) DEFAULT NULL,
  `D_E_L_E_T_` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cod_funcionario`, `cpf_funcionario`, `nome_funcionario`, `telefone1`, `telefone2`, `cod_cargo`, `D_E_L_E_T_`) VALUES
(1, '52636999902', 'Lysandro Julio de Oliveira', '1633221054', '16952487563', 4, NULL),
(2, '55522233365', 'EDSON ALEXANDRE CAMPOS', '1633258741', '16981256325', 1, NULL),
(3, '88855522214', 'Bruno pierini', '1633258741', '16952487563', 6, NULL),
(66, '44455588826', 'vai dar certo', '1633258741', '16952487563', 7, NULL),
(67, '44455588826', 'deu certo carvalho', '1633226039', '16952480000', 3, NULL),
(68, '44455588826', 'teste 0305 1', '1633258741', '16952480000', 5, NULL),
(69, '55522212358', 'teste 2604', '1633258741', '16952487563', 3, NULL),
(70, '55522212359', 'teste 0705', '1433662894', '16995203647', 3, NULL),
(71, '44455588520', 'teste 0905 1', '1633258741', '14955236578', 2, NULL),
(72, '44455588520', 'teste 1005', '1633220682', '16995203647', 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_E_L_E_T_` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `email`, `senha`, `admin`, `D_E_L_E_T_`) VALUES
(1, 'administracao@laservices.com.br', '202cb962ac59075b964b07152d234b70', '*', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`cod_avaliacao`),
  ADD KEY `cod_contrato` (`cod_contrato`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cod_cargo`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`cod_contrato`),
  ADD KEY `cod_funcionario` (`cod_funcionario`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod_endereco`),
  ADD KEY `cod_funcionario` (`cod_funcionario`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cod_funcionario`),
  ADD KEY `cod_cargo` (`cod_cargo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `cod_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cod_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `cod_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `cod_endereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`cod_contrato`) REFERENCES `contrato` (`cod_contrato`);

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionarios` (`cod_funcionario`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionarios` (`cod_funcionario`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`cod_cargo`) REFERENCES `cargo` (`cod_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

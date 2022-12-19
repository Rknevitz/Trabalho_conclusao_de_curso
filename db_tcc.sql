-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Abr-2022 às 01:50
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adiciona_endereco`
--

CREATE TABLE `tb_adiciona_endereco` (
  `id_endereco` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `lat` decimal(20,17) NOT NULL,
  `lng` decimal(27,17) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chat`
--

CREATE TABLE `tb_chat` (
  `id_chat` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `mensagem` varchar(250) DEFAULT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coleta`
--

CREATE TABLE `tb_coleta` (
  `id_coleta` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_residuo` int(11) DEFAULT NULL,
  `d_data` datetime DEFAULT NULL,
  `resgistro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nm_empresa` varchar(250) NOT NULL,
  `email_empresa` varchar(250) NOT NULL,
  `senha_empresa` varchar(255) NOT NULL,
  `celular_empresa` varchar(11) NOT NULL,
  `img_empresa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa_residuo`
--

CREATE TABLE `tb_empresa_residuo` (
  `id_empresa` int(11) DEFAULT NULL,
  `id_residuo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_residuo`
--

CREATE TABLE `tb_residuo` (
  `Id_residuo` int(11) NOT NULL,
  `nm_residuo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_residuo`
--

INSERT INTO `tb_residuo` (`Id_residuo`, `nm_residuo`) VALUES
(1, 'Alumínio'),
(2, 'Aparelhos Eletrônicos'),
(3, 'Papel'),
(4, 'Pilha'),
(5, 'Óleo de cozinha'),
(6, 'Plástico'),
(7, 'Vidro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(250) NOT NULL,
  `email_usuario` varchar(250) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `celular_usuario` varchar(250) NOT NULL,
  `img_usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_adiciona_endereco`
--
ALTER TABLE `tb_adiciona_endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Índices para tabela `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Índices para tabela `tb_coleta`
--
ALTER TABLE `tb_coleta`
  ADD PRIMARY KEY (`id_coleta`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_residuo` (`id_residuo`);

--
-- Índices para tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD UNIQUE KEY `UK_DEPT_LOC` (`email_empresa`);

--
-- Índices para tabela `tb_empresa_residuo`
--
ALTER TABLE `tb_empresa_residuo`
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_residuo` (`id_residuo`);

--
-- Índices para tabela `tb_residuo`
--
ALTER TABLE `tb_residuo`
  ADD PRIMARY KEY (`Id_residuo`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `UK_DEPT_LOC` (`email_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_adiciona_endereco`
--
ALTER TABLE `tb_adiciona_endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `id_chat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT de tabela `tb_coleta`
--
ALTER TABLE `tb_coleta`
  MODIFY `id_coleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_residuo`
--
ALTER TABLE `tb_residuo`
  MODIFY `Id_residuo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_adiciona_endereco`
--
ALTER TABLE `tb_adiciona_endereco`
  ADD CONSTRAINT `id_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id_empresa`);

--
-- Limitadores para a tabela `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD CONSTRAINT `tb_chat_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `tb_chat_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id_empresa`);

--
-- Limitadores para a tabela `tb_coleta`
--
ALTER TABLE `tb_coleta`
  ADD CONSTRAINT `tb_coleta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `tb_coleta_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id_empresa`),
  ADD CONSTRAINT `tb_coleta_ibfk_3` FOREIGN KEY (`id_residuo`) REFERENCES `tb_residuo` (`Id_residuo`);

--
-- Limitadores para a tabela `tb_empresa_residuo`
--
ALTER TABLE `tb_empresa_residuo`
  ADD CONSTRAINT `tb_empresa_residuo_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id_empresa`),
  ADD CONSTRAINT `tb_empresa_residuo_ibfk_2` FOREIGN KEY (`id_residuo`) REFERENCES `tb_residuo` (`Id_residuo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/02/2025 às 16:02
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ferramenta_para_treinamentos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cargos`
--

INSERT INTO `cargos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Pedreiro', '2024-12-18 23:54:28', '2024-12-18 23:54:28', NULL, NULL),
(2, 'Engenheiro', '2025-02-17 14:52:44', '2025-02-17 14:52:44', NULL, NULL),
(3, 'Fazendeiro', '2025-02-17 14:52:57', '2025-02-17 14:52:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(10) NOT NULL,
  `idCargo` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `permissao` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `colaborador`
--

INSERT INTO `colaborador` (`id`, `idCargo`, `nome`, `permissao`, `email`, `senha`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(8, 1, 'Daniel Victor', 1, 'danielv@cola.com.br', '$2y$12$PnQgXCu3gG181YUINVy1re.mknhIqOMrZ6aaph/Le53i.xfZyzu0C', '2025-02-17 14:40:54', '2025-02-17 14:40:54', NULL, NULL),
(14, 1, 'Gabriel', 1, 'gabriel@cola.com.br', '$2y$12$NpS8yNWY.b1kGVInyy6IAOd.zLMdN44umqRtbavKr477xlRumhJKm', '2025-02-17 14:48:25', '2025-02-17 14:48:25', NULL, NULL),
(15, 1, 'Gabriel', 1, 'gabriel@cola.com.br', '$2y$12$KUppmlzi8PlZ8AuI3nWFfu7fokMldmV.M6cx28/rdeZeN4KKSQHUq', '2025-02-17 14:49:01', '2025-02-17 14:49:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaboradores_treinamentos`
--

CREATE TABLE `colaboradores_treinamentos` (
  `idColaborador` int(10) NOT NULL,
  `idTreinamento` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `remove_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `treinamentos`
--

CREATE TABLE `treinamentos` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `idCargo` int(10) NOT NULL,
  `validade_meses` int(2) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `treinamentos`
--

INSERT INTO `treinamentos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`, `idCargo`, `validade_meses`, `status`) VALUES
(1, 'Comunicação', '2001-12-05 15:11:00', '2025-02-17 14:29:05', NULL, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissao` int(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `password`, `permissao`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(2, 'Comunicação', 'teste@123gmail.com', '$2y$12$KNoRvFuIEa20veyvmVzWCOoqv8bNrUfIKBP/J2Jz7KDmO.HtO/Knq', NULL, '2025-02-04 22:08:02', '2025-02-04 22:08:02', NULL, NULL),
(3, 'Comunicação', 'teste@123gmail.com', '$2y$12$.kuD3P.7salbxF6I/9qHG.J2R8uwwuh2cCavVRB3avapPpbA4Jzg2', NULL, '2025-02-06 23:08:45', '2025-02-06 23:08:45', NULL, NULL),
(4, 'daniel', 'danielvictor@hotmail.com', '$2y$12$IS45mW0YVk.q2LotBDt.IOyqtF4/Ut6U2hZd4ki9PyR/ZiMFYD45G', NULL, '2025-02-10 23:03:33', '2025-02-10 23:03:33', NULL, NULL),
(5, 'Geral', 'gabriel@123gmail.com', '111', NULL, '2025-02-11 23:31:18', '2025-02-11 23:31:18', NULL, NULL),
(6, 'Amanda', 'amandaSenai@gmail.com', '$2y$12$uTSDJVdAcRWQwFVTjksJ2uElY4N/SWXwQHRIU1Zrjl7XuAx7Yb8bm', NULL, '2025-02-12 22:35:31', '2025-02-12 22:35:31', NULL, NULL),
(7, 'Teste', 'teste@docente.com', '$2y$12$IDhPDsZYcbAogq08/2233ePP4jq0vQvgxK4nyZvkS7QSQnUi8A3xK', NULL, '2025-02-12 23:25:18', '2025-02-12 23:25:18', NULL, NULL),
(10, 'ttt', 'ttt@docente.com', '$2y$12$cML4bPr9UG26QviIwVAbVOiuk3brB4ql4h9/wCl9zG.cYNCm8/UVy', 1, '2025-02-12 23:59:39', '2025-02-12 23:59:39', NULL, NULL),
(12, 'gmail', 'bom123@gmail.com', '$2y$12$0dEF4.Lun5EP/QAbVY1oQeco/kx5nCIcrdjxGwi/daMAes9T5pY1e', NULL, '2025-02-13 00:06:04', '2025-02-13 00:06:04', NULL, NULL),
(13, 'Google', 'google@gmail.com', '$2y$12$dbqRFFMKJKVi84DNpQ2NQe4C2fIY0/2IdvFiRn0pkoelEELH5f9Ou', 0, '2025-02-13 21:59:07', '2025-02-13 21:59:07', NULL, NULL),
(14, 'yahoo', 'yahoo@docente.com', '$2y$12$gth.yCKiXwgq0GNAG7gTZu9jRKHjNTHZs5XoLi6jH9JYJekPBJxjK', NULL, '2025-02-13 22:41:37', '2025-02-13 22:41:37', NULL, NULL),
(15, 'DANIEL', 'danielm@func.com', '$2y$12$.6dTFyDwGC43WfDooXPp2u36.qkN0iG4/Jt.0YmSEBaOMBtkO5TGq', 1, '2025-02-13 23:13:04', '2025-02-13 23:13:04', NULL, NULL),
(16, 'Teste4', 'teste4@colaborador.com.br', '$2y$12$TgVeod7ALdC3ssUSM3BKvOLo.zNQGz1cH9RnMFy6AAp860mforeyO', 1, '2025-02-15 17:52:21', '2025-02-15 17:52:21', NULL, NULL),
(17, 'TESTE5', 'teste5@secretaria.com', '$2y$12$X7gVcqH.spjVvI7jrDLZE.nNB2a6hHHTXprPmLDiyNb9z9tBGybna', 0, '2025-02-15 18:35:07', '2025-02-15 18:35:07', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idCargo_colaborador` (`idCargo`);

--
-- Índices de tabela `treinamentos`
--
ALTER TABLE `treinamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idCargo` (`idCargo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `treinamentos`
--
ALTER TABLE `treinamentos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `fk_idCargo_colaborador` FOREIGN KEY (`idCargo`) REFERENCES `cargos` (`id`);

--
-- Restrições para tabelas `treinamentos`
--
ALTER TABLE `treinamentos`
  ADD CONSTRAINT `fk_idCargo` FOREIGN KEY (`idCargo`) REFERENCES `cargos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

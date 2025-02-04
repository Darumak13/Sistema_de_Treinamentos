-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/02/2025 às 21:30
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
(1, 'Pedreiro', '2024-12-18 23:54:28', '2024-12-18 23:54:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(10) NOT NULL,
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

INSERT INTO `colaborador` (`id`, `permissao`, `email`, `senha`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 2, 'danielvictor@hotmail.com', '$2y$12$MFoBxSGlfwg1ULDpGkwOUuU5.uaIOkySxxIwEooqCIQVq2z3Fuuq2', '2025-02-03 23:25:45', '2025-02-03 23:25:45', NULL, NULL),
(2, 2, 'danielvictor@hotmail.com', '$2y$12$nHoWIoJqr08cz5KaWtua2.k0reRD9xFsi3fS88pAhLyJ6vHttWqM.', '2025-02-03 23:25:50', '2025-02-03 23:25:50', NULL, NULL),
(3, 2, 'danielvictor@hotmail.com', '$2y$12$pqNjfx//e.JckHkGcwhNB./r1JOllZpk7uDPHoJFYi0jqg5YrJkBy', '2025-02-03 23:28:49', '2025-02-03 23:28:49', NULL, NULL),
(4, 2, 'danielvictor@hotmail.com', '$2y$12$cvgD1A7PVYs4O6CB.ABuG.RtLMdK561klqpe6xyRXwqEHFfmfszH2', '2025-02-03 23:31:17', '2025-02-03 23:31:17', NULL, NULL),
(5, 1, 'teste@123gmail.com', '$2y$12$hpGIAE8Ec961xl7r6vn2xu0MV8e2GDbk0/Ft52GRgjN4ci0vz5Csu', '2025-02-03 23:39:35', '2025-02-03 23:39:35', NULL, NULL),
(6, 1, 'teste@123gmail.com', '$2y$12$fXyUj.DInqw2AYQAXiw79efX.EqHX4WV7a0XzxfMHC5nRFrYYqUfO', '2025-02-03 23:40:05', '2025-02-03 23:40:05', NULL, NULL),
(7, 1, 'teste@123gmail.com', '$2y$12$35/gnjRn6LAZt/cIAOXdtOpxi0NoW7DbyMtctfhA1qFTIoTC3qgSu', '2025-02-03 23:43:03', '2025-02-03 23:43:03', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` int(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `permissao`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Daniel Victor', 'gusgus_2@meutoba.com', '$2y$12$tACoG2DpbgFx0hDTy7PrUu6J6HSZIyJwLKnnpGKFwdW68Gb4jQM3u', NULL, '2024-12-18 23:53:44', '2024-12-18 23:54:03', NULL, NULL);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `treinamentos`
--
ALTER TABLE `treinamentos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `treinamentos`
--
ALTER TABLE `treinamentos`
  ADD CONSTRAINT `fk_idCargo` FOREIGN KEY (`idCargo`) REFERENCES `cargos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

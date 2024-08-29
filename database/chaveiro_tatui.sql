-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Jun-2024 às 12:18
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

--
-- Banco de dados: `chaveiro_tatui`
--
DROP DATABASE IF EXISTS `chaveiro_tatui`;


CREATE DATABASE `chaveiro_tatui` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `chaveiro_tatui`;


-- Estrutura da tabela `clientes`
CREATE TABLE `clientes` (
  `id_cliente` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nome_cliente` varchar(100),
  `telefone_cliente` varchar(11),
  `email_cliente` varchar(50),
  `cpf_cliente` varchar(11)
);

-- Estrutura da tabela `estoque`
CREATE TABLE `estoque` (
  `id_produto` int(11) AUTO_INCREMENT PRIMARY KEY,
  `descricao_produto` varchar(200),
  `qtd_disp_produto` int(4),
  `custo_produto` decimal(5, 2)
);

-- Estrutura da tabela `atendimentos`
CREATE TABLE `atendimentos` (
  `id_atendimento` int(11) AUTO_INCREMENT PRIMARY KEY,
  `descricao_atendimento` varchar(200),
  `fk_id_cli_atendimento` int(11),
  `valor_atendimento` decimal(5, 2),
  FOREIGN KEY (fk_id_cli_atendimento) REFERENCES `clientes`(id_cliente)

);

-- Estrutura da tabela `usuarios`
CREATE TABLE `usuarios` (
  `id_user` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nome_user` varchar(100),
  `telefone_user` varchar(11),
  `cpf_user` varchar(11),
  `senha_user` varchar(11),
  `email_user` varchar(50)
);

--
-- Banco de dados: `chaveiro_tatui`
--
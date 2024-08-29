CREATE DATABASE TesteCadastro_TCC;
USE TesteCadastro_TCC;

CREATE TABLE usuario (
	ID				INT UNIQUE NOT NULL AUTO_INCREMENT,
    NOME			VARCHAR(30) NOT NULL,
    SENHA           VARCHAR(50) NOT NULL,
    CPF             CHAR(11) NOT NULL UNIQUE
);

CREATE TABLE atendimento (
	ID				    INT UNIQUE NOT NULL AUTO_INCREMENT,
    FUNCIONARIO			VARCHAR(30) NOT NULL,
    CLIENTE             VARCHAR(30) NOT NULL,
    PRECO               INT NOT NULL,
    ENDERECO            VARCHAR(50) NOT NULL
);
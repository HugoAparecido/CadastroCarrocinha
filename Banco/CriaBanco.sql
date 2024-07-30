-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS CONTROLE_CASTRACAO;

-- Cria banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS CONTROLE_CASTRACAO;

-- Seleciona o banco de dados

USE CONTROLE_CASTRACAO;

-- Cria tabela cidade
CREATE TABLE cidade
(
    id      INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    estado  VARCHAR(002),
    PRIMARY KEY(id)
);

-- Cria tabela cliente
CREATE TABLE pessoa
(
    id          INT AUTO_INCREMENT,
    nome        VARCHAR(100),
    email       VARCHAR(100),
    endereco    VARCHAR(100),
    bairro      BOOL,
    id_cidade   INT,
    cep         INT,
    PRIMARY KEY(id),
    CONSTRAINT FK_PessoaCidade FOREIGN KEY (id_cidade) REFERENCES cidade(id)
);

-- Cria tabela animal
CREATE TABLE cliente
(
    id          INT AUTO_INCREMENT,
    nome        VARCHAR(100),
    especie     VARCHAR(100),
    raca        VARCHAR(100),
    data_nascimento     DATE,
    idade       INT,
    casatrado   BOOL,
    id_pessoa   INT,
    PRIMARY KEY(id),
    CONSTRAINT FK_AnimalPessoa FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
)
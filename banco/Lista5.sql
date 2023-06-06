DROP DATABASE IF EXISTS Lista5;
CREATE DATABASE Lista5;
USE Lista5;

CREATE TABLE agenda
(
	id_agenda int NOT NULL auto_increment,
	nome     varchar(50) NOT NULL,
    apelido  varchar(50) NOT NULL,
    endereco varchar(50) NULL,
    bairro   varchar(30) NOT NULL,
    cidade   varchar(100) NULL,
    estado   varchar(02) NOT NULL,
    telefone varchar(15) NOT NULL,
    celular  varchar(50) NULL,
    email    varchar(30) NOT NULL,
    dt_cadastro    date not NULL,
    PRIMARy KEY (id_agenda)
);
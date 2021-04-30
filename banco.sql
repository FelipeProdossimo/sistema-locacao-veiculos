CREATE DATABASE bd_reservas;

CREATE TABLE tb_reservado(
    nome VARCHAR(20) NOT NULL,
    tel VARCHAR(23) NOT NULL,
    habilitacao VARCHAR(5) NOT NULL,
    marca VARCHAR(4) NOT NULL,
    modelo VARCHAR(4) NOT NULL,
    cor VARCHAR(4) NOT NULL,
    placa VARCHAR(7) NOT NULL,
    ano VARCHAR(4) NOT NULL,
    km VARCHAR(7) NOT NULL,
    dataum DATETIME,
    datadois DATETIME,
    valor INT(7) NOT NULL
)
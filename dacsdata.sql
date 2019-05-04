CREATE DATABASE dacsdata;
USE dacsdata;
CREATE TABLE albuns(
id_album INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nome VARCHAR(50) NOT NULL,
descricao varchar(255)
);

CREATE TABLE musicas(
id_musica INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
id_album INT,
nome_musica VARCHAR(50) NOT NULL,
autoria VARCHAR(50) NOT NULL,
FOREIGN KEY (id_album) REFERENCES albuns (id_album)
);

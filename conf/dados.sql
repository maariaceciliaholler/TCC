CREATE DATABASE smartglovedados;
USE smartglovedados;

CREATE TABLE usuario (
	CodUsuario int AUTO_INCREMENT PRIMARY KEY,
    Senha varchar(45)
);
CREATE TABLE administrador (
	CodAdmin int AUTO_INCREMENT PRIMARY KEY,
    CodUsuario int,
    FOREIGN KEY (CodUsuario) REFERENCES usuario(CodUsuario)
);
insert into administrador(CodUsuario)
values (1);

CREATE TABLE letras(
	codLetras int AUTO_INCREMENT PRIMARY KEY,
    imagem varchar(1000),
    valor varchar(1000)
);

drop table palavras;
CREATE TABLE palavras(
	codPalavras int AUTO_INCREMENT PRIMARY KEY,
    imagem varchar(1000),
    valor varchar(1000)
);
INSERT INTO palavras(imagem, valor)
VALUES('PalavraAmor.png','amor'),
('PalavraBala.png','bala'),
('PalavraBola.png','bola'),
('PalavraBule.png','bule'),
('PalavraCasa.png','casa'),
('PalavraCerto.png','certo'),
('PalavraGalo.png','galo'),
('PalavraPipa.png','pipa'),
('PalavraVida.png','vida'),
('PalavraVoar.png','voar');
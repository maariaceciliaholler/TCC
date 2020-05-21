CREATE DATABASE smartglovedados;
USE smartglovedados;

CREATE TABLE usuario (
	CodUsuario int AUTO_INCREMENT PRIMARY KEY,
    Senha varchar(45),
    PalavraChave varchar(45)
);
CREATE TABLE administrador (
	CodAdmin int AUTO_INCREMENT PRIMARY KEY,
    CodUsuario int,
    FOREIGN KEY (CodUsuario) REFERENCES usuario(CodUsuario)
);
insert into administrador(CodUsuario)
values (1);

#drop table livro;
CREATE TABLE livro (
	codLivro int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(1000),
    editora varchar(500),
    autor varchar(500),
    lancamento date,
    sinopse varchar(1500),
    CodAdmin int,
    img varchar(1000),
    FOREIGN KEY (CodAdmin) REFERENCES administrador(CodAdmin)
);

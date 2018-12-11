create database i9conceitos;

create table usuarios(
	cdusuario int(4) AUTO_INCREMENT PRIMARY KEY,
	nome varchar(30) not null,
	sobrenome varchar(30) not null,
	email varchar(50) not null UNIQUE, 
	senha varchar(50) not null,
	facebook varchar(50),
	whatsapp varchar(50),
	instagram varchar(50),
        imagem  varchar(40),
        estado varchar(2),
        cidade varchar(50),
        bairro varchar(50)
);

create table pedidos(
        cdpedido int(4) AUTO_INCREMENT PRIMARY KEY,
        cdusuario int(4) not null,
        nome varchar(60) not null,
        email varchar(50) not null,
        facebook varchar(50) not null,
        whatsapp varchar(50) not null,
        instagram varchar(50) not null,
        estado varchar(2) not null,
        cidade varchar(50) not null,
        bairro varchar(50) not null,
        produto varchar(50) not null,
        data date not null,
        descricao varchar(500) not null,
        situacao varchar(30)

);


create table conversas(
        cdconversa int(4) AUTO_INCREMENT PRIMARY KEY,
        cdusuario int(4) not null,
        nome varchar(60) not null,
        email varchar(50) not null,
        mensagem_usuario varchar(5000),
        mensagem_adm varchar(5000)
);

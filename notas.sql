create database notas;
use notas;

create table conteudo (
id_conteudo int not null primary key auto_increment,
nome_conteudo varchar(255),
conteudo_nota varchar(255),
fk_categorias int not null,
foreign key (fk_categorias) references categorias (id_categorias),
fk_usuario int not null,
foreign key (fk_usuario) references usuario (id_usuario)
);

create table usuario (
id_usuario int not null primary key auto_increment,
nome_usuario varchar(255)
);

create table categorias (
id_categorias int not null primary key auto_increment,
nome_categorias varchar(255)
);


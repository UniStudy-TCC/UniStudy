create database Unistudy default character set utf8 collate utf8_general_ci;
use Unistudy;

create table usuario(usuarioID int primary key auto_increment,
email varchar (50),
nomeUsuario varchar(20),
senhaUsuario varchar(16)
);

create table materias(
materiasID int primary key auto_increment,
materiasNome varchar(45),
UsuarioID int,
foreign key(UsuarioID)references usuario (UsuarioID)
);

create table progressao(
progressaoID int primary key auto_increment,
progressao int,
materiaID int,
foreign key(materiaID)references materias (materiasID)
);

create table cronograma(cronogramaID int primary key auto_increment,
materiaNome varchar(20),
materiaID int,
diaSemana varchar(3),
horario varchar(5),
foreign key(materiaID)references materias (materiasID)
);

drop database Unistudy; 
select*from cronograma;
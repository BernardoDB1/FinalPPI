create database banco;

use banco;

create table user ( id int primary key auto_increment, email varchar(30) not null, senha varchar(200) not null, nome varchar(20) not null);
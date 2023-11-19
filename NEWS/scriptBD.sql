create database news;
use news;
create table usuario(
id int unsigned auto_increment,
nome varchar(70) not null,
email varchar(70) not null,
senha varchar(70) not null,
primary key(id)
);

use news;
create table cadas(
id int unsigned auto_increment,
nome varchar(70) not null,
email varchar(70) not null,
primary key(id)
);
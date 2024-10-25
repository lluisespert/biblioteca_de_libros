drop database if exists biblioteca;

create database if not exists biblioteca;

use biblioteca;

create table libros (

    id int NOT NULL AUTO_INCREMENT,

    nombrelibro varchar(50),

    autor varchar(50),

    tematica varchar(50),

    resumen varchar(500),

    constraint lipk primary key (id)

);
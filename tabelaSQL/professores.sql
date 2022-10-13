create database ProfessoresDB;

use ProfessoresDB;

create table professor (
    NOME varchar (100),
    EMAIL varchar (100),
    MATERIA varchar(100)
);

insert into professor (NOME, EMAIL, MATERIA)
values
    ('Alonso Xastre','xastre@puccampinas.edu.br','Pi: Desenvolvimento de Sistemas Web'),
    ('Ricardo Pannain','pannain@puccampinas.edu.br','Organizacao de Sistemas de Computacao'),
    ('Valdemiro dos Santos','valdomiro@puccampinas.edu.br','Calculo 1'),
    ('Cristiane Souza','cristiane@puccampinas.edu.br','Calculo 2'),
    ('Vinicius Martins','vinicius@puccampinas.edu.br','Robotica Computacional'),
    ('Danilo Silva','danilo@puccampinas.edu.br','Teologia'),
    ('Valdemiro dos Santos','valdomiro@puccampinas.edu.br','Algebra Linear'),
    ('Eric Santos','eric@puccampinas.edu.br','Eletronica Embarcada'),
    ('Alonso Xastre','xastre@puccampinas.edu.br','Vida Universitaria'),
    ('Angela Rodrigues','angela@puccampinas.edu.br','Programacao de Computadores');

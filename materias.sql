create database MateriasDB;
create table materias (
    NOME varchar(100),
    ID_MATERIA int,
    SALA varchar(10)
);
insert into materias (NOME, ID_MATERIA, SALA)
values
    ('Pi: Desenvolvimento de Sistemas Web','12902','H15_S04'),
    ('Organizacao de Sistemas de Computacao','12903','H15_110'),
    ('Calculo 1','11445','H15_111'),
    ('Calculo 2','11446','H15_120'),
    ('Robotica Computacional','23415','CTA_09'),
    ('Teologia','78965','H15_20'),
    ('Algebra Linear','56787','CT_03'),
    ('Eletronica Embarcada','45321','CT_04'),
    ('Vida Universitaria','34162','H15_08'),
    ('Programacao de Computadores','78905','H15_16');

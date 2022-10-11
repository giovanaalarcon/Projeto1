create database AlunosDB;

use alunosDB;

create table alunos (
    NOME varchar(100) NOT NULL,
    RA int(8),
    EMAIL varchar(100) NOT NULL,
    FILME varchar(100) 
);

insert into alunos (NOME, RA, EMAIL, FILME)
values
    ('Beatriz Newman','22000001','beatriz.newman@puccampinas.edu.br', 'A Escolha'),
    ('Daniela Hayashi','22000002','daniela.hayashi@puccampinas.edu.br', 'Spirit'),
    ('Flavia Medeiros','22000003','flavia.medeiros@puccampinas.edu.br', 'High School Musical'),
    ('Giovana Alarcon','22000004','giovana.alarcon@puccampinas.edu.br', 'UP'),
    ('Luana Baptista','22000005','luana.baptista@puccampinas.edu.br', 'Toy Story'),
    ('Gabriel Yamamoto','2200006','gabriel.yama@puccampinas.edu.br', 'Violeta'),
    ('Jose Martins','22000007','jose.martins@puccampinas.edu.br', 'After'),
    ('Rafael Luis','22000008','rafael.luis@puccampinas.edu.br', 'Garotas S.A'),
    ('Julia Silva','22000009','julia.silva@puccampinas.edu.br', 'Amigos para sempre'),
    ('Luis Gustavo','22000010','luis.gustavo@puccampinas.edu.br', 'Justiceira'),
    ('Joao Vitor','22000011','joao.vitor@puccampinas.edu.br', 'Sing'),
    ('Joao Pedro','22000012','joao.pedro@puccampinas.edu.br', 'As branquelas'),
    ('Luiza Souza','22000013','luiza.souza@puccampinas.edu.br', 'Emma'),
    ('Ananda Maia','22000014','ananda.maia@puccampinas.edu.br', 'Orgulho e Preconceito'),
    ('Julio Cesar','22000015','julio.cesar@puccampinas.edu.br', 'Plano B');
    


create table cursos(
    id int primary key auto_increment,
    versao_ferramenta varchar(30),
    nome varchar(100),
    carga_horaria int,
    status smallint
);

insert into cursos (nome, versao_ferramenta, carga_horaria, status) values
('Curso de PHP Fundamentos', '7.4', 40, 1),
('Curso de Java Fundamentos', '11.4', 30, 1),
('Curso de C# Fundamentos', '5', 60, 0),
('Curso de JS Fundamentos', '2015', 30, 1);

create table atendimento(
	id int not null auto_increment primary key,
    nome varchar(50) not null,
    telefone varchar(15) not null,
    atividade varchar(50) not null,
    registro timestamp,
    atendimento datetime,
    aStatus varchar(10)
);


select * from atendimento;
select id from atendimento order by id asc;
truncate atendimento;
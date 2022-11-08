mysql -u root


create database projeto3;

use projeto3;

create table produto(
    idproduto int primary key auto_increment,
    nome varchar(30) not null,
    descricao varchar(50) not null,
    quantidade INT,
    valor varchar (50) not null,
    fornecedor varchar (30) not null
);

insert into produto value
(null, 'anel', 'anel de ouro','58','200,00', 'aliancas S.A');

select * from produto;
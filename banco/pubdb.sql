Create database pubdb CHARSET = UTF8 COLLATE = utf8_general_ci;
use pubdb;

####
##CRIAÇÃO DAS TABELAS  
####
create table funcionario(
	cod_funcionario int auto_increment Primary key not null,
    nome_funcionario Varchar(50)not null,
	data_nascimento date not null,
    sexo enum('M','F') not null,
	endereco varchar(30)not null,
    telefone varchar(20) not null,
    email varchar(50)not null,
	cpf varchar(18)not null unique,
    senha varchar(30)not null,
	rg varchar(18)not null unique,
	setor enum('ADMINISTRAÇÃO','COZINHA','ATENDIMENTO') not null,
    superior int not null,
	data_registro timestamp default current_timestamp not null,
    salario decimal(7,2)not null,
	expediente varchar(30)not null
)engine=innodb;

#AUTO RELAÇÃO EM FUNCIOÁRIO --> CHEFE
alter table funcionario add constraint auto_rel
foreign key (superior) references funcionario(cod_funcionario);
####

CREATE TABLE Mesa(
	cod_mesa int auto_increment PRIMARY KEY not null,
	capacidade int not null,
    status_mesa enum('DISPONÍVEL','EM USO'),
	obs varchar(50)
)engine=innodb;

CREATE TABLE Produto(
	cod_produto int auto_increment PRIMARY KEY not null,
    nome_produto varchar(35) not null,
    preco decimal(7,2) not null,
	teor_alcoolico varchar(20) default null,
	categoria enum('ENTRADA','LANCHE','BEBIDA','SOBREMESA','OUTROS')not null,
	foto_produto blob,
	validade date default null,
	descricao varchar(35)
)engine=innodb;

CREATE TABLE Pedido(
	id int primary key auto_increment,
	p_cod_produto int not null,
    quantidade int(2),
    valor decimal(7,2),
    total decimal(7,2),
	p_cod_mesa int not null,
    obs varchar(50),
    p_funcionario int not null,
    data_pedido timestamp default current_timestamp,
    status_pedido enum('EM PREPARO','FINALIZADO','CANCELADO') default 'EM PREPARO'
)engine=innodb;

###
##RELACIONAMENTO DAS TRES TABELAS (funcionario/mesa/produto) COM A TABELA pedido
####
alter table pedido add constraint fk_produto foreign KEY(P_cod_produto) REFERENCES produto(cod_produto);
alter table pedido add constraint fk_mesa FOREIGN KEY(P_cod_mesa) REFERENCES mesa(cod_mesa);
alter table pedido add constraint fk_funcionario foreign key (P_funcionario) references funcionario(cod_funcionario);

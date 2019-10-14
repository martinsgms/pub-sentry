##inserts nas tabelas

####
##INSERT FUNCIONÁRIOS
####
insert into funcionario(nome_funcionario, data_nascimento, sexo,endereco, telefone, email, cpf, senha, rg, setor, superior, salario, expediente)
values
('João da Silva', '1972-08-09','M','Rua Abreu nº122','(11)9 1111-1111','jo@gmail.com','111.111.111-11','master123','11.111.111-11','ADMINISTRAÇÃO',1,'8000.00','Qua-Dom'),
('Maria Melo', '1995-02-05','F','Rua Líbano nº87','(11)9 2222-2222','melo@hotmail.com','222.222.222-22','ate123','22-222-222-22','ATENDIMENTO',1,'1100.00','Qua-Dom'),
('Rubens Soares', '1991-03-04','M','Rua São Francisco nº103','(11)9 3333-3333','rub@live.com','333.333.333-33','ate321','333-333-333-333','ATENDIMENTO',1,'1110.00','Qua-Dom'),
('Mário Garcia', '1990-07-20','M','Rua Ponte Preta nº89','(11)9 4444-4444','mag@hotmail.com','444.444.444-44','coz123','44-444-444-44','COZINHA',1,'1400.00','Qua-Dom'),
('Juliana Borges', '1992-11-18','F','Rua Anchieta nº87','(11)9 5555-5555','ju@yahoo.com','555.555.555-55','coz321','55-555-555-55','COZINHA',1,'1450.00','Qua-Dom'),
('Enzo Moura', '1995-12-02','M','Rua Fonte Nova nº44','(11)9 6666-6666','enzo@gmail.com','666.666.666-66','coz111','66-666-666-66','COZINHA',1,'1455.00','Qua-Dom');

#### 
##INSERT MESAS
####

insert into mesa(capacidade, status_mesa)
values
(2,'DISPONÍVEL'), (2,'DISPONÍVEL'), (4,'DISPONÍVEL'), (4,'DISPONÍVEL'),
(6,'DISPONÍVEL'), (6,'DISPONÍVEL'), (10,'DISPONÍVEL'), (10,'DISPONÍVEL');
select * from mesa;

insert into mesa(capacidade, status_mesa)
values
(5,'DISPONÍVEL'), (4,'DISPONÍVEL');
####
##INSERT PRODUTO
####

insert into produto(nome_produto, preco, teor_alcoolico, categoria, foto_produto, validade, descricao)
values
('Pivo Czech','25.00','20','BEBIDA',("img/comidas/pivo.jpg"),'2018-12-01', 'bebida xyzq abcd qwerty'),
('Red Zeppelin Ale','30.00','19','BEBIDA',("img/comidas/red_zepplin.jpg"),'2018-10-28', 'bebida xyzq abcd'),
('Francroker','28.00',default,'LANCHE',("img/comidas/francrocker.jpg"),default, 'lanche frango'),
('Monster Picanha','32.00',default,'LANCHE',("img/comidas/monsterp.jpg"),default, 'lanche picanha'),
('Fritas','15.00',default,'ENTRADA',("img/comidas/batata.jpg"),default, 'entrada simples'),
('Petit Gateau','17.00',default,'SOBREMESA',("img/comidas/petit.jpg"),default, 'sobre asjhdaj'),
('Sorvete de Morango','9.00',default,'SOBREMESA',("img/comidas/sorvete_morango.jpg"),default, 'sobre haha');

insert into pedido (p_cod_produto, quantidade, p_cod_mesa, p_funcionario, obs, valor)
values (1,4,6,2,'teste','20.00');

insert into pedido (p_cod_produto, quantidade, p_cod_mesa, p_funcionario, obs, valor)
values (2,3,6,2,'teste2','30.00');

insert into pedido (p_cod_produto, quantidade, p_cod_mesa, p_funcionario, obs)
values (2,2,6,2 ,'com mais queijo','10.00');

/*select f.nome_funcionario 'Nome', f.superior 'Chefe' from funcionario f
join funcionario ff
on ff.superior = f.cod_funcionario;*/

/*select * from produto;
select * from pedido;*/

/*call somar_total(@total,6);
update pedido set total = @total where p_cod_mesa = 6;
select total from pedido where P_cod_mesa = 6;*/

/*select nome_produto, quantidade,status_pedido,obs,valor from pedido pe 
join produto pr
on pe.P_cod_produto = pr.cod_produto where P_cod_mesa = 6;*/

#truncate pedido;

/*select * from pedido;
call procurar_preco(2,@p);

update pedido set quantidade = 1 where id = 1;
call procurar_quantidade(1,@q);
update pedido set valor = @p * @q where id = 1;*/

#select sum(valor) from pedido where P_cod_mesa = 6;

/*select id, p_cod_mesa, data_pedido,nome_funcionario, nome_produto, quantidade,status_pedido,obs,total, valor from pedido pe 
join produto pr
on pe.P_cod_produto = pr.cod_produto
join funcionario f 
on pe.p_funcionario = f.cod_funcionario;

select * from pedido where p_cod_mesa = 10;*/

-- update pedido set quantidade = 1 where id = 14;


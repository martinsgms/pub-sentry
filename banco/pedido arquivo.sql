
create table pedido_arquivo(
	id int,
	p_cod_produto int,
    quantidade int(2),
    valor decimal(7,2),
    total decimal(7,2),
	p_cod_mesa int,
    obs varchar(50),
    p_funcionario varchar(50) not null,
    data_pedido timestamp,
    status_pedido varchar(30)
);

select * from pedido_arquivo;

DELIMITER $
create trigger trg_arquivar_pedido before delete on pedido
for each row

begin
	insert into pedido_arquivo 
	SET 
    id = OLD.id,
    p_cod_produto = OLD.p_cod_produto,
    quantidade = OLD.quantidade,
    valor = OLD.valor,
    total = OLD.total,
    p_cod_mesa = OLD.p_cod_mesa,
    obs = OLD.obs,
    p_funcionario = OLD.p_funcionario,
    data_pedido = OLD.data_pedido,
    status_pedido = OLD.status_pedido;
	
END $

/*select id, p_cod_mesa, data_pedido,nome_funcionario, nome_produto, quantidade,status_pedido,obs,total, valor from pedido_arquivo pe 
join produto pr
on pe.P_cod_produto = pr.cod_produto
join funcionario f 
on pe.p_funcionario = f.cod_funcionario;*/

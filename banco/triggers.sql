
use pubdb;
##select * from pedido;

DELIMITER $
CREATE  TRIGGER trg_multiplicador BEFORE INSERT
ON pedido
FOR EACH ROW
BEGIN SET
		NEW.valor  = NEW.quantidade * NEW.valor;
END$


DELIMITER $
create procedure somar_total(out total decimal(7,2), in  mesa int)
BEGIN
	select sum(valor) into total from pedido where P_cod_mesa = mesa;
END$


DELIMITER $
CREATE PROCEDURE procurar_preco(in cod int, out p decimal(7,2))
BEGIN
	select preco into p from produto where cod_produto = cod;
END $


DELIMITER $
CREATE PROCEDURE procurar_quantidade(in cod int, out q decimal(7,2))
BEGIN
	select quantidade into q from pedido where id = cod;
END $

 
<?php
require_once 'CrudPedido.php';

	class Mesa extends CrudPedido{

		public function findConsumo($m){
			$sql = "select id, p_cod_mesa, p_cod_produto, data_pedido, nome_produto, quantidade,status_pedido,obs,total, valor from pedido pe 
				join produto pr
on pe.P_cod_produto = pr.cod_produto where P_cod_mesa = :m;";

			$stm = DB::prepare($sql);
			$stm->bindParam(':m', $m, PDO::PARAM_INT);

			$stm->execute();

			return $stm->fetchAll();
		}

		public function totalConsumo(){
			$sql = "select @total; ";

			$stm = DB::prepare($sql);
			$stm->execute();

			return $stm->fetchColumn();

		
			/*
			$stm->bind_result($total); 
			return $total;
			*/

		}
	}
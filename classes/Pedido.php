<?php
require_once 'CrudPedido.php';
ini_set( 'display_errors', 0 );

	class Pedido extends CrudPedido{

		protected $tabela = 'Pedido';

		public function findBebidas(){
			$sql = "SELECT * FROM Produto WHERE categoria = 'BEBIDA'";
			$stm = DB::prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
		}

		public function findLanches(){
			$sql = "SELECT * FROM Produto WHERE categoria = 'LANCHE'";
			$stm = DB::prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
		}

		public function findEntradas(){
			$sql = "SELECT * FROM Produto WHERE categoria = 'ENTRADA'";
			$stm = DB::prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
		}

		public function findSobremesas(){
			$sql = "SELECT * FROM Produto WHERE categoria = 'SOBREMESA'";
			$stm = DB::prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
		}

		//classe aqui

		public function insert(){
			$sql = "INSERT INTO $this->tabela (P_cod_produto, quantidade, valor, P_cod_mesa, P_funcionario, obs) VALUES (:codigo,:quantidade,:valor, :mesa, :funcionario, :obs) ";

			$stm = DB::prepare($sql);
			$stm->bindParam(':codigo', $this->getCodigo());
			$stm->bindParam(':quantidade', $this->getQuantidade());
			$stm->bindParam(':valor', $this->getValor());
			$stm->bindParam(':mesa', $this->getMesa());
			$stm->bindParam(':funcionario', $this->getFuncionario());
			$stm->bindParam(':obs', $this->getObs());

			return $stm->execute();
		}

		public function update($id){
			$sql = "UPDATE $this->tabela SET p_cod_mesa = :m, quantidade = :q, obs = :o WHERE id = :id";
			
			$stm = DB::prepare($sql);
			$stm->bindParam(':m', $this->getMesa());
			$stm->bindParam(':q', $this->getQuantidade());
			$stm->bindParam(':o', $this->getObs());
			$stm->bindParam(':id', $id, PDO::PARAM_INT);
			
			return $stm->execute();

		}

		public function delete($id){
			$sql = "DELETE FROM $this->tabela WHERE id = :id";

			$stm = DB::prepare($sql);
			$stm->bindParam(':id', $id, PDO::PARAM_INT);

			return $stm->execute();
		}

		public function finalizar($m){
			$sql = "DELETE FROM $this->tabela WHERE p_cod_mesa = :m";

			$stm = DB::prepare($sql);
			$stm->bindParam(':m', $m, PDO::PARAM_INT);

			return $stm->execute();
		}



	}//22:27
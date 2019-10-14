<?php

require_once 'DB.php';

	abstract class CrudPedido extends DB{

		protected $tabela;
		private $codigo;
		private $quantidade;
		private $valor;
		private $mesa;
		private $funcionario;
		private $obs;

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}

		public function getQuantidade(){
			return $this->quantidade;
		}

		public function setValor($valor){
			$this->valor = $valor;
		}

		public function getValor(){
			return $this->valor;
		}

		public function setMesa($mesa){
			$this->mesa = $mesa;
		}

		public function getMesa(){
			return $this->mesa;
		}

		public function setFuncionario($funcionario){
			$this->funcionario = $funcionario;
		}

		public function getFuncionario(){
			return $this->funcionario;
		}

		public function setObs($obs){
			$this->obs = $obs;
		}

		public function getObs(){
			return $this->obs;
		}

	} 



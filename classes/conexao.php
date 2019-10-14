<?php
ini_set( 'display_errors', 0 );
	
	function conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "pubdb";

		$con = mysqli_connect($servidor, $usuario, $senha, $banco);
		return $con;
	}
	
    $conexao = conectar();

    if(!conectar()){
			echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO!</strong> Sem conexão com o Banco de Dados!!</div>";
		}




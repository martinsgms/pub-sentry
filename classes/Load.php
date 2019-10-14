<?php 

session_start();

  header("Content-type: text/html; charset=utf-8");
  require_once 'classes/conexao.php'; 

  function __autoload($class){
    require_once 'classes/'. $class .'.php'; 
  }
        $cpf = $_SESSION['cpf'];
        $senha = $_SESSION['senha'];
        
        if ($cpf == '' || $senha == '' ){
            header("Location: index.php");
        }    
  //Query CPF
  $cpf = $_SESSION['cpf'];
  $consultar_nome ="SELECT nome_funcionario,cod_funcionario, setor from funcionario where cpf ='$cpf' ";
  
  $nome = mysqli_query($conexao, $consultar_nome);
  $res = mysqli_fetch_assoc($nome); 
  
  
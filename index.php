<?php 
@session_start();
require_once 'classes/conexao.php';

if($_SESSION['cpf'] && $_SESSION['senha']){
	header('Location: home.php');
}
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!important><!-- Links CSS & JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!important>

<style>
 
  input{
    border: none;
    border-bottom: 2px solid #E0E0E0;
    width: 260px;
    padding: 8px;
    font-size: 12pt;
    color: #E0E0E0
  }

#txt{
  color: #E0E0E0;
  background-color: #000

}
</style>

</head>

<body>

<script>
  function fMasc(objeto,mascara) {
        obj=objeto
        masc=mascara
        setTimeout("fMascEx()",1)
      }
      function fMascEx() {
        obj.value=masc(obj.value)
      }


    function mCPF(cpf){
        cpf=cpf.replace(/\D/g,"")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return cpf
     }

    $(document).ready(function(){
    $("input.cpf").mask("999.999.999-99");
    });
</script>


<div>

<center>
  <!-- <h1 style="font-size: 100pt;font-family: Parchment">pubs's sentry</h1> -->
  <img src="img/logoPubsSentry.png" width="280px" style="margin-top: 20px">
  <h3>Login</h3>

</center>

<div class="container">
  
  <form class="form-signin" method="post" action="">
      
    <?php
      if(isset($_POST['entrar'])){

        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $sql = "select cpf, senha from funcionario where cpf = '$cpf' and senha ='$senha'";
        $resultado = mysqli_query($conexao, $sql);
        
        if(mysqli_num_rows($resultado)> 0){
          
          while ($resposta = mysqli_fetch_assoc($resultado)) {
      
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            echo "<script>window.location ='home.php';</script>";

          }//while
        }//if
        else{
          echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO!</strong> Dados incorretos!</div>";
        }//else

      }//if isset

      $c = (!empty($_POST['cpf'])) ? $_POST['cpf'] : '';

    ?>  

      <div class="form-group">
        <label for="nome">Cpf</label>
        <input type="text" class="form-control" value="<?php echo htmlentities($c); ?>" placeholder="000-000-000-00" name="cpf" id="txt" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );">
      </div>

      <div class="form-group">
        <label for="nome">Senha</label>
        <input type="password"  class="form-control" placeholder="**************" name="senha" id="txt">
      </div>

      <br>
      <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
      
  </form>
<br>
</div>

</body>

</html>
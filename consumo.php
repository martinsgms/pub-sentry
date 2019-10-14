<?php include 'classes/Load.php';?>

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

  <title>PS - Selecionar Mesa</title>

</head>

<body>
<nav>
    
  <header class="navbar navbar-inverse" id="barra_menu" >

  <!-- MENU ANIMADO-->

  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
      </a>
       <a href="home.php"><img src="img/monograma.png"  ></a>
    </div>   
  
  </div>

</nav>

<div id="mySidenav" class="sidenav" style="">
      
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br><br>
  <img src="img/logoPubsSentry.png" width="200px" style="margin-left: 20px">
  <br><br>

  <a href="home.php">Home</a>
  <!--<a href="cardapio.php">Cardápio Digital</a>-->
  <a href="pedidos.php">Anotar pedidos</a>
  <a href="consumo.php">Consumo por mesa</a>
  <br>
  
  <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-out"></span> Logoff</a>

</div>

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" >
        <div class="modal-header"  >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong style="color: red;">AVISO!</strong></h4>
        </div>
        <div class="modal-body" >
          <p style="color: black">Deseja mesmo sair?</p>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="sair()">Sim</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>

        </div>
      </div>
    </div>
  </div>
<!-- FIM MENU ANIMADO-->
</header>


  <main style="margin-top: 90px" >

    <div class="container">

  <div class="row">
    <p style="font-size: 20pt"><?php echo "Logado como: <br>". $res['nome_funcionario']. " - ". $res['setor'];?></p>
    <div class="col-md-12 primeira">
    </div>
    <legend></legend>
  </div>

  <div class="row">
    <p style="font-size: 20pt">Selecione a mesa:</p>
    <br><br>
    <center>
    <input type="button" value="001" class="btn btn-success" id="botoes" onclick ="m1()">
    <input type="button" value="002" class="btn btn-success" id="botoes" onclick ="m2()">
    <input type="button" value="003" class="btn btn-success" id="botoes" onclick ="m3()">
    <input type="button" value="004" class="btn btn-success" id="botoes" onclick ="m4()"> 
    <input type="button" value="005" class="btn btn-success" id="botoes" onclick ="m5()">
    <input type="button" value="006" class="btn btn-success" id="botoes" onclick ="m6()">
    <input type="button" value="007" class="btn btn-success" id="botoes" onclick ="m7()">
    <input type="button" value="008" class="btn btn-success" id="botoes" onclick ="m8()"> 
    <input type="button" value="009" class="btn btn-success" id="botoes" onclick ="m9()">
    <input type="button" value="010" class="btn btn-success" id="botoes" onclick ="m10()"> 
  </center>
  <br><br>

    <center><img src="img/estre.png"  width="200px" ></center>
    <br><br>

  </div>  
</div>

</main>
  
<?php include 'classes/Footer.php' ?>
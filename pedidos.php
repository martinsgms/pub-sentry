<?php include 'classes/Load.php'; ?>

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

  <title>Pubs's Sentry - Home</title>
  
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

<div id="mySidenav" class="sidenav" style="background-color: #000;">
   
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

    <div class="main">
    <p style="text-align: center; font-size: 50pt;">Registro de pedidos<p>
    <hr>



<br>


      <div><!-- BEBIDAS -->

          <?php

          $pedido = new Pedido();
          //Registro de pedido

          if (isset($_POST['pedir'])) {
            
            $cod         = $_POST['cod_mod'];
            $quantidade  = $_POST['quantidade'];
            $valor       = $_POST['valor_mod'];
            $mesa        = $_POST['mesa'];
            $funcionario = $_POST['funcionario'];
            $obs         = $_POST['obs'];

            if (!empty($cod) && !empty($quantidade) && !empty($mesa) && !empty($funcionario)){
                
                $pedido->setCodigo($cod);
                $pedido->setQuantidade($quantidade);
                $pedido->setValor($valor);
                $pedido->setMesa($mesa);
                $pedido->setFuncionario($funcionario);
                $pedido->setObs($obs);

                if ($pedido->insert()) {
                  echo "<div class='alert alert-success alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok' aria-hidden='true'></span><strong>  SUCESSO!</strong> Pedido registrado </div>";
                }else{
                  echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO! </strong> Não foi possível registrar o pedido. </div>";
                }
            }else{
              echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO!</strong> Existem campos vazios</div>";
            }
          }
        ?>

<!important><!-- ABAS -->
<ul class="nav nav-tabs">
  <li class="active"><a id="item" data-toggle="tab" href="#entradas">ENTRADAS</a></li>
  <li ><a id="item" data-toggle="tab" href="#bebidas">BEBIDAS</a></li>
  <li ><a id="item" data-toggle="tab" href="#lanches">LANCHES</a></li>
  <li ><a id="item" data-toggle="tab" href="#sobremesas">SOBREMESAS</a></li>
</ul>

<div class="tab-content">
  
  <div id="entradas" class="tab-pane fade in active">
   <div> 
   <input type="hidden" style="background-color: black;" id="funcionario" name="funcionario" value="<?php echo $res['nome_funcionario']; ?>" >
      
        <div class="table-responsive" style="padding: 20px; border: none;">

          <h1>Entradas</h1>
      <br><br>
        <table width="500"  align="center" class="table">
           <tr>
             <td><strong>Foto</strong></td>
             <td><strong>Entrada</strong></td>
             <td><strong>Preço</strong></td> 
             <td></td> 
           </tr>

          <?php foreach ($pedido->findEntradas() as $key => $value) { ?>

          <tr>
            <input type="hidden" name="cod" value="<?php echo $value->cod_produto; ?>"> 

            <td><a href="#" data-toggle="modal" data-target="#myModal1" onclick="load_modal('<?php echo $value->cod_produto; ?>','<?php echo $value->preco; ?>','<?php echo $value->nome_produto; ?>')" style="background-color: black; border: none"> <?php echo "<img src='" . $value->foto_produto ."' width='200px'> "; ?></a></td>

            <td><?php echo $value->nome_produto; ?></td>

            <td><?php echo "R$" . $value->preco; ?></td>

          </tr>  
     
          <?php  } ?>

        </table>
        
      </div>
     </div><!-- FIM ENTRADAS -->
  </div>

  <div id="bebidas" class="tab-pane fade">
    
   <div> 
   <input type="hidden" style="background-color: black;" id="funcionario" name="funcionario" value="<?php echo $res['nome_funcionario']; ?>" >
      
        <div class="table-responsive" style="padding: 20px; border: none;">
          <h1>Bebidas</h1>
      <br><br>
        <table width="500"  align="center" class="table">
           <tr>
             <td><strong>Foto</strong></td>
             <td><strong>Rótulo</strong></td>
             <td><strong>Teor Alcoolico</strong></td>
             <td><strong>Preço</strong></td> 
             <td></td> 
           </tr>

          <?php foreach ($pedido->findBebidas() as $key => $value) { ?>

          <tr>
            <input type="hidden" name="cod" value="<?php echo $value->cod_produto; ?>"> 

            <td><a href="#" data-toggle="modal" data-target="#myModal1" onclick="load_modal('<?php echo $value->cod_produto; ?>','<?php echo $value->preco ?>','<?php echo $value->nome_produto; ?>')" style="background-color: black; border: none"> <?php echo "<img src='" . $value->foto_produto ."' width='200px'> "; ?></a></td>

            <td><?php echo $value->nome_produto; ?></td>

            <td><?php echo $value->teor_alcoolico . "%"; ?></td>

            <td><?php echo "R$" . $value->preco; ?></td>

          </tr>  
     
          <?php  } ?>

        </table>
        
      </div>
     </div><!-- FIM BEBIDAS -->

  </div>

  <div id="lanches" class="tab-pane fade">

    <div> 
   <input type="hidden" style="background-color: black;" id="funcionario" name="funcionario" value="<?php echo $res['nome_funcionario']; ?>" >
      
        <div class="table-responsive" style="padding: 20px; border: none;">
          <h1>Lanches</h1>
      <br><br>
        <table width="500"  align="center" class="table">
           <tr>
             <td><strong>Foto</strong></td>
             <td><strong>Lanche</strong></td>
             <td><strong>Preço</strong></td> 
             <td></td> 
           </tr>

          <?php foreach ($pedido->findLanches() as $key => $value) { ?>

          <tr>
            <input type="hidden" name="cod" value="<?php echo $value->cod_produto; ?>"> 

            <td><a href="#" data-toggle="modal" data-target="#myModal1" onclick="load_modal('<?php echo $value->cod_produto; ?>','<?php echo $value->preco ?>','<?php echo $value->nome_produto; ?>')" style="background-color: black; border: none"> <?php echo "<img src='" . $value->foto_produto ."' width='200px'> "; ?></a></td>

            <td><?php echo $value->nome_produto; ?></td>

            <td><?php echo "R$" . $value->preco; ?></td>

          </tr>  
     
          <?php  } ?>

        </table>
        
      </div>
     </div><!-- FIM BEBIDAS -->
  </div>

   <div id="sobremesas" class="tab-pane fade">

     <div id="entradas" class="tab-pane fade in active">
   <div> 
   <input type="hidden" style="background-color: black;" id="funcionario" name="funcionario" value="<?php echo $res['nome_funcionario']; ?>" >
      
        <div class="table-responsive" style="padding: 20px; border: none;">
          <h1>Sobremesas</h1>
      <br><br>
        <table width="500"  align="center" class="table">
           <tr>
             <td><strong>Foto</strong></td>
             <td><strong>Sobremesa</strong></td>
             <td><strong>Preço</strong></td> 
             <td></td> 
           </tr>

          <?php foreach ($pedido->findSobremesas() as $key => $value) { ?>

          <tr>
            <input type="hidden" name="cod" value="<?php echo $value->cod_produto; ?>"> 

            <td><a href="#" data-toggle="modal" data-target="#myModal1" onclick="load_modal('<?php echo $value->cod_produto; ?>','<?php echo $value->preco ?>','<?php echo $value->nome_produto; ?>')" style="background-color: black; border: none"> <?php echo "<img src='" . $value->foto_produto ."' width='200px'> "; ?></a></td>

            <td><?php echo $value->nome_produto; ?></td>

            <td><?php echo "R$" . $value->preco; ?></td>

          </tr>  
     
          <?php  } ?>

        </table>
        
      </div>
     </div><!-- FIM BEBIDAS -->

  </div>
</div>
<!important><!-- FIM ABAS -->





    <!important><!-- MODAL DE REGISTRO -->
    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" >
        <div class="modal-header"  >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong style="color: green;">NOVO REGISTRO</strong></h4>
        </div>
        <div class="modal-body" >
          
          <div style="color: black">

        <?php
          $m = (!empty($_POST['mesa'])) ? $_POST['mesa'] : '';
        ?>
      
          <form name="pedido" method="post" action="">

          <!--<p><label for="funcionario" style="color: black">Funcionário:</label><br>--><input type="hidden" id="funcionario" name="funcionario" value="<?php echo $res['cod_funcionario']; ?>" ></p>   

          <p><!--<label for="cod_mod">Codigo:</label><br>--><input type="hidden" id="cod_mod" name="cod_mod"></p>

          <p><label for="p_mod" style="color: black">Produto:</label><input type="text"   id="p_mod" name="p_mod" style="width: auto; border:none; margin-left: 5px; font-size: 15pt" readonly></p>

          <p><label for="valor">Valor(R$):</label><input type="number" id="valor_mod" name="valor_mod" style="width: 130px; border:none; margin-left: 5px; font-size: 15pt" readonly></p><br>

          <p><label for="mesa_mod" style="color: black">Insira a mesa:</label><br><input type="number" class="form-control" id="mesa" name="mesa" value="<?php echo htmlentities($m); ?>" min="1" max="10" required></p>

          <p><label for="quantidade" style="color: black">Quantidade:</label><br><input type="number" class="form-control" id="quantidade" name="quantidade" min="1" max="6" required></p>

          <label for="obs" style="color: black">Observação:</label><br><textarea id="obs" class="form-control" name="obs"></textarea>
        
        <div class="modal-footer">

          <input type="submit" value="Enviar" id="pedir" name="pedir" class="btn btn-success" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

        </form>

        </div>

        </div>
      </div>
    </div>
  </div>
  <!important><!-- FIM MODAL DE REGISTRO -->

<br>

<br><br>
  </main>
  
<footer class="container-fluid text-center" style="background-color: #212121;height: auto;">
   <p style="color: white;">Pubs's Sentry - 2018</p>  
   <br><br>

  <img src="img/logoD.png"><br><br>
  <p>Delirium Café São Paulo<br>
  <p>Visite as redes sociais do nosso parceiro:</p>
  <a href="https://www.facebook.com/deliriumcafesp/" target="_blank"> <img class="icons" src="img/face.png" width="88px"> </a>
  <a href="https://instagram.com/deliriumcsp/?hl=pt-br" target="_blank" ><img src="img/insta.png" width="100px"></a>

  <br><br>
  <p><i>Site desenvolvido como parte da plataforma "Pub's Sentry", idealizada pelo grupo de TCC do 3ºINFO do ano letivo de 2018 <br> Colégio Seta - Av. João Batista, 487 - Centro, Osasco - SP, 06097-105</i></p>
  <br>
  <a href="http://www.colegioseta.com.br/" target="_blank"><img src="img/logoSeta.png" height="50px"></a>
<br><br>
</footer>

</body>
</html>
<?php include '../classes/LoadMesa.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


 <!important><!-- Links CSS & JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!important>

    <title>PS - Consumo Mesa 8</title>
</head>
<body>

<nav>
    
  <header class="navbar navbar-inverse" id="barra_menu" >

  <!-- MENU ANIMADO-->

  <div class="container-fluid" >
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
      </a>
       <a href="../home.php"><img src="../img/monograma.png"  ></a>
    </div>   
  
  </div>

</nav>
 
<div id="mySidenav" class="sidenav" style="background-color: #000;">
      
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br><br>
  <img src="../img/logoPubsSentry.png" width="200px" style="margin-left: 20px">
  <br><br>

  <a href="../home.php">Home</a>
  <!--<a href="cardapio.php">Cardápio Digital</a>-->
  <a href="../pedidos.php">Anotar pedidos</a>
  <a href="../consumo.php">Consumo por mesa</a>
  <br>
  
  <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-out"></span> Logoff</a>

</div>

  <!-- MODAL SAIR -->
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

          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="sair_mesas()">Sim</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>

        </div>
      </div>
    </div>
  </div>
  <!-- MODAL SAIR -->
  </header>

  <main style="margin-top: 90px" >
    

    <div class="container">

  <div class="row">
    <div class="main">
    <p style="text-align: center; font-size: 50pt;">Mesa 8<p>
    <hr>

    </div>

  <!-- MOSTRA SEMANA, DIA MES E ANO -->
  <?php $data = new Data();
  $data->mostrarData(); 
  //fim

  $pedido = new Pedido();

  #Variável que determina a mesa: MUITO IMPORTANTE!!!!!
  $m = 8;

  if (isset($_POST['alterar'])) {

    $id         = $_POST['id_ui'];
    $quantidade = $_POST['quantidade_ui'];
    $obs        = $_POST['obs_ui'];
    $mesa       = $_POST['mesa_ui'];
    $id_produto = $_POST['id_pr'];

    if (!empty($id) && !empty($quantidade) && !empty($mesa) && !empty($id_produto)) {
      
      $pedido->setQuantidade($quantidade);
      $pedido->setObs($obs);
      $pedido->setMesa($mesa);

    
      if ($pedido->update($id)) {
       echo "<div class='alert alert-success alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok' aria-hidden='true'></span><strong>  SUCESSO!</strong> Pedido atualizado</div>";

        $call_src1 = "call procurar_preco($id_produto, @p)";
        mysqli_query($conexao, $call_src1);

        $call_src2 = "call procurar_quantidade($id, @q)";
        mysqli_query($conexao, $call_src2);

        $att_valor = "update pedido set valor = @p * @q where id = $id;";
        mysqli_query($conexao, $att_valor);

      }else{
        echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO! </strong> Não foi possível atualizar o pedido. </div>";
      }

    }else{
      echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO!</strong> Há campos vazios!</div>";
    }

  }

  if (isset($_POST['excluir'])) {
    
    $id = $_POST['id_uii'];

    if(!empty($id)){
      if ($pedido->delete($id)) {
        echo "<div class='alert alert-success alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok' aria-hidden='true'></span><strong>  SUCESSO!</strong> Pedido excluido</div>";
      }else{
       echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO! </strong> Não foi possível deletar o pedido. </div>";
      }
    }else{
      echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO!</strong> Não foi possível deletar, pois ID é nulo</div>";
    }

  }

  if (isset($_POST['finalizar'])){
    
    if ($pedido->finalizar($m)) {
      echo "<div class='alert alert-success alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok' aria-hidden='true'></span><strong>  SUCESSO!</strong> Consumo finalizado </div>";
    }else{
      echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <strong>  ERRO! </strong> Não foi possível finalizar o consumo. </div>";
    }

  }

  ?>
  <div class="table-responsive" style="padding: 20px; border: none;">
         
        <table width="500"  align="center" class="table">
           <tr>
             <td><strong>Data/Hora</strong></td>
             <td><strong>Produto</strong></td>
             <td><strong>Quantidade</strong></td>
             <td><strong>Status</strong></td>
             <td><strong>Observação</strong></td> 
             <td><strong>Valor</strong></td> 
             <td></td> 
             <td></td> 
           </tr>

          <?php 

          $mesa = new Mesa();
          

          foreach ($mesa->findConsumo($m) as $key => $value) { ?>

          <tr>
            <input name="id" type="hidden" style="color: #000" value="<?php echo $value->id; ?>">

            <td><?php echo $value->data_pedido; ?></td>

            <td><?php echo $value->nome_produto; ?></td>

            <td><?php echo $value->quantidade; ?></td>
            <input type="hidden" style="color: #000" name="quantidade" value="<?php echo $value->quantidade; ?>">   

            <td><?php echo $value->status_pedido; ?></td>

            <td><?php echo $value->obs; ?></td>
            <input name="obs" type="hidden" style="color: #000" value="<?php echo $value->obs; ?>">

            <td><?php echo "R$" . $value->valor; ?></td>

            <td><button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#myModal1" onclick="load_modal1('<?php echo $value->quantidade; ?>','<?php echo $value->obs; ?>','<?php echo $value->id; ?>','<?php echo $value->nome_produto; ?>','<?php echo $value->p_cod_produto; ?>')">Alterar</button></td>

            <td><button type="submit"  class="btn btn-danger" data-toggle="modal" data-target="#myModal2" onclick="load_modal2('<?php echo $value->id; ?>')">Excluir</button></td>


          </tr>  
     
          
          <br>
          
          <?php  } 

          #IMPORTANT: Atualização do TOTAL.
          #call: chama a procedure, indica o valor total antigo e a mesa
          $call = "call somar_total(@total, $m);";
          mysqli_query($conexao, $call);

          #up: atualiza o novo valor do total na tabela
          $up = "update pedido set total = @total where p_cod_mesa = $m;";
          mysqli_query($conexao, $up);

          #query: busca o valor do total
          $query = "select total from pedido where P_cod_mesa = $m;";
          #END
          ?>
          <tr><td></td><td></td><td></td><td></td>
            <td><strong>TOTAL:</strong></td>
            <td style="font-size: 16pt;"><?php 

            #result armazena o retorno da consulta
            $result = mysqli_query($conexao, $query);
            
            #row transforma result em vetor, para ser exibido no echo seguinte           
            $row = $result->fetch_assoc();
                echo "R$" . $row['total']."<br>";

             ?></td>  <td><button type="submit"  class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Finalizar Consumo</button></td><td></td>
          </tr>

        </table>

         <!important><!-- MODAL DE FINALIZAÇÃO -->
    <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" >
        <div class="modal-header"  >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong style="color: navy;">FINALIZAR CONSUMO?</strong></h4>
        </div>
        <div class="modal-body" >
          
          <div style="color: black">

      
          <form name="form_exlcuir" method="post" action="">
            <br><p>Quer mesmo finalizar o consumo?</p><br>
          <p><input type="hidden" id="id_uiii" value="<?php echo $m; ?>" name="id_uiii"></p> 

        
        <div class="modal-footer">

          <input type="submit" value="Sim" id="finalizar" name="finalizar" class="btn btn-success" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>

        </form>

        </div>

        </div>
      </div>
    </div>
  </div>
  <!important><!-- FIM MODAL DE FINALIZAÇÃO -->
        
      </div>
  
  <center><img src="../img/estre.png"  width="200px" ></center><br>

 <!important><!-- MODAL DE EXCLUSÃO -->
    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" >
        <div class="modal-header"  >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong style="color: red;">EXCLUIR PEDIDO?</strong></h4>
        </div>
        <div class="modal-body" >
          
          <div style="color: black">

      
          <form name="form_exlcuir" method="post" action="">
            <br><p>Quer mesmo excluir este registro?</p><br>
          <p><input type="hidden" id="id_uii" name="id_uii" value="<?php $value->id; ?>"></p> 

        
        <div class="modal-footer">

          <input type="submit" value="Sim" id="excluir" name="excluir" class="btn btn-success" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>

        </form>

        </div>

        </div>
      </div>
    </div>
  </div>
  <!important><!-- FIM MODAL DE EXCLUSÃO -->

</div>

 <!important><!-- MODAL DE ALTERAÇÃO -->
    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" >
        <div class="modal-header"  >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong style="color: gold;">ALTERAR PEDIDO</strong></h4>
        </div>
        <div class="modal-body" >
          
          <div style="color: black">

      
          <form name="form_alterar" method="post" action="">

          <p><!--<label for="id_ui" style="color: black">ID:</label><br>--><input type="hidden" id="id_ui" name="id_ui"></p> 

          <p><!--<label for="id_ui" style="color: black">ID-PRODUTO:</label><br>--><input type="hidden" id="id_pr" name="id_pr"></p> 

          <p><!--<label for="funcionario" style="color: black">Funcionário:</label><br>--><input type="hidden" id="funcionario" name="funcionario" value="<?php echo $res['nome_funcionario']; ?>" ></p> 

          <p><label for="nome_ui" style="color: black">Produto:</label><input type="text" id="nome_ui" name="nome_ui" style="width: auto; border:none; margin-left: 5px; font-size: 15pt" readonly></p>
            
          <p><label for="mesa_mod" style="color: black">Mesa:</label><br><input type="number" id="mesa_ui" name="mesa_ui" value="<?php echo $value->p_cod_mesa; ?>"  class="form-control" min="1" max="10"></p>

          <p><label for="quantidade" style="color: black">Quantidade:</label><br><input type="number" id="quantidade_ui" name="quantidade_ui" class="form-control" min="1" max="6" required ></p>

          <label for="obs" style="color: black">Observação:</label><br><textarea id="obs_ui" value="<?php echo $value->obs;?>" name="obs_ui"  class="form-control"></textarea>
        
        <div class="modal-footer">

          <input type="submit" value="Alterar" id="pedir" name="alterar" class="btn btn-success" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

        </form>

        </div>

        </div>
      </div>
    </div>
  </div>
  <!important><!-- FIM MODAL DE ALTERAÇÃO -->




</main>
  
<footer class="container-fluid text-center" style="background-color: #212121;height: auto;">
   <p style="color: white;">Pubs's Sentry - 2018</p>  
   <br><br>

  <img src="../img/logoD.png"><br><br>
  <p>Delirium Café São Paulo<br>
  <p>Visite as redes sociais do nosso parceiro:</p>
  <a href="https://www.facebook.com/deliriumcafesp/" target="_blank"> <img class="icons" src="../img/face.png" width="88px"> </a>
  <a href="https://instagram.com/deliriumcsp/?hl=pt-br" target="_blank" ><img src="../img/insta.png" width="100px"></a>

  <br><br>
  <p><i>Site desenvolvido como parte da plataforma "Pub's Sentry", idealizada pelo grupo de TCC do 3ºINFO do ano letivo de 2018 <br> Colégio Seta - Av. João Batista, 487 - Centro, Osasco - SP, 06097-105</i></p>
  <br>
  <a href="http://www.colegioseta.com.br/" target="_blank"><img src="../img/logoSeta.png" height="50px"></a>
<br><br>
</footer>

</body>
</html>
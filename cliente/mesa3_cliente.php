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

    <title>PS Cliente - Consumo Mesa 3</title>
</head>
<body>

<nav>
    
  <header class="navbar navbar-inverse" id="barra_menu" >

  <!-- MENU ANIMADO-->

  <div class="container-fluid" >
    <div class="navbar-header">
      
       <img src="../img/monograma.png">
    </div>   
  
  </div>

</nav>

  </header>

  <main style="margin-top: 90px" >
    

    <div class="container">

  <div class="row">
    <div class="main">
    <p style="text-align: center; font-size: 50pt;">Mesa 3</p>
    <hr>

    </div>

  <!-- MOSTRA SEMANA, DIA MES E ANO -->
  <?php $data = new Data();
  $data->mostrarData();

  $m = 3;
   ?>
  <!-- FIM -->
  <center><br><p style="font-size:20pt;">Cliente, aqui você pode acompanhar o consumo da sua mesa em tempo real!</p></center>

  <div class="table-responsive" style="padding: 20px; border: none;">

         
        <table width="500"  align="center" class="table">
           <tr>
             <td><strong>Data/Hora</strong></td>
             <td><strong>Produto</strong></td>
             <td><strong>Quantidade</strong></td>
             <td><strong>Status</strong></td>
             <td><strong>Descrição</strong></td> 
             <td><strong>Valor</strong></td> 
             <td></td> 
           </tr>

          <?php 

          $mesa = new Mesa();

          foreach ($mesa->findConsumo($m) as $key => $value) { ?>

          <tr>
            <td><?php echo $value->data_pedido; ?></td>

            <td><?php echo $value->nome_produto; ?></td>

            <td><?php echo $value->quantidade; ?></td>

            <td><?php echo $value->status_pedido; ?></td>

            <td><?php echo $value->obs; ?></td>

            <td><?php echo "R$" . $value->valor; ?></td>

          </tr>  
          <br>
          
            <?php  } 

          $call = "call somar_total(@total, $m);";
          mysqli_query($conexao, $call);
          
          $up = "update pedido set total = @total where p_cod_mesa = $m;";
          mysqli_query($conexao, $up);

          $query = "select total from pedido where P_cod_mesa = $m;";
          
          ?>

          <tr><td></td><td></td><td></td><td></td>
            <td><strong>TOTAL:</strong></td>
            <td style="font-size: 16pt;">

            <?php $result = mysqli_query($conexao, $query);
            $row = $result->fetch_assoc();
                echo "R$" . $row['total']."<br>";

             ?></td>
          </tr>

        </table>
        
      </div>
  
  <center><img src="../img/estre.png"  width="200px" ></center><br>

</div>
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
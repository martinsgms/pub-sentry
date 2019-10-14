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

    
  <?php include 'classes/Menu.php'; ?>

<main style="margin-top: 90px" >
    <div class="container">
      <div class="row">
        <p style="font-size: 20pt"><?php echo "Logado como: <br>". $res['nome_funcionario']. " - ". $res['setor'];?></p>
        <div class="col-md-12 primeira">
        </div>
    <legend></legend>
  </div>

    <div class="row">
      <p style="font-size: 20pt">Seja bem vindo!</p>
      
    <!-- MOSTRA SEMANA, DIA MES E ANO -->
    <?php $data = new Data();
    $data->mostrarData(); ?>
    <!-- FIM -->

     <center><img src="img/logoPubsSentry.png" width="300px"></center>
      <br><br>
      <div class="col-md-12 primeira">
      </div>
    
      <p>Pub's Sentry é uma plataforma que irá otimizar o atendimento de Pubs através de uma interface web e local, ambas limpas e intuitivas, proporcionado uma melhor experiência para o usuário final. Por meio deste sistema web, o garçom irá interagir com o sistema através de um dispositivo móvel, deste modo, agilizando o processo de atendimento e coleta de pedidos, tornando-o mais organizado e eficiente. Além disso, o cliente poderá acompanhar o valor de seu consumo em tempo real, através de um recurso disponibilizado.</p>

      <center><img src="img/estre.png"  width="200px" ></center>

    </div>
  </div>
</main>
  
<?php include 'classes/Footer.php' ?>
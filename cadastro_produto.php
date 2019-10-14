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

  <title>Pubs's Sentry - CAdastro de produto</title>

  <style>
  	.form-control{background-color: black; color: white;}
  </style>
  
</head>

<body>

<nav>
    
  <?php include 'classes/Menu.php'; ?>

  <main style="margin-top: 90px" >

    <div class="main">
    <p style="text-align: center; font-size: 50pt;">Cadastro de Produto<p>
    <hr>

  </main>

<div style="margin: 20px 100px 20px 100px">

<form name="cad_prod" method="post" action="">
	<p>Escolha o tipo de produto:</p>
	<label class="radio-inline"><input type="radio" name="optradio" checked>ENTRADA</label>
	<label class="radio-inline"><input type="radio" name="optradio">LANCHE</label>
	<label class="radio-inline"><input type="radio" name="optradio">BEBIDA</label>
	<label class="radio-inline"><input type="radio" name="optradio">SOBREMESA</label>
	<label class="radio-inline"><input type="radio" name="optradio">OUTROS</label>
	<br><br>

	<div class="form-group">
	  <label for="foto">Foto:</label>
	  <input type="file" class="form-control" id="foto">
	</div>

	<div class="form-group">
	  <label for="usr">Nome:</label>
	  <input type="text" class="form-control" id="usr">
	</div>

	<div class="form-group">
	  <label for="usr">Preço (R$):</label>
	  <input type="number" class="form-control" id="usr">
	</div>

	<div class="form-group">
	  <label for="usr">Teor Alcoolico:</label>
	  <input type="number" class="form-control" id="usr">
	</div>

	<div class="form-group">
	  <label for="usr">Validade:</label>
	  <input type="number" class="form-control" id="usr">
	</div>

	<div class="form-group">
	  <label for="comment">Descrição:</label>
	  <textarea class="form-control" rows="5" id="comment"></textarea>
	</div>

	<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success btn-lg">

</form>
</div>

<?php include 'classes/Footer.php' ?>  

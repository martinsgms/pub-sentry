<header class="navbar navbar-inverse" id="barra_menu">

  <!-- MENU ANIMADO-->
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
      </a>
       <a href="home.php"><img src="img/monograma.png"></a>
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
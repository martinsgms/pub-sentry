<?php

class Data{

	public function mostrarData(){
		
		date_default_timezone_set('America/Sao_Paulo');
		echo "<center style='font-size: 17pt;'>";

		$semana = date("N"); 
		$diasemana = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado");
		echo $diasemana[$semana] .", ";

		echo date("d") . " de ";

		$mes = date("n")-1;
		$nMes = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
		echo $nMes[$mes] . " de "; 

		echo date("Y");
		echo "</center>";
	}

}
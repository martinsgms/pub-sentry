	
	function sair(){
		window.location = 'classes/logout.php';
	}

	function sair_mesas(){
		window.location = '../classes/logout.php';
	}

	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
		document.getElementById("mySidenav").style.height = "100%"
	}

	/* Close/hide the sidenav */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}

	/*function timer(){
		window.location.reload();
	}
setTimeout("timer()",1000);*/

	function load_modal(cod,valor, p){
	  $('#cod_mod').val(cod);
	  $('#valor_mod').val(valor);
	  $('#p_mod').val(p);
	}

	function load_modal1(quantidade,obs,id,nome,id_produto){
	  $('#quantidade_ui').val(quantidade);
	  $('#obs_ui').val(obs);
	  $('#id_ui').val(id);
	  $('#nome_ui').val(nome);
	  $('#id_pr').val(id_produto);
	}

	function load_modal2(id){
	  $('#id_uii').val(id);
	}

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



	function m1(){
	  window.location = "mesas/mesa1.php";
	}

	function m2(){
	  window.location = "mesas/mesa2.php";
	}

	function m3(){
	  window.location = "mesas/mesa3.php";
	}

	function m4(){
	  window.location = "mesas/mesa4.php";
	}

	function m5(){
	  window.location = "mesas/mesa5.php";
	}

	function m6(){
	  window.location = "mesas/mesa6.php";
	}

	function m7(){
	  window.location = "mesas/mesa7.php";
	}

	function m8(){
	  window.location = "mesas/mesa8.php";
	}

	function m9(){
	  window.location = "mesas/mesa9.php";
	}

	function m10(){
	  window.location = "mesas/mesa10.php";
	}
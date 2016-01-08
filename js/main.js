$(document).ready(main);
	function main(){

		$('#camb').click(function(){      //Cambio carrera
			var gru= $("#grup").val();
			var nc=  $("#nc").val();
			$.post("../contents/pro_camb_gru.php", { nc: nc , gru : gru }, function(data){
	 		alert(data);
	 		 });

		});

		$('#camg').click(function(){      //Cambio Grupo
		  var gru= $("#grup1").val();
			var nc=  $("#nc1").val();
		  $.post("../contents/pro_camb_gru.php", { nc: nc , gru : gru }, function(data){
	 	  alert(data);
	    });

		});

		$('#busc').click(function(){            //Buscar alumno Cambio Carrera
			$nc= $('#nc').val();
      var query = "SELECT * FROM alum WHERE idAlumnos="+$nc+" AND activo = 0";
			$.post("./contents/tabla_alumno.php", { query: query}, function(data){
 				 $("#table").html(data);
 		 });
		});

		$('#busc1').click(function(){           //Buscar alumno Cambio Grupo y select grupos
			$nc= $('#nc1').val();
			var query = "SELECT * FROM alum WHERE idAlumnos="+$nc+" AND activo = 1";
			var id_ca = "ISIC-2010-224";
			$.post("./contents/tabla_alumno.php", { query: query}, function(data){
				 $("#table1").html(data);
		 });
		  $.post("./contents/grupos.php", { id_ca: id_ca }, function(data){
			   $("#grup1").html(data);
		});
		});


		$('#selectCarrera').on("change",function() //Select carre_tutor
	   {
		   $("#selectCarrera option:selected").each(function () {
		     id_ca = $(this).val();
		     $.post("./contents/select_tutor.php", { id_ca: id_ca }, function(data){
				  $("#selectTutor").html(data);
		      });
         });

	    });


	  $('#prog').on("change",function()    //Select grupos cambio carrera
     {
	    $("#prog option:selected").each(function () {
	      id_ca = $(this).val();
	      $.post("./contents/grupos.php", { id_ca: id_ca }, function(data){
			   $("#grup").html(data);
	      });
        });
     });


		 $('#sesion-ad').click(function(){   //Boton login administrador
			var us=$("#userc").val();
	    var pas=$("#passc").val();
	    $.post("./contents/sesion_ad.php", { us : us , pas : pas }, function(data){

	    if(data == 0){
	     	alert("Usuario o Contraseña Incorrecta");
	    }
	    else if(data == 1){
	      location.href= "./index.php";
	    /*  	window.open('./index.php', '_self');*/

	    }

	     });
		  });

			$('#logout').click(function(){            //Logout
				location.href= "../contents/logout.php";
	    });

			$('#cart').click(function(){            //Generar carga tutorias
				alert("carga");

	    });

			$('#sesion-tut').click(function(){   //Boton login administrador
	      alert("entro");
	      var us=$("#userc").val();
	      var pas=$("#passc").val();
	      $.post("/contents/sesion_coor.php", { us : us , pas : pas }, function(data){

	      if(data == 0){
	        alert("Usuario o Contraseña Incorrecta");
	      }
	      else if(data == 1){
	        location.href= "./index.php";
	      }

	       });
	     });

			 $('#selCTC').on("change",function()    //Select Tutores Constancia Tutores
			{
			 $("#selCTC option:selected").each(function () {
				 id_ca = $(this).val();
				 $.post("./contents/tutores.php", { id_ca: id_ca }, function(data){
					$("#selCTT").html(data);
				 });
				 });
			});

			$('#selCTP').on("change",function()    //Select Periodo Constancia Carreras
			{
			 $("#selCTP option:selected").each(function () {
					id_pe = $(this).val();
					id_tu = $("#selCTT").val();
					$.post("./contents/getGruposTu.php", { id_pe: id_pe, id_tu : id_tu },
					function(data){
						$("#selCTG").html(data);
						 });
				});
			 });

			 $('#buCTG').click(function(){            //Boton Generar Constancia Tutor
				 var ca = $("#selCTC").val()
				 var ct = $("#selCTT").val();
				 var cp = $("#selCTP").val();
				 var cg = $("#selCTG").val();
				 location.href= "./contents/consTutor.php?tuto="+ ct +"&grup="+ cg +"&per="+cp+"&carr="+ca;
		 });




}

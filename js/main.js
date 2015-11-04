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

		$('#imp').click(function(){          //imprimir evaluacion tutor
			alert("Hola compa desde Imprimir")

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
	      alert("Usuario o Contraseña correcta");
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




}

$(document).ready(main);
	function main(){
		//Función para dar de alta una carrera
		$('#btn-AltaCarrera').click(function(){			
		 	var clave=$("#clave").val();
		 	var nombrecarrera=$("#nombrecarrera").val();
		 	var sent="call insCarrera('"+clave+"','"+nombrecarrera+"')";
		 	$.ajax({
		 		data: {sent:sent},
		 		url: "../contents/general.php",
		 		type: 'POST',
			 	success:function(data){
			 		alert("Alta realizada");
			 	},
			 	error:function(data){
			 		alert("Alta realizada");
			 	}
			 });
		});

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
      var id_ca = $('#cvec').val();
			var query = "SELECT * FROM alum WHERE idAlumnos="+$nc+" AND activo = 1";
			$.post("./contents/tabla_alumno.php", { query: query, id_ca: id_ca}, function(data){
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
				 var ca = $("#selCTC").val();
				 var ct = $("#selCTT").val();
				 var cp = $("#selCTP").val();
				 var cg = $("#selCTG").val();
				 location.href= "./contents/consTutor.php?tuto="+ ct +"&grup="+ cg +"&per="+cp+"&carr="+ca;
		 });


		 	 $('#genCA').click(function(){            //Boton Generar Constancia Alumno
		 				 var nc = $("#conNC").val();
						 $.post("./contents/comAlum.php", { nc : nc }, function(data){
			 	    if(data == 0){
			 	     	alert("El alumno no existe");
			 	    }
			 	    else if(data == 1){
            	location.href= "./contents/consAlum.php?nc="+nc;
			 	    }
			 	    });
		 		 });

				 $('#btnBET').click(function(){            //Boton Ver Evaluacion Tutor
           var cve = $("#selectTutor").val();
					 $.ajax({
											type:'POST',
											url:'./contents/graf_evalTut.php',
											data:'cve='+cve,
											success:function(data){
													var valores = eval(data);
													var e   = valores[0];
													var f   = valores[1];
													var m   = valores[2];
													var a   = valores[3];
													var Datos = {
																	labels : ['Pregunta 1', 'Pregunta 2', 'Pregunta 3', 'Pregunta 4'],
																	datasets : [
																			{
																				  label:      'Evaluacion Tutor',
																					fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
																					strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
																					highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
																					highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
																					data : [e, f, m, a]
																			}
																	]
															}

													var contexto = document.getElementById('grafico').getContext('2d');
													window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
											}
									});
									return false;
			 });


		 $('#selCTCA').on("change",function()    //Select Carrera Constancia carga tutorias
		 {
			$("#selCTCA option:selected").each(function () {
				 cc = $(this).val();
				$.post("./contents/getInfGrup.php", { cc: cc },
				 function(data){
					 $("#table1").html(data);
						});
			 });
			});

		 $('#selCar').on("change",function()    //Select grupos registrar alumno
     	{
	    $("#selCar option:selected").each(function () {
	      var id_ca = $(this).val();
	      $.post("./contents/grupos.php", { id_ca: id_ca }, function(data){
			   $("#selGru").html(data);
	      });
        });
     });

}

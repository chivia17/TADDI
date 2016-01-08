$(document).ready(main);
  function main(){
	 $('#sesion-coor').click(function()       //Boton login coordinador
   {
    var us=$("#userc").val();
    var pas=$("#passc").val();
    $.post("./contents/sesion_coor.php", { us : us , pas : pas }, function(data)
    {

    if(data == 0){
     	alert("Usuario o Contraseña Incorrecta");
    }
    else if(data == 1){
      location.href= "./index.php";
    /*  	window.open('./index.php', '_self');*/

    }

     });
	  });

    $('#con').click(function(){            //Consultar Alumno
    $nc= $('#nc').val();
      var query = "SELECT * FROM alum WHERE idAlumnos="+$nc;
      $.post("./contents/tabla_alumno.php", { query: query}, function(data){
         $("#tacon").html(data);
     });
    });

    $('#logout').click(function(){     //Boton Logout Coordinador
      location.href= "../contents/logout.php";
    });

    $('#selTP').on("change",function()    //Select Periodo Constancia Carreras
    {
     });


   }

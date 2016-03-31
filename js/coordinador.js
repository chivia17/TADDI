$(document).ready(main);
  function main(){
	 $('#sesion-coor').click(function()       //Boton login coordinador
   {
    var us=$("#userc").val();
    var pas=$("#passc").val();
    var cve=$("#selCIC").val();
    $.post("./contents/sesion_coor.php", { us : us , pas : pas, cve : cve },
    function(data)
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

    $('#genCAC').click(function(){            //Boton Generar Constancia Alumno
          var nc = $("#conNC").val();
          var id_ca = $("#cvec").val();
          $.post("./contents/comAlum.php", { nc : nc, id_ca : id_ca }, function(data){
             if(data == 0){
                  alert("El alumno no existe");
                }
             else if(data == 1){
                  location.href= "./contents/consAlum.php?nc="+nc;
                }
              });
      });

      $('#selCIC').on("mouseover",function()    //Select carrera inicio sesion coordinador
       {
  	      var id_co = $("#userc").val();
  	      $.post("./contents/getCarrCoo.php", { id_co: id_co }, function(data){
  			   $("#selCIC").html(data);
  	      });
       });
   }

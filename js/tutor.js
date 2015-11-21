$(document).ready(main);
  function main(){

    $('#sesion-tut').click(function(){   //Boton login administrador
      alert("entro");
      var us=$("#userc").val();
      var pas=$("#passc").val();
      $.post("../contents/sesion_coor.php", { us : us , pas : pas }, function(data){

      if(data == 0){
        alert("Usuario o Contraseña Incorrecta");
      }
      else if(data == 1){
        alert("Usuario o Contraseña correcta");
        location.href= "./index.php";
      }

       });
     });
 }

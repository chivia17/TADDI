$(document).ready(main);
  function main(){
    $('#sesion-tutor').click(function(){   //Boton login administrador
      var us=$("#userc").val();
      var pas=$("#passc").val();
      var parametros = {
            "us" : us,
            "pas" : pas
    };
            $.ajax({
             type: "POST",
             url: "./contents/sesion_tutor.php",
             data: parametros,
             success: function(data){
                      if(data == 0){
                       	alert("Usuario o Contraseña Incorrecta");
                      }
                      else if(data == 1){
                        alert("Usuario o Contraseña correcta");
                        location.href= "./index.php";
                      }
           }});
     });
 }

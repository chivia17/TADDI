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


     $('#busAlu').click(function(){        //Buscar alumno Alta logica Alumno
       $nc= $('#noControl').val();
       $gp= $('#grupo').val();
      var query = "SELECT * FROM alum WHERE idAlumnos="
      +$nc+" AND activo = 0 AND idGrupos ="+$gp;
       $.post("./contents/tabla_alumno.php", { query: query}, function(data){
            $("#table1").html(data);
        });
     });


     $('#alta').click(function(){            //Alta logica Alumno
        var nc= $('#noControl').val();
        var parametros = {"nc" : nc};
        $.ajax({
         type: "POST",
         url: "./contents/altaLog.php",
         data: parametros,
         success: function(data){
                alert(data);
       }});

     });
}

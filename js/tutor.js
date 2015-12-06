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

     $('#bus').click(function(){        //Buscar alumno Baja logica Alumno
       $nc= $('#noControl').val();
       $gp= $('#grupo').val();
      var query = "SELECT * FROM alum WHERE idAlumnos="
      +$nc+" AND activo = 1 AND idGrupos ="+$gp;
       $.post("./contents/tabla_alumno.php", { query: query}, function(data){
            $("#table1").html(data);
        });
     });

     $('#salon').click(function(){        //Buscar alumno Baja logica Alumno
       $gp= $('#grupo').val();
      var query = "SELECT * FROM alum WHERE activo = 1 AND idGrupos ="+$gp;
       $.post("./contents/tabla_alumno1.php", { query: query}, function(data){
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


     $('#baja').click(function(){            //Baja logica Alumno
        var nc= $('#noControl').val();
        var parametros = {"nc" : nc};
        $.ajax({
         type: "POST",
         url: "./contents/bajaLog.php",
         data: parametros,
         success: function(data){
                alert(data);
       }});
     });

     $('#cam').click(function(){        //Buscar alumno Alta logica Alumno
       var cv= $('#rfc').val();
       var cona = $('#pswAct').val();
       var conn = $('#pswNew').val();
       var conr = $('#pswChk').val();
       $.post("./contents/cambCon.php", { cv : cv , conn : conn, conr : conr }, function(data){
            alert(data);
        });
     });

     $('#logout').click(function(){     //Boton Logout Tutor
       location.href= "../contents/logout.php";
     });

}

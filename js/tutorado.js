$(document).ready(main);
function main(){
  $('#sesion-tuto').click(function(){ //Boton Login Tutorado
     var nc= $('#userto').val();
     var pas= $('#passto').val();
     var parametros = {"nc" : nc, "pas" : pas};
     $.ajax({
      type: "POST",
      url: "./contents/sesionTuto.php",
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


  $('#logout').click(function(){     //Boton Logout Tutorado
    location.href= "../contents/logout.php";
  });

  $("#selCar").change(function() {
        id_ca = $(this).val();
        $.post("../contents/grupos.php", { id_ca: id_ca }, function(data){
            $("#selGru").html(data);
        });
    });



    $('#sesion-tutorado').click(function(){     //Boton Logout Tutorado
      nomA = $('#nomAl').val();
      aP = $('#apPat').val();
      aM = $('#apMat').val();
      iG = $('#selGru').val();
      ncA = $('#nc').val();
      pas = $('#pass').val();
      par = $('#pasr').val();
      coE = $('#corr').val();





      $.post("./contents/regisAlum.php", {nomA : nomA, aP : aP, aM : aM,
                                           iG : iG, ncA : ncA, pas : pas,
                                           coE : coE},
                 function(data){
                                alert(data);
                      })
    });

}

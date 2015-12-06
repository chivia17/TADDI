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

  $("#selCar").change(function() { //Select Grupo Registro
        id_ca = $(this).val();
        $.post("../contents/grupos.php", { id_ca: id_ca }, function(data){
            $("#selGru").html(data);
        });
    });



    $('#sesion-tutorado').click(function(){     //Boton Registrar Alumno
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
                              });
    });

    $('#grdEvaluacion').click(function(){     //Boton Guarda Evaluacion Tutor
      p1 = $('input:radio[name=eva01]:checked').val();
      p2 = $('input:radio[name=eva02]:checked').val();
      p3 = $('input:radio[name=eva03]:checked').val();
      p4 = $('input:radio[name=eva04]:checked').val();
      $.post("./contents/evalTuto.php", {p1 : p1, p2 : p2, p3 : p3, p4 : p4},
                 function(data){
                                alert(data);
                              });
    });


    $('#grdEstilos').click(function(){     //Boton Guardar Test de Asertividad
      p1 = $('input:radio[name=aser01]:checked').val();
      p2 = $('input:radio[name=aser02]:checked').val();
      p3 = $('input:radio[name=aser03]:checked').val();
      p4 = $('input:radio[name=aser04]:checked').val();
      p5 = $('input:radio[name=aser05]:checked').val();
      p6 = $('input:radio[name=aser06]:checked').val();
      p7 = $('input:radio[name=aser07]:checked').val();
      p8 = $('input:radio[name=aser08]:checked').val();
      p9 = $('input:radio[name=aser09]:checked').val();
      $.post("./contents/testAser.php", {p1 : p1, p2 : p2, p3 : p3, p4 : p4,
                                         p5 : p5, p6 : p6, p7 : p7, p8 : p8,
                                         p9 : p9},
                 function(data){
                                alert(data);
                              });

    })


}

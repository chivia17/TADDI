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
    });

    $('#grdEstilo').click(function(){     //Boton Guardar Test Estilos Aprendizaje
      p1 = $('input:radio[name=est01]:checked').val();
      p2 = $('input:radio[name=est02]:checked').val();
      p3 = $('input:radio[name=est03]:checked').val();
      p4 = $('input:radio[name=est04]:checked').val();
      p5 = $('input:radio[name=est05]:checked').val();
      p6 = $('input:radio[name=est06]:checked').val();
      p7 = $('input:radio[name=est07]:checked').val();
      p8 = $('input:radio[name=est08]:checked').val();
      p9 = $('input:radio[name=est09]:checked').val();
      p10 = $('input:radio[name=est10]:checked').val();
      p11 = $('input:radio[name=est11]:checked').val();
      p12 = $('input:radio[name=est12]:checked').val();
      p13 = $('input:radio[name=est13]:checked').val();
      p14 = $('input:radio[name=est14]:checked').val();
      p15 = $('input:radio[name=est15]:checked').val();
      p16 = $('input:radio[name=est16]:checked').val();
      p17 = $('input:radio[name=est17]:checked').val();
      p18 = $('input:radio[name=est18]:checked').val();
      p19 = $('input:radio[name=est19]:checked').val();
      p20 = $('input:radio[name=est20]:checked').val();
      p21 = $('input:radio[name=est21]:checked').val();
      p22 = $('input:radio[name=est22]:checked').val();
      p23 = $('input:radio[name=est23]:checked').val();
      $.post("./contents/testEstApr.php", {p1 : p1, p2 : p2, p3 : p3, p4 : p4,
                                         p5 : p5, p6 : p6, p7 : p7, p8 : p8,
                                     p9 : p9, p10 : p10, p11 : p11, p12 : p12,
                                     p13 : p13, p14 : p14, p15 : p15, p16 : p16,
                                     p17 : p17, p18 : p18, p19 : p19, p20 : p20,
                                     p21 : p21, p22 : p22, p23 : p23},
                 function(data){
                                alert(data);
                              });
    });


    $('#grdHabilidades').click(function(){     //Boton Guardar Test Estilos Aprendizaje
      p1 = $('input:radio[name=hab01]:checked').val();
      p2 = $('input:radio[name=hab02]:checked').val();
      p3 = $('input:radio[name=hab03]:checked').val();
      p4 = $('input:radio[name=hab04]:checked').val();
      p5 = $('input:radio[name=hab05]:checked').val();
      p6 = $('input:radio[name=hab06]:checked').val();
      p7 = $('input:radio[name=hab07]:checked').val();
      p8 = $('input:radio[name=hab08]:checked').val();
      p9 = $('input:radio[name=hab09]:checked').val();
      p10 = $('input:radio[name=hab10]:checked').val();
      p11 = $('input:radio[name=hab11]:checked').val();
      p12 = $('input:radio[name=hab12]:checked').val();
      p13 = $('input:radio[name=hab13]:checked').val();
      p14 = $('input:radio[name=hab14]:checked').val();
      p15 = $('input:radio[name=hab15]:checked').val();
      p16 = $('input:radio[name=hab16]:checked').val();
      p17 = $('input:radio[name=hab17]:checked').val();
      p18 = $('input:radio[name=hab18]:checked').val();
      p19 = $('input:radio[name=hab19]:checked').val();
      p20 = $('input:radio[name=hab20]:checked').val();
      $.post("./contents/testHabEst.php", {p1 : p1, p2 : p2, p3 : p3, p4 : p4,
                                         p5 : p5, p6 : p6, p7 : p7, p8 : p8,
                                     p9 : p9, p10 : p10, p11 : p11, p12 : p12,
                                     p13 : p13, p14 : p14, p15 : p15, p16 : p16,
                                     p17 : p17, p18 : p18, p19 : p19, p20 : p20
                                           },
                 function(data){
                                alert(data);
                              });
    });


}

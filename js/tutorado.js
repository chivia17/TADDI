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
}

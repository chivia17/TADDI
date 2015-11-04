$(document).ready(function(eval_tutor){
  function eval_tutor(){

    $("#selectCarrera").change(function(){
             var valor = $("#selectCarrera").value();
             $.ajax({
                   type: "GET",
                   url: "combo.php",
                   data: "func=cargar&id="+valor ,
                   error: function(objeto, quepaso, otroobj){
                    alert("Hubo un problema al realizar la consulta");
                    },
                   success: function(data){
                       $("#lista-restaurant").html(data);
                   }

                });
        }
};
}

$(document).ready(main);
	function main(){
		$('#camb').click(function(){
			alert("Hola compa desde Cambiar");
			var carr= $("#prog").val();
			var nc=  $("#nc").val();
			$.post("./contents/mensaje2.php",{ nc: nc, carr : carr}, function(data){
				alert(data);
			});
		});

		$('#busc').click(function(){

			 nc= $('#nc').val()
			$.post("./contents/mensaje.php", { nc: nc }, function(data){
 				 $("#table").html(data);
 		 });
		});


		$('#imp').click(function(){
			alert("Hola compa desde Imprimir")

		});

		$('#selectCarrera').on("change",function()
	{
		$("#selectCarrera option:selected").each(function () {
		 id_ca = $(this).val();
		 $.post("./contents/mensaje3.php", { id_ca: id_ca }, function(data){
				 $("#selectTutor").html(data);
		 });
 });

	});

}

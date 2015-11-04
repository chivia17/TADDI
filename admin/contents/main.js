$(document).ready(main);
	function main(){
		$('#camb').click(function(){
			alert("Hola compa desde Cambiar")
		});

		$('#busc').click(function(){

			var nc= {"nc" : $('#nc').val()}
			$.ajax({
							data:  nc,
							url: "./contents/mensaje.php",
							type:  'POST',
							success:  function (response) {
											$("#prog").html(response);
							}
			});
		});


		$('#imp').click(function(){
			alert("Hola compa desde Imprimir")






		});

		$('#selectCarrera').on("change",function()
	{
		alert("Hola compa desde Carreras")
		$("#selectCarrera option:selected").each(function () {
		 id_ca = $(this).val();
		 alert(id_ca);
		 $.post("./contents/mensaje3.php", { id_ca: id_ca }, function(data){
				 $("#selectTutor").html(data);
		 });
 });

	});

}

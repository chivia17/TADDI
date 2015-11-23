$("#btnModNotas").click(function(){
	$("#divGrdCambios").show();
	$("#divModNotas").hide();
	$("#txaNotas").attr('readonly', false);
});

$("#btnGrdCambios, #btnCanCambios").click(function(){
	$("#divGrdCambios").hide();
	$("#divModNotas").show();
	$("#txaNotas").attr('readonly', true);
});



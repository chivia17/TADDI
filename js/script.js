function validar_changePsw(){
	document.getElementById("errors_changePsw").innerHTML = "";
	pswNew = document.getElementById("pswNew").value;
	pswChk = document.getElementById("pswChk").value;
	
	
	if(pswNew.length < 6){ 
			document.getElementById("errors_changePsw").innerHTML = "<p class='text-center text-danger'>¡La contraseña debe contener al menos 6 caracteres!</p>";
		return false;
	}
	if(pswNew !== pswChk){
		document.getElementById("errors_changePsw").innerHTML = "<p class='text-center text-danger'>¡Las contraseñas no coinciden!</p>";
		return false;
	}
	return true;
}

function validar_alta_carr(le,Le2){
	document.getElementById("errors_carr").innerHTML = "";
	val2 = document.getElementById(le).value;	
	val3=document.getElementById(Le2).value;
		if (validar_cve(val2)){			
			if(validar_let(val3)){
				return true;
			}			

			else {
				document.getElementById("errors_carr").innerHTML = "<p class='text-center text-danger'>¡Formato de nombre Incorrecto!</p>";
				return false;
			}
		}
		else{
			document.getElementById("errors_carr").innerHTML = "<p class='text-center text-danger'>¡Formato de clave Incorrecto!</p>";
			return false;
		}
	}

	function validar_only_rfc(rf){
	document.getElementById("errors_rfc").innerHTML = "";
	rcf = document.getElementById(rf).value;

		if (validar_rfc(rfc)){
			return true;
		}
		else{
			document.getElementById("errors_rfc").innerHTML = "<p class='text-center text-danger'>¡RFC Incorrecto!</p>";
			return false;
		}
	}

function validar_alta_coor(rf,c,n,ap,am){
	document.getElementById("errors_coor").innerHTML = "";
	rfc = document.getElementById(rf).value;
	corre = document.getElementById(c).value;
	nom = document.getElementById(n).value;
	apa = document.getElementById(ap).value;
	ama = document.getElementById(am).value;

	if(validar_rfc(rfc)){
		if(validar_let(nom) && validar_let(apa) && validar_let(ama)){
			if(validar_correo(corre)){
				return true;
			}
			else{
				document.getElementById("errors_coor").innerHTML = "<p class='text-center text-danger'>¡Correo no valido!</p>";
				return false;
			}
		}
		else{
			document.getElementById("errors_coor").innerHTML = "<p class='text-center text-danger'>¡No se permiten números en los nombres!</p>";
			return false;
		}
	}
	else{
		document.getElementById("errors_coor").innerHTML = "<p class='text-center text-danger'>¡RFC Incorrecto!</p>";
		return false;
	}
}

function validar_alta_gru(n,h){
	document.getElementById("errors_gru").innerHTML = "";
	nom = document.getElementById(n).value;
	hr = document.getElementById(h).value;

		if(validar_let(nom)){
			if(validar_hora(hr)){
				return true;
			}
			else{
				document.getElementById("errors_gru").innerHTML = "<p class='text-center text-danger'>¡Formato de hora Incorrecto, correcto HH:MM!</p>";
				return false;
			}
		}
		else{
			document.getElementById("errors_gru").innerHTML = "<p class='text-center text-danger'>¡No se permiten números en los nombres!</p>";
			return false;
		}
}

function validar_baja_alm(nu){
	document.getElementById("errors_baja").innerHTML = "";
	val = document.getElementById(nu).value;

	if(val.length == 8){
		if(validar_num(val)){
			return true;
		}
		else{
			document.getElementById("errors_baja").innerHTML = "<p class='text-center text-danger'>¡Número de control Incorrecto!</p>";
			return false;
		}
	}
	else{
		document.getElementById("errors_baja").innerHTML = "<p class='text-center text-danger'>¡Número de control Incorrecto!</p>";
			return false;
	}
}

function validar_rfc(rf) {
	rfc = rf;
	if (rfc.length == 13)
	{
		//var valid = '^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
		var valid = /^([A-Z]{1}[A|E|I|O|U][A-Z]{1}[0-9]{6}-([A-Z]|[0-9]){3})$/;
		var validRfc=new RegExp(valid);
		var matchArray=rfc.match(validRfc);
		if (matchArray==null) {
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
			return false;
	}
}

function validar_hora(hr) {
	hora = hr;
		var valid=/^(0[1-9]|1\d|2[0-3]):([0-5]\d)(:([0-5]\d))?$/;
		var validHora=new RegExp(valid);
		var matchArray=hora.match(validHora);
		if (matchArray==null) {
			return false;
		}
		else
		{
			return true;
		}
}

function validar_num(nu){
	valor = nu;
	if( isNaN(valor) ) {
	  return false;
	}
	else{
		return true;
	}
}

function validar_let(let){
	valor = let;
	var patron = /^(([A-Z])+\s?)*$/;
    if(!valor.search(patron)) {
	  return true;
	}
	else{
		return false;
	}
}

function validar_cve(let){
	valor = let;
	var patron = /^[A-Z]{4}-[0-9]{4}-[0-9]{3}$/;
    if(!valor.search(patron)) {
	  return true;
	}
	else{
		return false;
	}
}

function validar_correo(cor) {
	correo = cor;
		var valid=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var validcor=new RegExp(valid);
		var matchArray=correo.match(validcor);
		if (matchArray==null) {
			return false;
		}
		else
		{
			return true;
		}
}
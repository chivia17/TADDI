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
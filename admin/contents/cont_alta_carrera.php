<div class="" id="contenido">
	<div class="titulo text-center">
					<h2><b>ALTA CARRERA</b></h2>
			</div>
			<div class="container">
				<br>
				<form class="form-horizontal" role="form" method="post" action="./contents/cont_alta_carrera_llenar.php" onsubmit="return validar_alta_carr('clave','nombrecarrera')">
				  <div class="form-group">
				    <label for="clave" class="col-md-2 control-label">Clave Carrera</label>
				    <div class="col-md-2">
				      <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       id="clave" name="clave" placeholder="Clave" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nombrecarrera" class="col-md-2 control-label">Nombre Carrera</label>
				    <div class="col-md-5">
				      <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       id="nombrecarrera" name="nombre" placeholder="Nombre" required>
				    </div>
				  </div>
				  <div class="row">
			  		<div class="col-sm-12">
			  			<div id="errors_carr"></div>
			  		</div>
		  		</div>
				  <div class="form-group">
				    <div class="col-lg-offset-2 col-lg-10">
				      <button type="submit" class="btn btn-default">Agregar</button>
				    </div>
				  </div>
				</form>
			</div>	
</div>
<div class="" id="contenido">
	<div class="titulo text-center">
					<h2><b>RECUPERAR CONTRASEÑA</b></h2>
			</div>
			<div class="container">
				<br>
				<form class="form-horizontal" role="form" method="post" action="" onsubmit="return validar_only_rfc('recpassrfc');">
				  <div class="form-group">
				    <label class="col-md-2 control-label">RFC</label>
				    <div class="col-md-3">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="recpassrfc" name="recpassrfc" placeholder="RFC" required>
				    </div>
				  </div>
				   <div class="row">
			  		<div class="col-sm-12">
			  			<div id="errors_rfc"></div>
			  		</div>
		  		</div>
				  <div class="form-group">
				    <div class="col-lg-offset-2 col-lg-10">
				      <button type="submit" class="btn btn-default">Enviar</button>
				    </div>
				  </div>
				</form>
			</div>	
</div>
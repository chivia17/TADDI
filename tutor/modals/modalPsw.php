<div class="modal fade" id="changePsw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cancelPsw" id="" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
        <h4 class="modal-title">Cambiar contraseña</h4>
      </div>
      <div class="modal-body">
		<form class="form-horizontal" action="" method="post" onsubmit="return validar_changePsw();">
		  	<div class="form-group">
				<label for="pswAct" class="col-sm-4 control-label">Contraseña actual</label>
				<div class="col-sm-6">
			  		<input type="password" class="form-control" id="pswAct" name="pswAct" required>
				</div>
		  	</div>
		  	<div class="form-group">
				<label for="pswNew" class="col-sm-4 control-label">Nueva contraseña</label>
				<div class="col-sm-6">
			  		<input type="password" class="form-control" id="pswNew" name="pswNew" required >
				</div>
		  	</div>
		  	<div class="form-group">
				<label for="pswChk" class="col-sm-4 control-label">Confirmar contraseña</label>
				<div class="col-sm-6">
			  		<input type="password" class="form-control" id="pswChk" name="pswChk" required>
				</div>
		  	</div>
		  	<div class="row">
		  		<div class="col-sm-12">
		  			<div id="errors_changePsw"></div>
		  		</div>
		  	</div>
		  	<div class="modal-footer">
        		<input type="reset" class="btn btn-default" value="Cancelar" data-dismiss="modal">
        		<input type="submit" class="btn btn-primary" value="Guardar cambios">
      		</div>
		</form>
      </div>
      
    </div>
  </div>
</div>
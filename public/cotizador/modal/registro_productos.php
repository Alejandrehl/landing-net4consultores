	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="modelo" class="col-sm-3 control-label">Modelo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="modelo" name="modelo" placeholder="" >
				</div>
			  </div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="fabricante" class="col-sm-3 control-label">Fabricante</label>
				<div class="col-sm-8">
				  <select class="form-control" id="fabricante" name="fabricante">
					<option value="">-- Selecciona fabricante --</option>
					<?php
					$sql_fabricante=mysqli_query($con,"select * from manufacturers order by nombre_marca ");
					while ($rw_fab=mysqli_fetch_array($sql_fabricante)){
						?>
						<option value="<?php echo $rw_fab['id_marca'];?>"><?php echo $rw_fab['nombre_marca'];?></option>
						<?php
					}
					?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="" required pattern="^[0-9]{1,11}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="13">
				</div>
			  </div>
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
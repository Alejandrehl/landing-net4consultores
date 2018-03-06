<?php

	/*-------------------------
	Autor: Obed Alvarado
	Web: www.obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$id_cliente=intval($_GET['id']);
		$query=mysqli_query($con, "select * from estimates where id_cliente='".$id_cliente."'");
		$count=mysqli_num_rows($query);
		if ($count==0){
			if ($delete1=mysqli_query($con,"DELETE FROM clients WHERE id='".$id_cliente."'")){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados exitosamente.
			</div>
			<?php 
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php
			
		}
			
		} else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se pudo eliminar éste  cliente. Existen cotizaciones vinculadas a éste cliente. 
			</div>
			<?php
		}
		
		
		
	}
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('nombre_cliente');//Columnas de busqueda
		 $sTable = "clients";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by id desc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		echo mysqli_error($con);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './clientes.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr class="warning">
					<th>ID</th>
					<th>Fecha alta</th>
					<th>Nº de documento</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Contacto</th>
					<th><span class="pull-right">Acciones</span></th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id_cliente=$row['id'];
						$date_added= date('d/m/Y', strtotime($row['fecha_agregado']));
						$numero_identificacion=$row["numero_identificacion"];
						$nombre_cliente=$row["nombre_cliente"];
						$nombre_comercial=$row["nombre_comercial"];
						$direccion=$row["direccion"];
						$email=$row["email"];
						$contacto=$row["contacto"];
						$fijo=$row["fijo"];
						$movil=$row["movil"];
						$giro=$row['giro'];
					?>
					
					<input type="hidden" value="<?php echo $nombre_cliente;?>" id="cliente<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $nombre_comercial;?>" id="nombre_comercial<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $numero_identificacion;?>" id="numero_identificacion<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $giro;?>" id="giro<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $direccion;?>" id="direccion<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $email;?>" id="email<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $fijo;?>" id="fijo<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $movil;?>" id="movil<?php echo $id_cliente;?>">
					<input type="hidden" value="<?php echo $contacto;?>" id="contacto<?php echo $id_cliente;?>">
			
					<tr>
						<td><?php echo $id_cliente; ?></td>
						<td><?php echo $date_added; ?></td>
						<td ><?php echo $numero_identificacion; ?></td>
						<td >
							<?php if (!empty($nombre_cliente)){echo $nombre_cliente;}?>
							<?php if (!empty($nombre_comercial)){?><small><br><?php echo $nombre_comercial;echo "</small>";}?>
						</td>
						<td><?php echo $direccion;?></td>
						<td>
							<?php if (!empty($contacto)){?><i class='glyphicon glyphicon-user'></i> <?php echo $contacto;echo "<br>";}?>
							<?php if (!empty($email)){?><i class='glyphicon glyphicon-envelope'></i> <?php echo $email;echo "<br>";}?>
							<?php if (!empty($fijo)){?><i class='glyphicon glyphicon-phone-alt'></i> <?php echo $fijo;echo "<br>";}?>
							<?php if (!empty($movil)){?><i class='glyphicon glyphicon-phone'></i> <?php echo $movil;}?>
						</td>
						
						<td ><span class="pull-right">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Acciones
							<span class="caret"></span>
							</button>
							  <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
								<li><a href="#" title='Editar cliente' onclick="obtener_datos('<?php echo $id_cliente;?>');" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-edit"></i> Editar</a></li>
								<li><a href="#" title='Borrar cliente' onclick="eliminar('<?php echo $id_cliente; ?>')" ><i class="glyphicon glyphicon-trash"></i> Eliminar</a></li>
							  </ul>
						</div>
						</span></td>
						
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>
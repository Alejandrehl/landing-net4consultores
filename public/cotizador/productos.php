<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	if (!file_exists ('config/db.php')){
		header("location: install/paso1.php");
		exit;
	}	
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$active_inicio="";
	$active_cotizaciones="";
	$active_productos="active";
	$active_fabricantes="";
	$active_usuarios="";
	$active_empresa="";	
	$active_clientes="";	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cotizador - Panel de Control</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="icon" href="img/cart_icon.png">
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php 
	include("navbar.php");
	include("sidebar.php");
	include("modal/registro_productos.php");
	include("modal/editar_productos.php");
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
				<li class="active">Productos</li>
			</ol>
			
		</div><!--/.row-->
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="btn-group pull-right">
							<button type='button' class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Producto</button>
						</div>
						<h4><i class='glyphicon glyphicon-search'></i> Buscar Productos asd</h4>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" id="datos_cotizacion">
				
								<div class="form-group row">
									<label for="q" class="col-md-3 control-label">Código o nombre del producto:</label>
									<div class="col-md-5">
										<div class="input-group">
											<input type="text" class="form-control" id="q" placeholder="" onkeyup='load(1);'>
											<span class="btn btn-default input-group-addon" onclick="load(1);"><i class="glyphicon glyphicon-search"></i></span>
										</div>	
									</div>
									<div class="col-md-3">
										<span id="loader"></span>
									</div>
								</div>
						</form>
						<div id="resultados"></div><!-- Carga los datos ajax -->
						<div class='outer_div'></div><!-- Carga los datos ajax -->
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div>	<!--/.main-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/productos.js"></script>
	</body>
</html>
<script>
$( "#guardar_producto" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_producto" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

	function obtener_datos(id){

		alert('1');
			var codigo_producto = $("#codigo_producto"+id).val();
			var modelo_producto = $("#modelo_producto"+id).val();
			var nombre_producto = $("#nombre_producto"+id).val();
			var fabricante = $("#fabricante"+id).val();
			var estado = $("#estado"+id).val();
			var precio_producto = $("#precio_producto"+id).val();
			
			
			$("#mod_id").val(id);
			$("#mod_codigo").val(codigo_producto);
			$("#mod_modelo").val(modelo_producto);
			$("#mod_nombre").val(nombre_producto);
			$("select#mod_fabricante option")
			.each(function() { this.selected = (this.text == fabricante); });
			$("select#mod_estado option")
			.each(function() { this.selected = (this.text == estado); });
			$("#mod_precio").val(precio_producto);
		}
</script>

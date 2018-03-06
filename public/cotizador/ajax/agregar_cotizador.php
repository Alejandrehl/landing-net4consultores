<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
session_start();
$session_id= session_id();
if (isset($_POST['id'])){$id=$_POST['id'];}
if (isset($_POST['cantidad'])){$cantidad=intval($_POST['cantidad']);}
if (isset($_POST['precio_venta'])){floatval($precio_venta=$_POST['precio_venta']);}
if (isset($_POST['descuento'])){$descuento=intval($_POST['descuento']);}

	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
if (!empty($id) and !empty($cantidad) and !empty($precio_venta))
{
$insert_tmp=mysqli_query($con, "INSERT INTO tmp_estimate (id_producto,cantidad_tmp,descuento_tmp,precio_tmp,session_id) VALUES ('$id','$cantidad','$descuento','$precio_venta','$session_id')");
}
if (isset($_GET['id']))//codigo elimina un elemento de la DB
{
$id_tmp=intval($_GET['id']);	
$delete=mysqli_query($con, "DELETE FROM tmp_estimate WHERE id_tmp='".$id_tmp."'");
}
/*Datos de la empresa*/
	$sql_empresa=mysqli_query($con,"SELECT * FROM empresa where id_empresa=1");
	$rw_empresa=mysqli_fetch_array($sql_empresa);
	$iva=$rw_empresa["iva"];
	$moneda=$rw_empresa["moneda"];
/*Fin datos empresa*/
?>
<table class="table">
<tr>
	<th>CODIGO</th>
	<th>CANT.</th>
	<th>DESCRIPCION</th>
	<th><span class="pull-right">PRECIO UNIT.</span></th>
	<th><span class="pull-right">DESCUENTO</span></th>
	<th><span class="pull-right">PRECIO TOTAL</span></th>
	<th></th>
</tr>
<?php
	$sumador_total=0;
	$sumador_descuento=0;
	$sql=mysqli_query($con, "select * from products, tmp_estimate where products.id_producto=tmp_estimate.id_producto and tmp_estimate.session_id='".$session_id."'");
	while ($row=mysqli_fetch_array($sql))
	{
	$id_tmp=$row["id_tmp"];
	$codigo_producto=$row['codigo_producto'];
	$cantidad=$row['cantidad_tmp'];
	$porcentaje=$row['descuento_tmp'] / 100;
	$nombre_producto=$row['nombre_producto'];
	$id_marca_producto=$row['id_marca_producto'];
	if (!empty($id_marca_producto))
	{
	$sql_marca=mysqli_query($con, "select nombre_marca from manufacturers where id_marca='$id_marca_producto'");
	$rw_marca=mysqli_fetch_array($sql_marca);
	$nombre_marca=$rw_marca['nombre_marca'];
	$marca_producto=" ".strtoupper($nombre_marca);
	}
	else {$marca_producto='';}
	$precio_venta=$row['precio_tmp'];
	$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$total_descuento=$precio_total_r*$porcentaje;//Total descuento
	$total_descuento=number_format($total_descuento,2,'.','');//Formateo de numeros sin separador de miles
	$sumador_descuento+=$total_descuento;
	$sumador_total+=$precio_total_r;//Sumador
	
		?>
		<tr>
			<td><?php echo $codigo_producto;?></td>
			<td><?php echo $cantidad;?></td>
			<td><?php echo $nombre_producto.$marca_producto;?></td>
			<td><span class="pull-right"><?php echo $precio_venta_f;?></span></td>
			<td><span class="pull-right"><?php echo number_format($total_descuento,2);?></span></td>
			<td><span class="pull-right"><?php echo $precio_total_f;?></span></td>
			<td ><span class="pull-right"><a href="#" onclick="eliminar('<?php echo $id_tmp ?>')"><i class="glyphicon glyphicon-trash"></i></a></span></td>
		</tr>		
		<?php
	}
	$total_parcial=number_format($sumador_total,2,'.','');
	$sumador_descuento=number_format($sumador_descuento,2,'.','');
	$total_neto=$total_parcial-$sumador_descuento;
	$total_neto=number_format($total_neto,2,'.','');
	$total_iva=($total_neto*$iva) / 100;
	$total_iva=number_format($total_iva,2,'.','');
	$total_cotizacion=$total_neto+$total_iva;
?>
<tr>
	<td colspan=5><span class="pull-right">PARCIAL <?php echo $moneda;?></span></td>
	<td><span class="pull-right"><?php echo number_format($total_parcial,2);?></span></td>
	<td></td>
</tr>
<tr>
	<td colspan=5><span class="pull-right">DESCUENTO <?php echo $moneda;?></span></td>
	<td><span class="pull-right"><?php echo number_format($sumador_descuento,2);?></span></td>
	<td></td>
</tr>
<tr>
	<td colspan=5><span class="pull-right">NETO <?php echo $moneda;?></span></td>
	<td><span class="pull-right"><?php echo number_format($total_neto,2);?></span></td>
	<td></td>
</tr>
<tr>
	<td colspan=5><span class="pull-right">IVA <?php echo "$iva% $moneda";?></span></td>
	<td><span class="pull-right"><?php echo number_format($total_iva,2);?></span></td>
	<td></td>
</tr>
<tr>
	<td colspan=5><span class="pull-right">TOTAL <?php echo $moneda;?></span></td>
	<td><span class="pull-right"><?php echo number_format($total_cotizacion,2);?></span></td>
	<td></td>
</tr>
</table>

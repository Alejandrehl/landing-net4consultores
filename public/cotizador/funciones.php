<?php
function counter($table){
	global $con;
	$sql="select count(*) as totales from $table";
	$query=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($query);
	return $totales=$row['totales'];
}
function counterNew($table){
	global $con;
	$anio=date("Y");
	$mes=date("m");
	$diaF=date("d");
	$inicio="$anio-$mes-01 00:00:00";
	$fin="$anio-$mes-$diaF 23:59:59";
	if ($table=="estimates"){
		$campo="fecha_cotizacion";
	} else if ($table=="clients"){
		$campo="fecha_agregado";
		
	}else {
		$campo="date_added";
	}
	$sql="select count(*) as totales from $table where $campo between '$inicio' and '$fin'";
	$query=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($query);
	return $totales=$row['totales'];
}
?>
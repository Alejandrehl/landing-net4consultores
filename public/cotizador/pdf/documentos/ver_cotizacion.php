<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	session_start();
	/* Connect To Database*/
	include("../../config/db.php");
	include("../../config/conexion.php");
	$id_cotizacion= intval($_GET['id']);

	require_once(dirname(__FILE__).'/../html2pdf.class.php');
		

	$sql_cotizacion=mysqli_query($con, "select * from estimates, clients, users where estimates.id_empleado=users.user_id and estimates.id_cliente=clients.id and id_cotizacion='".$id_cotizacion."' ");
	$rwC=mysqli_fetch_array($sql_cotizacion);
	$numero_cotizacion=$rwC['numero_cotizacion'];	
	$fecha_cotizacion=date('d/m/Y', strtotime($rwC['fecha_cotizacion']));
	$atencion=$rwC['contacto'];
	$tel1=$rwC['movil'];
	$empresa=$rwC['nombre_comercial'];
	$tel2=$rwC['fijo'];
	$email=$rwC['email'];
	$condiciones=$rwC['condiciones'];
	$validez=$rwC['validez'];
	$entrega=$rwC['entrega'];
	$full_name=$rwC['firstname'].' '.$rwC['lastname'] ;
	$total_iva=$rwC['total_iva'];
	$notas=$rwC['notas'];
	/*Datos de la empresa*/
	$sql_empresa=mysqli_query($con,"SELECT * FROM empresa where id_empresa=1");
	$rw_empresa=mysqli_fetch_array($sql_empresa);
	$iva=$rw_empresa["iva"];
	$impuesto=($iva/100) + 1;
	$moneda=$rw_empresa["moneda"];
	$nrc=$rw_empresa["nrc"];
	$nombre_empresa=$rw_empresa["nombre"];
	$propietario=$rw_empresa["propietario"];
	$giro=$rw_empresa["giro"];
	$direccion=$rw_empresa["direccion"];
	$telefono=$rw_empresa["telefono"];
	$logo_url=$rw_empresa["logo_url"];
	/*Fin datos empresa*/
	
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_cotizacion_html.php');
    $content = ob_get_clean();

    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', array(0, 0, 0, 0));
        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        // send the PDF
        $html2pdf->Output('Cotizacion.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

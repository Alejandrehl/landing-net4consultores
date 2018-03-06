
		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');

			
			$.ajax({
				url:'./ajax/productos_cotizacion.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){					
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
					////////////////////////////////////////////////////////
					/*
					$.ajax({
				        type: "GET",
				        url: "./ajax/agregar_cotizador.php",				        
						 beforeSend: function(objeto){
							$("#resultados").html("Mensaje: Cargando...");
						  },
				        success: function(datos){
						$("#resultados").html(datos);
						}
					});
					*/
					////////////////////////////////////////////////////////
				}
			})
			





		}

	function agregar (id)
		{
			var precio_venta=document.getElementById('precio_venta_'+id).value;
			var descuento=document.getElementById('descuento_'+id).value;
			var cantidad=document.getElementById('cantidad_'+id).value;
			
			//Inicia validacion
			if (isNaN(cantidad))
			{
			alert('Esto no es un numero');
			document.getElementById('cantidad_'+id).focus();
			return false;
			}
			if (isNaN(descuento))
			{
			alert('Esto no es un numero');
			document.getElementById('descuento_'+id).focus();
			return false;
			}
			if (isNaN(precio_venta))
			{
			alert('Esto no es un numero');
			document.getElementById('precio_venta_'+id).focus();
			return false;
			}
			//Fin validacion
			
			$.ajax({
        type: "POST",
        url: "./ajax/agregar_cotizador.php",
        data: "id="+id+"&precio_venta="+precio_venta+"&cantidad="+cantidad+"&descuento="+descuento,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);		
		}
			});
		}
		
			function eliminar (id)
		{
			
			$.ajax({
        type: "GET",
        url: "./ajax/agregar_cotizador.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}

		function mostrar (id)
		{
			
			$.ajax({
        type: "GET",
        url: "./ajax/agregar_cotizador.php",
        data: "mostrar="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}
		
		$("#datos_cotizacion").submit(function(){
		  var id_cliente = $("#id_cliente").val();
		  var condiciones = $("#condiciones").val();
		  var validez = $("#validez").val();
		  var entrega = $("#entrega").val();
		  var notas = $("#notas").val();
		  if (id_cliente==""){
			alert("Debes seleccionar el cliente");
			$("#nombre_cliente").focus();
			return false;
		  }
		 VentanaCentrada('./pdf/documentos/cotizacion_pdf.php?id_cliente='+id_cliente+'&condiciones='+condiciones+'&validez='+validez+'&entrega='+entrega+'&notas='+notas,'Cotizacion','','1024','768','true');
	 	});

			$(function() {
						$("#nombre_cliente").autocomplete({
							source: "./ajax/autocomplete/clientes.php",
							minLength: 2,
							select: function(event, ui) {
								event.preventDefault();
								$('#id_cliente').val(ui.item.id_cliente);
								$('#nombre_cliente').val(ui.item.nombre_cliente);
								$('#tel1').val(ui.item.movil);
								$('#atencion').val(ui.item.contacto);
								$('#empresa').val(ui.item.nombre_comercial);
								$('#tel2').val(ui.item.fijo);
								$('#email').val(ui.item.email);
								
							 }
						});
						 
						
					});
					
	$("#nombre_cliente" ).on( "keydown", function( event ) {
						if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
						{
							$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							
							
						}
						if (event.keyCode==$.ui.keyCode.DELETE){
							$("#nombre_cliente" ).val("");
							$$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
						}
			});				

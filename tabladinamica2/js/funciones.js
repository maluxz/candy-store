

function agregardatos(nombre,descripcion,precio_compra,precio_venta,codigo_barras,stock,estado,bolsasxcaja,
	gramosxbolsa,cantidad_max,cantidad_min,id_categoria){
	cadena="nombre=" + nombre + 
			"&descripcion=" + descripcion +
			"&precio_compra=" + precio_compra +
			"&precio_venta=" + precio_venta +
			"&codigo_barras=" + codigo_barras +
			"&stock=" + stock +
			"&estado=" + estado +
			"&bolsasxcaja=" + bolsasxcaja +
			"&gramosxbolsa=" + gramosxbolsa +
			"&cantidad_max=" + cantidad_max +
			"&cantidad_min=" + cantidad_min +
			"&categoria=" + id_categoria;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
				
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idproductos').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#descripcionu').val(d[3]);
	$('#preciodecomprau').val(d[4]);
	$('#preciodeventau').val(d[5]);
	$('#codigodebarrasu').val(d[6]);
	$('#stockcajau').val(d[7]);
	$('#cantidadbolsasporcajau').val(d[8]);
	$('#cantidadgramosporbolsau').val(d[9]);
	$('#categoriau').val(d[10]);
	$('#cantidad_maxu').val(d[11]);
	$('#cantidad_minu').val(d[12]);
	
}

/* function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	apellido=$('#apellidou').val();
	email=$('#emailu').val();
	telefono=$('#telefonou').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&telefono=" + telefono;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
} */
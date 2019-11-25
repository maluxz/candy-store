<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>

	<div class="container">
		<div id="tabla"></div>
	</div>

	<!-- modal nuevos registros -->

<div class="modal fade" id="modalnuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- cuerpo del modal -->
    <!-- NOMBRE-->
   <!--  <form method="POST"  action="altaproducto.php" enctype="multipart/form-data" > -->
		<label for="nombre">Nombre:</label>
    <br/>
    <input type="text" id="nombre" id="nombre" maxlength="45" required class="form-control input-sm" >
    <br/><br/>
    <!-- IMAGEN -->
    <label for="imagen">Imagen producto:</label>
    <br/>
    <input type="file"  id="imagen" accept="image/png, .jpeg, .jpg, image/gif" required >
    <br/><br/>
    <!--Descripcion-->
    <label for="descripcion">Descripcion:</label>
    <br/>
    <input type="text" id="descripcion" maxlength="100" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de compra-->
    <label for="preciodecompra">Precio de compra:</label>
    <br/>
    <input type="text" id="preciodecompra" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de venta-->
    <label for="preciodeventa">Precio de venta:</label>
    <br/>
    <input type="text" id="preciodeventa" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Codigo de barras-->
    <label for="codigodebarras">Codigo de barras:</label>
    <br/>
    <input type="text" id="codigodebarras" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!--stock caja -->
    <label for="stockcaja">Stock Caja:</label>
    <br/>
    <input type="text" id="stockcaja" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de bolsas por caja -->
    <label for="cantidadbolsasporcaja">Cantidad de bolsas por caja:</label>
    <br/>
    <input type="text" id="cantidadbolsasporcaja" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de gramos por bolsa -->
    <label for="cantidadgramosporbolsa">Cantidad de gramos por bolsa:</label>
    <br/>
    <input type="text" id="cantidadgramosporbolsa" maxlength="15" required class="form-control input-sm">
    <br/><br>
    <!-- Categoria -->
    <label for="categoria">Categoria:</label>
        <br/>
        <select id="categoria" class="form-control input-sm">

            <option value = 1>categoria 1</option>
                
            <option value =2>categoria 2</option>
                
            <option value =3>categoria 3</option>

        </select>
		<br/><br/>
	<!-- Cantidad Maxima -->
	<label for="cantidad_max">Cantidad maxima en stock:</label>
    <br/>
    <input type="text" id="cantidad_max" maxlength="15" required class="form-control input-sm">
	<br/><br>
	<!-- Cantidad Minima -->
	<label for="cantidad_min">Cantidad minima en stock:</label>
    <br/>
    <input type="text" id="cantidad_min" maxlength="15" required class="form-control input-sm">
    <br/><br>
	  </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="guardarnuevo">Agregar Producto</button>
      </div>
<!-- </form> -->
    </div>
  </div>
</div>
<!-- Modal para edicion de datos -->

<div class="modal fade" id="modaledicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- cuerpo del modal edicion -->
		<input type="text"  hidden="" id="idproductos" >
		<!-- NOMBRE-->
		<label for="nombre">Nombre:</label>
    <br/>
    <input type="text" id="nombreu" maxlength="45" required class="form-control input-sm" >
    <br/><br/>
    <!-- IMAGEN -->
    <label for="imagen">Imagen producto:</label>
    <br/>
    <input type="file" id="imagenu" accept="image/png, .jpeg, .jpg, image/gif" required >
    <br/><br/>
    <!--Descripcion-->
    <label for="descripcion">Descripcion:</label>
    <br/>
    <input type="text" id="descripcionu" maxlength="100" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de compra-->
    <label for="preciodecompra">Precio de compra:</label>
    <br/>
    <input type="text" id="preciodecomprau" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Precio de venta-->
    <label for="preciodeventa">Precio de venta:</label>
    <br/>
    <input type="text" id="preciodeventau" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!--Codigo de barras-->
    <label for="codigodebarras">Codigo de barras:</label>
    <br/>
    <input type="text" id="codigodebarrasu" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!--stock caja -->
    <label for="stockcaja">Stock Caja:</label>
    <br/>
    <input type="text" id="stockcajau" maxlength="45" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de bolsas por caja -->
    <label for="cantidadbolsasporcaja">Cantidad de bolsas por caja:</label>
    <br/>
    <input type="text" id="cantidadbolsasporcajau" maxlength="15" required class="form-control input-sm">
    <br/><br/>
    <!-- Cantidad de gramos por bolsa -->
    <label for="cantidadgramosporbolsa">Cantidad de gramos por bolsa:</label>
    <br/>
    <input type="text" id="cantidadgramosporbolsau" maxlength="15" required class="form-control input-sm">
    <br/><br>
    <!-- Categoria -->
    <label for="categoria">Categoria:</label>
        <br/>
        <select id="categoriau" class="form-control input-sm">

            <option value = 1>categoria 1</option>
                
            <option value =2>categoria 2</option>
                
            <option value =3>categoria 3</option>

        </select>
		<br/><br/>
	<!-- Cantidad Maxima -->
	<label for="cantidad_max">Cantidad maxima en stock:</label>
    <br/>
    <input type="text" id="cantidad_maxu" maxlength="15" required class="form-control input-sm">
	<br/><br>
	<!-- Cantidad Minima -->
	<label for="cantidad_min">Cantidad minima en stock:</label>
    <br/>
    <input type="text" id="cantidad_minu" maxlength="15" required class="form-control input-sm">
    <br/><br>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizardatos">Actualizar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<!-- pasamos los parametros para agregar nuevo registro de productos -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#guardarnuevo').click(function(){
      nombre=$('#nombre').val();
      descripcion=$('#descripcion').val();
      precio_compra=$('#preciodecompra').val();
      precio_venta=$('#preciodeventa').val();
      codigo_barras=$('#codigodebarras').val();
      stock=$('#stockcaja').val();
      estado=1;
      bolsasxcaja=$('#cantidadbolsasporcaja').val();
      gramosxbolsa=$('#cantidadgramosporbolsa').val();
      cantidad_max=$('#cantidad_max').val();
      cantidad_min=$('#cantidad_min').val();
      id_categoria=$('#categoria').val();

      agregardatos(nombre,descripcion,precio_compra,precio_venta,codigo_barras,stock,estado,bolsasxcaja,
	gramosxbolsa,cantidad_max,cantidad_min,id_categoria);

    });
	});
</script>
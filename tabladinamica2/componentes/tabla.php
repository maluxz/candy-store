<!-- mandamos llamar la funcion que hace conexion a nuestro sql -->
<?php
require_once "../php/conexion.php";
$conexion=conexion();
?>



<div class="row">
	<div class="col-sm-12">
	<h2>Tabla dinamica CRUD PRODUCTOS</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalnuevo">Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<!-- encabezado de la tabla -->
            <tr>
            	<td>ID</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Precio Compra</td>
                <td>Precio Venta</td>
                <td>Codigo de barras</td>
                <td>Stock</td>
                <td>Estado</td>
                <td>Bolsas Caja</td>
                <td>Gramos Bolsa</td>
				<td>Cantidad Maxima</td>
				<td>Cantidad Minima</td>
				<td>Categoria</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
			<!-- Consulta Para ver registros en la tabla -->
            <?php
            $productos = "SELECT * FROM productos";
			$resproductos = $conexion -> query($productos);
            while($ver= $resproductos -> fetch_array(MYSQLI_BOTH)){
				$datos=$ver[0]."||".
					   $ver[1]."||".
					   
					   $ver[3]."||".
					   $ver[4]."||".
					   $ver[5]."||".
					   $ver[6]."||".
					   $ver[7]."||".
					   $ver[8]."||".
					   $ver[9]."||".
					   $ver[10]."||".
					   $ver[11]."||".
					   $ver[12]."||".
					   $ver[13]; 
            ?>
			<tr>
			
				<td> <?php echo $ver[0]?> </td>
				<td><?php  echo $ver[1] ?></td>
				
			    <td><?php  echo $ver[3] ?></td>
				<td><?php  echo $ver[4] ?></td>
				<td><?php  echo $ver[5] ?></td>
				<td><?php  echo $ver[6] ?></td>
				<td><?php  echo $ver[7] ?></td>
				<td><?php  echo $ver[8] ?></td>
				<td><?php  echo $ver[9] ?></td>
				<td><?php  echo $ver[10] ?></td>
				<td><?php  echo $ver[11] ?></td>
				<td><?php  echo $ver[12] ?></td>
				<td><?php  echo $ver[13] ?></td>
				<!-- <td></td>
				<td></td> -->
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modaledicion"
					onclick="agregaform('<?php echo $datos; ?>')">

					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove"></button>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
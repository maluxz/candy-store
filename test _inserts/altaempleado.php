<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Verificacion alta empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Verificacion del alta del empleado </h1>
        <?php
        if(isset($_POST['nombre'] )and $_POST['nombre']!=""){
            $nombre=$_POST['nombre'];
            $epellido1=$_POST['apellido1'];
            $apellido2=$_POST['apellido2'];


            $conexion=mysqli_connect('localhost','root','','inventario');
            
            $sql = "INSERT INTO empleados (nombre_producto,descripcion_producto, id_categori) VALUES ('$nombre', '$descripcion', '$idcateg')";
            if (mysqli_query($conexion, $sql)) {
                echo "Nuevo Empleado Registrado";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
            mysqli_close($conexion);

            
        
            
        }
        
        header("Location: mostrar_tabla.php"); 
        
        ?>
    </body>
</html>
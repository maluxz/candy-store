<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Verificacion alta empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta HTTP-EQUIV="refresh" content="5; URL=form_altaempleado.html">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Verificacion del alta del empleado </h1>
        <?php
        if(isset($_POST['nombre'] )and $_POST['nombre']!=""){
            $nombre=$_POST['nombre'];
            $a_paterno=$_POST['a_paterno'];
            $a_materno=$_POST['a_materno'];
            $fecha_nacimiento=$_POST['fecha_nacimiento'];
            $telefono=$_POST['telefono'];
            $sexo=$_POST['sexo'];
            $curp=$_POST['curp'];
            $nss=$_POST['nss'];
            $rfc=$_POST['rfc'];
            $fecha_ingreso=$_POST['fecha_ingreso'];
            $estado=1;
            $idtipo_empleado=$_POST['tipo_empleado'];
            




            $conexion=mysqli_connect('localhost','root','','dulceria_susi');
            
            $sql = "INSERT INTO empleados (nombre,a_paterno,a_materno,fecha_nacimiento,telefono,sexo,curp,nss,rfc,fecha_ingreso,estado,TIPO_EMPLEADO_idTIPO_EMPLEADO) 
            VALUES ('$nombre', '$a_paterno', '$a_materno','$fecha_nacimiento','$telefono','$sexo','$curp','$nss','$rfc','$fecha_ingreso','$estado','$idtipo_empleado')";
            if (mysqli_query($conexion, $sql)) {
                echo "Nuevo Empleado Registrado";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
            mysqli_close($conexion);

            
        
            
        }
        
        
       /*  header("Location: ");  */

        
        ?>
    </body>
</html>
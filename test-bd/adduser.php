<!DOCTYPE html>
<html lang="es">
<head>
    <style>
    </style>
</head>
<body>
    <?php
    $primerNombre = $_GET['nombre'];
    $segundoNombre = $_GET['apellido'];
    $edad = intval($_GET['edad']);;
    $ciudad = $_GET['ciudad'];
    $trabajo = $_GET['trabajo'];
    // $q = intval($_GET['q']);

    echo($primerNombre);

    $con = mysqli_connect('192.168.1.74','web','Wakamole12','testajax');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,"testajax");
    // INSERT INTO `testajax`.`user` (`FirstName`, `LastName`, `Age`, `Hometown`, `Job`)
    // VALUES ('Alma', 'Peña', '22', 'Aldama', 'Musico');
    $sql="INSERT INTO user (FirstName, LastName, Age, Hometown, Job) VALUES ('".$primerNombre."', '".$segundoNombre."', '".$edad."', '".$ciudad."', '".$trabajo."');";
    
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    mysqli_close($con); 
    ?>
    



</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('192.168.1.74','web','Wakamole12','dulceria-susi');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"dulceria-susi");
// $sql="SELECT * FROM empleados WHERE id_empleado = '".$q."'";
$sql="SELECT * FROM empleados";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Nombres</th>
<th>Primer apellido</th>
<th>Segundo apellido</th>
<th>Fecha de nacimiento</th>
<th>Sexo</th>
<th>NSS</th>
<th>CURP</th>
<th>Activo</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nombres'] . "</td>";
    echo "<td>" . $row['primer_apellido'] . "</td>";
    echo "<td>" . $row['segundo_apellido'] . "</td>";
    echo "<td>" . $row['fecha_nacimiento'] . "</td>";
    echo "<td>" . $row['sexo'] . "</td>";
    echo "<td>" . $row['nss'] . "</td>";
    echo "<td>" . $row['curp'] . "</td>";
    echo "<td>" . $row['estado'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
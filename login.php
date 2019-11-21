<?php
	require('test-login/conexion.php');
	
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$error = '';
		
		$sha1_pass = sha1($password);
		
		$sql = "SELECT id, id_tipo, usuario FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
            $_SESSION['tipo_usuario'] = $row['id_tipo'];
            $_SESSION['nombre_usuario'] = $row['usuario'];
			
			header("location: index.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>
	<center>
  <div class="wrap">
		<div class="avatar">
      <img src="img/susi-girl.png">
		</div>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" placeholder="usuario" id="usuario" name="usuario" required >
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" id="password" name="password" required >
		<button>Sign in</button>
		</form>
		
	</div>
    </center>
	<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
  <script src="js/index.js"></script>

</body>

</html>
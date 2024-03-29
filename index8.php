<?php
	require('test-login/conexion.php');
	
	session_start();
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: login.php");
    }

    $nombreusuario = $_SESSION["nombre_usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<!-- kaka -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>

<body>
    <!-- Header -->
    
    <div class="row">
        <div class="col-1" style="background-color: #039FD8"><img src="img/susi-girl.png" id="susi-girl" alt="Susi Girl" width="75px" height="75px"></div>
        <header class="titulo-ventana col-10 f-candy-shop" id="titulo-index">Dulceria Susi</header>
        <p style="font-size: 20px;" class="col-1 titulo-ventana f-candy-shop"><?php echo $nombreusuario ?></p>
    </div>
    <div class="row">
        <!-- Menú -->
      
        <div id="menu" class="col-2" >
            <ul>
                <li><a onclick="setW3('home.html')">Home</a></li>
                <li><a onclick="setW3('alta-empleado.html')">Alta empleado</a></li>
                <li><a onclick="setW3('alta_proveedor.html')">Alta proveedor</a></li>
                <li><a onclick="setW3('consulta-empleados.html')">Consulta empleados</a></li>
                <li><a onclick="setW3('alta-cliente.html')">Alta cliente</a></li>
                <li><a href="punto_venta.html">Consulta empleados</a></li>
            </ul>
        </div>
        <div id="canva" class="col-9" w3-include-html="alta-empleado.html"></div>
    </div>


    <script>
        function setW3(pagina){
            var canva = document.getElementById('canva');
            canva.setAttribute('w3-include-html',pagina);
            includeHTML();

            switch(pagina){
                case 'alta-empleado.html':
                    setTitle(' Alta empleado');
                    break;
                case 'alta-cliente.html':
                    setTitle('Alta cliente');
                    break
                case 'alta_proveedor.html':
                    setTitle('Alta proveedor');
                    break;
                case 'home.html':
                    setTitle('Dulceria susi');
                    break;
                case 'consulta-empleados.html':
                    setTitle('Consulta empleados');
                    break;
                default:break;
            }
            
        }

        function setTitle(titulo){
            var title = document.getElementById('titulo-index');
            title.innerHTML = titulo;
        }

        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /* Loop through a collection of all HTML elements: */
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("w3-include-html");
                if (file) {
                    /* Make an HTTP request using the attribute value as the file name: */
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4) {
                            if (this.status == 200) { elmnt.innerHTML = this.responseText; }
                            if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
                            /* Remove the attribute, and call this function once more: */
                            elmnt.removeAttribute("w3-include-html");
                            includeHTML();
                        }
                    }
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    /* Exit the function: */
                    return;
                }
            }
        }
    </script>
    <script>
            // includeHTML();
        </script>

        
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto 2 ETN - 921</title>
    <link type="text/css" href="css/estilos.css" rel="stylesheet">
</head>
<body>
<nav>

    <ul>
    <div class="parte1">
    <li class="cab"><h3>ETN - 921 Sistema de Monitoreo</h3></li>
    </div>
    <div class= "parte2">    
        <li><a href="#"> Inicio </a></li>
        <li><a href="php/consulta.php"> Consulta </a></li>
	<li><a href="php/contacto.php"> Contacto </a></li>
    </div>
    </ul>
</nav>
<section>  
    <article>
    <p class="parrafos"> Estado del Sistema Actual:
    </article>
</section>
<?php
	$direccion[0] = "216.58.204.142";	//google
	$direccion[1] = "199.16.156.70";	//twitter
	$direccion[2] = "72.30.35.9";		//yahoo
	$direccion[3] = "46.30.213.99";		//spotify
	$direccion[4] = "216.58.206.238";	//youtube
	$direccion[5] = "91.198.174.192";	//wikipedia
	$direccion[6] = "176.74.189.5";		//shazam
	$direccion[7] = "98.124.199.104";	//arduino
	$direccion[8] = "52.222.232.223";	//kickstarter
	$direccion[9] = "140.98.193.152";	//ieee
	$direccion[10] = "127.0.0.11";
	$direccion[11] = "127.0.0.12";
	$direccion[12] = "192.0.0.1";
	$direccion[13] = "127.0.0.14";
	$direccion[14] = "192.0.0.1";
	$direccion[15] = "127.0.0.16";
	$direccion[16] = "127.0.0.17";
	$direccion[17] = "192.0.0.1";
	$direccion[18] = "127.0.0.19";
	$direccion[19] = "127.0.0.20";

	$direcc[0] = "Google";	//google
	$direcc[1] = "Twitter";	//twitter
	$direcc[2] = "Yahoo";		//yahoo
	$direcc[3] = "Spotify";		//spotify
	$direcc[4] = "YouTube";	//youtube
	$direcc[5] = "Wikipedia";	//wikipedia
	$direcc[6] = "Shazam";		//shazam
	$direcc[7] = "Arduino";	//arduino
	$direcc[8] = "KickStarter";	//kickstarter
	$direcc[9] = "IEEE";
	
	for ($i=0; $i <= 19; $i++) {

		$resf = shell_exec("ping /n 1 $direccion[$i]");
		if(strpos($resf, "recibidos = 0")){
			$estado[$i] = "Error";
		
		}else{
			$estado[$i] = "Correcto";
		
		}
	}
?>
<table class = "tabla">
	<tr>
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
		<td><img src="img/RJU.png" width="80" height="80"></td>	
	</tr>
	<tr>
		<td><?php echo $direcc[0]; ?></td>
		<td><?php echo $direcc[1]; ?></td>
		<td><?php echo $direcc[2]; ?></td>
		<td><?php echo $direcc[3]; ?></td>
		<td><?php echo $direcc[4]; ?></td>
		<td><?php echo $direcc[5]; ?></td>
		<td><?php echo $direcc[6]; ?></td>
		<td><?php echo $direcc[7]; ?></td>
		<td><?php echo $direcc[8]; ?></td>
		<td><?php echo $direcc[9]; ?></td>
	</tr>
	<tr>
		<td class="<?php echo $estado[0]; ?>"><?php echo $estado[0]; ?></td>
		<td class="<?php echo $estado[1]; ?>"><?php echo $estado[1]; ?></td>
		<td class="<?php echo $estado[2]; ?>"><?php echo $estado[2]; ?></td>
		<td class="<?php echo $estado[3]; ?>"><?php echo $estado[3]; ?></td>
		<td class="<?php echo $estado[4]; ?>"><?php echo $estado[4]; ?></td>
		<td class="<?php echo $estado[5]; ?>"><?php echo $estado[5]; ?></td>
		<td class="<?php echo $estado[6]; ?>"><?php echo $estado[6]; ?></td>
		<td class="<?php echo $estado[7]; ?>"><?php echo $estado[7]; ?></td>
		<td class="<?php echo $estado[8]; ?>"><?php echo $estado[8]; ?></td>
		<td class="<?php echo $estado[9]; ?>"><?php echo $estado[9]; ?></td>		
	</tr>

	<tr>
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
		<td><img src="img/RJD.png" width="80" height="80"></td>	
	</tr>
	<tr>
		<td><?php echo $direccion[10]; ?></td>
		<td><?php echo $direccion[11]; ?></td>
		<td><?php echo $direccion[12]; ?></td>
		<td><?php echo $direccion[13]; ?></td>
		<td><?php echo $direccion[14]; ?></td>
		<td><?php echo $direccion[15]; ?></td>
		<td><?php echo $direccion[16]; ?></td>
		<td><?php echo $direccion[17]; ?></td>
		<td><?php echo $direccion[18]; ?></td>
		<td><?php echo $direccion[19]; ?></td>
	</tr>
	<tr>
		<td class="<?php echo $estado[10]; ?>"><?php echo $estado[10]; ?></td>
		<td class="<?php echo $estado[11]; ?>"><?php echo $estado[11]; ?></td>
		<td class="<?php echo $estado[12]; ?>"><?php echo $estado[12]; ?></td>
		<td class="<?php echo $estado[13]; ?>"><?php echo $estado[13]; ?></td>
		<td class="<?php echo $estado[14]; ?>"><?php echo $estado[14]; ?></td>
		<td class="<?php echo $estado[15]; ?>"><?php echo $estado[15]; ?></td>
		<td class="<?php echo $estado[16]; ?>"><?php echo $estado[16]; ?></td>
		<td class="<?php echo $estado[17]; ?>"><?php echo $estado[17]; ?></td>
		<td class="<?php echo $estado[18]; ?>"><?php echo $estado[18]; ?></td>
		<td class="<?php echo $estado[19]; ?>"><?php echo $estado[19]; ?></td>
	</tr>
	
</table>

<footer>
    <h5>Carrera de Ingenieria Electronica - Universidad Mayor de San Andres</h5>
</footer>
</body>
</html>

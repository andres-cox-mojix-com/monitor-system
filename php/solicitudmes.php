<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto 2 ETN - 921</title>
    <link type="text/css" href="../css/estilos.css" rel="stylesheet">
    <script src="../js/Chart.js"></script>
</head>
<body>
<nav>

    <ul>
    <div class="parte1">
    <li class="cab"><h3>ETN - 921 Sistema de Monitoreo</h3></li>
    </div>
    <div class= "parte2">    
        <li><a href="../index.php"> Inicio </a></li>
        <li><a href="consulta.php"> Consulta </a></li>
	<li><a href="contacto.php"> Contacto </a></li>
    </div>
    </ul>
</nav>
    <p class="textconsulta"> Realizar otra Consulta: </p>
    <form method = "post" action = "solicitudmes.php" id = "formulario">
	 <select size = "1" name = "servicio">
	   <option value = "-1" selected>Servicio</option>
	   <option value = "google">Google</option>
	   <option value = "twitter">Twitter</option>
	   <option value = "yahoo">Yahoo</option>
	   <option value = "spotify">Spotify</option>
	   <option value = "youtube">YouTube</option>
	   <option value = "wikipedia">Wikipedia</option>
	   <option value = "shazam">Shazam</option>
	   <option value = "arduino">Arduino</option>
	   <option value = "kickstarter">KickStarter</option>
	   <option value = "ieee">IEEE</option>
	  </select>	
	 <input type="month" name="fecha" id="fecha">
	 <input type = "submit" value = "Ver" id="boton">
	 </form>
<div id = "bbdd">
<?php
/* Conexion a la base de datos*/

 $servidor	="localhost";
 $usuario	="root";
 $password	="0000";
 $database	="servicios";

 $conexion = mysqli_connect($servidor,$usuario,$password);
 if(mysqli_connect_errno()){
	echo "Fallo al conectar con la base de datos";
	exit();
 } 
 mysqli_select_db($conexion,$database) or die("No se encuentra la base de datos");
 


	
	$servi = $_POST['servicio'];
	$entrada_fecha = $_POST['fecha'];

	$fecha = explode ("-",$entrada_fecha);
	$mes = (int)$fecha[1];
	$anho = (int)$fecha[0];

	if ($mes==1) {
		$nomMes= "Enero";
	}elseif ($mes==2) {
		$nomMes= "Febrero";
	}elseif ($mes==3) {
		$nomMes= "Marzo";
	}elseif ($mes==4) {
		$nomMes= "Abril";
	}elseif ($mes==5) {
		$nomMes= "Mayo";
	}elseif ($mes==6) {
		$nomMes= "Junio";
	}elseif ($mes==7) {
		$nomMes= "Julio";
	}elseif ($mes==8) {
		$nomMes= "Agosto";
	}elseif ($mes==9) {
		$nomMes= "Septiembre";
	}elseif ($mes==10) {
		$nomMes= "Octubre";
	}elseif ($mes==11) {
		$nomMes= "Noviembre";
	}else{
		$nomMes= "Diciembre";
	}
	
	
	
	echo "La grafica Dias vs Ping es del servicio ".$servi." y se muestra su comportamiento promedio por dia del mes de ". $nomMes ."<br>";

?>
</div>
<div>
			<div>
				<canvas id="canvas" width="550"></canvas>
			
</div>


	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {

			labels : [
			<?php
			$sql = "SELECT DIA, AVG (PING) AS PROMPING FROM $servi WHERE MES = $mes AND ANHO = $anho GROUP BY DIA";
		 	$result = mysqli_query($conexion,$sql);
			while($registros = mysqli_fetch_array($result))
			{
			?>
				'<?php echo $registros["DIA"]?>', 
			<?php
			}
			?>				
			],
			datasets : [
				
				{
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data :
					<?php
					$sql = "SELECT DIA, AVG (PING) AS PROMPING FROM $servi WHERE MES = $mes AND ANHO = $anho GROUP BY DIA";
				 	$resulta = mysqli_query($conexion,$sql);
					?>
					[<?php while ($regis = mysqli_fetch_array($resulta)){ ?>'<?php echo $regis["PROMPING"]?>',<?php }?>]
				}
			]


		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true

		});
	}
</script>
<?php
 mysqli_close($conexion);
?>
<footer>
    <h5>Carrera de Ingenieria Electronica - Universidad Mayor de San Andres</h5>
</footer>
</body>
</html>

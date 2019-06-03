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
    
	<form method = "post" action = "solicitud.php" id = "formulario">
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
	<input type="date" name="fecha" id="fecha" placeholder = "dia/mes/año">
	  <select size = "1" name = "hora_inicial">
	   <option value = "-1" selected>Hora Inicial</option>
	   <option value = "0">00:00</option>
	   <option value = "1">01:00</option>
	   <option value = "2">02:00</option>
	   <option value = "3">03:00</option>
	   <option value = "4">04:00</option>
	   <option value = "5">05:00</option>
	   <option value = "6">06:00</option>
	   <option value = "7">07:00</option>
	   <option value = "8">08:00</option>
	   <option value = "9">09:00</option>
	   <option value = "10">10:00</option>
	   <option value = "11">11:00</option>
	   <option value = "12">12:00</option>
	   <option value = "13">13:00</option>
	   <option value = "14">14:00</option>
	   <option value = "15">15:00</option>
	   <option value = "16">16:00</option>
	   <option value = "17">17:00</option>
	   <option value = "18">18:00</option>
	   <option value = "19">19:00</option>
	   <option value = "20">20:00</option>
	   <option value = "21">21:00</option>
	   <option value = "22">22:00</option>
	   <option value = "23">23:00</option>
	  </select>
	  <select size = "1" name = "hora_final">
	   <option value = "-1" selected>Hora Final</option>
	   <option value = "0">00:00</option>
	   <option value = "1">01:00</option>
	   <option value = "2">02:00</option>
	   <option value = "3">03:00</option>
	   <option value = "4">04:00</option>
	   <option value = "5">05:00</option>
	   <option value = "6">06:00</option>
	   <option value = "7">07:00</option>
	   <option value = "8">08:00</option>
	   <option value = "9">09:00</option>
	   <option value = "10">10:00</option>
	   <option value = "11">11:00</option>
	   <option value = "12">12:00</option>
	   <option value = "13">13:00</option>
	   <option value = "14">14:00</option>
	   <option value = "15">15:00</option>
	   <option value = "16">16:00</option>
	   <option value = "17">17:00</option>
	   <option value = "18">18:00</option>
	   <option value = "19">19:00</option>
	   <option value = "20">20:00</option>
	   <option value = "21">21:00</option>
	   <option value = "22">22:00</option>
	   <option value = "23">23:00</option>
	  </select>
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
 


	$h_ini = $_POST['hora_inicial'];
	$h_fin = $_POST['hora_final'];
	$servi = $_POST['servicio'];
	$entrada_fecha = $_POST['fecha'];

	$fecha = explode ("-",$entrada_fecha);
	$dia = $fecha[2];
	$mes = $fecha[1];
	$anho = $fecha[0];
	echo "La grafica Horas vs Ping es del servicio ".$servi." y se muestra su comportamiento de horas ".$h_ini." a horas ".$h_fin." de la fecha ". $entrada_fecha ."<br>";
	
$hora = $h_ini;
	
// visualizacion de los pings escogidos en las horas solicitadas
 for($hora=$h_ini; $hora<=$h_fin; $hora++){
	$consulta = "SELECT PING FROM $servi WHERE DIA = $dia AND HORA = $hora";
 	$resultados = mysqli_query($conexion,$consulta);
 	while($fila = mysqli_fetch_row($resultados)){
 	/*echo "<br>";
 	echo $fila[0]." ";
	// echo $fila[1]." ";
	// echo $fila[2]." ";
 	echo "<br>";*/
 	}
 }

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
			$sql = "SELECT * FROM $servi WHERE DIA = $dia AND MES = $mes AND ANHO = $anho AND HORA >= $h_ini AND HORA <= $h_fin";
		 	$result = mysqli_query($conexion,$sql);
			while($registros = mysqli_fetch_array($result))
			{
			?>
				'<?php echo $registros["HORA"]?>', 
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
					$sql = "SELECT * FROM $servi WHERE DIA = $dia AND MES = $mes AND ANHO = $anho AND HORA >= $h_ini AND HORA <= $h_fin";
				 	$resulta = mysqli_query($conexion,$sql);
					?>
					[<?php while ($regis = mysqli_fetch_array($resulta)){ ?>'<?php echo $regis["PING"]?>',<?php }?>]
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

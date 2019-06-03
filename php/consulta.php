<!--
ETN-921
GRUPO G15

integrantes:
carlos andres COX CHUQUIMIA
ronald gabriel GUTIERREZ TOLA
juan javier CALLE LINARES

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto 2 ETN - 921</title>
    <link type="text/css" href="../css/estilos.css" rel="stylesheet">
</head>
<body>
<!--Comentarios-->
<nav>

    <ul>
    <div class="parte1">
    <li class="cab"><h3>ETN - 921 Sistema de Monitoreo</h3></li>
    </div>
    <div class= "parte2">    
        <li><a href="../index.php"> Inicio </a></li>
        <li><a href="#"> Consulta </a></li>
	<li><a href="contacto.php"> Contacto </a></li>
    </div>
    </ul>
</nav>
<!--inicio-->
<section>  
    <article>
    <p class="parrafos"> Busqueda por Día:
    </article>
	<form method = "post" action = "solicitud.php" id = "formulario">
	<select size = "1" name = "servicio" class="boton">
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
	<input type="date" name="fecha" id="fecha" placeholder = "dia/mes/año" >
	  <select size = "1" name = "hora_inicial" class="boton">
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
	  <select size = "1" name = "hora_final" class="boton">
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
	
	<article>
    <p class="parrafos"> Busqueda por Mes:
    </article>
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


</section>
<footer>
    <h5>Carrera de Ingenieria Electronica - Universidad Mayor de San Andres</h5>
</footer>
</body>
</html>

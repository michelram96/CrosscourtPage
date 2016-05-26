<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title> Cross Court Official Site </title>
<link rel="stylesheet" type="text/css" href="cross.css">
<script>

</script>
</head>
</html>

<html>
<body class="body">

<div class="header">
<table style="width:102%">
<tr>
<th>
<img class="icons" src="usa flag.png">
<img class="icons" src="mexico flag.png">
</th>
<th>
<img class="header" src="Cross Court Banner.png">
</th>
<th>
<button class="button login" value="Ingresar"onclick="location.href='ingreso_cc.php';"> Ingresar </button>
<button class="button sign" value="Registro" onclick="location.href='registro_cc.php';"> Registro</button>
</tr>
</table>
</div>

<div>
<ul>
<li  class="menu"> <a class="menu" href="news_es.html"> Noticias </a> </li>
<li class="menu"> <a class="menu" href="rank_es.php"> Rankings </a> </li>
<li  class="menu"> <a class="menu" href="gs_es.html"> Grand Slams </a> </li>
</ul>
<br><br><br><br><br>

<center>
<div>
<form action="result.php" method="post">
<h1 style="font-family:coolvetica; font-size:30px;color:white">
Seleccione un rango de clasificación   </h1>
<select id="form" name="busqueda">
<option value="1"> 1-5</option>
<option value="2"> 6-10</option>
<option value="3"> 11-15</option>
<option value="4"> Todos los Jugadores</option>
</select>

<input type="submit" value="Buscar" onclick="val=buscar()">
</form>

</div>
</center>
<?php
$var=$_POST['busqueda'];
$db=mysqli_connect ("localhost","root","");
$mydb=mysqli_select_db($db,"crosscourt");
if($var==1)

$sql="select ranking,pais,nombre,edad,puntos from jugadores where ranking>=1 and ranking<=5;";

if($var==2)

$sql="select ranking,pais,nombre,edad,puntos from jugadores where ranking>=6 and ranking<=10;";

if($var==3)

$sql="select ranking,pais,nombre,edad,puntos from jugadores where ranking>=11 and ranking<=15;";

if($var==4)

$sql="select ranking,pais,nombre,edad,puntos from jugadores;";

$result=mysqli_query($db,$sql);
?>
<center>
<table class="query">
	<tr> <th class="query"> Ranking</th> <th class="query"> Pais</th> <th class="query"> Nombre </th> <th class="query"> Edad</th> <th class="query"> Puntos </th> </tr>
<?php
while($row=mysqli_fetch_array($result))
{
	?>
	<center>
	
	<tr>
		<td class="query"><?php echo $row["ranking"];?></td>
     	<td class="query"><?php echo $row["pais"];?></td>
		<td class="query"><?php echo $row["nombre"];?></td>
     	<td class="query"><?php echo $row["edad"];?></td>
     	<td class="query"><?php echo $row["puntos"];?></td>
    </tr>
	</center>

<?php
}
?>
</table>



</html>
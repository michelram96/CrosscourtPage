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
<button class="button login" value="Ingresar"onclick="location.href='ingreso_cc_en.php';"> Login </button>
<button class="button sign" value="Registro" onclick="location.href='registro_cc_en.php';"> Register</button>
</tr>
</table>
</div>

<div>
<ul>
<li  class="menu"> <a class="menu" href="news_es_en.html"> News </a> </li>
<li class="menu"> <a class="menu" href="rank_es_en.php"> Rankings </a> </li>
<li  class="menu"> <a class="menu" href="gs_es_en.html"> Grand Slams </a> </li>
</ul>
<br><br><br><br><br>

<center>
<div>
<form action="result_en.php" method="post">
<h1 style="font-family:coolvetica; font-size:30px;color:white">
Choose a range of rankings   </h1>
<select id="form" name="busqueda">
<option value="1"> 1-5</option>
<option value="2"> 6-10</option>
<option value="3"> 11-15</option>
<option value="4"> All players</option>
</select>

<input type="submit" value="Search" onclick="val=buscar()">
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
	<tr> <th class="query"> Ranking</th> <th class="query"> Country</th> <th class="query"> Name </th> <th class="query"> Age</th> <th class="query"> Points </th> </tr>
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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title> Cross Court Official Site </title>
<link rel="stylesheet" type="text/css" href="cross.css">

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
<h1 class="header"> Welcome! </h1>

</tr>
</table>
</div>

<div>
<ul>
<li  class="menu"> <a class="menu" href="news_es_admin_en.php"> News </a> </li>
<li class="menu"> <a class="menu" href="rank_es_admin_en.php"> Rankings </a> </li>
<li  class="menu"> <a class="menu" href="gs_es_admin_en.html"> Grand Slams </a> </li>
</ul>
<br><br><br><br><br>
<?php
$nombre=$_POST['nombre'];
$pais=$_POST['pais'];
$edad=$_POST['edad'];
$puntos=$_POST['puntos'];

$db=mysqli_connect ("localhost","root","");
$mydb=mysqli_select_db($db,"crosscourt");
$sql="insert into jugadores (pais,nombre,edad,puntos) values ('$pais','$nombre','$edad','$puntos');";
$result=mysqli_query($db,$sql);
?>
<h1 class="registro"> Player Registered! </h1>
</html>
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
<?php
$user=$_POST['usuario'];
$pass=$_POST['pass'];
$db=mysqli_connect ("localhost","root","");
$mydb=mysqli_select_db($db,"crosscourt");
$sql="select Usuario,Contrasena from cuentas where Usuario='$user' and Contrasena='$pass'";
$result=mysqli_query($db,$sql);
if(mysqli_fetch_row($result))
{
	?> <h1 class="registro"> Ingreso exitoso! </h1> <br>
	   <center> <button class="button login" onclick="location.href='index_es_admin.php';"> Ir a pagina como administrador </button>
	   </center>
	<?php
}
else
{
	?> <h1 class="registro"> Ingreso fallido! Inténtelo de nuevo </h1> 
	<?php
}
	?>
</html>
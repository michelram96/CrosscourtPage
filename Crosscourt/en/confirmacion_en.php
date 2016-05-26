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
<?php
$user=$_POST['usuario'];
$pass=$_POST['pass'];
$edad=$_POST['edad'];
$pais=$_POST['pais'];

$db=mysqli_connect ("localhost","root","");
$mydb=mysqli_select_db($db,"crosscourt");
$sql="insert into cuentas (Usuario,Contrasena,Edad,Pais) values ('$user','$pass','$edad','$pais');";
$result=mysqli_query($db,$sql);
?>
<h1 class="registro"> User Registered! </h1>
</html>
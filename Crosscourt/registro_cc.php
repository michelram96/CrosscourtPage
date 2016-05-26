<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title> Cross Court Official Site </title>
<link rel="stylesheet" type="text/css" href="cross.css">

</head>
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
</th>
</tr>
</table>
</div>

<div>
<ul>
<li  class="menu"> <a class="menu" href="news_es.html"> Noticias </a> </li>
<li class="menu"> <a class="menu" href="rank_es.php"> Rankings </a> </li>
<li  class="menu"> <a class="menu" href="gs_es.html"> Grand Slams </a> </li>
</ul>
</div>
<br><br><br><br><br>
<h1 class="registro"> Ingresa tus datos para crear tu cuenta </h1>
<center>
<div class="registro">
<form action="confirmacion.php" method="post">
<h2 class="registro">Nombre de usuario </h2>
<input type="text" name="usuario">
<h2 class="registro">Contraseña </h2>
<input type="text" name="pass">
<h2 class="registro">Edad </h2>
<input type="text" name="edad">
<h2 class="registro">Pais </h2>
<input type="text" name="pais"><br>
<input type="submit" value="Completar Registro">
</form>
</div>
</center>
</html>
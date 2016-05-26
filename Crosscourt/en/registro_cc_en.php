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
<button class="button login" value="Ingresar"onclick="location.href='ingreso_cc_en.php';"> Login </button>
<button class="button sign" value="Registro" onclick="location.href='registro_cc_en.php';"> Register</button>
</th>
</tr>
</table>
</div>

<div>
<ul>
<li  class="menu"> <a class="menu" href="news_es_en.html"> News </a> </li>
<li class="menu"> <a class="menu" href="rank_es_en.php"> Rankings </a> </li>
<li  class="menu"> <a class="menu" href="gs_es_en.html"> Grand Slams </a> </li>
</ul>
</div>
<br><br><br><br><br>
<h1 class="registro"> Fill in with your data to create your account </h1>
<center>
<div class="registro">
<form action="confirmacion_en.php" method="post">
<h2 class="registro">Username </h2>
<input type="text" name="usuario">
<h2 class="registro">Password </h2>
<input type="text" name="pass">
<h2 class="registro">Age </h2>
<input type="text" name="edad">
<h2 class="registro">Country </h2>
<input type="text" name="pais"><br>
<input type="submit" value="Complete Register">
</form>
</div>
</center>
</html>
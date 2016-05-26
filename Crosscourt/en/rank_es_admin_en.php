<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title> Cross Court Official Site </title>
<link rel="stylesheet" type="text/css" href="cross.css">
<script>
var val;
function buscar()
{
	var e = document.getElementById("form");
	var f = e.options[e.selectedIndex].value;
	return f;
}
</script>
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
</div>
<br><br><br><br><br>
<center>
<div>
<form action="result_admin_en.php" method="post">
<h1 style="font-family:coolvetica; font-size:30px;color:white">
Choose a range of rankings   </h1>
<select id="form" name="busqueda">
<option value="1"> 1-5</option>
<option value="2"> 6-10</option>
<option value="3"> 11-15</option>
<option value="4">All players</option>
</select>

<input type="submit" value="Search" onclick="val=buscar()">
</form> <br>
<button class="button login" onclick="location.href='addplayer_en.php';"> Register Player</button>

</div>
</center>

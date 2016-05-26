<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title> Cross Court Official Site </title>
<link rel="stylesheet" type="text/css" href="cross.css">
<script>

function transition()
{
	d.style.opacity="1";
	c.style.opacity="0";
	b.style.opacity="0";
	a.style.opacity="1";
	e.style.opacity="0";
	f.style.opacity="0";
}
function transition2()
{
	d.style.opacity="0";
	c.style.opacity="1";
	b.style.opacity="1";
	a.style.opacity="0";
	e.style.opacity="0";
	f.style.opacity="0";
}
function transition3()
{
	d.style.opacity="0";
	c.style.opacity="0";
	b.style.opacity="0";
	a.style.opacity="0";
	e.style.opacity="1";
	f.style.opacity="1";
}
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
<h1 class="header"> Bienvenido! </h1>
</th>
</tr>
</table>
</div>

<div>
<ul>
<li  class="menu"> <a class="menu" href="news_es_admin.php"> Noticias </a> </li>
<li class="menu"> <a class="menu" href="rank_es_admin.php"> Rankings </a> </li>
<li  class="menu"> <a class="menu" href="gs_es_admin.html"> Grand Slams </a> </li>
</ul>
<br><br><br><br><br>
<div class="news">
<form><center>
 <input type="image" id="b" align="center" class="news" src="murray roland garros.jpg" alt="Andy Murray" width="800px" style="border:5px solid white;width:50%;position:absolute;top:600px">

<input class="news"  id="a" align="center" type="image" src="nadal roland garros.jpg" alt="Rafa Nadal" width="800px" style="border:5px solid white;opacity:0;top:600px;width:50%">

<h2 class="news" id="c"> Murray Avanza en 5 Sets </h2></center>
<h2 class="news" id="d" style="opacity:0"> "En este torneo lo que importa<br> es seguir avanzando" </h2></center>
</form>
</div>



<div style="text-align:center">
<button class="news" onclick="transition2()" ondblclick="location.href='andy_rg_news_admin.html';"> </button>
<div class="divider"/>
<button class="news" onclick="transition()"ondblclick="location.href='rafa_rg_news_admin.html';"> </button> 
</div>

</body>
</html>
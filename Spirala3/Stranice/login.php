<!doctype html>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
<TITLE>accessories</TITLE>
<SCRIPT src="../Skripte/datumi.js"></SCRIPT>
<SCRIPT src="filtriranjeNovosti.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="../accessoriesStil.css">

</head>

<body>
<?php

$var=file('../Csv/podaci.csv')
?>
<span id="accessoriesLogo">accessories</span>
<div id="nav">
<ul>
   <li><a class="active" href="accessories.php" target="_self">Novosti</a></li>
  <li><a href="proizvodi.php" target="_self">Proizvodi</a></li>
  <li><a href="kontakt.php" target="_self">Kontakt</a></li>
  <li><a href="oNama.php" target="_self">O nama</a></li>
  <li id="login"><a href="login.php" target="_self">Login</a></li>
</ul>
</div>
<div id="OkvirForme">
<div id="NaslovForme">LOGIN
</div>
<div id="Forma">
<form name="forma" action="login.php" method="post">
<label>Username</label><br><input type="text" name="username" >
<br>
<label>Password</label><br><input type="password" name="password">
<br>
<br>
<input type="submit" class="button" value="Login" onclick="Provjeri(this)">
</form>
</div>
</div>
</body>
</html>
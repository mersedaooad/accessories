<!doctype html>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>accessories</TITLE>
<link rel="stylesheet" type="text/css" href="../accessoriesStil.css">
<SCRIPT src="validacija.js"></SCRIPT>
</head>

<body>
<?php



  if(isset($_POST['logout']))
  {
    $_SESSION["isLogged"] = false;
    session_unset();
    header("Location: login.php");

  }

?> 
<?php
if(isset($_FILES["fileToUpload"]["name"]))
  {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
  }
?>
<span id="accessoriesLogo">accessories</span>
<div id="nav">
<ul>
  <li><a class="active" href="accessories.php" target="_self">Novosti</a></li>
  <li><a href="proizvodi.php" target="_self">Proizvodi</a></li>
  <li><a href="kontakt.php" target="_self">Kontakt</a></li>
  <li><a href="oNama.php" target="_self">O nama</a></li>
   <li id="login"><a href="login.php" target="_self">Login</a></li>
   <li id="novosti"><a href="novosti.php" target="_self"></a></li>
   <input type="submit" class="logout" value="Logout" name="logout">
</ul>
</div>
<div id="OkvirForme">
<div id="NaslovForme">Kreiraj novost
</div>
<div id="Forma">
<form name="forma">
<input id="txtNovosti" type="text" name="naslov" placeholder="naslov"><br>
<input id="txtNovosti" type="text" name="text" placeholder="novost"><br>
<input id="txtNovosti" type="file" name="fileToUpload"><br>
<input id="btnKreirajNovost"type="submit" class="button" value="Kreiraj" name="kreiraj">
</form>
</div>
</div>
</body>
</html>
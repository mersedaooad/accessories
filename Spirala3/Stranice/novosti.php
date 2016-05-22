<!doctype html>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>accessories</TITLE>
<link rel="stylesheet" type="text/css" href="../accessoriesStil.css">
<SCRIPT src="../Skripte/validacija.js"></SCRIPT>
</head>

<body>
<? php
        $naslov = "aaa";
        $text = $_POST['naslov'];
      date_default_timezone_set("Europe/Sarajevo");
      $datum = date("M d, Y H:i:s");

      $proba=fopen("../Csv/novosti.csv", "a");
      $upisi = $datum . "%" . $naslov . "%" . $text . "\r\n";
      fwrite($proba, $upisi);
      fclose($proba);

      if (isset($_POST['kreiraj']) && !empty($_POST['text']) && !empty($_POST['naslov'])) 
      {
        $naslov = htmlspecialchars($_POST["naslov"]["name"]);
        $text = htmlspecialchars($_POST["text"]["name"]);
      }

      $upis=fopen("../Csv/novosti.csv", "a");
      $podaciZaUpisati = $datum . "%" . $naslov . "%" . $text . "\r\n";

      fwrite($upis, $podaciZaUpisati);
      fclose($upis);

  if(isset($_POST['logout']))
  {
    $_SESSION["isLogged"] = false;
    session_unset();
    header("Location: login.php");

  }
?> 
<? php
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
  <li ><input type="submit" class="logout" value="Logout" name="logout"></li>
</ul>

</div>
<div id="OkvirForme">
<div id="NaslovForme">Kreiraj novost
</div>
<div id="Forma">
<form name="forma">
<input class="txtNovosti" type="text" name="naslov" placeholder="naslov"><br>
<input class="txtNovosti" type="text" name="text" placeholder="novost"><br>
<input class="txtNovosti" type="file" name="fileToUpload"><br>
<input id="btnKreirajNovost" type="submit" class="button" value="Kreiraj" name="kreiraj">
</form>
</div>
</div>
</body>
</html>
<?php
// Start the session
session_start();
?>
<!doctype html>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>accessories</TITLE>
<SCRIPT src="../Skripte/datumi.js"></SCRIPT>
<SCRIPT src="../Skripte/filtriranjeNovosti.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="../accessoriesStil.css">

</head>

<body>
<?php
session_start();
	if($_SESSION["isLogged"] != true)
	{
		header("Location: login.php");
	}
  if(isset($_POST['logout']))
  {
    $_SESSION["isLogged"] = false;
    session_unset();
	session_destroy();
    header("Location: login.php");
  }
/*$var=file('../Csv/podaci.csv')*/
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
<li ><form action='accessories.php' method="POST"><input type="submit" class="logout" value="Logout" name="logout"></form></li></ul>

<!-- <div id="novosti">
<ul>
 <li>Danasnje novosti</li>
 <li>Novosti ove sedmice</li>
 <li>Novosti ovog mjeseca</li>
 <li>Sve novosti</li>
</ul>

</div> -->

			<select id="listaNovosti" onclick=""FiltrirajNovosti(this)">
				<option value="sve">Sve novosti</option>
				<option value="danasnje" id="n1">Danasnje novosti</option>
				<option value="sedmicne" id="n2">Novosti ove sedmice</option>
				<option value="mjesecne" id="n3">Novosti ovog mjeseca</option>
			</select>
<div class="paragrafJedan">

<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
		<img src="../Slike/Rose.jpg" alt="rose"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
			 <p class="obavijest"><time class="vrijemeObjave" datetime="2016-04-3 14:23:00"></time>.</p>
	
	</li>	
</ul>
</div>

<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
		<img src="../Slike/set3.jpg" alt="set3"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		<p class="obavijest"><time class="vrijemeObjave" datetime="2016-04-03 11:27:00"></time>.</p>
	</li>

</ul>
</div>


<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>

		<img src="../Slike/set4.jpg" alt="set4"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
						 <p class="obavijest"><time class="vrijemeObjave" datetime="2016-04-03 09:29:00"></time>.</p>

	</li>

	
</ul>
</div>

<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
			

		<img src="../Slike/set5.jpg" alt="set5"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		 <p class="obavijest"><time class="vrijemeObjave" datetime="2016-04-02 13:30:00"></time>.</p>
	</li>

</ul>
</div>


<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>

		<img src="../Slike/set3.jpg" alt="set3"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
					<p class="obavijest"><time class="vrijemeObjave" datetime="2016-03-20 11:29:00"></time>.</p>
	</li>

	
</ul>
</div>
<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
			

		<img src="../Slike/set5.jpg" alt="set5"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		<p class="obavijest"><time class="vrijemeObjave" datetime="2016-02-03 13:30:00"></time>.</p>
	</li>

</ul>
</div>


<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>

		<img src="../Slike/set3.jpg" alt="set3"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
					 <p class="obavijest"><time class="vrijemeObjave" datetime="2016-03-10 11:29:00"></time>.</p>
	</li>

	
</ul>
</div>
<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
			

		<img src="../Slike/set5.jpg" alt="set5"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		<p class="obavijest"><time class="vrijemeObjave" datetime="2016-03-19 13:30:00"></time>.</p>
	</li>

</ul>
</div>


<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>

		<img src="../Slike/set3.jpg" alt="set3"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
					<p class="obavijest"><time class="vrijemeObjave" datetime="2016-03-14 11:29:00"></time>.</p>
	</li>

	
</ul>
</div>
<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
			

		<img src="../Slike/set5.jpg" alt="set5"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		<p class="obavijest"><time class="vrijemeObjave" datetime="2016-01-03 13:30:00"></time>.</p>
	</li>

</ul>
</div>


<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>

		<img src="../Slike/set3.jpg" alt="set3"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
					<p class="obavijest"><time class="vrijemeObjave" datetime="2016-03-15 11:29:00"></time>.</p>
	</li>

	
</ul>
</div>
<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
			

		<img src="../Slike/set5.jpg" alt="set5"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		<p class="obavijest"><time class="vrijemeObjave" datetime="2016-04-03 13:30:00"></time>.</p>
	</li>

</ul>
</div>


<div class="lijevaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>

		<img src="../Slike/set3.jpg" alt="set3"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
					<p class="obavijest"><time class="vrijemeObjave" datetime="2016-03-29 11:29:00"></time>.</p>
	</li>

	
</ul>
</div>

<div class="desnaKolona">
<ul>
	<li>
		<h1 class="naslov">"Kljucni komadi svakog looka za proljece 2016"</h1>
			
		<img src="../Slike/set2.jpg" alt="set2"/>
		<p>Svaka sezona ima svoje kljucne komade kada govorimo o odjeci i asesoaru. Komadi su to koji pokazuju da pratite modne trendove i znate što je IN. Naš je prijedlog da upravo te kljucne komade sezone uklopite u svoj vec izgradeni stil i kombinirate u svojim svakodnevnim odjevnim kombinacijama </p>
		 
	</li>

</ul>
</div>
</div>
</div>

</body>
</html>
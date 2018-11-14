<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Kalorivisa</title>
	<meta content="Kalorivisa" name="description">
	<meta content="Sami Sipilä" name="author">
	<meta content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" name="viewport">
	<link href="css/style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
</head>

<body onload="init()">
	<script>
	   function init()
	   {
	   var pisteet = Number(localStorage.getItem("Pisteet"));
	   if(pisteet < 5)
		   {
			   document.getElementById("onnittelu").innerHTML = "Voi voi, sait vain " + pisteet +  "/10 pistettä. Kannattaa pitää silmällä ravintosisältöjä.";
		   }
	   else if (pisteet < 10)
	   {
					   document.getElementById("onnittelu").innerHTML = "Onneksi olkoon! Sait " + pisteet + "/10 pistettä. Olet hyvin perillä ruokien ravintosisällöistä.";
	   }
	   else
	   {
					   document.getElementById("onnittelu").innerHTML = "Vau! Sait " + pisteet + "/10 pistettä. Olet oikea mestari!";
	   }
	   
	   
	   }
	</script>

	<div class="header">
		<img alt="Haaga-Helia logo" class="logo" src="kuvat/hh_tunnus_rgb_300dpi.png">

		<h1 class="title">KaloriVisa</h1>
	</div>


	<div class="container">
		<div class="loppu">
			<div id="onnittelu">
				onneksi olkoon sait x pistettä
			</div>


			<section id="teksti2">
				Jätä yhteystietosi niin osallistut Olo-ravintolan kahden hengen lounaan arvontaan.

				<form id="my_form" action="thankyou.php" method="post">
					Nimi: <input name="u_name" type="text"><br>
					Email: <input name="u_email" type="email"><br>
					Puhelinnumero: <input name="tel" type="tel"><br>
					<input name="uutiskirje" type="checkbox" value="kylla">Haluan tilata Haaga-Helian uutiskirjeen.<br>
					<input name="yhteydenotto" type="checkbox" value="kylla">Haluan, että minuun otetaan yhteyttä.<br>
					Viesti: <input name="message" type="text"><br>
					
								<section class="pieni">
				Arvonta päättyy 18.3.2016. Ilmoitamme voittajalle henkilökohtaisesti.
			</section>
					<a class="button" href="#" onclick="document.getElementById('my_form').submit(); return false">Valmis</a>
				</form>
			</section>
			<br>



		</div>
	</div>
</body>
</html>
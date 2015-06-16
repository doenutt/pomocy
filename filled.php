<!DOCTYPE html>
<html>

	<head>
		<title>Formularz PHP - wynik</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	
		<p class="filled">
			
			Cześć <span id="imie"><?php echo $_POST['imie']; ?></span>, masz 
			<span id="wiek"><?php echo $_POST['wiek']; ?></span> lat, a Twoje hobby to
			<span id="zainteresowania"> <?php echo $_POST['zainteresowania']; ?>. </span>
			Te strony mogą Cię zainteresować: 
			<div>
				<?php
					if(file_exists('./inc/'.$_POST['zainteresowania'].'.html')){
					include('./inc/'.$_POST['zainteresowania'].'.html');
				} ?> 
			</div>
		</p>
		
	
		
	</body>
</html>

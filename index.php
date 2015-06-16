<!DOCTYPE html>

<html>
	<head>
		<title>PHP Form</title>
		<meta charset="utf-8" />
		<meta name="Author" content="Dupek" />

		<link rel="stylesheet" type="text/css" href="css/style.css" />

	</head>
	<body>
		<div id="content">
			<h4 id="header">Wypełnij pola:</h4>
			<form action="filled.php" method="POST">
				<div class="element">
					<label for="imie">Imie: </label>
					<input type="text" id="imie" name="imie" />
				</div>
				<div class="element">
					<label for="wiek">Wiek: </label>
					<input type="number" id="wiek" name="wiek" />
				</div>
				<div class="element">
					<label for="zainteresowania">Twoje hobby: </label>
			<select name="zainteresowania" required="required">
			<option value="pilkanozna">piłka nożna</option>
			<option value="siatkowka">siatkówka</option>
			<option value="tenis">tenis</option>
			</select>
				</div>
				<input type="submit" value="Wyślij" />
 			</form>
		</div>
	</body>
</html>

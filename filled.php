<!DOCTYPE html>
<html>

	<head>
		<title>PHP Form - Filled</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<p class="filled">
			Witaj <span id="username"><?php echo $_POST['username']; ?></span>, znany w sieci jako
			<span id="nick"><?php echo $_POST['nick']; ?></span>
			<span id="email">[ <?php echo $_POST['email']; ?> ]</span>
		</p>
	</body>
</html>

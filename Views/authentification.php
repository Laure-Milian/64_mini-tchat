<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page d'authentification pour mini tchat</title>
</head>
<body>
	<div class="container">
		<form action="/index.php?page=tchatroom" method="post">
			<div>
				<label for="pseudo">Saisir votre pseudo : </label>
			</div>
			<div>
				<input id="pseudo" name="pseudo" type="text" value="BG31">
			</div>
			<div>
			<input class="ui teal button" type="submit" value="Accéder à la salle de tchat">
			</div>
		</form>
	</div>
	
</body>
</html>
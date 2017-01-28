<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CaraMessenger</title>
</head>
<body>
	<div class="container">
		<div class="ui comments">
			<h3 class="ui dividing header">Bonjour, <?= $room->getPseudo(); ?></h3>
			<div class="messages">
				<?php foreach ($room->getAllEntries() as $entry): ?>
					<div class="ui comments">
						<div class="comment">
							<div class="content">
								<a class="author"><?= $entry->pseudo ?></a>
								<div class="metadata">
									<span class="date"><?= $entry->date ?></span>
								</div>
								<div class="text">
									<?= $entry->message ?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<form action="/index.php?page=tchatroom" method="post">
				<input type="hidden" name="pseudo" value="<?=$room->getPseudo()?>">
				<div>
					<label for="message">Saisir votre message : </label>
				</div>
				<div class="field">
					<textarea name="message" id="message" cols="90" rows="5"></textarea>
				</div>
				<div>
					<input class="ui fluid button" type="submit" value="Envoyer">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
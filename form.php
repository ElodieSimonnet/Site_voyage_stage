<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Voyageurs du monde - Me contacter</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/mise-en-page.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
	</head>
    <?php include ('header.php'); ?>
	<body>
		<p> Si vous avez une question, vous pouvez me contacter en remplissant ce formulaire, par mail ou sur les réseaux sociaux. </p>
		<div id="carte_blanche">
			<div id="photo">
				<img src="img/carte.png" alt="photo paysage">
			</div>
			<div class="trait">
			</div>
			<div id="formulaire">
				<form> 
					<h1>Formulaire de contact</h1> 
					<div id="case"> 
    					<label for="name">Votre nom:</label>
    					<input type="text" required id="name" name="user_name">
						<label for="mail">Votre e-mail:</label>
						<input type="text" required id="mail" name="user_mail">
      					<label for="objet">Objet:</label>
    					<input type="text" id="objet" name="objet">
						<label for="msg">Votre message:</label>
        				<textarea id="msg" name="user_message"></textarea>
        			</div>
					<div id="bouton">
    					<button type="submit">ENVOYER</button>
            		</div>
    			</form>
    			<div id="timbre_blanc">
    				<img src="img/timbre.png" alt="timbre décoratif">	
    			</div>
    		</div>
		</div>
	</body>
    <?php include ('footer.php'); ?>
</html>
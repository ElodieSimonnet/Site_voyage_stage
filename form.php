<!DOCTYPE html>
<html>
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
				<img src="img/carte.png">
			</div>
			<div class="trait"></div>

			
			<div id="formulaire">
			<form> 

				<legend>Formulaire de contact</legend> 

  				<article id="case"> 
    				<label for="name">Votre nom:</label>
    				<input type="text" id="name" name="user_name" >

    				<label for="mail">Votre e-mail:</label>
    				<input type="text" required id="mail" name="user_mail" >

    				<label for="objet">Objet:</label>
    				<input type="text" name="objet" id="objet">

    				<label for="msg">Votre message:</label>
        			<textarea id="msg" name="user_message"></textarea>
        		</article>

        		<article>
    				<button type="submit">ENVOYER</button>
            	</article>
    		</form>
    		<div id="timbre_blanc">
    		<img src="img/timbre.png">	
    		</div>
    		</div>

		</div>

	</body>
    <?php include ('footer.php'); ?>
</html>
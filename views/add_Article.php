<!DOCTYPE html>
<html lang="fr">
    <head>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="../../blog_ecrivain/public/css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
    <body>
		<h1>Mon blog</h1>
		
		<div>
		    <form method="POST" action="Insert.php">
		        <label for="title">Titre</label><br>
		        <input type="text" id="title" name="title"><br>
		        <label for="content">Contenu</label><br>
		        <textarea id="content" name="content"></textarea><br>
		        <label for="author">Auteur</label><br>
		        <input type="text" id="author" name="author"><br>
		        <input type="submit" value="Envoyer" id="submit" name="submit">
		    </form>

		    <a href="home.php">Retour à l'acceil</a>
		</div>

	</body>
</html>
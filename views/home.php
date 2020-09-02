<?php
//On inclut le fichier dont on a besoin (ici à la racine de notre site)
require '../src/DAO/DAO.php';

//On ajouter le fichier Article.php
require '../src/DAO/ArticleDAO.php';

//comment ajouter un article 

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Blog Jean Forteroche</title>
    </head>
    <body>
        <?php include("header.php"); ?>
        
        <div id="bloc_page">  
            <!--on recupére tous nos article-->
            <?php
            $article = new ArticleDAO();
            $articles = $article->getArticles();
            while($article = $articles->fetch())
            {
                
            ?>
            <div><!--Lorsqu'on click sur le titre de l'article ca nous affiche l'article complet sur une page-->
                <h2><a href="single.php?articleId=<?= htmlspecialchars($article['id']);?>"><?= htmlspecialchars($article['title']);?></a></h2>
                <p><?= htmlspecialchars($article['content']);?></p>
                <p><?= htmlspecialchars($article['author']);?></p>
                <p>Créé le : <?= htmlspecialchars($article['createdAt']);?></p>
            </div>
            <br>
            <?php
            }
            $articles->closeCursor();
            ?>
        </div>
        <div>
            <h2><a href="add_article.php">Ajouter un article</a></h2>
            
        </div>
        
    </body>
</html>

<?php
    //On inclut le fichier dont on a besoin (ici à la racine de notre site)
    require '../src/DAO/DAO.php';
    
    //On ajouter le fichier Article.php
    require '../src/DAO/ArticleDAO.php';
 
    //On ajouter le fichier Comment.php
    require '../src/DAO/CommentDAO.php';
    
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon blog</title>
    </head>

    <body>
        <a href="../public/index.php">Retour à l'accueil</a>
        <?php include("header.php"); ?>
        <?php
            //On recupere l'articles qu'on veut afficher grace l'attribut (GET)
            $article = new ArticleDAO();
            $articles = $article->getArticle($_GET['articleId']);
            $article = $articles->fetch()
        ?>
                <!--On recupere les information de article-->
        <div>
            <h2><?= htmlspecialchars($article['title']);?></h2>
            <p><?= htmlspecialchars($article['content']);?></p>
            <p><?= htmlspecialchars($article['author']);?></p>
            <p>Créé le : <?= htmlspecialchars($article['createdAt']);?></p>
        </div>
            <br>
            <?php
                $articles->closeCursor();
            ?>
                <a href="home.php">Retour à l'acceil</a>
                <div id="comments" class="text-left" style="margin-left: 50px">
                    <h3>Commentaires</h3>
            <?php
                // On récupérer tous les commentaires associés à l'article
                $comment = new CommentDAO();
                $comments = $comment->getCommentsFromArticle($_GET['articleId']);
                //on recupere les informations de commentaire
                while($comment = $comments->fetch())
                {
            ?>
                <h4><?= htmlspecialchars($comment['pseudo']);?></h4>
                <p><?= htmlspecialchars($comment['content']);?></p>
                <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
            <?php
            }
                $comments->closeCursor();
            ?>
        </div>
         
    </body>
</html>
 <?php
class ArticleDAO extends DAO
{
    public function getArticles()
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC';
        return $this->createQuery($sql);
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM article WHERE id = ?';
        return $this->createQuery($sql, [$articleId]);
    }

    public function add_Article($article)
    {
        //Permet de récupérer les variables $title, $content et $author
        extract($article);
        $sql = 'INSERT INTO article (title, content, author, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$title, $content, $author]);
    }
}
?>
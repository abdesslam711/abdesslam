
<?php


	if (isset($_POST["title"], $_POST["content"], $_POST["author"]) && !empty($_POST["title"]) && !empty($_POST["content"]) && !empty($_POST["author"]) )
	{
		$title = htmlspecialchars(addslashes($_POST["title"]));
		$content = htmlspecialchars(addslashes($_POST["content"]));
		$author = htmlspecialchars(addslashes($_POST["author"]));

		$db = new PDO('mysql:host=localhost;dbname=blog_ecrivain','root','');
		$sql = "INSERT INTO article (title, content, author) VALUES (:title, :content, :author )";

		$request = $db->prepare($sql);
		$request->bindParam(':title', $title);
		$request->bindParam(':content', $content);
		$request->bindParam(':author', $author);
		$request->execute();
		header("location:add_Article.php");
		
	}

?>

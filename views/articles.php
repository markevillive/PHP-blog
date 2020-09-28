<!DOCTYPE html>
<html lang="en">
<head>
    <title>Мой первый блог </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h1 class="navbar-brand">Мой первый блог.</h1>
</nav>

    <div>
    <?php foreach($articles as $a): ?>
        <div class="article">
            <h2><a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a></h2>
            <em><em> Опубликовано: <?=$a['date']?> </em></em>
            <p><?=$a['content']?></p>
        </div><!-----------------------------END ARTICLE----------------------------------->
        <?php endforeach; ?>
    </div>
<footer>
    <h6>Мой первый блог</h6>
    <p>&copy; Marc Shreder 2020.</p>
</footer>
</div><!-----------------------------------------------------END CONTAINER------------------------------------------------------------->

</html>

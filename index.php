<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tytuł</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="blog">

    <?php
    include 'library.php';

    $model = new Articles();
    foreach($model->getArticles() as $row):
        ?>
        <div>
            <p><?= $row['created_at']; ?></p>
            <h2><?= $row['title']; ?></h2>
            <p><?= $row['author']; ?></p>
            <p><?= $row['content']; ?></p>
            <hr>
        </div>

    <?php endforeach; ?>
</div>
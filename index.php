<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tytuł</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="blog">
                        
<?php 

$con = mysqli_connect("localhost","root","1234","articlesdb");

$query = "SELECT * FROM articles ";
$query_run = mysqli_query($con, $query);

                                    
foreach($query_run as $row)
{
?>
<div>
    <p><?php echo $row['created_at']; ?></p>
    <h2><?php echo $row['title']; ?></h2>
    <p><?php echo $row['author']; ?></p>
    <p><?php echo $row['content']; ?></p>
    <hr>
</div>

<?php
}
?>
</div>
                    

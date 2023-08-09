<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tytuł</title>
<style>
.blog {
    text-align: center;
}
    </style>
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
                                            
<?php echo "<p class=\"id\">" . $row['id'] . "</p>"; ?>
<?php echo "<p class=\"created_at\">" . $row['created_at'] . "</p>"; ?>
<?php echo "<h2>" . $row['title'] . "</h2>";?>
<?php echo "<span class=\"content\">" . $row['content'] . "</span>"; ?><br>
<?php echo "<span class=\"author\">" . $row['author'] . "</span>"; ?>
<hr>

<?php
}
?>
</div>
                    

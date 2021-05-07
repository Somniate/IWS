<?php
include_once('./config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM articles LEFT JOIN categories ON articles.category_article = categories.id_category WHERE id_article = $id"; //select query
$result = $mysqli->query($sql);
$article = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <style>
        /* css here */
    </style>
</head>

<body>

    <div class="container">
        <!-- title -->
        <h2><?php echo $article['title_article'] ?></h2> 
        <!-- category -->
        <p><?php echo $article['name_category'] ?></p>
        <!-- date created -->
        <p><?php echo $article['date_article'] ?></p>
        <!-- author -->
        <p>created by <?php echo $article['author_article'] ?></p>
        <!-- intro -->
        <p><?php echo $article['intro_article'] ?></p>
        <!-- content -->
        <p><?php echo $article['content_article'] ?></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>

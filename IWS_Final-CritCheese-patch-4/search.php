<?php
include_once('./config.php');
$val = $_GET['search_field'];
$sql = "SELECT * FROM articles WHERE title_article LIKE '%$val%'";
$result = $mysqli->query($sql);
$rows = [];
if ($result) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="beta.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">   <!-- style css here -->
    <style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.topnav{
overflow: hidden;
background-color: #333;
}

.topnav a {
float: left;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.topnav a:hover {
background-color: #ddd;
color: black;
}

    </style>
        <body class="w3-light-grey">
</head>

<body>
    <!-- header here -->
    <header>

    <header class="w3-container w3-center w3-padding-32"> 
    <h1><b>Daily News</b></h1>
    <p>IWS Final Project of <span class="w3-tag">Trang and Thanh</span></p>

    </header>

    <!-- banner here(optional, but should have) -->

    <section class="banner">
    <div class="topnav">
    <a href="index.php">Home</a>
    <a href="local.php">Local</a>
    <a href="sports.php">Sport</a>
    <a href="medical.php">Medical</a>
    <a href="#about">About</a>
</div>
</section>

    <section class="bodywork">
        <div class="container">
            
        <div class="w3-container w3-center w3-padding-32">
            <form action="search.php" method="get">
                <input type="text" name="search_field" id="search_field" placeholder="Enter search key" required>
                <button type="submit" class="btn btn-dark"required>Search</button>
            </form>
            </div>

            <p>Search result for: <?php echo $val?></p>
            <?php if (count($rows) == 0) : ?>
                <p>Nothing found</p>
            <?php else : ?>
                <?php foreach ($rows as $row) : ?>
                <div class ="w3-row-padding w3-third">
                <div class="w3-panel w3-border w3-border-w3-camo-verydarkgrey w3-round-xxlarge">
                        <h2><a href="read_one.php?id=<?php echo $row['id_article']; ?>"><?php echo $row['title_article'] ?></a></h2>
                        <!-- <p><?php echo $row['name_category'] ?></p> -->
                        <p><?php echo $row['date_article'] ?></p>
                        <p>created by <?php echo $row['author_article'] ?></p>
                        <p><?php echo $row['intro_article'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
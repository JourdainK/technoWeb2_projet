<?php
session_start();
include 'admin/lib/php/admin_liste_include.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="./lib/js/fetchJson.js"></script>
    <link rel="stylesheet" type="text/css" href="./lib/css/main.css"/>
    <title>George Carlin's shop</title>
</head>
<body>
<header id=header">

</header>
<nav>
    <?php
    if(file_exists('./lib/php/menu.php')){
        include('./lib/php/menu.php');
    }
    ?>
</nav>

<section id="mains">
    <?php
    if(!isset($_SESSION['page'])){
        $_SESSION['page']="accueil.php";
    }
    if(isset($_GET['page'])){
        $_SESSION['page'] = $_GET['page'];
    }
    $path='./pages/'.$_SESSION['page'];
    if(file_exists($path)){
        include ($path);
    }else{
        include ('./pages/page404.php');
    }
    ?>
</section>


<nav class="navbar fixed-bottom navbar-expand- navbar-dark bg-dark">
    <a href="index.php?page=accueil.php">Accueil</a>
    <a href="index.php?page=shop.php">Shop</a>
    <a href="index.php?page=shop.php">Vidéos</a>
    <a href="index.php?page=about.php">à propos</a>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
<?php
   include_once("helpers/url.php");
   include_once("data/posts.php");
   include_once("data/categories.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog coder</title>
    <!-- ESTILOS DO PROJETO -->
    <link rel="stylesheet" href="<?=$BASE_URL ?>/css/style.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href=" <?= $BASE_URL ?>" id="logo" >
            <?php
                $imageUrl='img/logo.svg';
                echo "<img src='$imageUrl' title='Blog Coder'>";
            ?>
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<? $BASE_URL?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link"Categorias>categorias</a></li>
                <li><a href="#" class="nav-link"sobre>Sobre</a></li>
                <li><a href="<? $BASE_URL?>/contato.php"class="nav-link">Contato</a></li>
             </ul>
        </nav>
    </header>
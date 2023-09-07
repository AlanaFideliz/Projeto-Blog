<?php
   include_once("helpers/url.php");
   include_once("data/posts.php");
   include_once("data/categories.php");
?>

<!DOCTYPE html>


<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 

    <title>Blog Codar</title>
</head>
<body>
    <header> 
       <a href="<?= $BASE_URL ?>index.php" id="logo">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Blog codar"/>
       </a>
       <nav><!--ESSA TAG INDICA QUE AQUI TEM UMA BARRA DE NAVEGAÇÃO-->
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>index.php" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contatos</a></li>
            </ul>

       </nav>
    </header>

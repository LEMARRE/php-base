<?php
require_once __DIR__.'/../config/functions.php';
require_once __DIR__.'/../config/config.php';
require_once __DIR__.'/../config/database.php';
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>
        <?php 
        if (empty($currentPageTitle)) {
            echo $siteName. ' - Notre pizzeria en ligne';
        } else {
            echo $currentPageTitle. ' - ' . $siteName;
        }
         ?>
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">   
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Pizza Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-pizzastore" 
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-pizzastore">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo $currentPageUrl == 'index' ? 'active' : '';?>">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item  <?php echo $currentPageUrl == 'pizza_list' ? 'active' : '';?>">
            <a class="nav-link" href="pizza_list.php">Liste des pizzas</a>
          </li>
        </ul>
        </div>
    </nav>

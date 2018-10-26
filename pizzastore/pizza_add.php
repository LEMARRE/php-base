<?php
$currentPageTitle = "Ajouter une pizza";
require_once __DIR__.'/partials/header.php';
?>



<div class="container">
<h1>Ajouter une pizza </h1>

  <form method="POST">
  
    <div class="form-group">
      <label for="name" >Nom</label>
      <input type="name" class="form-control" id="name" placeholder="Nom de la pizza">
    </div>
    <div class="form-group">  
      <label for="price">Prix</label>
      <input type="number" min="5" max="17" class="form-control" id="price" placeholder="Prix entre 5 et 17€">
    </div>
    <div class="form-group">
      <label for="categorie">Catégorie</label>
      <select class="form-control" id="categorie">
        <option>Végétarienne</option>
        <option>Viande</option>
        <option>Poisson</option>
        <option>Fromages</option>
      </select>
    </div>
    <div class="form-group">
      <label for="image">Image de la pizza</label>
      <input type="file" class="form-control-file" id="image">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <button class="btn btn-success form-control" id="send">Ajouter la nouvelle pizza</button>
    </div>
    </div>
  </form>
</div>

<?php

$name = null;
$price = null;
$description = null;
$categorie = null;
$file = null;

if (!empty($_POST)){
    $isValide = false;
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $categorie = $_POST['categorie'];
    $file = $_POST['file'];

    if (strlen($name) == 0) {
        $isValide = false;
        echo('Le nom doit être renseigné'.'<br/>');
    }
    if (strlen($description) == 0) {
      $isValide = false;
      echo('Le nom doit être renseigné'.'<br/>');
  }
    if ($isValide) {
        echo 'Ajout de la pizza';
  }
}

?>

<?php
require_once __DIR__.'/partials/footer.php';
?>

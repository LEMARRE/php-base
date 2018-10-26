<?php
$currentPageTitle = "Ajouter une pizza";
require_once __DIR__.'/partials/header.php';

$name = null;
$price = null;
$description = null;
$categorie = null;

if (!empty($_POST)) { // Si le formulaire est soumis
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $categorie = $_POST['categorie'];
}


?>

<div class="container">
  <h1>Ajouter une pizza </h1>

  <form action="pizza_add.php" method="POST">
  
    <div class="form-group">
      <label for="name" >Nom</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">  
      <label for="price">Prix</label>
      <input type="number" min="5" max="17" class="form-control" id="price" >
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



  if (!empty($_POST)) { // Si le formulaire est soumis
    $isValid = true;

    if (strlen($name) == 0) {
      $isValid = false;
          echo 'Le nom est vide. <br />';
      }
      if (empty($price)) {
        $isValid = false;
          echo 'Le prix ne doit pas être vide. <br />';
      }
      if (empty($categorie)) {
        $isValid = false;
          echo 'La catégorie doit être sélectionnée. <br />';
      }
      if (strlen($description) < 15) {
        $isValid = false;
          echo 'La description est trop court.';
      }

      if ($isValid) {
        echo 'Ajout de la nouvelle pizza';
    }

  }

$query = $db->prepare('INSERT INTO pizza (name, price) VALUES (:name, :price)');
$query->bindValue(':name', $name, PDO::PARAM_STR);
$query->bindValue(':price', $price, PDO::PARAM_STR);
$query->execute();

require_once __DIR__.'/partials/footer.php';
?>

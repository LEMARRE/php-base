<?php

$currentPageTitle = "Pizza";

require_once __DIR__.'/partials/header.php';

// Récupérer la pizza avec l'id 3 :
// Récupérer l'id dynamiquement à partir de l'URL (grâce à $id) :

$query2 = $db->query('SELECT * FROM size');
$size = $query2->fetchAll();

?>

<main class="container">
        <h1><?php 
        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        if (is_numeric($id)) {
        $query = $db->prepare('SELECT * FROM pizza WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT); //On s'assure que l'id est bien un entier
        $query->execute();
        $pizza = $query->fetch();       
            if ($pizza) {
                echo $pizza['name'];
            } else {
                echo 'Erreur 404 - La pizza n\'existe pas <img src="assets/img/travolta.gif">';
                http_response_code(404);
                die();
            }
        } else {
                echo 'Erreur 404 - La pizza n\'existe pas <img src="assets/img/travolta.gif">';
                http_response_code(404);
                die();
        }
             ?>
        </h1>
        <div class="row justify-content-center">   
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-img-top-container">
                        <img class ="card-img-top" src="assets/<?php echo $pizza['image'].'"'; ?> ">
                    </div>    
                    <div class="card-body">
                        <h2 class="card-title">Choisir la taille</h2>
                        <form class='form-check'>
                        <?php foreach ($size as $values) {
                            $size_name = $values['name'];
                            $pizza_price = $pizza['price'] ;
                            $suppl_price = $values['price'];
                            $total_price = $pizza_price + $suppl_price;
                        ?>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="form-check-input" id="customControlValidation<?php echo $values['id'];?>">
                            <label class="form-check-label" for="customControlValidation<?php echo $values['id'];?>"><?php echo $size_name;?> = <?php echo $total_price?> €</label>
                        </div>
                        <?php } ?>                          
                        <a href="#" class="btn btn-danger">Passer au paiement</a>
                        </form>
                    </div>                           
                </div>
            </div>
        </div>

        
  
    </main>

<?php
require_once __DIR__.'/partials/footer.php';
?>

<?php

$currentPageTitle = "Nos pizzas";

require_once __DIR__.'/partials/header.php';

$query = $db->query('SELECT * FROM pizza');
$pizzas_list = $query->fetchAll();

?>

    <main class="container">
        <h1>Ma liste de pizzas</h1>
        <div class="row">

            <?php
                foreach ($pizzas_list as $pizzas){ 
                    ?>

                    <div class="col-md-3">
                        <div class="card mb-4">
                            <div class="card-img-top-container">
                            <a href="pizza_single.php<?php echo "?id=" .$pizzas['id'];?>"><img class ="card-img-top card-img-top-zoom-effect" src="assets/<?php echo $pizzas['image'].'"'; ?> "></a>
                            <div class="price">A partir de <?php echo formatPrice($pizzas['price']); ?></div>
                            </div>    
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $pizzas['name']; ?> </h2>
                                <a href="pizza_single.php<?php echo "?id=" .$pizzas['id'];?>" class="btn btn-danger">Commander</a>
                            </div>                           
                        </div>
                    </div>
            <?php } ?>

        </div>
    </main>

<?php
require_once __DIR__.'/partials/footer.php';
?>

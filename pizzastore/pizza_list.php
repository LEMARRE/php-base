<?php

$currentPageTitle = "Nos pizzas";

require_once __DIR__.'/partials/header.php';
?>

    <main class="container">
        <h1>Ma liste de pizzas</h1>
    </main>

<?php
    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    $query = $db->query('SELECT name FROM pizza');
    var_dump ($query);
    $pizza_list = $query['name'];
    echo $pizza_list;

?>

<?php
require_once __DIR__.'/partials/footer.php';
?>

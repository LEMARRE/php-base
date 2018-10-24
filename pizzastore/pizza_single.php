<?php

$currentPageTitle = "Pizza";

require_once __DIR__.'/partials/header.php';
?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (is_numeric($id)) {
$query = $db->prepare('SELECT name FROM pizza WHERE id= '.$id);
$query->bindValue(':id', $id, PDO::PARAM_STR);
$query->execute();
$pizza = $query->fetch();
if ($pizza) {
    echo $pizza['name'];
} else 
    echo 'La pizza n\'existe pas';
} else {
echo 'La pizza n\'existe pas';
}

?>

<?php
require_once __DIR__.'/partials/footer.php';
?>

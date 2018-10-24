<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8', 'root', '', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
} catch(Exception $e) {
	echo $e->getMessage();
	header('Location: https://www.google.fr/search?q='.$e->getMessage());
}

// Récupérer la pizza avec l'id 3 :
// Récupérer l'id dynamiquement à partir de l'URL (grâce à $id) :

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
<?php

var_dump($_GET);

if (!empty($_GET['q']){
    $q = $_GET['q'];
    echo 'Recherche : '.$q;
}


?>
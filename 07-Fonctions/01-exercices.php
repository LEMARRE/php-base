<?php

function carre($nbre){
    return "Le carré du nombre est : " . $nbre * $nbre;
}

echo carre(5);

echo '<br/>';

// Aire d'un rectangle

function aireRect($l, $L) {
    return "L'aire du rectangle est : " .$l*$L;
}

echo aireRect(10, 5);

echo '<br/>';


// Aire d'un cercle

function aireCercle($rayon){
    return "L'aire du cercle est : " . (pi() * ($rayon*$rayon));
}

echo aireCercle(2);

echo '<br/>';


// Calcul prix TTC

function ttc($ht, $taux){
    return "Le prix TTC est de : " . $ht*(1 + $taux/100) . " euros.";
}

echo ttc(100, 5.5);

echo '<br/>';

// Faire le calcul dans les 2 sens

function convert($price, $taux, $withTax = true){
    if ($withTax){
        return $price*(1 + $taux/100);
    } 
    return $price/(1 + $taux/100);
}

echo convert (100,20);
echo '<br/>';
echo convert (120,20, false);

?>
<?php

// Fonction permettant de diviser le prix et les centimes (pour la mise en forme notamment) :

function formatPrice ($price){
    $explodedPrice = explode('.', $price);
    return $explodedPrice[0].'<span class="card-price-cents">€'.$explodedPrice[1].'</span>';
}
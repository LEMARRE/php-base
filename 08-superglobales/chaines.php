<?php

// Créer une fonction qui retourne l'acronym d'une phrase :

$string = 'buffy the vampire slayer';

function acronym ($string) {

    $words = explode(" ", $string);
    $acronym = '';
    foreach ($words as $letters) {
        $acronym .= $letters[0];
    }
    return strtoupper($acronym);
}

echo acronym($string).'<br/>';
echo '<hr/>';
// Fonction qui conjugue un verbe du 1er groupe (hors exceptions) :


$verbe = 'finir';
$verbe2 = "applaudir";


function conjugue($verbe) {
        $voyelles =['a', 'e', 'i', 'o', 'u', 'y'];
        if ((substr($verbe, -2)) == 'er'){
            $terminaisons_er = [
            'Je' => 'e',
            "J'" => 'e',
            'Tu' => 'es',
            'Il/elle' => 'e',
            'Nous' => 'ons',
            'Vous' => 'ez',
            'Ils/elles' => 'ent',
        ];

        if(in_array(substr($verbe, 0, 1), $voyelles)){
            unset($terminaisons_er['Je']);
        } else {
            unset($terminaisons_er["J'"]);
        }
        
        foreach ($terminaisons_er as $pronom => $terminaison) {
            // $result = rtrim($verbe, 'er') . $terminaison;
            $result = substr($verbe, 0, -2) . $terminaison;
            echo $pronom . ' ' . $result.'<br/>';
        }
    } else if ((substr($verbe, -2)) == 'ir'){
        $terminaisons_ir = [
            'Je' => 'i',
            "J'" => 'i',
            'Tu' => 'is',
            'Il/elle' => 'it',
            'Nous' => 'issons',
            'Vous' => 'issez',
            'Ils/elles' => 'issent',
        ];
        
        if(in_array(substr($verbe, 0, 1), $voyelles)){
            unset($terminaisons_ir['Je']);
        } else {
            unset($terminaisons_ir["J'"]);
        }

        foreach ($terminaisons_ir as $pronom => $terminaison) {
            // $result = rtrim($verbe, 'er') . $terminaison;
            $result = substr($verbe, 0, -2) . $terminaison;
            echo $pronom . ' ' . $result.'<br/>';
        }
    }
}


conjugue($verbe);
echo '<br/>';
conjugue($verbe2);

?>
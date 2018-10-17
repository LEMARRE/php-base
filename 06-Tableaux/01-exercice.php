<?php
$eleves = [
    0 => [
        'nom' => 'Bélinda',
        'notes' => [10, 12, 16, 20, 17, 16, 15, 12]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];

// Lister nom et notes de chaque élèves :

foreach ($eleves as $eleve){
    echo ($eleve['nom']).' a eu ';
    foreach (($eleve['notes']) as $index => $notes){
        if ($index == (count($eleve['notes'])-1)){
            echo 'et '.$notes.'.';
        } else if ($index == (count($eleve['notes'])-2)) {
            echo $notes.' ';
        } else {
            echo $notes.', ';
        }
    } echo '<br/>';
}

echo '<hr/>';


// Calculer moyenne de Jean :

$totalNotesJean = 0;

    $nbreNotes = count($eleves[2]['notes']);
    foreach (($eleves[2]['notes']) as $notes) {
        $totalNotesJean += $notes;
    };
    $moyenneJean = $totalNotesJean/$nbreNotes;
    echo 'La moyenne de Jean est de '.round($moyenneJean, 2);

    echo '<hr/>';

// Dire combien d'élèves ont la moyenne :

$z = 0;

foreach ($eleves as $eleve){
    $totalNotesEleve = 0;
    $nbreNotes = count($eleve['notes']);
    foreach (($eleve['notes']) as $notes){
        $totalNotesEleve += $notes;     
        }
        $moyenneEleve = $totalNotesEleve/$nbreNotes;
        if ($moyenneEleve < 10) {
            $z++;
        }
    echo "(Moyenne de ".$eleve['nom']." : " . round($moyenneEleve, 2) . ")." . "<br/>";
}


echo '<br/>' . "Il y a ".$z." élève(s) qui n'a pas la moyenne";

echo '<hr/>';

// Quel élève a la meilleure note ?

$meilleureNote = 0;
$meilleurEleve = '';

foreach ($eleves as $eleve){
    foreach (($eleve['notes']) as $notes){
        if ($notes > $meilleureNote) {
            $meilleureNote = $notes;
            $meilleurEleve = $eleve['nom'];
        } else if ($notes == $meilleureNote){
            $meilleurEleve = $meilleurEleve . ', ' . $eleve['nom'];
        }
    }
}
echo 'La meilleure note générale est : '. $meilleureNote . '. Elle a été obtenue par ' . $meilleurEleve . '.';

echo '<hr/>';

// Qui a eu au moins un 20 ?

$eleves20 = '';

foreach ($eleves as $eleve){
    foreach (($eleve['notes']) as $notes){
        if ($notes == 20) {
            $eleves20 = $eleves20 . $eleve['nom'] . ' ';
        }
    }
}
if ($eleves20 == '') {
    echo "Personne n'a obtenu de 20/20 :(";
} else {
    echo 'Elève ayant obtenu au moins un 20/20 : ' . $eleves20;
}

echo '<hr/>';

// BONUS Tri à bulles :

// function bubbleSort(array $array) {
//     $array_size = count($array);
//     for($i = 0; $i < $array_size; $i ++) {
//         for($j = 0; $j < $array_size; $j ++) {
//             if ($array[$i] < $array[$j]) {
//                 $tem = $array[$i];
//                 $array[$i] = $array[$j];
//                 $array[$j] = $tem;
//             }
//         }
//     }
//     return $array;
// }




?>

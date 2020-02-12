<?php

include("fonction.php");
include("operation.php");

$La = [];
$Lb = [];
$calls = []; // sert a appeler mes function
$verbose = false; 
$vverbose = false; 
$ra = false;  
foreach ($argv as $key => $value) {
    if ($key !== 0 && is_numeric($value)) // is_numeric = determine si une variable est un type numérique
        $La[] = $value;
}
// si $La ne peut pas etre trier on sort des operation, sinon on utilise la fonction pushSwap
if (count($La) > 1) {
    $count = count($La);
    if (!sorted()) {
        pushSwap();
    }
}

echo implode(" ", $calls) . "\n"; //implode =  Rassemble les éléments d'un tableau en une chaîne
if ($verbose || $vverbose) { // si $verbose ou $vverbose fonction sa appelle mes operation  
    echo "Total : " . count($calls);

}
var_dump($La);



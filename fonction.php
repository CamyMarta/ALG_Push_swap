<?php


function pushA() {
    global $La, $Lb, $vverbose; // recupere la globaliter de mes tableaux
    foreach ($La as $key => $value) {
        if (isset($La[1]) && $La[0] < $La[1]) { //  $La 0 et  plus grand que $La 1 bah il inverse les deux chiffres 
            pb();// pb prend le premier élèment de $La et le place à la première position de $Lb
        } else {
            sa(); //sa échange les positions des deux premièrs élèments de La(rien ne se produit s’il n’y a pas assez d’élèments)
            if (sorted()) {
                break;
            }
            pb();
        }
        if (isset($Lb[1]) && $Lb[0] < $Lb[1]) { // $Lb 0 et  plus grand que $Lb 1 bah il inverse les deux chiffres 
            sb();// sb échange les positions des deux premièrs élèments de $Lb
        }
        if ($vverbose) {
            echo "A : [ " . implode(", ", $La) . "] - B : [ " . implode(", ", $Lb) . "]\n";
            // $vverbose echo mon tableau A et increment mon tableau B en ayent des espaces 
        }
    }
}
function pushB() {
    global $La, $Lb, $vverbose;
    foreach ($Lb as $key => $value) 
    {
        if (isset($Lb[1]) && $Lb[0] < $Lb[1]) {
            sb();
        }
        pa();
        if (isset($La[1]) && $La[0] > $La[1]) {
            sa();
        }
        if ($vverbose) {
            echo "A : [ " . implode(", ", $La) . "] - B : [ " . implode(", ", $Lb) . "]\n"; 
            //implode =  Rassemble les éléments d'un tableau en une chaîne
        }
    }
}

function pushSwap() {
    global $La, $Lb, $ra, $vverbose;
    if (!$ra) { // si se n'ai pas une erreur que mon operation fonctionne on fait teste les deux fonction pushA et pushB 
        pushA();
        pushB();
        
        if (!sorted()) // si c'est une erreur et que mon operation n'est pas bonne cela s'arrete 
        {
            pushSwap();
        }
    
    }
}
// fonction qui tris mes tableaux
function sorted() {
    global $La;
    $a = $La;
    $b = $a;
    sort($b);
    return $a === $b;
}
//fonction qui appelle toutes mes operations
function getName() {
    global $calls;
    $calls[] = debug_backtrace()[1]['function'];// sert a faire deguger mes fonctions 
}
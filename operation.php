<?php 

function sa() {
    global $La;
    if (isset($La[1])) { //isset — Détermine si une variable est déclarée et si elle est  différente de NULL 

        $La[0] = $La[1];
    }
    getName();
}
function sb() {
    global $Lb; // recupere la globaliter de mes tableaux 
    if (isset($Lb[1])) {
     
        $Lb[0] = $Lb[1];
    }
    getName();
}

function pa() {
    global $La, $Lb;
    array_unshift($La, array_shift($Lb)); //array_unshift — Empile un ou plusieurs éléments au début d'un tableau
    getName();                           //array_shift — Dépile un élément au début d'un tableau
    // getName — Récupère le nom de notre operation
}
function pb() {
    global $La, $Lb;
    array_unshift($Lb, array_shift($La));
    getName();
}

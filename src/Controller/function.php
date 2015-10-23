<?php

function Pourcentage($Nombre, $Total) {
    //return $Nombre * 100 / $Total;
    $prix = ($Nombre * 100)/$Total;

    return round($prix);
}
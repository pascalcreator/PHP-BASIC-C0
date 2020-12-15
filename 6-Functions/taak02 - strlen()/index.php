<?php
$voornaam= "Pascal";
$achternaam= "Konijnenburg";
$gehelenaam= "$voornaam $achternaam";
$helezin= "mijn naam is $gehelenaam";

function mijnnaamisgroot() {
    echo '$gehelenaam';
}
$helezin=strtoupper($helezin);
echo $helezin;
?>
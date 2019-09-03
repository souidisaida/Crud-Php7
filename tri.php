<?php
$jours=array("Lu"=>"Lundi","Ma"=>"Mardi",
"Me"=>"Mercredi","Je"=>"Jeudi","Ve"=>"Vendredi",
"Sa"=>"Samedi","Di"=>"Dimanche" );
var_dump($jours);
natsort($jours);
var_dump($jours);
?>
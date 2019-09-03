<?php
include 'client.class.php';
$clt=new clients();
if($clt->supprimer($_GET['Delete']))
header("location:affichage.php");
else
echo'Erreur';

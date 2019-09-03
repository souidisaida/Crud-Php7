<a href="formulaire.php">Ajouter client </a>
<?php
include 'client.class.php';?>
<table  border=1>
<tr><td> Nom</td>
<td> Prenom</td>
<td colspan=2 >Action   </td></tr>

<?php
$clt=new clients();?>
<?php
$result=$clt->Affichage();?>
<?php
$nb=count($result);
if($nb>0){
foreach($result as $cle)
{ ?>
<tr><td><?php echo $cle['Nom']?></td><td><?php echo $cle['Prenom']?></td><td> <a href="modifier.php?modifier=<?php echo $cle['id']?>"> modifier</a></td>
<td> <a href="Delete.php?Delete=<?php echo $cle['id']?>" onclick="if(!confirm('voulez vous supprimer' )) return false" > supprimer</a></td></tr>
<?php
}
}
?>
</table >



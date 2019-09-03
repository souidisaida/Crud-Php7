<?php
include 'client.class.php';
$clt=new clients();
$result=$clt->modifier($_GET['modifier']);
foreach($result as $cle)
{
?>
<link rel="stylesheet" href='css/style.css'/>
<form method='post'>
<div>
<table >
<tr><td> Nom</td><td><input type='text' name='Nom' value= "<?php echo $cle['Nom']?>"></td></tr>
<tr><td> Prenom</td><td><input type='text' name='Prenom' value= "<?php echo $cle['Prenom']?>"></td></tr>
<tr><td>login</td><td><input type='text' name='login'value= "<?php echo $cle['login']?>"></td></tr>
<tr><td> mot_depasse</td><td><input type='text' name='mot_depasse'value= "<?php echo $cle['mot_de_passe']?>"></td></tr>
<tr><td> type</td><td><input type='text' name='type'value= "<?php echo $cle['type']?>"></td></tr>
<tr><td> matricule_fiscale</td><td><input type='text' name='matricule_fiscale'value= "<?php echo $cle['Matricule_fiscale']?>"></td></tr>
<tr><td> telephone</td><td><input type='text' name='telephone'value= "<?php echo $cle['Telephone']?>"></td></tr>
<tr><td colspan=2 align=center><input type='submit' name='OK' value='modifier' /></td></tr>
</table>
</div>
</form>
<?php 
}
if(isset($_POST['OK'])){
if($clt->update($_GET['modifier'],$_POST['Nom'],$_POST['Prenom'],$_POST['login'],$_POST['mot_depasse'],$_POST['type'],$_POST['matricule_fiscale'],$_POST['telephone']))
{
header("location:affichage.php");
}
else
echo"<script> alert('login deja existe')</script>";
}
?>









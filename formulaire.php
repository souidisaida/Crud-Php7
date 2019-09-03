<link rel="stylesheet" href='css/style.css'/>
<form method='post'>
<div>
<table >
<tr><td> Nom</td><td><input type='text' name='Nom'/></td></tr>
<tr><td> Prenom</td><td><input type='text' name='Prenom'/></td></tr>
<tr><td>login</td><td><input type='text' name='login'/></td></tr>
<tr><td> mot_depasse</td><td><input type='text' name='mot_depasse'/></td></tr>
<tr><td> type</td><td><input type='text' name='type'/></td></tr>
<tr><td> matricule_fiscale</td><td><input type='text' name='matricule_fiscale'/></td></tr>
<tr><td> telephone</td><td><input type='text' name='telephone'/></td></tr>
<tr><td colspan=2 align=center><input type='submit' name='OK' value='inscription' /></td></tr>
</table>
</div>
</form>
<?php
if(isset($_POST['OK'])){
include 'client.class.php';
$clt=new clients();
if($clt->ajout($_POST['Nom'],$_POST['Prenom'],$_POST['telephone'],$_POST['type'],$_POST['matricule_fiscale'],$_POST['login'],$_POST['mot_depasse']))
{
header("location:affichage.php");
}
else
echo"<script> alert('login deja existe')</script>";
}

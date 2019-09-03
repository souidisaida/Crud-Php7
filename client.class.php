
<?php
class clients{
public function __construct() {
$this->connexion=new PDO('mysql:host=localhost;dbname=formation','root','');
}
public function ajout($nom,$prenom,$tel,$type,$matricule,$login,$paswd)
{
$sql="insert into client values('','$nom','$prenom','$paswd','$login','$tel','$type','$matricule')";
$res=$this->connexion->prepare($sql);
$test=$res->execute();
if($test)
return true;
else return false;

}
public function Affichage()
{
$sql="select * from client";
$result=$this->connexion->query($sql);
while($res=$result->fetch(PDO::FETCH_ASSOC))
{
$data[]=$res;
}
return @$data;
}
public function Supprimer($id)
{
$sql="delete from client where id='$id'";
$res=$this->connexion->prepare($sql);
$test=$res->execute();
if($test)
return true;
else return false;
}

public function modifier($id)
{
$sql="select * from client where id='$id'";
$result=$this->connexion->query($sql);
while($res=$result->fetch(PDO::FETCH_ASSOC))
{
$data[]=$res;
}
return $data;
}

public function update($id,$Nom,$Prenom,$login,$mot_de_passe,$type,$Matricule_fiscale,$Telephone)
{
$sql="update client set nom='$Nom',prenom='$Prenom',login='$login',mot_de_passe='$mot_de_passe',type='$type',Matricule_fiscale='$Matricule_fiscale',telephone='$Telephone'  where id='$id' ";
$res=$this->connexion->prepare($sql);
$test=$res->execute();
if($test)
return true;
else return false;
}
}






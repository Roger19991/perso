<?php

 function ajou($image, $nom,  $desc, $lien)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO restaurant (image, nom, description, lien) VALUES ('$image', '$nom', '$desc', '$lien')");

     $req->execute(array($image, $nom,  $desc, $lien));

     $req->closeCursor();
   }
}

function affich()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM restaurant ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprim($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM restaurant WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>



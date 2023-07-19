<?php  
        if(isset($_POST['send'])) {

            $lundi = $_POST['lundi'];
            $mardi = $_POST['mardi'];
            $mercredi = $_POST['mercredi'];
            $jeudi = $_POST['jeudi'];
            $vendredi = $_POST['vendredi'];
            $samedi = $_POST['samedi'];
            $nom = $_POST['nom'];
            $filiere = $_POST['filiere'];
            $heure = $_POST['heure'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = "  INSERT INTO emploi(lundi, mardi, mercredi, jeudi, vendredi, samedi, nom, heure, filiere)
           VALUES('$lundi','$mardi','$mercredi','$jeudi' ,'$vendredi','$samedi','$nom','$heure' ,'$filiere') ";
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: pagehoraire.php") ;

        }
    
      
?>


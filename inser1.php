<?php  
        if(isset($_POST['ajouter'])) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $sexe = $_POST['sexe'];
            $taille = $_POST['taille'];
            $numero = $_POST['numero'];
            $photo = $_POST['photo'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = "  INSERT INTO info(nom, prenom, sexe, taille, numero, photo)
           VALUES('$nom','$prenom','$sexe','$taille','$numero','$photo') ";
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: menuinf.php") ;

        }
    
      
?>


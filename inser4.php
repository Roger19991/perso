<?php  
        if(isset($_POST['send'])) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $com = $_POST['com'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = "  INSERT INTO commentaire(nom, prenom, email, com)
           VALUES('$nom','$prenom','$email','$com') ";
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: comentaire.php") ;

        }
    
      
?>


<?php  
        if(isset($_POST['send'])) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $matiere = $_POST['matiere'];
            $absent = $_POST['absent'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = "  INSERT INTO meco(nom, prenom, matiere, absent)
           VALUES('$nom','$prenom','$matiere','$absent') ";
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: listedepre.php") ;

        }
    
      
?>


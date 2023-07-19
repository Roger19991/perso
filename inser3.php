<?php  
        if(isset($_POST['send'])) {

            $nom = $_POST['nom'];
            $date = $_POST['date'];
            $note = $_POST['note'];
            $matiere = $_POST['matiere'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = "  INSERT INTO registre(nom, date, note, matiere)
           VALUES('$nom','$date','$note','$matiere') ";
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: registre.php") ;

        }
    
      
?>


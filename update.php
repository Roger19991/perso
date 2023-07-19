<?php  
            $id = $_POST['id'] ;
            $nom = $_POST['nom'];
            $date = $_POST['date'];
            $note = $_POST['note'];
            $matiere = $_POST['matiere'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = " UPDATE registre SET nom='$nom', date='$date', note='$note', matiere='$matiere' WHERE id='$id' " ;
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: registre.php") ;

    
?>
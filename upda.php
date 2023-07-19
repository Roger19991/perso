<?php  
            $id = $_POST['id'] ;
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $sexe = $_POST['sexe'];
            $taille = $_POST['taille'];
            $numero = $_POST['numero'];
            $photo = $_POST['photo'];

           $con = mysqli_connect("localhost", "root", "", "userform") or die;
           $sql = " UPDATE info SET nom='$nom', prenom='$prenom', sexe='$sexe', taille='$taille', numero='$numero', photo='$photo' WHERE id='$id' " ;
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: menuinf.php") ;

    
?>
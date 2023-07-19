<?php  
            $id = $_POST['id'] ;
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $susbject = $_POST['susbject'];
            $message = $_POST['message'];

           $con = mysqli_connect("localhost", "root", "", "text") or die;
           $sql = " UPDATE content SET  nom = '$nom',  email = '$email', susbject= '$susbject', message= '$message' WHERE id='$id' " ;
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$email) ;
           header("location: home.php") ;

    
?>
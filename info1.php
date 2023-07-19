<?php
if (isset($_POST['sup'])) {
    $id = $_POST['info'];
    $con = new mysqli("localhost", "root" ,"","userform") or die ;
    $requete = "DELETE FROM info WHERE id = '$id' ";
    $sql = mysqli_query($con, $requete) or die;
    header("location: menuinf.php") ;
}

if (isset($_POST['update'])) {
    $nom = $_POST['nom'] ;
    $id = $_POST['id'] ;
    $con = mysqli_connect("localhost", "root", "","userform") or die(mysqli_error()) ;
    $db = mysqli_select_db('text') or die(mysqli_error()) ;
    $requete = "UPDATE info SET WHERE id='$id' nom = '$nom', prenom = '$prenom' , sexe = '$sexe', taille = '$taille', numero = '$numero', photo = '$photo' ";
    $sql = mysqli_query($requete, $con) or die(mysqli_error()) ;
    header("location: menuinf.php") ;
}
?> 
<?php
        $con = mysqli_connect("localhost", "root", "", "userform") or die;
        $toto = " SELECT * FROM info ";
        $r = mysqli_query($con, $toto) ;
        $t = mysqli_fetch_assoc($r) ;
        ?>
    
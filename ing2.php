<?php
if (isset($_POST['sup'])) {
    $id = $_POST['commentaire'];
    $con = new mysqli("localhost", "root" ,"","userform") or die ;
    $requete = "DELETE FROM commentaire WHERE id = '$id' ";
    $sql = mysqli_query($con, $requete) or die;
    header("location: comentaire.php") ;
}

if (isset($_POST['update'])) {
    $nom = $_POST['nom'] ;
    $id = $_POST['id'] ;
    $con = mysqli_connect("localhost", "root", "","userform") or die(mysqli_error()) ;
    $db = mysqli_select_db('text') or die(mysqli_error()) ;
    $requete = "UPDATE commentaire SET WHERE id='$id' nom = '$nom', prenom = '$prenom' , email = '$email', com = '$com' ";
    $sql = mysqli_query($requete, $con) or die(mysqli_error()) ;
    header("location: comentaire.php") ;
}
?> 
<?php
        $con = mysqli_connect("localhost", "root", "", "userform") or die;
        $toto = " SELECT * FROM commentaire ";
        $r = mysqli_query($con, $toto) ;
        $t = mysqli_fetch_assoc($r) ;
        ?>
    
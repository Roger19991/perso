<?php
if (isset($_POST['sup'])) {
    $id = $_POST['registre'];
    $con = new mysqli("localhost", "root" ,"","userform") or die ;
    $requete = "DELETE FROM registre WHERE id = '$id' ";
    $sql = mysqli_query($con, $requete) or die;
    header("location: registre.php") ;
}

if (isset($_POST['update'])) {
    $nom = $_POST['nom'] ;
    $id = $_POST['id'] ;
    $con = mysqli_connect("localhost", "root", "","userform") or die(mysqli_error()) ;
    $db = mysqli_select_db('text') or die(mysqli_error()) ;
    $requete = "UPDATE registre SET WHERE id='$id' nom = '$nom', date = '$date' , note = '$note', matiere = '$matiere' ";
    $sql = mysqli_query($requete, $con) or die(mysqli_error()) ;
    header("location: registre.php") ;
}
?> 
<?php
        $con = mysqli_connect("localhost", "root", "", "userform") or die;
        $toto = " SELECT * FROM registre ";
        $r = mysqli_query($con, $toto) ;
        $t = mysqli_fetch_assoc($r) ;
        ?>
    
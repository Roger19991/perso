<?php
session_start();

$response = $_GET['response'];

if(isset($response) && $response='ok'){


//on insert nos variable session dans des variables: ce n'est pas obligatoire

$shotel = $_SESSION['shotel'];
$pname = $_SESSION['pname'];
$semail = $_SESSION['semail'];
$pinvite = $_SESSION['pinvite'];
$senfant = $_SESSION['senfant'];


//connexion à la base de données
try {
    $access=new pdo("mysql:host=localhost;dbname=service;charset=utf8", "root", "");
    
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
   $e->getMessage();
}

//ici on écrit notre requête d'insertion dans la base de données
    $req= $access->prepare('INSERT INTO reservation(hotel,nom,email,invite,enfant) VALUES(:hotel,:nom,:email,:invite,:enfant)');
    $req->execute( array(
        
        'hotel' => $shotel,
        'nom' => $pname,
        'email' => $semail,
        'invite' => $pinvite,
        'enfant'=> $senfant
    ));
} else {
    session_destroy();
    header('Location: faild.php');
}

?>


<DOCTYPE html>
<html>
    <head>
        <title>Sucess</title>
        <meta charset ='utf-8'/>
        <link rel='stylesheet' href='style/reponse.css' />
        <link rel='icon' href='image/kame.png' />
    </head>
    <body>
        <div id='contain'>
            <div class='item'>
                <p>reservation effectue avec sucess ! ✅</p>   
            </div>
        </div>
        <p><a href='../hoteldes1.php'>retour </a></p>
    <body>
</html>

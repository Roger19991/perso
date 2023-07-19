<?php
session_start();

if(isset($_POST['shotel']) &&  isset($_POST['pname']) && isset($_POST['semail']) && isset($_POST['pinvite']) && isset($_POST['senfant'])){

    if( $_POST['pname'] == '' OR $_POST['semail'] == '')
    {
        header('Location: faild.php'); 
        
    } else {

        $_SESSION['shotel'] = htmlspecialchars($_POST['shotel']);
        $_SESSION['pname'] = htmlspecialchars($_POST['pname']);
        $_SESSION['semail'] = htmlspecialchars($_POST['semail']);
        $_SESSION['pinvite'] = htmlspecialchars($_POST['pinvite']);
        $_SESSION['senfant'] = htmlspecialchars($_POST['senfant']);

        echo $_SESSION['shotel'].'<br>';
        echo $_SESSION['pname'].'<br>';
        echo $_SESSION['semail'].'<br>';
        echo $_SESSION['pinvite'].'<br>';
        echo $_SESSION['senafant'].'<br>';

        header('Location:		https://s.htr.cm/QAYk');
    }
}
?>

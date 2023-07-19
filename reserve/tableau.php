<?php
session_start();

//connexion à la base de données
try {
	 $access=new pdo("mysql:host=localhost;dbname=service;charset=utf8", "root", "");
     
     $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}

$req = $access->query('SELECT * FROM reservation ');

?>


<DOCTYPE html>
<html>
    <head>
        <title>resrvation</title>
        <meta charset ='utf-8'/>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="response.css">
    <link rel="stylesheet" href="vendor/datatables/dataTables.bootstrap4.css">
    <link rel="icon" href="kame.png">
    </head>
    <body>
        <h1><marquee>Liste des personnes ayant effectue des resrvations</marquee></h1>
        <div >
            <table   class="table table-bordered" id="dataTable" style="border-style: solid;" >
            <thead>
                <tr  style=" margin-left:200px; background-color:#4ecdc4;" >
                    <th>NOM</th>
                    <th>EMAIL</th>
                    <th>INVITE</th>
                    <th>ENFANT</th>
                    <th>DATE & HEURE DE RESERVATION</th>
                </tr>
</thead>
            <?php 
                while($data = $req->fetch()) {
            ?>
                <tr>
                    <td><?php echo $data['nom'] ; ?></td>
                    <td><?php echo $data['email'] ; ?></td>
                    <td><?php echo $data['invite'] ; ?></td>
                    <td><?php echo $data['enfant'] ; ?></td>
                    <td><?php echo $data['date_insertion'] ; ?></td>
                </tr>
            <?php
                }
                $req->closeCursor();
            ?>
            </table>
        </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="vendor/js/demo/datatables-demo.js"></script>
</body>
</html>
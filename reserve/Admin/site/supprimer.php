<?php

  require("../config/commandes.php");
  $site=afficher();

?>



<!DOCTYPE html>
<html>
<head>

   <title>administrateur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    <link rel="icon" href="../images/kamer.png">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
      
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container" >
      <a class="navbar-brand" href="http://localhost/test/projet1/VISITE/index.php"><img src="../images/kamer.png"></a>
      <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
   
  </nav>
  </head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post"  style="margin-top:120px;">
  <div class="mb-3">

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du site</label>

    <input type="number" class="form-control" name="idsite" required>
  </div>
  <i type="submit"  name="valider" class="btn btn-primary icon-delete"></i>
              <a href="http://localhost/test/projet1/VISITE/index.php"><i type="submit"  name="valider" class="btn btn-primary icon-home" style="background-color: #14db42;"></i></a>
</form>

      </div>


         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
        <?php foreach($site as $site): ?> 
        <div class="col">
          <div class="card shadow-sm"style="width:50%;">
            
            <img src="<?= $site->image ?>" style="width:100%; height:50%;">

            <h3><?= $site->id ?></h3>

            <div class="card-body">
            
            </div>
          </div>
        </div>
  <?php endforeach; ?>

</div>

    </div></div>

    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['idsite']))
    {
    if(!empty($_POST['idsite']) AND is_numeric($_POST['idsite']))
	    {
	    	$idsite = htmlspecialchars(strip_tags($_POST['idsite']));

          try 
          {
            supprimer($idsite);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }

?>
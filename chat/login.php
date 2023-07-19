
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
   <div class="wrapper">
    <section class="form login">
      <header  style="text-align:center;">Boite de messagerie</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label >Adress Email</label>
          <input type="text" name="email" placeholder="Entrer l'email" required>
        </div>
        <div class="field input">
          <label >Mot de pass</label>
          <input type="password" name="password" placeholder="Entrer le mot de pass" required>
          <i class="fa fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="connexion" >
        </div>
      </form>
      <div class="link">Deja inscript? <a href="index.php" style="color:#37cbdf;">inscrivez vous!</a></div>
      <div class="link"><a href="../index.php" style="color:#37cbdf;">page d'accueil</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>

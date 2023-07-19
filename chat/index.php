
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header style="text-align:center;">Boite de messagerie</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="fname" placeholder="Nom" required>
          </div>
          <div class="field input">
            <label >Prenom</label>
            <input type="text" name="lname" placeholder="Prenom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adress Email</label>
          <input type="text" name="email" placeholder="Entrer votre email" required>
        </div>
        <div class="field input">
          <label>Mot de pass</label>
          <input type="password" name="password" placeholder="Entrer un mot de pass" required>
          <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selection d'image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Inscription">
        </div>
      </form>
      <div class="link">inscrivez vous pour laisser un commentaire<a href="login.php" style="color:#37cbdf;">Connexion</a></div>
    </section>
  </div>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modification</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="kamer.png">
</head>
<body>
    <div class="bg-img">
      <div class="content">
        <header>modification du pass</header>
        <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
        <form action="login-user.php" method="POST">
          <div class="field">
            <span class="fa fa-user"></span>
            <input class="form-control button" type="submit" name="login-now" value="Entrer">
          </div>
        </form>
        <div class="login">plateform</div>
        <div class="links">
        </div>
        <div class="signup">revenir a l'accueil?
          <a href="http://localhost/test/projet1/8-CarRepair/Dashio/kamer.php?s=e3#">click maintenant</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>

</body>
</html>
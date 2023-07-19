<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mot de pass oublie</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="KAMER.jpeg">
</head>
<body>
    <div class="bg-img">
      <div class="content">
        <header>Mot de pass oublie?</header>
        <form action="forgot-password.php" method="POST" autocomplete="">
        <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
          <div class="field">
            <span class="fa fa-user"></span>
            <input class="form-control" type="email" name="email" placeholder="Entrer votre address" required value="<?php echo $email ?>">
          </div>
          <div class="field" style="margin-top: 30px;">
          <input class="form-control button" type="submit" name="check-email" value="Valider">
          </div>
        </form>
        <div class="links">
        </div>
        <div class="signup">je renonce
          <a href="login-user.php">retour</a>
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
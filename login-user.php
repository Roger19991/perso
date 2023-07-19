<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styl.css">
    <link rel="icon" href="kamer.png">
    <title>connexion</title>
</head>
<body>
    <div class="bg-img">
      <div class="content">
        <header>connexion au compte</header>
        <form action="login-user.php" method="POST" autocomplete="">
        <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          <div class="field">
            <span class="fa fa-user"></span>
            <input class="form-control" type="email" name="email" placeholder="Address Email " required value="<?php echo $email ?>">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input class="form-control" type="password" name="password" placeholder="Mot de pass" required>
            <span class="show">SHOW</span>
          </div>
          <div class="link forget-pass text-left"><a href="forgot-password.php">Mot de pass oublie?</a></div>
          <div class="field" style="margin-top: 30px;">
          <input class="form-control button" type="submit" name="login" value="Valider">
          </div>
        </form>
        <div class="links">
         
        </div>
        <div class="link login-link text-center" style="color:white;">avez vous deja cree un <a href="index.php"> Compte?</a></div>
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
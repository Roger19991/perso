<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styl.css">
    <link rel="icon" href="kamer.png">
</head>
<body>

    <div class="bg-img">
      <div class="content">
        <header> Cree un nouveau compte</header>
        <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
        
        <form action="login-user.php" method="POST" autocomplete="">
          <div class="field">
            <span class="fa fa-user"></span>
            <input class="form-control" type="text" name="name" placeholder="Votre Nom" required value="<?php echo $name ?>">
          </div><br>
          <div class="field">
            <span class="fa fa-user"></span>
            <input class="form-control" type="email" name="email" placeholder="Votre Email" required value="<?php echo $email ?>">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input class="form-control" type="password" name="password" placeholder="Votre mot de pass" required>
            <span class="show">SHOW</span>
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input class="form-control" type="password" name="cpassword" placeholder="Confirm le pass" required>
            <span class="show">SHOW</span>
          </div>
          <div class="field" style="margin-top: 30px;">
          <input class="form-control button" type="submit" name="signup" value="inscription">
          </div>
        </form>
        <div class="links">
        </div>
        <div class="link login-link text-center" style="color:white;">je renonce<a href="index.php"> retour!</a></div>
      </div>
    </div>
</body>
</html>
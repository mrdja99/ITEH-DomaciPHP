<?php
    include_once "loginLogic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">

            <div class="col-12 user-img">
                    <img src="images/user.png" alt="">
            </div>

            <form class="col-12" method="POST" action="loginLogic.php">

                <?php if(isset($_GET['error'])) { ?>
                    <?php
                        if($_GET['error'] == "UsernameError") {
                            echo '<p class="error">Molimo Vas unesite korisničko ime</p>';
                        } else if($_GET['error'] == "PasswordError") {
                            echo '<p class="error">Molimo Vas unesite lozinku</p>';
                        } else if($_GET['error'] == "UserNamePasswordError") {
                            echo '<p class="error">Neispravno koirsni;ko ime ili lozinka</p>';
                        }
                          
                    ?>
                   <?php }?>


                <div class="form-group">
                    <input type="text" name="uname" class="form-control" placeholder="Unesite korisničko ime">
                </div>
                    
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Unesite šifru">
                </div>

                <button type="submit" class="btn">Prijavi se</button>

            </form>

            <div class="col-12 forgot">
                    <a href="index.php">Povratak na početnu stranicu</a>
            </div>

            </div>
        </div>
    </div>
    
</body>
</html>
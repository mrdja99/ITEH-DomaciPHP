<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">

            <div class="form-group title">
                <h1>Registracija</h1>
            </div>

            <form class="col-12" method="" action="">


                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Unesite ime">
                </div>
                    
                <div class="form-group">
                    <input type="text" name="surname" class="form-control" placeholder="Unesite prezime">
                </div>

                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Unesite email adresu">
                </div>

                <div class="form-group">
                    <input type="text" name="uname" class="form-control" placeholder="Unesite korisničko ime">
                </div>

                <div class="form-group">
                     <input type="password" name="password" class="form-control" placeholder="Unesite šifru">
                </div>

                <button type="submit" class="btn" name="create">Sign up</button>

            </form>

            <div class="col-12 forgot">
                    <a href="index.php">Povratak na početnu stranicu</a>
            </div>

            </div>
        </div>
    </div>
    
</body>
</html>
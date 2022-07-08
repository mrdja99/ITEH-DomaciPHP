<?php
session_start();

if(!$_SESSION['id'] || ($_SESSION['id'] && $_SESSION['is_admin']==0)){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darkwood</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" href="adminPage.css">

</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toogle" data-toogle="collapse">
                <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/Logo-250x250-1-100x100.webp" class="image-logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="index.php">Početna</a></li>

                    <?php
                        if(isset($_SESSION['id'])) {
                            echo "<li><a href='logout.php'>Odjava</a></li>";
                        }
                    ?>

                    <?php
                        if(!isset($_SESSION['id'])) {
                            echo "<li><a href='register.php'>Registracija</a></li>
                            <li><a href='login.php'>Prijava</a></li>";
                        }
                    ?>

                </ul>

            </div>
        </div>
      </nav>

      <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="addComicForm">
                    <?php
                        include_once "adminPageLogic.php";
                        $model = new Model();
                        $insert = $model->insert();
                    ?>

                    <form class="col-12" method="POST" action="">

                        <div class="form-group">
                            <input type="text" name="comicname" class="form-control" placeholder="Naslov">
                        </div>

                        <div class="form-group">
                            <input type="text" name="writer" class="form-control" placeholder="Autor">
                        </div>

                        <div class="form-group">
                            <input type="text" name="genre" class="form-control" placeholder="Žanr">
                        </div>

                        <div class="form-group">
                            <input type="text" name="edition" class="form-control" placeholder="Broj">
                        </div>

                        <button type="submit" class="btn" name="submit">Dodaj strip</button>

                    </form>
                </div>

                <div class="col-sm-6" id="table">

                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Prikaz dodatih stripova</h1>
                            <hr class="dbt">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naslov</th>
                                    <th>Autor</th>
                                    <th>Žanr</th>
                                    <th>Broj</th>
                                    <th>Ime</th>
                                    <th>Prezime</th>
                                    <th>Username</th>
                                    <th>Akcija</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include_once "adminPageLogic.php";
                                        $model = new Model();
                                        $rows = $model->fetch();
                                        $i=1;
                                    if(!empty($rows)){
                                        foreach($rows as $row){ 

                                    ?>
                                    <tr>
                                        <td><?php echo $row['comic_id']; ?></td>
                                        <td><?php echo $row['comic_name']; ?></td>
                                        <td><?php echo $row['writer']; ?></td>
                                        <td><?php echo $row['genre']; ?></td>
                                        <td><?php echo $row['edition']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['surname']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td>
                                        <a href="read.php?book_id=<?php echo $row['book_id']; ?>" class="badge" id="read">Read</a>
                                        <a href="delete.php?book_id=<?php echo $row['book_id']; ?>" class="badge" id="delete">Delete</a>
                                        <a href="edit.php?book_id=<?php echo $row['book_id']; ?>" class="badge" id="edit">Edit</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }                                   
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

      </div>
    
</body>
</html>
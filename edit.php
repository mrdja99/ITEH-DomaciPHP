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

    <link rel="stylesheet" href="edit.css">
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

                    <li><a class="active" href="adminPage.php">Nazad</a></li>

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
                    $comic_id = $_REQUEST['comic_id'];
                    $row = $model->edit($comic_id);

                    if (isset($_POST['update'])) {
                        if (isset($_POST['comicname']) && isset($_POST['writer']) && isset($_POST['genre']) && isset($_POST['edition'])) {
                            if (!empty($_POST['comicname']) && !empty($_POST['writer']) && !empty($_POST['genre']) && !empty($_POST['edition'])) {

                                $data['comic_id']=$comic_id;
                                $data['comic_name'] = $_POST['comicname'];
                                $data['writer'] = $_POST['writer'];
                                $data['genre'] = $_POST['genre'];
                                $data['edition'] = $_POST['edition'];

                                $update=$model->update($data);

                                if($update){
                                    echo "<script>alert('strip uspesno izmenjen');</script>";
                                    echo "<script>window.location.href='adminPage.php';</script>";
                                
                                }else{
                                    echo "<script>alert('azuriranje neuspelo');</script>";
                                    echo "<script>window.location.href='edit.php';</script>";
                                }
                                

                            } else {
                                echo "<script>alert('Popunite sva polja');</script>";
                                
                            }
                        }
                    }

                    ?>

                    <form class="col-12" method="POST" action="">

                        <div class="form-group">
                            <h1>Izmeni strip</h1>
                            <hr class="dbt">
                        </div>

                        <div class="form-group">
                            <h3>Naslov</h3>
                            <input type="text" name="comicname" value="<?php echo $row['comic_name']; ?>" class="form-control" placeholder="Naslov">
                        </div>

                        <div class="form-group">
                            <h3>Autor</h3>
                            <input type="text" name="writer" value=" <?php echo $row['writer']; ?>" class="form-control" placeholder="Autor">
                        </div>

                        <div class="form-group">
                            <h3>Žanr</h3>
                            <input type="text" name="genre" value="<?php echo $row['genre']; ?>" class="form-control" placeholder="Žanr">
                        </div>

                        <div class="form-group">
                            <h3>Broj</h3>
                            <input type="text" name="edition" class="form-control" value="<?php echo $row['edition']; ?>" placeholder="Broj">
                        </div>

                        
                         <button type="submit" class="btn" name="update">Potvrdi izmene</button>

                    </form>
                    
                </div>

                <div class="col-sm-6" id="table">
                   
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Informacije o izabranom stripu</h1>
                                <hr class="dbt">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mx-auto">
                                <?php
                                include_once "adminPageLogic.php";
                                $model = new Model();
                                $comic_id = $_REQUEST['comic_id'];
                                $row = $model->fetch_single($comic_id);
                                if (!empty($row)) {

                                ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <p>ComicID: <?php echo  $row['comic_id']; ?></p>
                                            <p>Naslov: <?php echo $row['comic_name']; ?></p>
                                            <p>Autor: <?php echo $row['writer']; ?></p>
                                            <p>Žanr: <?php echo $row['genre']; ?></p>
                                            <p>Broj: <?php echo $row['edition']; ?></p>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                    echo "no data";
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>




</body>
</html>
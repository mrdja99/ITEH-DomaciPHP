<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darkwood</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" href="adminPage.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Informacije o stripu</h1>
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
                        <div class="card-header">
                            Detalji
                        </div>
                        <div class="card-body">
                            <p>ComicID: <?php echo  $row['comic_id']; ?></p>
                            <p>Naslov: <?php echo $row['comic_name']; ?></p>
                            <p>Autor: <?php echo $row['writer']; ?></p>
                            <p>Žanr: <?php echo $row['genre']; ?></p>
                            <p>Broj: <?php echo $row['edition']; ?></p>
                        </div>
                        <div class="card-footer">
                        <a href="adminPage.php">Nazad</a>
                        </div>
                    </div>
                <?php
                    }else {
                        echo "no data";
                    }
                ?>

            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</body>
</html>
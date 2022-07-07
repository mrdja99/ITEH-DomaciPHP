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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

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
                    <li><a class="active" href="#">Početna</a></li>

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

      <div id="home">
        <div class="landing-text">
            <h1>Darkwood</h1>
            <h3>Vaša omiljena online stripoteka</h3>
        </div>
    </div>

    <div class="padding">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <img src="images/pozadina1.jpg">
                </div>

                <div class="col-sm-6 text-center">
                    <h2>O nama</h2>
                    <p class="lead">Darkwood je stripoteka koja je osnovana 2001. godine. 
                        Lokacije same knjižare je Zeleni Venac,Beograd. Darkwood je u međuvremenu rastao i postao 
                        najveći regionalni distributer stripova, te mesto na kom se može pronaći najšira ponuda stripova.
                        Darkwood objavljuje i stripove domaćih autora, kako reprint izdanja poznatih serijala, tako i dosad manje 
                        afirmisane scenariste i crtače. Svaka od pomenutih stripskih škola nosi svoje specifi čnosti, pa su tako 
                        različiti naslovi adekvatno tretirani i u izdavačkom smislu. Darkwood je do sada objavio oko šeststo naslova! 
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h3><b>Top 10</b></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                    <section id="banner-area">
                        <div class="owl-carousel owl-theme">

                            <div class="item">
                                <h2 class="titleName">Naruto 25: Itači i Sasuke</h2>
                                <img src="images/naruto_25_vv.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Zagor protiv Supermajka</h2>
                                <img src="images/zagor.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Napad na titane 15</h2>
                                <img src="images/attack_on_titan_15_vv.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Galaktus: žderač svetova</h2>
                                <img src="images/galactus.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Betmen: Džoker</h2>
                                <img src="images/joker.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Okružen mrtvima 17: Razlog za strah</h2>
                                <img src="images/the_walking_dead_volume_17_something_to_fear_vv.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Ultimativno: Vulverin protiv Hulka</h2>
                                <img src="images/hulk.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Korto Malteze 11: Helvećani</h2>
                                <img src="images/malteze.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Hellboy: kratke priče</h2>
                                <img src="images/hellboy.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Konan 2: Bog u zdeli</h2>
                                <img src="images/konan.jpg" alt="Banner1">
                            </div>

                        </div>
                    </section>
                    
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h3><b>Rang lista:</b></h3>
                    <h4>1.Naruto 25: Itači i Sasuke</h3>
                    <h4>2.Zagor protiv Supermajka</h3>
                    <h4>3.Napad na titane 15</h3>
                    <h4>4.Galaktus: žderač svetova</h3>
                    <h4>5.Betmen: Džoker</h3>
                    <h4>6.Okružen mrtvima 17</h3>
                    <h4>7.Ultimativno: Vulverin protiv Hulka</h3>
                    <h4>8.Korto Malteze 11</h3>
                    <h4>9.Hellboy: kratke priče</h3>
                    <h4>10.Konan 2: Bog u zdeli</h3>

                </div>

            </div>
        </div>
    </div>

    <div id="fixed">
    </div>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>


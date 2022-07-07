<?php

    $sname="localhost";
    $uname="root";
    $password="";
    $db_name="phpdomaci";

    $conn = mysqli_connect($sname,$uname,$password,$db_name);

    if(!$conn) {
        echo "Neuspešna konekcija sa bazom";
    }

?>
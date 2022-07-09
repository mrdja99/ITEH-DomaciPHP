<?php
    require_once "adminPageLogic.php";
    $model = new Model();

    if(isset($_POST['search'])) {
        $comics = $model->searchComics($_POST['search']);
        echo json_encode($comics);
    }
?>
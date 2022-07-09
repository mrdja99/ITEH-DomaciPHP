<?php

    require_once "adminPageLogic.php";
    $model = new Model();

    if($_POST['sortType']) {
        $comics = $model->sortComicsByTitle();
        echo json_encode($comics);
    }

?>
<?php

    include "adminPageLogic.php";
    $model=new Model();
    $comic_id=$_REQUEST['comic_id'];
    $delete=$model->delete($comic_id);

    if($delete){
        echo "<script>alert('Uspesno obrisano');</script>";
        echo "<script>window.location.href='adminPage.php';</script>";
    }




?>
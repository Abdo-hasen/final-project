<?php

    require_once "core/students.php";
    require_once "inc/header.php";


    $id = $_GET["id"];

    deleteStudent($id);
    


?>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST["user"];
        $password = $_POST["pass"];
        $hashedpass = sha1($password);

        


    }
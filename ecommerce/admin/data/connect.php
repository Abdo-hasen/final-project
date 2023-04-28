<?php 
    
    $dsn = "mysql:host=localhost;dbname=ecommerce"; // data source name
    $user = "root";
    $pass = "";
    $options = array(
        // PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
    );
        

    try{

        $conn = new PDO($dsn,$user,$pass,$options);
        $conn->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        // echo "You Are Connected welcome To Database"; // for test or debugging 
    }

    catch(PDOException $e){

        echo "Connection Failed" . $e->getMessage();
    }

?>
<?php

const DB_HOST = "localhost";
const DB_USERNAME = "root";
const DB_PASSWORD = "";
const DB_NAME = "many_to_many";

function createDatabase(){

    $conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);

    if(!$conn){
        die("connection failed : " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS `e-commerce`" ;

    $result = mysqli_query($conn,$sql);

    if($result){
        return "database created successfully";
    }else{
        die("fail to create database : " . mysqli_connect_error());
    }
  
    mysqli_close($conn);

}

function getConnection(){

    $conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if(!$conn){
        die("connection failed : " . mysqli_connect_error());
    }

    return $conn;

    mysqli_close($conn);

}


function insertIntoTable($conn,$value){

    $sql = "INSERT INTO `many_to_many` (name) VALUES ('$value');";
    return mysqli_query($conn,$sql);
}





<?php

    require_once "db.php";


    function getAllStudents()
    {

    $conn = getConnection();
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    $data = [];
    if(mysqli_num_rows($result) > 0)
    {

        while($row = mysqli_fetch_assoc($result)){
                    $data [] = $row;
                }

    }
    mysqli_close($conn);
    return $data;
    
    }

    function validateName($name){

        $errors = [];

        if(strlen($name) < 3){
            $errors [] = " name must be greater than 3 chars ";
        }
        if(strlen($name) > 30){
            $errors [] = " name must be smaller than 30 chars ";
        }
        if(empty($name)){
            $errors [] = "name is required";
        }
        if(!is_string($name)){
            $errors [] = "invalid name";
        }

        // if(strlen($name) < 3){
        //     $errors [] = " name must be greater than 3 chars ";
        // }elseif(strlen($name) > 30){
        //     $errors [] = " name must be smaller than 30 chars ";
        // }elseif(empty($name)){
        //     $errors [] = "name is required";
        // }elseif(!is_string($name)){
        //     $errors [] = "invalid name";
        // }


        // check if name exists in db or not
        $conn = getConnection();
        $sql = " SELECT * FROM students WHERE `name` = '$name'  ";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            $errors [] = "name is already taken";
        }

        mysqli_close($conn);
        return $errors;
        
    }





  


// 1
// teacher_id = [1 , 2 , 3]
//1 - 1
//1 - 2
//1 - 3

    function CreateStudent($name,$teachers_id)
    {

        // validate the name

        $errors = validateName($name);

        if(count($errors) > 0){

            $_SESSION["errors"] = $errors;
            header("location:create.php");
            die;
        }    
    
        $conn = getConnection();

        // add the student name in students table
        $sql = "INSERT INTO students(`name`) VALUES('$name')";
        $result = mysqli_query($conn,$sql);

        // get the id of the student
        $student_id = mysqli_insert_id($conn);
        
        // add the student id and the ids of the teachers in the student_teacher table
        foreach( $teachers_id as $teacher_id )
        {

            $sql = "INSERT INTO students_teachers(students_id,teachers_id) VALUES('$student_id','$teacher_id')";
            $result = mysqli_query($conn,$sql);

        }
      

        mysqli_close($conn);
        header("location:" . URL); // =  header("location:index.php");
        die;

    }


    function deleteStudent($id)
    {
        if(isset($id) && !empty($id) && is_numeric($id) && $id > 0)
        {

            // check if the id exists in the database

            $conn = getConnection();
            $sql = " SELECT * FROM students WHERE id = '$id' ";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){

                // restrict forign constrains
                // detele the student relation with the teacher in the student_teacher table (childs)

                $sql = " DELETE FROM students_teachers WHERE students_id = '$id' ";
                $result = mysqli_query($conn,$sql);

                // delete the student from the students table (father)

                $sql = " DELETE FROM students WHERE id = '$id' ";
                $result = mysqli_query($conn,$sql);

                if($result){

                    mysqli_close($conn);
                    $_SESSION["success"] = "student deleted successfully";
                    header("location:" . URL);
                    //    header("location:index.php");
                    die;

                }else{
                    die("Error :" . mysqli_connect_error());
                }

            }else{
                die("Invaild Id");
            }

        }else{
            die("Invalid Id");
        }
    }

    function getStudent($student_id)
    {

        $conn = getConnection();
        $sql = " SELECT * FROM students WHERE id = '$student_id' ";
        $result = mysqli_query($conn,$sql);
        $data = [];
        if(mysqli_num_rows($result) > 0)
        {
    
            while($row = mysqli_fetch_assoc($result)){
                        $data [] = $row;
                    }
    
        }
        mysqli_close($conn);
        return $data;
    }










?>
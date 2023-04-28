<?php

    require_once "db.php";

    function getAllTeachers()
    {

        $conn = getConnection();
        $sql = "SELECT * FROM teachers";
        $result = mysqli_query($conn,$sql);
        $data = [];

        if(mysqli_num_rows($result) > 0)
        {

            while($row = mysqli_fetch_assoc($result))
            {
                $data [] = $row; 
            }

        }

        mysqli_close($conn);
        return $data;

    }

    function getTeachersByStudent($student_id){

        $conn = getConnection();
        $sql = " SELECT * FROM teachers WHERE id IN 
                    (SELECT teachers_id FROM students_teachers WHERE students_id = '$student_id' ) ";
        $result = mysqli_query($conn,$sql);
        $data = [];
        if(mysqli_num_rows($result) > 0)
        {

            while($row = mysqli_fetch_assoc($result))
            {
                $data [] = $row; 
            }

        }

        mysqli_close($conn);
        return $data;
        
    }

//     // $teachers = ;
// var_dump(getTeachersByStudent(34));




?>

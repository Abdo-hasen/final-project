<?php

    require_once "inc/header.php";
    require_once "core/teachers.php";
    require_once "core/students.php";

    $conn = getConnection();
    $sql = " SELECT * FROM  students ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_row($result);
    var_dump($row);
    die;



    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $name = $_POST["name"];
        $teachers_id = $_POST["teachers_id"];

        CreateStudent($name,$teachers_id);

    }

  
?>


<div class="container">
    <div class="row">
        <div class="col-md-12 m-1">
            <h1>Add New student</h1>
            <form method='post' action=' <?= $_SERVER["PHP_SELF"]?> '>
            <a href="index.php" class='btn btn-primary mb-4 ' >Back To All Students</a>

            <?php
            
                if(isset($_SESSION["errors"])):
                
                    foreach($_SESSION["errors"] as $error):
                    
            ?>
            
                            <div class="alert alert-danger text-center">
                                    <?php echo $error; ?>
                            </div>

            <?php 

                    endforeach;
                    
                    unset($_SESSION["errors"]);
            
                endif;
            
            ?>
                <div class='mb-3'>
                    <label for='name' class='form-label'>NEW Student Name</label>
                    <input type='text' class='form-control' id='name' name='name' aria-describedby='emailHelp'>
                </div>
                <div class='mb-3'>
                    <label for='teachers_id' class='form-label'>Select Teacher</label>
                    <select class='form-select' name='teachers_id[]' multiple aria-label='multiple select example'>

               
                        <?php

                            $teachers = getAllTeachers();

                            foreach($teachers as $teacher):

                        ?>

                        <option value=" <?= $teacher["id"]; ?> "> <?= $teacher["name"]; ?> </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <button type='submit' class='btn btn-primary'>ADD</button>
            </form>

        </div>
    </div>
</div>

<?php require_once "inc/footer.php" ?>

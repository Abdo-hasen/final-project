<?php

    require_once  "inc/header.php";
    require_once  "core/students.php";
    require_once  "core/teachers.php";

    $student_id = $_GET["id"];

    $student_data = getStudent($student_id);
    $student_name = $student_data[0]["name"];

    $teachers = getTeachersByStudent($student_id);



?>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12 m-1'>
                <a href="<?= URL ?>" class='btn btn-primary m-1 '>Back</a>

                <h1><?= $student_name; ?></h1>

                <h2>Teachers</h2>
                <ul>

                    <?php foreach($teachers as $teacher) : ?>
                    
                        <li><?php echo $teacher['name'] .' : Teach ==> ' . $teacher['class_name'] ?></li>
                        
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>

<?php require_once "inc/footer.php"; ?>




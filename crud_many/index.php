<?php

    require_once "inc/header.php";
    require_once "core/students.php";

    $students = getAllStudents();
   
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-1">
                <h1>ALL student</h1>
                <p>Here is a list of all the Students</p>
                
                <?php if(isset($_SESSION["success"])):?>

                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['success']; ?>
                    </div>

                <?php 

                    unset($_SESSION["success"]);
                    endif;

                ?>

                <a href="<?= URL . "create.php" ?>"  class='btn btn-primary m-1 '>Add New Student</a>
                <table class='table'>
                    <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>name</th>
                        <th scope='col'>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($students as $student): ?>
                    <tr>

                            <th scope='row'> <?= $student["id"] ?></th>
                            <td> <?= $student["name"] ?></td>
                            <td>
                                <a href="<?= URL . "show.php?id=" . $student["id"]?>" class='btn btn-success m-1 ' >Show</a>
                                <a href="<?= URL . "edit.php?id=" . $student["id"]?>" class='btn btn-primary m-1 '>Edit</a>
                                <a href="<?= URL . "delete.php?id=" . $student["id"]?>" class='btn btn-danger m-1 '>Delete</a>
                            </td>
                     
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require_once 'inc/footer.php';?>
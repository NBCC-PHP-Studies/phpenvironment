<?php
include_once('../includes/student.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>OOP</h1>
    <a href="index.php">Home</a>
    <div>
        <?php
        // Instantiate the class (create an object)
        $student1 = new Student("Chris", "Cusack");

        // Access properties
        echo $student1->firstName;
        echo "<br />";

        // Call a method
        echo $student1->lastName;
        ?>
    </div>
    <div>
        <?php

            $student2 = new Student("Roman", "Pelhik");
            $student3 = new Student("Gilles", "Robichaud");
            $student4 = new Student("Linda", "Moore");
            $student5 = new Student("Hellen", "Williams");

            $students = [$student1, $student2, $student3, $student4, $student5]
        ?>
        <ol>
            <?php 
                foreach($students as $student){
                    echo "<li>{$student->getFullName()}</li>";
                }

            ?>
        </ol>
    </div>

</body>

</html>
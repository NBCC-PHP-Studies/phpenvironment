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
        $student = new Student("Chris", "Cusack");

        // Access properties
        echo $student->firstName;
        echo "<br />";

        // Call a method
        echo $student->getFullName();
        ?>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>Constants</h1>
    <a href="index.php">Home</a>
    <div>
        <?php

            define("CAMPUS", "Moncton");
            define("COLLEGE", "NBCC");

            echo "I am studying at " . COLLEGE . " in " . CAMPUS;
        ?>

    </div>

    <div>

        <?php
        //Const
        const TAX_RATE = 0.15;
        const MAX_STUDENTS = 30;

        echo TAX_RATE;
        echo "<br>";
        echo MAX_STUDENTS;
        ?>
    </div>

</body>

</html>
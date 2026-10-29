<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>If Statements</h1>
    <a href="index.php">Home</a>

    <?php

    $x = 5;
    $y = 4;

    if ($x > $y) {
        echo "<div>$x is greater than $y</div>";
    } else {
        echo "<div>$x is less than or equal to $y</div>";
    }

    // Introduce Query Strings 
    if (isset($_GET["value"])) {
        $z = $_GET["value"];

        if (is_numeric($z)) {
            if ($z > $y) {
                echo "<div>$z is greater than $y</div>";
            } else {
                echo "<div>$z is less than or equal to $y</div>";
            }
        } else {
            echo "<div>The \$z variable is not numeric</div>";
        }
    }

    ?>
</body>

</html>
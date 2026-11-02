<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catching an error</h1>
    <a href="index.php">Home</a>
    <h2></h2>
    <?php
        try {
            $date = new DateTime("not-a-valid-date");

            echo $date->format("Y-m-d");

        } catch (Exception $e) {

            echo "An error occurred: " . $e->getMessage();
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>Throwing an Error with Conditional</h1>
    <a href="index.php">Home</a>
    <?php
        function divide($a, $b)
        {
            if ($b == 0) {
                throw new Exception("Cannot divide by zero.");
            }

            return $a / $b;
        }

        try {
            echo divide(10, 0);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    ?>
</body>

</html>
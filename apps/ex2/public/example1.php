<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Throwing an Error</h1>
    <a href="index.php">Home</a>
    <?php
    try {
        throw new Exception("Something went wrong!");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</body>

</html>
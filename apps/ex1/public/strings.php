<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>Strings</h1>
    <a href="index.php">Home</a>
    <?php
        $name = "Chris Cusack";
        $campus = "Moncton";
        $course = "Software Development";
        $message = "Hello. My name is " . $name . ". I am a " . $course . " student at NBCC " . $campus . " and I am now studying PHP.";
        $messageStringInterpolation = "Hello. My name is {$name}. I am a {$course} student at NBCC {$campus} and I am now studying PHP.";
        $x = "Hello $name";
    ?>
    <h1>Using String Concatenation</h1>
    <h2 class="green"><?php echo $message; ?></h2>

    <h1>Using String Interpolation</h1>

    <h2 class="blue"><?php echo $messageStringInterpolation; ?></h2>
    <h2 class="blue"><?php echo $x; ?></h2>
</body>

</html>
<?php
$errors = [];

$answer = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get form values
    $val1 = $_POST["val1"] ?? "";
    $val2 = $_POST["val2"] ?? "";
    $operation = $_POST["operation"];

    // Validate values
    if (!is_numeric($val1)) {
        $errors[] = "Value 1 must be a number.";
    }

    if (!is_numeric($val2)) {
        $errors[] = "Value 2 must be a number.";
    }

    // Validate operation
    if ($operation === null) {
        $errors[] = "Please select a valid operation.";
    }

    // Perform calculation if there are no errors
    if (count($errors) === 0) {

        switch ($operation) {
            case "add":
                $answer = $val1 + $val2;
                break;

            case "subtract":
                $answer = $val1 - $val2;
                break;

            case "multiply":
                $answer = $val1 * $val2;
                break;

            case "divide":
                if ($val2 == 0) {
                    $errors[] = "Cannot divide by zero.";
                } else {
                    $answer = $val1 / $val2;
                }
                break;
        }
    }
} else {
    header("Location: calculator.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>

    <div class="text-center">
            
        <?php if($answer !== null) { ?>
                
            <h1 class="display-2 grey text-center mt-10">You answer is <?= $answer ?></h1>
        <?php } ?>

        <?php if (count($errors) > 0) { ?>
            <div id="errors" class="text-danger pt-3">
                <ul class="alert alert-danger">
                    <?php foreach ($errors as $err) { ?>
                        <li> <?= $err ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>        

        <div><a href="/calculator.php">Back to the calculator page</a></div>
    </div>
</body>

</html>
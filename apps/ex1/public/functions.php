<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>Functions</h1>
    <a href="index.php">Home</a>

    <?php

    /**
     * Summary of add
     * @param float|int $x Param 1
     * @param float|int $y Param 2
     * @return float|int The sum
     */
    function add(float|int $x, float|int $y) {
        return $x + $y;
    }

    /**
     * Summary of subtract
     * @param float|int $x
     * @param float|int $y
     * @return float|int
     */
    function subtract(float|int $x, float|int $y) {
        return $x - $y;
    }

    /**
     * Summary of multiply
     * @param float|int $x
     * @param float|int $y
     * @return float|int
     */
    function multiply(float|int $x, float|int $y) {
        return $x * $y;
    }

    function divide(float|int $x, float|int $y) {
        return $x / $y;
    }

    function modulus(float|int $x, float|int $y){
        return $x % $y;
    }

    function raiseToPower($value, $pow){
        return $value ** $pow;
    }

    ?>

    <div>3 + 4 = <?php echo add(3, 4); ?></div>
    <div>12 - 5 = <?php echo subtract(12, 5); ?></div>
    <div>7 x 8 = <?php echo multiply(7, 8); ?></div>
    <div>12 / 2 = <?php echo multiply(12, 2); ?></div>
    <div>12 / 0 = <?php echo multiply(12, 0); ?></div>
    <div>21 mod 3 = <?php echo modulus(21, 3); ?></div>
    <div>2 to the power of 3 = <?php echo raiseToPower(2, 3); ?></div>
</body>

</html>
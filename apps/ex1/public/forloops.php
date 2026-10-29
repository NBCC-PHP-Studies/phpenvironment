<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays and For Loops</title>
</head>

<body>
    <h1>Arrays and For Loops</h1>
    <a href="index.php">Home</a>
    <div>
        <?php

        $fruits = ["Apple", "Banana", "Orange"];

        echo $fruits[0]; // Apple
        echo "<br />";
        echo $fruits[1]; // Banana
        echo "<br />";
        echo $fruits[2]; // Orange
        
        ?>
    </div>

    <h2>For Loop</h2>
    <ul>
        <?php
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<li>$fruits[$i]</li>";
        }
        ?>
    </ul>

    <h2>For Each Loop</h2>
    <ul>
        <?php
        foreach ($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
        ?>
    </ul>

    <h2>Add to the end of an Array</h2>
    <?php
        function listFruit($fruits){
            echo "<ul>";
                foreach ($fruits as $fruit) {
                    echo "<li>$fruit</li>";
                }
            echo "</ul>";
        }

        $fruits[] = "Grapes";

        listFruit($fruits);

        array_push($fruits, "Tangerines", "Mangos");

        listFruit($fruits);

        //Remove the last element with array_pop()
        array_pop($fruits);

        listFruit($fruits);

        echo "<div>The array length is ".count($fruits)."</div>"
    ?>
</body>

</html>
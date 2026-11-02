<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>Dates</h1>
    <a href="index.php">Home</a>

    <div>
        <h2>Now Date Instance</h2>

        <?php

        function printDate($label, $d){
            echo "<br />";
            echo "{$label}{$d}";
            echo "<br />";
        }

        $now = time();

        echo "Epoch Seconds: {$now}";// UTC Epoch Seconds
        echo "<br />";

        printDate("Formatted date: ", date("Y-m-d H:i:s", $now));

        printDate("Formatted date: ", date("F j, Y", $now));      

        printDate("Year: ", date("Y", $now));

        // 27
        printDate("Date in Month with padded left 0: ", date("d", $now));

        printDate("Date in Month: ", date("j", $now));

        printDate("Date in Month: ", date("F", $now));

        // Abbreivated Day
        printDate("Abbreviated day: ", date("D", $now));

        // Full Day
        printDate("Full day: ", date("l", $now));

        // DOW as number Monday is 1 Sunday is 7
        printDate("DOW as number: ", date("N", $now));

        //The S format character returns st, nd, rd, or th.
        printDate("Suffix language numbering format: ", date("S", $now));
        
        printDate("The date is ", date("F", $now)." ".date("j", $now).date("S", $now));
        
        // DOW as number Monday is 1 Sunday is 0 Saturday is 6
        printDate("DOW as number: ", date("w", $now));

        // Day of the year
        printDate("DOY as number: ", date("z", $now));

        ?>
    </div>

    <div>
        <h2>Create a specific date for Sunday October 4 2026</h2>
        <?php
            $date = strtotime("2026-10-4 14:35:08");
        
            printDate("Formatted date: ", date("Y-m-d H:i:s", $date));

            printDate("Date: ", date("d", $date));
        
            printDate("Date in Month with padded left 0: ", date("d", $date));

            printDate("Date in Month: ", date("j", $date));
        ?>
    </div>


</body>

</html>
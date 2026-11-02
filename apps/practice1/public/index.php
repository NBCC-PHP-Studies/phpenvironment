<?php include("../includes/game.php"); ?>
<?php
    $botw = new Game("The Legend of Zelda Breathe of the Wild", strtotime("2017-03-3"), "https://m.media-amazon.com/images/I/81xRpvEukqS._AC_SY879_.jpg");
    $sSword = new Game("The Legend of Zelda Skyward Sword", strtotime("2011-11-18"), "https://m.media-amazon.com/images/I/81xRpvEukqS._AC_SY879_.jpg");
    $totk = new Game("The Legend of Zelda Tears of the Kingdom", strtotime("2023-05-12"), "https://m.media-amazon.com/images/I/81eHh0BNU0L.__AC_SX300_SY300_QL70_ML2_.jpg");
    $linksAwake = new Game("The Legend of Zelda Link's Awakening", strtotime("2019-09-20"), "https://m.media-amazon.com/images/I/91z5JYtUZAS.jpg");

    $games = [$botw, $sSword, $totk, $linksAwake];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 1</title>
    <style>
        *{ font-family: arial; }

        .gamecard {
            border:1px solid #d6d6d6; 
            padding:10px; 
            margin:10px;
            display:inline-block; 
            margin-right:5px;
        }

        .center{
            width:100%;
            text-align:center;
        }

        .gamecard img {            
            height:170px;
        }
    </style>
</head>

<body>
    <h1>Switch Legend of Zelda Games</h1>
    
    <?php 
    
        foreach($games as $game){
            echo "<div class=\"gamecard\"><h2>$game->title</h2>
            <div class=\"center\"><img src=\"".$game->cover."\"></div>
            <div class=\"center\">Released ".$game->releaseDateFormatted()."</div></div>";
        }
    
    ?>

</body>

</html>
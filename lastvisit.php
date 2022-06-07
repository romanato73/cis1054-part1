<?php
    date_default_timezone_set('Europe/Berlin');
    setcookie('lastvisited', date("G:i"), strtotime('Tomorrow'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <?php

    if (isset($_COOKIE['lastvisited'])){

        $lastvisit = $_COOKIE['lastvisited'] ;
        echo "You last visited this page at ".$lastvisit;
        
    }else{
        echo "Welcome. This is your first time.";
    }

    ?>
</body>
</html>
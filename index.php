<?php
/*
 * Ean Daus
 * index.php
 * 1/4/19
 * Pair Program 1
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "functions.php";

$numbers = array(7, 9, 8, 9, 8, 8, 6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program</title>
</head>
<h1>Pair Program 1</h1>
<body>
    <?php
        printArray($numbers);
        echo "<br>";
        echo largest($numbers);
        echo "<br>";
        echo average($numbers);
    ?>
</body>
</html>
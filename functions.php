<?php
/*
 * Ean Daus
 * index.php
 * 1/4/19
 * Pair Program 1
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//prints an array as a comma separated list
function printArray($array)
{
    echo '<p>' . implode($array, ", ") . '</p>';
}

//returns the largest numeric value in an array
function largest($array)
{
    //sort by descending
    rsort($array);
    return $array[0];
}

//returns the average value in an array
function average($array)
{
    $total = 0;
    foreach ($array as $item)
    {
        $total += $item;
    }
    return $total/count($array);
}

//returns an array with duplicates removed
function removeDups($array)
{
    $noDups = array();
    foreach (array_count_values($array) as $key => $val)
    {
        array_push($noDups, $key);
    }
    return $noDups;
}
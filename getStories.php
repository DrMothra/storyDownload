<?php
/**
 * Created by PhpStorm.
 * User: atg
 * Date: 06/11/2015
 * Time: 15:00
 */

$userName = $_POST["username"];
if ($userName === "" ) {
    echo "No username";
    return;
}

$userName .= '_';
$uploadDir = "./uploads";
$stories = glob("$uploadDir/$userName*.mp3");

echo json_encode($stories);
?>


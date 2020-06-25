<?php

$id = "";
$laukasA = "";
$laukasB = "";
$laukasC = "";
$atnaujinti = false;

$db = mysqli_connect('localhost', 'root', 'root', 'crud');

if(isset($_POST['id'])){
     $id = $_POST['id'];
     $laukasA = $_POST['laukasA'];
    $laukasB = $_POST['laukasB'];
    $laukasC = $_POST['laukasC'];
    $query = "INSERT INTO info (id, laukasA, laukasB, laukasC) VALUES ({$id}, {$laukasA}, '{$laukasB}', '{$laukasC}')";
    mysqli_query($db, $query);
    header('location: index.php');
}

$data = mysqli_query($db, "SELECT * FROM info");

$maxId = mysqli_query($db, "SELECT max(id)+1 AS id FROM info");
// echo var_dump($maxId) . "<br>";


?>
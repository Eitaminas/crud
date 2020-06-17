<?php

$id = "";
$laukasA = "";
$laukasB = "";
$laukasC = "";

$db = mysqli_connect('localhost', 'root', 'root', 'crud');

try {
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $laukasA = $_POST['laukasA'];
        $laukasB = $_POST['laukasB'];
        $laukasC = $_POST['laukasC'];
        $query = "INSERT INTO info (id, laukasA, laukasB, laukasC) VALUES ({$id}, {$laukasA}, '{$laukasB}', '{$laukasC}')";
        mysqli_query($db, $query);
        header('location: index.php');
    }
}
catch (Exception $e) {
    var_dump($e);
}

if($db -> query($query) === TRUE){
    echo "the New inserted id is: " . $db -> insert_id;
}

$data = mysqli_query($db, "SELECT * FROM info");

?>
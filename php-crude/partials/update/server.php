<?php
include __DIR__ .'/../database.php';

if(empty($_GET['id'])){
    die('nessun id');
}

$id = $_GET['id'];

$sql = "SELECT id,room_number, floor , beds FROM stanze WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $results=[];
    $row = $result->fetch_assoc();
    $results[]=$row;
    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }
    $stmt->close();
    $conn->close();
?>
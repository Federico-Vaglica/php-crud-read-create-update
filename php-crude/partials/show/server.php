<?php
include __DIR__ .'/../database.php';

if(empty($_GET['id'])){
    die('nessun id');
}

$id = $_GEt['id'];

$sql = "SELECT id,room_number, floor FROM stanze WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $results=[];
    while($row = $result->fetch_assoc()) {
       $results[]=$row;
    }
    var_dump('$results');
    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }
$conn->close();
?>
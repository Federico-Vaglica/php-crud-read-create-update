<?php
include __DIR__ .'/../database.php';

if(empty($_POST['roomNumber'])){
    die('Non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])){
    die('Non hai inserito il numero dei piani');
}

if(empty($_POST['beds'])){
    die('Non hai inserito il numero dei letti');
}


$sql = "INSERT INTO stanze (room_number,floor,beds,created_at,update_at) VALUES(?,?,?,NOW(),NOW())"; 

$stmt = $conn->prepare($sql);

$stmt->bind_param("iii",$roomNumber,$floor,$beds);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();
// var_dump($stmt);

if($stmt && $stmt->affected_rows > 0){
    header("Location: $basepath/show.php?id=$stmt->insert_id");
}

$stmt->close();
$conn->close();

?>


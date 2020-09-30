<?php
include __DIR__ .'/../database.php';

$sql = "UPDATE stanze SET room_number = ?, floor = ?, beds = ? WHERE id = ? ";

$stmt = $conn->prepare($sql);
$stmt -> bind_param('iiii',$roomNumber,$floor,$beds,$id);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();


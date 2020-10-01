<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';

if(empty($_POST['roomNumber'])){
    die('Non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])){
    die('Non hai inserito il numero dei piani');
}

if(empty($_POST['beds'])){
    die('Non hai inserito il numero dei letti');
}

createRoom($conn,'stanze',$basepath);


?>


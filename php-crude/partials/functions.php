<?php

function getAll($conn , $table){
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $results=[];
    while($row = $result->fetch_assoc()) {
       $results[]=$row;
    }
       
    } elseif ($result) {
        $results = [];
    } else {
        $result = false;
    }

    $conn->close();
    return $results;
}
?>
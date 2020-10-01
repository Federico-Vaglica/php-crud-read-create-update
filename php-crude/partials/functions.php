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


function removeId($conn,$table,$id,$basepath){
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn -> prepare($sql);
    $stmt ->bind_param("i",$id);
    

    $stmt -> execute();


    if($stmt && $stmt->affected_rows > 0 ){
        header("Location: $basepath/index.php?roomId=$id");
    } else {
        echo 'non ho cancellato';
    }
    $stmt->close();
    $conn->close();
}

function createRoom($conn,$table,$basepath){
    $sql = "INSERT INTO $table (room_number,floor,beds,created_at,updated_at) VALUES(?,?,?,NOW(),NOW())"; 

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
}

function getID($conn,$table,$id){
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        } elseif ($result) {
            $row="";
        } else {
            $row = false;
        }
        
        $conn->close();
        return $row;
    }
?>
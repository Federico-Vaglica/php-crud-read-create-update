<?php
include __DIR__ .'/partials/templates/header.php' ;
include __DIR__ .'/partials/home/server.php';
?>
<body>
    <div class='container'>
        <table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero stanza</th>
                    <th>Floor</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $room){?>
                <tr>
                    <td><?php echo $room['id']; ?></td>
                    <td><?php echo $room['room_number']; ?></td>
                    <td><?php echo $room['floor']; ?></td>
                    <td><a href="show.php?id=<?php echo $room['id']; ?>">VIEW</a></td>
                    <td><a href="">UPDATE</a></td>
                    <td><a href="">DELETE</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
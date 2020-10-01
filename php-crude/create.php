<?php
include __DIR__ .'/partials/templates/header.php' ;

?>

<div class="container p-3">
    <form action="partials/update/server-edit.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="text" class="form-control" name="roomNumber"  id="roomNumber">
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="text" class="form-control" name="floor" id='floor' >
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="text" class="form-control" name="beds"  id="beds">
        </div>
      
        <div class="form-group">
            <input type="submit" class="form-control bg-warning"   >
        </div>
    </form>
</div>

<?php
include __DIR__ .'/partials/templates/footer.php' ;
?>
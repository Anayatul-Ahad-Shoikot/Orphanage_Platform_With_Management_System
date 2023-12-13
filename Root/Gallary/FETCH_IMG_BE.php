<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    $sql = "SELECT * FROM gallery";
    $images = $con->query($sql);
    while ($image = $images->fetch_assoc()) {
        echo '<div class="ROW" style="float: left">';
        echo '<a class="thumbnail fancybox" rel="ligthbox" href="img/' .  $image['img_path'] .'">';
        echo '<img alt="" src="img/' . $image['img_path'] .'" />';
        echo '<div class="text-center">';
        echo '<small class="text-muted">' .$image['img_title'] . '</small>';
        echo '</div> ';
        echo '</a>';
        echo '<form action="./DELETES.php" method="POST">';
        echo '<input type="hidden" name="img_id" class="form-control" value="' . $image['img_id']. '">';
        echo '<button type="submit" title="delete" class="close-icon btn btn-danger">X</button>';
        echo '</form>';
        echo '</div>'; 
    }
?>
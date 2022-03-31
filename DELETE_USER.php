<?php
    $con = mysqli_connect("localhost","root","","5HDS");
    $sql = "select * from utilisateur";
    $result = mysqli_query($con,$sql);

echo"<h3> Suppresion d'un utilisateur</h3>";
?>
<form method="POST">
    <select name="val_sel">
        <?php
        while($row=mysqli_fetch_array($result)){
            echo"<option value=$row[prenom]>$row[prenom]</option>";
        }
        ?>
    </select>
<button type="submit" name="submit"> Supprimer </button>


<?php
    
    $select_val = $_POST['val_sel'];
    $sql_del = "DELETE FROM `utilisateur` WHERE prenom = '$select_val'";
    $suppr = mysqli_query($con, $sql_del);
    ?>
</form>

    
    
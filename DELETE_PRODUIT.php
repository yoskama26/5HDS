<?php
    $con = mysqli_connect("localhost","root","","5HDS");
    $sql = "select * from produit";
    $result = mysqli_query($con,$sql);

echo"<h3> Suppresion d'un produit</h3>";
?>
<form method="POST">
    <select name="val_sel">
        <?php
        while($row=mysqli_fetch_array($result)){
            echo"<option value=$row[nom]>$row[nom]</option>";
        }
        ?>
    </select>
<button type="submit" name="submit"> Supprimer </button>


<?php
    
    $select_val = $_POST['val_sel'];
    $sql_del = "DELETE FROM `produit` WHERE nom = '$select_val'";
    $suppr = mysqli_query($con, $sql_del);
    ?>
</form>
<?php
    $con = mysqli_connect("localhost","root","","5HDS");

        echo"test";
       
        $token = rand(1,1000000);
        $nom = $_POST['nom'];
        $descriptions = $_POST['descriptions'];
        
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $reference = $_POST['reference'];

        $sql = "INSERT INTO produit(nom, descriptions, token, prix, stock, reference) 
        VALUES('$nom','$descriptions','$token','$prix','$stock','$reference')";
        $result = mysqli_query($con,$sql);
        
    ?>

    <br>
    <button onclick="location.href='../JSON.php'">retour sur l'affichage JSON</button>
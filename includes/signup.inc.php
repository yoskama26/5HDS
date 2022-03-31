<?php
    $con = mysqli_connect("localhost","root","","5HDS");
       
        $token = rand(1,1000000);
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $role = $_POST['role'];

        $sql = "INSERT INTO utilisateur (nom, prenom, token, role) 
        VALUES ('$nom','$prenom',$token,'$role')";
        $result = mysqli_query($con,$sql);
        
    ?>

    <br>
    <button onclick="location.href='../JSON.php'">retour sur l'affichage JSON</button>
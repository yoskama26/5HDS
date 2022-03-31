<?php
$con = mysqli_connect("localhost","root","","5HDS");

if($con){
    echo "Json de la bdd utilisateur";

    $sql = "select * from utilisateur";
    $result = mysqli_query($con,$sql);
    if($result){
        header('Content-Type: application/json');
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['ID'] = $row ['ID'];
            $response[$i]['nom'] = $row ['nom'];
            $response[$i]['prenom'] = $row ['prenom'];
            $response[$i]['token'] = $row ['token'];
            $response[$i]['role'] = $row ['role'];
            $response[$i]['created_at'] = $row ['created_at'];
            $response[$i]['update_at'] = $row ['update_at'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    ?> 
    <?php
    echo"Json de la bdd produit";
    $sql_produit = "select * from produit";
    $result_produit = mysqli_query($con,$sql_produit);
    if($result_produit){
        header('Content-Type: application/json');
        $y=0;
        while($row2 = mysqli_fetch_assoc($result_produit)){
            $response2[$y]['ID'] = $row2 ['ID'];
            $response2[$y]['nom'] = $row2 ['nom'];
            $response2[$y]['descriptions'] = $row2 ['descriptions'];
            $response2[$y]['token'] = $row2 ['token'];     
            $response2[$y]['prix'] = $row2 ['prix'];
            $response2[$y]['stock'] = $row2 ['stock'];
            $response2[$y]['reference'] = $row2 ['reference'];
            $response2[$y]['created_at'] = $row2 ['created_at'];
            $response2[$y]['update_at'] = $row2 ['update_at'];
            $y++;

            
        }
        echo json_encode($response2,JSON_PRETTY_PRINT);

    }

}
else{
    echo"Database connection failed";
}

?>
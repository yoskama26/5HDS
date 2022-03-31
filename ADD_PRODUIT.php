<head>
    <title></title>
</head>

<body>
    <form action="includes/signup.produit.php" method="POST">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="descriptions" placeholder="Descriptions">
        <!-- Token -->
        <input type="number" name="prix" placeholder="prix">
        <input type="number" name="stock" placeholder="stock">
        <input type="text" name="reference" placeholder="reference">
        <button type="submit" name="submit"> Ajouter </button>
    </form>

    <button onclick="location.href='ADD_USER.php'">Pour ajouter un utilisateur</button>

</body>
<a href="produit_ajouter.php" class="btn btn-primary">
    <i class="fa fa-plus"></i> 
</a>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>Photo</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($produits as $produit): ?>
            <tr>
                <td><?= $produit["titre"] ?></td>
                <td><?= $produit["categorie"] ?></td>
                <td><?= $produit["photo"] ?></td>
                <td><?= $produit["prix"] ?></td>
                <td><?= $produit["stock"] ?></td>
                <td></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
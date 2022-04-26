<form method="post" class="mb-5 container" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Catégorie</label>
        <input type="text" name="categorie" class="form-control" required value="" >
    </div>

    <div class="form-group">
        <label for="">Titre</label>
        <input type="text" name="titre" class="form-control" required value="" >
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="" class="form-control" ></textarea>
    </div>

    <div class="form-group">
        <label for="">Sexe</label><br>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="homme" value="h" required>
            <label class="form-check-label" for="homme">Homme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="femme" value="f" required>
            <label class="form-check-label" for="femme">Femme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="mixte" value="mixte" required>
            <label class="form-check-label" for="mixte">Mixte</label>
        </div>
    </div>

    <div class="form-group">
        <label for="">Photo</label>
        <input type="file" name="photo" class="form-control"  >
    </div>

    <div class="form-group">
        <label for="">Prix</label>
        <div class="input-group mb-3">
            <input type="number" name="prix" class="form-control" required 
                   value="" >
            <div class="input-group-append">
                <span class="input-group-text" id="test">€</span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="">Stock</label>
        <input type="number" name="stock" class="form-control" required 
               value="" >
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
    <a href="" class="btn btn-danger">
        <i class="fa fa-reply"></i> Annuler
    </a>

</form>
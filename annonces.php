<?php include_once("./inc/header.php"); ?>


<div class="container">
    <form method="post" action="./models/add_annonces.php">
        <div class="mb-3">
            <label for="annonceTitle" class="form-label">Titre de l'annonce :</label>
            <input type="text" class="form-control" id="annonceTitle" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="mb-3">
            <label for="postalCode" class="form-label">Code Postal :</label>
            <input type="text" class="form-control" id="postalCode" name="postalCode" required>
        </div>

        <div class="mb-3">
            <label for="town" class="form-label">Ville :</label>
            <input type="text" class="form-control" id="town" name="town" required>
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <label for="type" class="form-label">Type d'annonce</label>
                <select name="type" id="type">
                    <option value="type">Location ou Vente</option>
                    <option value="location">Location</option>
                    <option value="vente">Vente</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prix :</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Ajouter l'annonce</button>
    </form>
</div>
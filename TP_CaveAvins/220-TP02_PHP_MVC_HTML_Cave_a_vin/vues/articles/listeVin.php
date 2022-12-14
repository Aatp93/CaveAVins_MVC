<div>
    <h1>Liste des vins</h1>
    <div class="card-columns">
        <!-- boucle sur les vins récupérés de la base -->
        <?php $listes = listeDesVins();

        foreach ($listes as $liste) {
            echo        '<div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header"> <p>' . $liste['region'] . '</p></div>
                <div class="row no-gutters">
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title"><p>' . $liste['nom'] . '</p></h5>
                            <p class="card-text">' . $liste['robe'] . '</p> <p>' . $liste['milesime'] . '</p>
                            <p class="card-text">cépage ' . $liste['cepage'] . '</p>
                            <p class="card-text">prix ht :'. $liste['prix_ht'] . '</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <img class="card-img mt-4" src="vins/'.$liste['image_name'].'" alt="image du vin">
                    </div>
                </div>
        
        <form method="post" action="index.php?entite=panier&action=ajout">
            <input type="hidden" name="'.$liste['id'].'">
            <button type="submit" class="btn btn-secondary">Ajouter au panier</button>
            <input type="number" value="1" min="1" name="quantite">
        </form>';
    } ?>
        <!-- fin de si -->
        <!-- si l'utilisateur connecté est de rôle ADMIN -->
        <a class="btn btn-secondary" href="<!-- url modif vin + id du vin -->">Modifier</a>
        <!-- fin de si -->
    </div>
    <!-- fin de boucle -->
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Cave à vins</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?entite=vin&action=liste">Lister les vins</a>
                    </li>
                    <!-- si l'utilisateur connecté a le rôle CLIENT -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?entite=panier&action=caddie">Voir votre panier</a>
                    </li>
                    <!-- fin de si -->
                   <!-- si l'utilisateur connecté a le rôle ADMIN -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gérer les vins
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<!-- url de création du vin -->">Créer un vin</a>
                            <a class="dropdown-item" href="<!-- url de modification du vin -->">Modifier un vin</a>
                            <a class="dropdown-item" href="<!-- url de suppression du vin -->">Supprimer un vin</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<!-- url de gestion du stock -->">Gérer le stock</a>
                        </div>
                    </li>
                    <!-- fin de si -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?entite=mentions">A propos</a>
                    </li>
                </ul>
                <?php
                    if(isset($_SESSION['email'])){
                   echo '<span color=white>Bonjour : '. $_SESSION['email'] .'</span><br>';
                   echo '<a class="btn btn-secondary" href="index.php?entite=user&action=logout">Déconnexion</a>';
                    } else {      
                   echo  '<a class="btn btn-secondary" href="index.php?entite=user&action=login">Connexion</a>';
                }?>
          </div>
        </nav>
        
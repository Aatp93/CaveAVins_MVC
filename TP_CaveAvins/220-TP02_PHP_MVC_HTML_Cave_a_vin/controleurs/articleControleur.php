<?php 

    switch ($action) {
        case 'liste':
            include 'modele/articleModele.php';

            $vue = 'vues/articles/listeVin';

            break;
        
        default:
            # code...
            break;
    }

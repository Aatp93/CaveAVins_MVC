<?php 

    switch ($action) {
        case 'voir':
            $vue = 'vues/panier/afficherPanier';
        
        break; 
        case 'ajout':
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
            $quantite = filter_input(INPUT_POST, 'quantite', FILTER_SANITIZE_SPECIAL_CHARS);

            if (!isset($_SESSION['panier'])) {
                $_SESSION['panier'] = [];
            }
    
            $panier = $_SESSION['panier'];
    
            if (array_key_exists($id, $panier)) {
                // article existant : modification de lq quanite
                $panier[$id] = $panier[$id] + $quantite;
            } else {
                //article inexistant : ajout dans le panier
                $panier[$id] = $quantite;
            }
            $_SESSION['panier'] = $panier;
            header('Location: index.php?entite=vin&action=liste');
        //    header('Location: index.php?');
            
            case 'caddie': 
                require_once 'dao/dao.php';
              $panier = $_SESSION['panier'];
              $articlePanier = [];
              foreach($panier as $codeArt => $qtt){
                  $article = getArticles($codeArt);
                  $article['qtt_art'] = $qtt;
                  //var_dump($article);
                  $articlePanier[] = $article;
                  var_dump($article);
              };
              $vue = 'vues/panier/afficherPanier1';

            break;
        
      
        default:
            # code...
            break;
    }

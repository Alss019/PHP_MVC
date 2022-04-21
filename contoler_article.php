<?php
    include './Utils/connectBDD.php';
    include './model/model_article.php';
    include './View/vue_article.php';

    if(isset($_POST["valider"])){

        if (isset($_POST['nom_article']) AND isset ($_POST['prix_article'])AND
        $_POST['nom_article'] != '' AND $_POST['prix_article'] != ''){
            
            $nom = $_POST['nom_article'];
            $prix = $_POST['prix_article'];
            addarticle($bdd, $nom, $prix);
            echo'<div class="container">
            <div class="alert alert-success" style=text-align:center role="alert">
            '.$nom.' a été ajouter a la BDD
            </div>
            </div>';
    
        }
        else{
            echo'<div class="container">
            <div class="alert alert-warning" style=text-align:center role="alert">
            veuillez completer les champs du formulaire
            </div>
            </div>';
        }
    }
?>
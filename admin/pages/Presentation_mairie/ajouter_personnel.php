<?php

    include_once('../../../connexion/connexion.php');

    session_start();

    /*if($_SESSION['logged_in']){
        // show page ajouter personnel
    }else{
*/
?>

    

<link rel="stylesheet" href="../../assets/styles/index.css" >
<div class="header">
    <div class="title">
        CMS pour la réalisation du site web d'une mairie<br><br>
    </div>
</div>
<div class="main-content">
    <div class="description">
        Gestion des informations de la mairie
    </div>
    <div class="instruction">
        Veuillez renseigner ou modifier les informations de la mairie.
    </div>

    <?php
        
    if (isset($_POST['nom']) and isset($_POST['parcours']) and isset($_POST['cv'])){
        $nom = $_POST['nom'];
        $parcours = $_POST['parcours'];
        $cv = $_POST['cv'];

        if(empty($nom) or empty($parcours) or empty($cv)){
            $erreur = "all fielda most be filled";
        }else{
            global $pdo;

            $query = $pdo->prepare("INSERT INTO personnel_mairie (nom, cv, parcourtProfesionnel) VALUES (?, ?, ?)");
            $query->bindParam(1, $nom);
            $query->bindParam(2, $cv);
            $query->bindParam(3, $parcours);
            $query->execute();

            $_SESSION['logged_in'] = true;
            header("Location: ajouter_personnel.php");
        }

    }else{
        $erreur = " les donnes n'ont pa ete recus de la requertte ";
    }
    ?>
    
    <div class="cadre">
        <form action="ajouter_personnel.php" method="post" class="fields">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom du personnel" class="field" required>
            <label for="parcours">Parcours</label>
            <textarea name="parcours" id="parcours" placeholder="Décrivez le parcours professionnel du membre" class="field" required></textarea>
            <label for="cv">Curriculum vitae</label>
            <input type="file" id="cv" name="cv" class="field" required>
            <input type="submit" name="submit" value="Enregistrer">
        </form>
    </div>
    
</div>
<div class="footer">
    <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
    Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
</div>


<?php
//    }
?>
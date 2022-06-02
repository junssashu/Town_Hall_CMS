<link rel="stylesheet" href="../../assets/styles/index.css" >

<?php
    if (isset($_POST['nom']) and isset($_POST['parcours']) and isset($_POST['cv']) and isset($_POST['id'])){
        $nom = $_POST['nom'];
        $parcours = $_POST['parcours'];
        $cv = $_POST['cv'];
        $id = $_POST['id'];

        if(empty($nom) or empty($parcours) or empty($cv) or empty($id)){
            $error = "all fields are required";
        }else{

            $query = $pdo->prepare("UPDATE personnel_mairie SET cv = ? nom = ? parcourtProfesionnel = ? WHERE id = ?");
            $query->execute([$cv,$nom,$parcours,$id]);

        }

    }
?>


<div class='header'>
    <div class='title'>
        CMS pour la réalisation du site web d'une mairie<br><br>
    </div>
</div>
<div class='main-content'>
    <div class='description'>
        Gestion des informations de la mairie
    </div>
    <div class='instruction'>
        Veuillez renseigner ou modifier les informations de la mairie.
    </div>
    
    <?php

        //Récupération et affichage des infos de la mairie

        $query = $pdo->prepare("SELECT * FROM personnel_mairie WHERE id = ? ");
        $query->execute($_POST['id']);

        $num = $query->rowCount();
        if( $num == 1 ){
                
            echo "
                <div class='cadre'>
                    <form action='modifier_infos.php' method='post' class='fields'>
                        <label for='nom'>Nom</label>
                        <input type='text' name='nom' id='nom' value=".$nom." placeholder='Nom de la mairie' class='field' required>
                        <label for='parcours'>Parcours</label>
                        <textarea name='parcours' id='parcours' value=".$parcours." placeholder='Décrivez le parcours professionnel du membre' class='field' required></textarea>
                        <label for='cv'>Curriculum vitae</label>
                        <input type='file' id='cv' name='cv' value=".$cv." class='field' required>
                        <input type='submit' name='submit' value='Enregistrer'>
                    </form>
                </div>
            ";
            
        }else{
            echo "sorry person ".$nom." does not exist !";
            header("Location: modifier_infos.php");
        }
    ?>
    
</div>
<div class='footer'>
    <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
    Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
</div>

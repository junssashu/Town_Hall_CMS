<link rel="stylesheet" href="../../assets/styles/index.css" >

<?php
    if ($_POST){

    }
?>


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
    
    <div class="cadre">
        <form action="ajouter_personnel.php" method="post" class="fields">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom du personnel" class="field" required>
            <label for="parcours">Parcours</label>
            <textarea name="parcours" id="parcours" placeholder="Décrivez le parcours professionnel du membre" class="field" required>
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

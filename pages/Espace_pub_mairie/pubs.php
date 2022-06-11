<?php
    require_once '../../connexion/connexion.php';
    //Sélection du style
    $query = $pdo->prepare("SELECT * FROM Style");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $style = $row['id'];
    
    echo
        "<link rel='stylesheet' href='../../assets/styles/".$style."index.css' type='text/css' ></link>\n";
?>


<div class="header">
    <div class="title">
        CMS pour la réalisation du site web d'une mairie<br><br>
    </div>
</div>
<div class="main-content">
    <div class="description">
        Gestion du contenu du site.
    </div>
    <div class="instruction">
        Gérer les publicités de la mairie.
    </div>
    
    <div class="cadre">
        <?php
            /*Affichage des publicités (dans un tableau).
            Le dernier champ du tableau porte le nom action et renverra vers la suppression ou la modification d'une publicité.*/
        
        ?>

    </div>
    
</div>
<div class="footer">
    <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
    Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
</div>

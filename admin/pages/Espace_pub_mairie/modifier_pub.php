
<link rel="stylesheet" href="../../assets/styles/index.css" >


if($_POST)
{
    //Si l'utilisateur a validé une modification
}


<div class='header'>
    <div class='title'>
    CMS pour la réalisation du site web d''une mairie<br><br>
</div>
</div>
<div class='main-content'>
<div class='description'>
    Gestion du contenu du site.
</div>
<div class='instruction'>
    Veuillez renseigner ou modifier les informations d'une publicité
</div>

<div class='cadre'>


<?php


if($_GET['id'])
{

    //Récupération des infos
   
    echo "
    <form action='modifier_pub.php' method='post' class='fields'>
        <label for='nom'>Titre</label>
        <input type='text' name='titre' id='nom' placeholder='Titre de la publicité' class='field' required>
        <label for='parcours'>Description</label>
        <textarea name='description' id='parcours' placeholder='Décrivez cette publicité' class='field' required>
        <label for='image'>Une image pour la pub</label>
        <input type='file' id='image' name='image' class='field'>
        <input type='submit' name='submit' value='Enregistrer'>
    </form>
        ";
}
?>
</div>
    </div>
        <div class='footer'>
            <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
            Pour le Travail pratique de l''unité d''enseignement INF2064, programmation web.
        </div>

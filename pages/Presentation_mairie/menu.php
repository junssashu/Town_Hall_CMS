<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/menu.css" ></link>
    <title>Menu Presentation</title>
</head>
<body>
    <div class="header">
        <div class="logo"><h2><?php if(isset($name)){echo "$name";}else{echo "mairie";} ?></h2></div>
        <div class="nav">
            <div class="activite"><a href="../Activite_marie/activites.php">Activites</a></div>
            <div class="annonces"><a href="../Annonces_mairie/annoces.php">Annonces</a></div>
            <div class="sites_touristiques"><a href="../Lieux_touristiques_mairie/sites_touristiques.php">Lieux</a></div>
            <div class="projet"><a href="../Projet_marie/projets_courants.php">Projets</a></div>
            <div class="presentation_mairie"><a href="#">Presentation</a></div>
            <div class="pub"><a href="../Espace_pub_mairie/pubs.php">Pub</a></div>
        </div>
    </div>

    <div class="main-content">
        <div class="description">
            <h1>Nom de la mairie</h1>
            <h2>Ceci est l'histoire de la mairie<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In voluptas tempore perspiciatis aperiam corrupti consectetur facilis tempora possimus! Quod, praesentium. Accusamus laudantium velit explicabo laborum tempora, molestias eum ipsam tempore.</h2>
        </div>
        <div class="instruction">
            Veuillez choisir une rubrique.
        </div>
        <div class="options">
            <a href="conseil_municipal.php" class="option">Conseil municipal</a>
            <a href="personnel.php" class="option">Le personnel</a>
        </div>
        
    </div>

    <div class="footer">
        <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
        Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
    </div>
</body>
</html>
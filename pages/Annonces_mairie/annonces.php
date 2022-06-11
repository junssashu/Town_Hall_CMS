<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/Annonces_mairie/annonces.css" ></link>
    <title>Menu Presentation</title>
</head>
<body>
    <div class="header">
        <div class="logo"><a href="../index.php"><h2><?php if(isset($name)){echo "$name";}else{echo "mairie";} ?></h2></a></div>
        <div class="nav">
            <div class="activite"><a href="../Activite_marie/activites.php">Activites</a></div>
            <div class="annonces"><a href="../Annonces_mairie/annoces.php">Annonces</a></div>
            <div class="sites_touristiques"><a href="../Lieux_touristiques_mairie/sites_touristiques.php">Lieux</a></div>
            <div class="projet"><a href="../Projet_marie/projets_courants.php">Projets</a></div>
            <div class="presentation_mairie"><a href="#">Presentation</a></div>
            <div class="pub"><a href="../Espace_pub_mairie/pubs.php">Pub</a></div>
        </div>
    </div>

    <div class="title"><h1>Annonces</h1></div>

    <div class="main-content">
        <div class="div">
            <div class="image1"></div>
            <div class="content">
                <p><h1>Decret</h1></p><br>
                <a href="../Annonces_mairie/decrets.php">voir &rarr;</a>
            </div>
        </div><br>
        <div class="div">
            <div class="image2"></div>
            <div class="content">
                <p><h1>Marchés Publiques</h1></p><br>
                <a href="../Annonces_mairie/marches_publiques.php">voir &rarr;</a>
            </div>
        </div><br>
        <div class="div">
            <div class="image3"></div>
            <div class="content">
                <p><h1>Marriages</h1></p><br>
                <a href="../Annonces_mairie/marriages.php">voir &rarr;</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="references">
            <div class="ref1"><h2>Acceuil</h2><ul class="menus">
                <li><span><a href="../index.php">Acceuil</a></span></li>
            </ul></div>
            
            <div class="ref1"><h2>Activites Mairie</h2><ul class="menus">
                <li><span><a href="../Activite_marie/activites.php">Activites</a></span></li>
                <li><span><a href="../Activite_marie/activites_courantes.php">Activites Courantes</a></span></li>
            </ul></div>
            
            <div class="ref1"><h2>Annonces Mairie</h2><ul class="menus">
                <li><span><a href="../Annonces_mairie/decrets.php">Decrets</a></span></li>
                <li><span><a href="../Annonces_mairie/marches_publiques.php">Marches Publiques</a></span></li>
                <li><span><a href="../Annonces_mairie/marriages.php">Marriages</a></span></li>
            </ul></div>
            
            <div class="ref1"><h2>Presentation Mairie</h2><ul class="menus">
                <li><span><a href="../Presentation_mairie/menu.php">Presentation Mairie</a></span></li>
            </ul></div>
            
            <div class="ref1"><h2>Lieux Touristiques Mairie</h2><ul class="menus">
                <li><span><a href="../Lieux_touristiques_mairie/sites_touristiques.php">Lieux Touristiques</a></span></li>
            </ul></div>
            
            <div class="ref1"><h2>Projets Mairie</h2><ul class="menus">
                <li><span><a href="../Projet_marie/projets_courants.php">Projets Mairie</a></span></li>
            </ul></div>

            <div class="ref1"><h2>Espace Pub Mairie</h2><ul class="menus">
                <li><span><a href="../Espace_pub_mairie/pubs.php">Espace Publicitaire</a></span></li>
            </ul></div>
        </div>
        <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
        Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
    </div>
</body>
</html>
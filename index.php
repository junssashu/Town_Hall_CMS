    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Marie - CMS</title>
    <link rel="stylesheet" href="assets/styles/index.css" ></link>
</head>
<body>

    <!-- <div class="header"> -->
        <!-- <div class="title"> -->
            <!--Récuparation et affichage du nom de la mairie à partir de la base de données -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="main-content"> -->
        <!-- <div class="description"> -->
            <!-- Bienvenu sur le site de la mairie de <?php //Nom de la mairie ?>. -->
            <!-- <a href='pages/index.php'>Administrer</a> -->
            <!-- <br><br> -->
            <!-- Ici, vous découvrirez tout ce qui concerne notre communauté -->
        <!-- </div> -->
        
        <!-- <div class="options"> -->
            <!-- <a href="pages/Presentation_mairie/menu.php" class="option">Présentation de la mairie</a> -->
            <!-- <a href="pages/Activite_mairie/activites.php" class="option">Activités</a> -->
            <!-- <a href="pages/Annonces_mairie/annonces.php" class="option">Annonces</a> -->
            <!-- <a href="pages/Espace_pub_mairie/pubs.php" class="option">Espace publicitaire</a> -->
            <!-- <a href="pages/Lieux_touristiques_mairie/sites_touristiques.php" class="option">Lieux touristiques</a> -->
            <!-- <a href="pages/Projet_marie/projets_courants.php" class="option">Projets</a> -->
        <!-- </div> -->

        <!-- <div class="publicites"> -->
            <!-- <div class='pub'> -->
            <!--?php
                require_once "connexion/connexion.php";
                //Récuperation des publicités
                $sql = "select * from Espace_pub_mairie";
                $pubs = mysqli_query($pdo, $sql);

                $publicites = "";
                while($pub=mysqli_fetch_assoc($pubs)){
                    $publicites = $publicites."";// "<div class='titre'>" .$pub['titre']. "<br></div><div class='description'>" .$pub['description']. "<br><br></div>";
                }
                echo $publicites;
            ?-->
            <!-- <h1>Espace pub</h1> -->
                <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
    <div class="box-area">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="#">Town Hall Generator</a>
                </div>

                <nav>
                    <a href="pages/index.php" class="s_inscrire">S'inscrire</a>
                    <a href="pages/connexion.php">Se connecter</a>
                    <!-- <a href="pages/Annonces_mairie/annonces.php">Annonces</a>
                    <a href="pages/Lieux_touristiques_mairie/sites_touristiques.php">Lieux touristiques</a>
                    <a href="pages/Projet_marie/projets_courants.php">Projets</a>
                    <a href="pages/Espace_pub_mairie/pubs.php">Pubs</a> -->
                </nav>
            </div>
        </header>
        
        <div class="banner">
            <h2>Bienvenu sur le createur de site web de mairie le plus populaire de tout l'universite de Yaoundé I</h2><br><br><span> creer votre site web pour votre mairie en toute simpicite  en moins de 5min et profitez d'une experience unique</span>
            <br><br><br><span class="se_connecter">Creer votre site web</span>
        </div>

        <div class="content-area">
            <div class="wrapper">
                <h2>Presentation</h2>
                <p>
                       
                </p>
            </div>
        </div>
        <div class="footer">
            <br><br><br><span>Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
            </span> 
        </div>
    </div>   
</body>
</html>
<link rel="stylesheet" href="../../assets/styles/presentation_mairie/personnel.css" type="text/css" >
<?php
    // code php permettanrt de se recupperer les donnees 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation de personnel de la marie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <div class="header-container">
            <div class="logo">
                <h2><?php if(isset($Nom_mairie)){echo "$Nom_mairie";}else{echo "Town Hall Generator";}?></h2>
            </div>
            <ul class="menu_deroulant">
                <li><a href="#">Activite</a>
                    <ul class="sous_menu_deroulant">
                        <li><a href="../Activite_marie/activites_courantes.php">Activites courantes</a></li>
                        <li><a href="../Activite_marie/activites.php">Activites</a></li>
                    </ul>
                </li>
                <li><a href="../Annonces_mairie/annonces.php">Annonces</a>
                    <ul class="sous_menu_deroulant">
                        <li><a href="../Annonces_mairie/decrets.php">Decrets</a></li>
                        <li><a href="../Annonces_mairie/marches_publiques.php">marches publiques</a></li>
                        <li><a href="../Annonces_mairie/mariages.php">mariages</a></li>
                    </ul>
                </li>
                <li><span><a href="menu.php">Presentation</a></span></li>
                <li><span><a href="../Projet_mairie/projets_courants.php">projets</a></span></li>
                <li><span><a href="../Lieux_touristiques_mairie/sites_touristiques.php">Lieux touristiques</a></span></li>
                <li><span><a href="../Espace_pub_mairie/pub.php">Espace pub</a></span></li>
            </ul>
    </div>                                                                                      
        </div>
    <!-- <div class="main-container">
        <div class="wrapper">
            <div class="card">
                <div class="content">
                    <
                </div>
            </div>
        </div>
    </div> -->
    <section class="body">
        <div class="container">
            <div class="card">
                <div class="content">
                    <div class="imgBx"><img src="../../assets/content/site_1.jpg" alt="" /></div>
                    <div class="contentBx">
                        <h3>Le maire</h3><br><span>Juns sashu</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="imgBx"><img src="../../assets/content/site_2.jpg" alt="" /></div>
                    <div class="contentBx">
                        <h3>L'adjoint au Maire</h3><br><span>Yannis</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="imgBx"><img src="../../assets/content/site_3.jpg" alt="" /></div>
                    <div class="contentBx">
                        <h3>Le conseil municipal</h3><br><span>
                            <ul>
                                <li>brel</li>
                                <li>paul</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container1">
            <div class="row">
                <div class="footer-col">
                    <h4>Activites</h4>
                    <ul class="list-footer">
                        <li><a href="../Activite_maie/Activites.php">Activites</a></li>
                        <li><a href="../Activite_maie/Activites_courantes.php">Activites Courantes</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Annonces</h4>
                    <ul class="list-footer">
                        <li><a href="../Annonces_mairie/Annoces.php">Annonces</a></li>
                        <li><a href="../Annonces_mairie/decrets.php">decrets</a></li>
                        <li><a href="../Annonces_mairie/marches_publiques.php">Marches publiques</a></li>
                        <li><a href="../Annonces_mairie/marriages.php">Mariages</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Presentation</h4>
                    <ul class="list-footer">
                        <li><a href="../Presentation_mairie/menu.php">Presentation</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Lieux Touristiques</h4>
                    <ul class="list-footer">
                        <li><a href="../Lieux_touristiques_mairie/sites_touristiques.php">Lieux Touristiques</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Espace pub</h4>
                    <ul class="list-footer">
                        <li><a href="../Espace_pub_mairie/pubs.php">Espace publicitaire</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About Us</h4>
                    <ul class="list-footer">
                        <li><a href="https://facsciences.uy1.cm/">Facsciences</a></li>
                        <li><a href="#">Conditions d'utilisateurs</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
        <span class="hidden-phone"><br><br>copyright @uy1</span>
        </div>
    </footer>
</body>
</html>
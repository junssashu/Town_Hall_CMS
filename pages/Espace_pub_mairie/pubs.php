<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/Espace_pub_mairie/pubs.css" >
    <title>Sites Touristiques</title>
</head>
<body>
    <div class="main-content">
        <div class="instruction">
            <h1>Presentation des Lieux Touristiques de la Mairie de <?php if(isset($town_hall_name)){echo $town_hall_name;}else{echo "Juns";}?></h1>
        </div>
        <hr>
        <div class="cadre">
            <?php
                        
            ?>
=======
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
>>>>>>> cdc064ebc743db631c23f460617d63848854fe72

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                    <h2 class="name">Chuttes Malabo</h2>
                    <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam et porro illo ad deleniti voluptatum iusto quia unde, doloremque natus! Dolore, fuga qui explicabo est eligendi debitis voluptates a.
                    </span>
                </div>
            </div>
            <?php
            
            ?>

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
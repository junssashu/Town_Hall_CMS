<?php
    session_start();

    if($_SESSION['logged_in']){
        // show page ajouter personnel

        require_once '../connexion/connexion.php';

        $query = $pdo->prepare("SELECT * FROM Presentation_mairie");
        $query->execute();
        if($query->rowCount()==0){
            $nom = 'Pas de nom défini';
            $histoire = "Pas d'histoire définie";
            $missions = "Pas de missions définies";
            $query = $pdo->prepare("INSERT INTO Presentation_mairie (nom, histoire, missions) VALUES (?, ?, ?)");
            $query->bindValue(1, $nom);
            $query->bindValue(2, $histoire);
            $query->bindValue(3, $missions);
            $query->execute();
            
            $query = $pdo->prepare("SELECT * FROM Presentation_mairie");
            $query->execute();
        }


        $row = $query->fetch(PDO::FETCH_ASSOC);
        $nom = $row['nom'];
        $histoire = $row['histoire'];
        $missions = $row['missions'];

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../admin/assets/styles/style.css">
    <title>index_admin</title>
</head>

<body>

    <header>
        <nav class="wrapper">
            <ul>
                <li class="menu">
                    <a href="pages/Presentation_mairie/menu.php">Personnalisation</a>
                    <ul class="submenu">
                        <li><a href="../admin/pages/Presentation_mairie/ajouter_infos.php">Ajouter les informations</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/ajouter_personnel.php">Ajouter du personnel</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/conseil_municipal.php">Conseil municipale</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/histoire.php">Histoire</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/missions.php">Missions</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/modifier_infos.php">Modifier les informations</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/modifier_personnel.php">Modifier du personnel</a></li>
                        <li><a href="../admin/pages/Presentation_mairie/personnel.php">Personnel</a></li>
                    </ul>
                </li>

                <li class="activite">
                    <a href="pages/Activite_mairie/activites.php">activites</a>
                    <ul class="submenu">
                        <li><a href="../admin/pages/Activite_mairie/creer_activite.php">Creer une activite</a></li>
                        <li><a href="../admin/pages/Activite_mairie/modifier_activite.php">Modifier une activite</a></li>
                        <li><a href="../admin/pages/Activite_mairie/supprimer_activite.php">Supprimer une activite</a></li>
                    </ul>
                </li>

                <li class="annonce">
                    <a href="pages/Annonces_mairie/annonces.php">Annonces</a>
                    <ul class="submenu">
                        <li><a href="../admin/pages/Annonces_mairie/creer_annonce.php">Creer une annonce</a></li>
                        <li><a href="../admin/pages/Annonces_mairie/decrets.php">Decrets</a></li>
                        <li><a href="../admin/pages/Annonces_mairie/marches_publiques.php">Marches publiques</a></li>
                        <li><a href="../admin/pages/Annonces_mairie/marriages.php">Mariages</a></li>
                        <li><a href="../admin/pages/Annonces_mairie/modifier_annonce.php">Modifier une annonce</a></li>
                        <li><a href="../admin/pages/Annonces_mairie/supprimer_annonce.php">Supprimer une anonce</a></li>
                    </ul>
                </li>

                <li class="pub">
                    <a href="pages/Espace_pub_mairie/pubs.php">Espace publicitaire</a>
                    <ul class="submenu">
                        <li><a href="../admin/pages/Espace_pub_mairie/creer_pub.php">Creer pub</a></li>
                        <li><a href="../admin/pages/Espace_pub_mairie/modifier_pub.php">Modifier une publicite</a></li>
                        <li><a href="../admin/pages/Espace_pub_mairie/supprimer_pub.php">Supprimer une publicite</a></li>
                    </ul>
                </li>

                <li class="site">
                    <a href="pages/Lieux_touristiques_mairie/sites_touristiques.php">Lieux touristiques</a>
                    <ul class="submenu">
                        <li><a href="../admin/pages/Lieux_touristiques_mairie/creer_lieu.php">Creer un lieu</a></li>
                        <li><a href="../admin/pages/Lieux_touristiques_mairie/modifier_lieu.php">Modifier un lieu</a></li>
                        <li><a href="../admin/pages/Lieux_touristiques_mairie/supprimer_lieu.php">Supprimer un lieu</a></li>
                    </ul>
                </li>

                <li class="projet">
                    <a href="pages/Projet_marie/projets_courants.php">Projets</a>
                    <ul class="submenu">
                        <li><a href="../admin/pages/Projet_marie/projets_courants.php">Projets courants</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </header>


    <div class="banner-container">
        <?php
            if(empty($nom))
                echo "<h1>TOWN HALL GENERATOR</h1>";
            else
                echo "<h1>".$nom."</h1>";
        ?>
    </div>

    <div class="content">
    <div class="wrapper">
            <h2>Description</h2>
            <?php
                if(empty($nom))
                    echo "
                    <p>
                        Ceci est un cms<br>
                        Plus précisément, cette application web (cms) vous permettra de réaliser aisément votre site web présentant votre mairie.<br>
                        Aucune connaissance en programmation web n'est requise, vous n'avez qu'à utiliser ce qui vous est présenté.
                        <br><br>Vous etes actuellement connectés en mode admin.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nemo, enim neque nobis mollitia pariatur sequi ullam, eius iusto incidunt unde eaque. Esse dolorum fugiat libero accusantium molestiae voluptatum quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi odio totam ea nulla vitae nemo pariatur explicabo iusto inventore quaerat asperiores expedita rerum blanditiis officia, sunt nisi similique aliquam. Fugit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore adipisci consectetur, fuga porro pariatur commodi incidunt id quis soluta nam tempora odio ipsam voluptatem libero? Odio cum vero nulla mollitia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio quis neque, nesciunt necessitatibus quasi dicta blanditiis dolorem placeat vero, hic laboriosam maiores praesentium possimus sequi debitis provident consequuntur voluptate! Ipsum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam, debitis asperiores quidem, consequatur sunt enim aut magni aliquam nostrum a facilis quae nihil delectus nulla quo error eius nesciunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptate iste corrupti fugit placeat eaque nisi provident, assumenda totam similique possimus eos incidunt quia iusto non sequi et! Fuga, laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque illo quis molestias maxime eligendi unde quas, hic excepturi magni et quaerat odit ab necessitatibus animi quae, reiciendis minima aspernatur nam.<br><br><br>
                    </p>
                    ";
                else{
                    echo "
                        <h3 class='second-titre'>Histoire</h3><p class='detail'>".$histoire."</h3>
                        <h3 class='second-titre'>Missions</h3><p class='detail'>".$missions."</h3>";
                }
            ?>
            
        </div>
        <footer class="footer">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui laudantium nulla aperiam officiis maiores tempora voluptate, facere id velit expedita blanditiis ducimus adipisci tempore nisi, aliquam est cupiditate? Sit, necessitatibus?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias autem beatae placeat, praesentium culpa nostrum eveniet ipsum nesciunt. Reiciendis esse voluptas libero accusantium quos dolore, nostrum blanditiis sequi ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ab, aspernatur alias exercitationem molestias, impedit saepe ducimus quaerat qui dicta facilis a itaque. Sed velit labore, dolorem numquam natus architecto!</p>
            </div>
            <span class="hidden-phone"><br><br>copyright @uy1</span><br><br>
            <span class="thg"><strong><a href="../../admin/index.php">Town Hall Generator</a>
                </strong></span>
        </footer>
    </div>


</body>

</html>

<?php
    }
    else{
        header('Location: ../pages/index.php');
    }
?>
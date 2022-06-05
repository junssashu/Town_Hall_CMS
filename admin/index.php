<?php
    session_start();

    if($_SESSION['logged_in']){
        // show page ajouter personnel
?>


<link rel="stylesheet" href="assets/styles/index.css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_admin</title>
</head>

<body>
    <header>

        <nav class="wrapper">
            <ul>
                <li class="menu">
                    <a href="pages/Presentation_mairie/menu.php">Personnalisation</a>
                    <ul class="submenu">
                        <li><a href="#">ajouter</a></li>
                        <li><a href="#">conseil municipale</a></li>
                    </ul>
                </li>

                <li class="activite">
                    <a href="pages/Activite_mairie/activites.php">activites</a>
                    <ul class="submenu">
                        <li><a href="#">creer activite</a></li>
                        <li><a href="#">modifier activite</a></li>
                    </ul>
                </li>

                <li class="annonce">
                    <a href="pages/Annonces_mairie/annonces.php">Annonces</a>
                    <ul class="submenu">
                        <li><a href="#">decrets</a></li>
                        <li><a href="#">mariage</a></li>
                    </ul>
                </li>

                <li class="pub">
                    <a href="pages/Espace_pub_mairie/pubs.php">Espace publicitaire</a>
                    <ul class="submenu">
                        <li><a href="#">creer pub</a></li>
                        <li><a href="#">modifier pub</a></li>
                    </ul>
                </li>

                <li class="site">
                    <a href="pages/Lieux_touristiques_mairie/sites_touristiques.php">Lieux touristiques</a>
                    <ul class="submenu">
                        <li><a href="#">creer lieu</a></li>
                        <li><a href="#">modifier lieu</a></li>
                    </ul>
                </li>

                <li class="projet">
                    <a href="pages/Projet_marie/projets_courants.php">Projets</a>
                    <ul class="submenu">
                        <li><a href="#">projet courant</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </header>

    <section class="wrapper">

        <div class="banner-container">
            <h1>TOWN HALL GENERATOR</h1>
        </div>


        <div class="content">
            <div class="wrapper">
                <h2>Description</h2>
                <p>
                    Ceci est un cms<br>
                    Plus précisément, cette application web (cms) vous permettra de réaliser aisément votre site web présentant votre mairie.<br>
                    Aucune connaissance en programmation web n'est requise, vous n'avez qu'à utiliser ce qui vous est présenté.
                    <br><br>Vous etes actuellement connectés en mode admin.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nemo, enim neque nobis mollitia pariatur sequi ullam, eius iusto incidunt unde eaque. Esse dolorum fugiat libero accusantium molestiae voluptatum quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi odio totam ea nulla vitae nemo pariatur explicabo iusto inventore quaerat asperiores expedita rerum blanditiis officia, sunt nisi similique aliquam. Fugit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore adipisci consectetur, fuga porro pariatur commodi incidunt id quis soluta nam tempora odio ipsam voluptatem libero? Odio cum vero nulla mollitia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio quis neque, nesciunt necessitatibus quasi dicta blanditiis dolorem placeat vero, hic laboriosam maiores praesentium possimus sequi debitis provident consequuntur voluptate! Ipsum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam, debitis asperiores quidem, consequatur sunt enim aut magni aliquam nostrum a facilis quae nihil delectus nulla quo error eius nesciunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptate iste corrupti fugit placeat eaque nisi provident, assumenda totam similique possimus eos incidunt quia iusto non sequi et! Fuga, laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque illo quis molestias maxime eligendi unde quas, hic excepturi magni et quaerat odit ab necessitatibus animi quae, reiciendis minima aspernatur nam.<br><br><br>
                </p>
            </div>
        </div>
        </div>

        <!--  <div class="footer">
        <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
        Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
    </div> -->

<<<<<<< HEAD
</body>

<?php
}else{
    header("Location: ../pages/index.php");
}
?>
=======
    </section>

</body>

</html>
>>>>>>> eba2f9a77212ddd7cc4a850fce8e00370cc061fd

<?php
session_start();

if ($_SESSION['logged_in']) {
    // show page ajouter personnel
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/personnel.css">
        </link>
    </head>

    <body>

        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="../../index.php">Town Hall Generator</a>
                </div>

                <nav>
                    <a href="../../../" class="s_inscrire">Se déconnecter</a>
                    <a href="ajouter_personnel.php" class="s_inscrire">Ajouter un membre du personnel</a>
                </nav>
            </div>
        </header>
        <div class="main-content">
            <div class="description">
                Ceci est un cms<br>
                Plus précisément, cette application web (cms) vous permettre ade réaliser aisément votre site web présentant votre mairie.<br>
                Aucune connaissance en programmation web n'est requise, vous n'avez qu'à utiliser ce qui vous est présenté.
                <br><br><br>
            </div>
            <table rules='all' style="align-self: center; width: 80%; border-color: rgb(216, 14, 14); border-width: 0.3em; border-style:dashed; text-align: center; column-rule-style: solid; column-rule-width: 0.3em; column-rule-color: rgb(216, 14, 14);">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Parcours Professionnel</th>
                    </tr>
                </thead>

                <?php
                require_once '../../connexion/connexion.php';

                $query = 'SELECT * FROM Personnel_mairie ORDER BY nom ASC';
                $p = mysqli_query($db, $query);

                $chaine = "";
                while ($row = mysqli_fetch_assoc($p)) {
                    //ecriture des tags de retour
                    $chaine = $chaine . "<tr>\n";
                    $chaine = $chaine . "<td>" . $row['nom'] . "</td>";
                    $chaine = $chaine . "<td>" . $row['parcoursProfessionnel'] . "</td>";
                    $chaine = $chaine . "\n<td>\n";
                    $chaine = $chaine . "<a href='modifier_personnel.php?matricule=" . $row['id'] . "'>Modifier</a> / <a href='supprimer_personnel.php?matricule=" . $row['id'] . "'>Supprimer</a>\n</td>";
                    $chaine = $chaine . "\n</td>\n";
                    $chaine = $chaine . "\n</tr>\n";
                }
                if ($chaine == '')
                    $chaine = "<tr><td>Aucun personnel enregistrée.</td></tr>";


                ?>
            </table>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>Creer son site web</h4>
                            <ul class="list-footer">
                                <li><a href="#">S'inscrire</a></li>
                                <li><a href="#">Se connecter</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>About Us</h4>
                            <ul class="list-footer">
                                <li><a href="http://facsciences.cm">Facsciences</a></li>
                                <li><a href="#">Conditions d'utilisateurs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span class="hidden-phone"><br><br>copyright @uy1</span>
            </footer>
        </div>

        <<<<<<< HEAD </div>
            <div class="footer">
                <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
                Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
            </div>
            =======
    </body>

    </html>


<?php
} else {
    header("Location: ../pages/index.php");
}
?>
>>>>>>> d48cbf08e9f9eca72a53526c85afefde35042754
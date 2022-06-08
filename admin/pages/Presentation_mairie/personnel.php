<?php
session_start();

if ($_SESSION['logged_in']) {
    // show page ajouter personnel
?>



<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Personnel</title>
    <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/personnel.css" ></link>
</head>
<body>
=======
    <!DOCTYPE html>
    <html lang="en">
>>>>>>> 89d8449d46d5b0e0ff171067ea323bd42a51c5e1

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/personnel.css">
        </link>
    </head>

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
            <br><br><br><br><br><br>
        </div>

        <?php
            if(isset($error)){   
            echo "
                <br>
                <span style='color:rgb(230, 142, 11)'>" .$error. "</span>
                <br>";
            }

            if(isset($success)){   
            echo "
                    <br>
                    <span style='color:greenyellow'>" .$success. "</span>
                    <br>";
            }
        ?>
        <table rules='all'>
            <thead>
                    <tr>
                        <th><b style="color:greenyellow;">Nom</b></th>
                        <th><b style="color:greenyellow;">Parcours Professionnel</b></th>
                        <th><b style="color:greenyellow;">Actions</b></th>
                    </tr>
            </thead>

        <?php
            require_once '../../connexion/connexion.php';
            
            $query = 'SELECT * FROM Personnel_mairie ORDER BY nom ASC';
            $result = mysqli_query($db, $query);

            $string="";
                while($row=mysqli_fetch_assoc($result)) {
                    //ecriture des tags de retour
                    $string=$string."<tr>\n";
                    $string=$string."<td>".$row['nom']."</td>\n";
                    $string=$string."<td>".$row['parcoursProfessionnel']."</td>\n";
                    $string=$string."\n<td>\n";
                    $string = $string."<a href='modifier_personnel.php?id=".$row['id']."' class='upd'>Modifier</a> / <a href='supprimer_personnel.php?id=".$row['id']."' class='del'>Supprimer</a>\n</td>";
                    $string=$string."\n</td>\n";
                    $string=$string."\n</tr>\n";
                    
            }
            if($string=='')
                $string="<tr><td>Aucun personnel enregistrée.</td></tr>";
            echo $string;

        ?>
        </table>

        <footer class="footer" style='margin-top:22%;'>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Activités</title>
    <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/personnel.css" ></link>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="../../index.php">Town Hall Generator</a>

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
                        <th><b style="color:greenyellow;">Description</b></th>
                    </tr>
            </thead>

        <?php
            require_once '../../connexion/connexion.php';
            
            $query = $pdo->prepare('SELECT * FROM Activites_mairie ORDER BY nomActivite ASC'); // Requete de recuperation des infos dans la base donnees, dans la table correspondantes à la page actuelle
            $query->execute(); //Execution de la requete

            // Affichage des informations sans un tableau
            $string="";
                while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                    //ecriture des tags de retour
                    $string=$string."<tr>\n";
                    $string=$string."<td>".$row['nomActivite']."</td>\n";
                    $string=$string."<td>".$row['description']."</td>\n";
                    
                    $string=$string."\n</tr>\n";
                    
            }
            if($string=='')
                $string="<tr><td>Aucune activité enregistrée.</td></tr>";
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
            </div>
            <span class="hidden-phone"><br><br>copyright @uy1</span>
        </footer>
    </div>

</body>
</html>


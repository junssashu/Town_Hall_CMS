<?php
    session_start();

    if($_SESSION['logged_in']){
        // show page modifier_personnel
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Modification d'activité</title>
    <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/personnel.css" ></link>
    <link rel="stylesheet" href="../../assets/styles/form.css" ></link>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="../../index.php">Town Hall Generator</a>
            </div>

            <nav>
                <a href="../../../" class="s_inscrire">Se déconnecter</a>
                <a href="activites.php" class="s_inscrire">Les activités de la mairie</a>
            </nav>
        </div>
    </header>
    <div class="main-content">
        <div class="description">
            Ceci est un cms<br>
            Plus précisément, cette application web (cms) vous permettre ade réaliser aisément votre site web présentant votre mairie.<br>
            Aucune connaissance en programmation web n'est requise, vous n'avez qu'à utiliser ce qui vous est présenté.
            <br><br>
        </div>

        <?php
        //define('UPLOAD_DIR', '/home/Documents/cvs/');
        ini_set('display_errors', 1);
        error_reporting(E_ALL|E_STRICT);            

        require_once '../../../connexion/connexion.php';
        if ($_POST){ //Si un formulaire a ete envoye
            
            extract($_POST); // On extrait les valeurs des champs (ces valeurs seront stockées dans des valeurs de nom identiques aux nom des champs, par exemple $nom pouur le champ input d'attribut name='nom')

            $result1 = $result2 = true;
            if(!empty($nom)){ //Si l'utilisateur a changé le nom
            $query = $pdo->prepare("UPDATE Activites_mairie set nomActivite=? WHERE id=?"); // Preparation de la requete
                $query->bindValue(1, $nom); // Assignation des parametres à la requete en fonction de leurs positions
                $query->bindValue(2, $id);
                $result1 = $query->execute(); // Execution de la requete
            }
            if(!empty($parcours)){ //Si l'utilisateur a changé le parcours
                $query = $pdo->prepare("UPDATE Activites_mairie set description=? WHERE id=?");
                    $query->bindValue(1, $parcours);
                    $query->bindValue(2, $id);
                    $result2 = $query->execute();
            }

            if($result1 and $result2){ // Si tout s'est bien passé
                $success = "Enregistrement effectué avec succès!";
                header("Location: activites.php"); //On redirige l'utilisateur à la page personnel.php
            }
            else
                $error = "L'enregistrement n'a pas été effectué. Veuillez réessayer.<br>Si le problème persiste, veuillez contacter le service technique.";
        
        }
        else{ //Si une demande de modification est effectuée
            $id = $_GET['id']; //On récupère l'identifiant passé dans la requete
            $query = $pdo->prepare("SELECT * FROM Activites_mairie WHERE id=?"); //On prépare la requete
            $query->bindVaLue(1, $id); // Paramétrage de la requete
            $query->execute(); // Execution

            $row = $query->fetch(PDO::FETCH_ASSOC); //Récupération du premier enregistrement (dans ce cas, l'unique vu que l'id est unique par enregistrement dans Personnel_mairie)
            $nom = $row['nomActivite']; // Récupération du nom de cet enregistrement
            $parcours = $row['description']; //Récupération de son parcours Professionnel
            //Ces deux dernières varibles seront affichées dans les champs, pour que l'admin sache ce veux modifier
        }
        ?>
        
        <div class="fields">
            <div class='field' style="padding-bottom:0%;">
                <p>Pour modifier les informations d'une activité, renseigner les informations à modifier:</p>
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
            <form action="modifier_activite.php" method="post" enctype="multipart/form-data">
                <input type='text' name='id' value="<?php if(isset($id)) echo $id; ?>" style="width:0%;">
                <div class="field">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom de l'activité" class="field" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>    
                
                <div class="field">
                <label for="parcours">Description</label>
                <textarea name="parcours" id="parcours" class="field" placeholder="<?php if(isset($parcours)) echo $parcours; ?>"></textarea>
                </div>    

                <div class="field">
                <input type="submit" name="submit" class="field" value="Enregistrer">
                </div>    
            </form>
        </div>
        
    </div>

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

</body>
</html>

<?php
}else{
    header("Location: ../../../pages/index.php");
}
?>
<?php
    session_start();

    if($_SESSION['logged_in']){
        // show page ajouter personnel
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Ajout d'activités</title>
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
        ini_set('display_errors', 1);
        error_reporting(E_ALL|E_STRICT);            

        if ($_POST){
            
            require_once '../../../connexion/connexion.php'; // Incluion du fichier de connexion à la base de données (de façon obligatoire), ce fichier définit la variable $pdo
            extract($_POST);
            if(empty($nom) or empty($description)){ //Si au moins un des champs est vide
                $erreur = "Vous devez remplir tous les champs!";
            }
            else{

                $query = $pdo->prepare("INSERT INTO Activites_mairie (nomActivite, description) VALUES (?, ?)"); // Préparatino de la requete d'ajout
                //Parametrage de la requete
                $query->bindValue(1, $nom);
                $query->bindValue(2, $description);

                $result = $query->execute();// Execution de la requete
                if($result)
                    $success = "Enregistrement effectué avec succès!";
                else
                    $error = "L'enregistrement n'a pas été effectué. Veuillez réessayer.<br>Si le problème persiste, veuillez contacter le service technique.";
        
            }
        }
        ?>
        
        <div class="fields">
            <div class='field' style="padding-bottom:0%;">
                <p>Pour enregistrer un nouveau membre, renseigner les informations suivantes:</p>
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
            <form action="creer_activite.php" method="post" enctype="multipart/form-data">
                <div class="field">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom de l'activité" class="field" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>    
                
                <div class="field">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Décrivez l'activité en question" class="field" value="<?php if(isset($description)) echo $description; ?>" required></textarea>
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
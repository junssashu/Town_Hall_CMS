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
    <title>Connexion</title>
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
                <a href="personnel.php" class="s_inscrire">Liste du personnel</a>
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

        if ($_POST){
            
            require_once '../../../connexion/connexion.php';
            extract($_POST);
            if(empty($nom) or empty($parcours)/* or empty($_FILES["cv"]["name"])*/){
                $erreur = "Vous devez remplir tous les champs!";
            }
            else{

                //Requirements for file storing
                /*$targetDir = "../../../data/cvs/";
                $fileName = basename($_FILES['cv']["name"]);
                $storingPath = $targetDir . $fileName;
                $fileType = pathinfo($storingPath, PATHINFO_EXTENSION);
                */

                //if($fileType=='pdf'){ //if the file is a pdf file
                    //if(move_uploaded_file($_FILES['cv']['tmp_name'], $storingPath)){//if the file has been successfully uploaded
                        $query = $pdo->prepare("INSERT INTO Personnel_mairie (nom, cv, parcoursProfessionnel) VALUES (?, NULL, ?)");
                        $query->bindValue(1, $nom);
                        $query->bindValue(2, $parcours);

                        $result = $query->execute();
                        if($result)
                            $success = "Enregistrement effectué avec succès!";
                        else
                            $error = "L'enregistrement n'a pas été effectué. Veuillez réessayer.<br>Si le problème persiste, veuillez contacter le service technique.";
                    //}
                  //  else $error = "Le CV n'a pas pu etre téléchargé vers le serveur.";
                //}
                //else
                  //  $error = "Veuillez choisir un fichier pdf.";
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
            <form action="ajouter_personnel.php" method="post" enctype="multipart/form-data">
                <div class="field">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom du personnel" class="field" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>    
                
                <div class="field">
                <label for="parcours">Parcours</label>
                <textarea name="parcours" id="parcours" placeholder="Décrivez le parcours professionnel du membre" class="field" value="<?php if(isset($parcours)) echo $parcours; ?>" required></textarea>
                </div>    
                
                <div class="field">
                <label for="cv">Curriculum vitae</label>
                <input type="file" id="cv" name="cv" required>
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
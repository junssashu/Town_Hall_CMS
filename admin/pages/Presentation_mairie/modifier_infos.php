
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
    <title>Modification infos</title>
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
                <a href="menu.php" class="s_inscrire">Présentation</a>
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
        if ($_POST){
            
            extract($_POST);

            //Requirements for file storing
            /*$targetDir = "../../../data/cvs/";
            $fileName = basename($_FILES['cv']["name"]);
            $storingPath = $targetDir . $fileName;
            $fileType = pathinfo($storingPath, PATHINFO_EXTENSION);
            */

            //if($fileType=='pdf'){ //if the file is a pdf file
                //if(move_uploaded_file($_FILES['cv']['tmp_name'], $storingPath)){//if the file has been successfully uploaded
                    //We verify if there's already a row in the table, if not we create it
                                    
                    $result1 = $result2 = $result3 = true;
                    if(!empty($nom)){
                        $query = $pdo->prepare("UPDATE Presentation_mairie SET nom=?");
                        $query->bindValue(1, $nom);
                        $result1 = $query->execute();
                    }
                    if(!empty($histoire)){
                        $query = $pdo->prepare("UPDATE Presentation_mairie SET histoire=?");
                        $query->bindValue(1, $histoire);
                        $result2 = $query->execute();
                    }
                    if(!empty($missions)){
                        $query = $pdo->prepare("UPDATE Presentation_mairie SET missions=?");
                        $query->bindValue(1, $missions);
                        $result3 = $query->execute();
                    }

                    if($result1 and $result2 and $result3){
                        $success = "Modification effectuée avec succès!";
                        header("Location: menu.php");
                    }else
                        $error = "L'enregistrement n'a pas été effectué. Veuillez réessayer.<br>Si le problème persiste, veuillez contacter le service technique.";
                //}
                //  else $error = "Le CV n'a pas pu etre téléchargé vers le serveur.";
            //}
            //else
                //  $error = "Veuillez choisir un fichier pdf.";
            
        }
        else{

            $query = $pdo->prepare("SELECT * FROM Presentation_mairie");
            $query->execute();
            if($query->rowCount()==0){
                $query = $pdo->prepare("INSERT INTO `Presentation_mairie` (`nom`) VALUES ('Pas de nom défini')");
                $query->execute();
                $success = 'yeahhh';
            }

            $query = $pdo->prepare("SELECT * FROM Presentation_mairie");
            $query->execute();

            $row = $query->fetch(PDO::FETCH_ASSOC);
            $nom = $row['nom'];
            $histoire = $row['histoire'];
            $missions = $row['missions'];
        }
        ?>
        
        <div class="fields" style ="height:100vh;">
            <div class='field' style="padding-bottom:0%;">
                <p>Pour modifier les informations de la mairie, renseigner les informations suivantes:</p>
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
            <form action="modifier_infos.php" method="post" enctype="multipart/form-data">
                <div class="field" style="margin-top:1%;margin-bottom:0%;">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom du personnel" class="field" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>    
                
                <div class="field" style="height:30vh;margin-top:0%;margin-bottom:0%;">
                <label for="histoire">Histoire</label>
                <textarea name="histoire" id="histoire" class="field" placeholder="<?php if(isset($histoire)) echo $histoire; ?>"></textarea>
                </div>
                    
                <div class="field" style="height:30vh;margin-top:0%;margin-bottom:0%;">
                <label for="missions">Missions<br>(Vous pouvez utilisez du code HTML/CSS pour marquer les points importants):</label>
                <textarea name="missions" id="missions" class="field" placeholder="<?php if(isset($missions)) echo $missions; ?>"></textarea>
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
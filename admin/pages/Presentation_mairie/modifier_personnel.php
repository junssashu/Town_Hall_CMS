<link rel="stylesheet" href="../../assets/styles/Presentation_mairie/modifier_personnel.css">

<<<<<<< HEAD
    if($_SESSION['logged_in']){
        // show page modifier_personnel
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Modification personnel</title>
    <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/personnel.css" ></link>
    <link rel="stylesheet" href="../../assets/styles/form.css" ></link>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="../../index.php">Town Hall Generator</a>
            </div>
=======
if($_SESSION['logged_in']){
// show page ajouter personnel
?>

if($_POST)
{
//Si l'utilisateur a validé une modification
}
>>>>>>> 89d8449d46d5b0e0ff171067ea323bd42a51c5e1

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
            $result1 = $result2 = true;        
            if(!empty($nom)){
            $query = $pdo->prepare("UPDATE Personnel_mairie set nom=? WHERE id=?");
                $query->bindValue(1, $nom);
                $query->bindValue(2, $id);
                $result1 = $query->execute();
            }
            if(!empty($parcours)){
                $query = $pdo->prepare("UPDATE Personnel_mairie set parcoursProfessionnel=? WHERE id=?");
                    $query->bindValue(1, $parcours);
                    $query->bindValue(2, $id);
                    $result2 = $query->execute();
            }

            if($result1 and $result2){
                $success = "Enregistrement effectué avec succès!";
                header("Location: personnel.php");
            }
            else
                $error = "L'enregistrement n'a pas été effectué. Veuillez réessayer.<br>Si le problème persiste, veuillez contacter le service technique.";
                //}
                //  else $error = "Le CV n'a pas pu etre téléchargé vers le serveur.";
            //}
            //else
                //  $error = "Veuillez choisir un fichier pdf.";
        
        }
        else{
            $id = $_GET['id'];
            $query = $pdo->prepare("SELECT * FROM Personnel_mairie WHERE id=?");
            $query->bindVaLue(1, $id);
            $query->execute();

            $row = $query->fetch(PDO::FETCH_ASSOC);
            $nom = $row['nom'];
            $parcours = $row['parcoursProfessionnel'];
        }
        ?>
        
        <div class="fields">
            <div class='field' style="padding-bottom:0%;">
                <p>Pour modifier les informations d'un membre, renseigner les informations à modifier:</p>
            </div>
            <?php
                if(isset($error)){   
                echo "
                    <br>
                    <span style='color:rgb(230, 142, 11)'>" . $error . "</span>
                    <br>";
        }

        if (isset($success)) {
            echo "
                        <br>
                        <span style='color:greenyellow'>" . $success . "</span>
                        <br>";
<<<<<<< HEAD
                }
            ?>
            <form action="modifier_personnel.php" method="post" enctype="multipart/form-data">
                <input type='text' name='id' value="<?php if(isset($id)) echo $id; ?>" style="width:0%;">
                <div class="field">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom du personnel" class="field" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>    
                
                <div class="field">
                <label for="parcours">Parcours</label>
                <textarea name="parcours" id="parcours" class="field" placeholder="<?php if(isset($parcours)) echo $parcours; ?>"></textarea>
                </div>    
                
                <div class="field">
                <label for="cv">Curriculum vitae</label>
                <input type="file" id="cv" name="cv">
                </div>    
                
                <div class="field">
=======
        }
        ?>
        <form action="ajouter_personnel.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom du personnel" class="field" value="<?php if (isset($nom)) echo $nom; ?>" required>
            </div>

            <div class="field">
                <label for="parcours">Parcours</label>
                <textarea name="parcours" id="parcours" placeholder="Décrivez le parcours professionnel du membre" class="field" value="<?php if (isset($parcours)) echo $parcours; ?>" required></textarea>
            </div>

            <div class="field">
                <label for="cv">Curriculum vitae</label>
                <input type="file" id="cv" name="cv" required>
                <input type='text' value='<?php if (isset($id)) echo $id; ?>' hidden>
            </div>

            <div class="field">
>>>>>>> 89d8449d46d5b0e0ff171067ea323bd42a51c5e1
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


if ($_GET['id']) {

    //Récupération des infos

    echo "
            <form action='modifier_personnel.php' method='post' class='fields'>
                <label for='nom'>Nom</label>
                <input type='text' name='nom' id='nom' placeholder='Nom de la mairie' class='field' required>
                <label for='parcours'>Parcours</label>
                <textarea name='parcours' id='parcours' placeholder='Décrivez le parcours professionnel du membre' class='field' required></textarea>
                <label for='cv'>Curriculum vitae</label>
                <input type='file' id='cv' name='cv' class='field' required>
                <input type='submit' name='submit' value='Enregistrer'>
            </form>
            
            
            ";
}
?>
</div>
</div>
<div class='footer'>
    <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
    Pour le Travail pratique de l''unité d''enseignement INF2064, programmation web.
</div>
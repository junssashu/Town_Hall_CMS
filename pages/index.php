<?php

    session_start();

//    include_once("../connexion/connexion.php");
/*
    if ( isset($_SESSION['logged_in'])){
        // display admin page
        echo "connected";
    }else{

*/?>
<?php
    require_once '../connexion/connexion.php';
    //Sélection du style
    $query = $pdo->prepare("SELECT * FROM Style");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $style = $row['id'];
    
    echo
        "<link rel='stylesheet' href='../assets/styles/".$style."index.css' type='text/css' ></link>\n
        <link rel='stylesheet' href='../assets/styles/".$style."account.css' type='text/css' ></link>";
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="../index.php">Town Hall Generator</a>
            </div>

            <nav>
                <a href="inscription.php" class="s_incrire">S'inscrire</a>
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
            require_once "../connexion/connexion.php";
            if($_POST){
                extract($_POST);
    
                if( empty($login) or empty($password)){
                    $error = " Veillez remplir tous les champs ";
                }else{
    
                    $querry = $pdo->prepare("SELECT * FROM Login WHERE user_password = PASSWORD(?) AND user_name = ?");
                    $querry->bindValue(1, $password);
                    $querry->bindValue(2, $login);
                    $querry->execute();
    
                    $num = $querry->rowCount();
    
                    $error = 'yesss';
                    if( $num == 1){
    
                        $_SESSION['logged_in'] = true;
                        header("Location: ../admin/index.php");
                        exit();
                        exit();
    
                    }else{
    
                        $error = "Informations incorrectes !";
    
                    }
                }
            }else
        ?>
        <div class="fields">
            <form action="index.php" method="POST">
                <div class="field">
                    <p>Veuillez vous identifier:</p>
                </div>
                <?php
                    if(isset($error)){
                        ?>   
                    <br>
                    <span style="color:rgb(230, 142, 11)"><?php echo $error; ?></span>
                    <br>
                    <?php
                    }
                    ?>
                <div class="field">
                    <label for='name'>Nom: </label>
                    <input id='name' name = 'login' type="text" placeholder='Veuillez entrer votre nom'>
                </div>
                <div class="field">
                    <label for='name'>Mot de passe: </label>
                    <input id='password' name = 'password' type="password" placeholder="Veuillez insérer un mot de passe">
                </div>
                <div class="field">
                    <input class="validation" name = 'check' type="submit" value="Se connecter">
                </div>
                <div class="field">
                    <p style="font-size:100%;">Vous n'avez pas de compte? <span><a href="inscription.php" style="text-decoration:none; color:rgb(230, 142, 11);">Créez-en un!</a></span></p>
                </div>
            </form>
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

  //  }

?>
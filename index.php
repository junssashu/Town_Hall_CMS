<?php

    session_start();

    include_once("connexion/connexion.php");

    if ( isset($_SESSION['logged_in'])){
        // display admin page
        echo "connected";
    }else{

?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Marie - CMS</title>
    <link rel="stylesheet" href="assets/styles/index.css" ></link>
</head>
<body>

    <div class="header">
        <div class="title">
            CMS pour la réalisation du site web d'une mairie<br><br>
        </div>
    </div>
    <div class="main-content">
        <div class="description">
            Ceci est un cms<br>
            Plus précisément, cette application web (cms) vous permettre ade réaliser aisément votre site web présentant votre mairie.<br>
            Aucune connaissance en programmation web n'est requise, vous n'avez qu'à utiliser ce qui vous est présenté.
            <br><br>
        </div>
        <?php
            if (isset($_POST['login']) and isset($_POST['password'])){
                $login = $_POST['login'];
                $password = $_POST['password'];
    
                if( empty($login) or empty($password)){
                    $error = " veillez remplir tout les champs ";
                }else{
    
                    $querry = $pdo->prepare("SELECT * FROM login WHERE user_password = ? AND user_name = ?");
                    $querry->bindValue(1, $password);
                    $querry->bindValue(2, $login);
                    $querry->execute();
    
                    $num = $querry->rowCount();
    
                    if( $num == 1){
    
                        $_SESSION['logged_in'] = true;
                        header("location : index.php");
                        exit();
    
                    }else{
    
                        $error = "informations incorrectes !";
    
                    }
                }
            }
        ?>
        <div class="instruction">
            Veuillez vous connecter pour commencer
        </div>
        <div class="fields">
            <form action="index.php" method="POST">
                <?php
                    if(isset($error)){
                ?>   
                    <br>
                    <span style="color:red"><?php echo $error; ?></span>
                    <br>
                <?php
                    }
                ?>
                <input class="field" name = 'login' type="text">
                <input class="field" name = 'password' type="password">
                <input class="validation" name = 'check' type="submit" value="Se connecter">
            </form>
        </div>
        <div class="footer">
            <br><br><br> Par les étudiants de la faculté des sciences de l'université de Yaoundé I.<br>
            Pour le Travail pratique de l'unité d'enseignement INF2064, programmation web.
        </div>
    </div>

</body>
</html>

<?php

    }

?>
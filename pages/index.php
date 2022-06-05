
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/styles/index.css" ></link>
    <link rel="stylesheet" href="../assets/styles/account.css" ></link>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="../index.php">Town Hall Generator</a>
            </div>

            <nav>
                <a href="inscription.php" class="s_inscrire">S'inscrire</a>
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
                require_once '../connexion/connexion.php';
                if(isset($pdo))
                $error = 'yesss';
                if (isset($_POST['login']) and isset($_POST['password'])){
                $login = $_POST['login'];
                $password = $_POST['password'];
    
                if( empty($login) or empty($password)){
                    $error = " Veillez remplir tous les champs ";
                }else{
    
                    $querry = $pdo->prepare("SELECT * FROM Login WHERE User_password = PASSWORD(?) AND User_name = ?");
                    $querry->bindValue(1, $password);
                    $querry->bindValue(2, $login);
                    $querry->execute();
    
                    $num = $querry->rowCount();
    
                    if( $num == 1){
    
                        $_SESSION['logged_in'] = true;
                        header("Location: ../admin/index.php");
                        exit();
    
                    }else{
    
                        $error = "Informations incorrectes !";
    
                    }
                }
            }
        ?>
        <div class="fields">
            <form action="index.php" method="POST">
                <div class="field">
                    <p>Veuillez vous identifier:</p>
                </div>
                <?php
                    if(isset($error)){
                ?>
                    <span style="color:rgb(230, 142, 11)"><?php echo $error; ?></span>
                
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


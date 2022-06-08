   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Inscription</title>
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
                <a href="index.php" class="s_inscrire">Se connecter</a>
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
                
                ini_set('display_errors', 1);
                error_reporting(E_ALL|E_STRICT);            

                if ($_POST){
                    extract($_POST);
        
                    if( empty($login) or empty($password) or empty($password_conf)){
                        $error = " Veuillez remplir tous les champs ";
                    }
                    else{

                        if($password == $password_conf){
                            
                            $querry = $pdo->prepare("INSERT INTO Login (user_name, user_password) VALUES(?, PASSWORD(?))");
                            $querry->bindValue(1, $login);
                            $querry->bindValue(2, $password);
                            if($querry->execute())
                                header("Location: index.php");
                            else
                                $error = "Problème d'enrgistrement";
                        }
                        else
                            $error = "Les mots de passent entrés ne semblent pas correspondre!";
                    }
                }
                //We check if there is already a registered user. If so, registration isn't available anymore.
                $user = $pdo->prepare("SELECT * FROM Login");
                $user->execute();

                if($user->rowCount() > 0)
                    echo "
                        <div class='fields'>
                        <p style='font-size:100%;''>Le compte administrateur a déjà été créé, veuillez <span><a href='index.php' style='text-decoration:none; color:rgb(230, 142, 11);'> vous connecter!</a></span></p>
                        </div>
                    ";
                else {
                ?>
                    <div class='fields' style='height:60vh;'>
                        <form action='inscription.php' method='POST'>
                            <div class='field'>
                                <p>Veuillez renseigner les informations suivantes:</p>
                            </div>
                            <?php
                                if(isset($error)){   
                                echo "
                                    <br>
                                    <span style='color:rgb(230, 142, 11)'>" .$error. "</span>
                                    <br>";
                                }
                            ?>
                            <div class='field'>
                                <label for='name'>Nom: </label>
                                <input id='name' name = 'login' type='text' placeholder='Veuillez entrer votre nom' value="<?php if(isset($login)) echo $login; ?>">
                            </div>
                            <div class='field'>
                                <label for='password'>Mot de passe: </label>
                                <input id='password' name = 'password' type='password' placeholder='Veuillez insérer un mot de passe'  value="<?php if(isset($password)) echo $password; ?>">
                            </div>
                            <div class='field'>
                                <label for='password_conf'>Confirmation de mot de passe: </label>
                                <input id='password_conf' name = 'password_conf' type='password' placeholder='Veuillez confirmer le mot de passe'>
                            </div>
                            <div class='field'>
                                <input class='validation' name = 'check' type='submit' value="S'inscrire">
                            </div>
                            <div class='field'>
                                <p style='font-size:100%;'>Vous avez déjà un compte? <span><a href='index.php' style='text-decoration:none; color:rgb(230, 142, 11);'>Connectez vous!</a></span></p>
                            </div>
                        </form>
                    </div>

        <?php
            }
    ?>
        
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


<?php

include_once('connexion.php');

class Login{

    public function connect(){

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

        }else{
            $error = "erreur de requette http";
        }
    }

}

?>
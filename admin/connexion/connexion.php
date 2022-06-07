<?php
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $db = mysqli_connect('localhost', 'root', '', 'cms');
        //$bdd = new PDO('mysql:host=localhost;dbname=cms', 'root', '', $pdo_options);
        //echo "Connexion réussie";
        $db->query("SET NAMES UTF8");
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }


?>
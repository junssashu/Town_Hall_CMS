<?php
    session_start();

    if($_SESSION['logged_in']){
    // delete the designated staff member
    
    if($_GET)
    {
        require_once '../../../connexion/connexion.php';
        $id = $_GET['id'];
        $query = $pdo->prepare("DELETE FROM Activites_mairie WHERE id=?");
        $query->bindVaLue(1, $id);
        if($query->execute()){
            $success = "Suppression effectué avec succès !";
            header("Location: activites.php");
        }
        else{
            $error = "Un problème est survenu. Veuillez reessayer !";
            header("Location: activites.php");    
        }

    }
    else{
        echo 'Veuillez retourner à la page des activités';
    }

}else{
    header("Location: ../../../pages/index.php");
}
?>
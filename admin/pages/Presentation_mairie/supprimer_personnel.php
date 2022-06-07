<?php
    session_start();

    if($_SESSION['logged_in']){
    // delete the designated staff member
    
    if($_GET)
    {
        require_once '../../../connexion/connexion.php';
        $id = $_GET['id'];
        $query = $pdo->prepare("DELETE FROM Personnel_mairie WHERE id=?");
        $query->bindVaLue(1, $id);
        if($query->execute()){
            $success = "Suppression effectué avec succès !";
            header("Location: personnel.php");
        }
        else{
            $error = "Un problème est survenu. Veuillez reessayer !";
            header("Location: personnel.php");    
        }

    }
    else{
        echo 'Veuillez retourner à la page du personnel';
    }

}else{
    header("Location: ../../../pages/index.php");
}
?>
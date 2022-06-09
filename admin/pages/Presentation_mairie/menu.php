    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Acceuil Marie, initial-scale=1.0">
    <title>Présentation</title>
    <link rel="stylesheet" href="../../assets/styles/Presentation_mairie/menu.php" ></link>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="../../index.php">Town Hall Generator</a>
            </div>

            <nav>
                <a href="../../../" class="s_inscrire">Se déconnecter</a>
                <a href="modifier_infos.php" class="s_inscrire">Modifier la présentation</a>
                <a href="conseil_municipal.php" class="s_inscrire">Conseil municipal</a>
                <a href="personnel.php" class="s_inscrire">Gérer le personnel</a>
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

        require_once '../../../connexion/connexion.php';

        $query = $pdo->prepare("SELECT * FROM Presentation_mairie");
        $query->execute();
        if($query->rowCount()==0){
            $nom = 'Pas de nom défini';
            $histoire = "Pas d'histoire définie";
            $missions = "Pas de missions définies";
            $query = $pdo->prepare("INSERT INTO Presentation_mairie (nom, histoire, missions) VALUES (?, ?, ?)");
            $query->bindValue(1, $nom);
            $query->bindValue(2, $histoire);
            $query->bindValue(3, $missions);
            $query->execute();
            
            $query = $pdo->prepare("SELECT * FROM Presentation_mairie");
            $query->execute();
        }
        

        $row = $query->fetch(PDO::FETCH_ASSOC);
        $nom = $row['nom'];
        $histoire = $row['histoire'];
        $missions = $row['missions'];
        
        echo 
        "
            <div class='content'>
                <h1 class='nom'>".$nom."</h1>
                <h3 class='second-titre'>Histoire</h3><p class='detail'>".$histoire."</h3>
                <h3 class='second-titre'>Missions</h3><p class='detail'>".$missions."</h3>
            </div>
        ";
    ?>

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

</body>
</html>

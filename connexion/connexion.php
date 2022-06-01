<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=cms", "root", "");
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
?>
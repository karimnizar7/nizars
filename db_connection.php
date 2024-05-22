<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL (généralement localhost)
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$database = "emailing"; // Nom de votre base de données

// Créer une connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>

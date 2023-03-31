<?php
function getRoomIdForMovie($movieName){
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=tt', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupération du nom du film depuis la requête HTTP
$movieName = $_GET['movieName'];

// Requête SQL pour récupérer l'ID de la salle pour le film donné par son nom
$sql = "SELECT idroom FROM movie WHERE moviename = :moviename";

// Préparation de la requête SQL
$stmt = $db->prepare($sql);

// Remplacement des paramètres dans la requête
$stmt->bindParam(':moviename', $movieName);

// Exécution de la requête
$stmt->execute();

// Récupération du résultat de la requête
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Fermeture de la connexion à la base de données
$db = null;

// Retourne l'ID de la salle ou null si la requête n'a pas retourné de résultat
echo $result ? $result['idroom'] : null;
}
?>
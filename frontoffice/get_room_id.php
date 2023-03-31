<?php
// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=tt', 'root', '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    //  echo ("connected successfully");

}
catch (PDOException $e) {
    die('Erreur: ' . $e->getMessage());
}

// Récupération du nom du film depuis la requête GET
//if(isset($_GET['movie'])) {
    $movieName = $_GET['movie'];
   // $movieName = "Hamilton";
//} else {
    // Afficher un message d'erreur ou rediriger l'utilisateur vers une autre page
  //  exit('Erreur: le nom du film est manquant');
//}

// Requête SQL SELECT pour chercher l'ID de la salle à partir du nom du film
$sql = "SELECT idroom FROM movie WHERE moviename = :moviename";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':moviename', $movieName);
$stmt->execute();

// Récupération du résultat de la requête
$roomId = $stmt->fetchColumn();

// Affichage de l'ID de la salle dans le champ de saisie correspondant
if($roomId !== null) {
    echo '<input type="text" class="form-control input" id="roomId" name="idRoom" placeholder=" " value="' . $roomId . '">';
   
} else {
    // Afficher un message d'erreur ou rediriger l'utilisateur vers une autre page
    exit('Erreur: le nom du film est introuvable');
}
?>

<script>
    console.log("Room ID:", <?php echo $roomId; ?>);
</script>
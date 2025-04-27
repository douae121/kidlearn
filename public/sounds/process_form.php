<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $email = $conn->real_escape_string($_POST['email']);
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT); // Hashage du mot de passe

    // Préparation de la requête SQL
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse) 
            VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Inscription réussie !"]);
    } else {
        echo json_encode(["success" => false, "message" => "Erreur: " . $conn->error]);
    }
}

$conn->close();
?> 
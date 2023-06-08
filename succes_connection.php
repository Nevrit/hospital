<?php
// Établir la connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=patient;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (!$pdo) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}

// Récupérer les valeurs du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier les informations de connexion
$stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Informations de connexion valides, créer une session pour l'utilisateur
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];

    // Rediriger l'utilisateur vers sa section
    header('Location: space.php');
    exit();
} else {
    // Informations de connexion invalides
    echo "Adresse e-mail ou mot de passe incorrect.";
}
?>

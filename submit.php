<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&family=Signika+Negative&display=swap"
    rel="stylesheet">
</head>

<body>
    <?php
    // Établir la connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=patient;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if (!$db) {
        die("Échec de la connexion à la base de données : " . $e->getMessage());
    }

    // Récupérer les données du formulaire
    $nom = $_POST['last-name'];
    $prenom = $_POST['first-name'];
    $adresse = $_POST['address'];
    $age = $_POST['age'];
    $gender = $_POST['sexe'];
    $contact = $_POST['telephone'];
    $email = $_POST['email'];
    $allergie = $_POST['allergie'];
    $groupe_sanguin = $_POST['blood-group'];

    // Requête SQL pour insérer les données dans la table "patient"
    $sql = "INSERT INTO user (nom, prenom, adresse, age, sexe, telephone, email, allergie, groupe_sanguin) VALUES ('$nom', '$prenom', '$adresse', '$age', '$gender', '$contact', '$email', '$allergie', '$groupe_sanguin')";

    if ($db->exec($sql)) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur lors de l'inscription : " . $db->errorInfo()[2];
    };
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <h2 class="bold">
                        Medicio medical group
                    </h2>
                    <h3 class="light">
                        Provide best quality healthcare for you
                    </h3>
                    <div class="plan">
                        <p>
                            <span class="awesome"><i class="fa-regular fa-circle-check"></i></span>
                            <span class="contact">
                                <strong>Affordable monthly premium packages</strong> <br />
                            Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis </span>
                        </p>
                        <p>
                            <span class="awesome"><i class="fa-regular fa-circle-check"></i></span>
                            <span class="contact">
                                <strong>Affordable monthly premium packages</strong> <br />
                            Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis </span>
                        </p>
                        <p>
                            <span class="awesome"><i class="fa-regular fa-circle-check"></i></span>
                            <span class="contact">
                                <strong>Affordable monthly premium packages</strong> <br />
                            Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis </span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6">
                    <img src="images/doctor.png" width="100%" alt="">
                </div>
            </div>

        </div>

    </div>
</div>
<section>
    <div class="container text-center">
        <h1>Message bien reçu !</h1>

        <?php 
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        if (!isset($_POST['email']) || !isset($_POST['message'])) {
            echo('Il faut un email et un message pour soumettre le formulaire.');

                // Arrête l'exécution de PHP
            return;
        }
        ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Nom</b> : <?php echo $lastName; ?></p>
                <p class="card-text"><b>Prénom</b> : <?php echo $firstName ; ?></p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
</body>

</html>

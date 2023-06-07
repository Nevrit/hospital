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
    <!----------------------------------------------- INSERTION DU CODE BOOSTRAP NAVBAR -------------------------------------------------------------------- -->
    <?php include('header.php'); ?>
    <!----------------------------------------------- INSERTION DU CODE BOOSTRAP NAVBAR -------------------------------------------------------------------- -->

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
                                    Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis
                                </span>
                            </p>
                            <p>
                                <span class="awesome"><i class="fa-regular fa-circle-check"></i></span>
                                <span class="contact">
                                    <strong>Affordable monthly premium packages</strong> <br />
                                    Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis
                                </span>
                            </p>
                            <p>
                                <span class="awesome"><i class="fa-regular fa-circle-check"></i></span>
                                <span class="contact">
                                    <strong>Affordable monthly premium packages</strong> <br />
                                    Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis
                                </span>
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
    <?php
    // Établir la connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=patient;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if (!$pdo) {
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
    $groupe_sanguin = $_POST['bloodGroup'];

    // Vérifier si l'utilisateur existe déjà
    $verify = $pdo->prepare("SELECT * FROM user WHERE email = :email OR telephone = :telephone");
    $verify->execute(['email' => $email, 'telephone' => $contact]);
    $user = $verify->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Afficher un message d'erreur si l'utilisateur existe déjà
        ?>
        <section>
            <div class="container text-center">
                <h1>Votre inscription a échouée !</h1>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><b>Félicitations</b> : <?php echo $nom . ' ' . $prenom; ?> <b>votre inscription n'a bien été prise en compte
                            <br />veuillez vérifier votre adresse mail et/ou votre numéro de téléphone </b>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    } else {
        // Requête SQL pour insérer les données dans la table "user"
        $sql = "INSERT INTO user (nom, prenom, adresse, age, sexe, telephone, email, allergie, groupe_sanguin) 
        VALUES (:nom, :prenom, :adresse, :age, :sexe, :telephone, :email, :allergie, :groupe_sanguin)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'age' => $age,
            'sexe' => $gender,
            'telephone' => $contact,
            'email' => $email,
            'allergie' => $allergie,
            'groupe_sanguin' => $groupe_sanguin
        ]);

        // Afficher un message de succès
        ?>
        <section>
            <div class="container text-center">
                <h1>Inscription réussie !</h1>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><b>Félicitations</b> : <?php echo $nom . ' ' . $prenom; ?> <b>votre inscription a bien été prise en compte</b></p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>

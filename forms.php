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
        <div class="container">
            <h2 class="text-center mb-5">
                Inscrivez-vous
            </h2>
            <div class="col-lg-12">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first-name" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="first-name" placeholder="Entrez votre prénom">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last-name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Entrez votre nom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="tel" class="form-control" id="contact"
                                placeholder="Entrez votre numéro de contact">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="Entrez votre adresse">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="blood-group" class="form-label">Groupe sanguin</label>
                            <select class="form-select" id="blood-group">
                                <option value="" selected disabled>Choisissez votre groupe sanguin</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
    <!-- FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
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

    <div class="jumbotron-sign jumbotron-fluid">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="plan">
                            <h3>
                                <strong>Connectez-vous</strong>
                            </h3>
                            <p>
                                    afin d'accéder à votre espace
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
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
            <div class="center-div">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Connexion</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Adresse mail</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Entrez votre adresse mail">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Entrez votre mot de passe">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Confirmer mot de passe</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Entrez votre mot de passe">
                                </div>
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </form>
                            <p class="mt-2">
                                Pas encore de compte ?
                                <a href="forms.php">
                                    <strong> Inscrivez-vous </strong>
                                </a>

                            </p>
                        </div>
                    </div>
                </div>
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
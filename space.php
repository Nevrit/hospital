<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de l'espace utilisateur</title>
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
    <!-- HEADER -->
    <?php include('header.php'); ?>
    <!-- HEADER -->

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
                            <!-- Contenu spécifique pour l'espace utilisateur connecté -->
                            <h4>Liste des rendez-vous</h4>
                            <ul>
                                <li>Rendez-vous 1</li>
                                <li>Rendez-vous 2</li>
                                <li>Rendez-vous 3</li>
                            </ul>
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
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <h4>Liste des médecins disponibles</h4>
                        <ul>
                            <li>Docteur 1 - Horaire</li>
                            <li>Docteur 2 - Horaire</li>
                            <li>Docteur 3 - Horaire</li>
                        </ul>
                    </div>
                    <div class="mt-2">
                        <h4>Vos Rendez-vous</h4>
                        <ul>
                            <li>Docteur 1 - Annulé</li>
                            <li>Docteur 2 - Annulé</li>
                            <li>Docteur 3 - Annulé</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <h4>Prendre un rendez-vous</h4>
                    <form>
                        <div class="mb-3">
                            <label for="doctor">Médecin</label>
                            <select class="form-select" id="doctor">
                                <option selected>Choisir un médecin</option>
                                <option value="1">Docteur 1</option>
                                <option value="2">Docteur 2</option>
                                <option value="3">Docteur 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="mb-3">
                            <label for="time">Heure</label>
                            <input type="time" class="form-control" id="time">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Motif du Rendez-vous</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Est un premier rendez-vous ?
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Réserver</button>
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
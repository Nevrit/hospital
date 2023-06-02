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

    <div class="jumbotron-doctor jumbotron-fluid">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                       <div class="plan">
                        <h3>
                            PRENEZ RENDEZ-VOUS AVEC UN DOCTEUR
                        </h3>
                        <h5>
                            Avec nos spécialiste vous serez dans de bonnes mains
                        </h5>
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
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="images/doctor.png" class="card-img-top card-img-zoom" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Cardiologie</h5>
                        <p class="card-text">Description du service de cardiologie.</p>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="images/doctor.png" class="card-img-top card-img-zoom" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Orthopédie</h5>
                        <p class="card-text">Description du service d'orthopédie.</p>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="images/doctor.png" class="card-img-top card-img-zoom" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Radiologie</h5>
                        <p class="card-text">Description du service de radiologie.</p>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres cartes pour les autres services ici -->
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="images/doctor.png" class="card-img-top card-img-zoom" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Cardiologie</h5>
                        <p class="card-text">Description du service de cardiologie.</p>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="images/doctor.png" class="card-img-top card-img-zoom" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Orthopédie</h5>
                        <p class="card-text">Description du service d'orthopédie.</p>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="images/doctor.png" class="card-img-top card-img-zoom" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Radiologie</h5>
                        <p class="card-text">Description du service de radiologie.</p>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres cartes pour les autres services ici -->
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
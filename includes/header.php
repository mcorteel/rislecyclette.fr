<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rislecyclette</title>
        <link href="/assets/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="/assets/app.js" crossorigin="anonymous"></script>
        <link href="/assets/app.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/assets/favicon.png" />
        <link rel="icon" type="image/png" sizes="256x256" href="/assets/favicon.png"/>
        <link rel="apple-touch-icon" sizes="256x256" href="/assets/favicon.png">
    </head>
    <body class="d-flex flex-column vh-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_navbar" aria-controls="main_navbar" aria-expanded="false" aria-label="Afficher le menu de navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/assets/logo.svg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                    Rislecyclette
                </a>
                <div class="collapse navbar-collapse" id="main_navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ateliers.php">Ateliers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/association.php">L'association</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/calendrier.php">Calendrier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ressources.php">Ressources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn btn-dark if_light" type="button" data-bs-theme-value="dark">Mode sombre</button>
                        <button class="btn btn-light if_dark" type="button" data-bs-theme-value="light">Mode clair</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container flex-grow-1 overflow-auto">

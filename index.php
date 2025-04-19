<?php include_once('includes/header.php') ?>

<div class="text-center">
    <h1 class="mt-5 mb-2">Rislecyclette</h1>
    <hr class="w-50 d-inline-block" />
    <h2 class="mt-2 mb-4">Les ateliers d'auto-réparation de vélo de Risle et Charentonne</h2>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mb-3">
    <div class="col">
        <div class="card text-bg-success img-card" style="background-image: url(/assets/photos/velo_gratuit.jpg)">
            <div class="card-body">
                <h5 class="card-title">Mon vélo gratuit</h5>
                <p class="card-text">Vous n'avez pas de vélo&nbsp;? L'association Rislecyclette vous propose d'en choisir un dans son stock de vélos à remettre en état <strong>gratuitement</strong> pour le réparer pendant nos ateliers&nbsp;!</p>
                <a href="/velo_gratuit.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <hr class="w-50 d-inline-block" />
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Permanences</h5>
                <p class="card-text">Vous souhaitez venir réparer votre vélo, discuter, adhérer&nbsp;? Rendez-vous à l'une de nos permanences&nbsp;!</p>
                <a href="/calendrier.php" class="btn btn-primary">Le calendrier</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card img-card text-bg-light" style="background-image: url(/assets/photos/contact.jpg)">
            <div class="card-body">
                <h5 class="card-title">Nous contacter</h5>
                <p class="card-text">N'hésitez pas à nous contacter pour plus d'informations&nbsp;! Vous pouvez aussi vous abonner à notre liste de diffusion pour être toujours au courant des dernières actualités.</p>
                <a href="/contact.php" class="btn btn-outline-primary">Nous contacter</a>
                <a href="https://framagroupes.org/sympa/subscribe/rislecyclette" class="btn btn-primary">S'abonner</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card img-card text-bg-light" style="background-image: url(/assets/photos/atelier.jpg)">
            <div class="card-body">
                <h5 class="card-title">Nos ateliers</h5>
                <p class="card-text">Nous avons déjà ouvert des ateliers à Bernay et Serquigny et nous prévoyons d'en ouvrir d'autres dans l'IBTN en 2024.</p>
                <a href="/ateliers.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nos partenaires</h5>
                <p class="card-text">C'est grâce à l'aide de nos partenaires que nous pouvons vous proposer une offre de qualité. Merci à eux&nbsp;!</p>
                <a href="/partenaires.php" class="btn btn-outline-primary">Nos partenaires</a>
            </div>
        </div>
    </div>
</div>

<?php include_once('includes/footer.php') ?>

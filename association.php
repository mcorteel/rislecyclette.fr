<?php include_once('includes/header.php'); ?>

<?php
include_once('vendor/Parsedown.php');
$parsedown = new Parsedown();
$content = file_get_contents('https://nuage.rislecyclette.fr/index.php/s/GaM3o5KXJAxK3br/download');
?>

<h2 class="mt-3">L'association Rislecyclette</h2>

<p>L'association Rislecyclette est une association loi 1901 créée le 7 octobre 2023 à Bernay. Elle a pour objectifs de :</p>
<ul>
    <li>Créer et gérer des ateliers d'autoréparation</li>
    <li>Favoriser la pratique du vélo sur notre territoire</li>
    <li>Favoriser la vélonomie.</li>
</ul>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-4 mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nos statuts</h5>
                <p class="card-text">Les statuts expliquent la raison d'être et le fonctionnement de notre association.</p>
                <a href="/resources/statuts.pdf" class="btn btn-primary">Voir les statuts</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Notre règlement intérieur</h5>
                <p class="card-text">Le règlement intérieur fixe les règles de fonctionnement de l'assocation et des ateliers d'autoréparation.</p>
                <a href="/association/reglement-interieur.php" class="btn btn-primary">Voir le règlement</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-3">Fonctionnement</h2>

<p>En adhérant (à prix libre) à  l'association Rislecyclette, vous pouvez accéder à tous nos ateliers d'auto-réparation.</p>
<ul>
    <li>Révisez votre vélo avec l'aide de bénévoles</li>
    <li>Réparez grâce à notre stock de pièces neuves ou d'occasion</li>
    <li>Partagez un bon moment avec d'autres cyclistes.</li>
</ul>
<p>Pour ça, rien de plus simple : rendez-vous à <a href="calendrier.php">l'une de nos permanences</a> !</p>

<?php include_once('includes/footer.php') ?>

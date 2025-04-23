<?php
include_once('includes/header.php');
?>

<h2>Calendrier</h2>

<p>Voici les prochaines dates d'atelier, de réunion ou d'animation à retenir.</p>

<?php

$events = array(
    array(
        'date' => '2025-06-28 14:00:00',
        'time' => '14h-17h',
        'title' => 'Atelier de réparation à la ressourcerie de Menneval',
        'description' => 'Venez remettre votre vélo en état avec l\'aide de nos bénévoles.',
        'image' => 'https://nuage.rislecyclette.fr/index.php/s/i9nn75iNwGWHk36/download',
    ),
    array(
        'date' => '2025-06-08 12:00:00',
        'time' => '12h-15h',
        'title' => 'Fête du vélo à Brionne',
        'description' => 'Animations dans le parc de Lorraine : musique, spectacle, atelier d\'auto-réparation',
    ),
    array(
        'date' => '2025-06-08 10:00:00',
        'time' => '10h-12h',
        'title' => 'Départs à vélo pour la fête du vélo à Brionne',
        'description' => 'Rislecyclette organisera des départs à vélo pour Brionne (précisions à venir)',
    ),
    array(
        'date' => '2025-06-07 12:00:00',
        'time' => '12h-17h',
        'title' => 'Fête du vélo à la Ressourcerie de Menneval',
        'description' => 'Food trucks, parcours vélo pour enfants et adultes, atelier d\'auto-réparation, spectacle et plus encore !',
    ),
    array(
        'date' => '2025-06-07 11:00:00',
        'time' => '11h',
        'title' => 'Fête du vélo sur le parvis de la mairie de Bernay, place Gustave Héon',
        'description' => 'Spectacle cyclo-thématique Biciman.',
        'image' => 'https://nuage.rislecyclette.fr/index.php/s/bZagNy4GcG7MRMZ/download',
    ),
    array(
        'date' => '2025-05-31 14:00:00',
        'time' => '14h-17h',
        'title' => 'Atelier de réparation à la ressourcerie de Menneval',
        'description' => 'Venez remettre votre vélo en état avec l\'aide de nos bénévoles.',
        'image' => 'https://nuage.rislecyclette.fr/index.php/s/i9nn75iNwGWHk36/download',
    ),
    array(
        'date' => '2025-05-17 14:00:00',
        'time' => '14h-18h',
        'title' => 'Après-midi démontage aux Nouvelles coordonnées',
        'description' => 'Remettons de l\'ordre dans notre stock de vélos en démontant et en triant ! Ouvert à tou·tes, même sans aucune connaissance en mécanique. C\'est justement l\'occasion de découvrir de nouvelles choses sur le fonctionnement d\'un vélo.',
        'image' => 'https://nuage.rislecyclette.fr/index.php/s/kEHT5BsWmwywLnD/download',
    ),
    array(
        'date' => '2025-04-26 14:00:00',
        'time' => '14h-17h',
        'title' => 'Atelier de réparation à la ressourcerie de Menneval',
        'description' => 'Venez remettre votre vélo en état avec l\'aide de nos bénévoles.',
        'image' => 'https://nuage.rislecyclette.fr/index.php/s/i9nn75iNwGWHk36/download',
    ),
);
$events = array_filter($events, fn($e) => (int)(new \DateTime($e['date']))->format('Ymd') >= (int)date('Ymd'));
usort($events, fn($a, $b) => new \DateTime($a['date']) <=> new \DateTime($b['date']));
$monthFormatter = new \IntlDateFormatter('fr_FR', pattern: 'LLLL Y');
$dateFormatter = new \IntlDateFormatter('fr_Fr', pattern: 'EEEE d LLLL');
$month = $monthFormatter->format(new \DateTime('2024-01-01'));

foreach($events as $event) {
    $date = new \DateTime($event['date']);
    $newMonth = $monthFormatter->format($date);
    if($newMonth !== $month) {
        ?>
        <h3 class="mt-3"><?= ucfirst($newMonth) ?></h3>
        <?php
        $month = $newMonth;
    }
    ?>
    <div class="card mb-2">
        <div class="card-header">
            <?= ucfirst($dateFormatter->format($date)) ?>
            <?php if($event['time'] ?? null) { ?>
                <?= $event['time'] ?>
            <?php } ?>
        </div>
        <div class="card-body">
            <?php if(isset($event['image'])) { ?>
                <img class="float-end" style="max-height: 60px" src="<?= $event['image'] ?>" />
            <?php } ?>
            <h5 class="card-title">
                <?= $event['title'] ?>
            </h5>
            <p class="card-text"><?= $event['description'] ?? '' ?></p>
        </div>
    </div>
    <?php
}
?>

<!-- <iframe class="h-100 w-100" src="https://nuage.rislecyclette.fr/index.php/apps/calendar/embed/bCdRJopzZiGd9PHT"></iframe> -->

<?php include_once('includes/footer.php') ?>

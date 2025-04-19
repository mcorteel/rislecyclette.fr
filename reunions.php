<?php include_once('includes/header.php'); ?>

<?php

$files = array(
    '2025-04-03' => array('title' => 'Réunion de préparation de la fête du vélo du 3 avril', 'url' => 'aZZwG7WeXdFmGoP'),
    '2025-03-27' => array('title' => 'Collégiale du 27 mars', 'url' => 'GaM3o5KXJAxK3br'),
    '2025-02-12' => array('title' => 'Collégiale du 12 février', 'url' => 'DXg4EX4nAbGwyH3'),
    '2025-01-09' => array('title' => 'Collégiale du 1er janvier', 'url' => 'HAYCEbCExKZ72G8'),
    '2024-11-28' => array('title' => 'Collégiale du 28 novembre', 'url' => 'ocss7PJQNxRfex8'),
    '2024-09-06' => array('title' => 'Réunion du 6 septembre', 'url' => 'iqBW3ZikPTJHX8q'),
    '2024-05' => array('title' => 'Réunion de mai', 'url' => 'y6fHHgQsTSMoFyY'),
    '2024-03-30' => array('title' => 'Réunion du 30 mars', 'url' => 'fBgdRKDtFDpwbWW'),
    '2024-02-07' => array('title' => 'Réunion du 7 février', 'url' => 'KjcE3NNXG53JmpX'),
    '2024-01-13' => array('title' => 'Réunion du 13 janvier', 'url' => '53FLTAknWJZwGR9'),
    '2024-01-09' => array('title' => 'Réunion du 9 janvier', 'url' => '8KWJE4gE6t8SCgT'),
    '2023-12' => array('title' => 'Organisation du premier atelier de Bernay', 'url' => 'oTYBK2HnTZW5oMo'),
    '2023-11-26' => array('title' => 'Réunion du 26 novembre', 'url' => 'ekmq49wW2CEgoYy'),
    '2023-11-06' => array('title' => 'Réunion du 6 novembre', 'url' => '9CHXnxHDsb8TeKb'),
    '2023-07-06' => array('title' => 'Réunion du 6 juillet', 'url' => 'HeLzBMGrJ86qMjp'),
);

$currentYear = null;

if(($index = $_GET['s'] ?? null) && ($file = $files[$index] ?? null)) {
    include_once('vendor/Parsedown.php');
    $parsedown = new Parsedown();
    $content = file_get_contents('https://nuage.rislecyclette.fr/index.php/s/' . $file['url'] . '/download');
    ?>
    <div class="py-3 float-end position-sticky sticky-top">
        <a href="/reunions.php" class="btn btn-primary">Revenir à la liste</a>
    </div>
    <div class="py-3">
        <?= $parsedown->text($content) ?>
    </div>
    <?php
} else { ?>
    <h2 class="mt-3">Compte-rendus de réunion</h2>

    <?php foreach($files as $index => $file) {
        $date = new DateTime($index);
        
        if($date->format('Y') !== $currentYear) {
            $currentYear = $date->format('Y');
            ?><h4><?= $currentYear ?></h4><?php
        }
        
        ?>
        <div class="card mb-1">
            <a class="card-body" href="reunions.php?s=<?= $index ?>">
                <?= $file['title'] ?>
            </a>
        </div>
    <?php }
}
?>

<?php include_once('includes/footer.php') ?>

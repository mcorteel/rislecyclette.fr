<?php include_once('includes/header.php'); ?>

<?php

$files = array(
    '2025-02-01' => array('title' => "L'Éveil Normand - février 2025", 'url' => '2FtqFdGN3SW54cn'),
    '2024-11-28' => array('title' => "L'Éveil Normand - 27 novembre 2024 (2)", 'url' => 'T6KSH6M9pSHP5QN'),
    '2024-11-27' => array('title' => "L'Éveil Normand - 27 novembre 2024 (1)", 'url' => 'Ty37DDFP7Hd9naE'),
    '2024-10-14' => array('title' => "Journal municipal de Bernay - 14 octobre 2024", 'url' => 'f326LDygMT6jN7a'),
    '2024-10-01' => array('title' => "L'Éveil Normand - octobre 2024", 'url' => 'RtMejeB3HdGfnFa'),
    '2024-06-01' => array('title' => "L'Éveil Normand - juin 2024", 'url' => 'ckoyjiFrQQiPwxR'),
    '2024-05-22' => array('title' => "L'Éveil Normand - 22 mai 2024", 'url' => 'd4XSakTf69riSp7'),
    '2024-01-31' => array('title' => "L'Éveil Normand - 31 janvier 2024", 'url' => 'KnytsjWDdmC9RK2'),
    '2023-11-28' => array('title' => "L'Éveil Normand - 28 novembre 2023", 'url' => 'gJTrJAqfiy52xoq'),
    '2023-10-25' => array('title' => "L'Éveil Normand - 25 octobre 2023", 'url' => 'R55H6qNXT3w7ZzF'),
    '2023-04-01' => array('title' => "Journal municipal de Serquigny - avril 2023", 'url' => 'SCzkLQHb9xQnnHT'),
    '2023-03-30' => array('title' => "L'Éveil Normand - 22 mars 2023", 'url' => 'WqmNH6YrHx5qKFS'),
);

$currentYear = null;

if(($index = $_GET['s'] ?? null) && ($file = $files[$index] ?? null)) {
    ?>
    <div class="py-3 float-end position-sticky sticky-top">
        <a href="/presse.php" class="btn btn-primary">Revenir à la liste</a>
    </div>
    <div class="py-3 text-center">
        <a href="https://nuage.rislecyclette.fr/index.php/s/<?= $file['url'] ?>/download"><img src="https://nuage.rislecyclette.fr/index.php/s/<?= $file['url'] ?>/download" class="mw-100 rounded" /></a>
    </div>
    <?php
} else { ?>
    <h2 class="mt-3">Rislecyclette dans la presse</h2>

    <?php foreach($files as $index => $file) {
        $date = new DateTime($index);
        
        if($date->format('Y') !== $currentYear) {
            $currentYear = $date->format('Y');
            ?><h4><?= $currentYear ?></h4><?php
        }
        
        ?>
        <div class="card mb-1">
            <a class="card-body" href="presse.php?s=<?= $index ?>">
                <?= $file['title'] ?>
            </a>
        </div>
    <?php }
}
?>

<?php include_once('includes/footer.php') ?>

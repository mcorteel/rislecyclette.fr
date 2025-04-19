<?php include_once('includes/header.php') ?>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet"/>

<h2 class="mt-3">Les ateliers</h2>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Serquigny</h5>
                <p class="card-text">L'atelier de Serquigny a ouvert en mars 2023 au 9, rue Max Carpentier. Les permanences ne sont plus régulières, mais n'hésitez pas à nous contacter !</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bernay / Menneval</h5>
                <p class="card-text">L'atelier de Bernay a ouvert en janvier 2024 et propose maintenant une permanence chaque dernier samedi du mois à la Ressourcerie de Menneval, de 13h à 17h. Un nouvel atelier ouvrira fin 2025 dans Bernay !</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Les Nouvelles Coordonnées</h5>
                <p class="card-text">Notre base logistique se trouve aux Nouvelles Coordonnées (à Fontaine l'Abbé). Nous y démontons et stockons des pièces de vélo dans le but des les réutiliser dans les ateliers d'auto-réparation.</p>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div id="osm-map" style="height: 400px;"></div>
</div>

<h2 class="mt-3">...et bientôt</h2>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5 justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Beaumont-le-Roger</h5>
                <p class="card-text">Nous cherchons un local pour installer un atelier à Beaumont-le-Roger dès que possible, en partenariat avec le Club Cyclo Beaumontais !</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Brionne</h5>
                <p class="card-text">Si vous êtes un cycliste Brionnais, n'hésitez pas à nous contacter, nous voudrions aussi ouvrir un atelier chez vous !</p>
            </div>
        </div>
    </div>
</div>

<script>
var element = document.getElementById('osm-map');
var map = L.map(element);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

const markers = [
    {position: L.latLng('49.10865', '0.70975'), title: 'Atelier de Serquigny', opacity: 1},
    {position: L.latLng('49.1077706' ,'0.6140444'), title: 'Atelier de Bernay à  la Ressourcerie', opacity: 1},
    {position: L.latLng('49.10145', '0.69420'), title: 'Base logistique des Nouvelle Coordonnées', opacity: 1},
    {position: L.latLng('49.07378', '0.77211'), title: 'Futur atelier de Beaumont-le-Roger', opacity: 0.5},
    {position: L.latLng('49.19582', '0.70960'), title: 'Futur atelier de Brionne', opacity: 0.5},
];

map.setView(L.latLng('49.13145', '0.69420'), 11);

markers.forEach(marker => L.marker(marker.position, {title: marker.title, opacity: marker.opacity}).addTo(map));
</script>

<?php include_once('includes/footer.php') ?>

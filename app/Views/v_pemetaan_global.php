<div class="col-sm-12">
<div id="mapid" style="height: 600px;"></div>
</div>
<script>
var mymap = L.map('mapid').setView([37.031710, 17.297979], 1);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

<?php foreach ($global as $key => $value) { ?>
    L.marker([<?= $value['attributes']['Lat'] ?>,<?= $value['attributes']['Long_'] ?>]).addTo(mymap)
    .bindPopup("Negara : <?=  $value['attributes']['Country_Region'] ?><br>"+
    "Sembuh : <?=  $value['attributes']['Recovered'] ?><br>"+
    "Positif : <?=  $value['attributes']['Confirmed'] ?><br>"+
    "Meninggal : <?=  $value['attributes']['Deaths'] ?><br>");
<?php } ?>

</script>
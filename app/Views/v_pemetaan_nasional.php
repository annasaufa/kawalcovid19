<div class="col-sm-12">
<div id="mapid" style="height: 600px;"></div>
</div>
<script>
var mymap = L.map('mapid').setView([-2.485372, 117.752228], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

<?php foreach ($provinsi['features'] as $key => $value) { ?> 
    L.marker([<?= $value['geometry']['y'] ?>,<?= $value['geometry']['x'] ?>]).addTo(mymap)
    .bindPopup("Provinsi : <?=  $value['attributes']['Provinsi'] ?><br>"+
    "Sembuh : <?=  $value['attributes']['Kasus_Semb'] ?><br>"+
    "Positif : <?=  $value['attributes']['Kasus_Posi'] ?><br>"+
    "Meninggal : <?=  $value['attributes']['Kasus_Meni'] ?><br>");
<?php } ?>

</script>
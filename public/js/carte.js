
var villes = {
  //"Paris": { "lat": 48.852969, "lon": 2.349903 },
  /*"Brest": { "lat": 48.383, "lon": -4.500 },
  "Quimper": { "lat": 48.000, "lon": -4.100 },
  "Bayonne": { "lat": 43.500, "lon": -1.467 }*/
};

var tableauMarqueurs = [];

$(() => {

  // Select elements by their data attribute
  var $localisations= { "localisation": $('[localisation-id]') };
  var $gpsXs= { "gpsX": $('[gpsX-id]') };
  var $gpsYs= { "gpsY": $('[gpsY-id]') }; 
  var $voirBoutons = { 'voirBouton': $('[voirPlus-id]') };
  console.log($voirBoutons);
  
  for(let i = 0; i<  ($gpsXs['gpsX']).length;i++){
  
    var $localisation = $($localisations['localisation'][i]).html();
    var $gpsX= $($gpsXs['gpsX'][i]).html();
    var $gpsY= $($gpsYs['gpsY'][i]).html();
    var $voirBouton = $($voirBoutons['voirBouton'][i]).attr('href');
    console.log($voirBouton);

    console.log($localisation+' '+$gpsX+' '+$gpsY);
 
    // On crée le marqueur et on lui attribue une popup
    var marqueur = L.marker([$gpsX, $gpsY], {icon: icone}); //.addTo(carte); Inutile lors de l'utilisation des clusters
    marqueur.bindPopup("<p>"+$localisation+"</p><p>GpsX: "+$gpsX+"</p><p>GpsY: "+$gpsY+"</p><a href="+$voirBouton+" class='btn btn-info'>"+'Voir+'+"</a></p>");
    marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe
  
    // On ajoute le marqueur au tableau
    tableauMarqueurs.push(marqueur);
  }

});

// Afficher le marqueur dans la modification
$(() => {
  var modifierLocalisation = $('#passage_a_gue_localisation').text();
  var modifierGpsX = $('#passage_a_gue_gpsX').val();
  var modifierGpsY = $('#passage_a_gue_gpsY').val();
  

  var marqueur = L.marker([modifierGpsX, modifierGpsY], {icon: icone}); 
  marqueur.bindPopup("<p>"+modifierLocalisation+"</p><p>GpsX: "+modifierGpsX+"</p><p>GpsY: "+modifierGpsY+"</p>");

  marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe
  tableauMarqueurs.push(marqueur);  

});


// Afficher le marqueur dans la page show
$(() => {
  var $voirLocalisation = $('#passageLocalisation').text();
  var $voirGpsX = $('#passageGpsX').html(); 
  var $voirGpsY = $('#passageGpsY').html();  
  var $idPassage = $('#voirModifier').attr('href'); 
  console.log($idPassage);

    var marqueur = L.marker([$voirGpsX, $voirGpsY], {icon: icone}); 
    marqueur.bindPopup("<p>"+$voirLocalisation+"</p><p>GpsX: "+$voirGpsX+"</p><p>GpsY: "+$voirGpsY+"</p><a class='btn btn-success' href="+$idPassage+'>'+'Modifier'+"</a></p>");
  
    marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe
    tableauMarqueurs.push(marqueur);  
  
  });



// On initialise la carte
var carte = L.map('maCarte').setView([45.852969, 12.349903], 6);

// On charge les "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
  // Il est toujours bien de laisser le lien vers la source des données
  attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
  minZoom: 1,
  maxZoom: 20
}).addTo(carte);

var marqueurs = L.markerClusterGroup();

// On personnalise le marqueur
var icone = L.icon({
  iconUrl: "/img/site/logo.png",
  iconSize: [45, 45],
  iconAnchor: [25, 50],
  popupAnchor: [0, -50]
})


// On parcourt les différentes villes


for(ville in villes){
  // On crée le marqueur et on lui attribue une popup
  var marqueur = L.marker([villes[ville].lat, villes[ville].lon], {icon: icone}); //.addTo(carte); Inutile lors de l'utilisation des clusters
  marqueur.bindPopup("<p>"+ville+"</p>");
  marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe

  // On ajoute le marqueur au tableau
  tableauMarqueurs.push(marqueur);
}




// On regroupe les marqueurs dans un groupe Leaflet
var groupe = new L.featureGroup(tableauMarqueurs);

// On adapte le zoom au groupe

//DEBUG
//carte.fitBounds(groupe.getBounds(5).pad(0.5));

carte.addLayer(marqueurs);
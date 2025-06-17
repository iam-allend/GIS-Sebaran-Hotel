var wms_layers = [];


        var lyr_OpenStreetMap_0 = new ol.layer.Tile({
            'title': 'OpenStreetMap',
            //'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });
var format_kotabandung_1 = new ol.format.GeoJSON();
var features_kotabandung_1 = format_kotabandung_1.readFeatures(json_kotabandung_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_kotabandung_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_kotabandung_1.addFeatures(features_kotabandung_1);
var lyr_kotabandung_1 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_kotabandung_1, 
                style: style_kotabandung_1,
                popuplayertitle: "kota-bandung",
                interactive: true,
    title: 'kota-bandung<br />\
    <img src="styles/legend/kotabandung_1_0.png" /> 0 - 3<br />\
    <img src="styles/legend/kotabandung_1_1.png" /> 3 - 5<br />\
    <img src="styles/legend/kotabandung_1_2.png" /> 5 - 17<br />\
    <img src="styles/legend/kotabandung_1_3.png" /> 17 - 47<br />\
    <img src="styles/legend/kotabandung_1_4.png" /> 47 - 77<br />'
        });

lyr_OpenStreetMap_0.setVisible(true);lyr_kotabandung_1.setVisible(true);
var layersList = [lyr_OpenStreetMap_0,lyr_kotabandung_1];
lyr_kotabandung_1.set('fieldAliases', {'ID': 'ID', 'ID_Kec': 'ID_Kec', 'Kecamatan': 'Kecamatan', 'xcoord': 'xcoord', 'ycoord': 'ycoord', 'kode_prop': 'kode_prop', 'kode_kab': 'kode_kab', 'Jumlah Hotel': 'Jumlah Hotel', });
lyr_kotabandung_1.set('fieldImages', {'ID': 'TextEdit', 'ID_Kec': 'TextEdit', 'Kecamatan': 'TextEdit', 'xcoord': 'TextEdit', 'ycoord': 'TextEdit', 'kode_prop': 'TextEdit', 'kode_kab': 'TextEdit', 'Jumlah Hotel': 'Range', });
lyr_kotabandung_1.set('fieldLabels', {'ID': 'hidden field', 'ID_Kec': 'inline label - visible with data', 'Kecamatan': 'inline label - visible with data', 'xcoord': 'hidden field', 'ycoord': 'hidden field', 'kode_prop': 'inline label - visible with data', 'kode_kab': 'inline label - visible with data', 'Jumlah Hotel': 'inline label - visible with data', });
lyr_kotabandung_1.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});
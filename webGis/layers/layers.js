var wms_layers = [];

var format_KabupatenKarangasem_0 = new ol.format.GeoJSON();
var features_KabupatenKarangasem_0 = format_KabupatenKarangasem_0.readFeatures(json_KabupatenKarangasem_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KabupatenKarangasem_0 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KabupatenKarangasem_0.addFeatures(features_KabupatenKarangasem_0);
var lyr_KabupatenKarangasem_0 = new ol.layer.Vector({
  declutter: false,
  source: jsonSource_KabupatenKarangasem_0,
  style: style_KabupatenKarangasem_0,
  popuplayertitle: 'Penggunaan Air PDAM Kabupaten Karangasem Per M<sup>3</sup>',
  interactive: true,
  title:
    'Penggunaan Air PDAM Karangasem<br />\
    <img src="styles/legend/KabupatenKarangasem_0_0.png" /> 1 - 399789 m<sup>3</sup> <br />\
    <img src="styles/legend/KabupatenKarangasem_0_1.png" /> 399790 - 471040 m<sup>3</sup><br />\
    <img src="styles/legend/KabupatenKarangasem_0_2.png" /> 471041 - 725129 m<sup>3</sup><br />\
    <img src="styles/legend/KabupatenKarangasem_0_3.png" /> 725130 - 1108420 m<sup>3</sup><br />\
    <img src="styles/legend/KabupatenKarangasem_0_4.png" /> 1108421 - 3375735 m<sup>3</sup><br />\
    <p></p>',
})

lyr_KabupatenKarangasem_0.setVisible(true);
var layersList = [lyr_KabupatenKarangasem_0];
lyr_KabupatenKarangasem_0.set('fieldAliases', {'ID': 'ID', 'ID_Kec': 'ID_Kec', 'Kecamatan': 'Kecamatan', 'xcoord': 'xcoord', 'ycoord': 'ycoord', 'kode_prop': 'kode_prop', 'kode_kab': 'kode_kab', 'PDAM_2020': 'PDAM_2020', });
lyr_KabupatenKarangasem_0.set('fieldImages', {'ID': 'TextEdit', 'ID_Kec': 'TextEdit', 'Kecamatan': 'TextEdit', 'xcoord': 'TextEdit', 'ycoord': 'TextEdit', 'kode_prop': 'TextEdit', 'kode_kab': 'TextEdit', 'PDAM_2020': 'Range', });
lyr_KabupatenKarangasem_0.set('fieldLabels', {'ID': 'inline label - visible with data', 'ID_Kec': 'inline label - visible with data', 'Kecamatan': 'inline label - visible with data', 'xcoord': 'inline label - visible with data', 'ycoord': 'inline label - visible with data', 'kode_prop': 'inline label - visible with data', 'kode_kab': 'inline label - visible with data', 'PDAM_2020': 'inline label - visible with data', });
lyr_KabupatenKarangasem_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});
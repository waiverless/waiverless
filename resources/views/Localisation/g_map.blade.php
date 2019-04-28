<script src="/js/markers.json"></script>
<script>
	var mymap = L.map('mapid').setView([17.675,8.438], 6);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 18,
		attribution: 'Waiverless ',
		id: 'mapbox.streets'
	}).addTo(mymap);

	var Target = new L.LayerGroup();
	var Volunteer = new L.LayerGroup();
	
	var overlays = {
		"Jeunes filles déscolarisées": Target,
		"Volontaires": Volunteer
		
	};

	var myIcon = L.icon({
	  iconUrl:'icone.png',
	  iconRetinaUrl:'icone.png',
	  iconSize: [14, 12],
	  iconAnchor: [9, 21],
	  popupAnchor: [0, -14]
	});
	
	var LeafIcon = L.Icon.extend({
			options: {
			  iconSize: [14, 12],
			  iconAnchor: [9, 21],
			  popupAnchor: [0, -14]
			}
		});
	L.icon = function (options) {
		return new L.Icon(options);
		};
	var icone1 = new LeafIcon({iconUrl: '/icone/icone5.png'});
	var icone2 = new LeafIcon({iconUrl: '/icone/icone1.png'});
	
		
		var Targets = JSON.parse('<?=json_encode($Targets)?>');
			Targets.forEach(function(el){
				L.marker([el.latitude,el.longitude],{icon: icone1}).bindPopup("Prénom : "+el.last_name).addTo(Target)
				
			});
			
		var Volunteers = JSON.parse('<?=json_encode($Volunteers)?>');
			Volunteers.forEach(function(el){
				L.marker([el.latitude,el.longitude],{icon: icone2}).bindPopup(el.last_name).addTo(Volunteer)
				
			});
		
	

	L.control.layers(null, overlays).addTo(mymap);
	L.layerGroup().addLayer(Target,Volunteer).addTo(map);

</script>
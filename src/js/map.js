var windowWidth = (window.innerWidth||document.documentElement.clientWidth||0);
var mapCenterLeft = (windowWidth > 768)?34.638750:34.720520;
var mapCenterRight = (windowWidth > 768)?135.090704:135.261471;

function mapLordAccess(){
	google.maps.event.addDomListener(window, 'load', initializeAccess);
}

function initializeAccess() {
	var myOptions = {
		zoom: 15, /*拡大比率*/
		center: new google.maps.LatLng(mapCenterLeft, mapCenterRight),
		panControl: false,
		scaleControl: false,
		mapTypeControl: false,
		streetViewControl: true,
		overviewMapControl: false,
		scrollwheel: false,
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.TOP_RIGHT,
			style:google.maps.ZoomControlStyle.SMALL
		},
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};
	
	var map = new google.maps.Map($("#js-map").get(0),myOptions);

	var mapstyle =[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}];
	
	var mapstyleOptions = { name: "シンプル" };
	
	var myMapType = new google.maps.StyledMapType(mapstyle, mapstyleOptions);
	map.mapTypes.set('simple', myMapType);
	map.setMapTypeId('simple');
	
	var markerData = [ // マーカーを立てる場所名・緯度・経度
	    {
	        name: '花月',
	        lat: 34.638794,
	        lng: 135.098538,
	        //icon: new google.maps.MarkerImage('../common/com_map.png',new google.maps.Size(60,66),new google.maps.Point(0,0))
			icon: new google.maps.MarkerImage('http://suma-kagetsu.com/cms/wp-content/themes/kagetsu/common/com_map.png',new google.maps.Size(60,66),new google.maps.Point(0,0))
	    }/*, {
	        name: '1',
	        lat: 34.720329,
	        lng: 135.262389,
			icon: new google.maps.MarkerImage('https://principal-kobe.com/cms/wp-content/themes/principal-kobe.com/images/acc_img04.png',new google.maps.Size(22,22),new google.maps.Point(0,0))
	    }, {
	        name: '2',
	        lat: 34.719603,
	        lng: 135.263775,
			icon: new google.maps.MarkerImage('https://principal-kobe.com/cms/wp-content/themes/principal-kobe.com/images/acc_img05.png',new google.maps.Size(22,22),new google.maps.Point(0,0))
	    }, {
	        name: '3',
	        lat: 34.722059,
	        lng: 135.261302,
			icon: new google.maps.MarkerImage('https://principal-kobe.com/cms/wp-content/themes/principal-kobe.com/images/acc_img06.png',new google.maps.Size(22,22),new google.maps.Point(0,0))
	    }*/
	];
 
	/*マーカーの設置*/
	for (var i = 0; i < markerData.length; i++) {
		var markerOptions = {
			position: new google.maps.LatLng(markerData[i]['lat'], markerData[i]['lng']),
			map: map,
			icon: markerData[i]['icon'],
			title: markerData[i]['name']
		};
		var marker = new google.maps.Marker(markerOptions);
	}
}
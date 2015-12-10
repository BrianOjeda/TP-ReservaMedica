var datos = {};

datos = (function(){

	var _varPrivada = "hola";
	var local = "http://localhost:8080/ReservaMedica/ws/personas/";
	var externa = "http://localhost:8080/ReservaMedica/ws/personas/";
	
	var url = {
		urlLocal: local,
		urlExterna: externa
	};

	return url;
})();
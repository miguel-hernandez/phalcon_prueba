$(function() {
	$("#tabla_resultados").hide();
	$("#tabla_resultados").parent('div').hide();

	// La validación
	$("#form_buscador").validate({
		onclick:false, onfocusout: false, onkeypress:false, onkeydown:false, onkeyup:false,
		rules: {
			slc_estado: {required: true},
			slc_municipio: {required: true},

		},
		messages: {
			slc_estado: {required: "Seleccione"},
			slc_municipio: {required: "Seleccione"},

		},

		submitHandler: function(form) {
			PhalconPrueba.listar();
		}
	});

});


$("#btn_buscar").click(function(e){
	e.preventDefault();
	$("#form_buscador").submit();
});

$("#slc_estado").change(function(){
	$("#slc_municipio").empty().append('<option value="">Seleccione</option>');
	if($(this).val() != ''){
		PhalconPrueba.getMunicipiosxEntidad($(this).val());
	}
});


var PhalconPrueba = {

	/**
	* Actualizar listado de municipios por estado
	*
	* @param string estado para filtrar
	*/
	getMunicipiosxEntidad : (edo) => {
		$.ajax({
			url: URL_APP+"municipios_xentidad/"+edo,
			method:"GET",
			data: {},
			beforeSend: function(xhr) {
				Helpers.loading_open();
			},
		})
		.done(function( data ) {
			let array_municipios = data.array_municipios;
			let str_options = '<option value="">Seleccione</option>';

			array_municipios.forEach(function(mun) {
				str_options += "<option value='" + mun.municipio + "'>" + mun.municipio + "</option>";
			});

			$("#slc_municipio").empty();
			$("#slc_municipio").append(str_options);
		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			Helpers.error_ajax(jqXHR, textStatus, errorThrown);
		})
		.always( ()=>  {
			Helpers.loading_hide();
		});

	},

	/**
	* Listar precios de gasolina
	*
	*/
	listar : () => {
		$("#map").hide();
		$("#tabla_resultados").hide();
		$("#tabla_resultados").parent('div').hide();

		let edo = $("#slc_estado").val();
		let mun = $("#slc_municipio").val();
		let orden = $("#slc_ordenamiento").val();

		$.ajax({
			url: URL_APP+"precios_gasolina/"+edo+"/"+mun+"/"+orden,
			method:"GET",
			data: {},
			beforeSend: function(xhr) {
				Helpers.loading_open();
			},
		})
		.done(function( data ) {
			let resultados = data.results;
			let result = data.success;
			if(!result){
				Helpers.alert("No encontramos datos con sus criterios de búsqueda", "error");
				return false;
			}

			let tbody = "";
			let resultados_map = [];

			$("#resultados_conteo").empty().text(resultados.length + " resultados")

			resultados.forEach(function(item) {
				resultados_map.push([
					item.razonsocial, item.latitude, item.longitude, item.regular, item.premium, item.dieasel
				]);

				let p_regular = (item.regular == '')?'':'$'+item.regular;
				let p_premium = (item.premium == '')?'':'$'+item.premium;
				let p_diesel = (item.dieasel == '')?'':'$'+item.dieasel;

				tbody += '<tr><td>' + item.razonsocial + '</td>'+
				'<td>' + p_regular +'</td>'+
				'<td>' + p_premium +'</td>'+
				'<td>' + p_diesel +'</td>'+
				'<td>' + item.calle +'  '+  item.colonia + '</td>'+
				'</tr>';

			});

			PhalconPrueba.initMap(resultados_map);
			$("#tabla_resultados tbody").empty();
			$("#tabla_resultados tbody").append(tbody);

		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			Helpers.error_ajax(jqXHR, textStatus, errorThrown);
		})
		.always( () =>  {
			Helpers.loading_hide();
			$("#map").show();
			$("#tabla_resultados").show();
			$("#tabla_resultados").parent('div').show();
		});
	},

	/**
	* Mostrar markets de resultados: precios de gasolina
	*
	* @param Array de resultados
	*/
	initMap : (locations) => {
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			// center: new google.maps.LatLng(3.171368,101.653404),
			center: new google.maps.LatLng(locations[0][1], locations[0][2]),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var infowindow = new google.maps.InfoWindow;

		var marker, i;

		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			});

			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					let p_regular = ( locations[i][3] == '')?'':'$'+ locations[i][3];
					let p_premium = (locations[i][4] == '')?'':'$'+locations[i][4];
					let p_diesel = (locations[i][5] == '')?'':'$'+locations[i][5];
					infowindow.setContent( "<b class='font-weight-bold'>Razón social: </b>" + locations[i][0] +" <br>"
					+ " <b class='font-weight-bold'>Regular: </b> " + p_regular +" <br>"
					+ " <b class='font-weight-bold'>Premium: </b> " + p_premium +" <br>"
					+ " <b class='font-weight-bold'>Dieasel: </b> " + p_diesel +" <br>"
				);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}
};

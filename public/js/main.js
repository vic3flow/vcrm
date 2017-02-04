$(document).ready(function(){
	console.log('main.js loaded');

	//jquery json reading
	var url="json.php";
	$("#hoteles").html("");
	$.getJSON(url,function(hotel){
		$.each(hotel, function(i,hotel){
			var data =
			""
			+""+hotel.id+""
			+""+hotel.name_hotel+""
			+""+hotel.city_hotel+""
			+""+hotel.state_hotel+""
			+""+hotel.price_hotel+""
			+""+hotel.tag_hotel+""
			+""+hotel.content_hotel+""
			+"";
			//$(data).appendTo("#hoteles");
		});
	});
	//baseData = require('http://localhost/vcrm/base-data.json').toString();
	//var data = JSON.parse(baseData);

	//window.views.app = new VCRM.Views.App( $('body') );

	// h = new VCRM.Collections.Hoteles();
	window.collections.hoteles = new VCRM.Collections.Hoteles();

	window.collections.hoteles.on('add', function (model) {
		//console.log('Se ha agregado', model.toJSON());
		//Agregar nuevas vistas de articulos aqui
		var view = new VCRM.Views.Hotel({model:model});

		view.render();

		view.$el.prependTo('.hoteles');
	});

	window.collections.hoteles.fetch();

});
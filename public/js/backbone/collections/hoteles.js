VCRM.Collections.Hoteles = Backbone.Collection.extend({
	model : VCRM.Models.Hotel,
	url: '/vcrm/hoteles/',
	name: 'hoteles'
});
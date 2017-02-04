VCRM.Collections.Tours = Backbone.Collection.extend({
	model : VCRM.Models.Tour,
	url: '/tours/',
	name: 'tours'
});
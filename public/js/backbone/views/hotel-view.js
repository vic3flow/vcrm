VCRM.Views.Hotel = Backbone.View.extend({
	tagNAme : "hotel",
	className : "hoteles",
	initialize : function () {
		//debugger;

		this.template = _.template( $('hoteles-template').html() );
	},
	render : function() {

		var data = this.model.toJSON();
		// junto la data con el template;
		var html = this.template(data);

		this.$el.html( html );
	}
});
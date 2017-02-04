/* http://www.codebeerstartups.com/2013/01/routers-in-backbone-js-learning-backbone-js/
http://www.josscrowcroft.com/2012/code/htaccess-for-html5-history-pushstate-url-routing/
For Apache to send requests to index.html, where your router JS can then handle them, you need to have something like this in your .htaccess
# html5 pushstate (history) support:
<ifModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} !index
    RewriteRule (.*) index.html [L]
</ifModule>
1. Need rewrite rules in your .htaccess.
2. If you're not in root directory, may need base tag in your HTML file header.
3. Need to specify your app's base directory in your call to Backbone.history.start.
http://localhost/vcrm/backbone-router/ -- "Index route has been called.."
http://localhost/vcrm/backbone-router/show -- "Show route has been called.."
http://localhost/vcrm/backbone-router/help/news -- "Help route: page news"
http://localhost/vcrm/backbone-router/section/2/1 -- "Section route: section 2 part 1"
*/

(function(){

  window.App = {
    Models: {},
    Collections: {},
    Views: {},
    Router: {}
  };

  App.Router = Backbone.Router.extend({
    routes: {
      "": "index",
      "show(/)": "show",
      "help(/:page)(/)": "help",
      "section/:section(/)(:part)(/)": "section"
    },

    index: function(){
      $(document.body).append("Index route has been called..");
    },

    show: function(){
      $(document.body).append("Show route has been called..");
    },

    help: function(page){
      $(document.body).append("Help route has been called: page " + page);
    },

    section: function(section, part){
      $(document.body).append("Section route has been called: section " + section + " part " + part);
    }

  });

  App.Views.ListView = Backbone.View.extend({
    
    initialize: function(){
      this.initializeRouter();
    },

    initializeRouter: function () {
      this.router = new App.Router();
      Backbone.history.start({ pushState: true, root: "/vcrm/" });
    }

  })

  var view = new App.Views.ListView();

})();
/*
VCRM.Views.App = Backbone.View.extend({
	event : {
		"click .publicar" : "showForm"
	},
	initialize : function ($el) {
		// body...
		this.$el = $el;
	}
	showForm : function () {
		this.$el.find('form').show();
	}
	createHotel : function (e) {
		e.preventDefautl();

		var name = $('inut[name=name]').val();
		var price = $('inut[name=price]').val();
		var tag = $('inut[name=tag]').val();

		var data{
			"name"	: name,
			"image" : "/vcrm/public/img/img4.jpg",
			"price" : price,
			"tag" 	: tag,
			"likes"	: 0,
		};

		var model = new VCRM.Models.Hotel(data);

		model.save();
	}
});
*/
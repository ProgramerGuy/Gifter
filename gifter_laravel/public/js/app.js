(function(){
	var app = angular.module('gifter',[]);

	app.controller('GifterController',function (){
		this.gift = {
			name:'Te adoro',
			message: 'Fue un gran dia me la pase genial',
		};
	});

})();
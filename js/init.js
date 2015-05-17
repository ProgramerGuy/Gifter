(function($) {

	skel.init({
		reset: 'full',
		breakpoints: {
			global:		{ range: '*', href: 'css/style.css', containers: '60em', grid: { gutters: ['2em', 0] } },
			wide:		{ range: '-1680', href: 'css/style-wide.css' },
			normal:		{ range: '-1280', href: 'css/style-normal.css', viewport: { scalable: false } },
			narrow:		{ range: '-980', href: 'css/style-narrow.css', containers: '90%' },
			narrower:	{ range: '-840', href: 'css/style-narrower.css', containers: '90%!' },
			mobile:		{ range: '-736', href: 'css/style-mobile.css', containers: '100%!' },
			mobilep:	{ range: '-480', href: 'css/style-mobilep.css' }
		},
		plugins: {
			layers: {

				// Config.
					config: {
						mode: function() { return (skel.vars.isMobile ? 'transform' : 'position'); }
					},

				// Navigation Panel.
					navPanel: {
						animation: 'pushX',
						breakpoints: 'narrower',
						clickToHide: true,
						height: '100%',
						hidden: true,
						html: '<div data-action="navList" data-args="nav"></div>',
						orientation: 'vertical',
						position: 'top-left',
						side: 'left',
						width: 250
					},

				// Navigation Button.
					navButton: {
						breakpoints: 'narrower',
						height: '4em',
						html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span>',
						position: 'top-left',
						side: 'top',
						width: '6em'
					}

			}
		}
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$header = $('#header'),
			$banner = $('#banner');


		// Dropdowns.
			$('#nav > ul').dropotron({
				alignment: 'right'
			});

	});

})(jQuery);
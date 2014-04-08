;( function () {
	// create WolfIcons plugin
	tinymce.create( "tinymce.plugins.WolfIcons",
	{
		init: function ( ed, url )
		{	
			// set the path to the plugin
			wolf_icons_plugin_url = url;
			
			ed.addCommand( "WolfIcons", function ( a, params )
			{
				  ed.windowManager.open({
					file : url + '/popup.php', // file that contains HTML for our modal window
						width : 800 + parseInt( ed.getLang( 'button.delta_width', 0 ) ), // size of our window
						height : 600 + parseInt( ed.getLang( 'button.delta_height', 0 ) ), // size of our window
						inline : 1
					}, {
						wolf_icons_plugin_url : url
					});
			});

			ed.addButton( 'wolf_icons_button', { title : 'WolfIcons', cmd : 'WolfIcons', image: url + '/rocket.png' } );

		},
		createControl: function ( btn, e )
		{
			return null;
		},


		getInfo: function () {
			return {
				longname: 'Wolf Icons',
				author: 'Constantin Saguin',
				authorurl: 'http://wpwolf.com/about',
				infourl: 'http://www.tinymce.com/wiki.php',
				version: "1.2"
			}
		}
	});
	
	tinymce.PluginManager.add( "WolfIcons", tinymce.plugins.WolfIcons );
} )();
<?php
include_once( 'wp.php' );
$icons = array(
	'pinterest',
	'facebook',
	'twitter',
	'tumblr',
	'soundcloud',
	'skype',
	'deviantart',
	'forrst',
	'dribbble',
	'flickr',
	'vimeo',
	'lastfm',
	'stackoverflow',
	'feed',
	'css3',
	'html5',
	'chrome',
	'firefox',
	'IE',
	'opera',
	'safari',
	'googleplus',
	'github',
	'stumbleupon',
	'foursquare',
	'paypal',
	'pencil',
	'pen',
	'droplet',
	'music',
	'play',
	'camera',
	'film',
	'folder-open',
	'tag',
	'tags',
	'cart',
	'support',
	'phone',
	'envelope',
	'pushpin',
	'clock',
	'calendar',
	'print',
	'settings',
	'home',
	'image',
	'images',
	'camera2',
	'bullhorn',
	'books',
	'library',
	'file',
	'profile',
	'ticket',
	'location',
	'screen',
	'laptop',
	'mobile',
	'mobile2',
	'tablet',
	'spinner',
	'spinner2',
	'spinner3',
	'zoomin',
	'zoomout',
	'expand',
	'reply',
	'forward',
	'bubbles',
	'bubble',
	'user',
	'users',
	'quotes-left',
	'search',
	'binoculars',
	'key',
	'lock',
	'unlocked',
	'cogs',
	'cog',
	'bug',
	'stats',
	'glass',
	'mug',
	'rocket',
	'meter',
	'fire',
	'lab',
	'remove',
	'truck',
	'plugin',
	'list',
	'numbered-list',
	'menu',
	'tree',
	'cloud-download',
	'cloud-upload',
	'earth',
	'link',
	'flag',
	'attachment',
	'eye',
	'bookmark',
	'heart',
	'heart2',
	'smiley',
	'sad',
	'tongue',
	'happy',
	'shocked',
	'confused',
	'neutral',
	'wondering',
	'wink',
	'cool',
	'grin',
	'angry',
	'evil',
	'info',
	'warning',
	'checkmark',
	'close',
	'minus',
	'plus',
	'enter',
	'exit',
	'volume-medium',
	'loop',
	'loop2',
	'shuffle',
	'loop3',
	'crop',
	'console',
	'share',
	'google-drive',
	'youtube',
	'picassa',
	'steam',
	'wordpress',
	'joomla',
	'yahoo',
	'apple',
	'code',
	'embed',
	'newtab',
	'file-pdf',
	'file-word',
	'yelp',
	'file-zip',
	'file-xml',
	'file-css',
	'file-excel',
	'delicious',
	'font',
	'thumbs-up',
	'thumbs-down',
	'camera-retro',
	'star',
	'star-empty',
	'youtube2',
	'windows',
	'android',
	'dropbox',
	'anchor',
	'euro',
	'gbp',
	'dollar',
	'yen',
	'shield',
	'linkedin',
	'coffee',
	'code-fork',
	'magic',
	'credit',
	'legal',
	'medkit',
	'beer',
	'sun',
	'moon',
	'money',
	'right-arrow',
	'top-arrow',
	'bottom-arrow',
	'left-arrow',
	'spotify',
	'behance',
	'digg',
	'evernote',
	'app-store',
	'500px',
	'amazon',
	'grooveshark',
	'myspace',
	'zerply',
	'amp',
	'quote-top',
	'quote-bottom',
	'instagram',
	'diamond',
);
$error = __( 'Please select an icon', 'wolf' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Icons</title>
<link rel="stylesheet" href="<?php echo esc_url( admin_url( 'css/wp-admin.min.css' ) ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( admin_url( 'css/colors.min.css' ) ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( includes_url( 'css/dashicons.min.css' ) ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( plugins_url( 'wolf-icons/assets/css/icon-font.min.css' ) ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( plugins_url( 'wolf-icons/tinymce/css/popup.css' ) ); ?>">
<script type='text/javascript' src="<?php echo esc_url( includes_url( 'js/jquery/jquery.js' ) ); ?>"></script>
<script type='text/javascript' src="<?php echo esc_url( includes_url( 'js/tinymce/tiny_mce_popup.js' ) ); ?>"></script>
<script>

var ButtonDialog = {
	
	local_ed : 'ed',
	init : function(ed) {
		ButtonDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	
	insert : function insertButton( ed ) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand( 'mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var icon = jQuery( '.unique:checked' ).val(),
			scale = jQuery( '#scale' ).val(),
			type = jQuery( '#type' ).val(),
			align = jQuery( '#align' ).val(),
			url = jQuery( '#url' ).val(),
			target = jQuery( '#target' ),
			spin = jQuery( '#spin' ),
			CSSclass = jQuery( '#CSSclass' ).val(),
			style = jQuery( '#style' ).val(),
			output = '';
		
		// setup the output of our shortcode
		output = '[wolf_icon';
			
			output += ' name="' + icon + '"';
			output += ' scale="' + scale + '"';
			output += ' type="' + type + '"';
			output += ' align="' + align + '"';
			
			/* Link */
			if ( url ) {
				output += ' url="' + url + '"';

				if ( target.is(":checked")) {
					output += ' target="_blank"';
				}
			}

			if ( spin.is( ':checked' ) ) {
				output += ' spin="true"';
			}

			if ( CSSclass )
				output += ' class="' + CSSclass + '"';

			if ( style )
				output += ' style="' + style + '"';

		output += ']';

		ed.selection.setContent(output);

		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add( ButtonDialog.init, ButtonDialog );
</script>
</head>
<body>
<div id="wolf-popup">
	<form>
		<div id="wolf-icon-search">
			<label for="wis"><?php _e( 'Search', 'wolf' ); ?></label>
			<input type="text" name="wis" id="wis">
		</div>
		<div id="wolf-icon-list">
			<?php foreach( $icons as $icon ): ?>
				<div class="wolf-icon-box" data-name="<?php echo $icon; ?>">
					<label for="unique">
						<i style="width:18px" class="wolf-icon-<?php echo $icon; ?> wolf-icon-2x"></i>
						<input class="unique" type="checkbox" value="<?php echo $icon; ?>">
					</label>
				</div>
			<?php endforeach; ?>
		</div>
		<h3 style="color:#0d0d0d; margin-bottom:10px;"><?php _e( 'Basic Settings', 'wolf' ); ?> : </h3>
		<div class="wolf-field">
			<label><?php _e( 'Scale', 'wolf' ); ?> : </label>
			<select name="scale" id="scale">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</div>

		<div class="wolf-field">
			<label><?php _e( 'Type', 'wolf' ); ?> : </label>
			<select name="type" id="type">
				<option value="normal"><?php _e( 'Normal', 'wolf' ); ?></option>
				<option value="round"><?php _e( 'Round background', 'wolf' ); ?></option>
				<option value="square"><?php _e( 'Square background', 'wolf' ); ?></option>
			</select>
		</div>

		<div class="wolf-field">
			<label><?php _e( 'Align', 'wolf' ); ?> : </label>
			<select name="align" id="align">
				<option value="none"><?php _e( 'None', 'wolf' ); ?></option>
				<option value="left"><?php _e( 'Left', 'wolf' ); ?></option>
				<option value="right"><?php _e( 'Right', 'wolf' ); ?></option>
				<option value="center"><?php _e( 'Center', 'wolf' ); ?></option>
			</select>
		</div>
		
		<div class="wolf-field">
			<label><?php _e( 'Spinning (for loader)', 'wolf' ); ?> : </label>
			<input id="spin" type="checkbox">
		</div>

		<h3 style="color:#0d0d0d; margin-bottom:10px;"><?php _e( 'Link Settings', 'wolf' ); ?> : </h3>

		<div class="wolf-field">
			<label><?php _e( 'Link URL (optional)', 'wolf' ); ?> : </label>
			<input id="url" type="text">
		</div>
		<div class="wolf-field">
			<label><?php _e( 'Open link in a new tab (if the icon is linked to an URL)', 'wolf' ); ?> : </label>
			<input id="target" type="checkbox">
		</div>

		<h3 style="color:#0d0d0d; margin-bottom:10px;"><?php _e( 'Advanced Settings', 'wolf' ); ?> : </h3>
		<div class="wolf-field">
			<label><?php _e( 'CSS Class', 'wolf' ); ?> : </label>
			<input id="CSSclass" type="text">
		</div>
		<div class="wolf-field">
			<label><?php _e( 'Styles', 'wolf' ); ?> : </label>
			<input id="style" type="text">
		</div>

		<p class="submit">
			<a href="javascript:ButtonDialog.insert(ButtonDialog.local_ed);" class="button-primary">
				<?php _e( 'Insert in post', 'wolf' ); ?>
			</a>
		</p>
	</form>
</div>
<script type="text/javascript">
;( function( $ ) {
	
	var $unique = $( 'input.unique' );
	$unique.click( function() {
		$unique.filter( ':checked' ).not( this ).removeAttr( 'checked' );
	} );

	$( '.submit a' ).click (function() {
		if ( ! $( '.unique:checked' ).val() ) {
			alert( '<?php echo $error; ?>' );
			return false;
		}
	} );

	/* Search */
	$( 'input#wis' ).keyup( function() {

		var valThis = $( this ).val().toLowerCase();
		// console.log( valThis );
		$( '#wolf-icon-list ').find( '.wolf-icon-box' ).each( function() {
			var text = $( this ).data( 'name' ).toLowerCase();
			// console.log( text );
			( text.indexOf( valThis ) == 0 ) ? $( this ).show() : $( this ).hide();            
		} );
	} );
		
})( jQuery );
</script>
</body>
</html>
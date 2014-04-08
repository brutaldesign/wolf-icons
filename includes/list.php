<?php
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
?>

<style type="text/css">
	.box{
		width: 20%;
		display:inline-block;
		height : 35px;
		line-height: 35px;
	}
</style>
<div class="wrap">
	<div id="icon-themes" class="icon32"></div>
	<h2><?php _e( 'Icons List', 'wolf' ); ?></h2>
	<img src="<?php echo WOLF_ICONS_URL ?>/img/editor.jpg" alt="editor button">
	<h3><?php _e('You can use the Icon shortcode generator in your text editor.', 'wolf'); ?></h3>
	<p><?php _e('To use the icon shortcodes in your posts and pages, you can use the following shortcode using the icon\'s name in the name atrribute e.g:', 'wolf'); ?></p>
	<p><code>[wolf_icon name="twitter"]</code></p>
	<p><a href="#instructions"><?php _e('more details', 'wolf'); ?></a></p>
	<p>&nbsp;</p>
	<h3><?php _e('Icon list', 'wolf'); ?></h3>
	<?php foreach ( $icons as $icon ) : ?>
	<span class="box">
		<span aria-hidden="true" class="wolf-icon-<?php echo $icon; ?>"></span>
			&nbsp;<?php echo $icon; ?>
		</span>
	</span>
	<?php endforeach; ?>
	<hr>
	<div id="instructions"></div>
	<h3>Shortcode</h3>
	<ol>
		<li>
			<p><?php _e('To use the icon shortcodes in your posts and pages, you can use the shortcode:', 'wolf'); ?></p>
			<p><code>[wolf_icon name="twitter"]</code></p>
			<span class="wolf-icon-twitter"></span>
		</li>
		<li>
			<p><?php _e('You can optionally pass many optional attributes to your shortcode:', 'wolf'); ?></p>
			<p><code>[wolf_icon name="twitter" scale="2" type="normal|square|round" align="none|left|right|center" url="http://your/url.com" target="_blank" class="your-class" spin="true|false" style="background:#333333; color:#ffffff"]</code></p>
			<a href="#"><span class="wolf-icon-twitter wolf-icon-2x wolf-icon-type-round" style="background:#333333; color:#ffffff"></a></span>
		</li>
	</ol>
	<p>&nbsp;</p>
	<h3>HTML</h3>
	<ol>
		<li>
			<p><?php _e('To use the icon shortcodes as HTML snippets in your templates, add the <code>wolf-icon-</code> prefix  to the icon name in your tag class:', 'wolf'); ?></p>
			<p><code>&lt;span class="wolf-icon-twitter"&gt;&lt;/span&gt;</code></p>
			<span class="wolf-icon-twitter"></span>
		</li>
		<li>
			<p><?php _e('To add a scale value (2 to 10):', 'wolf'); ?></p>
			<p><code>&lt;span class="wolf-icon-twitter wolf-icon-2x"&gt;&lt;/span&gt;</code></p>
			<span class="wolf-icon-twitter wolf-icon-2x"></span>
			<span class="wolf-icon-twitter wolf-icon-3x"></span>
			<span class="wolf-icon-twitter wolf-icon-4x"></span>
		</li>
		<li>
			<p><?php _e('To add a background:', 'wolf'); ?></p>
			<p><code>&lt;span class="wolf-icon-twitter wolf-icon-type-round" style="background:#333333; color:#ffffff"&gt;&lt;/span&gt;</code></p>
			<p><code>&lt;span class="wolf-icon-twitter wolf-icon-type-square" style="background:#333333; color:#ffffff"&gt;&lt;/span&gt;</code></p>
			<span class="wolf-icon-twitter wolf-icon-2x wolf-icon-type-round" style="background:#333333; color:#ffffff"></span>
			&nbsp;
			<span class="wolf-icon-twitter wolf-icon-2x wolf-icon-type-square" style="background:#333333; color:#ffffff"></span>
		</li>
		
		<li>
			<p><?php _e('To make the icon spin:', 'wolf'); ?></p>
			<p><code>&lt;span class="wolf-icon-spinner  wolf-icon-spin"&gt;&lt;/span&gt;</code></p>
			<span class="wolf-icon-spinner wolf-icon-2x wolf-icon-spin"></span>&nbsp;
			<span class="wolf-icon-spinner-2 wolf-icon-2x wolf-icon-spin"></span>&nbsp;
			<span class="wolf-icon-spinner-3 wolf-icon-2x wolf-icon-spin"></span>
		</li>
	</ol>
</div><!--  .wrap-->
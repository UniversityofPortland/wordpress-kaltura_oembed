INSTRUCTIONS:

modify the kaltura-embed.php file before installing to webdir/wordpress/wp-content/plugins folder

You will need to add your own mediaspace URL here which may only require you to change the **yoursitehere** portion if you have a hosted instance.

 wp_oembed_add_provider( 'https://**yoursitehere**.mediaspace.kaltura.com/id/*', 'http://**yoursitehere**.mediaspace.kaltura.com/oembed/', false );
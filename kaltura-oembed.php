<?php
/*
	Plugin Name: Kaltura Enable oEmbed
	Plugin URI:
	Description: Enable Kaltura Mediaspace oEmbed within your site.
	Version: 1.0
	Author: Tony Box
	License: GPL2
*/

add_action( 'init', 'kaltura_add_oembed_handlers');

function kaltura_add_oembed_handlers(){
    wp_oembed_add_provider( 'https://uportland.mediaspace.kaltura.com/id/*', 'http://uportland.mediaspace.kaltura.com/oembed/', false );
}

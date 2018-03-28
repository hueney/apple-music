<?php

/*
	Plugin Name: Apple Music
	Plugin URI: https://github.com/alleyinteractive/apple-music
	Description: Search Apple Music and embed content in your site.
	Version: 0.0.1
	Author: Alley Interactive
	Author URI: http://www.alleyinteractive.com/
*/
/*  This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


namespace Apple_Music;

define( __NAMESPACE__ . '\PATH', __DIR__ );

define( 'PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) ); // works?

/**
 * Current version of Fieldmanager.
 */
define( 'APPLE_MUSIC_VERSION', '1.1.0-beta.1' );

/**
 * Filesystem path to Fieldmanager.
 */
//define( 'FM_BASE_DIR', dirname( __FILE__ ) );


//require_once PATH . '/php/autoload.php';

require_once PATH . '/php/class-api.php';
require_once PATH . '/php/class-shortcode.php';
require_once PATH . '/php/class-settings.php';
require_once PATH . '/php/class-media-modal.php';


//add_action( 'after_setup_theme', [ __NAMESPACE__ . '\Apple_Music', 'instance' ] );

add_action( 'after_setup_theme', function () {
	new \Apple_Music;
	new Shortcode;
	new Settings;
} );

add_action( 'plugins_loaded', __NAMESPACE__ . '\myplugin_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function myplugin_load_textdomain() {
	load_plugin_textdomain( 'apple-music', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

<?php
/**
 * OOP Sandbox Plugin
 *
 * @package     KnowTheCode\OOPSandbox
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: OOP Sandbox Plugin
 * Plugin URI:  https://KnowTheCode.io
 * Description: OOP Sandbox test plugin
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://KnowTheCode.io
 * Text Domain: journals
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace KnowTheCode\OOPSandbox;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

function autoload() {
	include( __DIR__ . '/src/class-user.php' );
}

function launch() {
	autoload();

	$config = array(
		'tonya' => array(
			'user_id'    => 1,
			'first_name' => 'Tonya',
			'last_name'  => 'Mork',
			'email'      => 'hellofromtonya@knowthecode.io',
			'twitter'    => '@hellofromtonya',
			'facebook'   => '',
		),
		'sally' => array(
			'user_id'    => 2,
			'first_name' => 'Sally',
			'last_name'  => 'Jones',
			'email'      => 'sally.jones@gmail.com',
			'twitter'    => '@sallyjones',
			'facebook'   => '',
		),
	);

	echo '======== Tonya\'s object ==========';
	$tonya = new User( $config['tonya'] );

	echo '======== Sally\'s object ==========';
	$sally  = new User( $config['sally'] );

}

launch();
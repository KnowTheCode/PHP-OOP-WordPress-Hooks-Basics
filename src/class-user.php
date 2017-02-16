<?php

/**
 * User Blueprint
 *
 * @package     KnowTheCode\OOPSandbox
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\OOPSandbox;

class User {

	public static $number_of_users = 0;

	public $user_id;
	public $first_name;
	protected $last_name;
	protected $email;
	protected $twitter;
	protected $facebook;
	protected $bio;

	public function __construct( array $config ) {

		foreach ( $config as $property => $value ) {
			$this->{$property} = $value;
		}

		self::$number_of_users++;
	}

	public static function getNumberOfUsers() {
		return self::$number_of_users;
	}

	// this is an object method
	public function getProperty( $property ) {
		return $this->{$property};
	}

	public function create_new() {

	}

	// update profile
	public function update_profile() {
		$this->change_password();
	}

	// change password
	protected function change_password() {
		d( 'change password for ' . $this->first_name );
	}

	// is the user logged in
	public function is_logged_in() {

	}

	// check access rights
	public function has_access( $access_to_what ) {

	}

	// save to database
	protected function save_to_database() {

	}

}

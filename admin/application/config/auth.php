<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'file',
	'hash_method'  => 'sha256',
	'hash_key'     => 'o24091996',
	'lifetime'     => 36000,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'Admin' => '8e06544cc4b5476d2241a7240208421472b62611bd12c1c67c4d79c06c711009', 
	),

);
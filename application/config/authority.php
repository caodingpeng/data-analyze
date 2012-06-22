<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'rule0'=>array(
		'driver'       => 'example',
		'hash_method'  => 'sha256',
		'hash_key'     => 'dataanalytics',
		'lifetime'     => 1209600,
		'session_type' => Session::$default,
		'session_key'  => 'auth_user',
	)
);

<?php

return array(

	'default' => 'sqlite',

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => storage_path().'/database/local.sqlite',
			'prefix'   => '',
		),

		'mysql' => array(
			'username'  => '',
			'password'  => '',
			'prefix'    => '',
		),

		'pgsql' => array(
			'username' => '',
			'password' => '',
			'prefix'   => '',
			'schema'   => 'public',
		),

	),

);

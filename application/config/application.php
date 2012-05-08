<?php

// Application settings
return array(

	// Error handling
	'error' => array(
		'ignore' => array(E_NOTICE, E_USER_NOTICE, E_DEPRECATED, E_USER_DEPRECATED),
		'detail' => false,
		'log' => false
	),

	// Show database profile
	'debug' => false
);

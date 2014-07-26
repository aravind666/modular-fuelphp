<?php
return array(
	'_root_'  => 'specific/welcome/index',  // The default route
	'_404_'   => 'specific/welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('specific/welcome/hello', 'name' => 'hello'),
);
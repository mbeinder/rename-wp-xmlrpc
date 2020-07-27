<?php

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mbeinder/rename-wp-xmlrpc/',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('release');

include("rename-xmlrpc.php");


?>

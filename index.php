<?php

/*
Plugin Name: Rename XMLRPC
Plugin URI: https://onairmarc.com
Description: Customized version of Rename XMLRPC from Jorge Bernal. Make XML-RPC work if you rename the file. Some hosts block access to xmlrpc.php file making it impossible to use
Author: Marc Beinder and Jorge Bernal
Version: 0.1
Author URI: https://onairmarc.com
*/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mbeinder/rename-wp-xmlrpc/',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

include("rename-xmlrpc.php");


?>

<?php
/*
Plugin Name: Rename XMLRPC
Plugin URI: http://wordpress.org/extend/plugins/rename-xml-rpc/
Description: Make XML-RPC work if you rename the file. Some hosts block access to xmlrpc.php file making it impossible to use
Author: Jorge Bernal
Version: 1.1
Author URI: http://koke.me
*/

//Create File Copy
$file = __DIR__ . "../../../xmlrpc.php";
$rpc = file_get_contents("$file");
$putdir = __DIR__ . "../../../xmlrpc2.php";
file_put_contents("$putdir", "$rpc");

remove_action('wp_head','rsd_link');
function renamed_rsd_link() {
        $renamed_xml_rpc_filename = 'xmlrpc2.php'; //CHANGE THIS poiting to the renamed file
        echo '<link rel="EditURI" type="application/rsd+xml" title="RSD" href="' . get_bloginfo('wpurl') . "/$renamed_xml_rpc_filename?rsd\" />\n";
}
add_action( 'wp_head', 'renamed_rsd_link' );

function rx_site_url( $url, $path, $orig_scheme, $blog_id ) {
  if ( defined( 'XMLRPC_REQUEST' )  && $path == 'xmlrpc.php' ) {
    return preg_replace( '/xmlrpc.php$/', basename( $_SERVER['PHP_SELF'] ), $url );
  } else {
    return $url;
  }
}
add_filter( 'site_url', 'rx_site_url', 10, 4 );
?>

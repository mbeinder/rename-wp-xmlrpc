<?php
$file = __DIR__ . "/../../../xmlrpc.php";
$rpc = file_get_contents("$file");
$putdir = __DIR__ . "/../../../xmlrpc2.php";
file_put_contents("$putdir", "$rpc");
?>

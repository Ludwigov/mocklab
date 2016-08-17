<?php

define ('DB_SERVER', "eu-cdbr-azure-west-d.cloudapp.net");
define ('DB_USERNAME'), "b59e1a30e808bc&db");
define ('DB_PASSWORD'), "4b543517");
define ('DB_DATABASE'), "DB_Ludwig");

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
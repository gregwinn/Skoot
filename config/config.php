<?php
// Database Settings
$HOST_w = "localhost"; // <--- 99% chance you will not need to change this
$USER_w = "root"; // <--- DB Username
$PASS_w = ""; // <--- DB Password
$DATAB_w = ""; // <--- The Database name

// Time Zone Settings for PHP 5.3 users
$TimeZone = 'America/Chicago';


// ========================================
// DO NOT EDIT ============================
define('DBHOST', $HOST_w);
define('DBUSER', $USER_w);
define('DBPASS', $PASS_w);
define('DB', $DATAB_w);
date_default_timezone_set($TimeZone);
require 'database.php';
?>
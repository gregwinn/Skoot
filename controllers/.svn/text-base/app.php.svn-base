<?php
define('LONG_VERSION_NUMBER', '2.5.1');
define('LONG_VERSION_NUMBER_FLAT', '251');
if ($handle = opendir('controllers')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "app.php" && $file != ".svn") {
            require_once($file);
        }
    }
    closedir($handle);
}
?>
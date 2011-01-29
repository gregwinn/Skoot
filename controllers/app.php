<?php
if ($handle = opendir('controllers')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "app.php" && $file != ".svn") {
			// Un comment below if you would like to include all controllers
            //require_once($file);
        }
    }
    closedir($handle);
}
?>
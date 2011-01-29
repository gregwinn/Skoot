<?php
session_start();
require 'framework/nicedog.php';
require 'config/config.php';
require 'config/routes.php';
require 'models/auto_load.php';
require 'controllers/app.php';
run();
?>
<?php

ini_set('error_reporting', E_ALL | E_STRICT);
$testDir = dirname(__FILE__);
$codeDir = dirname($testDir) . DIRECTORY_SEPARATOR . 'src';

set_include_path($testDir . PATH_SEPARATOR . $codeDir . PATH_SEPARATOR . get_include_path());

require_once 'PHPUnit/Autoload.php';
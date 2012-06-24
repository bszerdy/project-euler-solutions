<?php

require_once '/opt/local/etc/Symfony/Component/ClassLoader/UniversalClassLoader.php';
require_once '/opt/local/lib/php/PHPUnit/Framework/Assert/Functions.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
	'MathFunctionsBundle' => __DIR__ .'/../src',
	'SolutionsBundle' => __DIR__.'/../src',
        'Utility' => __DIR__.'/../src',
));

$loader->register();

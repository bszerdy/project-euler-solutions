<?php

require_once '/Users/threadhack/pear/share/pear/Symfony/Component/ClassLoader/UniversalClassLoader.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
	'MathFunctionsBundle' => __DIR__ .'/../src',
	'SolutionsBundle' => __DIR__.'/../src'
));

$loader->register();

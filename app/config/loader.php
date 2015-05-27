<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->pluginsDir,
        $config->application->formsDir,
    )
)->register();

$vendorDir = $config->application->vendorsDir;

/**
 * register NameSpace
 */

$loader->registerNamespaces(
	[
		// system
		'App\\Controllers'				=> $config->application->controllersDir,
		'App\\Forms'					=> $config->application->formsDir,

		// vendor
		'Phalcon'						=> $vendorDir . '/phalcon/devtools/scripts',
		'Symfony\\Component\\Yaml'		=> $vendorDir . '/symfony/yaml/symfony/var-dumper/Symfony/Component/Yaml/',
		'Symfony\\Component\\VarDumper'	=> $vendorDir . 'symfony/var-dumper/Symfony/Component/VarDumper/',
		'Phalcon\\Ext\\Mailer' 			=> $vendorDir . '/phalcon-ext/mailer/src',
	]
)->register();

require_once $config->application->helpersDir . '/utilities.php';

// require_once __DIR__ . '/../../vendor/autoload.php';

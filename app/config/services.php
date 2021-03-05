<?php
/**
 * Services are globally registered in this file
 *
 * @var \Phalcon\Config $config
 */

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Manager;
use Phalcon\Mvc\Collection\Manager as CollectionManager;


/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

$di->set('router', function () {
	// echo APP_PATH; die();
	$ruta = APP_PATH . '/app/config/routes.php';
	// echo $ruta; die();
  return include $ruta;
});


$di->setShared('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});

/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);



    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);

            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            ));

            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));

    return $view;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () use ($config) {
		$dbConfig = $config->database->mysql->toArray();
    $class = 'Phalcon\Db\Adapter\Pdo\\' . $dbConfig['adapter'];
    $params = [
        'host'     => $dbConfig['host'],
        'username' => $dbConfig['username'],
        'password' => $dbConfig['password'],
        'dbname'   => $dbConfig['dbname'],
        'charset'  => $dbConfig['charset']
    ];
    $connection = new $class($params);

    return $connection;
});

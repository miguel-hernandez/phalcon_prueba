<?php

// Create the router
$router = new \Phalcon\Mvc\Router();


$router->removeExtraSlashes(true);

$router->setDefaultController('index');
$router->setDefaultAction('index');


//Define a route
$router->add(
		"/precios_gasolina/{estado}/{municipio}/{orden}",
    array(
        "controller" => "preciosgasolina",
        "action"     => "index",
    )
);

$router->add(
		"/municipios_xentidad/{estado}",
    array(
        "controller" => "index",
        "action"     => "getMunicipiosxEntidad",
    )
);


return $router;

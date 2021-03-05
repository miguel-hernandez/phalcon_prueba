<?php
// var_dump(APP_PATH); die();
defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(

   'database'    => array(
            'mysql' => array(
                'adapter'     => 'Mysql',
                'host'     => 'localhost',
                'username' => 'root',
                'password' => '',
                'dbname'   => 'phalcon_prueba_db',
                'charset'   => 'utf8',
            )
        ),
      /*  */
      //////-----------------------
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'baseUri'        => 'http://localhost/phalcon_prueba/',
    )
));

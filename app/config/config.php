<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => 'root',
        'dbname'      => 'phalcon-dev',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'migrationsDir'  => __DIR__ . '/../../app/migrations/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'vendorsDir'      => __DIR__ . '/../../vendor/',
        'formsDir'        => __DIR__ . '/../../app/forms/',
        'helpersDir'     => __DIR__ . '/../../app/helpers/',
        'baseUri'        => '/',
    ),
    'mail' => [
        'driver'     => 'smtp',
        'host'       => 'smtp.gmail.com',
        'port'       => 465,
        'encryption' => 'ssl',
        'username'   => 'example@gmail.com',
        'password'   => 'xxxx',
        'from'       => [
                'email' => 'example@gmail.com',
                'name'  => 'YOUR FROM NAME'
            ]
        ],
));

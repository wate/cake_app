<?php
return [
    'debug' => false,
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'app_staging',
            'password' => 'app_staging_P455w0rd',
            'database' => 'app_staging',
            //'encoding' => 'utf8mb4',
        ],
    ],
    'Error' => [
        // 'errorLevel' => E_ALL,
        // 'exceptionRenderer' => 'Cake\Error\ExceptionRenderer',
        // 'skipLog' => [],
        // 'log' => true,
        'trace' => false,
    ],
];

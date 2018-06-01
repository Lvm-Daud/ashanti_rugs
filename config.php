<?php

return [
    'database' => [
        'connection'      => 'mysql:host=127.0.0.1',
        'dbname'    => 'ashantirugs',
        'dbuser'    => 'root',
        'dbpass'    => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];